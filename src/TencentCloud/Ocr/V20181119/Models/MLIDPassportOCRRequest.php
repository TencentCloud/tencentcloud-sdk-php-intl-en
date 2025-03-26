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
 * MLIDPassportOCR request structure.
 *
 * @method string getImageBase64() Obtain Base64-encoded value of image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 500x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. It is recommended that the card part occupies more than 2/3 area of the image.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded value of image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 500x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. It is recommended that the card part occupies more than 2/3 area of the image.
 * @method boolean getRetImage() Obtain Whether to return an image. 
Default value: false.
 * @method void setRetImage(boolean $RetImage) Set Whether to return an image. 
Default value: false.
 * @method string getImageUrl() Obtain URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG, BMP, PDF.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 * @method void setImageUrl(string $ImageUrl) Set URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG, BMP, PDF.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
 */
class MLIDPassportOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded value of image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 500x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. It is recommended that the card part occupies more than 2/3 area of the image.
     */
    public $ImageBase64;

    /**
     * @var boolean Whether to return an image. 
Default value: false.
     */
    public $RetImage;

    /**
     * @var string URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG, BMP, PDF.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
     */
    public $ImageUrl;

    /**
     * @param string $ImageBase64 Base64-encoded value of image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution above 500x800 is recommended. PNG, JPG, JPEG, BMP, and PDF formats are supported. It is recommended that the card part occupies more than 2/3 area of the image.
     * @param boolean $RetImage Whether to return an image. 
Default value: false.
     * @param string $ImageUrl URL address of image. (This field is not supported outside Chinese mainland)
Supported image formats: PNG, JPG, JPEG, BMP, PDF.
Supported image size: the downloaded image cannot exceed 7 MB after being Base64-encoded. The download time of the image cannot exceed 3 seconds.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability.
The download speed and stability of non-Tencent Cloud URLs may be low.
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

        if (array_key_exists("RetImage",$param) and $param["RetImage"] !== null) {
            $this->RetImage = $param["RetImage"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }
    }
}
