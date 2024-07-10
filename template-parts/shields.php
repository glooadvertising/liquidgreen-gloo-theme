<?php 
 $shields = [
    'eco-friendly',
    'budget-friendly',
    'rapid results',
    'weed prevention',
    'erosion control'
 ]
?>

<div class="shields-container flex flex-wrap place-content-evenly items-center gap-6 md:gap-8 w-full md:w-[80%]">
    <?php foreach ($shields as $shield) { ?>
    
        <div class="shield flex flex-col items-center gap-2 w-24">
            <i class='bx bx-check-shield'></i>
            <p class="uppercase text-center text-sm font-semibold"><?php echo $shield; ?></p>
        </div>
    
    <?php }?>
</div>