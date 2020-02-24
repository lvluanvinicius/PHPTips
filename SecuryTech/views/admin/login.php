<?php $v->layout("_tempLogin"); ?>

<div class="alert" alert-error>
  <i class="fas fa-times"></i>
  <label></label>
</div>

<div class="login-box">
  <div class="login-logo">
    <i class="fas fa-shield-alt"></i> <a href="<?= url()?>"><b><?= SITE["namesite"]?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card pt-5 pb-5">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?= url("admin/check") ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="passwd">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
<!--        <div class="icheck-primary pb-5">-->
<!--          <input type="checkbox" id="remember">-->
<!--          <label for="remember">-->
<!--            Remember Me-->
<!--          </label>-->
<!--        </div>-->
      </form>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= url("../public/inc/panel/components/plugins/jquery/jquery.min.js")?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= url("../public/inc/panel/components/plugins/bootstrap/js/bootstrap.bundle.min.js")?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= url("../public/inc/panel/components/dist/js/adminlte.min.js")?>"></script>

  <?= $v->start("scripts"); ?>
  <script>

    function closeAlerts(config) {
      const closeAlert = document.querySelector(config.click);
      const targetClose = document.querySelector(config.target);
      closeAlert.onclick = e => {
        targetClose.removeAttribute(config.attribute);
      };
    }

    function alertStatus(config) {
      const status = location.search.slice().split("=")[1];
      if (status == config.status) {
        const alertError = document.querySelectorAll(config.target);
        console.log(alertError[0])
        alertError[0].style.display = "block";
        alertError[0].style.color = config.color;
        alertError[0].style.background = config.background;
        alertError[0].querySelector("label").innerHTML = config.message;
      }
    }

    alertStatus({
      status: "success",
      target: "[alert-error]",
      color: "green",
      background: "rgba(0, 255, 0, .3)",
      message: "Conexão encerrada com sucesso!"
    });

    alertStatus({
      status: "error",
      target: "[alert-error]",
      color: "red",
      background: "rgba(255, 0, 0, .3)",
      message: "Nome de usuário ou senha incorretos!"
    });

    alertStatus({
      status: "time",
      target: "[alert-error]",
      color: "red",
      background: "rgba(255, 0, 0, .3)",
      message: "Sua sessão foi encerrada pois excedeu o tempo limite!"
    });

    closeAlerts({
      click: "[alert-error] i",
      target: "[alert-error]",
      attribute: "style"
    });



  </script>
  <?= $v->end(); ?>
</div>
