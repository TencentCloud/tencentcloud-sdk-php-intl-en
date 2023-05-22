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
 * SmartStructuralOCRV2 request structure.
 *
 * @method string getImageUrl() Obtain The URL of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method string getImageBase64() Obtain The Base64-encoded value of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64-encoded value of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
 * @method boolean getIsPdf() Obtain Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
 * @method void setIsPdf(boolean $IsPdf) Set Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
 * @method integer getPdfPageNumber() Obtain The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
 * @method array getItemNames() Obtain The names of the fields you want to return for the structured information recognition.
For example, if you want to return only the recognition result of the "Name" and "Gender" fields, set this parameter as follows:
ItemNames=["Name","Gender"]
 * @method void setItemNames(array $ItemNames) Set The names of the fields you want to return for the structured information recognition.
For example, if you want to return only the recognition result of the "Name" and "Gender" fields, set this parameter as follows:
ItemNames=["Name","Gender"]
 * @method boolean getReturnFullText() Obtain Whether to enable recognition of all fields.
 * @method void setReturnFullText(boolean $ReturnFullText) Set Whether to enable recognition of all fields.
 */
class SmartStructuralOCRV2Request extends AbstractModel
{
    /**
     * @var string The URL of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var string The Base64-encoded value of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
     */
    public $ImageBase64;

    /**
     * @var boolean Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
     */
    public $IsPdf;

    /**
     * @var integer The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
     */
    public $PdfPageNumber;

    /**
     * @var array The names of the fields you want to return for the structured information recognition.
For example, if you want to return only the recognition result of the "Name" and "Gender" fields, set this parameter as follows:
ItemNames=["Name","Gender"]
     */
    public $ItemNames;

    /**
     * @var boolean Whether to enable recognition of all fields.
     */
    public $ReturnFullText;

    /**
     * @param string $ImageUrl The URL of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param string $ImageBase64 The Base64-encoded value of the image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` is used.
     * @param boolean $IsPdf Whether to enable PDF recognition. Default value: `false`. If you enable this feature, both images and PDF files can be recognized.
     * @param integer $PdfPageNumber The number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of `IsPdf` is `true`. Default value: `1`.
     * @param array $ItemNames The names of the fields you want to return for the structured information recognition.
For example, if you want to return only the recognition result of the "Name" and "Gender" fields, set this parameter as follows:
ItemNames=["Name","Gender"]
     * @param boolean $ReturnFullText Whether to enable recognition of all fields.
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("IsPdf",$param) and $param["IsPdf"] !== null) {
            $this->IsPdf = $param["IsPdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("ItemNames",$param) and $param["ItemNames"] !== null) {
            $this->ItemNames = $param["ItemNames"];
        }

        if (array_key_exists("ReturnFullText",$param) and $param["ReturnFullText"] !== null) {
            $this->ReturnFullText = $param["ReturnFullText"];
        }
    }
}
