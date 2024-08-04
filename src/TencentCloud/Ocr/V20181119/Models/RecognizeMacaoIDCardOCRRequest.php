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
 * RecognizeMacaoIDCardOCR request structure.
 *
 * @method string getImageUrl() Obtain The URL address of the image. 
Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M. The image download takes no more than 3 seconds.Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
 * @method void setImageUrl(string $ImageUrl) Set The URL address of the image. 
Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M. The image download takes no more than 3 seconds.Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
 * @method string getImageBase64() Obtain Base64 value of the image.Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds.
One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method void setImageBase64(string $ImageBase64) Set Base64 value of the image.Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds.
One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
 * @method string getConfig() Obtain The following optional fields are of string type and are empty by default: 
RetImage: whether to return the processed image (base64 encrypted string); the value and meaning of RetImage are as follows: 1.preprocess returns the preprocessed image data 2.portrait Return portrait image data 3."" Do not return image data SDK setting method reference: Config = Json.stringify({"RetImage":"preprocess"}) API 3.0 Explorer setting method reference: Config = {"RetImage":"portrait" }
 * @method void setConfig(string $Config) Set The following optional fields are of string type and are empty by default: 
RetImage: whether to return the processed image (base64 encrypted string); the value and meaning of RetImage are as follows: 1.preprocess returns the preprocessed image data 2.portrait Return portrait image data 3."" Do not return image data SDK setting method reference: Config = Json.stringify({"RetImage":"preprocess"}) API 3.0 Explorer setting method reference: Config = {"RetImage":"portrait" }
 */
class RecognizeMacaoIDCardOCRRequest extends AbstractModel
{
    /**
     * @var string The URL address of the image. 
Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M. The image download takes no more than 3 seconds.Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
     */
    public $ImageUrl;

    /**
     * @var string Base64 value of the image.Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds.
One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     */
    public $ImageBase64;

    /**
     * @var string The following optional fields are of string type and are empty by default: 
RetImage: whether to return the processed image (base64 encrypted string); the value and meaning of RetImage are as follows: 1.preprocess returns the preprocessed image data 2.portrait Return portrait image data 3."" Do not return image data SDK setting method reference: Config = Json.stringify({"RetImage":"preprocess"}) API 3.0 Explorer setting method reference: Config = {"RetImage":"portrait" }
     */
    public $Config;

    /**
     * @param string $ImageUrl The URL address of the image. 
Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M. The image download takes no more than 3 seconds.Storing images in Tencent Cloud URLs can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent.
     * @param string $ImageBase64 Base64 value of the image.Supported image formats: PNG, JPG, JPEG. Not support GIF yet.
Supported image size: The downloaded image should not exceed 7M after Base64 encoding. The image download takes no more than 3 seconds.
One of ImageUrl and ImageBase64 of the image must be provided. If both are provided, only ImageUrl will be used.
     * @param string $Config The following optional fields are of string type and are empty by default: 
RetImage: whether to return the processed image (base64 encrypted string); the value and meaning of RetImage are as follows: 1.preprocess returns the preprocessed image data 2.portrait Return portrait image data 3."" Do not return image data SDK setting method reference: Config = Json.stringify({"RetImage":"preprocess"}) API 3.0 Explorer setting method reference: Config = {"RetImage":"portrait" }
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
