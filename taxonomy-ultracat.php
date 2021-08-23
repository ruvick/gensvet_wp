<?php
$gensvetID = 7;
$dekoID = 19;

$term = get_term(get_queried_object()->term_id);

if ($term->parent == $gensvetID || $term->parent == $dekoID) {
	get_template_part('template-parts/parent-catalog');
} else {
	get_template_part('template-parts/lines-catalog');
}
?>