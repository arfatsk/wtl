<!DOCTYPE html>
 <html>
 <head>
 	    <title>STUDENT REGISTRATION</title>
 </head>
 <body>
      <h1>WELCOME TO AIKTC</h1>
      <FORM method="post" action="registration.html">
      <fieldset>
      	<legend>
      		PERSONAL INFORMATION
      	</legend>
      
      	<label for="rollno">
         ROLL NO:		
      	</label>
        <input type="text" name="rollno" id="rollno" class="form-input" required="required"/>
        <br>
        <br>
       
        <label for="sname">
        NAME:
        </label>
        <input type="text" name="sname" id="sname" required="required"/>
        <br>
        <br>
       
        <label for="gender">
        GENDER:
        </label>
        <input type="RADIO" name="gender" value="male" id="male" class="form-input" required="required" />
        <label>
         MALE
        </label>
        <input type="RADIO" name="gender" value="female" id="female" class="form-input" required="required" />
        <label>
         FEMALE
        </label>
        <br>
        <br>
      
        <label for="address">
         ADDRESS:
        </label>
        <textarea cols="10" rows="4" id= "address" name="address" required="required"></textarea> 
        <br>
        <br>
        
        <label for="date">
        DATE OF BIRTH:
        </label>
        <input type="date" name="date" id="date" required="required"/>
        <br>
      </fieldset>
      
      <fieldset>
      	 <legend>ACADEMIC INFORMATION</legend>
					<label for="sem">Semester:</label>	
					<select name="sem" id="sem" class="form-input" required="required">
						<option value="" selected>-----</option>
						<option value="1">I</option>
						<option value="2">II</option>
						<option value="3">III</option>
						<option value="4">IV</option>
						<option value="5">V</option>
						<option value="6">VI</option>
						<option value="7">VII</option>
						<option value="8">VIII</option>
					</select>
					<br>
					<br>

					<label for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-input" required="required" />
					<br>
					<br>

					<label for="dept">Department:</label>	
					<select name="dept" id="dept" class="form-input" required="required">
						<option value="" selected>-----</option>
						<option value="comp">COMPUTER</option>
						<option value="mech">MECHANICAL</option>
						<option value="civ">CIVIL</option>
						<option value="elec">ElECTRICAL</option>
					</select>
					<br>
					<br>

					<label for="batch">Batch:</label>	
					<select name="batch" id="batch" class="form-input" required="required">
						<option value="" selected>-----</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
					<br>
					<br>

      </fieldset>
      <input TYPE="submit" name="SUBMIT" class="form-input" value="submit">	
      </FORM>
 </body>
 </html>