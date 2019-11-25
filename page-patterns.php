<?php get_header(); ?>
<?php the_post(); ?>
<main role="main" class="main wrapper cf">
	<section id="colors" class="pattern-section section">
	<h2 class="pattern-section-title">Colors</h2>
	<ul class="color-swatches">
		<li class="color-swatch">
			<div class="swatch bg-black"></div>
			<div class="swatch-details">
			#f1f1f1<br>
			@black
			</div>
		</li>
		<li class="color-swatch">
			<div class="swatch bg-white"></div>
			<div class="swatch-details">
			#ffffff<br>
			@white</div>
		</li>
	</ul>
</section>

<section id="backgrounds" class="pattern-section section">
	<h2 class="pattern-section-title">Backgrounds</h2>
	<div class="xx-pattern" id="backgrounds">
    <details class="xx-pattern-details">
      <summary class="xx-pattern-name">Backgrounds</summary>
      <div class="highlight">
        <pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">
&lt;div class=&quot;bg-grey&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-grey-light&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-grey-lighter&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-stone-grey&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-smoky-sky&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-subtle-jade&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-sandcastle&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-ocean-haze&quot;&gt;This is content&lt;/div&gt;
&lt;div class=&quot;bg-ash-pine&quot;&gt;This is content&lt;/div&gt;</code></pre>
      </div>
    </details>
    <div class="xx-pattern-description">
      <p class="small center">To set a background color for a given element, use a class of <code>bg-colorname</code>.</p>
    </div>
    <div class="xx-pattern-preview">
      <div class="bg-grey">This is content</div>
      <div class="bg-grey-light">This is content</div>
      <div class="bg-grey-lighter">This is content</div>
      <div class="bg-stone-grey">This is content</div>
      <div class="bg-smoky-sky">This is content</div>
      <div class="bg-subtle-jade">This is content</div>
      <div class="bg-sandcastle">This is content</div>
      <div class="bg-ocean-haze">This is content</div>
      <div class="bg-ash-pine">This is content</div>
     
    </div>
  </div>
</section>

<section id="typography" class="row pattern-section section">
	<h2 class="pattern-section-title">Typography</h2>
	<div class="xx-pattern bg-grey-lighter" id="fonts">
		<div class="xx-pattern-details">
			<div class="xx-pattern-name">Fonts</div>
		</div>
		<div class="xx-pattern-description"><p class="small center">Headlines should be set in [FONT NAME], using the class: <code>.font-headline</code>. Body text should be set in [FONT NAME], using the the class: <code>.font-body</code></p></div>
		<div class="xx-pattern-preview">
			<h3>[FONT NAME]</h3>
			<p class="large font-headline">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!&/()$=@;:,.</p>
			<p class="large font-headline-italic">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!&/()$=@;:,.</p>
			<p class="large font-headline-bold">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!&/()$=@;:,.</p>

			<h3>[FONT NAME]</h3>
			<p class="large alt">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!&/()$=@;:,.</p>
			<p class="large alt-light">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>abcdefghijklmnopqrstuvwxyz<br>0123456789<br>!&/()$=@;:,.</p>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="h1">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Heading-1</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;h1&#x3E;Heading One&#x3C;/h1&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<h1>Heading One</h1>
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="h2">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Heading-2</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;h2&#x3E;Heading Two&#x3C;/h2&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<h2>Heading Two</h2>
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="h3">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Heading-3</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;h3&#x3E;Heading Three&#x3C;/h3&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<h3>Heading Three</h3>
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="h4">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Heading-4</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;h4&#x3E;Heading Four&#x3C;/h4&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<h4>Heading Four</h4>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="page-title">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Page Title</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;h1 class=&#x22;page-title&#x22;&#x3E;Page Title&#x3C;/h1&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<h1 class="page-title">Page Title</h1>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="section-title">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Section Title</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;h2 class=&#x22;section-title&#x22;&#x3E;Section Title&#x3C;/h2&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<h2 class="section-title">Section Title</h2>
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="inline-link">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Inline Link</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;p&#x3E;This is an &#x3C;a href=&#x22;#&#x22;&#x3E;inline link&#x3C;/a&#x3E;.&#x3C;/p&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<p>This is an <a href="#">inline link</a>.</p>
		</div>
	</div>
					
	<div class="xx-pattern bg-grey-lighter" id="list">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Unordered List</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;div class=&#x22;content&#x22;&#x3E;
