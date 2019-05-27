@extends('layout')
@section('title')
    Customer List
@endsection
@section('content')
<div class="row">
    <div class="col-12">
            <h1>Customers</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
            <form action="customers" method="POST" class="pb-5">
                    <div class="form-group" >
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        <div> {{$errors -> first('name')}}</div>
                    </div>
                    {{-- email --}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control">
                        <div> {{$errors -> first('email')}}</div>
                    </div>
                    <div class="form-group">
                        <label for="active">Status</label>
                        <select name="active" id="active" class="form-control">
                            <option value="" disabled>Select customer status</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add name</button>
                
                    @csrf
                
                </form>
    </div>
</div>

<div class="row">
    
    <div class="col-6">
            <h3>Active Users</h3>
            <ul>
                    @foreach($activeCustomers as $activeCustomer)
                        <li>{{$activeCustomer->name}}<span class="test-muted">({{$activeCustomer ->email }})</li>
                    @endforeach
                </ul>
    </div>
    
    <div class="col-6">
            <h3>inActive Users</h3>
            <ul>
                    @foreach($inactiveCustomers as $inactiveCustomer)
                        <li>{{$inactiveCustomer->name}}<span class="test-muted">({{$inactiveCustomer ->email }})</li>
                    @endforeach
                </ul>
    </div>
</div>

@endsection