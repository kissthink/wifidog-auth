<?php /* Smarty version 2.6.18, created on 2010-08-15 10:39:00
         compiled from templates/sites/hotspot_status.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'templates/sites/hotspot_status.tpl', 64, false),array('modifier', 'sprintf', 'templates/sites/hotspot_status.tpl', 64, false),array('function', 'cycle', 'templates/sites/hotspot_status.tpl', 74, false),)), $this); ?>

<?php if ($this->_tpl_vars['sectionMAINCONTENT']): ?>

    <form name="hotspots_form" method="post">
	<input type="hidden" name="format" value="HTML" />
        <?php echo $this->_tpl_vars['selectNetworkUI']; ?>

    </form>
    <br />

    <div id="hotspot_status">
        <table>
            <thead>
                <tr>
			<th colspan="6"><?php echo ((is_array($_tmp=((is_array($_tmp="Status of the %d open %s Hotspots")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['num_deployed_nodes'], $this->_tpl_vars['selectedNetworkName']) : sprintf($_tmp, $this->_tpl_vars['num_deployed_nodes'], $this->_tpl_vars['selectedNetworkName'])); ?>
</th>
                </tr>
                <tr>
                    <th><?php echo ((is_array($_tmp="Hotspot / Status")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
                    <th><?php echo ((is_array($_tmp='Description')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
                    <th><?php echo ((is_array($_tmp='Location')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
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
                    <td>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['node_deployment_status'] == 'NON_WIFIDOG_NODE'): ?>
                            ?
                        <?php else: ?>
                            <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['is_up'] == 't'): ?>
                                <img src='<?php echo $this->_tpl_vars['common_images_url']; ?>
HotspotStatus/up.gif'>
                            <?php else: ?>
                                <img src='<?php echo $this->_tpl_vars['common_images_url']; ?>
HotspotStatus/down.gif'>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if (! $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['home_page_url']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['name']; ?>

                        <?php else: ?>
                            <a href='<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['home_page_url']; ?>
' target='_new'><?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['name']; ?>
</a>
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['node_deployment_status'] == 'IN_TESTING'): ?>
                            <br />
                            <?php echo ((is_array($_tmp='Hotspot in testing phase')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>

                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['node_deployment_status'] == 'NON_WIFIDOG_NODE' && $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['is_up'] != 't'): ?>
                            <br />
                            <?php echo ((is_array($_tmp='Hotspot not monitored')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>

                        <?php endif; ?>
                    </td>

                    <td>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['description']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['description']; ?>

                            <br />
                        <?php endif; ?>

                        <?php echo ((is_array($_tmp=((is_array($_tmp="Opened on %s")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)))) ? $this->_run_mod_handler('sprintf', true, $_tmp, $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['creation_date']) : sprintf($_tmp, $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['creation_date'])); ?>

                    </td>

                    <td>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['civic_number']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['civic_number']; ?>
,
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['street_name']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['street_name']; ?>

                        <?php endif; ?>
                        <br/>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['city']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['city']; ?>
,
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['province']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['province']; ?>
,
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['postal_code']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['postal_code']; ?>
,
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['country']): ?>
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['country']; ?>

                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['map_url']): ?>
                            - <a href='<?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['map_url']; ?>
' target='_new'><?php echo ((is_array($_tmp='Map')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</a>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['mass_transit_info']): ?>
                            <br />
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['mass_transit_info']; ?>

                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['public_phone_number']): ?>
                            <br />
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['public_phone_number']; ?>

                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['nodes'][$this->_sections['node']['index']]['public_email']): ?>
                            <br />
                            <?php echo $this->_tpl_vars['nodes'][$this->_sections['node']['index']]['public_email']; ?>

                        <?php endif; ?>
                    </td>
                </tr>
            <?php endfor; endif; ?>
        </table>
    </div>
<?php endif; ?>