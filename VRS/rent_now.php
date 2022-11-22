<html>
<head>
	<title>
		A Sample Tutorial for database connection.
	</title>
    <link rel="stylesheet" href="rent_now.css">
</head>
<body>
	
	<div class="description">
        <h1><strong>Rent</strong> It Now</h1>
        <p>
            Our agency primarily serve people who require a temporary vehicle, for example, those who do not own their own car, travelers who are out of town, or owners of damaged or destroyed vehicles who are awaiting repair or insurance compensation. Our agency may also serve the self-moving industry needs, by renting each variant vehicle, 
        </p>
        <ul>
            <li>
        <p>Super reliable service</p>
        </li>
        <li>
        <p>24/7 customer service</p>
    </li><li>
        <p>Wide range of Vehicle</p>
    </li>
    
    </ul>
    </div>
    <div class="containerw3layouts-agileits">

        <h2>To reserve the vehicle, please complete and submit the booking form.</h2>

        <div class="w3layoutscontactagileits">
            <form action="sqlgagan.php" method="post">

                <div class="wthreename agileinfow3ls">
                    <div class="wthreename-lable wthreelable">
                        <label>Name</label><span class="colon">:</span>
                    </div>
                    <div class="wthreename-input wthreeinput">
                        <input class="top" type="text" name="Name" placeholder="Enter Your Name" required="">
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="agileemailinfo agileinfow3ls">
                    <div class="agileemailinfo-lable wthreelable">
                        <label>Email</label><span class="colon">:</span>
                    </div>
                    <div class="agileemailinfo-input wthreeinput">
                        <input class="top" type="email" name="Email" placeholder="Enter Your Email" required="">
                    </div>
                    <div class="clear"></div>
                </div>
               
                <div class="agileinforeturn agileinfow3ls">
                    <div class="agileinforeturn-lable wthreelable">
                        <span class="aitsreturn-lable">
                            <label>Phone Number</label>
                        </span>
                        <span class="colon">:</span>
                    </div>
                    <div class="agileinforeturn-input wthreeinput">
                        <input class="date agileits w3layouts hasDatepicker" placeholder="Enter Your Phone Number" id="datepicker2" type="tel" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="agileinforeturn agileinfow3ls">
                    <div class="agileinforeturn-lable wthreelable">
                        <span class="aitsreturn-lable">
                            <label>Aadhar Number</label>
                        </span>
                        <span class="colon">:</span>
                    </div>
                    <div class="agileinforeturn-input wthreeinput">
                        <input class="date agileits w3layouts hasDatepicker" id="datepicker2" placeholder="Enter Your Aadhar Number" type="aadhar" name="Aadhar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="agileinforeturn agileinfow3ls">
                    <div class="agileinforeturn-lable wthreelable">
                        <span class="aitsreturn-lable">
                            <label>PAN Number</label>
                        </span>
                        <span class="colon">:</span>
                    </div>
                    <div class="agileinforeturn-input wthreeinput">
                        <input class="date agileits w3layouts hasDatepicker" id="datepicker2" placeholder="Enter Your Pan Number" type="text" name="PAN" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="agileinfodeparture agileinfow3ls">
                    <div class="agileinfodeparture-lable wthreelable">
                        <span class="lable">
                            <label>Departure</label>
                            <label>Date/Time</label>
                        </span>
                        <span class="colon">:</span>
                    </div>
                    <div class="agileinfodeparture-input wthreeinput">
                        <input class="date agileits w3layouts hasDatepicker" id="datepicker1" placeholder="Enter Departure Date and Time" name="DDT" type="datetime-local"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="agileinforeturn agileinfow3ls">
                    <div class="agileinforeturn-lable wthreelable">
                        <span class="aitsreturn-lable">
                            <label>Return</label>
                            <label>Date/Time</label>
                        </span>
                        <span class="colon">:</span>
                    </div>
                    <div class="agileinforeturn-input wthreeinput">
                        <input class="date agileits w3layouts hasDatepicker" placeholder="Enter Departure Date and Time" placeholder="Enter Return  Date and Time" id="datepicker2" type="datetime-local" name="RDT" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clear"></div>
                </div>
                </div>

                <div class="aitssubmitw3ls">
                    <input type="submit" name="submit" value="SUBMIT">
                </div>
                
            </div>
            </form>
        </div>
    </div>   
    </body>
</html>
<?php
    $servername = "localhost";
	$username = "root";
	$password = " ";
	$database = "mini_project";
	if(isset($_POST['submit']))
		{
			$Name = $_POST['Name'];
			$Email = $_POST['Email'];
			$phone = $_POST['phone'];
            $aadhar = $_POST['Aadhar'];
            $PAN = $_POST['PAN'];
            $DDT = $_POST['DDT'];
            $RDT = $_POST['RDT'];
		$con=mysqli_connect($servername,$username,$password,$database);
		if(!$con)
		{
			die("Sorry we failed to connect: ". mysqli_connect_error());
		}
		 $sql="INSERT INTO `book_form` (`name`, `email`, `phonenumber`, `aadhar`, `pan`, `ddt`, `rdt`) VALUES ('$Name', '$Email', '$phone', '$aadhar', '$PAN', '$DDT', '$RDT');";
		if(mysqli_query($con, $sql))
		{
			echo "Your Ride Booked Successfully Thankyou !";
			//header("refresh:5,url=bookcon.php");
			//header("location:bookcon.php");
		}
	}		
	
	?>