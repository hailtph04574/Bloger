<header class="navbar navbar-expand-md navbar-dark">
    <div class="container-xl">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
    <a href="{{ route('admin.index') }}" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon icon-md" fill="currentColor"><path d="M7.078 23.55a5.378 5.378 0 0 1-1.244-1.15c-.383-.463-.738-.95-1.064-1.454a14.065 14.065 0 0 1-1.78-3.636c-.5-1.502-.743-2.94-.743-4.347 0-1.57.34-2.94 1.002-4.09a5.78 5.78 0 0 1 2.1-2.182 5.6 5.6 0 0 1 2.84-.84c.35 0 .73.05 1.13.15.29.08.64.21 1.07.37.55.21.85.34.95.37.32.12.59.17.8.17.16 0 .39-.05.645-.13.145-.05.42-.14.81-.31.386-.14.692-.26.935-.35.37-.11.728-.21 1.05-.26.39-.06.777-.08 1.148-.05.71.05 1.36.2 1.94.42 1.02.41 1.843 1.05 2.457 1.96-.26.16-.5.346-.725.55-.487.43-.9.94-1.23 1.505a5.1 5.1 0 0 0-.644 2.52c.015 1.083.29 2.035.84 2.86a5.33 5.33 0 0 0 1.534 1.536c.31.21.582.355.84.45-.12.375-.252.74-.405 1.1-.347.807-.76 1.58-1.25 2.31-.432.63-.772 1.1-1.03 1.41-.402.48-.79.84-1.18 1.097-.43.285-.935.436-1.452.436-.35.015-.7-.03-1.034-.127-.29-.095-.576-.202-.856-.323a6.94 6.94 0 0 0-.905-.34 4.52 4.52 0 0 0-1.164-.147c-.4 0-.79.05-1.16.145-.31.088-.61.196-.907.325-.42.175-.695.29-.855.34a4.47 4.47 0 0 1-.99.175c-.52 0-1.004-.15-1.486-.45zm6.854-18.46c-.68.34-1.326.484-1.973.436-.1-.646 0-1.31.27-2.037.24-.62.56-1.18 1-1.68.46-.52 1.01-.95 1.63-1.26.66-.34 1.29-.52 1.89-.55.08.68 0 1.35-.25 2.07a5.938 5.938 0 0 1-1 1.76c-.435.52-.975.95-1.586 1.26z"></path></svg> DEV DASHBOARD
      </a>
      <div class="navbar-nav flex-row order-md-last">
        <div class="nav-item dropdown d-none d-md-flex mr-3">
          <a href="#" class="nav-link px-0" data-toggle="dropdown" tabindex="-1">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg> --}}
            {{-- <span class="badge bg-red"></span> --}}
          </a>
          {{-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
            <div class="card">
              <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
              </div>
            </div>
          </div> --}}
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
            <span class="avatar" style="background-image: url({{ asset('./static/avatars/000m.jpg') }})"></span>
            <div class="d-none d-xl-block pl-2">
              <div>Paweł Kuna</div>
              <div class="mt-1 small text-muted">Xin chào,</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><circle cx="12" cy="12" r="3" /></svg>
              My Account
            </a>
            <a class="dropdown-item" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M9 7 h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
              Log-out
            </a>
            {{-- <div class="dropdown-divider"></div> --}}
          </div>
        </div>
      </div>
    </div>
  </header>