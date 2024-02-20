       
 
<html>  
<head>

<title>Student Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
     background-image: url('Pink-Blue-Blured-Texture.jpg');
     background-repeat: no-repeat;
	 background-position: center;
	 background-size: 100%;
    }
</style>

</head>
<body>  
<style>


   
 th{
	text-align: center;
   }
   
   textarea{
	   width: 100px;
	   color: #FFF;
	   background: rgba(255,255,255,0);
	   border: none;
	   outline: none;
   }
   
     footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(255,255,255,0);
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    color: #000000;
}
	.footer-bottom{
    background: rgba(255,255,255,0);
    width: 80vw;
    padding: 4px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 10px;
    word-spacing: 4px;
    text-transform: capitalize;
}
   
</style>

<link href="style1.css" rel="stylesheet" type="text/css">
     <div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px" >
   <img src="logo.png" class="rounded float-left" style="width:100px;height:100px;">
	
	<center> 
	<h1> OPPORTUNITY &nbsp;&nbsp; JUNCTION </h1>
	<h4> Navigate Your Career Path Online </h4>
	</center>
	</div>
&nbsp;<button type="button" style="height:40px;width:60px" class="btn btn-primary " onclick="history.back()"><b>Back</b></button>&nbsp;	

<form method = "post" action="saveStu.php">   
<table align="center" border="1" width="70%">

	<th colspan="2"> Add Your Details	</th><br>
	<tr>
	<td><div class="labl">StudentID/Roll No: </div></td>
	<td><input type="int" name="rollno"style="background: rgba(255,255,255,0);" ></td> 
	</tr>
	<tr>
	<td><div class="labl">First Name: </div></td>
	<td><input type="string" name="stuname" style="background: rgba(255,255,255,0);"></td>
	</tr>
	<tr>
	<td><div class="labl">Surname: </div></td>
	<td><input type="string" name="fname" style="background: rgba(255,255,255,0);"></td>
	</tr>
	<tr>
	<td><div class="labl">Date of Birth: </div></td>
<td><input type="date" name="dob" style="background: rgba(255,255,255,0);" max="2005-12-31" value="<?php echo date('Y-m-d'); ?>"></td>

	</tr>	
	<tr>
	<td><div class="labl">Contact Number: </div></td>
	<td><input type="int" name="contno" style="background: rgba(255,255,255,0);"></td>
	</tr>
	<tr>
	<td><div class="labl">Email ID: </div></td>
	<td><input type="email" name="email" style="background: rgba(255,255,255,0);"></td>
	</tr>
	<tr>
	<td><div class="labl">Stream: </div></td>
	<td>	<select name="strm" style="background: rgba(255,255,255,0);">
			  <option value="Comp Science">Computer Science</option>
			  <option value="Science">Science</option>
			  <option value="Commerce">Commerce</option>
			  <option value="Business Administration">Business Administration</option>
			  <option value="Arts">Arts</option>
			</select>
	</td></tr>
	<tr>
	<td><div class="labl">Course: </div></td>
	<td><select name="course" style="background: rgba(255,255,255,0);">
			  <option value="BCA">BCA</option>
			  <option value="B.Sc.">B.Sc.</option>
			  <option value="BBA">BBA</option>
			  <option value="BCOM">BCOM</option>
			  <option value="BA">BA</option>
			</select>
	</td></tr>
	
	<td><div class="labl">CGPA </div></td>
	<td><input type="float" name="score" style="background: rgba(255,255,255,0);"> </td>
	</tr>
	 
 </tr>
 <td><div class="labl">10th % : </div></td>
 <td><input type="float" name="ten" style="background: rgba(255,255,255,0);"> </td>
 </tr>
 

 </tr>
 <td><div class="labl">12th % : </div></td>
 <td><input type="float" name="twelve" style="background: rgba(255,255,255,0);"> </td>
 </tr>
 
 <td><div class="labl">Active Backlog </div></td>
<td> <select name= "backlog" style="background: rgba(255,255,255,0);" >
	<option value="Yes"> Yes </option> 
	<option value="No"> No </option> 
	</select>
	</td></tr>
	</select>
		
	<th colspan="2" style="background: rgba(255,255,255,0);" > 
	<button type = "submit" name= "submit" class="btn btn-primary"> Submit </button>
	</th>
</table> 
  
</form>  
<center>
<footer>
        <div class="footer-bottom">
            <p>            <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6>
</p>
        </div>
    </footer>
   
</body>   
</html>  
