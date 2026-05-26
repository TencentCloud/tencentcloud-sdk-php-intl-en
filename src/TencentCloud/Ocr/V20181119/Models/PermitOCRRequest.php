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
 * PermitOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
 * @method string getImageUrl() Obtain The URL of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time: no more than 3 seconds. We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set The URL of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time: no more than 3 seconds. We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method boolean getCropPortrait() Obtain Whether to return the avatar image. Default is false.
 * @method void setCropPortrait(boolean $CropPortrait) Set Whether to return the avatar image. Default is false.
 */
class PermitOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
     */
    public $ImageBase64;

    /**
     * @var string The URL of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time: no more than 3 seconds. We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var boolean Whether to return the avatar image. Default is false.
     */
    public $CropPortrait;

    /**
     * @param string $ImageBase64 The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
     * @param string $ImageUrl The URL of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: no more than 7M after Base64 encoding. Image download time: no more than 3 seconds. We recommend that you store the image in Tencent Cloud for higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param boolean $CropPortrait Whether to return the avatar image. Default is false.
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
