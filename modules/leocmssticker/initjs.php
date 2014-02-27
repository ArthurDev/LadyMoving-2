<script type="text/javascript">
 $(document).ready(function() {
                $("#lof-cmssticker<?php echo $posName.$blockid;  ?>").lofTextEffect({
					autoplay	:  <?php echo (int)$autoplay==1?'true':'false'; ?>,
                    slideshow_transition_effect: '<?php echo $effect; ?>',//slide_left slide_down fade_in
					easing			: '<?php echo $animationTransition; ?>',
					slideshow_duration : <?php echo (int)$animationDuration; ?>,
                    slideshow_time_interval: <?php echo (int)$interval; ?>,
                    slideshow_window_width: <?php echo (int)$win_width; ?>,
                    slideshow_window_height: <?php echo (int)$win_height; ?>,
                    slideshow_border_style: '<?php echo $border_style;?>',//dashed dotted double groove hidden inset none outset ridge solid
                    slideshow_border_size: <?php echo (int)$border_size; ?>,
                    slideshow_border_color: '<?php echo $border_color; ?>',
                    slideshow_border_radius: <?php echo $border_radius; ?>,
                    slideshow_padding_size: <?php echo $padding_size; ?>,
                    soldeshow_background_color: '<?php echo $background_color; ?>',
					play_control: '#lofsticker_play<?php echo $posName.$blockid; ?>',
					prev_control: '#lofsticker_prev<?php echo $posName.$blockid; ?>',
					next_control: '#lofsticker_next<?php echo $posName.$blockid; ?>'
                });
	});
</script>