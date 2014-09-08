<html>
<head>
	<title>{$title}</title>
</head>
<body>

<p>
    {foreach from=$content item=item}
       {$item.id}
   {/foreach}
</p>
</body>
</html>