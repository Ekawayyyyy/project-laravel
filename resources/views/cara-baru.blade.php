
@extends ('dashboard')
@include('style.style')
<h1 align="center">SELAMAT DATANG</h1>
    <h3 align="center">FORM LOGIN CRUD JSON</h3>

    <div class="card-form">
        <div class="image"><img src="{{asset('gambar/')}}/login.jpg" alt=""></div>
        <div class="form">
            <form  class="format"action="" method="post">
                
                <h2> <b>Get Started</b></h2>
                <label for="username">Username</label>
                <input type="username" name="username" placeholder="masukkan username"><br>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="masukkan password">
                <center>
                    <button type="submit" name="submit"><b>Login</b></button>
                </center>

                <div class="regist">
                    <p color="blue">Do yout have a account ? Sign Up</p>
                </div>
            </form>
        </div>
    </div>
    </div>