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
 * IDCardOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
 * @method void setImageBase64(string $ImageBase64) Set The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
 * @method string getImageUrl() Obtain The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
 * @method string getCardSide() Obtain `FRONT`: The side with the profile photo.
`BACK`: The side with the national emblem.
If this parameter is not specified, the system will automatically determine the ID card side.
 * @method void setCardSide(string $CardSide) Set `FRONT`: The side with the profile photo.
`BACK`: The side with the national emblem.
If this parameter is not specified, the system will automatically determine the ID card side.
 * @method string getConfig() Obtain The following parameters are all of `bool` type and default to `false`:
`CropIdCard`: Crops the ID card photo (by removing extra edges outside the ID card and automatically correcting the shooting angle).
`CropPortrait`: Crops the profile photo (by automatically cutting out the face area in the ID card).
`CopyWarn`: Warns about photocopied images.
`BorderCheckWarn`: Warns about border and frame occlusions.
`ReshootWarn`: Warns about spoofed images.
`DetectPsWarn`: Warns about photoshopped images.
`TempIdWarn`: Warns about temporary ID cards.
`InvalidDateWarn`: Warns about invalid ID card validity periods.
`Quality`: Gets the image quality score (by evaluating the blurriness of the image).
`MultiCardDetect`: Enables multi-card detection.
`ReflectWarn`: Enables glare detection.

Parameter setting method via SDK:
Config = Json.stringify({"CropIdCard":true,"CropPortrait":true})
Parameter setting method via API 3.0 Explorer:
Config = {"CropIdCard":true,"CropPortrait":true}
 * @method void setConfig(string $Config) Set The following parameters are all of `bool` type and default to `false`:
`CropIdCard`: Crops the ID card photo (by removing extra edges outside the ID card and automatically correcting the shooting angle).
`CropPortrait`: Crops the profile photo (by automatically cutting out the face area in the ID card).
`CopyWarn`: Warns about photocopied images.
`BorderCheckWarn`: Warns about border and frame occlusions.
`ReshootWarn`: Warns about spoofed images.
`DetectPsWarn`: Warns about photoshopped images.
`TempIdWarn`: Warns about temporary ID cards.
`InvalidDateWarn`: Warns about invalid ID card validity periods.
`Quality`: Gets the image quality score (by evaluating the blurriness of the image).
`MultiCardDetect`: Enables multi-card detection.
`ReflectWarn`: Enables glare detection.

Parameter setting method via SDK:
Config = Json.stringify({"CropIdCard":true,"CropPortrait":true})
Parameter setting method via API 3.0 Explorer:
Config = {"CropIdCard":true,"CropPortrait":true}
 */
class IDCardOCRRequest extends AbstractModel
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
     * @var string `FRONT`: The side with the profile photo.
`BACK`: The side with the national emblem.
If this parameter is not specified, the system will automatically determine the ID card side.
     */
    public $CardSide;

    /**
     * @var string The following parameters are all of `bool` type and default to `false`:
`CropIdCard`: Crops the ID card photo (by removing extra edges outside the ID card and automatically correcting the shooting angle).
`CropPortrait`: Crops the profile photo (by automatically cutting out the face area in the ID card).
`CopyWarn`: Warns about photocopied images.
`BorderCheckWarn`: Warns about border and frame occlusions.
`ReshootWarn`: Warns about spoofed images.
`DetectPsWarn`: Warns about photoshopped images.
`TempIdWarn`: Warns about temporary ID cards.
`InvalidDateWarn`: Warns about invalid ID card validity periods.
`Quality`: Gets the image quality score (by evaluating the blurriness of the image).
`MultiCardDetect`: Enables multi-card detection.
`ReflectWarn`: Enables glare detection.

Parameter setting method via SDK:
Config = Json.stringify({"CropIdCard":true,"CropPortrait":true})
Parameter setting method via API 3.0 Explorer:
Config = {"CropIdCard":true,"CropPortrait":true}
     */
    public $Config;

    /**
     * @param string $ImageBase64 The Base64-encoded value of an image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, `ImageUrl` is used.
     * @param string $ImageUrl The URL of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
     * @param string $CardSide `FRONT`: The side with the profile photo.
`BACK`: The side with the national emblem.
If this parameter is not specified, the system will automatically determine the ID card side.
     * @param string $Config The following parameters are all of `bool` type and default to `false`:
`CropIdCard`: Crops the ID card photo (by removing extra edges outside the ID card and automatically correcting the shooting angle).
`CropPortrait`: Crops the profile photo (by automatically cutting out the face area in the ID card).
`CopyWarn`: Warns about photocopied images.
`BorderCheckWarn`: Warns about border and frame occlusions.
`ReshootWarn`: Warns about spoofed images.
`DetectPsWarn`: Warns about photoshopped images.
`TempIdWarn`: Warns about temporary ID cards.
`InvalidDateWarn`: Warns about invalid ID card validity periods.
`Quality`: Gets the image quality score (by evaluating the blurriness of the image).
`MultiCardDetect`: Enables multi-card detection.
`ReflectWarn`: Enables glare detection.

Parameter setting method via SDK:
Config = Json.stringify({"CropIdCard":true,"CropPortrait":true})
Parameter setting method via API 3.0 Explorer:
Config = {"CropIdCard":true,"CropPortrait":true}
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