&#x9;&#x3C;ul&#x3E;
&#x9;&#x9;&#x3C;li&#x3E;List Item&#x3C;/li&#x3E;
&#x9;&#x9;&#x3C;li&#x3E;List Item&#x3C;/li&#x3E;
&#x9;&#x9;&#x3C;li&#x3E;List Item&#x3C;/li&#x3E;
&#x9;&#x3C;/ul&#x3E;
&#x3C;/div&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-description">
			<p class="small center">Content lists include softer bullets than the default list style. To use this style, the <code>&#x3C;ul&#x3E;</code> should be a child of an element with the class: <code>.content</code></p>
		</div>
		<div class="xx-pattern-preview">
			<div class="content">
				<ul>
				  <li>List Item</li>
				  <li>List Item</li>
				  <li>List Item</li>
				</ul>
			</div>
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="paragraph">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Paragraph</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;p&#x3E;This is a paragraph&#x3C;/p&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<p>This is a paragraph</p>
		</div>
	</div>
					
	<div class="xx-pattern bg-grey-lighter" id="paragraph-large">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Large Paragraph</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;p class=&#x22;large&#x22;&#x3E;This is a large paragraph&#x3C;/p&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<p class="large">This is a large paragraph</p>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="paragraph-large">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Small Paragraph</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;p class=&#x22;small&#x22;&#x3E;This is a small paragraph&#x3C;/p&#x3E;
&#x3C;p&#x3E;&#x3C;small&#x3E;This is a small paragraph&#x3C;/small&#x3E;&#x3C;/p&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<p class="small">This is a small paragraph</p>
			<p><small>This is a small paragraph</small></p>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="blockquote">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Blockquote</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">&#x3C;blockquote&#x3E;
&#x9;This is an example quotation that uses the blockquote tag.
&#x9;&#x3C;br /&#x3E;Here is another line to make it look bigger.
&#x3C;/blockquote&#x3E;</code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<blockquote>
				This is an example quotation that uses the blockquote tag.
				<br />Here is another line to make it look bigger.
			</blockquote>
          
		</div>
	</div>
</section>

<section id="buttons" class="row pattern-section section">
	<h2 class="pattern-section-title">Buttons</h2>
						
	<div class="xx-pattern bg-grey-lighter" id="button">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Button</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<a class="btn">Button</a>
			<a class="btn-alt">Button</a>
			<a class="btn">Button</a>
			<a class="btn-stone-grey">Button</a>
			<a class="btn-smoky-sky">Button</a>
			<a class="btn-subtle-jade">Button</a>
			<a class="btn-sandcastle">Button</a>
			<a class="btn-ocean-haze">Button</a>
			<a class="btn-ash-pine">Button</a>
			<a class="btn-grey">Button</a>
			<a class="btn-grey-light">Button</a>
			<a class="btn-grey-lighter">Button</a>
			<a class="btn-small">Button</a>			
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="btn-border">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">.btn-border</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="row bg-grey-light center">
				<a class="btn-border">.btn-border</a>
			</div>
		</div>
	</div>
</section>
	
