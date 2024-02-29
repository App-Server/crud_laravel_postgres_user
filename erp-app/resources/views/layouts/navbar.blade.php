<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">USER SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user/create') }}">User Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('user/show') }}">User Show</a>
            </li>
            
          
        </ul>
        <form class="d-flex" role="search">
          <i class="bi bi-box-arrow-right" style="font-size: 20px"></i><a href="" style="margin-left: 10px">Logout</a>
        </form>
      </div>
    </div>
  </nav>
