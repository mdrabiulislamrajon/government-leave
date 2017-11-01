<form class="form" method="POST" action="{{ url('user-management/' . $user->id) }}" style="margin-top: 25px;padding-bottom: 10px;">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row clearfix">
        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="cc">User's Designation<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input id="cc" name="role_id" value="{{ old('role_id') ? : $user->role_id }}" class="easyui-combotree" style="width:100%;height:34px;" required>
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'role_id'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="name">User Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ? : $user->name }}">
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
                <input name="fa_hu_name" type="text" class="form-control" id="fa_hu_name" value="{{ old('fa_hu_name') ? : $user->fa_hu_name }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'fa_hu_name'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="mother_name">Mother Name<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="mother_name" type="text" class="form-control" id="mother_name" value="{{ old('mother_name') ? : $user->mother_name }}">
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
                <input name="mobile" type="text" class="form-control" id="mobile" value="{{ old('mobile') ? : $user->mobile }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'mobile'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="gender">Gender<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <select class="form-control" name="gender" id="gender">
                    <option value="">Select Gender</option>
                    <option value="male" {{ (old('gender') || $user->gender) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ (old('gender') || $user->gender) == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'gender'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('div_br_off') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="div_br_off">Office/Branch Office<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input name="div_br_off" type="text" class="form-control" id="div_br_off" value="{{ old('div_br_off') ? : $user->div_br_off }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'div_br_off'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="join_date">Joining Date<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="join_date" class="form-control datepicker" id="joinDate" value="{{ old('join_date') ? : ($user->join_date ? $user->join_date->format('m/d/Y') : '') }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'join_date'])
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