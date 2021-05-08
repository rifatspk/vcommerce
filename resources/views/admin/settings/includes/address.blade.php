<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Address Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="location">Location</label>
                <input class="form-control" type="text" placeholder="Enter site name" id="location" name="location"
                    value="{{ config('settings.location') }}" />
            </div>
            <div class="form-group">
                <label class="control-label" for="phone">Phone Number</label>
                <input class="form-control" type="text" placeholder="Enter site title" id="phone" name="phone"
                    value="{{ config('settings.phone') }}" />
            </div>
            <div class="form-group">
                <label class="control-label" for="email_address">Email</label>
                <input class="form-control" type="email" placeholder="Enter store default email address"
                    id="email_address" name="email_address" value="{{ config('settings.email_address') }}" />
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update
                        Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>