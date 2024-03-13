<!DOCTYPE html>
<html lang="en">
  <?php
      $pagetitle = "Contact";
      include "head";
  ?>
  <body>
    <div class="container">
      <?php include "header"; ?>

        <main class="content">
          <form method="post" action="process_form.php">
            <div>
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div>
              <label for="email">Preferred Email</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div>
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            
              <button type="submit">Submit</button>
          </form>

          <ul style="list-style: outside; margin: 0; padding: 0; position: relative; bottom: 0;"><li>If form does not work, please contact me at <a href="mailto:gavin.d.tafoya@gmail.com">gavin.d.tafoya@gmail.com</a> </br>Thank you!</li></ul>
        </main>

      <?php include "footer"; ?>
    </div>
  </body>
</html>
