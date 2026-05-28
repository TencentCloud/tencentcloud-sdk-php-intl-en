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
 * RecognizeIndonesiaIDCardOCR request structure.
 *
 * @method string getImageBase64() Obtain The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
 * @method void setImageBase64(string $ImageBase64) Set The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
 * @method string getImageUrl() Obtain The Url address of the image. 
Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. 
Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is no more than 3 seconds. 
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be affected.
 * @method void setImageUrl(string $ImageUrl) Set The Url address of the image. 
Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. 
Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is no more than 3 seconds. 
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be affected.
 * @method boolean getReturnHeadImage() Obtain Whether to return the portrait photo.
If selected true, image restrictions are: Image size after encoding must not exceed 5M, jpg format long side pixel cannot exceed 4000, other formats image long edge pixel maximum of 2000. Short side pixel of all format images not less than 64.
Support PNG, jpg, JPEG, BMP, no support for GIF images.
If portrait matting fails, return an empty string.
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Whether to return the portrait photo.
If selected true, image restrictions are: Image size after encoding must not exceed 5M, jpg format long side pixel cannot exceed 4000, other formats image long edge pixel maximum of 2000. Short side pixel of all format images not less than 64.
Support PNG, jpg, JPEG, BMP, no support for GIF images.
If portrait matting fails, return an empty string.
 * @method string getScene() Obtain Scene parameter, default value is V1
Available values:
V1
V2
 * @method void setScene(string $Scene) Set Scene parameter, default value is V1
Available values:
V1
V2
 */
class RecognizeIndonesiaIDCardOCRRequest extends AbstractModel
{
    /**
     * @var string The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
     */
    public $ImageBase64;

    /**
     * @var string The Url address of the image. 
Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. 
Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is no more than 3 seconds. 
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be affected.
     */
    public $ImageUrl;

    /**
     * @var boolean Whether to return the portrait photo.
If selected true, image restrictions are: Image size after encoding must not exceed 5M, jpg format long side pixel cannot exceed 4000, other formats image long edge pixel maximum of 2000. Short side pixel of all format images not less than 64.
Support PNG, jpg, JPEG, BMP, no support for GIF images.
If portrait matting fails, return an empty string.
     */
    public $ReturnHeadImage;

    /**
     * @var string Scene parameter, default value is V1
Available values:
V1
V2
     * @deprecated
     */
    public $Scene;

    /**
     * @param string $ImageBase64 The Base64 value of the image. Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is not more than 3 seconds. Either ImageUrl or ImageBase64 must be provided. If both are provided, only use ImageUrl.
     * @param string $ImageUrl The Url address of the image. 
Supported image formats: PNG, JPG, JPEG. GIF format is not currently supported. 
Supported image size: the downloaded image after Base64 encoding is no more than 7M. Image download time is no more than 3 seconds. 
We recommend that you store the image in Tencent Cloud for higher download speed and stability.
For a non-Tencent Cloud URL, the download speed and stability may be affected.
     * @param boolean $ReturnHeadImage Whether to return the portrait photo.
If selected true, image restrictions are: Image size after encoding must not exceed 5M, jpg format long side pixel cannot exceed 4000, other formats image long edge pixel maximum of 2000. Short side pixel of all format images not less than 64.
Support PNG, jpg, JPEG, BMP, no support for GIF images.
If portrait matting fails, return an empty string.
     * @param string $Scene Scene parameter, default value is V1
Available values:
V1
V2
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

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }
    }
}
