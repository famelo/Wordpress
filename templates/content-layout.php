<?php

while (the_flexible_field('content')) {
	$layout = get_row_layout();
	$layout = str_replace('/', '_', $layout);
	$template = 'Layouts/' . $layout;

	if (!file_exists(__DIR__ . '/' . $template . '.php')) {
		file_put_contents(__DIR__ . '/' . $template . '.php', '<strong>New empty Layout: ' . $template . '.php</strong>');
	}

	get_template_part('templates/' . $template);

}

?>