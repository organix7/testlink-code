<?
/* TestLink Open Source Project - http://testlink.sourceforge.net/ */
/* $Id: searchForm.php,v 1.4 2005/10/10 19:18:25 schlundus Exp $ */
// Purpose:  This page is the left frame of the search pages. It builds the
//	    form for adding criteria for search.
////////////////////////////////////////////////////////////////////////////////
require_once("../../config.inc.php");
require_once("../functions/common.php");
require_once("../keywords/keywords.inc.php");
require_once("../../lib/functions/lang_api.php");
testlinkInitPage();

// 20050905 - fm
$prodID = isset($_SESSION['productID']) ? $_SESSION['productID'] : 0;

$smarty = new TLSmarty();
$smarty->assign('arrKeys', selectKeywords($prodID));
$smarty->display('tcSearchForm.tpl');
?>

