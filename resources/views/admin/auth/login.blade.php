<!doctype html>
<html lang="en">
    <head>
        <title>Admin</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="/css/app.css" rel="stylesheet"/>
    </head>

    <body>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 pt-5">
                    <div class="text-center">
                        <h2>Quản trị hệ thống</h2>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tài khoản</label>
                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                id=""
                                aria-describedby="helpId"
                                placeholder="Tài khoản"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mật khẩu</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                id=""
                                aria-describedby="helpId"
                                placeholder="Mật khẩu"
                            />
                        </div>
                        <div class="mb-3">
                            <button
                                type="submit"
                                class="btn btn-primary w-100"
                            >
                                Đăng nhập
                            </button>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <script src="/js/app.js"></script>
        <script src="/js/init.js"></script>
    </body>
</html>
