<?php $this->extend('signature/master'); ?>
<?php $this->section('content'); ?>
<?php echo $this->include('signature/inc/account_menu'); ?>

<div class="w-full p-8 sm:w-3/4">
	<div class="w-full flex items-center flex-col sm:flex-row">
		<h1 class="text-2xl w-[40%] float-left text-left font-bold mb-4">
			Contracts
		</h1>
		<div class="flex items-center justify-between p-4 flex-col sm:flex-row">
		  <div class="relative sm:w-[35%] w-full">
			<select class="block border-0 cursor-pointer appearance-none w-full text-slate-500 py-2 px-4 pr-8 rounded leading-tight focus:outline-none">
				<option>Show all</option>
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
			<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
			</div>
		  </div>
		  <div class="flex-grow mx-4 w-full sm:w-initial">
			<div class="relative border-b border-slate-500">
			  <input type="text" class="w-full text-slate-500 border-0 focus:ring focus:ring-indigo-200 rounded-lg py-2 px-4 placeholder-gray-400" placeholder="Search...">
			  <div class="absolute inset-y-0 right-2 pl-3 flex items-center">
				<svg class="h-5 w-5 fill-black" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
			height="30" viewBox="0 0 30 30">
				  <path d="M 13 3 C 7.4889971 3 3 7.4889971 3 13 C 3 18.511003 7.4889971  23 13 23 C 15.396508 23 17.597385 22.148986 19.322266 20.736328 L 25.292969 26.707031 A 1.0001 1.0001 0 1 0 26.707031 25.292969 L 20.736328 19.322266 C 22.148986 17.597385 23 15.396508 23 13 C 23 7.4889971 18.511003 3 13 3 z M 13 5 C 17.430123 5 21 8.5698774 21 13 C 21 17.430123 17.430123 21 13 21 C 8.5698774 21 5 17.430123 5 13 C 5 8.5698774 8.5698774 5 13 5 z">
				  </path>
				</svg>
			  </div>
			</div>
		  </div>
			<a href="#" class="bg-white sm:justify-initial justify-center flex items-center text-slate-500 block sm:w-[40%] w-full font-semibold py-2 sm:px-4 rounded-lg text-base">
			  Export List
			  <img class="sm:h-[15%] sm:w-[15%] w-[8%] h-[8%] ml-4" src="/assets/sign/images/export-icon.png" alt="Export Icon">
			</a>
		</div>
	</div>

	<table class="mt-4 sm:mt-24">
		<?php foreach($contracts as $c):?>
		<?php
		$signed_date = "-"; 
		$signed = false;
		if($c->signed_at){
			$signed = true;
			$dateTime = new DateTime($c->signed_at);
			$signed_date = $dateTime->format('d')." ".$dateTime->format('M');
		}
	
		?>
		<tr class="pb-12 flex items-center flex-col sm:flex-row">
			<td class="lg:w-[7%] sm:w-[15%] w-[25%] sm:border-r-2 sm:border-orange-500 pb-4 sm:pb-0">
				<?php if(!$signed){?>
					<img class="h-full w-full sm:pr-4" src="/assets/sign/images/pending-icon.webp">
				<?php }else{?>
					<img class="h-full w-full sm:pr-4" src="/assets/sign/images/checked-icon.jpg">
				<?php } ?>
			</td>
			<td class="text-center sm:text-left pl-0 sm:pl-4 sm:w-[45%] w-[70%] pb-4 sm:pb-0">
			<?php if(!$signed){?>
				<p class="text-sm text-orange-500">pending</p>
			<?php }else{?>
				<p class="text-sm text-green-500">signed</p>
			<?php } ?>
				<a href="/contracts/<?php echo $c->id;?>"><p class="text-base text-slate-500"><?php echo $c->title;?></p></a>
			</td>
			<td class="sm:w-[24%] w-[70%] flex flex-col items-center text-slate-500 sm:flex-row pb-4 sm:pb-0">
				<?php if($signed==0){?>
					<img class="lg:w-[15%] sm:w-[25%] w-[30%] sm:mr-4" src="/assets/sign/images/pending-icon.webp" alt="Pending">
				<?php }else{?>
					<img class="lg:w-[15%] sm:w-[25%] w-[30%] sm:mr-4" src="/assets/sign/images/checked-icon.jpg" alt="Checked"> 
				<?php } ?>
				<a href="/contracts/<?php echo $c->id;?>"><?php echo $c->signer_first_name;?> <?php echo $c->signer_last_name;?></a>
			</td>
			<td class="sm:w-[24%] w-[70%] text-slate-500 pb-4 sm:pb-0">
				<a href="#" class="bg-white flex flex-col items-center text-slate-500 block w-[40%] font-semibold rounded-lg mx-auto sm:flex-row">
					<img class="lg:h-[20%] h-full lg:w-[25%] sm:w-[35%] w-[70%] mr-2" src="/assets/sign/images/download-icon.png" alt="Download Icon">
					<p>
						<?php echo $signed_date;?>
					</p>
				</a>
			</td>
		</tr>
		<?php endforeach;?>
	</table>
</div>
</div>    
</div>
<?php $this->endSection(); ?>