{strip}
{= *level: 0 =}
?$projects
	[$projects]
		- [{$name}]({$url}): {$description}
	[/$projects]
$projects?
?$data
	[$data] item =>
		[:0,{$level}:]#[/] {$name}
		{= item.div.standalone: true =}
		{= item.level: (# {$level} + 1 #) =}
		{%% nested: item %%}
	[/$data]
$data?
{/strip}