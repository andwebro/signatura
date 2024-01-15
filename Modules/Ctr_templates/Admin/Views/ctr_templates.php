<?php $this->extend('back/master'); ?>

<?php $this->section('top_area'); ?>
<?php echo admin_module_top('Ctr_templates Manager 0.1');?>
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
      
      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">

            <div class="flex-none w-full max-w-full px-3">


            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

                    

              <div class="flow-root p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <div class="float-left">
                    <?php echo admin_module_title('Ctr_templates Manager');?>
                </div>
                <div class="float-right">
                    <?php echo header_menu_modal(lang('Ctr_templates.add_new'), "", "/admin/ctr_templates/form");?>
                    <?php echo header_menu_help("Ctr_templates Manager", "ctr_templates", 1);?>
                </div>

              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-2 overflow-x-auto">

                    <div class="searchbox">

<form class="flex items-center js_module_search" id="js_module_search_box" data-target="and_ctr_templates" data-action="/admin/ctr_templates/search">
    <label for="js_module_search_0" class="sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="js_module_search_0" class="bg-gray-50 border border-gray-200 text-gray-900 text-sm rounded-lg block w-full pl-10" placeholder="Search" value="<?php if(isset($search) && isset($search["keyword"]) ) echo $search["keyword"];?>" name="keyword">
    </div>
</form>

                    </div>

                    <div id="and_ctr_templates" class="js_module_list" data-action="/admin/ctr_templates/list"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- end cards -->


<?php $this->endSection(); ?>