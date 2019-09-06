# Usage
Use for Laravel to add signature img into pdf file

# Install
    composer require virtualorz/pdfSignature
    
# Config
edit config/app.php
    
    'providers' => [
        ...
        Virtualorz\PdfSignature\PdfSignatureServiceProvider::class
    ]
    
    'aliases' => [
        ...
        'PdfSignature' => Virtualorz\PdfSignature\Facades\PdfSignature::class,
    ]
    
# Method

###### sign($pdf_path, $signature_path, $signature_location, $download_file_name)
    $pdf_path(string) : real path to the pdf file who want to sign,
    $signature_path(string) : real path to the signature image file,
    $signature_location(Array) : sign location info array like belo :
                                [
                                    [
                                        'page' => 1,
                                        'x' => 15,
                                        'y' => 210
                                    ],
                                ]
    you can whitch page and x,y location you want to sign,
    $download_file_name(string) : the sign result pdf download name
   
# 中文版本文件
[PdfSignature : PDF加入簽名檔超簡單](http://www.alvinchen.club/2019/09/06/%e4%bd%9c%e5%93%81laravel-package-pdfsignature-pdf%e5%8a%a0%e5%85%a5%e7%b0%bd%e5%90%8d%e6%aa%94%e8%b6%85%e7%b0%a1%e5%96%ae/)
