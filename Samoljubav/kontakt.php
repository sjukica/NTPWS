<h1>Kontakt</h1>
	<div class="kontakt">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11133.115992048137!2d15.979641835746596!3d45.765598615688674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d5f9ef14a535%3A0x8ec6130a98f6a88f!2sSlobo%C5%A1tina%2C+10010%2C+Zagreb!5e0!3m2!1sen!2shr!4v1556102761899!5m2!1sen!2shr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<form id=contact_form method="POST">
			<label for="fname">First Name *</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
				</br>
				<label for="lname">Last Name *</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
				</br>
				<label for="lname">Your E-mail *</label>
				<input type="email" id="email" name="email" placeholder="Your e-mail.." required>
				</br>
				<label for="country">Country</label>
				<select id="country" name="country">
				  <option value="">Please select</option>
				  <option value="BE">Belgium</option>
				  <option value="HR" selected>Croatia</option>
				  <option value="LU">Luxembourg</option>
				  <option value="HU">Hungary</option>
				</select>
				</br>
				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">
			
			</form>
		</div>