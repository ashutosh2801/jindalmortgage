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
        //echo '<pre>'; print_r($data); exit;
        @endphp
        <tbody>
            <tr>
                <td>
                    <table class='table table-striped table-bordered'>
                    @if ($data->_token)
                    @foreach ($data as $key=>$val)
                    @if($key!='Property' && $key!='Mortgage' && $key!='_token' && $key!='token' && $key!='co_same_as' && $key!='same_as' )
                    <tr><th>{{ucfirst(str_replace('_',' ',$key))}}</th><td>{{($val)}}</td></tr>
                    @elseif($key=='Property')
                    @php
                    if(is_array($data->Property->property_street_number)) {
                        $count = count($data->Property->property_street_number);
                        for ($i=0; $i < $count; $i++) { 
                            @endphp
                            <tr><th colspan="2"><h3>Property Information {{$i+1}}</h3></th></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_street_number'))}}</th><td>{{$data->Property->property_street_number[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_street_name'))}}</th><td>{{$data->Property->property_street_name[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_street_type'))}}</th><td>{{$data->Property->property_street_type[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_street_direction'))}}</th><td>{{$data->Property->property_street_direction[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_unit_number'))}}</th><td>{{$data->Property->property_unit_number[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_city'))}}</th><td>{{$data->Property->property_city[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_province'))}}</th><td>{{$data->Property->property_province[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_postal_code'))}}</th><td>{{$data->Property->property_postal_code[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_construction_type'))}}</th><td>{{$data->Mortgage->property_construction_type[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_structure_age'))}}</th><td>{{$data->Mortgage->property_structure_age[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_occupancy_type'))}}</th><td>{{$data->Mortgage->property_occupancy_type[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_tenure_type'))}}</th><td>{{$data->Mortgage->property_tenure_type[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_heat_type'))}}</th><td>{{$data->Mortgage->property_heat_type[$i]}}</td></tr>
                            <tr><th>{{ucfirst(str_replace('_',' ','property_estimated_value'))}}</th><td>{{$data->Property->property_estimated_value[$i]}}</td></tr>
                            @php
                        }
                    }
                    @endphp
                    @elseif($key=='Mortgage')
                    @php
                    if( is_array($data->Mortgage->mortgage_closing_date) ) {
                        $count = count($data->Mortgage->mortgage_closing_date);
                        for ($i=0; $i < $count; $i++) { 
                            @endphp
                            <tr><th colspan="2"><h3>Mortgage Information {{$i+1}}</h3></th></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_closing_date'))}}</th><td>{{$data->Mortgage->mortgage_closing_date[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_amortization_year'))}}</th><td>{{$data->Mortgage->mortgage_amortization_year[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_amortization_month'))}}</th><td>{{$data->Mortgage->mortgage_amortization_month[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_payment_frequency'))}}</th><td>{{$data->Mortgage->mortgage_payment_frequency[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_term'))}}</th><td>{{$data->Mortgage->mortgage_term[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_amount'))}}</th><td>{{$data->Mortgage->mortgage_amount[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_product_type'))}}</th><td>{{$data->Mortgage->mortgage_product_type[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_down_payment'))}}</th><td>{{$data->Mortgage->mortgage_down_payment[$i]}}</td></tr>
                            <tr><th>{{(str_replace('_',' ','mortgage_first_time_buyer'))}}</th><td>{{$data->Mortgage->mortgage_first_time_buyer[$i]}}</td></tr>
                            @php
                        }
                    }
                    @endphp
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