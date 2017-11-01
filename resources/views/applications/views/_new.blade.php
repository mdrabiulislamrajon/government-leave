<form class="form" method="POST" action="{{ url('apply') }}" style="margin-top: 25px;padding-bottom: 10px;">
    {{ csrf_field() }}
    <div class="row clearfix">
        <div class="form-group{{ $errors->has('reason')  ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="reason">Leave Reason<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="reason"  class="form-control" id="reason"  value="{{ old('reason') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'reason'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="start_date">Start Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="start_date" class="form-control datepicker" id="start_date" value="{{ old('start_date') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'start_date'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="end_date">End Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="end_date" class="form-control datepicker" id="end_date" value="{{ old('end_date') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'end_date'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('no_of_days') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="no_of_days">Days<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select name="no_of_days" id="" class="form-control">
                    <option value="">Select Leave Date</option>
                    @for($i = 1; $i < 31; $i++)
                        <option value="{{ $i }}" {{ old('no_of_days') == $i ? 'selected' : '' }}>
                            {{ entobn($i) }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'no_of_days'])
            </div>
        </div>

    </div>

    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="type_id">Leave Type<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select name="type_id" id="" class="form-control">
                    <option value="">Leave Status</option>
                    @foreach(config('leave.type') as $i => $value)
                        <option value="{{ $i }}" {{ old('type_id') == $i ? 'selected' : '' }}>
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'type_id'])
            </div>
        </div>
    </div>

    <div class="row clearfix " style="margin-top: 25px;" >
        <div class="form-group{{ $errors->has('vacation_address')  ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="vacation_address">Vacation Address<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="vacation_address"  class="form-control" id="vacation_address"  value="{{ old('vacation_address') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'vacation_address'])
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <i class="fa fa-times-circle-o"></i> Delete
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Add Leave
            </button>
        </div>
    </div>
</form>