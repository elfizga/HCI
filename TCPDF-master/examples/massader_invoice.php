<?php
include "connect.php" ;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $theID=$_POST["theID"];
    $price=$_POST["price"];
    $title=$_POST["title"];
    $company_name=$_POST["company_name"];
    $dep_name=$_POST["dep_name"];
    $email=$_POST["EMAIL"];
    $trainees=$_POST["trainees"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
      
    global $con;
       $query = $con->prepare("INSERT INTO enrollment
       SET 
       companyName = ? ,
       depName =? ,
       email = ? ,
       phone =? ,
       address =?,  
       trainees = ?;");

   $query->execute(
        array( $company_name , $dep_name , $email , $phone , $address , $trainees ));
   }
// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Lazord El-Fizga');
$pdf->SetTitle('massader invoice');
$pdf->SetSubject('massader invoice');
$pdf->SetKeywords('TCPDF, PDF, example, guide');

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
$pdf->SetFont('dejavusans', '', 15, '', true);
$pdf->AddPage();
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
// Set some content to print
global $price ;
$html = ' 
<span style="text-align:center;">
<img src="newlogo.png" style="width:180px ; height:60px;">
</span> 
<div style="font-size: 15px;
	 font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;color: #555;">
	 <br>
        <table style="width: 100%;">
            <tr>
                <td>
                    <table style="width: 100%;">
                        <tr>
                            <td style="text-align: center; text-size:30px;">
                                Massader for technical consultancy and Training Services <br>
                                Wali Alahed Street / Tripoli, Libya <br>
                                info@massader.org <br> 
                            </td>
                        </tr>
                    </table><br>
                </td>
            </tr>
            <tr style="width: 100%;">
                <td style="width: 100%;" >
                    <table style="width: 100%;">
						<tr>
							<td>
								Course Invoice <br>
								Created: January 1, 2015<br>
								Invoice Code : #116 <br>
							</td>
                            <td style="text-align: right ;">
                                Company NAME <br> 
                                DEPARTMENT NAME <br>
                                COMPANY EMAIL
                            </td>
                            
						</tr>
						<br>
                        <tr class="heading" >
                            <td style="background-color: #eee;
                            font-weight: bold;">
                                Course Name
                            </td>
                            <td style="background-color: #eee;
                            font-weight: bold; text-align:right;">
                                Payment Method
                            </td>
						</tr>
                        <tr>
                            <td>
                                The Course Name
                            </td>
                            <td style="text-align:right;">
                                OFFLINE
                            </td>
						</tr>
						<br>
                        <tr>
                            <td style="background-color: #eee;
                            font-weight: bold;">
                                COURSE INFO
                            </td>
                            <td style="background-color: #eee;
                            font-weight: bold;text-align:right;">
                                PRICE
                            </td>
                        </tr>
                        <tr>
                            <td>
                                COURSE PRICE
                            </td>
                            <td style="text-align:right;">
                                $300.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                NUMBER OF TRAINEES
                            </td>
                            <td style="text-align:right;">
								44
							</td>
						</tr>
						
						<tr style="text-align:right;">
						
							<td></td>
							<td style=" font-weight: bold;">
								<br>
							   Total: $344.00
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>   
        </table>
    </div>' ;

// Print text using writeHTMLCell() 

$pdf->writeHTML($html, true , 0, true, 0);
// Close and output PDF document
$pdf->Output('massader.pdf', 'I'); 

