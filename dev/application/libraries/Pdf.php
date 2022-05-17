<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter DomPDF Library
 *
 * Generate PDF's from HTML in CodeIgniter
 *
 * @packge        CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Ardianta Pargo
 * @license        MIT License
 * @link        https://github.com/ardianta/codeigniter-dompdf
 */
// require_once('dompdf/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
class Pdf extends Dompdf{
    /**
     * PDF filename
     * @var String
     */
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        // include_once APPPATH . '/vendor/dompdf/dompdf.php';
        require 'vendor/autoload.php';
    }
    /**
     * Load a CodeIgniter view into domPDF
     *
     * @access    public
     * @param    string    $view The view to load
     * @param    array    $data The view data
     * @return    void
     */
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'logo.jpg';
        $this->Image($image_file, 10, 5, 40, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->SetFont('times', 'B', 20);
        $this->Write(15, 'SMP N 1 CAWAS', '', 0, 'C', true, 0, false, false, 0);

        $this->SetFont('times', 'I', 12);
        $this->Write(2, 'Dk. Barepan, Kel. Barepan, Kec. Cawas, Kab. Klaten, 57463 ', '', 0, 'C', true, 0, false, false, 0);
        $this->Write(0, 'Telp. 0221000 | email. smp1cawas@gmail.com', '', 0, 'C', true, 0, false, false, 0);
        
        $this->writeHTML('<hr>');
        $this->SetHeaderMargin(PDF_MARGIN_HEADER);
    }

    function createPDF($html, $filename, $paper, $orientation)
    {
        // $dompdf = new Dompdf\Dompdf();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper($paper, $orientation);
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream($filename, array('Attachment' => 0));
    }

}