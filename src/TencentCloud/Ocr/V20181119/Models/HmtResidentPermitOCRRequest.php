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
 * HmtResidentPermitOCR request structure.
 *
 * @method string getImageBase64() Obtain <p>Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after the downloaded image is Base64-encoded. The image download must complete within 3 seconds.Either ImageUrl or ImageBase64 must be provided. If both are provided, only ImageUrl is used.</p>
 * @method void setImageBase64(string $ImageBase64) Set <p>Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after the downloaded image is Base64-encoded. The image download must complete within 3 seconds.Either ImageUrl or ImageBase64 must be provided. If both are provided, only ImageUrl is used.</p>
 * @method string getImageUrl() Obtain <p>Image URL.Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time no more than 3 seconds. URLs stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. Speed and stability may be impacted for URLs not stored in Tencent Cloud.</p>
 * @method void setImageUrl(string $ImageUrl) Set <p>Image URL.Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time no more than 3 seconds. URLs stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. Speed and stability may be impacted for URLs not stored in Tencent Cloud.</p>
 * @method string getCardSide() Obtain <p>FRONT: the side with a photo (portrait side),<br>BACK: the side without a photo (national emblem side),<br>if this parameter is left empty or incorrect, the front or back side is automatically determined for you.</p>
 * @method void setCardSide(string $CardSide) Set <p>FRONT: the side with a photo (portrait side),<br>BACK: the side without a photo (national emblem side),<br>if this parameter is left empty or incorrect, the front or back side is automatically determined for you.</p>
 * @method boolean getCropPortrait() Obtain Whether to return the portrait image and position coordinates
 * @method void setCropPortrait(boolean $CropPortrait) Set Whether to return the portrait image and position coordinates
 */
class HmtResidentPermitOCRRequest extends AbstractModel
{
    /**
     * @var string <p>Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after the downloaded image is Base64-encoded. The image download must complete within 3 seconds.Either ImageUrl or ImageBase64 must be provided. If both are provided, only ImageUrl is used.</p>
     */
    public $ImageBase64;

    /**
     * @var string <p>Image URL.Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time no more than 3 seconds. URLs stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. Speed and stability may be impacted for URLs not stored in Tencent Cloud.</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>FRONT: the side with a photo (portrait side),<br>BACK: the side without a photo (national emblem side),<br>if this parameter is left empty or incorrect, the front or back side is automatically determined for you.</p>
     */
    public $CardSide;

    /**
     * @var boolean Whether to return the portrait image and position coordinates
     */
    public $CropPortrait;

    /**
     * @param string $ImageBase64 <p>Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after the downloaded image is Base64-encoded. The image download must complete within 3 seconds.Either ImageUrl or ImageBase64 must be provided. If both are provided, only ImageUrl is used.</p>
     * @param string $ImageUrl <p>Image URL.Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time no more than 3 seconds. URLs stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud. Speed and stability may be impacted for URLs not stored in Tencent Cloud.</p>
     * @param string $CardSide <p>FRONT: the side with a photo (portrait side),<br>BACK: the side without a photo (national emblem side),<br>if this parameter is left empty or incorrect, the front or back side is automatically determined for you.</p>
     * @param boolean $CropPortrait Whether to return the portrait image and position coordinates
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
    }
}
