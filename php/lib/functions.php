<?php

//サニタイジング
function h($val) {
	return htmlspecialchars($val,ENT_QUOTES,'UTF-8');
}

?>