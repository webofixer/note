<?
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
				exec('where gs', $output);
			}
			else{
				exec('which gs', $output);
			}
