<html>
  <head>
     <title>Admission Form</title>
  </head>
  <body>
     <center><h1>Admission Form</h1></center>
     <div style="margin: 50px;padding: 10px; text-align: center;">
     <form method="POST">
       
       <fieldset>
         <legend>Personal Details</legend>
         <table>
            <tr>
		<td>Name: </td>
		<td><input type="text" name="t3"/></td>
            </tr>
            <tr>
		<td>Mother's Name</td>
		<td><input type="text" name="t4"/></td>
	    </tr>
            <tr>
		<td>Father's Name</td>
		<td><input type="text" name="t5"/></td>
	    </tr>
            <tr>
		<td>Date of Birth</td>
		<td><input type="date" name="t6"/></td>
	    </tr>
            <tr>
		<td>Gender</td>
		<td>
		    <input type="radio" name="r1" value="male">Male</input>
		    <input type="radio" name="r1" vale="female">Female</input>
                </td>
	    </tr>
         </table> 
       </fieldset>
        <fieldset>
         <legend>Contact Details</legend>
          <table>
            <tr>
		<td>Contact Number: </td>
		<td><input type="tel" name="t7"/></td>
            </tr>
            <tr>
		<td>Email ID: </td>
		<td><input type="email" name="t8"/></td>
            </tr>
            <tr>
		<td>Address</td>
		<td><textarea rows="5" cols="30">Enter Address...</textarea></td>
            </tr>
            <tr>
		<td>Country: </td>
		<td>
                   <select name="country">
			<option>India</option>
			<option>USA</option>
			<option>UK</option>
			<option>Australia</option>
                   </select>
                </td>
            </tr>
          </table>

       </fieldset> 
       <fieldset>
         <legend>Academic Details</legend>
         <table>
           <tr>
             <td>10<sup>th</sup> Class Marks:</td>
             <td><input type="number" name="t9"/></td>
             <td>Board: </td>
             <td><input type="text" name="t9_1"/></td>
             <td>School Name: </td>
             <td><input type="text" name="t9_2"/></td>
           </tr>
           <tr>
           <tr>
             <td>12<sup>th</sup> Class Marks:</td>
             <td><input type="number" name="t10"/></td>
             <td>Board: </td>
             <td><input type="text" name="t10_1"/></td>
             <td>School Name: </td>
             <td><input type="text" name="t10_2"/></td>
           </tr>
           </tr>
         </table>
       </fieldset>  
       <div style="margin-top: 20px; padding: 10px;text-align: center;">
           <Button onclick="alert('Form Submitted');">Submit</button>
       </div>  
     </form>
     </div>
  </body>
</html>


