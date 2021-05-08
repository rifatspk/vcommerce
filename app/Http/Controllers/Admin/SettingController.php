<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Setting;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Traits\UploadAble;

class SettingController extends BaseController
{

    use UploadAble;

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $this->setPageTitle('Setting', 'Manage Settings');
        return view('admin.settings.index');
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function update(Request $request)
    {
        if ($request->has('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

            if (config('settings.site_logo') != null) {
                $this->deleteOne(config('settings.site_logo'));
            }
            $logo = $this->uploadOne($request->file('site_logo'), 'img');
            Setting::set('site_logo', $logo);
        } elseif ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

            if (config('settings.site_favicon') != null) {
                $this->deleteOne(config('settings.site_favicon'));
            }
            $favicon = $this->uploadOne($request->file('site_favicon'), 'img');
            Setting::set('site_favicon', $favicon);
        } else {

            $keys = $request->except('_token');

            foreach ($keys as $key => $value) {
                Setting::set($key, $value);
            }
        }
        return $this->responseRedirectBack('Settings updated successfully.', 'success');
    }
}
