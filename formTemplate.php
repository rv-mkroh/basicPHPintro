  <form action="process.php" method="post">
    <div>
      <label for="fname">First Name: <input type="text" name="fname" id="fname" value="<?php echo $_SESSION['fname']; ?>" /></label>
    </div>
    <div>
      <label for="lname">Last Name: <input type="text" name="lname" id="lname" value="<?php echo $_SESSION['lname']; ?>" /></label>
    </div>
    <div>
      <p>Gender:</p>
      <p>
        <label for="m">Male: <input type="radio" name="gender" id="m" value="m" /></label>
        <label for="f">Female: <input type="radio" name="gender" id="f" value="f" /></label>
      </p>
    </div>
    <div>
      <label for="state">State of residence:</label>
      <select name="state" id="state">
        <option value="NC">North Carolina</option>
        <option value="SC">South Carolina</option>
      </select>
    </div>
    <div>
      <p>Languages spoken:</p>
      <p>
        <label for="fr" class="blocklabel"><input type="checkbox" name="lang[]" value="fr" id="fr" /> French</label>
        <label for="de" class="blocklabel"><input type="checkbox" name="lang[]" value="de" id="de" /> German</label>
        <label for="it" class="blocklabel"><input type="checkbox" name="lang[]" value="it" id="it" /> Italian</label>
        <label for="sp" class="blocklabel"><input type="checkbox" name="lang[]" value="fr" id="sp" /> Spanish</label>
      </p>
    </div>
    <div>
      <p>Reason you are applying for translator position:</p>
      <textarea name="reason" cols="25" rows="6"></textarea>
    </div>
    <div>
      <input type="submit" name="submit" value="Submit" />
    </div>

  </form>