@extends('layouts.admin.app')

@section('content')
   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="container mt-2">
                    <div class="row">
                    <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                    
                    </div>
                    
                    </div>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{ $message }}</p>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="example2" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Sponser Name</th>
                                    <th>Sponser phone</th>
                                    <th>Package status</th>
                                    <th width="280px">Action</th>
                                    
                                    </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($data as $kyc)
                <tr>
                <td>{{ $kyc->uid }}</td>
                <td>{{ $kyc->system_id }}</td>
                <td>{{ $kyc->fname .' '. $kyc->lname}}</td>
                @if ($kyc->phone_number == null)
                <td><span class="badge light badge-danger">{{ 'Kyc Not Submit' }}</span></td>
                @else
                
                <td>{{ $kyc->phone_number }}</td> 
                @endif
                <td>{{ $kyc->email }}</td> 
                
                @php
                $get_parent = get_parent_name_email($kyc->parent_id);
                
                @endphp
                @if ($get_parent==null)
                <td>{{ 'No Parent name' }}</td>
                <td><span class="badge light badge-danger">{{ 'Kyc Not Submit' }}</span></td>
                @else
                <td>{{ $get_parent->fname .' '.$get_parent->lname }}</td>
                @if ($get_parent->phone_number == null)
                <td><span class="badge light badge-danger">{{ 'Kyc Not Submit' }}</span></td>
                @else
                <td>{{ $get_parent->phone_number}}</td>
                @endif
                
                @endif
               
                
                
                @if ($kyc->status==0)
            <td><span class="badge light badge-danger">{{ 'Banned' }}</span></td>
            @else
            <td><span class="badge badge-warning">{{ 'Activate' }}</span></td>
            @endif
            <td>
                <a class="btn btn-primary" href="{{ route('user.edit',$kyc->uid) }}">View</a>
            </td>
                
                </tr>
            
                @endforeach
                                
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>    
        </div>
            

@endsection