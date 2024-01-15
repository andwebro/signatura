<?php 
$user = auth()->user();
if($user){
?>
<div class="sticky top-0 bg-gray-800 text-white p-4">
    <div class="container mx-auto grid grid-cols-3 items-center">
        <div>
            <span class="text-lg font-bold">Hello, <?php echo $user->username;?></span>
        </div>
        <div class="text-center">
            <?php if ($user->inGroup('superadmin', 'admin')) {?>
            <a href="/<?php echo ANDWEBCI_ADMIN;?>/" class="text-white" target="_blank">Access admin dashboard</a>
            <?php } ?>
        </div>
        <div class="text-right">
            <a href="/logout/" class="text-white">
                Logout <svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </a>
        </div>
    </div>
</div>
<?php } ?>