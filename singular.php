<?php

get_header(); ?>

<?php

if (in_category(22)) {
	get_template_part('single-courses');
} elseif ( in_category(12) || in_category(29) || in_category(37) || in_category(491) || in_category(492) || in_category(495) || in_category(496))  {
	get_template_part('single-blog');
} elseif(in_category(23) || in_category(30)|| in_category(48) ) {
	get_template_part('single-teacher');
} elseif(is_singular('tutor')); { 
	get_template_part('single-teacher');
}

get_footer(); ?>