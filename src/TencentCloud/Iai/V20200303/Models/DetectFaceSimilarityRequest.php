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
 * DetectFaceSimilarity request structure.
 *
 * @method string getImageA() Obtain A image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method void setImageA(string $ImageA) Set A image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method string getImageB() Obtain B image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method void setImageB(string $ImageB) Set B image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method string getUrlA() Obtain A URL for the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- A The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method void setUrlA(string $UrlA) Set A URL for the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- A The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method string getUrlB() Obtain B The URL of the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- B The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method void setUrlB(string $UrlB) Set B The URL of the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- B The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
 * @method integer getQualityControl() Obtain Image quality control. 
- Value range: 0: No control; 1: Lower quality requirements, the image is very blurry, and the eyes, nose, and mouth cover at least one or more of them; 2: General quality requirements, the image is bright, Dark, blurry or generally blurred, eyebrows covered, cheeks covered, chin covered, at least three of them; 3: High quality requirements, the image may be brighter, darker, generally blurry, eyebrows blocked, cheeks blocked, chin blocked, one or two of them; 4: Very high quality requirements, all dimensions are the best or the most , there is a slight problem in one dimension; default is 0. 
- If the image quality does not meet the requirements, the returned result will prompt that the image quality test does not meet the requirements.
 * @method void setQualityControl(integer $QualityControl) Set Image quality control. 
- Value range: 0: No control; 1: Lower quality requirements, the image is very blurry, and the eyes, nose, and mouth cover at least one or more of them; 2: General quality requirements, the image is bright, Dark, blurry or generally blurred, eyebrows covered, cheeks covered, chin covered, at least three of them; 3: High quality requirements, the image may be brighter, darker, generally blurry, eyebrows blocked, cheeks blocked, chin blocked, one or two of them; 4: Very high quality requirements, all dimensions are the best or the most , there is a slight problem in one dimension; default is 0. 
- If the image quality does not meet the requirements, the returned result will prompt that the image quality test does not meet the requirements.
 */
class DetectFaceSimilarityRequest extends AbstractModel
{
    /**
     * @var string A image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     */
    public $ImageA;

    /**
     * @var string B image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     */
    public $ImageB;

    /**
     * @var string A URL for the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- A The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     */
    public $UrlA;

    /**
     * @var string B The URL of the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- B The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     */
    public $UrlB;

    /**
     * @var integer Image quality control. 
- Value range: 0: No control; 1: Lower quality requirements, the image is very blurry, and the eyes, nose, and mouth cover at least one or more of them; 2: General quality requirements, the image is bright, Dark, blurry or generally blurred, eyebrows covered, cheeks covered, chin covered, at least three of them; 3: High quality requirements, the image may be brighter, darker, generally blurry, eyebrows blocked, cheeks blocked, chin blocked, one or two of them; 4: Very high quality requirements, all dimensions are the best or the most , there is a slight problem in one dimension; default is 0. 
- If the image quality does not meet the requirements, the returned result will prompt that the image quality test does not meet the requirements.
     */
    public $QualityControl;

    /**
     * @param string $ImageA A image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     * @param string $ImageB B image base64 data.
 - The size after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- If the picture contains multiple faces, only the face with the highest confidence is selected. - Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     * @param string $UrlA A URL for the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- A The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     * @param string $UrlB B The URL of the image. 
- The size of the corresponding image after base64 encoding cannot exceed 5M. 
- The long side pixels of jpg format cannot exceed 4000, and the long side pixels of pictures in other formats cannot exceed 2000. The short side of images in all formats must be no less than 64 pixels. 
- B The URL and Image of the picture must be provided. If both are provided, only the Url will be used. 
- Images stored in Tencent Cloud's Url can ensure higher download speed and stability. It is recommended that images be stored in Tencent Cloud. 
- The URL speed and stability of non-Tencent cloud storage may be affected to a certain extent. 
- If the picture contains multiple faces, only the face with the largest face area is selected. 
- Supports PNG, JPG, JPEG, BMP, but does not support GIF images.
     * @param integer $QualityControl Image quality control. 
- Value range: 0: No control; 1: Lower quality requirements, the image is very blurry, and the eyes, nose, and mouth cover at least one or more of them; 2: General quality requirements, the image is bright, Dark, blurry or generally blurred, eyebrows covered, cheeks covered, chin covered, at least three of them; 3: High quality requirements, the image may be brighter, darker, generally blurry, eyebrows blocked, cheeks blocked, chin blocked, one or two of them; 4: Very high quality requirements, all dimensions are the best or the most , there is a slight problem in one dimension; default is 0. 
- If the image quality does not meet the requirements, the returned result will prompt that the image quality test does not meet the requirements.
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
        if (array_key_exists("ImageA",$param) and $param["ImageA"] !== null) {
            $this->ImageA = $param["ImageA"];
        }

        if (array_key_exists("ImageB",$param) and $param["ImageB"] !== null) {
            $this->ImageB = $param["ImageB"];
        }

        if (array_key_exists("UrlA",$param) and $param["UrlA"] !== null) {
            $this->UrlA = $param["UrlA"];
        }

        if (array_key_exists("UrlB",$param) and $param["UrlB"] !== null) {
            $this->UrlB = $param["UrlB"];
        }

        if (array_key_exists("QualityControl",$param) and $param["QualityControl"] !== null) {
            $this->QualityControl = $param["QualityControl"];
        }
    }
}
