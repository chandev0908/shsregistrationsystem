<div class="container">
 <form action="connection.php" method="POST">
   <br>
   <br>
   <div class="container">
     <table>
       <tr>
     <td>First Name : <input type="text" class="form__input" name="first" placeholder="Firstname" required></td>
     <td><label for="firstname" class="form__label">Firstname</label></td>
       </tr>
     </table>
   </div>
   <br>
   <div class="container">
     <table>
       <tr>
     <td>Last Name : <input type="text" class="form__input" name="last" placeholder="Lastname" required></td>
  <td><label for="lastname" class="form__label">Lastname</label></td>
       <tr>
     </table>
   </div>
   <br>
   <div class="container">
     <table>
       <tr>
     <td>Middlename : <input type="text" class="form__input" name="middle" placeholder="Midllename" required></td>
  <td><label for="middlename" class="form__label">Middlename</label></td>
       </tr>
     </table>
   </div>
     <br>

     <h4>Birthday</h4>
<input type="Date" name="date_of_birth" placeholder="DD/MM/YY" required>
<br>
<br>
Gender :
<br>
<br>
     <input type="radio" checked="checked"name="sex" value="Male" required>Male
     <input type="radio"class="checkmark" checked="checked" name="sex" value="Female" required>Female
     <br>
     <br>
     <div class="container">
       <table>
       <tr>
       <td>Last attended School : <input type="text" class="form__input" name="school" placeholder="Last attended School" required></td>
       <td><label for="school" class="form__label">Last attended School</label></td>
      </tr>
      </table>
     </div>
<br>
<br>
     <div class="container">
       <table>
       <tr>
       <td>Last Section : <input type="text" class="form__input" name="section" placeholder="Section" required></td>
       <td><label for="section" class="form__label">Section</label></td>
       </tr>
       </table>
    <br>
    <br>
    <br>
     </div>
     <select name="strand" required>
      <option selected hidden value="">Select Strand</option>
      <option name="tvl" value="TVL">tvl</option>
      <option name="humms" value="HUMMS">humms</option>
      <option name="abm" value="ABM">abm</option>
      <option name="stem" value="STEM">stem</option>
     </select>
<br>
<br>
    <button type="submit" name="submit"> Submit</button>
    </form>
</div>
