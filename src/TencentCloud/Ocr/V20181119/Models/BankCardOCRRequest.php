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
 * @method string getImageBase64() Obtain Base64-encoded value of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` will be used.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded value of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` will be used.
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
 * @method boolean getRetBorderCutImage() Obtain Whether to return the bank card image data after preprocessing (precise cropping and alignment). Default value: `false`
 * @method void setRetBorderCutImage(boolean $RetBorderCutImage) Set Whether to return the bank card image data after preprocessing (precise cropping and alignment). Default value: `false`
 * @method boolean getRetCardNoImage() Obtain Whether to return the card number image data after slicing. Default value: `false`
 * @method void setRetCardNoImage(boolean $RetCardNoImage) Set Whether to return the card number image data after slicing. Default value: `false`
 * @method boolean getEnableCopyCheck() Obtain Whether to enable photocopy check. If the input image is a bank card photocopy, an alarm will be returned. Default value: `false`
 * @method void setEnableCopyCheck(boolean $EnableCopyCheck) Set Whether to enable photocopy check. If the input image is a bank card photocopy, an alarm will be returned. Default value: `false`
 * @method boolean getEnableReshootCheck() Obtain Whether to enable photograph check. If the input image is a bank card photograph, an alarm will be returned. Default value: `false`
 * @method void setEnableReshootCheck(boolean $EnableReshootCheck) Set Whether to enable photograph check. If the input image is a bank card photograph, an alarm will be returned. Default value: `false`
 * @method boolean getEnableBorderCheck() Obtain Whether to enable obscured border check. If the input image is a bank card with obscured border, an alarm will be returned. Default value: `false`
 * @method void setEnableBorderCheck(boolean $EnableBorderCheck) Set Whether to enable obscured border check. If the input image is a bank card with obscured border, an alarm will be returned. Default value: `false`
 * @method boolean getEnableQualityValue() Obtain Whether to return the image quality value, which measures how clear an image is. Default value: `false`
 * @method void setEnableQualityValue(boolean $EnableQualityValue) Set Whether to return the image quality value, which measures how clear an image is. Default value: `false`
 */
class BankCardOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded value of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` will be used.
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
     * @var boolean Whether to return the bank card image data after preprocessing (precise cropping and alignment). Default value: `false`
     */
    public $RetBorderCutImage;

    /**
     * @var boolean Whether to return the card number image data after slicing. Default value: `false`
     */
    public $RetCardNoImage;

    /**
     * @var boolean Whether to enable photocopy check. If the input image is a bank card photocopy, an alarm will be returned. Default value: `false`
     */
    public $EnableCopyCheck;

    /**
     * @var boolean Whether to enable photograph check. If the input image is a bank card photograph, an alarm will be returned. Default value: `false`
     */
    public $EnableReshootCheck;

    /**
     * @var boolean Whether to enable obscured border check. If the input image is a bank card with obscured border, an alarm will be returned. Default value: `false`
     */
    public $EnableBorderCheck;

    /**
     * @var boolean Whether to return the image quality value, which measures how clear an image is. Default value: `false`
     */
    public $EnableQualityValue;

    /**
     * @param string $ImageBase64 Base64-encoded value of the image. The image cannot exceed 7 MB after being Base64-encoded. A resolution above 500 x 800 is recommended. PNG, JPG, JPEG, and BMP formats are supported. It is recommended that the card part occupy more than 2/3 area of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided. If both are provided, only `ImageUrl` will be used.
     * @param string $ImageUrl URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG. GIF is currently not supported.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     * @param boolean $RetBorderCutImage Whether to return the bank card image data after preprocessing (precise cropping and alignment). Default value: `false`
     * @param boolean $RetCardNoImage Whether to return the card number image data after slicing. Default value: `false`
     * @param boolean $EnableCopyCheck Whether to enable photocopy check. If the input image is a bank card photocopy, an alarm will be returned. Default value: `false`
     * @param boolean $EnableReshootCheck Whether to enable photograph check. If the input image is a bank card photograph, an alarm will be returned. Default value: `false`
     * @param boolean $EnableBorderCheck Whether to enable obscured border check. If the input image is a bank card with obscured border, an alarm will be returned. Default value: `false`
     * @param boolean $EnableQualityValue Whether to return the image quality value, which measures how clear an image is. Default value: `false`
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

        if (array_key_exists("EnableQualityValue",$param) and $param["EnableQualityValue"] !== null) {
            $this->EnableQualityValue = $param["EnableQualityValue"];
        }
    }
}