<section id="forms" class="row pattern-section section">
	<h2 class="pattern-section-title">Forms</h2>
		
	<div class="xx-pattern bg-grey-lighter" id="input-float-label">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Input</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<form class="contact_form" role="form">
				<div class="field-wrapper">
		    		<label>Input</label>
		  			<input type="text">
		  		</div>
			</form>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="input-float-label">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Input (float label)</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<form class="contact_form" role="form">
				<div class="field-wrapper">
		    		<label class="absolute">Input</label>
			  		<div>
		  				<input type="text">
			  		</div>
		  		</div>
			</form>
		</div>
	</div>
							
	<div class="xx-pattern bg-grey-lighter" id="radio">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Radio Buttons</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="">
	  			<ul class="gfield_radio">
	    			<li>
	      				<input name="input_1" type="radio" checked="checked" id="choice_1">
	      				<label for="choice_1" id="label_1">Choice 1</label>
	    			</li>
	    			<li>
	    				<input name="input_1" type="radio" id="choice_2">
	      				<label for="choice_2" id="label_2">Choice 2</label>
	    			</li>
	  			</ul>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="checkbox">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Checkbox</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="ginput_container">
  				<ul class="gfield_checkbox">
				    <li>
						<input type="checkbox" checked="checked" value="" id="choice_11">
						<label for="choice_11" id="label_11">Choice 3</label>
					</li>
				    <li>
						<input type="checkbox" value="" id="choice_12">
						<label for="choice_12" id="label_12">Choice 2</label>
					</li>
				    <li>
						<input type="checkbox" value="" id="choice_13">
						<label for="choice_13" id="label_13">Choice 3</label>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="select">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Select</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<form class="contact_form">
				<select id="name" name="name" class="fancy-select">
					<option value="Select">Select </option>
					<option value="Option 1">Option 1</option>
					<option value="Option 2">Option 2</option>
					<option value="Option 3">Option 3</option>
				</select>
			</form>
		</div>
	</div>	
	<div class="xx-pattern bg-grey-lighter" id="combined">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Combined Input/Submit</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<form action="#" class="validate cf combined bg-blue-light row" target="_blank">
				<input type="email" value="" name="EMAIL" class="required email" placeholder="Email Address">
				<input type="submit" value="Submit" name="subscribe" class="submit" id="mc-embedded-subscribe" title="Sign Up">
			</form>
		</div>
	</div>
</section>

<section id="media" class="row pattern-section section">
	<h2 class="pattern-section-title">Media</h2>
	<div class="xx-pattern bg-grey-lighter" id="">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Image Wide</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-description">
			<p class="small center">Wide images should be used for larger screens.</p>
		</div>
		<div class="xx-pattern-preview">
			<img src="http://placehold.it/1600x550/c7c8ca/727478">
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Image Thumb</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-description">
			<p class="small center">The image thumb aspect ratio is used for smaller size images and as a small screen alternative when art directing wide images.</p>
		</div>
		<div class="xx-pattern-preview">
			<img src="http://placehold.it/740x384/c7c8ca/727478">
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="picture">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Picture (w/art direction)</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-description">
			<p class="small center">When using picture w/art direction the thumb image is used for small screens and the wide image is used for larger screens.</p>
		</div>
		<div class="xx-pattern-preview">
			<picture>
				<!--[if IE 9]><video style="display: none;"><![endif]-->
				<source srcset="http://placehold.it/1600x550/c7c8ca/727478" media="(min-width: 38em)">
				<source srcset="http://placehold.it/740x384/c7c8ca/727478">
				<!--[if IE 9]></video><![endif]-->
				<img alt="Picture">
			</picture>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="avatar">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Avatar</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<img class="avatar" src="http://placehold.it/500x500/c7c8ca/727478" alt="Avatar">
		</div>
	</div>
</section>
	
