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
                    <!-- </li> -->
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

    <!-- thrid page -->

    <form class="box" action="" method="post">
        <div class="cont1">
            <!-- <label for="value"> Collage Name </label> -->
            <input type="text" class="sel1" placeholder=" Search.." name="Search" id="state" class="form-control">
            <button type="submit" name="chack" class="btn3">Chack</button>

        </div>
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
                    <!-- </div>
        <div class="cont"> -->
                    <label for="value"> Categories </label>
                    <select class="sel" name="Categories" id="degree1" class="form-control">
                        <option value="Categories">Select Here</option>
                        <option value="Categories">Softwere</option>
                        <option value="Categories">Hardwere</option>
                    </select>
        </div>


        <div class="cont">
            <label for="value"> State</label>
            <select class="sel" name="state" id="state" class="form-control">
                <option value="state">Select Here</option>
                <option value="state">Andhra Pradesh</option>
                <option value="state">Andaman and Nicobar Islands</option>
                <option value="state">Arunachal Pradesh</option>
                <option value="state">Assam</option>
                <option value="state">Bihar</option>
                <option value="state">Chandigarh</option>
                <option value="state">Chhattisgarh</option>
                <option value="state">Dadar and Nagar Haveli</option>
                <option value="state">Daman and Diu</option>
                <option value="state">Delhi</option>
                <option value="state">Lakshadweep</option>
                <option value="state">Puducherry</option>
                <option value="state">Goa</option>
                <option value="state">Gujarat</option>
                <option value="state">Haryana</option>
                <option value="state">Himachal Pradesh</option>
                <option value="state">Jammu and Kashmir</option>
                <option value="state">Jharkhand</option>
                <option value="state">Karnataka</option>
                <option value="state">Kerala</option>
                <option value="state">Madhya Pradesh</option>
                <option value="state">Maharashtra</option>
                <option value="state">Manipur</option>
                <option value="state">Meghalaya</option>
                <option value="state">Mizoram</option>
                <option value="state">Nagaland</option>
                <option value="state">Odisha</option>
                <option value="state">Punjab</option>
                <option value="state">Rajasthan</option>
                <option value="state">Sikkim</option>
                <option value="state">Tamil Nadu</option>
                <option value="state">Telangana</option>
                <option value="state">Tripura</option>
                <option value="state">Uttar Pradesh</option>
                <option value="state">Uttarakhand</option>
                <option value="state">West Bengal</option>
            </select>
            <!-- </div> -->
            <!-- </form>
    </div> -->

            <!-- forth page -->
            <!-- <div class="f1">
        <form class="box"> -->
            <!-- <div class="cont"> -->
            <label for="value"> Year Making<label>
                    <select class="sel" name=" Making" id="degree1" class="form-control">
                        <option value=" Making">Select Here</option>
                        <option value=" Making">1 Year</option>
                        <option value=" Making">2 Year</option>
                        <option value=" Making">3 Year</option>
                        <option value=" Making">4 Year</option>
                    </select>
        </div>
        <div class="cont">
            <label for="value"> Collage Name </label>
            <input type="text" class="sel" placeholder=" Collage Name" name="collage_name" id="state"
                class="form-control">
            <!-- <select class="sel" name="degree" id="degree1" class="form-control">
                <option value="degree">Select Here</option>
                <option value="degree">Softwere</option>
                <option value="degree">Hardwere</option>
            </select> -->
            <!-- </div>


            <div class="cont"> -->
            <label for="value"> University Name</label>
            <input type="text" class="sel" placeholder=" University Name" name="University_Name" id="state"
                class="form-control">
        </div>
        <!-- </form>
    </div> -->

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

        <!-- <form class="box">
        <div class="cont"> -->
        <!-- <label for="value"> City </label>
            <input class="sel" name="degree" id="degree1" class="form-control">
        </div> -->
    </form>

    <!-- 

        <div class="cont">
            <label for="value"> Collage Name</label>
            <input type="text" class="sel" placeholder=" University Name" name="state" id="state" class="form-control">
            </div>
        </form>
    </div> -->



    <!-- teble -->

    <!-- <div class="table">
        <table class="table1">
            
            <tr class="t1">
            <th class=hed2>Title</th>
                <td class="t1"></td>
            </tr>
            <tr class="t1">
            <th class=hed2>Technology Bucket</th>
                <td class="t1"> </td>
            </tr>
            <tr class="t1">
            <th class=hed2>Category</th>
                <td class="t1"> </td>
            </tr>
            <tr class="t1">
            <th class=hed2>Description</th>
                <td class="t1"> </td>
            </tr>
            <tr class="t1">
            <th class=hed2>Problem Creater's Organization</th>
                <td class="t1"> </td>
            </tr>
        </table>

    </div> -->
    <?php
    $connection = mysqli_connect('localhost','root' ,'','login_page');
    if(isset($_POST['chack'])){
        $id = $_POST['Search'];
        $Degree = $_POST['degree'];
        $categories = $_POST['Categories'];
        $State = $_POST['state'];
        $making = $_POST['Making'];
        $Collage_name = $_POST['collage_name'];
        $university_Name = $_POST['University_Name'];
        $query = "SELECT * FROM problem_table WHERE 
        Project_Title = '$id' AND 
        Graduate_Degree = '$Degree' AND 
        Project_Category = '$categories' AND 
        College_State = '$State' AND 
        Year_making = '$making' AND 
        College_Name = '$Collage_name' AND 
        University_Name = '$university_Name'";
    
     //   ID='$id',Graduate_Degree=' $Degree ',Project_Category ='$categories',College_State ='  $State',Year_making =' $making',College_Name=' $Collage_name',University_Name=' $university_Name'";
        $query_run = mysqli_query($connection , $query);
       
                // echo $row['Graduate_Degree'];
    
    ?>
    <table class="Tab">
        <tbody>
            <tr>
                <th>Graduate_Degree</th>
                <th>University_Name</th>
                <th>Branch</th>
                <th>Project_Category</th>
                <th>Year_making </th>
                <th>Project_Title</th>
                <th>Project_Type</th>
                <th>Refrence_Project</th>s

            </tr>
        </tbody>
    
            <?php
         if( mysqli_num_rows($query_run) >  0)
         {
         while($row = mysqli_fetch_array($query_run))
         {
            ?>
            <tr>
                <td ><?php $row['Graduate_Degree'];?></td>
                <td ><?php $row['University_Name']; ?></td>
                <td ><?php $row['Branch']; ?></td>
                <td><?php $row['Project_Category']; ?></td>
                <td><?php $row['Year_making']; ?></td>
                <td ><?php $row['Project_Title']; ?></td>
                <td ><?php $row['Project_Type']; ?></td>
                <td ><?php $row['Refrence_Project']; ?></td>
            </tr>
            <?php
             }

            }
            else{
               ?>
               <tr>
                <td colspan="6">No Recode data not Found</td>
               </tr>
               <?php
            }
            ?>
        
        <!-- Add more rows as needed -->
    </table>
    <?php
       }
    ?>



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


    <!-- <h1>welcome<?php echo $_SESSION['username'] ?> </h1> -->

</body>

</html>