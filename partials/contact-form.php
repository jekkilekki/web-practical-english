<div class="callout large order">
  <div class="row">
    <div class="medium-6 columns">
      <a name="order"></a>
      <h3>Want to Order? Send us a message</h3>
      <p>This book is fresh off the printer. If you would like to order this book for yourself or your school, please send us a message.</p>
      <p class="lead">Publication Date: <strong>Late February 2016</strong></p>
    </div>
    <div class="medium-6 columns" id="contactFormArea">


      <!-- CONTACT FORM - START -->
      <form data-abide id="contactForm" name="contactForm" action="<?php echo $_SERVER[ 'PHP_SELF' ]; ?>" method="post">
        <div data-abide-error class="alert callout" style="display: none;">
          <p><i class="fi-alert"></i> There are some errors in your form.</p>
        </div>
        
        <label>Name
          <input type="text" name="contactName" id="contactName" placeholder="Name" required value="<?php if ( isset( $contactName )) { echo $contactName; } ?>" >
          <span class="form-error">
            Please enter your name.
          </span>
        </label>
        
        <label>Email
          <input type="text" name="contactEmail" id="contactEmail" placeholder="Email" aria-describedby="registerEmail" required value="<?php if ( isset( $contactEmail )) { echo $contactEmail; } ?>">
          <span class="form-error">
            Enter a valid email address.
          </span>
        </label>

        <label>Reason
          <select name="messageSubject" id="messageSubject" required>
            <option value="list" 
              <?php if (( isset( $subject )) && ( $subject === 'list' )) { echo "selected"; } ?>
              >Join Mailing List</option>
            <option value="order"
              <?php if (( isset( $subject )) && ( $subject === 'order' )) { echo "selected"; } ?>
              >Order the Book</option>
            <option value="error"
              <?php if (( isset( $subject )) && ( $subject === 'error' )) { echo "selected"; } ?>
              >Report an Error</option>
            <option value="feedback"
              <?php if (( isset( $subject )) && ( $subject === 'feedback' )) { echo "selected"; } ?>
              >General Feedback</option>
          </select>
          <span class="form-error">
            You must select an option. This cannot be left blank.
          </span>
        </label>
        
        <label>Optional Message
          <textarea name="messageContent" id="messageContent" placeholder="Have something to share? Let us hear it!"><?php if ( isset( $message )) { echo $message; } ?></textarea>
        </label>
        <br>
        
        <input type="submit" name="submit" class="button large expanded" value="Send Message">
      
      </form>
      <!-- CONTACT FORM - END -->


    </div>
  </div>
</div>