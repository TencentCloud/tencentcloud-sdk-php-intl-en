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
 * RecognizeSingaporeIDCardOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method string getImageUrl() Obtain The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method void setImageUrl(string $ImageUrl) Set The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
 * @method boolean getReturnHeadImage() Obtain Whether to return portrait photos.
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Whether to return portrait photos.
 */
class RecognizeSingaporeIDCardOCRRequest extends AbstractModel
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
     * @var boolean Whether to return portrait photos.
     */
    public $ReturnHeadImage;

    /**
     * @param string $ImageBase64 The Base64 value of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     * @param string $ImageUrl The URL address of the image. The image is required to be no larger than 7M after Base64 encoding, and the resolution is recommended to be 500*800 or above. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupies at least 2/3 of the picture. It is recommended that images be stored in Tencent Cloud to ensure higher download speed and stability.
     * @param boolean $ReturnHeadImage Whether to return portrait photos.
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

        if (array_key_exists("ReturnHeadImage",$param) and $param["ReturnHeadImage"] !== null) {
            $this->ReturnHeadImage = $param["ReturnHeadImage"];
        }
    }
}
