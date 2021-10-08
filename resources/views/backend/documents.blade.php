<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')

@if( CRUDBooster::myPrivilegeId()!=4 )
<p><a title="Return" href="{{url('admin/clients')}}"><i class="fa fa-chevron-circle-left "></i> &nbsp; Back To List Data Instructor</a></p>
@endif
<div class='panel panel-default'>
    <h3 class='panel-heading'>{{$client->name}}'s Document List [Allow only: pdf,jpg,png,jpeg]</h3>
    <div class='panel-body'>
        <!-- Your custom  HTML goes here -->
        <form method="POST" enctype="multipart/form-data" action="">
            {{ csrf_field() }} 
        <table class='table table-striped table-bordered'>
        <thead>
            <tr>
                <th>Document Name</th>
                <th>File</th>
                <th>Uploaded On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($documents as $item)
            <tr>
                <td>{{$item->document_name}}</td>
                <td>
                    @if ($item->attachment)
                    <a target="_blank" class="btn btn-xs btn-primary" title="View File" href="{{url($item->attachment)}} "><i class="fa fa-file-pdf-o" style="font-size: 25px"></i></a> 
                    @else
                    <input type="file" name="files[{{$item->id}}]" class="form-control" >
                    @endif
                </td>
                <td>{{$item->updated_at}}</td>
                <td>
                    @if ($item->attachment)
                    <a target="_blank" class="btn btn-xs btn-primary btn-detail" title="View File" href="{{url($item->attachment)}} "><i class="fa fa-eye"></i></a>
                    <a class="btn btn-xs btn-danger btn-detail" title="Delete File" href='javascript:;'
                    onclick='swal({   
                         title: "Are you sure ?",   
                         text: "You will not be able to recover this record data!",   
                         type: "warning",   
                         showCancelButton: true,   
                         confirmButtonColor: "#ff0000",   
                         confirmButtonText: "Yes!",  
                         cancelButtonText: "No",  
                         closeOnConfirm: false }, 
                         function(){  location.href="{{ CRUDBooster::mainpath("remove/$item->applied_id") }}" });'><i class="fa fa-trash"></i></a>
                    @else
                    {{-- <a class="btn btn-xs btn-warning btn-detail" title="Upload File" href="{{url('admin/application_documents/upload/'.$item->id)}}"><i class="fa fa-upload"></i></a> --}}
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td><input type="submit" name="button" class="btn btn-success" value="UPDATE"></td>
                <td></td>
        </tfoot>
        </table>
        </form>
    </div>    
</div>
@endsection