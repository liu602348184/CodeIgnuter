<?php /* Smarty version Smarty-3.1.18, created on 2014-09-04 19:03:36
         compiled from "application\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22202540758ed212db7-80803601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c7a97ba3a5816ca1ded6c074e8d289f62e79bb6' => 
    array (
      0 => 'application\\views\\index.tpl',
      1 => 1409850213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22202540758ed212db7-80803601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_540758ed29f7d9_02347220',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540758ed29f7d9_02347220')) {function content_540758ed29f7d9_02347220($_smarty_tpl) {?><html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

<p>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
       <?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>

   <?php } ?>
</p>
</body>
</html><?php }} ?>
