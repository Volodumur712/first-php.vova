
<div class="container">
    <div id="ajaxStatus"></div>
    <form class="form-group" enctype="multipart/form-data" action="#" method="post" id="formTwit">
        <input type="hidden" name="user_id" value="<?php echo getUserID(); ?>">
        <label for="twit">What`s on your mind?</label>    
        <textarea class="form-control mb-3" name="twit" id="twit" rows="3"></textarea>
        <input id="twitImage" type="file" name="image">
        <button class="btn btn-success mt-3">Send</button>
    </form>
    <h3> Stories </h3>
</div>
