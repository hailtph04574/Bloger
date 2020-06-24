@extends('viewad')
@section('title','User Edit')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
    </div>
    <div class="card-body"> 
    <form action="{{ route('user.update',[ 'user_id'=> $user->user_id ]) }}" method="POST">
          @csrf
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">User Name</label>
            <div class="col">
              <input type="text" autocomplete="off" name='name' class="form-control" value="{{ $user->name }}">
              <small class="form-hint">

              </small>
            </div>
        </div>  
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Password</label>
            <div class="col">
              <input type="text" name="password" value="{{ $user->password }}" class="form-control" placeholder="Password">
              <small class="form-hint">
                
              </small>
            </div>
          </div>
          
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Birthday</label>
            <div class="col">
            <div class="input-icon">
            <input id="calendar-time" type="text" name="birthday" value="{{ $user->birthday }}" class="form-control flatpickr-input" placeholder="Select a date" readonly="readonly">
            <span class="input-icon-addon"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="5" width="16" height="16" rx="2"></rect><line x1="16" y1="3" x2="16" y2="7"></line><line x1="8" y1="3" x2="8" y2="7"></line><line x1="4" y1="11" x2="20" y2="11"></line><line x1="11" y1="15" x2="12" y2="15"></line><line x1="12" y1="15" x2="12" y2="18"></line></svg>
              </span>
          </div>
            </div>
        </div> 
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Phone</label>
            <div class="col">
                <input type="text" name="phone" class="form-control"  value="{{ $user->phone }}">
            </div>
          </div>
        
        <div class="form-group mb-3 row">
          <label class="form-label col-3 col-form-label">Level</label>
          <div class="col">
            <select class="form-select" name="role">
            <option value="0"
            <?php
                if($user->role == 0){
                    echo 'selected';
                }elseif($user->role == 1){
                    echo '';
                }
            ?>
            >User</option>
            <option value="1" 
            <?php
                if($user->role == 0){
                    echo '';
                }elseif($user->role == 1){
                    echo 'selected';
                }
            ?>
            >Admin</option>
            
            </select>
          </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Email</label>
            <div class="col">
                <input type="text" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
              <small class="form-hint">
                
              </small>
            </div>
        </div>
        <div class="form-group mb-3 row">
            <label class="form-label col-3 col-form-label">Status</label>
            <div class="col">
                <select class="form-select" name="is_active">
                <option value="0"
            <?php
                if($user->is_active == 1){
                    echo 'selected';
                }elseif($user->is_active == 0){
                    echo '';
                }
            ?>
            >Active</option>
            <option value="1" 
            <?php
                if($user->is_active == 1){
                    echo '';
                }elseif($user->is_active == 0){
                    echo 'selected';
                }
            ?>
            >De-Avtive</option>
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