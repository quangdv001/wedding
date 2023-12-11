<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">QM</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.user.index') }}">Danh sách khách mời</a>
                          </li>
                          
                        </ul>
                        <div class="d-flex my-2 my-lg-0">
                            <h6 class="align-self-center mb-0 me-3 text-light">Xin chào, {{ auth('admin')->user()->username }}</h6>
                            <a
                                name=""
                                id=""
                                class="btn btn-warning align-self-center"
                                href="{{ route('admin.auth.logout') }}"
                                role="button"
                                >Đăng xuất</a
                            >
                            
                        </div>
                      </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
    
</header>