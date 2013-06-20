<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="Content-Language" content="en"/>
		<title><? echo $this->getApplication()->getConfiguration('frontendName') . $this->localize(' Backend'); ?></title>
		<link href="<? echo $this->getApplication()->getConfiguration('cheeseUrl'); ?>css/style.css" rel="stylesheet" type="text/css"/>
		<link href="<? echo $this->getApplication()->getConfiguration('baseUrl'); ?>css/style.css" rel="stylesheet" type="text/css"/>
		<link href="<? echo $this->getApplication()->getConfiguration('frontendUrl'); ?>favicon.ico" rel="shortcut icon" type="image/x-icon"/>
		<script type="text/javascript" src="<? echo $this->getApplication()->getConfiguration('cheeseUrl'); ?>js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="<? echo $this->getApplication()->getConfiguration('cheeseUrl'); ?>js/cheese.js"></script>
	</head>
	<body>
<? if (isset($message) && !empty($message)): ?>
		<div id="message">
			<? echo $this->localize($message); ?>
		</div>
<? endif; ?>
		<a id="logo" href="<? echo $this->getApplication()->getConfiguration('baseUrl'); ?>" title="<? echo $this->localize('%s Backend', $this->getApplication()->getConfiguration('frontendName')); ?>"><img src="<? echo $this->getApplication()->getConfiguration('frontendUrl'); ?>img/logo.png" alt="<? echo $this->localize('%s Backend', $this->getApplication()->getConfiguration('frontendName')); ?>" title="<? echo $this->localize('%s Backend', $this->getApplication()->getConfiguration('frontendName')); ?>"/></a>
		<a id="signOut" href="<? echo $this->getApplication()->getConfiguration('baseUrl') . 'Authentication/signOut'; ?>" title="<? echo $this->localize('Sign out'); ?>"><? echo $this->localize('Sign out'); ?></a>
		<div id="document">
