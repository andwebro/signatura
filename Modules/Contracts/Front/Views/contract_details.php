<?php $this->extend('signature/master'); ?>
<?php $this->section('content'); ?>
<?php echo $this->include('signature/inc/account_menu'); ?>
<?php
    $signed_date = "-"; 
    $signed = false;
    if($row->signed_at){
        $signed = true;
        $dateTime = new DateTime($row->signed_at);
        $signed_date = $dateTime->format('d')." ".$dateTime->format('M');
    } 
?>

<div class="w-full p-8 sm:w-3/4">
    <div class="flex flex-col lg:flex-row">
        <div class="flex mb-8 sm:mb-0 flex-row w-[13%] sm:w-[9%] h-2/4 mt-[-2vw]">
            <?php if(!$signed){ ?>
                <img class="h-full w-full" src="/assets/sign/images/pending-icon.webp">
            <?php }else{ ?>
                <img class="h-full w-full" src="/assets/sign/images/checked-icon.jpg">
            <?php } ?>
        </div>
        <div class="flex items-center w-full justify-center">
            <div class="flex-col">
                <h1 class="text-2xl text-slate-700 text-center font-semibold mb-4">
                    <?php echo $row->title;?>
                </h1>
                <div class="flex-col md:flex-row items-center flex justify-center ml-0 md:ml-24">
                    <a class="text-blue-600 pb-4 md:pb-0 whitespace-nowrap  font-semibold w-2/4 flex flex-row md:justify-end justify-center items-center" href="#">
                        Delete test contract 
                        <img class="h-auto ml-2 md:ml-4 w-[15%] md:w-[8%]" src="/assets/sign/images/download-icon.png" alt="Download Icon">
                    </a>
                    <a class="text-blue-600 pb-4 md:pb-0 font-semibold w-2/4 md:justify-start justify-center ml-6 flex flex-row items-center" href="#">
                        Clone
                        <img class="h-auto ml-2 md:ml-4 w-[15%] md:w-[8%]" src="/assets/sign/images/download-icon.png" alt="Download Icon">
                    </a>
                    <a class="text-blue-600 sm:hidden font-semibold w-2/4 md:justify-start justify-center ml-6 flex flex-row items-center" href="#">
                        Download
                        <img class="h-auto ml-2 md:ml-4 w-[15%] md:w-[8%]" src="/assets/sign/images/download-icon.png" alt="Download Icon">
                    </a>
                </div>
                <div class="flex flex-col mt-6 justify-center items-center">
                    <p class="flex items-center justify-center">
                        Signed:
                        <?php if(!$signed){?>
                            <img class="w-[11%] sm:w-1/12 pl-2" src="/assets/sign/images/pending-icon.webp" width="30">
                        <?php }else{?>
                            <img class="w-[11%] sm:w-1/12 pl-2" src="/assets/sign/images/checked-icon.jpg" width="50">
                        <?php } ?>        
                    </p>
                </div>
            </div>
        </div>
        <div class="flex hidden sm:block flex-col mt-6 lg:mt-0 w-full lg:w-1/4 items-end">
            <img class="h-auto w-1/12 lg:w-3/12" src="/assets/sign/images/download-icon.png" alt="Download Icon">
            <a class="text-blue-600 font-semibold" href="/contracts/get_pdf/<?php echo $row->id;?>">
                Download
            </a>
        </div>
    </div>
    <div class="text-left mt-24">
        <div class="border-b border-slate-400">
            <p class="text-xl items-center text-slate-600 mb-4 flex flex-row">
                Sorin Porumboiu
                <?php if(!$signed){?>
                    <img class="w-[12%] md:w-[6%] lg:w-[5%] pl-2" src="/assets/sign/images/pending-icon.webp">
                <?php }else{?>
                    <img class="w-[12%] md:w-[6%] lg:w-[5%] pl-2" src="/assets/sign/images/checked-icon.jpg">
                <?php } ?> 
            </p>
        </div>
        <div class="flex mt-6 flex-col lg:flex-row">
            <div class="flex flex-col w-full lg:w-2/4">
                <p class="text-slate-600">
                    <strong class="text-slate-600">Name:</strong>
                    <?php echo $row->signer_first_name;?> <?php echo $row->signer_last_name;?>
                </p>
                <p class="text-slate-600">
                    <strong class="text-slate-600">Email:</strong>
                    <?php echo $row->signer_email;?>
                </p>
                <p class="text-slate-600">
                    <strong class="text-slate-600">Company:</strong>
                    ACME LTD
                </p>
                <div class="w-3/4 sm:w-2/4 mt-6 border border-blue-700 rounded">
                    <a class="flex p-2 font-semibold text-sm items-center justify-center text-center flex-row text-blue-700" href="#">
                        Re-send final PDF
                        <img class="h-auto ml-4 w-[11%]" src="/assets/sign/images/download-icon.png" alt="Download Icon">
                    </a>
                </div>
            </div>
            <div class="flex flex-col w-full lg:w-2/4 mt-6 lg:mt-0">
                <p class="text-slate-600">
                    Contract delivery via - Email
                </p>
                <p class="text-slate-600">
                    Document create date - <?php echo $row->created_at;?>
                </p>
                <p class="text-slate-600">
                    Signed document has been sent - <?php echo $row->signed_at;?>
                </p>
                <p class="text-slate-600">
                    Document withdrawn date - <?php echo $row->withdrawn_at;?>
                </p>
                <p class="text-slate-600 flex flex-col sm:flex-row items-start sm:items-center">
                    Signer fields -  
                    <a class="text-blue-600 pl- sm:pl-2 items-center font-semibold flex flex-row w-3/4 sm:w-2/4" href="#">
                         View Signer fields
                         <img class="h-auto ml-2 w-[11%]" src="/assets/sign/images/download-icon.png" alt="Download Icon">
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="text-left mt-24">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-slate-500 text-xl pb-8">
                        Audit trail
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($audit as $a){ 
                    $dateTime = new DateTime($a->event_date);
                    $e_date = $dateTime->format('d')." ".$dateTime->format('M'). " ".$dateTime->format('Y').", ".$dateTime->format('H:i:s');
                ?>
                <tr class="pb-2 text-center flex flex-col border-b border-slate-400 lg:border-0 lg:flex-row lg:text-left">
                    <td class="text-slate-500 pr-6 w-full lg:w-[35%] block"><?php echo $e_date;?></td>
                    <td class="text-slate-500 pr-6 w-full lg:w-[40%] block"><?php echo $a->event_name;?></td>
                    <td class="text-slate-500 pr-6 w-full lg:w-[25%] block lg:text-right"><?php echo $a->author_name;?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php $this->endSection(); ?>