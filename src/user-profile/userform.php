<form action="" method="POST"  enctype="multipart/form-data">
    <div class="">

      <div class="row half-col">
    <div class="col-12">
       <input type="text" id="first_name" name="first_name" placeholder="Your first name" required>
    </div>
    <div class="col-12">
       <input type="text" id="last_name" name="last_name" placeholder="Your last name" required>
    </div>
    <div class="col-12">
       <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your phoneNumber" required>
    </div>
    <div class="col-12">
       <input type="text" id="email" name="email" placeholder="Your email" required>
    </div>
    <div class="col-12">
       <input type="date" id="age" name="DOB" placeholder="Your DOB" required>
    </div>
    <div class="col-12">
       <select name="gender" id="gender" required>
        <option disabled selected>select gender</option>
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
    </div>
    <div class="col-12">
     <input type="text" id="password" name="password" placeholder="Your password" required>
    </div>
    <div class="col-12">
       <textarea type="text" id="address" name="address" placeholder="Your address" rows="1" required></textarea>
    </div>
    
    <div class="custom-file-upload col-12">
    <input type="file" name="file" required/>
    </div>
    <div class="submit-row">
      <button type="submit" value="Submit" name="submit" class="">Register</button>
    </div>
  </div>
    </div>
  </form>