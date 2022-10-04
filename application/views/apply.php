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
    <link rel="stylesheet" href="<?= base_url('assets/css/style-apply.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style-footer.css')?>">
    
    <script src ="script.js"></script>
    <script src="https://kit.fontawesome.com/860ae798ee.js" crossorigin="anonymous"></script>

</head>
<body>
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
    <div class="pemberitahuan">
        <p>*This information willbe stored for future reference. 
            You need not Provide information the next time you apply for a job on this 
            website</p>
    </div>

    <div class="input">
        <div class="opening">
            <div class="icon">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>
            <h3>Basic Information</h3>
        </div>
        <div class="formulir">
            <form action="<?= base_url('proses/saveForm')?>" method="post" enctype="multipart/form-data">
                <div class="kiri">
                        <input type="hidden" name="id_job" value="<?= $career['id_job'] ?>">
                        <input type="hidden" name="id_candidates" value="<?= $this->session->userdata('id_candidates') ?>">
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputfirstname" name="first_name" placeholder="First name" value="<?= $this->session->userdata('first_name') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="inputemail" name="email" placeholder="Email Address" value="<?= $this->session->userdata('email') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nationality</label>
                            <select id="selectnationality" class="form-select" name="nationality">
                                <option disabled selected>Select Nationality</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Korea">Korea</option>
                                <option value="Jepang">Jepang</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select id="selectnationality" class="form-select" name="gender" required>
                                <option disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    
                </div>
                <div class="kanan">
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputfirstname" placeholder="Last name" name="last_name" value="<?= $this->session->userdata('last_name') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>                            
                            <input type="text" class="form-control" id="inputemail" name="no_hp" placeholder="+62" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="inputemail" name="tgl_lahir" placeholder="mm/dd/yyyy" required>
                        </div>
                    </div>
                </div>

                <div class="edu">
                    <div class="opening">
                        <div class="icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3>Educational Qualification</h3>
                        <div class="iconDelete">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="textarea">
                        <div class="dihapus">
                            <p>No education record available!</p>
                        </div>
                        <button type="button" class="btn btn-danger" style="border: none; border-radius: 25px; height: 50px; width: 170px; margin-top: 50px;" id="eduBtn">Add Academy</button>
                    </div>
                </div>

                <div class="employ">
                    <div class="opening">
                        <div class="icon">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h3>Employment History</h3> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            I have no employment record
                            </label>
                        </div>
                    </div>
                    <div class="form-employ">
                    <div class="textarea">
                        <div class="dihapus">
                            <p>No employment record available!</p>
                        </div>
                        
                        <button type="button" class="btn btn-danger" style="border: none; border-radius: 25px; height: 50px; width: 170px; margin-top: 50px; margin:0px" id="btnEmploy">Add Academy</button>
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
                                <input type="text" class="form-control" id="inputsalary" name="expected_salary" placeholder="Expected salary">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Linkedin profile link*</label>
                                <input type="text" class="form-control" id="inputlinked" name="linked" placeholder="www.linkedin.com/in.">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facebook profile link*</label>
                                <input type="text" class="form-control" id="inputfacebook" name="fb" placeholder="*www.facebook.com/">
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
                    <div class="upload">
                        <div class="profile">
                            <p class="bold">Profile Picture</p>
                            <p>*You can upload only JPG, JPEG, PNG</p>
                            <div class="img-area">
                                <img id="preview">
                                <div class="icon-profile" id="iconProfile">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                            <input type="file" accept="image/jpg,image/jpeg,image/png" name="filefoto" onchange="previewImage(event)" id="file_foto" required >
                        </div>    
                        
                        <div class="cv">
                            <p class="bold">Provide Resume</p>
                            <p>*You can upload only PDF of size up to 5MB</p>
                            <p>*Or you can provide resume link</p>
                            <input type="file" accept="application/pdf" name="filepdf" id="file_foto">
                        </div>
                    </div>
                    <div class="btn-submit">
                        <a class="cancel">Back</a>
                        <button type="submit">Save and Continue</button>   
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // preview
        const previewImage = e => {
            const reader = new FileReader();
            reader.readAsDataURL(e.target.files[0]);
            reader.onload = () => {
                const preview = document.getElementById('preview');
                const icon = document.querySelector('#iconProfile');
                icon.style.display = "none";
                preview.style.display = "block";
                preview.src = reader.result;
            }
        }

        // education
        let btn = document.querySelector("#eduBtn");
        let textarea = document.querySelector(".textarea");
        let title = document.querySelector(".edu .opening h3")
        let text = document.querySelector(".dihapus");
        let delete = document.querySelector(".iconDelete")
        btn.addEventListener("click", ()=>{
            let divTag = `<div class="form-edu">
                            <div class="input-1">
                                <label class="form-label">level of education *</label>
                                <input type="text" class="form-control" id="inputsalary" name="level" placeholder="Expected salary">
                            </div>

                            <div class="input-1">
                                <label class="form-label">Exam or degree title *</label>
                                <input type="text" class="form-control" id="inputsalary" name="exam" placeholder="Expected salary">
                            </div>

                            <div class="input-1">
                                <label class="form-label">Year of passing *</label>
                                <input type="text" class="form-control" id="inputsalary" name="year" placeholder="Expected salary">
                            </div>

                            <div class="input-1">
                                <label class="form-label">Institute name *</label>
                                <input type="text" class="form-control" id="inputsalary" name="institute" placeholder="Expected salary">
                            </div>
                        </div>`;
            textarea.insertAdjacentHTML("afterbegin", divTag );
            delete.style.display = "block"
            text.remove();
        });

        delete.addEventListener("click", ()=>{
            
        })

        // employy
        let btnEmploy = document.querySelector("#btnEmploy");
        let formEmploy = document.querySelector(".form-employ");
        btnEmploy.addEventListener("click", ()=>{
            let formtext=`<div class="input-1">
                                <label class="form-label">Company name *</label>
                                <input type="text" class="form-control" id="inputsalary" name="company" placeholder="Expected salary">
                            </div>

                            <div class="input-1">
                                <label class="form-label">Designation *</label>
                                <input type="text" class="form-control" id="inputsalary" name="designation" placeholder="Expected salary">
                            </div>

                            <div class="input-1">
                                <label class="form-label">Department *</label>
                                <input type="text" class="form-control" id="inputsalary" name="department" placeholder="Expected salary">
                            </div>

                            <div class="input-1">
                                <label class="form-label">Employment periode *</label>
                                <div class="date">
                                <input type="date" class="form-control" id="inputsalary" name="start" placeholder="Expected salary">
                                    <p>to</p>
                                    <input type="date" class="form-control" id="inputsalary" name="end" placeholder="Expected salary">
                                </div>
                            </div>

                            <div class="respon">
                                <label class="form-label">Responsibilities *</label>
                                <input type="text" class="form-control" id="inputsalary" name="respon" placeholder="Expected salary">
                            </div>`;
            formEmploy.insertAdjacentHTML("afterbegin", formtext );            

        })
    </script>   
</body>