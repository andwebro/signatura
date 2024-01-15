<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mail Signatura</title>
</head>
<body>
	<style>
    html{
        background:#f9f9ff;
    }
	p {
		margin: 0;
	}
</style>
<table style="margin:0 auto; background:#fff;">
	<tbody>
        <tr>
            <td align="center">
                Logo space
            </td>
        </tr>
		<tr>
			<td align="center">
                <?php echo $data->signer_first_name;?> <?php echo $data->signer_last_name;?>
            </td>
		</tr>
		<tr style="padding-top: 20px;display: block;" align="center">
			<td>My Company has sent you a <?php echo $data->title;?> to review and sign.</td>
		</tr>
		<tr style="padding-top:20px;display:block;">
			<td align="center">
				<a href="<?php echo $data->sign_url;?>" target="_blank" style="font-size:16px;font-family:Helvetica,Arial,sans-serif;color:#ffffff;text-decoration:none;color:#ffffff;text-decoration:none;border-radius:3px;padding:15px 25px;border:1px solid #386bd6;display:inline-block">View and sign</a>
			</td>
		</tr>
		<tr style="display:block;padding-top:20px;" align="center">
			<td>
            The signatures are collected and stored by <?php echo base_url();?>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>