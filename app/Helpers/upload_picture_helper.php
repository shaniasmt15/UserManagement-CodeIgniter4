<?php

 function uploadAndRenameFile(\CodeIgniter\HTTP\Files\UploadedFile $uploadedFile, ?string $newFileName = null)
    {
        if (!$uploadedFile->isValid()) {
        return null;
    }

    $newFileName = $newFileName
        ? ((($point = strrpos($newFileName, ".")) === false) ? $newFileName : substr($newFileName, 0, $point)) .".". $uploadedFile->guessExtension()
        : $uploadedFile->getRandomName();

    $targetPath = ROOTPATH . 'public/uploads/karyawan' . DIRECTORY_SEPARATOR . $newFileName;

    \Config\Services::image()
        ->withFile($uploadedFile->getRealPath() ?: $uploadedFile->__toString())
        ->save($targetPath);

    return $newFileName;
    }

?>