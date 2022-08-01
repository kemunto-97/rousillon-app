<main class="main-content position-relative border-radius-lg ">

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder text-black mb-0">{{ $title }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>

          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
          <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
          
          <input type="text" class="form-control" placeholder="Type here...">
          
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
       
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link {{ ($title=='Profile') ? 'active':'' }}" href="{{ url('/profile') }}">
           <i class="fa fa-user text-black me-sm-1"></i>
          </a>
        </li>
        
        <li class="nav-item d-flex align-items-center">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
              class="nav-link text-black font-weight-bold px-0">
               <span class="d-sm-inline d-none">Log Out</span>
              </a>
        </li>
        </ul>

          

        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">