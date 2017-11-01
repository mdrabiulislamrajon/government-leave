<form class="form" method="POST" action="{{ url('settings/leave') }}" style="margin-top: 25px;padding-bottom: 10px;">
    {{ csrf_field() }}
    <div class="row clearfix">
        <div class="form-group{{ $errors->has('title')  ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="name">Leave Reason<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="title"  class="form-control" id="title"  value="{{ old('title') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'title'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('from_date') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="from_date">Start Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="{{ old('from_date') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'from_date'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('to_date') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="to_date">End Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="to_date" class="form-control datepicker" id="to_date" value="{{ old('to_date') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'to_date'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="year">Leave Year<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select name="year" id="" class="form-control">
                    <option value="">Select Year</option>
                    @for($i = date('Y'); $i < 2050; $i++)
                        <option value="{{ $i }}" {{ old('year') == $i ? 'selected' : '' }}>
                            {{ entobn($i) }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'year'])
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <i class="fa fa-times-circle-o"></i> Delete
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Add
            </button>
        </div>
    </div>
</form>