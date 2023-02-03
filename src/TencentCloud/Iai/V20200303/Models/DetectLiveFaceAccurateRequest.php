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
 * DetectLiveFaceAccurate request structure.
 *
 * @method string getImage() Obtain Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
 * @method void setImage(string $Image) Set Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
 * @method string getUrl() Obtain Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
 * @method void setUrl(string $Url) Set Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition. Valid value: `3.0`.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition. Valid value: `3.0`.
 */
class DetectLiveFaceAccurateRequest extends AbstractModel
{
    /**
     * @var string Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
     */
    public $Image;

    /**
     * @var string Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
     */
    public $Url;

    /**
     * @var string Algorithm model version used for face recognition. Valid value: `3.0`.
     */
    public $FaceModelVersion;

    /**
     * @param string $Image Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
     * @param string $Url Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in .jpg format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used. 
The recommended image aspect ratio is 3:4 (generally, the aspect ratio of images taken by mobile phones).
The face must be greater than 100*100 px in size.
We recommend you store the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. The download speed and stability of non-Tencent Cloud URLs may be low.
Supported image formats are PNG, JPG, JPEG, and BMP. GIF is currently not supported.
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
