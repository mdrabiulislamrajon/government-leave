@section('title')
<section class="content-header">
    <h4>
        {{ isset($title) ? $title : 'Leave Management Page Title' }}
    </h4>
    <!--
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>
			{{ isset($link) ? $link : 'Breadcrumb Here' }}
        </li>
    </ol>
    -->
</section>
@stop