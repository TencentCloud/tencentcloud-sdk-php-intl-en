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
 * MLIDCardOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64-encoded value of an image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
 * @method void setImageBase64(string $ImageBase64) Set The Base64-encoded value of an image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
 * @method string getBackImageBase64() Obtain Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method void setBackImageBase64(string $BackImageBase64) Set Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method string getImageUrl() Obtain The URL of an image. (This field is not available outside the Chinese mainland.)
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be low.
 * @method void setImageUrl(string $ImageUrl) Set The URL of an image. (This field is not available outside the Chinese mainland.)
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be low.
 * @method string getBackImageUrl() Obtain The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
 * @method void setBackImageUrl(string $BackImageUrl) Set The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
 * @method boolean getRetImage() Obtain Whether to return an image. Default value: `false`.
 * @method void setRetImage(boolean $RetImage) Set Whether to return an image. Default value: `false`.
 */
class MLIDCardOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64-encoded value of an image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
     */
    public $ImageBase64;

    /**
     * @var string Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     */
    public $BackImageBase64;

    /**
     * @var string The URL of an image. (This field is not available outside the Chinese mainland.)
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be low.
     */
    public $ImageUrl;

    /**
     * @var string The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
     */
    public $BackImageUrl;

    /**
     * @var boolean Whether to return an image. Default value: `false`.
     */
    public $RetImage;

    /**
     * @param string $ImageBase64 The Base64-encoded value of an image.
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
     * @param string $BackImageBase64 Base64 value of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image cannot exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     * @param string $ImageUrl The URL of an image. (This field is not available outside the Chinese mainland.)
Supported image formats: PNG, JPG, and JPEG. GIF is currently not supported.
Supported image size: The downloaded image after Base64 encoding can be up to 7 MB. The download time of the image cannot exceed 3s.
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be low.
     * @param string $BackImageUrl The URL address of the image on the back of the card. Supported image formats: PNG, JPG, JPEG, GIF format is not supported yet. Supported image size: The downloaded image does not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds. Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
     * @param boolean $RetImage Whether to return an image. Default value: `false`.
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

        if (array_key_exists("RetImage",$param) and $param["RetImage"] !== null) {
            $this->RetImage = $param["RetImage"];
        }
    }
}
