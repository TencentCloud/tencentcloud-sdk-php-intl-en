<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document Information
 *
 * @method string getFileType() Obtain Supported file types: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS.
XLSX,CSV,PNG,JPG,JPEG,BMP,GIF,WEBP,HEIC,EPS,ICNS,
IM,PCX,PPM,TIFF,XBM,HEIF,JP2

Supported file size for document parsing:
-PDF, DOC, DOCX, PPT, PPTX support 100M.
-MD, TXT, XLS, XLSX, CSV support 10M.
-Other supports 20M

Supported file size for text slicing:
-Maximum PDF size: 300 MB
-D0CX, D0C, PPT, PPTX maximum 200M
-Maximum 10M for TXT, MD
-Another maximum of 20M
 * @method void setFileType(string $FileType) Set Supported file types: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS.
XLSX,CSV,PNG,JPG,JPEG,BMP,GIF,WEBP,HEIC,EPS,ICNS,
IM,PCX,PPM,TIFF,XBM,HEIF,JP2

Supported file size for document parsing:
-PDF, DOC, DOCX, PPT, PPTX support 100M.
-MD, TXT, XLS, XLSX, CSV support 10M.
-Other supports 20M

Supported file size for text slicing:
-Maximum PDF size: 300 MB
-D0CX, D0C, PPT, PPTX maximum 200M
-Maximum 10M for TXT, MD
-Another maximum of 20M
 * @method string getFileUrl() Obtain File storage on Tencent Cloud's URL ensures higher download speed and stability by using Tencent Cloud COS file address.
 * @method void setFileUrl(string $FileUrl) Set File storage on Tencent Cloud's URL ensures higher download speed and stability by using Tencent Cloud COS file address.
 * @method string getFileContent() Obtain base64 value of the file, carrying the MineType prefix information. The encoded file is no more than 10M.
Supported file size: The downloaded file is no more than 8M after Base64 encoding. File download time is not more than 3 seconds.
Supported image pixel: Unilateral between 20-10000px.
 * @method void setFileContent(string $FileContent) Set base64 value of the file, carrying the MineType prefix information. The encoded file is no more than 10M.
Supported file size: The downloaded file is no more than 8M after Base64 encoding. File download time is not more than 3 seconds.
Supported image pixel: Unilateral between 20-10000px.
 * @method string getFileName() Obtain File name, used when uploading with base64.
 * @method void setFileName(string $FileName) Set File name, used when uploading with base64.
 * @method integer getFileStartPageNumber() Obtain Starting page number of the document
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) Set Starting page number of the document
 * @method integer getFileEndPageNumber() Obtain End page number of the document
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) Set End page number of the document
 */
class Document extends AbstractModel
{
    /**
     * @var string Supported file types: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS.
XLSX,CSV,PNG,JPG,JPEG,BMP,GIF,WEBP,HEIC,EPS,ICNS,
IM,PCX,PPM,TIFF,XBM,HEIF,JP2

Supported file size for document parsing:
-PDF, DOC, DOCX, PPT, PPTX support 100M.
-MD, TXT, XLS, XLSX, CSV support 10M.
-Other supports 20M

Supported file size for text slicing:
-Maximum PDF size: 300 MB
-D0CX, D0C, PPT, PPTX maximum 200M
-Maximum 10M for TXT, MD
-Another maximum of 20M
     */
    public $FileType;

    /**
     * @var string File storage on Tencent Cloud's URL ensures higher download speed and stability by using Tencent Cloud COS file address.
     */
    public $FileUrl;

    /**
     * @var string base64 value of the file, carrying the MineType prefix information. The encoded file is no more than 10M.
Supported file size: The downloaded file is no more than 8M after Base64 encoding. File download time is not more than 3 seconds.
Supported image pixel: Unilateral between 20-10000px.
     */
    public $FileContent;

    /**
     * @var string File name, used when uploading with base64.
     */
    public $FileName;

    /**
     * @var integer Starting page number of the document
     */
    public $FileStartPageNumber;

    /**
     * @var integer End page number of the document
     */
    public $FileEndPageNumber;

    /**
     * @param string $FileType Supported file types: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS.
XLSX,CSV,PNG,JPG,JPEG,BMP,GIF,WEBP,HEIC,EPS,ICNS,
IM,PCX,PPM,TIFF,XBM,HEIF,JP2

Supported file size for document parsing:
-PDF, DOC, DOCX, PPT, PPTX support 100M.
-MD, TXT, XLS, XLSX, CSV support 10M.
-Other supports 20M

Supported file size for text slicing:
-Maximum PDF size: 300 MB
-D0CX, D0C, PPT, PPTX maximum 200M
-Maximum 10M for TXT, MD
-Another maximum of 20M
     * @param string $FileUrl File storage on Tencent Cloud's URL ensures higher download speed and stability by using Tencent Cloud COS file address.
     * @param string $FileContent base64 value of the file, carrying the MineType prefix information. The encoded file is no more than 10M.
Supported file size: The downloaded file is no more than 8M after Base64 encoding. File download time is not more than 3 seconds.
Supported image pixel: Unilateral between 20-10000px.
     * @param string $FileName File name, used when uploading with base64.
     * @param integer $FileStartPageNumber Starting page number of the document
     * @param integer $FileEndPageNumber End page number of the document
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }
    }
}
