<?php

class DocumentUploader
{
    private $allowedExtensions = ['jpeg', 'jpg', 'png', 'webp', 'pdf', 'exel'];
    private $maxSize           = 10 * 1024 * 1024; // 10MB (10 megabytes)

    public function uploadDocument($file, $path = './docs/'): string
    {
        $documentName = $file['name'];
        $extension    = pathinfo($documentName, PATHINFO_EXTENSION);
        $fileSize     = $file['size'];

        // Checking valid file type
        if (!in_array($extension, $this->allowedExtensions)) {
            throw new Exception('Invalid file type!');
        }

        // Checking file size less than 2 mb
        if ($fileSize > $this->maxSize) {
            throw new Exception('Maximum file size allowed 10 mb!');
        }

        $randomDocumentName = uniqid() . time() . '.' . $extension;

        if (!move_uploaded_file($file['tmp_name'], $path . $randomDocumentName)) {
            throw new Exception('Failed to upload document!');
        }

        return $randomDocumentName;
    }
}
