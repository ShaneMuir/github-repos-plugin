=== My Github Repos ===
Contributors: Shane Muirhead
Donate link:
Tags: github, repos, shortcode, API
Requires at least: 5.0
Tested up to: 6.2
Stable tag: 1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==
My Github Repos is a simple WordPress plugin that allows you to display a list of your GitHub repositories on your site using a shortcode. Customize the display with options for title, username, and the number of repositories to show.

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/my-github-repos` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the shortcode `[github_repos]` in any post or page to display your GitHub repositories.

== Usage ==
1. **Shortcode**: Use `[github_repos]` to display GitHub repositories on any post or page.

   Example:
            `[github_repos title="My Github Repos" username="your_github_username" count="5"]`

- `title`: (Optional) The title to display above the list of repositories. Default is "Latest Github Repos".
- `username`: (Optional) Your GitHub username. Default is "shanemuir".
- `count`: (Optional) The number of repositories to display. Default is 5.

== Frequently Asked Questions ==

= How do I display my GitHub repositories on my site? =
Use the `[github_repos]` shortcode on any page or post where you want your repositories to appear. You can customize the title, username, and number of repositories shown using the shortcode attributes.

= Can I change the appearance of the repositories? =
Yes, you can customize the appearance by adding custom CSS to your theme's stylesheet or using a plugin that allows custom CSS.

= What happens if no repositories are found? =
If no repositories are found for the specified user, a message indicating that no repositories were found will be displayed.

= Is there any limit on the number of repositories I can display? =
The GitHub API allows you to retrieve a maximum of 100 repositories per request, but you can change the `count` attribute to any number to limit the display.

== Changelog ==
= 1.0 =
* Initial release of My Github Repos plugin.

== Upgrade Notice ==
= 1.0 =
* First release.

== License ==
This plugin is licensed under the GPLv2 or later. See the [License URI](https://www.gnu.org/licenses/gpl-2.0.html) for details.
