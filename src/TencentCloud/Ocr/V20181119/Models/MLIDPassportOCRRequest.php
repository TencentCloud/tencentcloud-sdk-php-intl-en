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
 * @method string getImageBase64() Obtain Base64-encoded value of the image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution of 500x800 or above is recommended. Supported formats include PNG, JPG, JPEG, and BMP. It is recommended that the card part occupies more than 2/3 of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded value of the image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution of 500x800 or above is recommended. Supported formats include PNG, JPG, JPEG, and BMP. It is recommended that the card part occupies more than 2/3 of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
 * @method boolean getRetImage() Obtain Whether to return an image
 * @method void setRetImage(boolean $RetImage) Set Whether to return an image
 */
class MLIDPassportOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded value of the image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution of 500x800 or above is recommended. Supported formats include PNG, JPG, JPEG, and BMP. It is recommended that the card part occupies more than 2/3 of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
     */
    public $ImageBase64;

    /**
     * @var boolean Whether to return an image
     */
    public $RetImage;

    /**
     * @param string $ImageBase64 Base64-encoded value of the image. The image cannot exceed 7 MB in size after being Base64-encoded. A resolution of 500x800 or above is recommended. Supported formats include PNG, JPG, JPEG, and BMP. It is recommended that the card part occupies more than 2/3 of the image.
Either the `ImageUrl` or `ImageBase64` of the image must be provided; if both are provided, only `ImageUrl` will be used.
     * @param boolean $RetImage Whether to return an image
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
    }
}
