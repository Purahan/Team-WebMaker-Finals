<?php
  include('includes/functions.php');
    
  $pic_location = $_SESSION['pic'];
  if(!empty($_POST)) {
    if (isset($_FILES['profile-pic']) && $_FILES['profile-pic']['name'] != '') {
      $arrFileName=explode('.',$_FILES['profile-pic']['name']);
      $fileExt=$arrFileName[count($arrFileName)-1];
      $uniqueFilename = uniqid().'.'.$fileExt;
      move_uploaded_file($_FILES['profile-pic']['tmp_name'], "assets/img/users/".$uniqueFilename);
      $pic_location = "assets/img/users/".$uniqueFilename;
    }

    $sql = "UPDATE users SET full_name='".$_POST['name']."', phone=".$_POST['phone'].", dob='".$_POST['dob']."', profile_pic='".$pic_location."', email='".$_POST['email']."', gender='".$_POST['gender']."', modified_on='".date("Y-m-d")."' WHERE id=".$_SESSION['id'];
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['dob'] = $_POST['dob'];
        $_SESSION['pic'] = $pic_location;
        header("Location: profile.php");
    } else {
      $error=' We are unable to update your Profile. Please try again later';
    }
  }

  $sql = "SELECT id, full_name, profile_pic, phone, dob, email, gender FROM `users` WHERE id='".$_SESSION['id']."'";
  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    $profileData = $result->fetch_assoc();
  }
  page_header();
  nav_bar();
?>
  <!---profile--->
  <div class="main">
    <!-- Header -->
    <!-- <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://media.istockphoto.com/photos/watercolor-textured-background-picture-id887755698?k=20&m=887755698&s=612x612&w=0&h=UcvMcQg07D_WfBT88iOWWXMV5WMRXRM8nqJRXcySUNA=); background-size: cover; background-position: center top;"> -->
    
    <!-- Mask -->
    <!-- <span class="mask bg-gradient-default opacity-8"></span> -->
      
    <!-- Page content -->
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?=$_SESSION['pic']?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <form action="profile.php" method="post">
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <input type="file" accept="image/*" style="display: none;" name="profile-pic" id="pic">
                <label for="pic" class="btn btn-sm btn-info mt-5 mb-0" style="margin-left: 30%;"><i class="fas fa-edit"></i> Edit Profile Picture</label>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">3</span>
                      <span class="description">project completed</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">project remaining</span>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  User 1
                </h3>
                
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>something
                </div>
                <div>
                  <i class="ni education_hat mr-2">something</i>
                </div>
                <hr class="my-4">
                <p>somethingsomethingsomethingsomething</p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-username">Full Name</label>
                          <input type="text" name="name" id="input-username" class="form-control form-control-alternative" placeholder="Full Name" value="<?=$profileData['full_name']?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-email">Email address</label>
                          <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="Email" value="<?=$profileData['email']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Phone no.</label>
                          <input type="text" name="phone" id="input-first-name" class="form-control form-control-alternative" placeholder="Phone no." value="<?=$profileData['phone']?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-last-name">Date of Birth</label>
                          <input type="date" name="dob" id="input-last-name" class="form-control form-control-alternative" placeholder="" value="<?=$profileData['dob']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group focused">
                          <label class="form-control-label" for="input-first-name">Gender</label>
                          <select class="form-control form-control-alternative" name="gender" id="gender">
                              <optgroup label="Gender">
                                  <option value="">Gender</option>
                                  <option value="m" <?=$profileData['gender']=='m'?'selected':'';?>>Male</option>
                                  <option value="f" <?=$profileData['gender']=='f'?'selected':'';?>>Female</option>
                              </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 my-4" style="text-align: center;">
                        <button class="btn btn-primary bg-primary border-primary mt-2" type="submit"><i class="far fa-save"></i> Save Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
                <hr class="my-4">
                
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">somethingsomethingsomething.</textarea>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php page_footer(false); ?>