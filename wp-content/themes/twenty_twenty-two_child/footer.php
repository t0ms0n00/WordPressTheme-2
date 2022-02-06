<?php
    wp_footer();
?>
</body>
<script>
    jQuery("#loader").on("click", ()=>{
        jQuery("#loader").html("Getting list..");
        let post_id = '<?php echo get_the_ID(); ?>';
        jQuery.ajax({
            type: 'POST',
            url: '<?php echo admin_url("admin-ajax.php"); ?>',
            data: {
                "post_id": post_id,
                "action": 'loader',
            },
            success: ((result) => {
                jQuery("#loader").html("List downloaded succesfully");
                jQuery("#list").html(result);
            }),
        });
    });
</script>
</html>