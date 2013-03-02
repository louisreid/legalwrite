<?php
/*
Template Name: Example Course 
*/
?>

<?php get_header(); ?>
<div id="single_wrapper">
	<div class="row">
		<div class="span6 offset2">
			<a href="/"><h3>Legal<i>write</i></h3></a>
		</div>
	</div>
	<div class="row content">
		<div class="span4 offset2">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h4><?php the_title(); ?></h4>

			<?php endwhile; else: ?>
			  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="row content">
		<div class="span9 offset2">
			<table class="table table-hover" style="width:819px;">
				<thead>
					<tr>
						<td><h2>Topic</h2></td>
						<td><h2>Details</h2></td>
				<tbody>
					<tr>
						<td><h2>Main principles of good legal writing</h2></td>
						<td>
							<ul>
							<li>Identifying and understanding the functions of elements of a legal sentence</li>
							<li>Using ‘Natural’ English word order as applied to legal sentences </li>
							<li>Being direct and active</li>
							<li>Preferring verbs to nouns</li>
							<li>Using short modern familiar straightforward words</li>
							<li>Making every word count</li>
							<li>Using consistent language</li>
							<li>Using short sentences – covering 1 or 2 points</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><h2>Expressing ideas</h2></td>
						<td>
							<ul>
							  <li>Legal Memo Drafting</li>
							  <li>Organizing ideas</li>
							  <li>Drafting properly structured and logically ordered sentences</li>
							  <li>Constructing paragraphs</li>
							  <li>Using headings, bullets and lists</li>
							  <li>Introducing the topic</li>
							  <li>Presenting the analysis</li>
							  <li>Providing advice</li>
							  <li>Language of advice, persuasion, options and negative messages</li>
							  <li>Commercial and confident legal drafting</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><h2>Communications with third parties</h2></td>
						<td>
							<ul>
							  <li>Style and format of emails and letters </li>
							  <li>Introductory and sign off language</li>
							  <li>Headings</li>
							  <li>Being direct and concise</li>
							  <li>Requesting information</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><h2>Rule drafting (regulations and contracts)</h2></td>
						<td>
							<ul>
							  <li>Importance of actor and action</li>
							  <li>Order for short and long conditions</li>
							  <li>Order for multiple elements (several actors, actions or conditions, exceptions and qualifications) </li>
							  <li>When and how to use lists (sub clauses)</li>
							  <li>Conditions: if, where, when, or something else</li>
							  <li>Actor: gender, singular or plural, definite or indefinite article</li>
							  <li>Auxiliary verbs: use of shall/must, may, should, can</li>
							  <li>Action: active voice, selecting the best verb </li>
							  <li>Declarative statements: when to use and how to express </li>
							  <li>Exceptions and qualifications: when to use and how to express </li>
							  <li>Handling cross references</li>
							  <li>Creating and applying definitions</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>	
			<br><br>
		</div>
	</div>
</div>


<?php get_footer(); ?>
