<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Admin</title>
  </head>
  <body>
    <center>
      <h1>Tambah Admin</h1>
      <hr>
      <form class="" action="<?php echo base_url().'admin/action_tambah'; ?>" method="post">
        <table>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" value=""></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" value=""></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'><input type="submit" name="" value="Simpan"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'> <a href="<?php echo base_url().'admin/index'; ?>">Kembali</a> </td>
          </tr>
        </table>
      </form>
      <?php echo validation_errors(); ?>
      <?php echo form_open('admin/action_tambah'); ?>
    </center>

  </body>
</html>