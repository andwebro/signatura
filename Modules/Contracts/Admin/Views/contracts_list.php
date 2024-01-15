<table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
  <thead class="align-bottom">
    <tr>
      <th width="50" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
          <input type="checkbox" name="">
      </th>
      <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Name</th>
      <th width="200" class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
      <th width="200" class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($rows as $key => $c):?>                        
  <tr>
    <td class="p-6 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
        <input type="checkbox" name="">
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
      <?php echo and_edit_link("/admin/contracts/form/".$c->id, $c->name);?>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
      <?php echo and_toggle_btn("/admin/contracts/toggle/status/".$c->id, $c->status); ?>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
      <?php echo and_edit_btn("/admin/contracts/form/".$c->id, "Edit");?>
      <?php echo and_delete_btn("/admin/contracts/delete/".$c->id, "Delete", "and_contracts");?>
    </td>
  </tr>
<?php endforeach;?>
  </tbody>
</table>
<?php echo admin_pagination($pagination);?>