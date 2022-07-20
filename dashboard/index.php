<?php
    include '../details.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | CJ Community</title>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://t3.ftcdn.net/jpg/03/46/83/96/240_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"><span class="font-weight-bold">Full Name</span><span class="text-black-50">ex@domain.xyz</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input readonly type="text" class="form-control" style="cursor: not-allowed;" placeholder="" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input readonly type="text" class="form-control" style="cursor: not-allowed;" placeholder="" value=""></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input readonly type="text" class="form-control" style="cursor: not-allowed;" placeholder="" value=""></div>
                    </div>
                    <div class="mt-5 text-center"><a type="button" name="edit-profile" class="btn btn-primary profile-button" href="chat/edit-profile.php">Edit Profile</a></div>
                    <div class="text-center" style="position: relative;top:15px;"><a href="/login_success/index.html" class="btn btn-primary profile-button" type="button">Go to Dashboard</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>