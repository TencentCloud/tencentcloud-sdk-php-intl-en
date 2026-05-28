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
 * RecognizeBrazilCommonOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: no more than 3 seconds.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: no more than 3 seconds.
 * @method string getImageUrl() Obtain The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is advisable to store images in tencent cloud. urls not stored in tencent cloud may possibly be impacted in speed and stability.
 * @method void setImageUrl(string $ImageUrl) Set The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is advisable to store images in tencent cloud. urls not stored in tencent cloud may possibly be impacted in speed and stability.
 * @method string getBackImageBase64() Obtain The Base64 value of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
 * @method void setBackImageBase64(string $BackImageBase64) Set The Base64 value of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
 * @method string getBackImageUrl() Obtain The Url address of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is recommended to store images in tencent cloud. speed and stability of non-tencent cloud storage urls may be impacted.
 * @method void setBackImageUrl(string $BackImageUrl) Set The Url address of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is recommended to store images in tencent cloud. speed and stability of non-tencent cloud storage urls may be impacted.
 * @method boolean getReturnHeadImage() Obtain Specifies whether to return the portrait photo.
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Specifies whether to return the portrait photo.
 */
class RecognizeBrazilCommonOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: no more than 3 seconds.
     */
    public $ImageBase64;

    /**
     * @var string The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is advisable to store images in tencent cloud. urls not stored in tencent cloud may possibly be impacted in speed and stability.
     */
    public $ImageUrl;

    /**
     * @var string The Base64 value of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
     */
    public $BackImageBase64;

    /**
     * @var string The Url address of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is recommended to store images in tencent cloud. speed and stability of non-tencent cloud storage urls may be impacted.
     */
    public $BackImageUrl;

    /**
     * @var boolean Specifies whether to return the portrait photo.
     */
    public $ReturnHeadImage;

    /**
     * @param string $ImageBase64 The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: no more than 3 seconds.
     * @param string $ImageUrl The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is advisable to store images in tencent cloud. urls not stored in tencent cloud may possibly be impacted in speed and stability.
     * @param string $BackImageBase64 The Base64 value of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after encoding. image download time: not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
     * @param string $BackImageUrl The Url address of the back side of the card. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after Base64 encoding. image download time is no more than 3 seconds. urls stored in tencent cloud guarantee higher download speed and stability. it is recommended to store images in tencent cloud. speed and stability of non-tencent cloud storage urls may be impacted.
     * @param boolean $ReturnHeadImage Specifies whether to return the portrait photo.
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
