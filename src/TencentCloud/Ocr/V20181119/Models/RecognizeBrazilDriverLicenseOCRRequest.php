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
 * RecognizeBrazilDriverLicenseOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method string getBackImageBase64() Obtain The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method void setBackImageBase64(string $BackImageBase64) Set The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method string getImageUrl() Obtain The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method void setImageUrl(string $ImageUrl) Set The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method string getBackImageUrl() Obtain The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method void setBackImageUrl(string $BackImageUrl) Set The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method boolean getCropPortrait() Obtain Picture switch. The default is false, and the base64 encoding of the avatar photo is not returned. When set to true, the base64 encoding of the portrait photo is returned.
 * @method void setCropPortrait(boolean $CropPortrait) Set Picture switch. The default is false, and the base64 encoding of the avatar photo is not returned. When set to true, the base64 encoding of the portrait photo is returned.
 */
class RecognizeBrazilDriverLicenseOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     */
    public $ImageBase64;

    /**
     * @var string The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     */
    public $BackImageBase64;

    /**
     * @var string The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     */
    public $ImageUrl;

    /**
     * @var string The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     */
    public $BackImageUrl;

    /**
     * @var boolean Picture switch. The default is false, and the base64 encoding of the avatar photo is not returned. When set to true, the base64 encoding of the portrait photo is returned.
     */
    public $CropPortrait;

    /**
     * @param string $ImageBase64 The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     * @param string $BackImageBase64 The Base64 value of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     * @param string $ImageUrl The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     * @param string $BackImageUrl The URL address of the image. It is required that the image after Base64 encoding should not exceed 7M, the resolution is recommended to be 500*800 or above, and PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     * @param boolean $CropPortrait Picture switch. The default is false, and the base64 encoding of the avatar photo is not returned. When set to true, the base64 encoding of the portrait photo is returned.
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

        if (array_key_exists("BackImageBase64",$param) and $param["BackImageBase64"] !== null) {
            $this->BackImageBase64 = $param["BackImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("BackImageUrl",$param) and $param["BackImageUrl"] !== null) {
            $this->BackImageUrl = $param["BackImageUrl"];
        }

        if (array_key_exists("CropPortrait",$param) and $param["CropPortrait"] !== null) {
            $this->CropPortrait = $param["CropPortrait"];
        }
    }
}
