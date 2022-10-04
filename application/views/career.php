<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link rel="icon" href="<?= base_url('assets/img/mgs.ico') ?>">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-navbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-career.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-footer.css')?>">
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="atas">
        <div class="pict">
            <div class="gmbr">
                <img src="<?= base_url('assets/img/career.png') ?>" alt="career">
            </div>
        </div>
        <div class="text">
            <h3>Start Your</h3>
            <h3><div class="merah">Carrer</div>Here</h3>
            <p>To create something, the individual minds that make up our collective imaginations must come together in this space. Rather than just joining a company, you'll be making a contribution here.</p>
            <button class="btn-danger">See More</button>
        </div>
    </div>

    <div class="content">
        <div class="icon">
            <i class="fa-solid fa-floppy-disk"></i>
        </div>
        <div class="judul">
            <h1>About <div class="merah">Job</div> and <div class="merah">Career</div></h1>
        </div>
    </div>

    <div class="jadwal">
        <?php foreach ($career as $c) :
            $date = strtotime($c['exp_date']);
            $exp_date = date('M d, Y',$date)
        ?>
        <div class="box1">
            <div class="row row-cols-4">
                <div class="col-sm-3">
                    <h3><?= $c['nama_job'] ?></h3>
                    </i><i class="fa-solid fa-briefcase"></i>PT Mega Giga Solusindo
                </div>
                <div class="col-sm-3" style='margin-top: 45px'>
                    </i><i class="fa-solid fa-location-dot"></i><?= $c['country'] ?>
                </div>
                <div class="col-sm-3">
                    <h5><?= $exp_date ?></h5>
                    <p>no of vacancies</p>
                </div>
                <?php
                if($this->session->userdata('id_candidates') == null){
                    ?><a class="btn" href="<?= base_url('auth/form')?>/<?= $c['id_job'] ?>">Apply</a><?php
                }
                else{
                    ?><a class="btn" href="<?= base_url('user/apply')?>/<?= $c['id_job'] ?>">Apply</a><?php
                }?>
            </div>
        </div>
        <?php endforeach ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
        form.setAttribute('action','<?= base_url('proses/register') ?>');
    })
</script>

</body>
