<form method='post' action='?' role='form'>
	<div class="form-group">
    	<label for='name'> Enter Your Name: </label>
        <input type='text' name='name' class='form-control' id='name' required/>
    </div>
    <div class="form-group">
    	<label for='email'> Enter Your Email: </label>
        <input type='email' name='email' class='form-control' id='email' required/>
    </div>
    <div class="form-group">
    	<label for='subject'> Subject: </label>
        <input type='text' name='subject' class='form-control' id='subject' required maxlength="50"/>
    </div>
    <div class="form-group">
    	<label for='message'> Message: </label>
        <textarea name='message' id='message' class='form-control' rows='10' required></textarea>
    </div>
    <div class="form-group">
    	<input type='submit' class='form-control' name='submit' id='submit' value='Send'/>
    </div>
</form>