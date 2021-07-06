{strip}
?$tag
<{$tag} ?$attrs [$attrs] {$_key} = "{$value}" [/$attrs] $attrs? !$childs /$childs!>
?$childs
	[$childs] child => {\t}
		{= child.div.standalone: true =}
		{%% DOMElement: child %%} {\n}
	[/$childs]
	</{$tag}>
$childs?
@else@
{$content}
$tag?
{/strip}