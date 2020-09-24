<?php

/**
 * New Form ID
 * ----------
 * If there is several forms at the same page, each of them will get their own ID.
 *
 * @return  int
 */
function mytheme_new_form_id() {
	static $id_counter = 0;
	return ++$id_counter;
}
