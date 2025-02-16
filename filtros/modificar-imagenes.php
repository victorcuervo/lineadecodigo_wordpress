<?

	// Añadimos la clase 'img-fluid' a todas las clases del contenido
	function add_img_fluid_class($content) {
		$content = preg_replace('/<img(.*?)class="(.*?)"/', '<img$1class="$2 img-fluid"', $content);
		$content = preg_replace('/<img(.*?)class=\'(.*?)\'/', '<img$1class=\'$2 img-fluid\'', $content);
		$content = preg_replace('/<img((?!class=)[^>])+>/', '<img class="img-fluid"$1>', $content);
		return $content;
	}
	add_filter('the_content', 'add_img_fluid_class');