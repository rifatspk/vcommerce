<?php

namespace App\Traits;



trait FlashMessages
{

    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $errorMessages = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $infoMessages = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $successMessages = [];
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected $warningMessages = [];
    /**
     * Undocumented function
     *
     * @param [type] $message
     * @param [type] $type
     * @return void
     */
    protected function setFlashMessage($message, $type)
    {
        $model = 'infoMessage';

        switch ($type) {
            case 'info': {
                    $model = 'infoMessages';
                }
                break;
            case 'error': {
                    $model = 'errorMessages';
                }
                break;
            case 'success': {
                    $model = 'successMessages';
                }
                break;
            case 'warning': {
                    $model = 'warningMessages';
                }
                break;
        }


        if (is_array($message)) {
            foreach ($message as $key => $value) {
                array_push($this->$model, $value);
            }
        } else {
            array_push($this->$model, $message);
        }
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function getFlashMessage()
    {
        return [
            'error' => $this->errorMessages,
            'info' => $this->infoMessages,
            'success' => $this->successMessages,
            'warning' => $this->warningMessages,
        ];
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function showFlashMessages()
    {
        session()->flash('error', $this->errorMessages);
        session()->flash('info', $this->infoMessages);
        session()->flash('success', $this->successMessages);
        session()->flash('warning', $this->warningMessages);
    }
}
