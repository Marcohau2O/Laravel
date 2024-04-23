<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Student;

class PDFController extends Controller
{
    public function downloadPDF($id)
    {


        $imagen_student = public_path ("img/foto.jpeg");
        $student = Student::findOrFail($id); // Obtener el estudiante por ID
        $data = [
            "imagen_student" => $imagen_student,
            "student" => $student
        ];
        // Generar el PDF utilizando dompdf
        $pdf = PDF::loadView('pdf.students', $data);

        // Devolver el PDF para descarga
        return $pdf->download('student_' . $student->id . '.pdf');
    }
}
