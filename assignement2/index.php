<form>
    Name: <input type="text" id="fullName" size="25" />   <br />
    Feedback:    <textarea id="feedback" cols="30" rows="3"></textarea><br/><br />
    State: <br>
    <select id="state">
      <option value="IL">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="CA">California</option>
      <option value="IL">Colorado</option>
      <option value="IL">Connecticut</option>
      <option value="IL">Delaware</option>
      <option value="IL">Florida</option>
      <option value="IL">Illinois</option>
      <option value="IL">Michigan</option>
      <option value="IL">Nevada</option>
      <option value="IL">New York</option>
      <option value="IL">Oregon</option>
      <option value="IL">Pennsylvania</option>
      <option value="IL">Texas</option>
      <option value="IL">Vermont</option>
      <option value="IL">Washington</option>
      <option value="IL">Wyoming</option>
  </select>    <br /><br />
    Highest Degree Obtained:    <br>
    <input type="radio"  id="item1"  name="degreeChoices"  value="High School" >
         <label for="item1">High School Diploma</label> <br>
    <input type="radio"  id="item2"  name="degreeChoices" value="College">
          <label for="item2">College</label> <br><br>
    Sports I like: <br>
    <input type="checkbox" id="basket"  name="sports" value="basket">
            <label for="basket"> Basketball </label> <br>
     <input type="checkbox" id="soccer" name="sports" value="basket">
            <label for="soccer"> Soccer </label>
    <br/><br/>
    <input type="button" value="Submit Data" onclick="displayData()"/>
  </form>