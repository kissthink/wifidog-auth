<?php /* Smarty version 2.6.18, created on 2010-08-11 13:17:08
         compiled from templates/classes/MainUI_Display.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="-1">
	<?php if ($this->_tpl_vars['iPhoneUI']): ?>
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=no; width=device-width" />
	<?php endif; ?>
        <?php echo $this->_tpl_vars['htmlHeaders']; ?>

        <title><?php echo $this->_tpl_vars['title']; ?>
</title>
        <?php $_from = $this->_tpl_vars['stylesheetUrlArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stylesheetUrl']):
?>
          	<link rel="stylesheet" type="text/css" <?php if (! empty ( $this->_tpl_vars['stylesheetUrl']['media'] )): ?>media="<?php echo $this->_tpl_vars['stylesheetUrl']['media']; ?>
"<?php endif; ?>	href="<?php echo $this->_tpl_vars['stylesheetUrl']['href']; ?>
">
        <?php endforeach; endif; unset($_from); ?>
		<script src="<?php echo $this->_tpl_vars['base_url_path']; ?>
js/formutils.js" type="text/javascript"></script>
		<script src="<?php echo $this->_tpl_vars['base_url_path']; ?>
js/addEvent.js"  type="text/javascript"></script>
		<script src="<?php echo $this->_tpl_vars['base_url_path']; ?>
js/menu.js"  type="text/javascript"></script>
    </head>
    <body id='page' class='<?php echo $this->_tpl_vars['page_name']; ?>
'>
    <div id="wrap">
    	<?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['page_header'] ) || $this->_tpl_vars['debugRequested'] || $this->_tpl_vars['alwaysShowHeader']): ?>
        	<div id='page_header'>
            <?php if ($this->_tpl_vars['debugRequested']): ?>
            	<pre><?php echo $this->_tpl_vars['debugOutput']; ?>
</pre>
        	<?php endif; ?>
			<?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['page_header'] )): ?>
				<?php echo $this->_tpl_vars['contentDisplayArray']['page_header']; ?>

        	<?php endif; ?>
            </div>
    	<?php endif; ?>
        <div id="page_body">
	          <?php if (! empty ( $this->_tpl_vars['siteMenu'] ) && $this->_tpl_vars['siteMenuPlaceAll']): ?>
	                <div id="site_menu">
	                    <?php echo $this->_tpl_vars['siteMenu']; ?>

	                </div>
	          <?php endif; ?>
        <div id="content-wrap">
        <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['left_area_top'] ) || ! empty ( $this->_tpl_vars['contentDisplayArray']['left_area_middle'] ) || ! empty ( $this->_tpl_vars['contentDisplayArray']['left_area_middle'] )): ?>
                <div id="left_area">
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['left_area_top'] ) || ( ! empty ( $this->_tpl_vars['siteMenu'] ) && $this->_tpl_vars['siteMenuPlaceLeft'] )): ?>
	                <div id="left_area_top">
                    <?php if (! empty ( $this->_tpl_vars['siteMenu'] ) && $this->_tpl_vars['siteMenuPlaceLeft']): ?>    	                
                    <div id="site_menu">
	                    <?php echo $this->_tpl_vars['siteMenu']; ?>

	                </div>	 
                    <?php endif; ?>
                        <?php echo $this->_tpl_vars['contentDisplayArray']['left_area_top']; ?>

	                </div>
	                <?php endif; ?>
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['left_area_middle'] )): ?>
	                <div id="left_area_middle">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['left_area_middle']; ?>

	                </div>
	                <?php endif; ?>
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['left_area_bottom'] )): ?>
	                <div id="left_area_bottom">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['left_area_bottom']; ?>

	                </div>
	                <?php endif; ?>
                </div>
        <?php endif; ?>
        <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['main_area_top'] ) || ! empty ( $this->_tpl_vars['contentDisplayArray']['main_area_middle'] ) || ! empty ( $this->_tpl_vars['contentDisplayArray']['main_area_middle'] )): ?>
                <div id="main_area">
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['main_area_top'] ) || ( ! empty ( $this->_tpl_vars['siteMenu'] ) && $this->_tpl_vars['siteMenuPlaceMain'] )): ?>
	                <div id="main_area_top">
                    <?php if (! empty ( $this->_tpl_vars['siteMenu'] ) && $this->_tpl_vars['siteMenuPlaceMain']): ?>    	                
                    <div id="site_menu">
	                    <?php echo $this->_tpl_vars['siteMenu']; ?>

	                </div>
	                <?php endif; ?>
                        <?php echo $this->_tpl_vars['contentDisplayArray']['main_area_top']; ?>

	                </div>
	                <?php endif; ?>
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['main_area_middle'] )): ?>
	                <div id="main_area_middle">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['main_area_middle']; ?>

	                </div>
	                <?php endif; ?>
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['main_area_bottom'] )): ?>
	                <div id="main_area_bottom">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['main_area_bottom']; ?>

	                </div>
	                <?php endif; ?>
                </div>
        <?php endif; ?>
          <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['right_area_top'] ) || ! empty ( $this->_tpl_vars['contentDisplayArray']['right_area_middle'] ) || ! empty ( $this->_tpl_vars['contentDisplayArray']['right_area_bottom'] )): ?>
                <div id="right_area">
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['right_area_top'] )): ?>
	                <div id="right_area_top">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['right_area_top']; ?>

	                </div>
	                <?php endif; ?>
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['right_area_middle'] )): ?>
	                <div id="right_area_middle">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['right_area_middle']; ?>

	                </div>
	                <?php endif; ?>
	                <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['right_area_bottom'] )): ?>
	                <div id="right_area_bottom">
	                    <?php echo $this->_tpl_vars['contentDisplayArray']['right_area_bottom']; ?>

	                </div>
	                <?php endif; ?>
                </div>
        <?php endif; ?>
        </div>
    </div>
    <?php if (! empty ( $this->_tpl_vars['contentDisplayArray']['page_footer'] ) || $this->_tpl_vars['alwaysShowFooter']): ?>
        <div id='page_footer'>
			<?php echo $this->_tpl_vars['contentDisplayArray']['page_footer']; ?>

        </div>
    <?php endif; ?>

        <?php $_from = $this->_tpl_vars['footerScripts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currScript']):
?>
          <?php echo $this->_tpl_vars['currScript']; ?>

        <?php endforeach; endif; unset($_from); ?>
    </div>
    </body>
</html>