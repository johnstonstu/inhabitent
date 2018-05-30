<!-- This file is used to markup the public-facing widget. -->


<?php if(strlen( trim($monday_friday)) >0 ): ?>

<p>
    <span class="day-of-week">
        Monday-Friday: 
    </span> <?php echo $monday_friday ?>
    <span class="day-of-week">
        Saturday: 
    </span> <?php echo $saturday ?> <br>
    <span class="day-of-week">
        Sunday: 
    </span> <?php echo $sunday ?>
</p>

<?php endif; ?>
