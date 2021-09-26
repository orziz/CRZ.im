<?php

  // 引入类
  require_once('inc/require.php');

  if(isset($_GET['id'])) {
    
    $url_c = new url();

    // 获取目标网址
    $url = $url_c->get_url($_GET['id']);
    // 重定向至目标网址
    if($url) {
      header('Location: ' . $url);
      exit;
    }

  }

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<link rel="icon" href="https://www.pohun.net/favicon.ico">
    <title><?php echo get_title() . ' - ' . get_description(); ?></title>
    <meta name="description" content="泊网短网址" />
    <meta name="keyword" content="泊网短网址" />
    <link type="text/css" rel="stylesheet" href="asset/css/main.css" />
  </head>
  <body>
    <div class="wrap">
      <div class="meta">
        <h2 class="title"><?php echo get_title(); ?></h2>
        <h3 class="description"><?php echo get_description(); ?></h3>
      </div>
      <div class="link-area">
        <input id="url" type="text" placeholder="源网址" />
        <input id="submit" type="button" value="生成" onclick="APP.fn.setUrl(this)" />
				<br><br>
				<input id="shorturl" type="text" placeholder="短网址" readonly/>
				<input id="shorturlcopy" type="button" value="复制" onclick="copyText()" />
      </div>
      <div class="footer">
        <p>
          <a href="http://www.beian.miit.gov.cn" target="blank">苏ICP备18001625号</a>
          &nbsp;/&nbsp; 
          <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32059002003538" style="display:inline-block;"><img src="/asset/img/gongan.png" style="float:left;"/>苏公网安备 32059002003538号</a>
        </p>
        <p>
          Copyright &copy; <a href="https://github.com/Caringor/" title="Carignor" target="_blank">Caringor</a>
          &nbsp;/&nbsp;
          <a href="https://github.com/Caringor/CRZ.im/" title="Fork me on Github" target="_blank">Fork me on Github</a>.
        </p>
      </div>
    </div>
  </body>
  <!-- JS -->
  <script type="text/javascript" src="asset/js/app.js"></script>
  <!-- dialog -->
  <script>
    document.body.oncopy = function() {
      Swal.fire({
        allowOutsideClick:false,
        type:'success',
        title: '复制成功！',
        showConfirmButton: false,
        timer: 3000
      });
    };
    function copyText() {
      var input = document.getElementById("shorturl");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
    }
  </script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</html>