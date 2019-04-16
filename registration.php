<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IO18 Extended</title>
    <?php include "components/headerScript.php" ?>

</head>

<body class="white-skin">
    <?php include "components/navbar.php" ?>
    <br><br>
    <div class="container-fluid mt-1 pt-5 pb-5"  style="border-top: 4.8px solid #9e9e9e;" >
        <div class="row align-items-center">
            <div class="col-md-10 offset-md-1 p-3" >
                <h1 class="google-font h1-responsive" style="color: #616161 ">Registration is Open</h1>
                <p>You will automatically be placed on the waitlist while we process your application, and if a spot becomes available, we will let you know via email. If you can't make it, be sure to watch the livestream.
                <br><br>Questions? Please contact gdgjalandhar@gmail.com. 
                <a href="#">GDG Jalandhar Code of Conduct</a></p> 
                <br>  
                <hr>
            </div>
        </div>

        <div class="row align-items-center mt-4">
            <div class="col-md-8 offset-md-2 pt-2 pb-2" >
                <div class="container-fluid">

                    <div class="row mb-5 pb-5">
                        <!-- <div class="col-md-2 text-center">
                            <p style="background: #31E7B6;height: 40px;width: 40px;" class="p-2"><b>1</b></p> 
                        </div> -->
                        <div class="col-md-10">
                            <h4 id="SignInHeader"><span style="background: #31E7B6;height: 40px;width: 40px;" class="p-2"><b> &nbsp; 1 &nbsp; </b></span> &nbsp; Sign in</h4>
                            <br>
                            <p id="SignInMsg" style="font-size: 130%;color: #616161" class="google-font">You need to sign in with a Google account or a Gmail address to register for this event.</p>

                            <button type="button" id="login" class="btn btn-primary m-0 z-depth-0">Sign in with Google</button>
                            <button type="button" id="logout" class="btn btn-danger m-0 z-depth-0 btn-sm">Logout</button>
                        </div>
                    </div>

                    <!-- Row 2 Details -->
                    <div class="row mt-5 pb-5" id="UserDetails">
                        <!-- <div class="col-md-2 text-center">
                            <p style="background: #31E7B6;height: 40px;width: 40px;" class="p-2"><b>2</b></p> 
                        </div> -->
                        <div class="col-md-10">
                            <h4><span style="background: #31E7B6;height: 40px;width: 40px;" class="p-2"><b> &nbsp; 2 &nbsp; </b></span> &nbsp; Your details</h4>
                            <br>
                            <p style="font-size: 130%;color: #616161" class="google-font"><b>We're accepting registrations from this form on a first-come, first-served basis until seats are full. </b></p>

                            <div class="container-fluid p-0" id="UserInput">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <br>
                                            <div class="md-form">
                                                <input type="text" id="name" class="form-control">
                                                <label for="name">Full Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <br>
                                            <div class="md-form">
                                                <input type="number" id="mobile" class="form-control">
                                                <label for="mobile">Contact Number</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <br>
                                            <div class="md-form">
                                                <input type="text" id="organization" class="form-control">
                                                <label for="organization">Organization/University</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <br>
                                            <div class="md-form">
                                                <input type="text" id="designation" class="form-control">
                                                <label for="designation">Stream/Semester/Designation(For Employee)</label>
                                                <small style="color:#CC0000" class="mt-0">In Case of Organization Write Your Designation</small>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <br>
                                            <div class="md-form">
                                                <textarea type="text" id="why" class="md-textarea md-textarea-auto form-control" rows="2"></textarea>
                                                <label for="why">Why do you want to attend Google IO Extended'18?</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <br>
                                            <button type="button" class="m-0 btn btn-primary waves-effect waves-light z-depth-0" id="submit">SUBMIT</button>
                                        </div>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                    <!-- Row 2 Details End -->

                    <!-- Row 3 Success -->
                    <div class="row mt-5" id="confirmation">
                            <div class="col-md-10">
                                <h4><span style="background: #31E7B6;height: 40px;width: 40px;" class="p-2"><b> &nbsp; 3 &nbsp; </b></span> &nbsp; Confirmation</h4>
                                <br>
                                <p style="font-size: 130%;color: #616161" class="google-font"><b>Your Details has been submitted Successfully! </b></p>
    
                            </div>
                        </div>
                    <!-- Row 3 Success -->

                    <!--  -->
                    <!-- Row 3 Success -->
                    <div class="row mt-5" id="updateData">
                        <div class="col-md-10">
                            <h4> <span style="background: #31E7B6;height: 40px;width: 40px;" class="p-2"><b> &nbsp; 2 &nbsp; </b></span> &nbsp; Confirmation</h4>
                            <br>
                            <p style="font-size: 130%;color: #616161" class="google-font"><b>You have already filled this form.If you want to update this form then mail at vrijraj2396@gmail.com </b></p>

                        </div>
                    </div>
                    <!-- Row 3 Success -->


                </div>
            </div>
        </div>
    </div>

   
    
    <?php include "components/patners.php" ?>
    <?php include "components/socials.php" ?>


    <?php include "components/footer.php" ?>
    <?php include "components/footerScript.php" ?>


    <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
    <script>
	var _0x656c=["\x64\x69\x73\x70\x6C\x61\x79","\x73\x74\x79\x6C\x65","\x55\x73\x65\x72\x44\x65\x74\x61\x69\x6C\x73","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x6E\x6F\x6E\x65","\x63\x6F\x6E\x66\x69\x72\x6D\x61\x74\x69\x6F\x6E","\x6C\x6F\x67\x6F\x75\x74","\x75\x70\x64\x61\x74\x65\x44\x61\x74\x61","\x41\x49\x7A\x61\x53\x79\x42\x52\x69\x62\x4E\x52\x55\x49\x4E\x51\x61\x49\x72\x7A\x32\x65\x79\x6B\x30\x48\x32\x4E\x79\x44\x4E\x51\x44\x45\x30\x6F\x7A\x63\x4D","\x69\x6F\x32\x30\x31\x38\x77\x65\x62\x2E\x66\x69\x72\x65\x62\x61\x73\x65\x61\x70\x70\x2E\x63\x6F\x6D","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x69\x6F\x32\x30\x31\x38\x77\x65\x62\x2E\x66\x69\x72\x65\x62\x61\x73\x65\x69\x6F\x2E\x63\x6F\x6D","\x69\x6F\x32\x30\x31\x38\x77\x65\x62","\x69\x6F\x32\x30\x31\x38\x77\x65\x62\x2E\x61\x70\x70\x73\x70\x6F\x74\x2E\x63\x6F\x6D","\x32\x31\x35\x30\x38\x31\x36\x32\x30\x30\x37\x32","\x69\x6E\x69\x74\x69\x61\x6C\x69\x7A\x65\x41\x70\x70","\x63\x6C\x69\x63\x6B","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x6C\x6F\x67\x69\x6E","\x73\x75\x62\x6D\x69\x74","\x61\x75\x74\x68","\x63\x6F\x64\x65","\x6D\x65\x73\x73\x61\x67\x65","\x65\x6D\x61\x69\x6C","\x63\x72\x65\x64\x65\x6E\x74\x69\x61\x6C","\x63\x61\x74\x63\x68","\x61\x63\x63\x65\x73\x73\x54\x6F\x6B\x65\x6E","\x75\x73\x65\x72","\x6C\x6F\x67","\x74\x68\x65\x6E","\x73\x69\x67\x6E\x49\x6E\x57\x69\x74\x68\x50\x6F\x70\x75\x70","\x62\x6C\x6F\x63\x6B","\x73\x69\x67\x6E\x4F\x75\x74","\x55\x73\x65\x72\x20\x45\x6D\x61\x69\x6C\x20","\x76\x61\x6C\x75\x65","\x6E\x61\x6D\x65","\x6D\x6F\x62\x69\x6C\x65","\x6F\x72\x67\x61\x6E\x69\x7A\x61\x74\x69\x6F\x6E","\x64\x65\x73\x69\x67\x6E\x61\x74\x69\x6F\x6E","\x77\x68\x79","\x55\x73\x65\x72\x20\x53\x75\x63\x63\x65\x73\x73\x46\x75\x6C\x6C\x79\x20\x52\x65\x67\x69\x73\x74\x65\x72\x65\x64","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x55\x73\x65\x72\x49\x6E\x70\x75\x74","\x54\x68\x61\x6E\x6B\x20\x79\x6F\x75\x20\x46\x69\x6C\x6C\x69\x6E\x67\x20\x74\x68\x69\x73\x20\x46\x6F\x72\x6D","\x73\x65\x74","\x49\x4F\x41\x74\x74\x65\x6E\x64\x65\x65\x73\x2F","\x72\x65\x66","\x64\x61\x74\x61\x62\x61\x73\x65","\x79\x6F\x75\x20\x6E\x65\x65\x64\x20\x74\x6F\x20\x4C\x6F\x67\x69\x6E\x20\x77\x69\x74\x68\x20\x47\x6F\x6F\x67\x6C\x65","\x64\x69\x73\x70\x6C\x61\x79\x4E\x61\x6D\x65","\x65\x6D\x61\x69\x6C\x56\x65\x72\x69\x66\x69\x65\x64","\x70\x68\x6F\x74\x6F\x55\x52\x4C","\x69\x73\x41\x6E\x6F\x6E\x79\x6D\x6F\x75\x73","\x75\x69\x64","\x70\x72\x6F\x76\x69\x64\x65\x72\x44\x61\x74\x61","\x53\x69\x67\x6E\x49\x6E\x4D\x73\x67","\x3C\x62\x20\x73\x74\x79\x6C\x65\x3D\x27\x63\x6F\x6C\x6F\x72\x3A\x62\x6C\x75\x65\x27\x3E","\x3C\x2F\x62\x3E\x20\x53\x75\x63\x63\x65\x73\x73\x66\x75\x6C\x6C\x79\x20\x4C\x6F\x67\x67\x65\x64\x20\x49\x6E\x20\x77\x69\x74\x68\x20\x3A\x20\x3C\x62\x20\x73\x74\x79\x6C\x65\x3D\x27\x63\x6F\x6C\x6F\x72\x3A\x62\x6C\x75\x65\x27\x3E","\x3C\x2F\x62\x3E","\x76\x61\x6C","\x6F\x6E\x63\x65","\x65\x72\x72","\x59\x6F\x75\x20\x6E\x65\x65\x64\x20\x74\x6F\x20\x73\x69\x67\x6E\x20\x69\x6E\x20\x77\x69\x74\x68\x20\x61\x20\x47\x6F\x6F\x67\x6C\x65\x20\x61\x63\x63\x6F\x75\x6E\x74\x20\x6F\x72\x20\x61\x20\x47\x6D\x61\x69\x6C\x20\x61\x64\x64\x72\x65\x73\x73\x20\x74\x6F\x20\x72\x65\x67\x69\x73\x74\x65\x72\x20\x66\x6F\x72\x20\x74\x68\x69\x73\x20\x65\x76\x65\x6E\x74\x2E","\x6F\x6E\x41\x75\x74\x68\x53\x74\x61\x74\x65\x43\x68\x61\x6E\x67\x65\x64"];document[_0x656c[3]](_0x656c[2])[_0x656c[1]][_0x656c[0]]= _0x656c[4];document[_0x656c[3]](_0x656c[5])[_0x656c[1]][_0x656c[0]]= _0x656c[4];document[_0x656c[3]](_0x656c[6])[_0x656c[1]][_0x656c[0]]= _0x656c[4];document[_0x656c[3]](_0x656c[7])[_0x656c[1]][_0x656c[0]]= _0x656c[4];var config={apiKey:_0x656c[8],authDomain:_0x656c[9],databaseURL:_0x656c[10],projectId:_0x656c[11],storageBucket:_0x656c[12],messagingSenderId:_0x656c[13]};firebase[_0x656c[14]](config);document[_0x656c[3]](_0x656c[17])[_0x656c[16]](_0x656c[15],loginUser);document[_0x656c[3]](_0x656c[18])[_0x656c[16]](_0x656c[15],addData);document[_0x656c[3]](_0x656c[6])[_0x656c[16]](_0x656c[15],logoutUser);var provider= new firebase[_0x656c[19]].GoogleAuthProvider();function loginUser(){firebase[_0x656c[19]]()[_0x656c[29]](provider)[_0x656c[28]](function(_0x2fa8x9){var _0x2fa8xa=_0x2fa8x9[_0x656c[23]][_0x656c[25]];var _0x2fa8xb=_0x2fa8x9[_0x656c[26]];console[_0x656c[27]](_0x2fa8xb)})[_0x656c[24]](function(_0x2fa8x4){var _0x2fa8x5=_0x2fa8x4[_0x656c[20]];var _0x2fa8x6=_0x2fa8x4[_0x656c[21]];var email=_0x2fa8x4[_0x656c[22]];var _0x2fa8x8=_0x2fa8x4[_0x656c[23]]})}function logoutUser(){firebase[_0x656c[19]]()[_0x656c[31]]()[_0x656c[28]](function(){document[_0x656c[3]](_0x656c[6])[_0x656c[1]][_0x656c[0]]= _0x656c[4];document[_0x656c[3]](_0x656c[17])[_0x656c[1]][_0x656c[0]]= _0x656c[30];document[_0x656c[3]](_0x656c[2])[_0x656c[1]][_0x656c[0]]= _0x656c[4];document[_0x656c[3]](_0x656c[7])[_0x656c[1]][_0x656c[0]]= _0x656c[4]})[_0x656c[24]](function(_0x2fa8x4){})}var email;var uid;console[_0x656c[27]](_0x656c[32]+ email);function addData(){if(email){var _0x2fa8xf=document[_0x656c[3]](_0x656c[34])[_0x656c[33]];var _0x2fa8x10=document[_0x656c[3]](_0x656c[35])[_0x656c[33]];var _0x2fa8x11=document[_0x656c[3]](_0x656c[36])[_0x656c[33]];var _0x2fa8x12=document[_0x656c[3]](_0x656c[37])[_0x656c[33]];var _0x2fa8x13=document[_0x656c[3]](_0x656c[38])[_0x656c[33]];var _0x2fa8x14={name:_0x2fa8xf,email:email,mobile:_0x2fa8x10,org:_0x2fa8x11,designation:_0x2fa8x12,why:_0x2fa8x13,timestamp:Date(),uid:uid};firebase[_0x656c[46]]()[_0x656c[45]](_0x656c[44]+ uid)[_0x656c[43]](_0x2fa8x14)[_0x656c[28]](()=>{alert(_0x656c[39]);document[_0x656c[3]](_0x656c[41])[_0x656c[40]]= _0x656c[42];document[_0x656c[3]](_0x656c[5])[_0x656c[1]][_0x656c[0]]= _0x656c[30]});console[_0x656c[27]](email)}else {alert(_0x656c[47])}}firebase[_0x656c[19]]()[_0x656c[62]](function(_0x2fa8xb){if(_0x2fa8xb){var _0x2fa8x15=_0x2fa8xb[_0x656c[48]];email= _0x2fa8xb[_0x656c[22]];var _0x2fa8x16=_0x2fa8xb[_0x656c[49]];var _0x2fa8x17=_0x2fa8xb[_0x656c[50]];var _0x2fa8x18=_0x2fa8xb[_0x656c[51]];uid= _0x2fa8xb[_0x656c[52]];var _0x2fa8x19=_0x2fa8xb[_0x656c[53]];console[_0x656c[27]](email);document[_0x656c[3]](_0x656c[54])[_0x656c[40]]= _0x656c[55]+ _0x2fa8x15+ _0x656c[56]+ email+ _0x656c[57];document[_0x656c[3]](_0x656c[6])[_0x656c[1]][_0x656c[0]]= _0x656c[30];document[_0x656c[3]](_0x656c[17])[_0x656c[1]][_0x656c[0]]= _0x656c[4];firebase[_0x656c[46]]()[_0x656c[45]](_0x656c[44]+ uid)[_0x656c[59]](_0x656c[33],(_0x2fa8x1a)=>{if(_0x2fa8x1a[_0x656c[58]]()){document[_0x656c[3]](_0x656c[2])[_0x656c[1]][_0x656c[0]]= _0x656c[4];document[_0x656c[3]](_0x656c[7])[_0x656c[1]][_0x656c[0]]= _0x656c[30]}else {document[_0x656c[3]](_0x656c[2])[_0x656c[1]][_0x656c[0]]= _0x656c[30]}})}else {document[_0x656c[3]](_0x656c[2])[_0x656c[1]][_0x656c[0]]= _0x656c[4];console[_0x656c[27]](_0x656c[60]);document[_0x656c[3]](_0x656c[54])[_0x656c[40]]= _0x656c[61]}})
    </script>

</body>
</html>