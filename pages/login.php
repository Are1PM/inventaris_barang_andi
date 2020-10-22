<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">

                <section class="login_content">
                    <form action="" method="POST">
                        <h1>Login Form</h1>
                        <input type="hidden" name="op" value="in" />

                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div class="form-group">
                            <select class="form-control" required="" name="akses" id="akses">
                                <option value=""> - Hak Akses - </option>
                                <option value="perlengkapan"> Perlengkapan </option>
                                <option value="prodi"> Prodi </option>
                                <option value="pegawai"> Pegawai </option>
                            </select>
                        </div>
                        <div class="form-group pull-left">
                            <button class="btn btn-primary submit" name="login-proses">Log in</button>
                        </div>

                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>


        </div>
    </div>
</body>