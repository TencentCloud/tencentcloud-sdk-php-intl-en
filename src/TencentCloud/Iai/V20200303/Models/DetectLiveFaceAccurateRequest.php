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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectLiveFaceAccurate request structure.
 *
 * @method string getImage() Obtain Specifies the base64 code of the image.
-base64-Encoded size cannot exceed 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image cannot exceed 2000. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
 * @method void setImage(string $Image) Set Specifies the base64 code of the image.
-base64-Encoded size cannot exceed 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image cannot exceed 2000. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
 * @method string getUrl() Obtain Specifies the Url of the image.
-Specifies the maximum size of the corresponding image after base64 encoding is 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image must not exceed 2000.
-Url or Image must be provided. if both are provided, only use Url. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Image storage Url on tencent cloud guarantees higher download speed and stability. it is recommended to store images on tencent cloud. non-tencent cloud storage urls may be impacted in speed and stability.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
 * @method void setUrl(string $Url) Set Specifies the Url of the image.
-Specifies the maximum size of the corresponding image after base64 encoding is 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image must not exceed 2000.
-Url or Image must be provided. if both are provided, only use Url. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Image storage Url on tencent cloud guarantees higher download speed and stability. it is recommended to store images on tencent cloud. non-tencent cloud storage urls may be impacted in speed and stability.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition. Valid value: `3.0`.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition. Valid value: `3.0`.
 */
class DetectLiveFaceAccurateRequest extends AbstractModel
{
    /**
     * @var string Specifies the base64 code of the image.
-base64-Encoded size cannot exceed 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image cannot exceed 2000. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
     */
    public $Image;

    /**
     * @var string Specifies the Url of the image.
-Specifies the maximum size of the corresponding image after base64 encoding is 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image must not exceed 2000.
-Url or Image must be provided. if both are provided, only use Url. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Image storage Url on tencent cloud guarantees higher download speed and stability. it is recommended to store images on tencent cloud. non-tencent cloud storage urls may be impacted in speed and stability.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
     */
    public $Url;

    /**
     * @var string Algorithm model version used for face recognition. Valid value: `3.0`.
     */
    public $FaceModelVersion;

    /**
     * @param string $Image Specifies the base64 code of the image.
-base64-Encoded size cannot exceed 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image cannot exceed 2000. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
     * @param string $Url Specifies the Url of the image.
-Specifies the maximum size of the corresponding image after base64 encoding is 5M.
-The long side pixel of a jpg image must not exceed 4000. the long side pixel of another format image must not exceed 2000.
-Url or Image must be provided. if both are provided, only use Url. 
-Specifies the image aspect ratio should be close to 3:4. mobile phone shooting proportion is best.
-Specifies the human face dimension is greater than 100X100 pixels.
-Image storage Url on tencent cloud guarantees higher download speed and stability. it is recommended to store images on tencent cloud. non-tencent cloud storage urls may be impacted in speed and stability.
-Supported image formats include PNG, JPG, JPEG, and BMP. GIF is not supported.
     * @param string $FaceModelVersion Algorithm model version used for face recognition. Valid value: `3.0`.
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }
    }
}
