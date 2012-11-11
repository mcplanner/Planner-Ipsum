<?php
/*
Plugin Name: Planner Ipsum API
Author: Ruth Miller
Description: originally Pete Nelson's Bacon Ipsum Generator (@GunGeekATX)
Version: 0.1
*/

add_action('posts_selection', 'planner_ipsum_api');
function planner_ipsum_api() {

	if (is_page('api') && isset($_REQUEST['type'])) { 
		
		require_once 'PlannerIpsumGenerator.php';
		
		$generator = new PlannerIpsumGenerator();
		$number_of_sentences = 0;
		$number_of_paragraphs = 5;

		if (isset($_REQUEST["paras"]))
			$number_of_paragraphs = intval($_REQUEST["paras"]);

		if (isset($_REQUEST["sentences"]))
			$number_of_sentences = intval($_REQUEST["sentences"]);

		$output = '';
					
		if ($number_of_paragraphs < 1)
			$number_of_paragraphs = 1;

		if ($number_of_paragraphs > 100)
			$number_of_paragraphs = 100;

		if ($number_of_sentences > 100)
			$number_of_sentences = 100;

		$start_with_lorem = isset($_REQUEST["start-with-lorem"]) && $_REQUEST["start-with-lorem"] == "1";

		$paras = $generator->Make_Some_Planning_Filler(
			filter_var($_REQUEST["type"], FILTER_SANITIZE_STRING), 
			$number_of_paragraphs, 
			$start_with_lorem, 
			$number_of_sentences);

		if (isset($_REQUEST["callback"])) {
			header("Content-Type: application/javascript");
			echo $_GET['callback'] . '(' . json_encode($paras) . ')';
		}
		else {
			header("Content-Type: application/json; charset=utf-8");
			echo json_encode($paras);
		}		

		exit;

	}

}
