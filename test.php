<?php

//Visist http://http://esms.vn/SMSApi/ApiSendSMSNormal for more information about API
//� 2013 esms.vn
//Website: http://esms.vn/
//Hotline: 0902.435.340

//Huong dan chi tiet cach su dung API: http://esms.vn/blog/3-buoc-de-co-the-gui-tin-nhan-tu-website-ung-dung-cua-ban-bang-sms-api-cua-esmsvn
//De lay Key cac ban dang nhap eSMS.vn v� vao quan Quan li API
$APIKey="32393487521959697D866A359097B1";
$SecretKey="7EFC65FD9ACF9176BBEE7273E1F124";
$YourPhone="0906218910";
$Content="CITYPOST thong bao, quy khach hang co thu - hang sap duoc giao. Vui long nghe dien khi buu ta goi lay thu, hang, xin tran trong cam on. lien he 19002630 neu can tro giup";

$SendContent=urlencode($Content);
$data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=2&brandname=QCAO_ONLINE";
//De dang ky brandname rieng vui long lien he hotline 0902435340 hoac nhan vien kinh Doanh cua ban
$curl = curl_init($data);
curl_setopt($curl, CURLOPT_FAILONERROR, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);

$obj = json_decode($result,true);
if($obj['CodeResult']==100)
{
    print "<br>";
    print "CodeResult:".$obj['CodeResult'];
    print "<br>";
    print "CountRegenerate:".$obj['CountRegenerate'];
    print "<br>";
    print "SMSID:".$obj['SMSID'];
    print "<br>";
}
else
{
    print "ErrorMessage:".$obj['ErrorMessage'];
}



?>