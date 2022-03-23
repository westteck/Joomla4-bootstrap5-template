<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<!--
<jdoc:include type="modules" name="top" />
<jdoc:include type="component" />
<jdoc:include type="modules" name="footer" />
-->

<head>
  <jdoc:include type="head" />
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- stylesheets -->
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>
  /templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
  
  
   
</head>
<body>
<div class="container-fluid">
<?php	
	// Logo file or site title param
	if ($this->params->get('logoFile'))
	{
		$logo = '<img src="' . Uri::root(true) . '/' . htmlspecialchars($this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitename . '">';
	}
	elseif ($this->params->get('siteTitle'))
	{
		$logo = '<span title="' . $sitename . '">' . htmlspecialchars($this->params->get('siteTitle'), ENT_COMPAT, 'UTF-8') . '</span>';
	}
	else
	{
		$logo = HTMLHelper::_('image', 'logo.svg', $sitename, ['class' => 'logo d-inline-block'], true, 0);
	}	
	?>
<?php if ($this->params->get('brand', 1)) : ?>
			<div class="grid-child">
				<div class="navbar-brand">
					<a class="brand-logo" href="<?php echo $this->baseurl; ?>/">
						<?php echo $logo; ?>
					</a>
					<?php if ($this->params->get('siteDescription')) : ?>
						<div class="site-description"><?php echo htmlspecialchars($this->params->get('siteDescription')); ?></div>
					<?php endif; ?>
				</div>
			</div>
<?php endif; ?>
<!-- navbar -->
	
        <?php if ($this->countModules('menu', true)) : ?>
				<div class="grid-child container-nav">
					<nav class="navbar navbar-inverse">
					  <div class="container-fluid">
				        <jdoc:include type="modules" name="menu" style="none" />
			          </div>
			        </nav>
			    <div>
		<?php endif; ?>

    
  
<-- content section-->
  
<div class="container-fluid text-center">    
  <div class="row content">
	  <!-- left side bar-->
	  <?php if ($this->countModules('sidebar-left', true)) : ?>
	  		<div class="col-sm-2 sidenav container-sidebar-left">
	  			<jdoc:include type="modules" name="sidebar-left" style="card" />
	  		</div>
	  	<?php endif; ?>
    
  </div>
  <!-- main contents-->
  <div class="col-sm-8 text-left"> 
	  <main>
	     <jdoc:include type="component" />
	  </main>
   </div>

<!-- Right side bar-->
      <?php if ($this->countModules('sidebar-right', true)) : ?>
   		<div class="col-sm-2 sidenav container-sidebar-right">
   			<jdoc:include type="modules" name="sidebar-right" style="card" />
   		</div>
   		<?php endif; ?>
   
</div>
<!-- Footer -->
<!-- ><footer class="container-fluid text-center"> -->
	<footer class="bg-light text-center text-lg-start">
	  <!-- Copyright -->
	  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	    <jdoc:include type="modules" name="footer" />
	  </div>
	  <!-- Copyright -->
	</footer>
	
  
	<!-- > </footer> -->
</div> <!--website close container div->
</body>
</html>
