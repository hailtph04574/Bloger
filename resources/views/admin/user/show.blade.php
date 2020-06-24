@extends('viewad')
@section('title','Details User')
@section('content')
<div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <h2 class="page-title">
                  Profile
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"><a href="{{ route('user.edit',
                        ['user_id'=> $show->user_id] ) }}" class="btn btn-info" >Update</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row mb-3">
                      <!-- <div class="col-auto">
                        <span class="avatar avatar-lg" style="background-image: url(static/avatars/004f.jpg)"></span>
                      </div> -->
                      <div class="col">
                        <div class="mb-2">
                        </div>
                      </div>
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Status</label>
                        @if($show->is_active == 1)
                        <b class="btn btn-primary btn-pill">ACTIVE</b>
                        @elseif($show->is_active == 0)
                        <b class="btn btn-danger btn-pill">DE-ACTIVE</b>
                        @endif
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Email</label>
                      <input class="form-control" disabled placeholder="{{ $show->email }}">
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Password</label>
                      <input type="text" class="form-control" placeholder="Password" value="{{ $show->password }}">
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Phone</label>
                      <input class="form-control" disabled placeholder="{{ $show->phone }}">
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Birthday</label>
                      <input class="form-control" disabled placeholder="{{ $show->birthday }}">
                    </div>
                    <div class="mb-2">
                      <label class="form-label">Level</label>
                        @if($show->role == 0)
                        <input class="form-control" disabled placeholder="USER">
                          @elseif($show->role == 1)
                          <input class="form-control" disabled placeholder="ADMIN">
                          @endif
                      
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Message">
                    <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2"></path><circle cx="12" cy="13" r="3"></circle></svg>
                    </a>
                  </div>
                </div>
                <ul class="list-group card-list-group">
                  <li class="list-group-item py-4">
                    <div class="d-flex">
                      <div>
                        <span class="avatar mr-3" style="background-image: url(./static/avatars/000f.jpg)"></span>
                      </div>
                      <div class="flex-fill">
                        <div>
                          <small class="float-right text-muted">4 min</small>
                          <h4>Emmy Levet</h4>
                        </div>
                        <div>
                          Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras
                          justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes,
                          nascetur ridiculus mus.
                        </div>
                        <ul class="list-unstyled">
                          <li class="d-flex mt-4">
                            <div>
                              <span class="avatar mr-3" style="background-image: url(./static/avatars/002f.jpg)"></span>
                            </div>
                            <div class="flex-fill">
                              <strong>Kellie Skingley: </strong>
                              Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus
                              auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                            </div>
                          </li>
                          <li class="d-flex mt-4">
                            <div>
                              <span class="avatar mr-3">HS</span>
                            </div>
                            <div class="flex-fill">
                              <strong>Haskel Shelper: </strong>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                              amet risus.
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-4">
                    <div class="d-flex">
                      <div>
                        <span class="avatar mr-3" style="background-image: url(./static/avatars/006m.jpg)"></span>
                      </div>
                      <div class="flex-fill">
                        <div>
                          <small class="float-right text-muted">12 min</small>
                          <h4>Lorry Mion</h4>
                        </div>
                        <div>
                          Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis
                          parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-4">
                    <div class="d-flex">
                      <div>
                        <span class="avatar mr-3" style="background-image: url(./static/avatars/009m.jpg)"></span>
                      </div>
                      <div class="flex-fill">
                        <div>
                          <small class="float-right text-muted">34 min</small>
                          <h4>Geoffry Flaunders</h4>
                        </div>
                        <div>
                          Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Aenean eu leo quam. Pellentesque ornare sem lacinia quam
                          venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </div>
                        <ul class="list-unstyled">
                          <li class="d-flex mt-4">
                            <div>
                              <span class="avatar mr-3" style="background-image: url(./static/avatars/001f.jpg)"></span>
                            </div>
                            <div class="flex-fill">
                              <strong>Maryjo Lebarree: </strong>
                              Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus
                              auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@endsection