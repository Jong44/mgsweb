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
            <p>Job Title : </p>
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
            <form>
                <div class="kiri">
                    
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputfirstname" name="" placeholder="First name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="inputemail" name="" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nationality</label>
                            <select id="selectnationality" class="form-select" name="">
                                <option>Select Nationality</option>
                                <option>Izaz</option>
                                <option>Gans</option>
                                <option>Parah</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select id="selectnationality" class="form-select" name="" required>
                                <option>None</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    
                </div>
                <div class="kanan">
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputfirstname" placeholder="Last name" name="" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>                            
                            <input type="text" class="form-control" id="inputemail" name="" placeholder="+62" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="inputemail" name="" placeholder="mm/dd/yyyy" required>
                        </div>
                    </div>
                </div>

                <div class="edu">
                    <div class="opening">
                        <div class="icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h3>Educational Qualification</h3>
                    </div>
                    <div class="textarea">
                        <div class="dihapus">
                            <p>No employment record available!</p>
                        </div>
                        <div class="form-edu">
                            <div class="input-1">
                                <label class="form-label">level of education *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                            </div>

                            <div class="input-1">
                                <label class="form-label">Exam or degree title *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                            </div>

                            <div class="input-1">
                                <label class="form-label">Year of passing *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input> 
                            </div>

                            <div class="input-1">
                                <label class="form-label">Institute name *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                            </div>
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
                            <div class="input-1">
                                <label class="form-label">Company name *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                            </div>

                            <div class="input-1">
                                <label class="form-label">Designation *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                            </div>

                            <div class="input-1">
                                <label class="form-label">Department *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input> 
                            </div>

                            <div class="input-1">
                                <label class="form-label">Employment periode *</label>
                                <div class="date">
                                    <input type="date" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                                    <p>to</p>
                                    <input type="date" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input>
                                </div>
                            </div>

                            <div class="respon">
                                <label class="form-label">Responsibilities *</label>
                                <input type="text" class="form-control" placeholder="*No education qualification available" name="" id="inputeducational"></input> 
                            </div>
                        <button type="button" class="btn btn-danger" style="border: none; border-radius: 25px; height: 50px; width: 170px; margin-top: 40px;">Add Company</button>
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
                                <input type="text" class="form-control" id="inputsalary" placeholder="Expected salary">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Linkedin profile link*</label>
                                <input type="text" class="form-control" id="inputlinked" placeholder="www.linkedin.com/in.">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facebook profile link*</label>
                                <input type="text" class="form-control" id="inputfacebook" placeholder="*www.facebook.com/">
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
                            <input type="file" id="default" accept="image/*" hidden>
                            <div class="img-area">
                                <div class="pict">
                                    <img src="izaz.jpeg" alt="">
                                </div>
                                <h3>Upload Photo</h3>
                                <p>*You can upload JPG, JPEG, PNG size must be less than <span>2MB</span></p>
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                            <button onclick = "defaultbtnActive()" id="custom">Choose File</button>
                            <div class="file-name">File name here</div>
                        </div>    
                        
                        <div class="cv">
                            <p>egfjhdcksxmz</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // education
        let btn = document.querySelector("#eduBtn");
        let textarea = document.querySelector(".textarea");
        let title = document.querySelector(".edu .opening h3")
        let text = document.querySelector(".dihapus");
        btn.addEventListener("click", ()=>{
            let divTag = ``;
            let deleteTag = ` <span style="" id="delete"><i class="fa-solid fa-circle-xmark"></i></span> `
            textarea.insertAdjacentHTML("afterbegin", divTag );
            title.insertAdjacentHTML("afterend", deleteTag);
            text.remove();
        });
    </script>   
</body>