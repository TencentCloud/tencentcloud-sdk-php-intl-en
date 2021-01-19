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
 * BankCardOCR request structure.
 *
 * @method string getImageBase64() Obtain Base64-encoded value of image.
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB in size after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded value of image.
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB in size after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
 * @method string getImageUrl() Obtain URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method boolean getRetBorderCutImage() Obtain 
 * @method void setRetBorderCutImage(boolean $RetBorderCutImage) Set 
 * @method boolean getRetCardNoImage() Obtain 
 * @method void setRetCardNoImage(boolean $RetCardNoImage) Set 
 * @method boolean getEnableCopyCheck() Obtain 
 * @method void setEnableCopyCheck(boolean $EnableCopyCheck) Set 
 * @method boolean getEnableReshootCheck() Obtain 
 * @method void setEnableReshootCheck(boolean $EnableReshootCheck) Set 
 * @method boolean getEnableBorderCheck() Obtain 
 * @method void setEnableBorderCheck(boolean $EnableBorderCheck) Set 
 */
class BankCardOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded value of image.
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB in size after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
     */
    public $ImageBase64;

    /**
     * @var string URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @var boolean 
     */
    public $RetBorderCutImage;

    /**
     * @var boolean 
     */
    public $RetCardNoImage;

    /**
     * @var boolean 
     */
    public $EnableCopyCheck;

    /**
     * @var boolean 
     */
    public $EnableReshootCheck;

    /**
     * @var boolean 
     */
    public $EnableBorderCheck;

    /**
     * @param string $ImageBase64 Base64-encoded value of image.
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB in size after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
     * @param string $ImageUrl URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param boolean $RetBorderCutImage 
     * @param boolean $RetCardNoImage 
     * @param boolean $EnableCopyCheck 
     * @param boolean $EnableReshootCheck 
     * @param boolean $EnableBorderCheck 
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

        if (array_key_exists("RetBorderCutImage",$param) and $param["RetBorderCutImage"] !== null) {
            $this->RetBorderCutImage = $param["RetBorderCutImage"];
        }

        if (array_key_exists("RetCardNoImage",$param) and $param["RetCardNoImage"] !== null) {
            $this->RetCardNoImage = $param["RetCardNoImage"];
        }

        if (array_key_exists("EnableCopyCheck",$param) and $param["EnableCopyCheck"] !== null) {
            $this->EnableCopyCheck = $param["EnableCopyCheck"];
        }

        if (array_key_exists("EnableReshootCheck",$param) and $param["EnableReshootCheck"] !== null) {
            $this->EnableReshootCheck = $param["EnableReshootCheck"];
        }

        if (array_key_exists("EnableBorderCheck",$param) and $param["EnableBorderCheck"] !== null) {
            $this->EnableBorderCheck = $param["EnableBorderCheck"];
        }
    }
}
