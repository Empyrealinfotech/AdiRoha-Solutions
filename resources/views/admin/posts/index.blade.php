@extends('layouts.admin.app')
	@if(isset($page_title) && $page_title!='')
	    @section('title', $page_title.' - '.config('app.name', 'Laravel'))
	@else
	    @section('title', config('app.name', 'Laravel'))
	@endif
@section('page-style')
	<link href="{{ asset('admin/assets/plugins/bower_components/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/plugins/bower_components/datatables/responsive.dataTables.min.css') }}" rel="stylesheet">
@endsection
@section('breadcrumb')
	@include('layouts.admin.includes.breadcrumb')
@endsection
@section('content')
	<div class="row">
	    <div class="col-md-12">
	        <div class="white-box">
	            <div class="table-responsive">
		        		<table id="DataTable1" class="table table-striped table-hover dt-responsive display nowrap" cellspacing="0">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Image</th>
	                            <th>Name</th>
	                            <th>Author</th>
	                            <th>Status</th>
	                            <th>Created At</th>
	                            <th>Action</th>
	                        </tr>
	                    </thead>
	                    <tbody></tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
@section('page-script')
	<script defer src="{{ asset('admin/assets/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
	<script defer src="{{ asset('admin/assets/plugins/bower_components/datatables/dataTables.responsive.min.js') }}"></script>
	<script type="text/javascript">
	    var table;
	    $(document).ready(function() {
		    table=$('#DataTable1').DataTable({
		    	responsive: true,
		        processing: true,
		        serverSide: true,
		        searching: true,
		        pageLength: 50,
		        ajax:{
		            headers: {'X-CSRF-Token': Laravel.csrfToken},
		            url:"{!! route('control.panel.posts.data') !!}",
		            type:'POST',
		            dataType: "json",
		            /*data: {_token: "{{csrf_token()}}"},*/
		            beforeSend: function () {
		                if (typeof table != 'undefined' && table.hasOwnProperty('settings')) {
		                    table.settings()[0].jqXHR.abort();
		                }
		            }
		        },
		        columns: [
		            {data: 'id', name: 'id'},
	                {data: 'image', name: 'image', sortable:false, searching: false, render:function(data,type,row){
	                    	if(data != ''){
	                    		return '<img src="'+data+'" width="50" height="50"/>';
	                    	}else{
	                       		return '';
	                    	}
	                	}
	            	},
		            {data: 'name', name: 'name'},
		            {data: 'author', name: 'author'},
		            {data: "status", name: "status", "render": function (data, type, row) {
		                    if (data == 1) {
		                        return '<button type="button" class="btn btn-outline btn-success change-status-btn" data-id="' + row.id + '" data-status="0">Active</button>';
		                    } else {
		                        return '<button type="button" class="btn btn-outline btn-danger change-status-btn" data-id="' + row.id + '" data-status="1">InActive</button>';
		                    }
		                }
		            },
		            {data: 'created_at', name: 'created_at'},
		            {data: 'action', name: 'action', sortable:false}
		        ],
		        order: [[0, 'desc']]
		    });
		    table.on('click','.change-status-btn',function(e){
		    	e.preventDefault();
		    	var id 		= $(this).data('id');
		    	var status 	= $(this).data('status');
		    	if((typeof id !== "undefined") && (typeof status !== "undefined")){
		    		swal({
		    			title: 'Are You Sure you want to change status?',
		    			type: 'warning',
		    			showCancelButton: true,
		    			confirmButtonText: 'Yes change it!',
		    			confirmButtonColor: "#d33",
		    			confirmButtonClass: 'btn btn-success',
		    			cancelButtonText: 'No, cancel!',
		    			cancelButtonColor: '#3085d6',
		    			cancelButtonClass: 'btn btn-danger',
		    			buttonsStyling: true,
		    			reverseButtons: true
		    		}).then((result) => {
		    			if (result.value) {
			    			$.ajax({
			    			    type: "POST",
			    			    url: "{!! route('control.panel.posts.status.change') !!}",
			    			    data: {id:id,status:status},
			    			    dataType: 'json',
			    			    headers: {'X-CSRF-TOKEN': Laravel.csrfToken}
			    			}).done(function( response ) {
			    				if(response.success == true){
			    					setTimeout( function () {
			    					    redrawDatatable();
			    					}, 1000 );
			    					swal({
			    					    type : 'success',
			    					    text : response.message,
			    					    timer: '1500'
			    					});
			    				}else{
			    					swal({
			    					    type : 'error',
			    					    text : response.message,
			    					    timer: '500000'
			    					});
			    				}
			    			}).fail(function(jqXHR, status, exception)  {
			    				if (jqXHR.status === 0) {
			    				    error = 'Not connected.\nPlease verify your network connection.';
			    				} else if (jqXHR.status == 404) {
			    				    error = 'The requested page not found. [404]';
			    				} else if (jqXHR.status == 500) {
			    				    error = 'Internal Server Error [500].';
			    				} else if (exception === 'parsererror') {
			    				    error = 'Requested JSON parse failed.';
			    				} else if (exception === 'timeout') {
			    				    error = 'Time out error.';
			    				} else if (exception === 'abort') {
			    				    error = 'Ajax request aborted.';
			    				} else {
			    				    error = 'Uncaught Error.\n' + jqXHR.responseText;
			    				}
			    				Swal.fire('Error!',error,'error');
			    			});
		    			}
		    		});
		    	}
		    });
	    });
		function deleteRecord(ele,id){
			Swal.fire({
			    title: 'Are you sure?',
			    text: "You won't be able to revert this!",
			    type: 'warning',
			    showCancelButton: true,
			    confirmButtonText: 'Yes, delete it!',
			    confirmButtonColor: "#d33",
			    confirmButtonClass: 'btn btn-success',
			    cancelButtonText: 'No, cancel!',
			    cancelButtonColor: '#3085d6',
			    cancelButtonClass: 'btn btn-danger',
			    buttonsStyling: true,
			    reverseButtons: true
			}).then((result) => {
			    if (result.value) {
			        $.ajax({
			            type: "POST",
			            headers: {'X-CSRF-Token': Laravel.csrfToken},
			            url: "{!! route('control.panel.posts.destroy') !!}",
			            dataType : 'json',
			            data: {id:id},
			            success: function(response) {
			                setTimeout( function () {
			                    redrawDatatable();
			                }, 1000 );
			                if(response.success == true){
			                	swal({
			                	    type : 'success',
			                	    title: 'Deleted!',
			                	    text : response.message,
			                	    timer: '1500'
			                	});
			                }else{
			                	swal({
			                	    type : 'error',
			                	    title: 'Not Deleted!',
			                	    text : response.message,
			                	    timer: '1500'
			                	});
			                }
			            },
			            error: function (jqXHR, status, exception) {
			                if (jqXHR.status === 0) {
			                    error = 'Not connected.\nPlease verify your network connection.';
			                } else if (jqXHR.status == 404) {
			                    error = 'The requested page not found. [404]';
			                } else if (jqXHR.status == 500) {
			                    error = 'Internal Server Error [500].';
			                } else if (exception === 'parsererror') {
			                    error = 'Requested JSON parse failed.';
			                } else if (exception === 'timeout') {
			                    error = 'Time out error.';
			                } else if (exception === 'abort') {
			                    error = 'Ajax request aborted.';
			                } else {
			                    error = 'Uncaught Error.\n' + jqXHR.responseText;
			                }
			                Swal.fire('Error!',error,'error');
			            }
			        });
			    }
			});
		}
	    function redrawDatatable(){
	        $('#DataTable1').DataTable().ajax.reload();
	    }
	</script>
@endsection
