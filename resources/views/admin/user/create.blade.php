@extends('viewad')
@section('title','User Create')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Create User</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('user.save') }}" method="GET">
          @csrf
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">User Name</label>
            <div class="col">
              <input type="text" name='name' class="form-control" aria-describedby="nameHelp" placeholder="Enter User Name">
              <small class="form-hint">

              </small>
            </div>
        </div>  
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Password</label>
            <div class="col">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <small class="form-hint">
                
              </small>
            </div>
          </div>
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Birthday</label>
            <div class="col">
                <input type="text" name="date" class="form-control" data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="on">
              <small class="form-hint">

              </small>
            </div>
        </div> 
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Phone</label>
            <div class="col">
                <input type="text" name="phone" class="form-control" data-mask="(+00) 0000000000" data-mask-visible="true" placeholder="+(00) 0000000000" autocomplete="off">
            </div>
          </div>
        
        <div class="form-group mb-3 row">
          <label class="form-label col-3 col-form-label">Level</label>
          <div class="col">
            <select class="form-select" name="level">
              <option value="0">User</option>
              <option value="1">Admin</option>
            </select>
          </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Email</label>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="Email">
              <small class="form-hint">
                
              </small>
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Status</label>
            <div class="col">
                <select class="form-select" name="status">
                  <option value="1">Active</option>
                  <option value="0">De-Active</option>
                </select>
              </div>
        </div>
        <div class="form-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection