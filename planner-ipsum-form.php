<?php
/*
Plugin Name: Planner Ipsum Form
Author: Ruth Miller
Description: originally Pete Nelson's Bacon Ipsum Generator (@GunGeekATX)
Version: 0.1
*/

add_shortcode('planner-ipsum-form', 'planner_ipsum_form');
function planner_ipsum_form($atts)
{
	$output = '';

	$form = '
		<p>Need some wonky planner verbage? Generate it automatically!</p>

		<form id="make-it-planning" action="' . site_url('/') . 'planner-ipsum/" method="get">
			<table>
				<tbody>
				<tr>
					<td>Paragraphs:</td>
					<td><input style="width: 40px;" type="text" name="paras" value="5" maxlength="2" /></td>
				</tr>
				<tr>
					<td>Type:</td>
					<td><input id="all-planner" type="radio" name="type" value="all-planner" checked="checked" /><label for="all-planner">Planning buzzwords only</label> <input id="planning-and-filler" type="radio" name="type" value="planning-and-filler" /><label for="meat-and-filler">Buzzwords with and a little filler, too</label></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Give me text!" /></td>
				</tr>
				</tbody>
				</table>
		</form>
	';


	if (isset($_REQUEST["type"]))
	{

		require_once 'PlannerIpsumGenerator.php';

		$generator = new PlannerIpsumGenerator();
		$number_of_paragraphs = 5;
		if (isset($_REQUEST["paras"]))
			$number_of_paragraphs = intval($_REQUEST["paras"]);

		$output = '';
					
		if ($number_of_paragraphs < 1)
			$number_of_paragraphs = 1;

		if ($number_of_paragraphs > 100)
			$number_of_paragraphs = 100;

		$paragraphs = $generator->Make_Some_Planning_Filler(
			$_REQUEST["type"], 
			$number_of_paragraphs,
			isset($_REQUEST["start-with-lorem"]) && $_REQUEST["start-with-lorem"] == "1");


		$output = '<div>';
		foreach($paragraphs as $paragraph)
			$output .= '<p>' . $paragraph . '</p>';
		 
		$output .= '</div>';
	}



	return $output . $form;

}

