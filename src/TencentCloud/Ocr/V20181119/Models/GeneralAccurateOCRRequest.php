<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getImageBase64() Obtain Base64-encoded value of image.
The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
Either `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded value of image.
The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
Either `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
 * @method string getImageUrl() Obtain URL address of image. (This field is not supported outside Chinese mainland)
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set URL address of image. (This field is not supported outside Chinese mainland)
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method boolean getIsWords() Obtain Whether to return the character information. Default value: `false`
 * @method void setIsWords(boolean $IsWords) Set Whether to return the character information. Default value: `false`
 * @method boolean getEnableDetectSplit() Obtain Whether to slice the input image to enhance the recognition effects for scenarios where the whole image is big, but the size of a single character is small (e.g., test papers). This feature is disabled by default.
 * @method void setEnableDetectSplit(boolean $EnableDetectSplit) Set Whether to slice the input image to enhance the recognition effects for scenarios where the whole image is big, but the size of a single character is small (e.g., test papers). This feature is disabled by default.
 * @method boolean getIsPdf() Obtain Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
 * @method void setIsPdf(boolean $IsPdf) Set Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
 * @method integer getPdfPageNumber() Obtain Number of a PDF page that needs to be recognized. Currently, only one single page can be recognized. This parameter takes effect only if a PDF file is uploaded and `IsPdf` is set to `true`. Default value: `1`
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set Number of a PDF page that needs to be recognized. Currently, only one single page can be recognized. This parameter takes effect only if a PDF file is uploaded and `IsPdf` is set to `true`. Default value: `1`
 */
class GeneralAccurateOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded value of image.
The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
Either `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
     */
    public $ImageBase64;

    /**
     * @var string URL address of image. (This field is not supported outside Chinese mainland)
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var boolean Whether to return the character information. Default value: `false`
     */
    public $IsWords;

    /**
     * @var boolean Whether to slice the input image to enhance the recognition effects for scenarios where the whole image is big, but the size of a single character is small (e.g., test papers). This feature is disabled by default.
     */
    public $EnableDetectSplit;

    /**
     * @var boolean Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
     */
    public $IsPdf;

    /**
     * @var integer Number of a PDF page that needs to be recognized. Currently, only one single page can be recognized. This parameter takes effect only if a PDF file is uploaded and `IsPdf` is set to `true`. Default value: `1`
     */
    public $PdfPageNumber;

    /**
     * @param string $ImageBase64 Base64-encoded value of image.
The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
Either `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
     * @param string $ImageUrl URL address of image. (This field is not supported outside Chinese mainland)
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, and BMP formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param boolean $IsWords Whether to return the character information. Default value: `false`
     * @param boolean $EnableDetectSplit Whether to slice the input image to enhance the recognition effects for scenarios where the whole image is big, but the size of a single character is small (e.g., test papers). This feature is disabled by default.
     * @param boolean $IsPdf Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
     * @param integer $PdfPageNumber Number of a PDF page that needs to be recognized. Currently, only one single page can be recognized. This parameter takes effect only if a PDF file is uploaded and `IsPdf` is set to `true`. Default value: `1`
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

        if (array_key_exists("IsWords",$param) and $param["IsWords"] !== null) {
            $this->IsWords = $param["IsWords"];
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
    }
}
