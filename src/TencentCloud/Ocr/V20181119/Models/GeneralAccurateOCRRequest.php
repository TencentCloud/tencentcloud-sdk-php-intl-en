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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GeneralAccurateOCR request structure.
 *
 * @method string getImageBase64() Obtain <p>The Base64 value of the image/PDF. The image size after Base64 encoding must be no more than 10M, with a resolution of 600*800 or higher recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.</p>
 * @method void setImageBase64(string $ImageBase64) Set <p>The Base64 value of the image/PDF. The image size after Base64 encoding must be no more than 10M, with a resolution of 600*800 or higher recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.</p>
 * @method string getImageUrl() Obtain URL address of image. 
The image cannot exceed 10 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set URL address of image. 
The image cannot exceed 10 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method boolean getEnableDetectSplit() Obtain <p>Whether to enable original image slicing detection. Once enabled, it improves recognition accuracy in scenarios where "the overall image area is large but the single character occupies a small proportion" (for example: exam paper). Default: disabled. Note: Only supported when ConfigID is configured as OCR.</p>
 * @method void setEnableDetectSplit(boolean $EnableDetectSplit) Set <p>Whether to enable original image slicing detection. Once enabled, it improves recognition accuracy in scenarios where "the overall image area is large but the single character occupies a small proportion" (for example: exam paper). Default: disabled. Note: Only supported when ConfigID is configured as OCR.</p>
 * @method boolean getIsPdf() Obtain <p>Whether PDF recognition is enabled. The default value is false. Once enabled, it can simultaneously support image and PDF recognition.</p>
 * @method void setIsPdf(boolean $IsPdf) Set <p>Whether PDF recognition is enabled. The default value is false. Once enabled, it can simultaneously support image and PDF recognition.</p>
 * @method integer getPdfPageNumber() Obtain <p>The corresponding page number of the PDF page to be recognized. Only single page recognition is supported. Valid at that time when the upload file is a PDF and the IsPdf parameter value is true. The default value is 1.</p>
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set <p>The corresponding page number of the PDF page to be recognized. Only single page recognition is supported. Valid at that time when the upload file is a PDF and the IsPdf parameter value is true. The default value is 1.</p>
 * @method boolean getEnableDetectText() Obtain <p>Text Detection Switch, true by default. Set to false to directly perform single-line recognition, suitable for image scenarios containing only forward single-line text.</p>
 * @method void setEnableDetectText(boolean $EnableDetectText) Set <p>Text Detection Switch, true by default. Set to false to directly perform single-line recognition, suitable for image scenarios containing only forward single-line text.</p>
 * @method string getConfigID() Obtain <p>Configuration ID support: OCR -- common scenarios MulOCR -- multilingual scenario. Default value: OCR.</p>
 * @method void setConfigID(string $ConfigID) Set <p>Configuration ID support: OCR -- common scenarios MulOCR -- multilingual scenario. Default value: OCR.</p>
 */
class GeneralAccurateOCRRequest extends AbstractModel
{
    /**
     * @var string <p>The Base64 value of the image/PDF. The image size after Base64 encoding must be no more than 10M, with a resolution of 600*800 or higher recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.</p>
     */
    public $ImageBase64;

    /**
     * @var string URL address of image. 
The image cannot exceed 10 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var boolean <p>Whether to enable original image slicing detection. Once enabled, it improves recognition accuracy in scenarios where "the overall image area is large but the single character occupies a small proportion" (for example: exam paper). Default: disabled. Note: Only supported when ConfigID is configured as OCR.</p>
     */
    public $EnableDetectSplit;

    /**
     * @var boolean <p>Whether PDF recognition is enabled. The default value is false. Once enabled, it can simultaneously support image and PDF recognition.</p>
     */
    public $IsPdf;

    /**
     * @var integer <p>The corresponding page number of the PDF page to be recognized. Only single page recognition is supported. Valid at that time when the upload file is a PDF and the IsPdf parameter value is true. The default value is 1.</p>
     */
    public $PdfPageNumber;

    /**
     * @var boolean <p>Text Detection Switch, true by default. Set to false to directly perform single-line recognition, suitable for image scenarios containing only forward single-line text.</p>
     */
    public $EnableDetectText;

    /**
     * @var string <p>Configuration ID support: OCR -- common scenarios MulOCR -- multilingual scenario. Default value: OCR.</p>
     */
    public $ConfigID;

    /**
     * @param string $ImageBase64 <p>The Base64 value of the image/PDF. The image size after Base64 encoding must be no more than 10M, with a resolution of 600*800 or higher recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. Either ImageUrl or ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.</p>
     * @param string $ImageUrl URL address of image. 
The image cannot exceed 10 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param boolean $EnableDetectSplit <p>Whether to enable original image slicing detection. Once enabled, it improves recognition accuracy in scenarios where "the overall image area is large but the single character occupies a small proportion" (for example: exam paper). Default: disabled. Note: Only supported when ConfigID is configured as OCR.</p>
     * @param boolean $IsPdf <p>Whether PDF recognition is enabled. The default value is false. Once enabled, it can simultaneously support image and PDF recognition.</p>
     * @param integer $PdfPageNumber <p>The corresponding page number of the PDF page to be recognized. Only single page recognition is supported. Valid at that time when the upload file is a PDF and the IsPdf parameter value is true. The default value is 1.</p>
     * @param boolean $EnableDetectText <p>Text Detection Switch, true by default. Set to false to directly perform single-line recognition, suitable for image scenarios containing only forward single-line text.</p>
     * @param string $ConfigID <p>Configuration ID support: OCR -- common scenarios MulOCR -- multilingual scenario. Default value: OCR.</p>
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("EnableDetectSplit",$param) and $param["EnableDetectSplit"] !== null) {
            $this->EnableDetectSplit = $param["EnableDetectSplit"];
        }

        if (array_key_exists("IsPdf",$param) and $param["IsPdf"] !== null) {
            $this->IsPdf = $param["IsPdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("EnableDetectText",$param) and $param["EnableDetectText"] !== null) {
            $this->EnableDetectText = $param["EnableDetectText"];
        }

        if (array_key_exists("ConfigID",$param) and $param["ConfigID"] !== null) {
            $this->ConfigID = $param["ConfigID"];
        }
    }
}
