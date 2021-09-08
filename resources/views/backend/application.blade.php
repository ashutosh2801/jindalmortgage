<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
@if( CRUDBooster::myPrivilegeId()!=4 )
<p><a title="Return" href="{{url('admin/clients')}}"><i class="fa fa-chevron-circle-left "></i> &nbsp; Back To List Data Instructor</a></p>
@endif
<div class='panel panel-default'>
    <h3 class='panel-heading'>{{$client->name}}'s <u>{{$client->application_name}}</u> Application Detail</h3>
    <div class='panel-body'>
        <!-- Your custom  HTML goes here -->
        <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>Application Form Data</th>
                <th>Action</th>
            </tr>
        </thead>
        @php
        //echo $client->application_values;
        $data = json_decode($client->application_values);
        //print_r($data);
        @endphp
        <tbody>
            <tr>
                <td>
                    <table class='table table-striped table-bordered'>
                    @if ($data->_token)
                    @foreach ($data as $key=>$val)
                    @if($key!='_token' && $key!='token' && $key!='co_same_as' && $key!='same_as')
                    <tr><th>{{ucwords(str_replace('_',' ',$key))}}</th><td>{{ucwords($val)}}</td></tr>
                    @endif
                    @endforeach
                    @endif
                    </table>
                </td>
                <td>
                
                </td>
            </tr>
        </tbody>
        </table>
    </div>
    
</div>
@endsection