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
 * GeneralBasicOCR request structure.
 *
 * @method string getImageBase64() Obtain Base64-encoded value of image/PDF.
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded value of image/PDF.
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
 * @method string getImageUrl() Obtain URL address of image/PDF. (This field is not supported outside Chinese mainland)
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set URL address of image/PDF. (This field is not supported outside Chinese mainland)
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method string getScene() Obtain Reserved field.
 * @method void setScene(string $Scene) Set Reserved field.
 * @method string getLanguageType() Obtain Language to recognize
The language can be automatically recognized or manually specified. Chinese-English mix (`zh`) is selected by default. Mixed characters in English and each supported language can be recognized together.
Valid values:
`zh`: Chinese-English mix
`zh_rare`: supports letters, digits, rare Chinese characters, Traditional Chinese characters, special characters, etc.
`auto`
`mix`: language mix
`jap`: Japanese
`kor`: Korean
`spa`: Spanish
`fre`: French
`ger`: German
`por`: Portuguese
`vie`: Vietnamese
`may`: Malay
`rus`: Russian
`ita`: Italian
`hol`: Dutch
`swe`: Swedish
`fin`: Finnish
`dan`: Danish
`nor`: Norwegian
`hun`: Hungarian
`tha`: Thai
`hi`: Hindi
`ara`: Arabic
 * @method void setLanguageType(string $LanguageType) Set Language to recognize
The language can be automatically recognized or manually specified. Chinese-English mix (`zh`) is selected by default. Mixed characters in English and each supported language can be recognized together.
Valid values:
`zh`: Chinese-English mix
`zh_rare`: supports letters, digits, rare Chinese characters, Traditional Chinese characters, special characters, etc.
`auto`
`mix`: language mix
`jap`: Japanese
`kor`: Korean
`spa`: Spanish
`fre`: French
`ger`: German
`por`: Portuguese
`vie`: Vietnamese
`may`: Malay
`rus`: Russian
`ita`: Italian
`hol`: Dutch
`swe`: Swedish
`fin`: Finnish
`dan`: Danish
`nor`: Norwegian
`hun`: Hungarian
`tha`: Thai
`hi`: Hindi
`ara`: Arabic
 * @method boolean getIsPdf() Obtain Whether to enable PDF recognition. Default value: false. After this feature is enabled, both images and PDF files can be recognized at the same time.
 * @method void setIsPdf(boolean $IsPdf) Set Whether to enable PDF recognition. Default value: false. After this feature is enabled, both images and PDF files can be recognized at the same time.
 * @method integer getPdfPageNumber() Obtain Page number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of the `IsPdf` parameter is `true`. Default value: 1.
 * @method void setPdfPageNumber(integer $PdfPageNumber) Set Page number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of the `IsPdf` parameter is `true`. Default value: 1.
 * @method boolean getIsWords() Obtain Whether to return the character information. Default value: `false`
 * @method void setIsWords(boolean $IsWords) Set Whether to return the character information. Default value: `false`
 */
class GeneralBasicOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded value of image/PDF.
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
     */
    public $ImageBase64;

    /**
     * @var string URL address of image/PDF. (This field is not supported outside Chinese mainland)
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var string Reserved field.
     */
    public $Scene;

    /**
     * @var string Language to recognize
The language can be automatically recognized or manually specified. Chinese-English mix (`zh`) is selected by default. Mixed characters in English and each supported language can be recognized together.
Valid values:
`zh`: Chinese-English mix
`zh_rare`: supports letters, digits, rare Chinese characters, Traditional Chinese characters, special characters, etc.
`auto`
`mix`: language mix
`jap`: Japanese
`kor`: Korean
`spa`: Spanish
`fre`: French
`ger`: German
`por`: Portuguese
`vie`: Vietnamese
`may`: Malay
`rus`: Russian
`ita`: Italian
`hol`: Dutch
`swe`: Swedish
`fin`: Finnish
`dan`: Danish
`nor`: Norwegian
`hun`: Hungarian
`tha`: Thai
`hi`: Hindi
`ara`: Arabic
     */
    public $LanguageType;

    /**
     * @var boolean Whether to enable PDF recognition. Default value: false. After this feature is enabled, both images and PDF files can be recognized at the same time.
     */
    public $IsPdf;

    /**
     * @var integer Page number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of the `IsPdf` parameter is `true`. Default value: 1.
     */
    public $PdfPageNumber;

    /**
     * @var boolean Whether to return the character information. Default value: `false`
     */
    public $IsWords;

    /**
     * @param string $ImageBase64 Base64-encoded value of image/PDF.
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
     * @param string $ImageUrl URL address of image/PDF. (This field is not supported outside Chinese mainland)
The image/PDF cannot exceed 7 MB after being Base64-encoded. A resolution above 600x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param string $Scene Reserved field.
     * @param string $LanguageType Language to recognize
The language can be automatically recognized or manually specified. Chinese-English mix (`zh`) is selected by default. Mixed characters in English and each supported language can be recognized together.
Valid values:
`zh`: Chinese-English mix
`zh_rare`: supports letters, digits, rare Chinese characters, Traditional Chinese characters, special characters, etc.
`auto`
`mix`: language mix
`jap`: Japanese
`kor`: Korean
`spa`: Spanish
`fre`: French
`ger`: German
`por`: Portuguese
`vie`: Vietnamese
`may`: Malay
`rus`: Russian
`ita`: Italian
`hol`: Dutch
`swe`: Swedish
`fin`: Finnish
`dan`: Danish
`nor`: Norwegian
`hun`: Hungarian
`tha`: Thai
`hi`: Hindi
`ara`: Arabic
     * @param boolean $IsPdf Whether to enable PDF recognition. Default value: false. After this feature is enabled, both images and PDF files can be recognized at the same time.
     * @param integer $PdfPageNumber Page number of the PDF page that needs to be recognized. Only one single PDF page can be recognized. This parameter is valid if the uploaded file is a PDF and the value of the `IsPdf` parameter is `true`. Default value: 1.
     * @param boolean $IsWords Whether to return the character information. Default value: `false`
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

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("LanguageType",$param) and $param["LanguageType"] !== null) {
            $this->LanguageType = $param["LanguageType"];
        }

        if (array_key_exists("IsPdf",$param) and $param["IsPdf"] !== null) {
            $this->IsPdf = $param["IsPdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("IsWords",$param) and $param["IsWords"] !== null) {
            $this->IsWords = $param["IsWords"];
        }
    }
}
