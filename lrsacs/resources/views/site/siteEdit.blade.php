<main>
    <div>
        <h1>Edit site</h1>
	   <form action="/site/{{$foundSite}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">   
             <label for="shortName">Shortname</label>
              <input type="text" class="form-control"  placeholder="Shortname"  name="shortName" value="{{$foundSite['shortName']}}"><br>
              
              <label for="Address Line 1"> Address Line 1:</label>
              <input type="text" class="form-control"  placeholder="Address Line 1" name="addressLine1"><br>
              
              <label for="Address Line 2"> Address Line 2:</label>
              <input type="text"  class="form-control"  placeholder="Address Line 2" name="addressLine2"><br>
              
              <label for="City">City:</label>
              <input type="text"  class="form-control"  placeholder="City" name="city"><br>
              
              <label for="State">State:</label>
              <input type="text"  class="form-control"  placeholder="State" name="state"><br>
              
              <label for="Zipcode">Zipcode:</label>
              <input type="text"  class="form-control"  placeholder="Zipcode" name="zipcode"><br>
              
              <label for="PhoneNumber">Phone Number:</label>
              <input type="text"  class="form-control"  placeholder="PhoneNumber" name="phoneNumber"><br>
          
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>                                                            
        </form>
    </div>
</main>
