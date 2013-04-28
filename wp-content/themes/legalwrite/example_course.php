<?php
/*
Template Name: Example Course 
*/
?>

<?php get_header(); ?>
<div id="single_wrapper">
	<div class="row">
		<div class="span6 offset1">
			<a href="/"><h3>Legal<i>write</i></h3></a>
		</div>
	</div>
	<div class="row content">
		<div class="span5 offset1">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h4><?php the_title(); ?></h4>

			<?php endwhile; else: ?>
			  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div class="row content">
		<div class="span9 offset1">
			<table class="table table-hover" style="width:940px;">
				<thead>
					<tr>
						<td><h2>Topic</h2></td>
						<td><h2>Details</h2></td>
				<tbody>
					<tr>
						<td><h2>Main principles of good legal writing</h2></td>
						<td>
							<ul>
								<li>Understanding the elements of legal sentences</li>
								<li>Applying ‘natural’ English word order to legal sentences</li>
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
						<td><h2>Drafting a Legal Memo</h2></td>
						<td>
							<ul>
								<li>Organizing ideas</li>
								<li>Structuring sentences</li>
								<li>Constructing paragraphs</li>
								<li>Using headings, bullets and lists</li>
								<li>Introducing the topic</li>
								<li>Presenting the analysis</li>
								<li>Drawing conclusions</li>
								<li>Using the language of advice and persuasion</li>
								<li>Presenting options and negative messages</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><h2>Communications with third parties</h2></td>
						<td>
							<ul>
								<li>Identifying an appropriate style and tone for emails and letters</li>
								<li>Introducing and signing off </li>
								<li>Requesting and providing information</li>
								<li>Arguing your client’s case</li>
								<li>Submitting proposals</li>
								<li>Making threats and giving ultimatums</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td><h2>Rule drafting (regulations and contracts)</h2></td>
						<td>

							<ul>
								<li>Determining overall structure and style</li>
								<li>Constructing a legal provision</li>
								<li>Ordering simple provisions (case, condition, actor, action)</li>
								<li>Ordering complex provisions (several actors, actions or conditions,       exceptions and qualifications)</li>
								<li>Constructing sub clauses</li>
								<li>Expressing conditions</li>
								<li>Describing the actor: gender, article, singular or plural</li>
								<li>Using auxiliary verbs: shall/must, may, should, can</li>
								<li>Expressing the action: selecting the best verb</li>
								<li>Using and avoiding declarative statements</li>
								<li>Expressing exceptions and qualifications</li>
								<li>Using cross references</li>
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
