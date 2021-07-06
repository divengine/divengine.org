
{= repl1: [["<",""],[">",""]] =}

[$docs]
			[$vars]

				{?( trim("{'value}") !== "" )?}
				<?
					$value = trim(str_replace(array("\t","\n","\r")," ", $value));
					while(strpos($value, "  ")) $value = str_replace("  "," ", $value);
					$pars = explode(" ", $value, 4);
				?>
				<tr>
					<td>{$_order}</td>
					[$pars]
					<td>{:repl1}{$value}{:/repl1}</td>
					[/$pars]
				</tr>
				{/?}
			[/$vars]
[/$docs]
