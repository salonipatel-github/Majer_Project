<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="problem.css">
    <a href="https://fonts.googleapis.com/css2?family=Crimson+Pro"></a>
   <title>Searching Page</title>
</head>
<body>
    <nav>
        <div class="container main-nav flex">
            <a href="#" class="company-logo">
                <img src="assett.png" alt="company logo">
            </a>
            <div class="nav-links" id="nav-links">
                <ul class="flex">
                    <li><a href="#" class="hover-link1">About</a></li>
                    <li><a href="#" class="hover-link1">Team</a></li>
                    <li><a href="#" class="hover-link1">Project</a></li>
                    <li><a href="#" class="hover-link1">Result</a></li>
                    <!-- <li><a  href="Registretion1/index.html" class="hover-link secondary-button">Signin/Signup</a></li> -->
                    <!-- <li><a href="Registretion1/index.html" target="blank"><button class="btn">Signin/Signup</button></a> -->
                    </li>
                    <!-- <li><a href="" class="hover-link primary-button">Sign up</a></li> -->
                </ul>
            </div>
            <a href="#" class="nav-toggle hover-link" id="nav-toggle">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </nav>

    <!-- first page -->
        <!-- <h3 class="hed">We are <span  style="font-weight: bold">India’s largest*</span> and fastest growing <span style="font-weight: bold">community of builders</span></h3>
         -->
    <h1 class="hed">Online Integrated Platform For Projects </h1>


<!-- second page -->
<div class="cont1">
    <!-- <label for="value"> Collage Name </label> -->
    <input type="text" class="sel1" placeholder=" Search.." name="state" id="state" class="form-control">

</div>





    <!-- thrid page -->

        <form class="box">
            <div class="cont">
                <label for="value"> Degree<label>
                <select class="sel" name="degree" id="degree1" class="form-control">
                    <option value="degree">Select Here</option>
                    <option value="degree">B.Tech</option>
                    <option value="degree">M.Tech</option>
                    <option value="degree">B.S.C</option>
                    <option value="degree">M.S.C</option>
                    <option value="degree">M.B.A</option> 
                </select>
            </div>
            <div class="cont">
                <label for="value"> Categories </label>
            <select class="sel" name="degree" id="degree1" class="form-control">
                <option value="degree">Select Here</option>
                <option value="degree">Softwere</option>
                <option value="degree">Hardwere</option>
            </select>
        </div>


        <div class="cont">
            <label for="value"> Stete</label>
            <select class="sel" name="state" id="state" class="form-control">
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
            </div>
        </form>
    </div>

    <!-- forth page -->  
    <div class="f1">
        <form class="box">
            <div class="cont">
                <label for="value"> Year Making<label>
                <select class="sel" name="degree" id="degree1" class="form-control">
                    <option value="degree">Select Here</option>
                    <option value="degree"></option>
                    <option value="degree">1 Year</option>
                    <option value="degree">2 Year</option>
                    <option value="degree">3 Year</option>
                    <option value="degree">4 Year</option> 
                </select>
            </div>
            <div class="cont">
                <label for="value"> Collage Name </label>
                <input type="text" class="sel" placeholder=" Collage Name" name="state" id="state" class="form-control">
            <!-- <select class="sel" name="degree" id="degree1" class="form-control">
                <option value="degree">Select Here</option>
                <option value="degree">Softwere</option>
                <option value="degree">Hardwere</option>
            </select> -->
        </div>


        <div class="cont">
            <label for="value"> University Name</label>
            <input type="text" class="sel" placeholder=" University Name" name="state" id="state" class="form-control">
            </div>
        </form>
    </div>

    <!-- fifth -->

    <!-- <div class="f1">
        <form class="box">
            <div class="cont">
                <label for="value"> Degree<label>
                <select class="sel" name="degree" id="degree1" class="form-control">
                    <option value="degree">Select Here</option>
                    <option value="degree">B.Tech</option>
                    <option value="degree">M.Tech</option>
                    <option value="degree">B.S.C</option>
                    <option value="degree">M.S.C</option>
                    <option value="degree">M.B.A</option> 
                </select>
            </div>
            <div class="cont">
                <label for="value"> Categories </label>
            <select class="sel" name="degree" id="degree1" class="form-control">
                <option value="degree">Select Here</option>
                <option value="degree">Softwere</option>
                <option value="degree">Hardwere</option>
            </select>
        </div>


        <div class="cont">
            <label for="value"> Stete</label>
            <select class="sel" name="state" id="state" class="form-control">
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
            </div>
        </form>
    </div> -->

    <!-- forth page -->  
   
        <form class="box">
            <div class="cont">
                <label for="value"> City </label>
            <input class="sel" name="degree" id="degree1" class="form-control">  
            </div>
        </form>

<!-- 

        <div class="cont">
            <label for="value"> Collage Name</label>
            <input type="text" class="sel" placeholder=" University Name" name="state" id="state" class="form-control">
            </div>
        </form>
    </div> -->



    <!-- teble -->

    <div class="table">
        
    </div>




    <!-- //////// -->


   
     <!-- footer -->

     <footer>
        <div class="container flex footer-container">
           
            <div class="link-column flex">
                <h4>Product</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Methodology</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Resources</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
        </div>
    </footer>

    <!-- subfooter -->

    <div class="subfooter">
        <div class="container flex subfooter-container">
            <a class="hover-link1" href="#">Privacy policy</a>
            <a class="hover-link1" href="#">Terms & Condition</a>
            <a class="hover-link1" href="#">Security Information</a>
            <a class="hover-link1" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="hover-link1" href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>


  <!-- <h1>welcome<?php echo $_SESSION['username']?> </h1> -->
    
</body>
</html>