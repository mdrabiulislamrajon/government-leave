<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
            	<th style="width: 80px;"></th>
                <th>User Name</th>
                <th>Mobile Number</th>
                <th>User Designation</th>
                <th>Address</th>
                <th>Current status</th>
                <th style="width: 9%;"></th>
            </tr>
        </thead>
        <tbody>
            	@foreach($users as $user)
                <tr>
                	<td>
                		<img src="{{ asset($user->avatar()) }}" alt="{{ $user->name }}"
                			class="img-circle" height="40" width="40"
                		>
                	</td>
                    <td>{{ $user->name}}</td>
                    <td> {{$user->mobile}}</td>
                    <td>{{$user->role->text}}</td>
                    <td>{{$user->div_br_off}}</td>
                    <td>
                    	@if($user->active)
                    	<span class="label label-success">Active</span>
                    	@else
                    	<span class="label label-danger">Inactive</span>
                    	@endif
                    </td>
                    <td>
                    	<a href="{{'user-management/'.$user->id}}" class="btn btn-xs btn-primary" title="Employee Details">
							<i class="fa  fa-eye"></i>
                    	</a>
                        <a href="{{'user-management/'.$user->id.'/edit'}}" class="btn btn-xs btn-info" title="Edit Employee">
							<i class="fa fa-edit"></i>
                        </a>
                        <a data-toggle="modal" href="#modal-{{ $user->id }}" class="btn btn-xs" style="background-color: red;" title="Delete Employee?">
							<i class="fa fa-trash-o"></i>
                        </a>
                        @include('layouts.common.delModal', [
                            'id' => $user->id,
                            'url' => 'user-management/'
                        ])
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>