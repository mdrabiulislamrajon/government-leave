<form class="form" method="POST" action="{{ url('profile/edit') }}" style="margin-top: 25px;padding-bottom: 10px;">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row clearfix">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="name">User Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ? : $profile->name }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'name'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('fa_hu_name') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="fa_hu_name">Father/Husband Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="fa_hu_name" type="text" class="form-control" id="fa_hu_name" value="{{ old('fa_hu_name') ? : $profile->fa_hu_name }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'fa_hu_name'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="mother_name">Mother's Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="mother_name" type="text" class="form-control" id="mother_name" value="{{ old('mother_name') ? : $profile->mother_name }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'mother_name'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="mobile">Mobile Number<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="mobile" type="text" class="form-control" id="mobile" value="{{ old('mobile') ? : $profile->mobile }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'mobile'])
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 text-right">
            <button class="btn btn-default" style="margin-right:8px;" type="reset">
                <i class="fa fa-times-circle-o"></i> Delete
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Change
            </button>
        </div>
    </div>
</form>