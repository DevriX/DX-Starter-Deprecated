<?php
/**
 * Template Name: >> Theme Styleguide << 
 * 
 * An example template file showing the typography of your theme. It has all it needs
 * for you to test if your elements look good on different viewports, div wrappers, colors
 * and so on. 
 * 
 * There is a file - assets/sass/base/_preview.scss where you can setup all the colors and
 * extra stylings you need. You can use this as a styleguide file for your projects.
 * 
 * This template uses resources from live websites to load images instead of keeping them
 * bundled inside the theme. Thanks to that the URL used for the images can be altered to
 * pull custom test data if you need. See more here - https://dummyimage.com/
 * 
 * It is still work in progress, if you find something more that needs to be added please
 * open a GitHub issue at https://github.com/DevriX/DX-Starter/issues
 */
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="dxstarter-styleguide-wrapper">
	<!-- Separate each section this way onwards. -->
	<section class="fullwidth-section">
		<div class="dxstarter-styleguide">
			<div class="row">
				<div class="column">
					<header class="page-heading">
						<h1 class="page-header"><?php the_title() ?></h1><!-- .page-header -->
					</header><!-- .page-heading -->
				</div><!-- .columns -->
			</div><!-- .row -->

			<div class="row">
				<div class="column">
					<h2 class="section-title">Grid preview</h2>
				</div><!-- .column -->
			</div><!-- .row -->

			<div class="row">
				<div class="column">
					<h3>Column</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->
			</div><!-- .row -->

			<hr />

			<div class="row">
				<div class="column small-12 medium-6">
					<h3>Column 1/2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->

				<div class="column small-12 medium-6">
					<h3>Column 1/2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->
			</div><!-- .row -->

			<hr />

			<div class="row">
				<div class="column small-12 medium-4">
					<h3>Column 1/3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->

				<div class="column small-12 medium-4">
					<h3>Column 1/3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->

				<div class="column small-12 medium-4">
					<h3>Column 1/3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->
			</div><!-- .row -->

			<hr />

			<div class="row">
				<div class="column small-12 medium-6 large-3">
					<h3>Column 1/4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->

				<div class="column small-12 medium-6 large-3">
					<h3>Column 1/4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->

				<div class="column small-12 medium-6 large-3">
					<h3>Column 1/4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->

				<div class="column small-12 medium-6 large-3">
					<h3>Column 1/4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
				</div><!-- .column -->
			</div><!-- .row -->

		</div><!-- .dxstarter-styleguide -->
	</section><!-- .fullwidth-section -->

	<section class="fullwidth-section">
		<div class="dxstarter-styleguide">
			<div class="row">
				<div class="column">
					<h2 class="section-title">Colors</h2>
				</div><!-- .column -->
			</div><!-- .row -->

			<div class="row">
				<div class="column">
					<div class="theme-colors">
						<div class="colorbox color-primary">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-primary</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-secondary">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-secondary</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-accent">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-accent</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-neutral-dark">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-neutral-dark</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-neutral-light">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-neutral-light</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-divider">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-divider</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-text-body">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-text-body</code>
						</div><!-- .colorbox -->

						<div class="colorbox color-text-muted">
							<div class="color"></div><!-- .color -->
							<code class="name">$color-text-muted</code>
						</div><!-- .colorbox -->
					</div><!-- .theme-colors -->
				</div><!-- .column small-4 medium-2 -->
			</div><!-- .row -->
		</div><!-- .dxstarter-styleguide -->
	</section><!-- .fullwidth-section -->


	<section class="fullwidth-section typography-showcase">
		<div class="dxstarter-styleguide">
			<div class="row">
				<div class="columns">
					<h2 class="section-title">Typography</h2><!-- .section-heading -->
				</div><!-- .columns -->
			</div><!-- .row -->

			<div class="row">
				<div class="columns medium-6">
					<span class="label">Heading tags</span>
					<h1>Heading 1 - some example title goes here</h1>
					<h2>Heading 2 - some example title goes here<h2>
					<h3>Heading 3 - some example title goes here</h3>
					<h4>Heading 4 - some example title goes here</h4>
					<h5>Heading 5 - some example title goes here</h5>
					<h6>Heading 6 - some example title goes here</h6>

					<hr />

					<span class="label">Other standard tags:</span>
					<p>Example <strong>strong text</strong> and <em>em text</em></p>

					<hr />

					<span class="label">And this is code element</span>

					<p>This is how a <code>code wrap (inline)</code> looks like.</p>

					<span class="label">And this is pre element</span>

					<pre>.some-randome-class { display: awesome! }</pre>
				</div><!-- .columns -->

				<div class="columns medium-6">
					<span class="label">This is a paragraph</span>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ulliam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
					<p>Duis autem veleum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel willum lunombro dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					
					<span class="label">This is UL list</span>
					<ul>
						<li>A list of a few items</li>
						<li>A list of a few items</li>
						<li>A list of a few items</li>

						<ul>
							<li>And nested ul list</li>
							<li>And nested ul list</li>
						</ul>
					</ul>

					<span class="label">This is OL list</span>
					<ol>
						<li>A list of a few items</li>
						<li>A list of a few items</li>
						<li>A list of a few items</li>

						<ol>
							<li>And nested ol list</li>
							<li>And nested ol list</li>
						</ol>
					</ol>
				</div><!-- .columns medium-6 -->
			</div><!-- .row -->
		</div><!-- .dxstarter-styleguide -->
	</section><!-- .fullwidth-section typography-showcase -->

	<section class="fullwidth-section typography-showcase">
		<div class="dxstarter-styleguide">
			<div class="row">
				<div class="columns">
					<h2 class="section-title">Typography inside <code>the_content()</code></h2><!-- .section-heading -->
				</div><!-- .columns -->
			</div><!-- .row -->

			<div class="row">
				<div class="columns medium-6">
					<span class="label">Heading tags</span>
					<h1>Heading 1 - some example title goes here</h1>
					<h2>Heading 2 - some example title goes here<h2>
					<h3>Heading 3 - some example title goes here</h3>
					<h4>Heading 4 - some example title goes here</h4>
					<h5>Heading 5 - some example title goes here</h5>
					<h6>Heading 6 - some example title goes here</h6>

					<hr />

					<span class="label">Other standard tags:</span>
					<p>Example <strong>strong text</strong> and <em>em text</em></p>

					<hr />

					<span class="label">And this is code element</span>

					<p>This is how a <code>code wrap (inline)</code> looks like.</p>

					<span class="label">And this is pre element</span>

					<pre>.some-randome-class { display: awesome! }</pre>
				</div><!-- .columns -->

				<div class="columns medium-6">
					<span class="label">This is a paragraph</span>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ulliam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
					<p>Duis autem veleum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel willum lunombro dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					
					<span class="label">This is UL list</span>
					<ul>
						<li>A list of a few items</li>
						<li>A list of a few items</li>
						<li>A list of a few items</li>

						<ul>
							<li>And nested ul list</li>
							<li>And nested ul list</li>
						</ul>
					</ul>

					<span class="label">This is OL list</span>
					<ol>
						<li>A list of a few items</li>
						<li>A list of a few items</li>
						<li>A list of a few items</li>

						<ol>
							<li>And nested ol list</li>
							<li>And nested ol list</li>
						</ol>
					</ol>
				</div><!-- .columns medium-6 -->
			</div><!-- .row -->

		</div><!-- .dxstarter-styleguide -->
	</section><!-- .fullwidth-section typography-showcase -->


	<section class="fullwidth-section">
		<div class="dxstarter-styleguide">
			<div class="row">
				<div class="column">
					<h2 class="section-title">Images</h2>
				</div><!-- .column -->
			</div><!-- .row -->

			<div class="row">
				<div class="column small-12">
					<h3>Column 1/1</h3>
					<img src="https://dummyimage.com/1000x400/f7f7f7/dbdbdb.png&text=Example+image+-+1000x400" alt="" />
				</div><!-- .column -->
			</div><!-- .row -->

			<hr />

			<div class="row">
				<div class="column small-12 medium-6">
					<h3>Column 1/2</h3>
					<img class="responsive-image" src="https://dummyimage.com/1000x400/f7f7f7/dbdbdb.png&text=Example+image+-+1000x400" alt="" />
				</div><!-- .column -->

				<div class="column small-12 medium-6">
					<h3>Column 1/2</h3>
					<img class="responsive-image" src="https://dummyimage.com/1000x400/f7f7f7/dbdbdb.png&text=Example+image+-+1000x400" alt="" />
				</div><!-- .column -->
			</div><!-- .row -->
		</div><!-- .dxstarter-styleguide -->
	</section><!-- .fullwidth-section images -->

	<section class="fullwidth-section">
		<div class="dxstarter-styleguide">
			<div class="row">
				<div class="column">
					<h2 class="section-title">Table</h2>
				</div><!-- .column -->
			</div><!-- .row -->

			<div class="row">
				<div class="column">
					<table>
						<tbody>
							<tr>
								<td>Example heading 1&nbsp;</td>
								<td>Awesome table&nbsp;</td>
								<td>With content&nbsp;</td>
								<td>To display for you&nbsp;</td>
								<td>In all of these&nbsp;</td>
								<td>Columns&nbsp;</td>
							</tr>
							<tr>
								<td>1</td>
								<td>1&nbsp;</td>
								<td>1&nbsp;</td>
								<td>1&nbsp;</td>
								<td>1&nbsp;</td>
								<td>1&nbsp;</td>
							</tr>
							<tr>
								<td>2&nbsp;</td>
								<td>2</td>
								<td>2&nbsp;</td>
								<td>2&nbsp;</td>
								<td>2&nbsp;</td>
								<td>2&nbsp;</td>
							</tr>
							<tr>
								<td>3&nbsp;</td>
								<td>3&nbsp;</td>
								<td>3&nbsp;</td>
								<td>3</td>
								<td>3</td>
								<td>3&nbsp;</td>
							</tr>
						</tbody>
					</table>
					<!-- DivTable.com -->
				</div><!-- .column -->
			</div><!-- .row -->
		</div>
	</section><!-- .fullwidth-section -->
</div><!-- .dxstarter-styleguide-wrapper -->

<?php endwhile; ?>

<?php get_footer(); ?>
