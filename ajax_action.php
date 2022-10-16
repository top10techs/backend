$record = new Records();
if(!empty($_POST['action']) && $_POST['action'] == 'listRecords') {
	$record->listRecords();
}
