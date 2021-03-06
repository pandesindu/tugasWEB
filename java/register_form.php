<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Registrasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    background-color: #dcdcdc;
  }
  </style>
</head>

<body>

<div class="container">
  <h2>Form Registrasi </h2>
  <form class="form-horizontal" action="/action_page.php">
 
    <div class="form-group">
      <label class="control-label col-sm-2">Nama:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2">Username:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="username" placeholder="Masukan username" name="username">
      </div>
    </div>
    

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Masukan email" name="email">
      </div>
    </div>

    <div class="form-group">
                <label class="control-label col-sm-2" for="jenis_kelamin">Jenis Kelamin :</label>
                <div class="col-sm-10"><select id="agama_mhs" class="form-control select2" style="width: 100%;">
                    <option value="-" selected="selected">none</option>
                    <option value="muslim">Laki - Laki</option>
                    <option value="kristen">Perempuan</option>
                    <option value="lainnya">Lainnya</option>
                </select>
                </div>
     </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Masukan password" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Reenter Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="repwd" placeholder="Masukan password lagi" name="repwd">
      </div>
        <div class = "errmsg"> </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"> Register Now</button>
      </div>
    </div>

  <div class = "pesan">
    <p></p>
  </div>


  </form>
</div>
</body>
<script>

  $(document).ready(function() {

    $('h2').css('text-align', 'center');
    $('h2').css('text-transform', 'uppercase');
    $('h2').css('font-weight', 'bold');
    $('.errmsg').css('text-align', 'center');

      $(".form-horizontal ").submit(function() {
      var ps1 = $('#pwd').val();
      var ps2 = $('#repwd').val(); 
      var valid = 0;

        if (ps1 == ps2) {
           valid = 1;
        } else {
            $('.errmsg').html('Invalid password');
        }
        if (valid == 0) {
           event.preventDefault();
        } else {
            $('p').html("Selamat pendaftaran  " + $('input[name="nama"]').val() + " telah berhasil ");
         }
      });
  });


</script>

</html>