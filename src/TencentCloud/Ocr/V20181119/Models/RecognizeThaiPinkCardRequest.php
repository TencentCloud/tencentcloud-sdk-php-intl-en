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
 * RecognizeThaiPinkCard request structure.
 *
 * @method string getImageBase64() Obtain The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
 * @method string getImageUrl() Obtain The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
 * @method boolean getCropPortrait() Obtain Whether to crop the profile photo. The default value is `false`, meaning not to return the Base64-encoded value of the profile photo on the Thai identity card.
When this parameter is set to `true`, the Base64-encoded value of the profile photo on the Thai identity card after rotation correction is returned.
 * @method void setCropPortrait(boolean $CropPortrait) Set Whether to crop the profile photo. The default value is `false`, meaning not to return the Base64-encoded value of the profile photo on the Thai identity card.
When this parameter is set to `true`, the Base64-encoded value of the profile photo on the Thai identity card after rotation correction is returned.
 */
class RecognizeThaiPinkCardRequest extends AbstractModel
{
    /**
     * @var string The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
     */
    public $ImageBase64;

    /**
     * @var string The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
     */
    public $ImageUrl;

    /**
     * @var boolean Whether to crop the profile photo. The default value is `false`, meaning not to return the Base64-encoded value of the profile photo on the Thai identity card.
When this parameter is set to `true`, the Base64-encoded value of the profile photo on the Thai identity card after rotation correction is returned.
     */
    public $CropPortrait;

    /**
     * @param string $ImageBase64 The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
     * @param string $ImageUrl The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
     * @param boolean $CropPortrait Whether to crop the profile photo. The default value is `false`, meaning not to return the Base64-encoded value of the profile photo on the Thai identity card.
When this parameter is set to `true`, the Base64-encoded value of the profile photo on the Thai identity card after rotation correction is returned.
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

        if (array_key_exists("CropPortrait",$param) and $param["CropPortrait"] !== null) {
            $this->CropPortrait = $param["CropPortrait"];
        }
    }
}
