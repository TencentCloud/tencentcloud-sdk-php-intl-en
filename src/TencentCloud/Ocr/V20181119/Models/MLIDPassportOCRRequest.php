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
 * MLIDPassportOCR request structure.
 *
 * @method string getImageBase64() Obtain Base64-encoded image data. The image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area.
 * @method void setImageBase64(string $ImageBase64) Set Base64-encoded image data. The image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area.
 * @method boolean getRetImage() Obtain Whether to return an image. 
Default value: false.
 * @method void setRetImage(boolean $RetImage) Set Whether to return an image. 
Default value: false.
 * @method string getImageUrl() Obtain URL of the image. The downloaded image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area. Image download must complete within 3 seconds. We recommend storing images in Tencent Cloud for higher download speed and stability. The speed and stability of URLs from non-Tencent Cloud storage may be affected. Note: This field is not supported outside the Chinese mainland region.
 * @method void setImageUrl(string $ImageUrl) Set URL of the image. The downloaded image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area. Image download must complete within 3 seconds. We recommend storing images in Tencent Cloud for higher download speed and stability. The speed and stability of URLs from non-Tencent Cloud storage may be affected. Note: This field is not supported outside the Chinese mainland region.
 */
class MLIDPassportOCRRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded image data. The image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area.
     */
    public $ImageBase64;

    /**
     * @var boolean Whether to return an image. 
Default value: false.
     */
    public $RetImage;

    /**
     * @var string URL of the image. The downloaded image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area. Image download must complete within 3 seconds. We recommend storing images in Tencent Cloud for higher download speed and stability. The speed and stability of URLs from non-Tencent Cloud storage may be affected. Note: This field is not supported outside the Chinese mainland region.
     */
    public $ImageUrl;

    /**
     * @param string $ImageBase64 Base64-encoded image data. The image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area.
     * @param boolean $RetImage Whether to return an image. 
Default value: false.
     * @param string $ImageUrl URL of the image. The downloaded image must be no larger than 7 MB after Base64 encoding. A resolution of at least 500x800 is recommended. Supported image formats: PNG, JPG, JPEG, BMP, and PDF. The document should occupy more than 2/3 of the image area. Image download must complete within 3 seconds. We recommend storing images in Tencent Cloud for higher download speed and stability. The speed and stability of URLs from non-Tencent Cloud storage may be affected. Note: This field is not supported outside the Chinese mainland region.
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
