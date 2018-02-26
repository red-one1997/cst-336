<form>
   <title>What's your favourite brand of  motocross</title>
   <h1>Motocross</h1>
    Name: <input type="text" id="fullName" size="30" />   <br />
    
    Favorite Brand : <br>
    <select id="state">
      <option value="IL">Yamaha</option>
      <option value="AZ">Honda</option>
      <option value="CA">KTM</option>
      <option value="IL">Suzuki</option>
      <option value="IL">TM Racing</option>
      
  </select>    <br /><br />
   Have you ever done motocross:    <br>
    <input type="radio"  id="item1"  name="levelChoices"  value="Yes" >
         <label for="item1">Yes</label> <br>
    <input type="radio"  id="item2"  name="levelChoices" value="No">
          <label for="item2">No</label> <br><br>
    If yes what's your experience: <br>
    <input type="checkbox" id="pro"  name="level" value="prof">
            <label for="pro"> Pro </label> <br>
     <input type="checkbox" id="medium" name="level" value="medium">
            <label for="medium"> Medium </label> <br>
    <input type="checkbox" id="beginner" name="level" value="beginner">
            <label for="beginner"> Beginner </label>
    <br/><br/>
    Favourite track:    <textarea id="favtrack" cols="30" rows="3"></textarea><br/><br />
    
    Feedback:    <textarea id="feedback" cols="30" rows="3"></textarea><br/><br />
    <input type="button" value="Submit" onclick="displayData()"/>
  </form>