<?php /* Smarty version 2.6.18, created on 2012-08-21 13:22:36
         compiled from admin/templates/online_users.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', '_', 'admin/templates/online_users.html', 8, false),array('modifier', 'date_format', 'admin/templates/online_users.html', 26, false),array('modifier', 'fsize_format', 'admin/templates/online_users.html', 27, false),array('function', 'cycle', 'admin/templates/online_users.html', 22, false),)), $this); ?>
<?php if ($this->_tpl_vars['error']): ?>
	<div id="help">
	<?php echo $this->_tpl_vars['error']; ?>

	</div>
<?php else: ?>

<fieldset>
<legend><?php echo ((is_array($_tmp='Online users')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</legend>
<table>

<thead>
<tr>
  <th><?php echo ((is_array($_tmp='Node')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
  <th><?php echo ((is_array($_tmp='Username')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
  <th><?php echo ((is_array($_tmp='Origin')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
  <th><?php echo ((is_array($_tmp='Logged in Since')) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
  <th><?php echo ((is_array($_tmp="Traffic IN/OUT")) ? $this->_run_mod_handler('_', true, $_tmp) : _($_tmp)); ?>
</th>
</tr>
</thead>

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
<tr class='<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
'>
    <td><?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['name']; ?>
</td>
    <td><a href="stats.php?Statistics=<?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['account_origin']; ?>
&distinguish_users_by=user_id&stats_selected_users=<?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['username']; ?>
&UserReport=on&user_id=<?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['user_id']; ?>
&action=generate"><?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['username']; ?>
</a></td>
    <td><?php echo $this->_tpl_vars['users_array'][$this->_sections['i']['index']]['account_origin']; ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['users_array'][$this->_sections['i']['index']]['timestamp_in'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y/%m/%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y/%m/%d %H:%M:%S")); ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['users_array'][$this->_sections['i']['index']]['incoming'])) ? $this->_run_mod_handler('fsize_format', true, $_tmp) : smarty_modifier_fsize_format($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['users_array'][$this->_sections['i']['index']]['outgoing'])) ? $this->_run_mod_handler('fsize_format', true, $_tmp) : smarty_modifier_fsize_format($_tmp)); ?>
</td>
    <td></td>
</tr>
<?php endfor; endif; ?>
</table>
</fieldset>

<?php endif; ?>