<section id="navigation" class="row pattern-section section">
	<h2 class="pattern-section-title">Navigation</h2>
	<div class="xx-pattern bg-grey-lighter" id="">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Tabs</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<ul class="tabs cf">
				<li class="active tab"><a href="#tab2" class="active">Tab 1</a></li>
				<li class="tab "><a href="#tab2" class="">Tab 2</a></li>
			</ul>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Small Tabs</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<ul class="tabs tabs-small cf">
				<li class="active tab"><a href="#tab2" class="active">Tab 1</a></li>
				<li class="tab "><a href="#tab2" class="">Tab 2</a></li>
			</ul>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Pagination</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="pagination">
				<ul class="page-numbers">
					<li><a class="prev page-numbers" href="http://gladtidingsomaha.com/news/page/1/">«</a></li>
					<li><a class="page-numbers" href="#">1</a></li>
					<li><span class="page-numbers current">2</span></li>
					<li><a class="page-numbers" href="#">3</a></li>
					<li><a class="next page-numbers" href="#">»</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="elements" class="row pattern-section section">
	<h2 class="pattern-section-title">Elements</h2>
	<div class="xx-pattern bg-grey-lighter" id="borders">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Borders</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<hr>
			<hr class="border-small">
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name"</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="grid-6 bg-grey-lighter">
				<img src="http://placehold.it/740x384/c7c8ca/727478&amp;text=placeholder+image" alt="">
				<div class="details">
					<h3>Heading 3</h3>
					<p class="small">This is some text.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="placeholder">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Placeholder</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-description">
			<p class="small center">Sometimes a featured image or thumbnail doesn't exist, so a placeholder with the title in the center can automatically take its place.</p>
		</div>
		<div class="xx-pattern-preview">
			<div class="grid-6">
				<div class="placeholder-small featured-image bg-blue">
					<div class="placeholder-content">
						<h3>Placeholder Text</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="box">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Box</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="box">
  				<span class="quotation-mark qm-1">“</span>
  				<p class="big">This is a Headline.</p>
  				<a href="#">This is a link</a>
  				<span class="quotation-mark qm-2">”</span>
			</div>
		</div>
	</div>

	<div class="xx-pattern bg-grey-lighter" id="staff-entry">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Staff Entry</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-preview">
			<div class="staff-entry cf">
				<img width="500" height="500" src="http://placehold.it/500x500/c7c8ca/727478" class="avatar" alt="avatar">
  				<div class="staff-meta">
					<h3>Name</h3>
					<ul>
						<li>Title</li>
						<li><a href="mailto:hello@yourdomain.com" title="Email Name">hello@yourdomain.com</a></li>
					</ul>
				</div>
				<div class="bio small" id="bio">
					<p>Bio goes here</p>
				</div>
			</div>
		</div>
	</div>
</section>
	
<section id="icons" class="row pattern-section section">
	<h2 class="pattern-section-title">Icons</h2>
	<div class="xx-pattern bg-grey-lighter" id="icons">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Icons</summary>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html"></code></pre>
			</div>
		</details>
		<div class="xx-pattern-description">
			<p class="small center">Icons created with <a href="http://icomoon.io">icomoon</a>.</p>
		</div>
		<div class="xx-pattern-preview">

		</div>
	</div>
</section>

<section class="row pattern-section section" id="animation">
	<h2 class="pattern-section-title">Animation</h2>
	<div class="xx-pattern bg-grey-lighter">
		<details class="xx-pattern-details">
			<summary class="xx-pattern-name">Animation</summary>
			<div class="highlight"></div>
		</details>
		<div class="xx-pattern-preview">
			<div class="demo-animate animate-fade"><strong>Fade:</strong> Duration: 0.3s Easing: ease-out (Hover to see effect)</div>

			<div class="demo-animate animate-move">
				<div class="demo-shape"></div>
				<strong>Movement:</strong> Duration: 0.8s  Easing: ease-in-out; (Hover to see effect)
			</div>
		</div>
	</div>
</section>

<section id="mixins" class="row pattern-section section">
	<h2 class="pattern-section-title">Mixins</h2>
	<div class="xx-pattern bg-grey-lighter" id="mixin-border-radius">
		<div class="xx-pattern-details">
			<div class="xx-pattern-name">.border-radius()</div>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">.border-radius(@radius: 4px) {
	border-radius: @radius;
}</code></pre>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="mixin-transition">
		<div class="xx-pattern-details">
			<div class="xx-pattern-name">.transition()</div>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">.transition(@time: 0.2s){
	transition: all @time ease-in-out;
}</code></pre>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="mixin-letter-spacing">
		<div class="xx-pattern-details">
			<div class="xx-pattern-name">.letter-spacing()</div>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">.letter-spacing(@size:0.12em){
	letter-spacing: @size;
}</code></pre>
			</div>
		</div>
	</div>
	<div class="xx-pattern bg-grey-lighter" id="mixin-box">
		<div class="xx-pattern-details">
			<div class="xx-pattern-name">.box()</div>
			<div class="highlight">
				<pre data-lang="HTML" class=" language-markup"><code class=" language-markup" data-lang="html">.box(@color:@blue) {
	background: @color;
	padding: 2em;
	.border-radius;
}</code></pre>
			</div>
		</div>
	</div>
</section>

<footer>

</footer>
</main>
<?php get_footer(); ?>