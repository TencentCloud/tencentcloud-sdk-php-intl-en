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
 * RecognizeDetectCardCoords request structure.
 *
 * @method string getImageUrl() Obtain The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: the downloaded image should be no more than 7M after Base64 encoding. image download time should be no more than 3 seconds. images stored in tencent cloud's urls guarantee higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
 * @method void setImageUrl(string $ImageUrl) Set The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: the downloaded image should be no more than 7M after Base64 encoding. image download time should be no more than 3 seconds. images stored in tencent cloud's urls guarantee higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
 * @method string getImageBase64() Obtain The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after the downloaded image is encoded in Base64. image download time is not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after the downloaded image is encoded in Base64. image download time is not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
 */
class RecognizeDetectCardCoordsRequest extends AbstractModel
{
    /**
     * @var string The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: the downloaded image should be no more than 7M after Base64 encoding. image download time should be no more than 3 seconds. images stored in tencent cloud's urls guarantee higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
     */
    public $ImageUrl;

    /**
     * @var string The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after the downloaded image is encoded in Base64. image download time is not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
     */
    public $ImageBase64;

    /**
     * @param string $ImageUrl The Url of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: the downloaded image should be no more than 7M after Base64 encoding. image download time should be no more than 3 seconds. images stored in tencent cloud's urls guarantee higher download speed and stability. it is recommended to store images in tencent cloud. the speed and stability of non-tencent cloud storage urls may be impacted.
     * @param string $ImageBase64 The Base64 value of the image. supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. supported image size: no more than 7M after the downloaded image is encoded in Base64. image download time is not more than 3 seconds. either ImageUrl or ImageBase64 must be provided. if both are provided, only use ImageUrl.
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }
    }
}
