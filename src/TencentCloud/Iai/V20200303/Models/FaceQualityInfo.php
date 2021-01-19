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
 * Face quality information, including score, sharpness, brightness, and completeness. Valid information will be returned only if `NeedFaceDetection` is set to 1.
 *
 * @method integer getScore() Obtain Quality score. Value range: [0,100]. It comprehensively evaluates whether the image quality is suitable for face recognition; the higher the score, the higher the quality. 
In normal cases, you only need to use `Score` as the overall quality standard score. Specific item scores such as `Sharpness`, `Brightness`, `Completeness` are for reference only.
Reference range: [0,40]: poor; [40,60]: fine; [60,80]: good; [80,100]: excellent. 
We recommend selecting images with a score above 70 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Quality score. Value range: [0,100]. It comprehensively evaluates whether the image quality is suitable for face recognition; the higher the score, the higher the quality. 
In normal cases, you only need to use `Score` as the overall quality standard score. Specific item scores such as `Sharpness`, `Brightness`, `Completeness` are for reference only.
Reference range: [0,40]: poor; [40,60]: fine; [60,80]: good; [80,100]: excellent. 
We recommend selecting images with a score above 70 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSharpness() Obtain Sharpness. Value range: [0,100]. It evaluates the sharpness of the image. The higher the score, the sharper the image. 
Reference range: [0,40]: very blurry; [40,60]: blurry; [60,80]: fine; [80,100]: sharp. 
We recommend selecting images with a score above 80 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSharpness(integer $Sharpness) Set Sharpness. Value range: [0,100]. It evaluates the sharpness of the image. The higher the score, the sharper the image. 
Reference range: [0,40]: very blurry; [40,60]: blurry; [60,80]: fine; [80,100]: sharp. 
We recommend selecting images with a score above 80 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBrightness() Obtain Brightness. Value range: [0,100]. The brighter the image, the higher the score. 
Reference range: [0,30]: dark; [30,70]: normal; [70,100]: bright. 
We recommend selecting images in the [30,70] range for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBrightness(integer $Brightness) Set Brightness. Value range: [0,100]. The brighter the image, the higher the score. 
Reference range: [0,30]: dark; [30,70]: normal; [70,100]: bright. 
We recommend selecting images in the [30,70] range for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method FaceQualityCompleteness getCompleteness() Obtain Completeness of facial features, which assesses the completeness of the eyebrows, eyes, nose, cheeks, mouth, and chin.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCompleteness(FaceQualityCompleteness $Completeness) Set Completeness of facial features, which assesses the completeness of the eyebrows, eyes, nose, cheeks, mouth, and chin.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class FaceQualityInfo extends AbstractModel
{
    /**
     * @var integer Quality score. Value range: [0,100]. It comprehensively evaluates whether the image quality is suitable for face recognition; the higher the score, the higher the quality. 
In normal cases, you only need to use `Score` as the overall quality standard score. Specific item scores such as `Sharpness`, `Brightness`, `Completeness` are for reference only.
Reference range: [0,40]: poor; [40,60]: fine; [60,80]: good; [80,100]: excellent. 
We recommend selecting images with a score above 70 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var integer Sharpness. Value range: [0,100]. It evaluates the sharpness of the image. The higher the score, the sharper the image. 
Reference range: [0,40]: very blurry; [40,60]: blurry; [60,80]: fine; [80,100]: sharp. 
We recommend selecting images with a score above 80 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Sharpness;

    /**
     * @var integer Brightness. Value range: [0,100]. The brighter the image, the higher the score. 
Reference range: [0,30]: dark; [30,70]: normal; [70,100]: bright. 
We recommend selecting images in the [30,70] range for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Brightness;

    /**
     * @var FaceQualityCompleteness Completeness of facial features, which assesses the completeness of the eyebrows, eyes, nose, cheeks, mouth, and chin.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Completeness;

    /**
     * @param integer $Score Quality score. Value range: [0,100]. It comprehensively evaluates whether the image quality is suitable for face recognition; the higher the score, the higher the quality. 
In normal cases, you only need to use `Score` as the overall quality standard score. Specific item scores such as `Sharpness`, `Brightness`, `Completeness` are for reference only.
Reference range: [0,40]: poor; [40,60]: fine; [60,80]: good; [80,100]: excellent. 
We recommend selecting images with a score above 70 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Sharpness Sharpness. Value range: [0,100]. It evaluates the sharpness of the image. The higher the score, the sharper the image. 
Reference range: [0,40]: very blurry; [40,60]: blurry; [60,80]: fine; [80,100]: sharp. 
We recommend selecting images with a score above 80 for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Brightness Brightness. Value range: [0,100]. The brighter the image, the higher the score. 
Reference range: [0,30]: dark; [30,70]: normal; [70,100]: bright. 
We recommend selecting images in the [30,70] range for adding faces.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param FaceQualityCompleteness $Completeness Completeness of facial features, which assesses the completeness of the eyebrows, eyes, nose, cheeks, mouth, and chin.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Sharpness",$param) and $param["Sharpness"] !== null) {
            $this->Sharpness = $param["Sharpness"];
        }

        if (array_key_exists("Brightness",$param) and $param["Brightness"] !== null) {
            $this->Brightness = $param["Brightness"];
        }

        if (array_key_exists("Completeness",$param) and $param["Completeness"] !== null) {
            $this->Completeness = new FaceQualityCompleteness();
            $this->Completeness->deserialize($param["Completeness"]);
        }
    }
}
