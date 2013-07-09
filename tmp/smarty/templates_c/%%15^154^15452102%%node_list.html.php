<?php /* Smarty version 2.6.18, created on 2012-03-06 12:30:11
         compiled from templates/node_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'templates/node_list.html', 8, false),array('function', 'cycle', 'templates/node_list.html', 47, false),)), $this); ?>
<?php if ($this->_tpl_vars['selectNetworkUI']): ?>
<form name="hotspots_form" method="post">
        <?php echo $this->_tpl_vars['selectNetworkUI']; ?>

</form>
<?php endif; ?>
<div id="node_list">
    <?php if ($this->_tpl_vars['allNetworks']): ?>
        <h3><?php echo ((is_array($_tmp='Status of all nodes on ')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['allNetworks']; ?>
</h3>
    <?php else: ?>
        <?php if ($this->_tpl_vars['selectedNetwork']): ?>
            <h3><?php echo ((is_array($_tmp='Status of all nodes of the ')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['selectedNetwork']; ?>
 <?php echo ((is_array($_tmp='network')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</h3>
        <?php else: ?>
            <h3><?php echo ((is_array($_tmp='Status of all nodes of the')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['networkName']; ?>
 <?php echo ((is_array($_tmp='network')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</h3>
        <?php endif; ?>
    <?php endif; ?>
	<table>
		<thead>
		<tr>
			<th>
				<a href="?sort_by=last_heartbeat_user_agent"><?php echo ((is_array($_tmp='Status')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['sort_by_param'] == 'last_heartbeat_user_agent'): ?><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
sort_by_asc.gif"><?php endif; ?>
			</th>
						<th>
				<a href="?sort_by=gw_id"><?php echo ((is_array($_tmp='Gateway id')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['sort_by_param'] == 'gw_id'): ?><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
sort_by_asc.gif"><?php endif; ?>
			</th>
			<th>
				<a href="?sort_by=name"><?php echo ((is_array($_tmp='Name')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['sort_by_param'] == 'name'): ?><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
sort_by_asc.gif"><?php endif; ?>
			</th>
			<th><?php echo ((is_array($_tmp='Local content demo')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
			<th>
				<a href="?sort_by=creation_date"><?php echo ((is_array($_tmp='Opened on')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['sort_by_param'] == 'creation_date'): ?><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
sort_by_asc.gif"><?php endif; ?>
			</th>
			<th>
				<a href="?sort_by=num_online_users"><?php echo ((is_array($_tmp='Online users')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
				<?php if ($this->_tpl_vars['sort_by_param'] == 'num_online_users'): ?><img src="<?php echo $this->_tpl_vars['common_images_url']; ?>
sort_by_asc.gif"><?php endif; ?>
			</th>
		</tr>
		</thead>
	<?php unset($this->_sections['node']);
$this->_sections['node']['name'] = 'node';
$this->_sections['node']['loop'] = is_array($_loop=$this->_tpl_vars['nodes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['node']['show'] = true;
$this->_sections['node']['max'] = $this->_sections['node']['loop'];
$this->_sections['node']['step'] = 1;
$this->_sections['node']['start'] = $this->_sections['node']['step'] > 0 ? 0 : $this->_sections['node']['loop']-1;
if ($this->_sections['node']['show']) {
    $this->_sections['node']['total'] = $this->_sections['node']['loop'];
    if ($this->_sections['node']['total'] == 0)
        $this->_sections['node']['show'] = false;
} else
    $this->_sections['node']['total'] = 0;
if ($this->_sections['node']['show']):

            for ($this->_sections['node']['index'] = $this->_sections['node']['start'], $this->_sections['node']['iteration'] = 1;
                 $this->_sections['node']['iteration'] <= $this->_sections['node']['total'];
                 $this->_sections['node']['index'] += $this->_sections['node']['step'], $this->_sections['node']['iteration']++):
$this->_sections['node']['rownum'] = $this->_sections['node']['iteration'];
$this->_sections['node']['index_prev'] = $this->_sections['node']['index'] - $this->_sections['node']['step'];
$this->_sections['node']['index_next'] = $this->_sections['node']['index'] + $this->_sections['node']['step'];
$this->_sections['node']['first']      = ($this->_sections['node']['iteration'] == 1);
$this->_sections['node']['last']       = ($this->_sections['node']['iteration'] == $this->_sections['node']['total']);
?>
		<tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
		    <td class="status">
		    <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['online'] == 't'): ?>
		    <img src='<?php echo $this->_tpl_vars['common_images_url']; ?>
HotspotStatus/up.gif'>
		    	<?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['wifidog_uptime'] != ''): ?>
		    		<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['wifidog_uptime']['days']; ?>
 <?php echo ((is_array($_tmp='days')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['wifidog_uptime']['hours']; ?>
<?php echo ((is_array($_tmp='h')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['wifidog_uptime']['minutes']; ?>
<?php echo ((is_array($_tmp='min')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
<br />
		    	<?php endif; ?>
		    <?php else: ?>
		    <img src='<?php echo $this->_tpl_vars['common_images_url']; ?>
HotspotStatus/down.gif'>
		    <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['duration']['days']; ?>
 <?php echo ((is_array($_tmp='days')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['duration']['hours']; ?>
<?php echo ((is_array($_tmp='h')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['duration']['minutes']; ?>
<?php echo ((is_array($_tmp='min')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
<br />
		    <?php endif; ?>
		    <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['last_heartbeat_user_agent']; ?>

		    </td>
		    		    <td><?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['gw_id']; ?>
</td>
		    <td><?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['name']; ?>
</td>
		    <td>
		    <a href='<?php echo $this->_tpl_vars['base_ssl_path']; ?>
login/index.php?gw_id=<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['gw_id']; ?>
&gw_address=127.0.0.1&gw_port=80'><?php echo ((is_array($_tmp='Login page')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a><br />
		    <a href='<?php echo $this->_tpl_vars['base_url_path']; ?>
portal/?node_id=<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['node_id']; ?>
'><?php echo ((is_array($_tmp='Portal page')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
		    <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['public_stats_file']): ?>
		   <br /><a target="_blank" href='<?php echo $this->_tpl_vars['base_public_stats_url']; ?>
<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['node_id']; ?>
/<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['public_stats_file']; ?>
'><?php echo ((is_array($_tmp='Statistics')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
		    <?php endif; ?>
		    </td>
		    <td style="font-size: 8pt;"><?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['creation_date']; ?>
<br>
		    <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['node_deployment_status']; ?>

		    </td>
		    <td>
		    <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['num_online_users'] != 0): ?>
		    <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['num_online_users']; ?>

		    <?php endif; ?>
		    </td>
		</tr>
	<?php endfor; endif; ?>
	</table>
</div>