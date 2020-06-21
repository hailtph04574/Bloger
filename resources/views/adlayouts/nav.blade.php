<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
      <div class="navbar navbar-light">
        <div class="container-xl">
          <ul class="navbar-nav">
          <li class="nav-item @yield('active')">
          <a class="nav-link" href="{{ route('admin.index') }}" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="3" y1="21" x2="21" y2="21"></line><path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path><path d="M5 21v-10.15"></path><path d="M19 21v-10.15"></path><path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path></svg></svg>
                </span>
                <span class="nav-link-title">
                  Home
                </span>
              </a>
            </li>
            <li class="nav-item @yield('active')">
              <a class="nav-link" href="{{ route('user.index') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><circle cx="12" cy="7" r="4"></circle><path d="M5.5 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path></svg>
                    </span>
                    <span class="nav-link-title">
                      User
                    </span>
                  </a>
                </li>
                <li class="nav-item @yield('active')">
          <a class="nav-link" href="{{ route('category.index') }}" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="9" y1="6" x2="20" y2="6"></line><line x1="9" y1="12" x2="20" y2="12"></line><line x1="9" y1="18" x2="20" y2="18"></line><line x1="5" y1="6" x2="5" y2="6.01"></line><line x1="5" y1="12" x2="5" y2="12.01"></line><line x1="5" y1="18" x2="5" y2="18.01"></line></svg>
                </span>
                <span class="nav-link-title">
                  Category
                </span>
              </a>
            </li>
            <li class="nav-item @yield('active')">
              <a class="nav-link" href="{{ route('comment.index') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="4" width="16" height="16" rx="2"></rect><circle cx="9" cy="12" r=".5" fill="currentColor"></circle><circle cx="15" cy="12" r=".5" fill="currentColor"></circle></svg>
                    </span>
                    <span class="nav-link-title">
                      Comment
                    </span>
                  </a>
                </li>
                <li class="nav-item @yield('active')">
                  <a class="nav-link" href="{{ route('post.index') }}" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path><line x1="3" y1="6" x2="3" y2="19"></line><line x1="12" y1="6" x2="12" y2="19"></line><line x1="21" y1="6" x2="21" y2="19"></line></svg>
                        </span>
                        <span class="nav-link-title">
                          Post
                        </span>
                      </a>
                    </li>           
          </ul>
          <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
            @yield('seach')
          </div>
        </div>
      </div>
    </div>
  </div>