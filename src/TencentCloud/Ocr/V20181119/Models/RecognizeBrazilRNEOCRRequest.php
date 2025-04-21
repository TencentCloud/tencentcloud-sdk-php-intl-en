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
 * RecognizeBrazilRNEOCR request structure.
 *
 * @method string getImageBase64() Obtain Base64 value of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image downloading time should not exceed 3 seconds.
 * @method void setImageBase64(string $ImageBase64) Set Base64 value of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image downloading time should not exceed 3 seconds.
 * @method string getImageUrl() Obtain URL address of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. URLs of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.
 * @method void setImageUrl(string $ImageUrl) Set URL address of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. URLs of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.
 * @method string getBackImageBase64() Obtain Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. An ImageUrl and ImageBase64 must be provided. If both are provided, only ImageUrl will be used.
 * @method void setBackImageBase64(string $BackImageBase64) Set Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. An ImageUrl and ImageBase64 must be provided. If both are provided, only ImageUrl will be used.
 * @method string getBackImageUrl() Obtain The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download time does not exceed 3 seconds. The URL of the image stored in Tencent Cloud can ensure higher download speed and stability. It is recommended to store the image in Tencent Cloud. The speed and stability of the URL stored outside Tencent Cloud may be affected to a certain extent.
 * @method void setBackImageUrl(string $BackImageUrl) Set The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download time does not exceed 3 seconds. The URL of the image stored in Tencent Cloud can ensure higher download speed and stability. It is recommended to store the image in Tencent Cloud. The speed and stability of the URL stored outside Tencent Cloud may be affected to a certain extent.
 * @method boolean getReturnHeadImage() Obtain Whether to return portrait photos.
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Whether to return portrait photos.
 */
class RecognizeBrazilRNEOCRRequest extends AbstractModel
{
    /**
     * @var string Base64 value of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image downloading time should not exceed 3 seconds.
     */
    public $ImageBase64;

    /**
     * @var string URL address of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. URLs of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.
     */
    public $ImageUrl;

    /**
     * @var string Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. An ImageUrl and ImageBase64 must be provided. If both are provided, only ImageUrl will be used.
     */
    public $BackImageBase64;

    /**
     * @var string The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download time does not exceed 3 seconds. The URL of the image stored in Tencent Cloud can ensure higher download speed and stability. It is recommended to store the image in Tencent Cloud. The speed and stability of the URL stored outside Tencent Cloud may be affected to a certain extent.
     */
    public $BackImageUrl;

    /**
     * @var boolean Whether to return portrait photos.
     */
    public $ReturnHeadImage;

    /**
     * @param string $ImageBase64 Base64 value of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image downloading time should not exceed 3 seconds.
     * @param string $ImageUrl URL address of the image. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. URLs of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.
     * @param string $BackImageBase64 Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image should not exceed 7M after Base64 encoding. Image download time should not exceed 3 seconds. An ImageUrl and ImageBase64 must be provided. If both are provided, only ImageUrl will be used.
     * @param string $BackImageUrl The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download time does not exceed 3 seconds. The URL of the image stored in Tencent Cloud can ensure higher download speed and stability. It is recommended to store the image in Tencent Cloud. The speed and stability of the URL stored outside Tencent Cloud may be affected to a certain extent.
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

        if (array_key_exists("BackImageBase64",$param) and $param["BackImageBase64"] !== null) {
            $this->BackImageBase64 = $param["BackImageBase64"];
        }

        if (array_key_exists("BackImageUrl",$param) and $param["BackImageUrl"] !== null) {
            $this->BackImageUrl = $param["BackImageUrl"];
        }

        if (array_key_exists("ReturnHeadImage",$param) and $param["ReturnHeadImage"] !== null) {
            $this->ReturnHeadImage = $param["ReturnHeadImage"];
        }
    }
}
