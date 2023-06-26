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
 * RecognizeTableAccurateOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64-encoded value of an image.
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64-encoded value of an image.
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
 * @method string getImageUrl() Obtain The URL of the image or PDF file.
The image or PDF file cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image or PDF file.
The image or PDF file cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method integer getPdfPageNumber() Obtain The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
 */
class RecognizeTableAccurateOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64-encoded value of an image.
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
     */
    public $ImageBase64;

    /**
     * @var string The URL of the image or PDF file.
The image or PDF file cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var integer The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
     */
    public $PdfPageNumber;

    /**
     * @param string $ImageBase64 The Base64-encoded value of an image.
The image cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
     * @param string $ImageUrl The URL of the image or PDF file.
The image or PDF file cannot exceed 7 MB after being Base64-encoded. A resolution above 600 x 800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
Supported image pixels: 20 to 10,000
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param integer $PdfPageNumber The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
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

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }
    }
}
