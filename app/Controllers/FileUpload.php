<?php 
namespace App\Controllers;
// use App\Models\FormModel;
use CodeIgniter\Controller;
class FileUpload extends Controller
{
    public function index() 
    {
        return view('home');
    }
    function upload() { 
        helper(['form', 'url','filesystem']);



 
            $xml = $this->request->getFile('file');
           /* $img->move(WRITEPATH . 'uploads');
    
            $data = [
               'name' =>  $img->getName(),
               'type'  => $img->getClientMimeType()
            ];
    
            $save = $db->insert($data);
            print_r('File has successfully uploaded');     */


         //  echo $_FILES['file']['tmp_name'];
            $string = file_get_contents($_FILES['file']['tmp_name']);

         
            // clean cfdi
            $xml = \PhpCfdi\CfdiCleaner\Cleaner::staticClean($string);

            
         
            // create the main node structure
            $comprobante = \CfdiUtils\Nodes\XmlNodeUtils::nodeFromXmlString($xml);

            // create the CfdiData object, it contains all the required information
            $cfdiData = (new \PhpCfdi\CfdiToPdf\CfdiDataBuilder())
                ->build($comprobante);

            // create the converter
            $converter = new \PhpCfdi\CfdiToPdf\Converter(
                new \PhpCfdi\CfdiToPdf\Builders\Html2PdfBuilder()
            );

            // create the invoice as output.pdf
            $converter->createPdfAs($cfdiData,  'output.pdf');
            
                $filename = WRITEPATH . 'uploads\output.pdf';
                
                echo '
                <script type="text/javascript">
                    window.open("/output.pdf" , "_blank");
                  </script>';
                
             
               return view('welcome_message');
                  
                
        }
     
    
}