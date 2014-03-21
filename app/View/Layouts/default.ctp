<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


<?php 
		echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('sb-admin.css');
		echo $this->Html->css('/font-awesome/css/font-awesome.min.css');	
		echo $this->Html->css('morris-0.4.3.min.css');
	?>

  </head>

  <body>

    <div id="wrapper">


<?php echo $this->Session->flash(); ?>

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="forms.html"><i class="fa fa-edit"></i> Gerar Simulado </a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
           
		 <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> NOME USUARIO <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><i class="fa fa-power-off"></i>
                
                <?php echo $this->Html->link(__('Logout'), array(
					'controller' => 'Users', 'action' => 'logout'));
				?>
			</li>

              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

		<div class="content">
			<?php echo $this->fetch('content'); ?>
		</div>


      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->

	<?php 
		echo $this->Html->script('jquery-1.10.2.js');
		echo $this->Html->script('bootstrap.js');

		echo $this->Html->script('/morris/chart-data-morris.js');
		echo $this->Html->script('/tablesorter/jquery.tablesorter.js');
		echo $this->Html->script('/trenade2014/app/webroot/js/tablesorter/tables.js');
		echo $this->Html->script('raphael-min.js');
		echo $this->Html->script('morris-0.4.3.min.js');
		echo $this->Html->script('trenade.js');


	?> 

  </body>
</html>
