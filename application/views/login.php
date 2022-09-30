<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link rel="icon" href="./assets/img/mgs.ico">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style-navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-navbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-career.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-footer.css')?>">
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="jadwal">
        <div class="form1">
            <div class="kotak">
                <div class="content1">
                    <h3>
                        We are <div class="merah">waiting</div> for
                    </h3>
                    <h3><div class="merah">you to</div> join</h3>
                    <p>
                        We have a vision to be a provider
                        IT Consultant services in Indonesia that
                        focus on providing business solutions
                        by utilizing technology.
                    </p>
                    <p>
                        Be a part of us to start success in a brighter future
                    </p>
                    <div class="foto">
                        <img src="<?= base_url('assets/img/iconplus.png')?>" alt="career">
                        <img src="<?= base_url('assets/img/mgs.png')?>" alt="career">
                    </div>
                </div>
                <div class="login">
                    <form method="post" action="<?= base_url('auth/login') ?>">
                    <div class="mb-3" id="firstname">
                            <input type="hidden" name="id_job" value="<?= $career['id_job'] ?>">
                            <label for="email" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="email" name="first_name" placeholder="Fisrt Name">
                        </div>
                        <div class="mb-3" id="lastname">
                            <label for="email" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="email" name="last_name" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <button type="submit" class="btn btn-danger">Submit</button>
                        <a id="register">Register</a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let register = document.querySelector('#register');
    let form = document.querySelector('form');
    let login = document.querySelector('.login');
    let firstname = document.querySelector('#firstname');
    let lastname = document.querySelector('#lastname');

    register.addEventListener('click', ()=>{
        firstname.style.display = "block";
        lastname.style.display = "block";
        login.style.height = "500px";
        form.setAttribute('action','<?= base_url('auth/register') ?>');
    })
</script>

</body>
