<?php
  $title = 'Contact';
  require 'header.php'; 
 ?>

  <main>
    <section class='container'>
      <article class='form_box'>
        <form>
          <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="mail@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </form>
        <button >Envoyer</button>
      </article>
    </section>   
  </main>
    
<?php require 'footer.php'; ?>