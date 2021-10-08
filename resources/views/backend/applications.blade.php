<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<section class="content-header">            
<h2>
   
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
        <i class="fa fa-plus-circle"></i> Start New Applicaation
      </button>
</h2>
</section>
@if( CRUDBooster::myPrivilegeId()!=4 )
<p><a title="Return" href="{{url('admin/clients')}}"><i class="fa fa-chevron-circle-left "></i> &nbsp; Back To List Data Instructor</a></p>
@endif
<div class='panel panel-default'>
    <h3 class='panel-heading'>{{$client->name}}'s Application List</h3>
    <div class='panel-body'>
        <!-- Your custom  HTML goes here -->
        <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>Application Name</th>
                <th>Applied On</th>
                <th>Application Type</th>
                <th>Application Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apps as $item)
            <tr>
                <td>{{$item->application_name}}</td>
                <td>@if ($item->applied_id){{$item->updated_at}}
                    @else
                    <label class="label label-danger">Not applied yet!    </label>
                    @endif
                </td>
                <td>{{$item->application_type}}</td>
                <td><a href="#" onclick="openModal({{$item->applied_id}}, {{$item->application_status}});">{{App\Helpers\Helper::_status($item->application_status) }}</a></td>
                <td>
                    @if ($item->applied_id)
                    <a target="_blank" class="btn btn-xs btn-primary btn-detail" title="Detail Data" href="{{url('admin/clients/application/'.$item->applied_id)}}"><i class="fa fa-eye"></i></a>
                    <a target="_blank" class="btn btn-xs btn-warning btn-detail" title="View Documents" href="{{url('admin/clients/documents/'.$item->id)}}"><i class="fa fa-upload"></i></a>                        
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    
</div>

<script>
function openModal(id1, id2) {
    $('#application_status').val(id2);
    $('#application_applied_id').val(id1);
    $('#statusModal').modal('show');
    return false;
}
</script>

<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <form method="POST">
            {{ csrf_field() }} 
        <div class="modal-header">
          <h5 class="modal-title">Change Application Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <select name="application_status" id="application_status" class="form-control">
              <option value="">Select Application Status</option>
              @foreach (App\Helpers\Helper::_status_all() as $key=>$val)
              <option value="{{$key}}">{{$val}}</option>  
              @endforeach
          </select>
          <input type="hidden" name="application_applied_id" id="application_applied_id" value="0" />
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <form method="POST">
            {{ csrf_field() }} 
        <div class="modal-header">
          <h5 class="modal-title">Start New Application</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <select name="application_type_id" id="application_type_id" class="form-control">
              <option value="">Select Application</option>
              @foreach ($applications as $item)
              <option value="{{$item->id}}">{{$item->application_name}}</option>  
              @endforeach
          </select>
          <input type="hidden" name="user_id" value="{{$client->id}}" />
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Start Now</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
  

@endsection