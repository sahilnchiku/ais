<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="https://img.icons8.com/cute-clipart/128/000000/edit.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ED1T</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/e394687089.js"></script>
</head>

<body>
  <div class="container">
  <div class="row">
  <div class="col-xs-6 col-xs-offset-3">
    <img src="https://img.icons8.com/cute-clipart/128/000000/edit.png">
  <div class="panel panel-primary">
      <div class="panel-heading"><h3>REGISTERATION FORM</h3></div>
      <div class="panel-body">
      <form class="form-default" action="adduser.php" method="POST" name="addentry">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="please enter your complete name">
      <label for="uname">User Name:</label>
      <input type="text" name="uname" class="form-control" id="uname" placeholder="enter the user name you have chosen">
      <label for="mail">E-Mail:</label>
      <input type="email" name="mail" class="form-control" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required" placeholder="enter your E-MAIL">
      <label for="mob">Contact:</label>
      <input type="tel" name="mob" class="form-control" id="mob" placeholder="enter your mobile number">
      <label for="area">Address:</label>
      <input type="text" name="area" class="form-control" id="area" placeholder="place of residence">
      <label for="field_countries">Country</label>
      <!--
      <select name="field_countries" id="field_countries">
                      <option value="all">SEARCH COUNTRIES</option>
                      <option value="Algeria">Algeria</option>
                      <option value="Angola">Angola</option>
                      <option value="Benin">Benin</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="DR Congo">DR Congo</option>
                      <option value="Egypt">Egypt</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Libya">Libya</option>
                      <option value="India">India</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Mali">Mali</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Niger">NigerA</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Tanzania">Tanzania</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    -->
      </select><br>
      <label for="gender">Select Gender</label><br>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other
      <br>


    <!--  <form action="checkbox.php" method="POST">
      <label for="hobby">Hobbies:</label><br>
      <input type="checkbox" name="check_list[]" value="Dancing"><label>Dancing</label><br/>
      <input type="checkbox" name="check_list[]" value="Singing"><label>Singing</label><br/>
      <input type="checkbox" name="check_list[]" value="Listening music"><label>Listening music</label><br/>
      <input type="checkbox" name="check_list[]" value="Swimming"><label>Swimming</label><br/>
      <input type="checkbox" name="check_list[]" value="Socializing with Friends"><label>Socializing with Friends</label><br/>
      <input type="checkbox" name="check_list[]" value="Writing"><label>Writing</label><br/>


-->


   <!--<label for="gender">Gender:(M/F)</label>
   <input type="text" name="gender" class="form-control" id="gender" placeholder="enter your gender">




   <form action="uploading.php" method="post" enctype="multipart/form-data">
   <h2>Upload Pofile Image |<a href="">AIS</a></h2><br><br>
   <table>
   <tr><td height="70" width="100">Title</td><td><input type="text" required="required" name="ntitle" class="resizedTextbox"><br><br></td></tr>
   <tr><td colspan="2"><input type="file" class="cck" name="sfile" id="fileName" accept="image/*"><br><br></td></tr>
   <tr><td colspan="2"><input class="cck" type="submit" name="notification" value="Upload"/></td></tr>
 </table>-->
   </form>
   <select id="hobby" name="hobby">
   <option value="1">SELECT</option>
   <option value="Dancing">Dancing</option>
   <option value="Drawing">Drawing</option>
   <option value="Writing">Writing</option>
   <option value="Listening music">Listening music</option>
   <option value="Socializing with Friends">Socializing with Friends</option>
   <option value="Swimming">Swimming</option>
   <option value="Writing">Writing</option>
   </select>
   <!--
   <label for="hobby">hobby:</label>
   <input type="text" name="hobby" class="form-control" id="hobby" placeholder="enter your hobbies">-->

      <br>
      <label for="dob">Date Of Birth:</label>
      <input type="date" name="dob" class="form-control" id="dob" placeholder="enter your date of birth">

      <br>




      <br>
      <label for="pswd">Password:</label>
      <input type="password" name="pswd" class="form-control" id="pswd" required="required" pattern=".{6,}" placeholder="create a strong password">

      <br>
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block" value="SUBMIT" name="submitbtn">Submit</button><br>
      </div>
  </div>
</form>
<p>Already Registered?<a href="login.php"><b>  Click</b></a> here.</p>
</div> </div> </div></div> </div>
<footer class="footer">
    <div class="container">
       <center>
          <p></p>
       </center>
    </div>
</footer>
</body>
</html>
