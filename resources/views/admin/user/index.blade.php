@extends('viewad')
@section('title','User Home')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">All USER</h3>
    </div>
    <div class="card-body border-bottom py-3">
      <div class="d-flex">
        <div class="mx-2 d-inline-block">
          <a class="btn btn-info" href="{{ route('user.create') }}">
            <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></span>
          Add New User</a>
          </div>
        <div class="text-muted">
          Show
          <div class="mx-2 d-inline-block">
          <input type="text" class="form-control form-control-sm" value="{{ count($user) }}" size="3">
          </div>
          entries
        </div>
        <div class="ml-auto text-muted">
          Search:
          <div class="ml-2 d-inline-block">
            <input type="text" class="form-control form-control-sm">
          </div>
        </div>
      </div>
    </div>
    <div class="table-responsive">
        <table class="table table-vcenter table-mobile-md card-table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name/Email</th>
              <th>Birthday</th>
              <th>Phone</th>
              <th>Password</th>
              <th>Level</th>
              <th>Status</th>
              <th class="w-1"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($user as $key => $item)
              <tr>
                <td>
                    <div class="flex-fill">
                        <div class="strong">{{ $item->user_id }}</div>
                        </div>
                </td>
                <td data-label="Name">
                  <div class="d-flex lh-sm py-1 align-items-center">
                    @if ( $item->role == 1)
                    <span class="avatar mr-2 bg-red-lt" ><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="12" cy="7" r="4"></circle><path d="M5.5 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path></svg>
                    </span> 
                    @else 
                    <span class="avatar mr-2 bg-azure-lt"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="12" cy="5" r="2"></circle><path d="M10 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4"></path></svg>
                    </span>
                    @endif                    
                    <div class="flex-fill">
                    <div class="strong">{{ $item->name }}</div>
                      <div class="text-muted text-h5">{{ $item->email }}</div>
                    </div>
                  </div>
                </td>
                <td class="text-muted" data-label="phone">
                    {{ $item->birthday }}
                </td>
                <td data-label="Phone">
                <div>{{ $item->phone }}</div>
                </td>
                <td data-label="Password">
                    <h5 >{{ bcrypt($item->password) }}</h5>
                </td>
                <td data-label="Level">
                    <div class="">
                    @if ( $item->role == 1)
                        <mark class="bg-purple-lt">Admin</mark>
                    @else 
                    <mark class="bg-blue-lt">User</mark>    
                    @endif
                    </div>
                </td>
                <td data-label="Active">
                    <div class="">
                        @if ($item->is_active === 0)
                            <cite class="bg-red-lt">De-Active</cite>
                        @else
                            <cite class="bg-green-lt" >Active</cite>    
                        @endif
                    </div>
                </td>
                <td>
                  <div class="btn-list flex-nowrap">                  
                    <div class="dropdown">
                      <button class="btn bg-cyan-lt dropdown-toggle align-text-top dropdown-menu-right" data-boundary="viewport" data-toggle="dropdown"><span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                      </button>
                      <div class="dropdown-menu">
                      <a class="btn btn-success" href="{{ route('user.show',['user_id'=> $item->user_id]) }}">Show</a>
                        <a onclick="return confirmEdit(this)" class="btn btn-primary" href="{{ route('user.edit',
                        ['user_id'=> $item->user_id] ) }}">Edit</a>
                        <a onclick="return confirmDelete(this)" class="btn btn-warning " href="{{ route('user.delete',
                        ['user'=> $item->user_id]) }}">Delete</a>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
  </div>
@endsection
