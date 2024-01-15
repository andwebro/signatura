<?php $this->extend('signature/master'); ?>

<?php $this->section('content') ?>
        
        <?php echo $this->include('signature/inc/account_menu'); ?>

        <!-- Content -->
        <div class="w-full p-8 sm:w-3/4">
            <div class="w-full">
                <h1 class="text-2xl float-none font-bold text-center mb-4 sm:text-left sm:float-left">
                    My contract templates
                </h1>
                <a class="group mx-auto block bg-blue-600 text-sm py-3 text-white text-base float-none sm:float-right sm:px-24" href="/templates/new">
                    New template
                </a>
            </div>
            <table class="w-full mt-8 sm:mt-32">
                <?php foreach ($templates as $t) { ?>
					<tr>
                        <td class="text-slate-500">
                            <a href="/templates/<?php echo $t->id;?>"><?php echo $t->name;?></a>
                        </td>
                        <td class="text-slate-300">
                            <?php echo $t->unique_key;?>
                        </td>
                        <td class="text-slate-500">
                            <?php echo $t->created_at;?>
                        </td>
                    </tr>
				<?php } ?>
            </table>
        </div>
    </div>    
</div>
<?php $this->endSection() ?>