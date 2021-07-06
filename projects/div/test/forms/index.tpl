<!DOCUMENT html>
<html>
	<head>

	</head>
	<body>
		{= inputTag: 'input' =}

		{%% DOMElement: {
			tag: 'form',
			attrs: {
				action: "/miform",
				method: "POST"
			},
			childs: [
				{
					tag: $inputTag,
					attrs: {
			 			name: 'name',
						type: 'text',
					}
				}
			]
		} %%}
	</body>
</html>
