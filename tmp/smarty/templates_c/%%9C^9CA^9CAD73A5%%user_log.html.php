<?php /* Smarty version 2.6.18, created on 2012-08-21 13:22:34
         compiled from admin/templates/user_log.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'admin/templates/user_log.html', 2, false),array('modifier', 'date_format', 'admin/templates/user_log.html', 27, false),array('function', 'html_options', 'admin/templates/user_log.html', 9, false),array('function', 'cycle', 'admin/templates/user_log.html', 22, false),)), $this); ?>
<fieldset class="pretty_fieldset">
<legend><?php echo ((is_array($_tmp='User list')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</legend>
<?php if ($this->_tpl_vars['error']): ?>
	<div id="help">
	<?php echo $this->_tpl_vars['error']; ?>

	</div>
<?php else: ?>
<form method="get">
<?php echo ((is_array($_tmp="Sort by:")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <select name="sort"><?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sort_ids'],'selected' => $this->_tpl_vars['sort'],'output' => $this->_tpl_vars['sort_ids']), $this);?>
</select>
<?php echo ((is_array($_tmp="Direction:")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
 <select name="direction"><?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['direction_ids'],'selected' => $this->_tpl_vars['direction'],'output' => $this->_tpl_vars['direction_ids']), $this);?>
</select>
<input type="submit" value="<?php echo ((is_array($_tmp='Sort')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
">
</form>

<table>
<tr>
	<th><?php echo ((is_array($_tmp='Username')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
	<th><?php echo ((is_array($_tmp='Network')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
	<th><?php echo ((is_array($_tmp='Registered On')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
	<th><?php echo ((is_array($_tmp='Account Status')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users_array']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
                    

	<td><a href="<?php echo $this->_tpl_vars['base_ssl_path']; ?>
admin/generic_object_admin.php?object_id=<?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['user_id']; ?>
&object_class=User&action=edit"><?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['username']; ?>
</a></td>
	<td><?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['account_origin']; ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['users_array'][$this->_sections['i']['index']]['reg_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d") : smarty_modifier_date_format($_tmp, "%Y/%m/%d")); ?>
</td>
        <?php $this->assign('info', ($this->_tpl_vars['users_array'][$this->_sections['i']['index']])); ?>
    <td><?php echo $this->_tpl_vars['account_status_to_text'][$this->_tpl_vars['info']['account_status']]; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
</fieldset>
<br>

<?php if ($this->_tpl_vars['pages']): ?>
<div>
Page:
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<a <?php if ($this->_tpl_vars['pages'][$this->_sections['i']['index']]['selected']): ?>style="font-weight: bold;" <?php endif; ?>href="?sort=<?php echo $this->_tpl_vars['sort']; ?>
&direction=<?php echo $this->_tpl_vars['direction']; ?>
&page=<?php echo $this->_tpl_vars['pages'][$this->_sections['i']['index']]['number']; ?>
"><?php echo $this->_tpl_vars['pages'][$this->_sections['i']['index']]['number']; ?>
</a>
<?php endfor; endif; ?>
</div>
<?php endif; ?>

<?php endif; ?>