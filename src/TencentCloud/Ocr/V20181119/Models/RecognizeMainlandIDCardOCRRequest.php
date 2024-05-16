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
 * RecognizeMainlandIDCardOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method string getImageUrl() Obtain The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method void setImageUrl(string $ImageUrl) Set The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method string getCardSide() Obtain FRONT: The side of the ID card with the photo (portrait side), BACK: The side of the ID card with the national emblem (national emblem side). If this parameter is not filled in, the front and back of the ID card will be automatically determined for you.
 * @method void setCardSide(string $CardSide) Set FRONT: The side of the ID card with the photo (portrait side), BACK: The side of the ID card with the national emblem (national emblem side). If this parameter is not filled in, the front and back of the ID card will be automatically determined for you.
 * @method boolean getCropPortrait() Obtain Whether to return the ID card portrait, the default is false
 * @method void setCropPortrait(boolean $CropPortrait) Set Whether to return the ID card portrait, the default is false
 * @method boolean getCropIdCard() Obtain Whether to enable ID card photo cropping (removing excess edges outside the ID, automatically correcting the shooting angle), the default value is false
 * @method void setCropIdCard(boolean $CropIdCard) Set Whether to enable ID card photo cropping (removing excess edges outside the ID, automatically correcting the shooting angle), the default value is false
 */
class RecognizeMainlandIDCardOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     */
    public $ImageBase64;

    /**
     * @var string The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     */
    public $ImageUrl;

    /**
     * @var string FRONT: The side of the ID card with the photo (portrait side), BACK: The side of the ID card with the national emblem (national emblem side). If this parameter is not filled in, the front and back of the ID card will be automatically determined for you.
     */
    public $CardSide;

    /**
     * @var boolean Whether to return the ID card portrait, the default is false
     */
    public $CropPortrait;

    /**
     * @var boolean Whether to enable ID card photo cropping (removing excess edges outside the ID, automatically correcting the shooting angle), the default value is false
     */
    public $CropIdCard;

    /**
     * @param string $ImageBase64 The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     * @param string $ImageUrl The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     * @param string $CardSide FRONT: The side of the ID card with the photo (portrait side), BACK: The side of the ID card with the national emblem (national emblem side). If this parameter is not filled in, the front and back of the ID card will be automatically determined for you.
     * @param boolean $CropPortrait Whether to return the ID card portrait, the default is false
     * @param boolean $CropIdCard Whether to enable ID card photo cropping (removing excess edges outside the ID, automatically correcting the shooting angle), the default value is false
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

        if (array_key_exists("CardSide",$param) and $param["CardSide"] !== null) {
            $this->CardSide = $param["CardSide"];
        }

        if (array_key_exists("CropPortrait",$param) and $param["CropPortrait"] !== null) {
            $this->CropPortrait = $param["CropPortrait"];
        }

        if (array_key_exists("CropIdCard",$param) and $param["CropIdCard"] !== null) {
            $this->CropIdCard = $param["CropIdCard"];
        }
    }
}
