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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectLiveFace request structure.
 *
 * @method string getImage() Obtain Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats (the aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless).
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method void setImage(string $Image) Set Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats (the aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless).
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method string getUrl() Obtain Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
(The aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless.) 
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method void setUrl(string $Url) Set Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
(The aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless.) 
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method string getFaceModelVersion() Obtain Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
 */
class DetectLiveFaceRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats (the aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless).
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     */
    public $Image;

    /**
     * @var string Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
(The aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless.) 
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     */
    public $Url;

    /**
     * @var string Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
     */
    public $FaceModelVersion;

    /**
     * @param string $Image Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats (the aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless).
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     * @param string $Url Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
(The aspect ratio of the image should be close to 3:4 (width:height); otherwise, the score returned for the image will be meaningless.) 
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     * @param string $FaceModelVersion Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
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
