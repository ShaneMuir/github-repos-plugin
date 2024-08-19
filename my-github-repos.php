<?php
/**
* Plugin Name: My Github Repos
* Description: Display user repos in widget
* Version: 1.0
* Author: Shane Muirhead
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Include Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-scripts.php');

// Register Shortcode
function mgr_github_repos_shortcode($atts): string {
	// Extract shortcode attributes with defaults
	$atts = shortcode_atts(
		array(
			'title'    => 'Latest Github Repos',
			'username' => 'shanemuir',
			'count'    => 5,
		),
		$atts,
		'github_repos'
	);

	// Get attributes
	$title = esc_attr($atts['title']);
	$username = esc_attr($atts['username']);
	$count = esc_attr($atts['count']);

	// Output the repos
	$output = '<div class="github-repos">';
	if (!empty($title)) {
		$output .= '<h3>' . esc_html($title) . '</h3>';
	}
	$output .= mgr_show_repos($username, $count);
	$output .= '</div>';

	return $output;
}

add_shortcode('github_repos', 'mgr_github_repos_shortcode');

// Function to Show Repositories
function mgr_show_repos($username, $count): string {
	$url = 'https://api.github.com/users/' . $username . '/repos?sort=created&per_page=' . $count;
	$options = array('http' => array('user_agent' => $_SERVER['HTTP_USER_AGENT']));
	$context = stream_context_create($options);
	$response = file_get_contents($url, false, $context);
	$repos = json_decode($response);

	// Build Output
	$output = '<ul class="repos">';
	if (!empty($repos)) {
		foreach ($repos as $repo) {
			$output .= '<li>
							<div class="repo-title">' . esc_html($repo->name) . '</div>
							<div class="repo-desc">' . esc_html($repo->description) . '</div>
							<a target="_blank" href="' . esc_url($repo->html_url) . '">View on Github</a>
						</li>';
		}
	} else {
		$output .= '<li>No repositories found for this user.</li>';
	}
	$output .= '</ul>';

	return $output;
}