<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
    <link rel="icon" href="./assets/img/mgs.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-navbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-preview.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-footer.css')?>">
    
    <script src ="script.js"></script>
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>

</head>
<body>
    <form action="<?= base_url('proses/submit')?>" method="post">
    <div class="title">
        <h1>PT. Mega Giga Solusindo</h1>
        <div class="jobtitle">
            <p>Job Title : <?= $career['nama_job'] ?></p>
        </div>
    </div>
    <div class="container1">
        <div class="square1">
            <div class="iconcheck">
                <i class="fa-regular fa-circle-check"></i>
            </div>
            <div class="text">
                <p>Personal Information</p>
            </div>
        </div>
        <div class="hr"></div>
        <div class="square2">
            <div class="iconcheck">
                <i class="fa-regular fa-circle-check"></i>
            </div>
            <div class="text">
                <p>Preview</p>
            </div>
        </div>
    </div>

    <div class="attention">
        <p>Review your information then 'Submit Job Application'</p>
    </div>
    

    <div class="input">
        <div class="opening">
            <div class="icon">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
            <h3>Basic Information</h3>
        </div>

        <div class="personal-information">
            <div class="kiri">
                <div class="first-name kotak">
                    <label class="form-label">First Name</label>
                    <input type="hidden" name="id_job" value="<?= $career['id_job'] ?>">
                    <input type="text" id="" class="form-control" name="id_candidates" value="<?= $preview['id_candidates'] ?>" hidden></input>
                    <input type="text" id="" class="form-control" name="first_name" value="<?= $preview['first_name'] ?>" readonly></input>
                </div>
                <div class="email-address kotak">
                    <label class="form-label">Email Address</label>
                    <input type="text" id="" class="form-control" value="<?= $preview['email'] ?>" disabled></input>
                </div>
                <div class="nationality kotak">
                    <label class="form-label">Nationality</label>
                    <input type="text" id="" class="form-control" value="<?= $preview['nationality'] ?>" disabled></input>
                </div>
                <div class="gender kotak">
                    <label class="form-label">Gender</label>
                    <input type="text" id="" class="form-control" value="<?= $preview['gender'] ?>" disabled></input>
                </div>
            </div>
            <div class="kanan">
                <div class="last-name kotak">
                    <label class="form-label">Last Name</label>
                    <input type="text" id="" class="form-control" name="last_name" value="<?= $preview['last_name'] ?>" readonly></input>
                </div>
                <div class="phone-number kotak">
                    <label class="form-label">Phone Number</label>
                    <input type="text" id="" class="form-control" value="<?= $preview['no_hp'] ?>" disabled></input>
                </div>
                <div class="date-of-birth kotak">
                    <label class="form-label">Date of birth</label>
                    <input type="text" id="" class="form-control" value="<?= $preview['tgl_lahir'] ?>" disabled></input>
                </div>
            </div>
        </div>
    </div>

    <div class="other">
        <div class="opening">
            <div class="icon">
                <i class="fa-solid fa-border-all"></i>
            </div>
            <h3>Other</h3>
        </div>
        <div class="salary">
            <div class="mb-3">
                <label class="form-label">Expected salary*</label>
                <input type="text" class="form-control" id="inputsalary" name="expected_salary" value="<?= $preview['expected_salary'] ?>" disabled></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Linkedin profile link*</label>
                <input type="text" class="form-control" id="" name="" value="<?= $preview['linked'] ?>" disabled></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook profile link*</label>
                <input type="text" class="form-control" id="" name="" value="<?= $preview['fb'] ?>" disabled></input>
            </div>
        </div>
    </div>

    <div class="document">
        <div class="opening">
            <div class="icon">
                <i class="fa-solid fa-floppy-disk"></i>
            </div>
        <h3>Document</h3>
        </div>
        <div class="file">
            <div class="profile">
                <p class="bold">Profile Picture</p>
                <p>*You can upload only JPG, JPEG, PNG</p>
                <div class="img-area">
                    <img src="<?= base_url('assets/img/candidates') ?>/<?= $preview['img_profil'] ?> ">
                    
                </div>
            </div>
            <div class="cv">
                <p class="bold">Provide Resume</p>
                <p>*You can upload only PDF of size up to 5MB</p>
                <p>*Or you can provide resume link</p>
            </div>
        </div>
        <div class="btn-submit">
            <a class="cancel">Back</a>
            <button type="submit">Submit</button>   
        </div>
    </div>
    </form>
    
</body>