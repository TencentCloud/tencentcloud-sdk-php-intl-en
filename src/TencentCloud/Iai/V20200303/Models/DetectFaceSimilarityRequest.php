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
 * DetectFaceSimilarity request structure.
 *
 * @method string getImageA() Obtain <p>A base64-encoded image.</p><ul><li>The size after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel must not exceed 2000. The short side pixel for all formats must be greater than or equal to 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP formats. GIF images are not supported.</li></ul>
 * @method void setImageA(string $ImageA) Set <p>A base64-encoded image.</p><ul><li>The size after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel must not exceed 2000. The short side pixel for all formats must be greater than or equal to 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP formats. GIF images are not supported.</li></ul>
 * @method string getImageB() Obtain <p>base64 data of image B.</p><ul><li>The size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP. GIF images are not supported.</li></ul>
 * @method void setImageB(string $ImageB) Set <p>base64 data of image B.</p><ul><li>The size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP. GIF images are not supported.</li></ul>
 * @method string getUrlA() Obtain <p>Url of Image A.</p><ul><li>Size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel for all formats must be not less than 64.</li><li>Either the Url or the Image of picture A must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of URLs not stored in Tencent Cloud may be impacted.</li><li>If the Image contains several faces, only the human face with the maximum area is selected.</li><li>Supports PNG, jpg, jpg, JPEG, BMP. GIF images are not supported.</li></ul>
 * @method void setUrlA(string $UrlA) Set <p>Url of Image A.</p><ul><li>Size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel for all formats must be not less than 64.</li><li>Either the Url or the Image of picture A must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of URLs not stored in Tencent Cloud may be impacted.</li><li>If the Image contains several faces, only the human face with the maximum area is selected.</li><li>Supports PNG, jpg, jpg, JPEG, BMP. GIF images are not supported.</li></ul>
 * @method string getUrlB() Obtain <p>Url of Image B.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. For all formats, the short side pixel must be not less than 64.</li><li>Either the Url or the Image of picture B must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain degree.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method void setUrlB(string $UrlB) Set <p>Url of Image B.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. For all formats, the short side pixel must be not less than 64.</li><li>Either the Url or the Image of picture B must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain degree.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method integer getQualityControl() Obtain <p>Image quality control. </p><ul><li><p>Value ranges from 0 to 4:<br>0: No control;<br>1: Low quality requirement. The image has at least one of the following: super blurry, eye occlusion, nose occlusion, or mouth occlusion;<br>2: Normal quality requirement. The image has at least three of the following: too bright, dark, blurry, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>3: Relatively high quality requirement. The image has one or two of the following: too bright, dark, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>4: High quality requirement. All dimensions are the best or most, with a minor problem in one dimension;<br>Default is 0. </p></li><li><p>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</p></li></ul>
 * @method void setQualityControl(integer $QualityControl) Set <p>Image quality control. </p><ul><li><p>Value ranges from 0 to 4:<br>0: No control;<br>1: Low quality requirement. The image has at least one of the following: super blurry, eye occlusion, nose occlusion, or mouth occlusion;<br>2: Normal quality requirement. The image has at least three of the following: too bright, dark, blurry, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>3: Relatively high quality requirement. The image has one or two of the following: too bright, dark, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>4: High quality requirement. All dimensions are the best or most, with a minor problem in one dimension;<br>Default is 0. </p></li><li><p>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</p></li></ul>
 */
class DetectFaceSimilarityRequest extends AbstractModel
{
    /**
     * @var string <p>A base64-encoded image.</p><ul><li>The size after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel must not exceed 2000. The short side pixel for all formats must be greater than or equal to 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP formats. GIF images are not supported.</li></ul>
     */
    public $ImageA;

    /**
     * @var string <p>base64 data of image B.</p><ul><li>The size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP. GIF images are not supported.</li></ul>
     */
    public $ImageB;

    /**
     * @var string <p>Url of Image A.</p><ul><li>Size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel for all formats must be not less than 64.</li><li>Either the Url or the Image of picture A must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of URLs not stored in Tencent Cloud may be impacted.</li><li>If the Image contains several faces, only the human face with the maximum area is selected.</li><li>Supports PNG, jpg, jpg, JPEG, BMP. GIF images are not supported.</li></ul>
     */
    public $UrlA;

    /**
     * @var string <p>Url of Image B.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. For all formats, the short side pixel must be not less than 64.</li><li>Either the Url or the Image of picture B must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain degree.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     */
    public $UrlB;

    /**
     * @var integer <p>Image quality control. </p><ul><li><p>Value ranges from 0 to 4:<br>0: No control;<br>1: Low quality requirement. The image has at least one of the following: super blurry, eye occlusion, nose occlusion, or mouth occlusion;<br>2: Normal quality requirement. The image has at least three of the following: too bright, dark, blurry, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>3: Relatively high quality requirement. The image has one or two of the following: too bright, dark, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>4: High quality requirement. All dimensions are the best or most, with a minor problem in one dimension;<br>Default is 0. </p></li><li><p>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</p></li></ul>
     */
    public $QualityControl;

    /**
     * @param string $ImageA <p>A base64-encoded image.</p><ul><li>The size after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel must not exceed 2000. The short side pixel for all formats must be greater than or equal to 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP formats. GIF images are not supported.</li></ul>
     * @param string $ImageB <p>base64 data of image B.</p><ul><li>The size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>If the image contains several faces, only the face with the highest confidence degree is selected.</li><li>Supports PNG, jpg, JPEG, and BMP. GIF images are not supported.</li></ul>
     * @param string $UrlA <p>Url of Image A.</p><ul><li>Size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel for all formats must be not less than 64.</li><li>Either the Url or the Image of picture A must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>Speed and stability of URLs not stored in Tencent Cloud may be impacted.</li><li>If the Image contains several faces, only the human face with the maximum area is selected.</li><li>Supports PNG, jpg, jpg, JPEG, BMP. GIF images are not supported.</li></ul>
     * @param string $UrlB <p>Url of Image B.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5 MB.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. For all formats, the short side pixel must be not less than 64.</li><li>Either the Url or the Image of picture B must be provided. If both are provided, only the Url is used.</li><li>URLs of images stored in Tencent Cloud guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain degree.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     * @param integer $QualityControl <p>Image quality control. </p><ul><li><p>Value ranges from 0 to 4:<br>0: No control;<br>1: Low quality requirement. The image has at least one of the following: super blurry, eye occlusion, nose occlusion, or mouth occlusion;<br>2: Normal quality requirement. The image has at least three of the following: too bright, dark, blurry, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>3: Relatively high quality requirement. The image has one or two of the following: too bright, dark, normal blur, eyebrow obstruction, cheek obstruction, or chin obstruction;<br>4: High quality requirement. All dimensions are the best or most, with a minor problem in one dimension;<br>Default is 0. </p></li><li><p>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</p></li></ul>
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
