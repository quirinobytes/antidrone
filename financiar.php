<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Anti-Drone</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/typography.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<!--[if lte IE 6]>
<style type="text/css">
.clearfix {height: 1%;}
img {border: none;}
#resol {position:absolute;} body {overflow-x: hidden;} #footer {-padding-bottom:50px;}
</style>
<![endif]-->
<!--[if gte IE 7.0]>
<style type="text/css">
.clearfix {display: inline-block;}
</style>
<![endif]-->
<!--[if gte IE 8.0]>
<style type="text/css">
.clearfix {display: block;}
</style>
<![endif]-->
</head>
<body>
<?php 

if ($_POST[enviar])
 if (mail ("quirinobytes@gmail.com", "Contato: ".$_POST[author], "\nContato: ".$_POST[author]." - ".$_POST[email]."\nTítulo:".$_POST[subject]."\n\n".$_POST[text], 
 "From: webcontato@antidrone.com.br")){
	 mail ($_POST[email], "Equipe - Anti Drone", "Obrigado pelo contato\n\n Em breve entraremos em contato.\n\n\nDúvidas entrar em contato com Rafael (11) 951586960\n\n<a href=\"www.antidrone.com.br\"> Antidrone </a>", "From: contato@antidrone.com.br");
	 $string = "Email enviado com sucesso!";
 }
	 else{
	 echo "Falha ao enviar email";
	 }
 ?>
<div id="mainwrap">	<div id="pagetop"><div id="pagetop-inner">
    	<div id="header" class="clearfix">
        	<h1 id="logo"><a href="http://antidrone.com.br">Anti Drone</a></h1>
            <a href="comprar.php" id="but-green"><span>Comprar Assim que dispon&iacute;vel</span></a>
        </div>
        <div id="mainnav" class="vernav clearfix">
        	<ul class="clearfix">
            	<li><a href="index.html"><span>Home</span></a></li>
            	<li><a href="solution.html"><span>Solu&ccedil;&atilde;o</span></a></li>
            	<li><a href="contact.php"><span>Contato</span></a></li>
            </ul>
    </div>
        <div id="content">
       	  <div id="content-inner">
                <div id="templatemo_main">
                  <h3>Posso ajudar com recursos ou financiando o projeto?</h3><hr /><br />
<div class="half float_l">
                    <div id="contact_form">
                      <form action="financiar.php" method="post" id="contact">
                        <label for="author">Nome </label>
                        <input name="author" type="text" class="required input_field" id="author" size="16" />
<label for="email"> Email</label>
                        <input name="email" type="text" class="validate-email required input_field" id="email" size="19" />
                        <br />
                        <label for="subject"><br />
                        T&iacute;tulo</label>
                        <input name="subject" type="text" class="input_field" id="subject" value="Como financiar?" size="46" />
                        <br />
                        <br />
                        <div class="cleaner h10"></div>
                        <label for="text">Mensagem</label>
                        <textarea id="text" name="text" rows="3" cols="32" class="required"></textarea>
                        <input name="enviar" type="hidden" id="enviar" value="1" />
                        <br />
                        <br />
<div class="cleaner h10"></div>
                        <input type="submit" value="Enviar" id="submit" name="submit" class="submit_btn float_l" />
                        <input type="reset" value="Limpar" id="reset" name="reset" class="submit_btn float_r" />
                        <span class="retorno_email">
                        <? if ($string) echo $string;?>
                        </span>
                      </form>
                    </div>
                  </div>
            </div>
       	  </div>
       	  <div class="clearfix"></div>
        </div>
    </div></div>
    <div id="pagebot" class="clearfix">
    	  <div id="box-wrap" class="clearfix">
    	  <div class="box">
            </div>
            <div class="box">
            </div>
            <div class="box box-last">
          </div>
        </div>
    </div>
    <div id="footer">
   	&copy; Copyright 2015 Antidrone. Todos os direitos reservados.</div>
</div>
</body>
</html>
