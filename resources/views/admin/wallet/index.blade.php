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
            </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <table id="example2" class="display" style="width:100%">
                <thead>
            <tr>
            <th>No</th>
            <th>User Name</th>
            <th>Fee</th>
            <th>Amount</th>
            <th>P2P ID</th>
            <th>Currency Type</th>
            <th>Network</th>
            <th>Wallet Address</th>
            <th>Package status</th>
            <th width="280px">Action</th>
            </tr>
        </thead>
            @php
                $i = 1;
            @endphp
            <tbody>
            @foreach ($data as $package)
            <tr>
            <td>{{ $i }}</td>
            <td>{{ $package->fname ." ".$package->lname }}</td>
            <td>${{ $package->fee }}</td>
            <td>${{ $package->amount}}</td>
            <td>{{ $package->p2p_id}}</td>
            <td>{{ $package->currency_type}}</td>
            <td>{{ $package->network}}</td>
            <td>{{ $package->wallet_address}}</td>
            
            @if ($package->trstatus=='0')
            <td>{{ 'Pending' }}</td>
            @elseif($package->trstatus=='1')
            <td>{{ 'Approve' }}</td> 
            @elseif($package->trstatus=='2')
            <td>{{ 'reject' }}</td>
            @endif
            <td>
                <form action="{{ route('wallet.destroy',$package->id) }}" method="Post">
                <a class="btn btn-primary" href="{{ route('wallet.edit',$package->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            
            
            
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </tbody>
            </table>
        </div>
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->
@endsection