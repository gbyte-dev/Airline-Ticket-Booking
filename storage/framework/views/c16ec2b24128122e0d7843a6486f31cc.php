<?php
    $favicon = setting_item('site_favicon');
?>
<?php if($favicon): ?>
    <?php
        $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
    ?>
    <?php if(!empty($file)): ?>
        <!--<link rel="icon" type="<?php echo e($file['file_type']); ?>" href="<?php echo e(asset('uploads/'.$file['file_path'])); ?>" />-->
	<link rel="icon" type="<?php echo e($file['file_type']); ?>" href="<?php echo e(asset('uploads/0000/7/2024/09/03/bkp2-tg-logo-111.png')); ?>" />
    <?php else: ?>
        :
        <link rel="icon" type="image/png" href="<?php echo e(url('images/favicon.png')); ?>" />
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Layout/parts/favicon.blade.php ENDPATH**/ ?>