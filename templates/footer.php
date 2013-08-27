<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-6">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
    <div class="col-lg-6">
		<address>
			<strong><?php the_field('company', 'option'); ?></strong></br>
			<?php the_field('contactperson', 'option'); ?></br>
			<?php the_field('street', 'option'); ?></br>
			<?php the_field('zip', 'option'); ?>, <?php the_field('city', 'option'); ?></br>
			Telefonnummer: <?php the_field('phone', 'option'); ?></br>
			E-Mail: <?php the_field('email', 'option'); ?>
		</address>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>