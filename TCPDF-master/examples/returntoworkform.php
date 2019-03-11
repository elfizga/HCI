<?php
ob_start();
include "dbconfig.php";

$name = $_POST['fullname_ar'];
$college = $_POST['facultyname'];
$dept = $_POST['departmentname'];
$nid = $_POST['national_id'];
$degree = $_POST['qualificationname'];
$date = $_POST['returntoworkdate'];
$minor = $_POST['specialization'];
$type = $_POST['returntoworktype'];
$major = $_POST['generalmajor'];
$posit = $_POST['academicrankname'];
$printtime = date('Y-m-d H:i:s');

/*
$query ="INSERT INTO `printedreturnforms`(`faculty`, `department`, `fullname_ar`, `qualification`, 
                                 `national_id`, `generalmajor`, `specialization`, `academicrank`, 
								 `returntoworkdate`, `returntoworktype` ) VALUES ( :faculty, :department, :fullname_ar, :qualification, 
                                 :national_id, :generalmajor, :specialization, :academicrank, 
								 :returntoworkdate, :returntoworktype ) ";


 		$stmt = $DB_con->prepare($query);
        $stmt->bindParam(':faculty', $college);
        $stmt->bindParam(':department', $dept);
        $stmt->bindParam(':fullname_ar', $name);
        $stmt->bindParam(':qualification', $degree);
        $stmt->bindParam(':national_id', $nid);
        $stmt->bindParam(':generalmajor', $major);
        $stmt->bindParam(':specialization', $minor);
        $stmt->bindParam(':academicrank', $posit);
        $stmt->bindParam(':returntoworkdate', $date);
        $stmt->bindParam(':returntoworktype', $type);

       $stmt->execute();

*/

	

// Include the main TCPDF library (search for installation path).
require_once('../../assets/tcpdflib/tcpdf.php');
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'uotlogo.png';
		$this->Image($image_file, 118, 7, 30, 26, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('xbsols', '', 8);

	//	$this->SetFont('arialbd', 'I', 10);
		// Page number
		$this->Cell(15, 15, ' صفحة '.$this->getAliasNumPage().' من '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', true);

$pdf->SetFont('xbsols', '', 12);
//$pdf->SetHeaderData(K_PATH_IMAGES.'uotlogo.png', PDF_HEADER_LOGO_WIDTH, 'Ministry of higher education & scientific research<br />University of Tripoli<br />Faculty of Information Technology', '','<span style="font-size:11;">وزارة التعليم العالي والبحث العلمي  <br /><br /> جــامـعـة طـرابـلـس <br /><br /> كـلـية تقـنية المعلــومات</span>');
  //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
//$pdf->SetPrintHeader(true);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('جامعة طرابلس');
$pdf->SetTitle('نموذج مباشرة عمل عضو هيئة تدريس');

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

  	$DatatoWrite = "الإســم : ". $name . "\n" .
                           " الرقم : " . $nid . "\n" .
                           " تاريخ المباشرة : " . $date . "\n" .
                           "تاريخ الطباعة : ". $printtime  . "\n";

    $barcode = $DatatoWrite;
	$barcodeStyle = array(
		'border' => 2,
		'vpadding' => 'auto',
		'hpadding' => 'auto',
		'fgcolor' => array(0,0,0),
		'bgcolor' => false, //array(255,255,255)
		'module_width' => 1, // width of a single module in points
		'module_height' => 1 // height of a single module in points
	);
         


// set font

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(15, 30, 20);
$pdf->SetFooterMargin(-15);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// add a page
$pdf->AddPage();

// Set RTL direction
$pdf->setRTL(true);

// print newline
$pdf->Ln();
$text = 'نموذج مباشرة عمل عضو هيئة تدريس';
$pdf->Cell(0, 12, 'جـامـعة طرابلس',0,1,'C');
$pdf->Cell(0, 8, 'الإدارة العامة لشؤون أعضاء هيئة التدريس',0,1,'C');
$pdf->Cell(0, 8, $text,0,1,'C');
$pdf->SetFont('aealarabiya', '', 12);

$pdf->Cell(0, 8, 'العام الجامعي 2018-2017 ',0,1,'C');
$pdf->ln(2);

//Faria$pdf->SetFont('arialbd', '', 11);

$tbl = <<<EOD
  <table border="1" cellpadding="10" cellspacing="2" align ="right" width = "90%">
   <tr>
      <td>الاسم ثلاثي: $name</td>
      <td>الرقم الوطني: $nid</td>
    </tr>
    <tr>
      <td>الكلية: $college</td>
      <td>القسم: $dept</td>
    </tr>
    <tr>
      <td>المؤهل العلمي: $degree</td>
      <td>الدرجة الاكاديمية: $posit</td>
    </tr>
    <tr><td>التخصص العام: $major</td>
      <td>التخصص الدقيق: $minor</td>
    </tr>
    <tr>
      <td>نوع المباشرة: $type</td>
      <td>تاريخ المباشرة: $date</td>
	  </tr>
  </table>
EOD;


$pdf->WriteHTML($tbl, true, false, false, false);


$pdf->SetFont('xbsols', '', 12);

$tbl = <<<EOD
  <table border="0" cellpadding="5" cellspacing="1" align ="right" width = "90%">
  	<tr><td colspan="4">- يعتبر هذا إقرار مني بعدم ازدواجية العمل لدى الدولة الليبية وإذا تبين غير ذلك أعتبر مخالفا للعقد واللوائح المعمول بها في الجامعات الليبية وأتحمل مسئولية ذلك.</td></tr>
  	<tr><td colspan="3" height="30">توقيع عضو هيئة التدريس:..........................................</td></tr>
  	<tr><td colspan="3" height="35">التاريخ: ..............................................................</td></tr>
  	<tr>
	  	<td colspan="2" align="center">توقيع رئيس القسم</td>
		<td colspan="2" align="center">يعتمد عميد الكلية </td>
	</tr>
  	<tr>
  		<td colspan="2" align="center" height="50"> ..................................................</td>
  		<td colspan="2" align="center">..................................................</td>
	</tr>
</table>
<hr>
EOD;
$pdf->WriteHTML($tbl, true, false, false, false);

             
$txt1='خاص بالإدارة العامة لشؤون أعضاء هيئة التدريس: ...................................................................';
$txt2='.............................................................................................................................';
$pdf->Cell(0, 8, $txt1,0,1,'r');
$pdf->Cell(0, 8, $txt2,0,1,'r');
$pdf->Cell(0, 8, $txt2,0,1,'r');
$pdf->Cell(0, 8, $txt2,0,1,'r');

$pdf->SetFont('xbsols', '', 10);

$pdf->Cell(0, 6, '',0,1,'r');
$pdf->Cell(0, 6, 'يعد من ثلاثة نسخ:',0,1,'r');
$pdf->Cell(0, 6, '   - إدارة ش . أ . هـ . ت',0,1,'r');
$pdf->Cell(0, 6, '   - الادارة المالية',0,1,'r');
$pdf->Cell(0, 6, '   -  القسم المختص',0,1,'r');


$pdf->write2DBarcode($barcode, 'QRCODE,H', 125, 232, 40, 40, $barcodeStyle, 'N');


//Close and output PDF document
ob_end_clean();
$pdf->Output($nid.'.pdf', 'd');

//============================================================+
// END OF FILE
//============================================================+
?>