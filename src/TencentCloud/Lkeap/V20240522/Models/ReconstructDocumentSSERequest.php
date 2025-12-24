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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReconstructDocumentSSE request structure.
 *
 * @method string getFileType() Obtain File type.
**Supported file types**: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS, XLSX, CSV, PNG, JPG, JPEG, BMP, GIF, WEBP, HEIC, EPS, ICNS, IM, PCX, PPM, TIFF, XBM, HEIF, JP2.
**Supported file sizes**: 
- Max 100 MB for PDF, DOC, DOCX, PPT, and PPTX .
- Max 10 MB for MD, TXT, XLS, XLSX, and CSV.
- Max20 MB for others.
 * @method void setFileType(string $FileType) Set File type.
**Supported file types**: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS, XLSX, CSV, PNG, JPG, JPEG, BMP, GIF, WEBP, HEIC, EPS, ICNS, IM, PCX, PPM, TIFF, XBM, HEIF, JP2.
**Supported file sizes**: 
- Max 100 MB for PDF, DOC, DOCX, PPT, and PPTX .
- Max 10 MB for MD, TXT, XLS, XLSX, and CSV.
- Max20 MB for others.
 * @method string getFileUrl() Obtain File URL. It is recommended to store the file in Tencent Cloud as the URL where the file is stored in Tencent Cloud can ensure higher download speed and stability. External URL may affect the speed and stability. Refer to: [Tencent Cloud COS Documentation](https://www.tencentcloud.com/document/product/436/7749)
 * @method void setFileUrl(string $FileUrl) Set File URL. It is recommended to store the file in Tencent Cloud as the URL where the file is stored in Tencent Cloud can ensure higher download speed and stability. External URL may affect the speed and stability. Refer to: [Tencent Cloud COS Documentation](https://www.tencentcloud.com/document/product/436/7749)
 * @method string getFileBase64() Obtain The base64 value of the file. File size limit: the downloaded file shall not exceed 8MB after base64 encoding. File download time does not exceed 3 seconds. Supported image pixels: the length of a single side is between 20-10000px. Either FileUrl or FileBase64 of the file must be provided. If both are provided, only the FileUrl is used.
 * @method void setFileBase64(string $FileBase64) Set The base64 value of the file. File size limit: the downloaded file shall not exceed 8MB after base64 encoding. File download time does not exceed 3 seconds. Supported image pixels: the length of a single side is between 20-10000px. Either FileUrl or FileBase64 of the file must be provided. If both are provided, only the FileUrl is used.
 * @method integer getFileStartPageNumber() Obtain The starting page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the starting page number for recognition, including the current value.
 * @method void setFileStartPageNumber(integer $FileStartPageNumber) Set The starting page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the starting page number for recognition, including the current value.
 * @method integer getFileEndPageNumber() Obtain The end page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the end page number for recognition, including the current value.
 * @method void setFileEndPageNumber(integer $FileEndPageNumber) Set The end page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the end page number for recognition, including the current value.
 * @method ReconstructDocumentSSEConfig getConfig() Obtain Document parsing configuration information.	
 * @method void setConfig(ReconstructDocumentSSEConfig $Config) Set Document parsing configuration information.	
 */
class ReconstructDocumentSSERequest extends AbstractModel
{
    /**
     * @var string File type.
**Supported file types**: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS, XLSX, CSV, PNG, JPG, JPEG, BMP, GIF, WEBP, HEIC, EPS, ICNS, IM, PCX, PPM, TIFF, XBM, HEIF, JP2.
**Supported file sizes**: 
- Max 100 MB for PDF, DOC, DOCX, PPT, and PPTX .
- Max 10 MB for MD, TXT, XLS, XLSX, and CSV.
- Max20 MB for others.
     */
    public $FileType;

    /**
     * @var string File URL. It is recommended to store the file in Tencent Cloud as the URL where the file is stored in Tencent Cloud can ensure higher download speed and stability. External URL may affect the speed and stability. Refer to: [Tencent Cloud COS Documentation](https://www.tencentcloud.com/document/product/436/7749)
     */
    public $FileUrl;

    /**
     * @var string The base64 value of the file. File size limit: the downloaded file shall not exceed 8MB after base64 encoding. File download time does not exceed 3 seconds. Supported image pixels: the length of a single side is between 20-10000px. Either FileUrl or FileBase64 of the file must be provided. If both are provided, only the FileUrl is used.
     */
    public $FileBase64;

    /**
     * @var integer The starting page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the starting page number for recognition, including the current value.
     */
    public $FileStartPageNumber;

    /**
     * @var integer The end page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the end page number for recognition, including the current value.
     */
    public $FileEndPageNumber;

    /**
     * @var ReconstructDocumentSSEConfig Document parsing configuration information.	
     */
    public $Config;

    /**
     * @param string $FileType File type.
**Supported file types**: PDF, DOC, DOCX, PPT, PPTX, MD, TXT, XLS, XLSX, CSV, PNG, JPG, JPEG, BMP, GIF, WEBP, HEIC, EPS, ICNS, IM, PCX, PPM, TIFF, XBM, HEIF, JP2.
**Supported file sizes**: 
- Max 100 MB for PDF, DOC, DOCX, PPT, and PPTX .
- Max 10 MB for MD, TXT, XLS, XLSX, and CSV.
- Max20 MB for others.
     * @param string $FileUrl File URL. It is recommended to store the file in Tencent Cloud as the URL where the file is stored in Tencent Cloud can ensure higher download speed and stability. External URL may affect the speed and stability. Refer to: [Tencent Cloud COS Documentation](https://www.tencentcloud.com/document/product/436/7749)
     * @param string $FileBase64 The base64 value of the file. File size limit: the downloaded file shall not exceed 8MB after base64 encoding. File download time does not exceed 3 seconds. Supported image pixels: the length of a single side is between 20-10000px. Either FileUrl or FileBase64 of the file must be provided. If both are provided, only the FileUrl is used.
     * @param integer $FileStartPageNumber The starting page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the starting page number for recognition, including the current value.
     * @param integer $FileEndPageNumber The end page number of the file. When type of the uploaded file is pdf, doc, docx, ppt, or pptx, it specifies the end page number for recognition, including the current value.
     * @param ReconstructDocumentSSEConfig $Config Document parsing configuration information.	
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

        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("FileStartPageNumber",$param) and $param["FileStartPageNumber"] !== null) {
            $this->FileStartPageNumber = $param["FileStartPageNumber"];
        }

        if (array_key_exists("FileEndPageNumber",$param) and $param["FileEndPageNumber"] !== null) {
            $this->FileEndPageNumber = $param["FileEndPageNumber"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ReconstructDocumentSSEConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
