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
 * Face information list.
 *
 * @method integer getX() Obtain Horizontal coordinate of the top-left vertex of the face frame.
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
 * @method void setX(integer $X) Set Horizontal coordinate of the top-left vertex of the face frame.
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
 * @method integer getY() Obtain Vertical coordinate of the top-left vertex of the face frame. 
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
 * @method void setY(integer $Y) Set Vertical coordinate of the top-left vertex of the face frame. 
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
 * @method integer getWidth() Obtain Face frame width.
 * @method void setWidth(integer $Width) Set Face frame width.
 * @method integer getHeight() Obtain Face frame height.
 * @method void setHeight(integer $Height) Set Face frame height.
 * @method FaceAttributesInfo getFaceAttributesInfo() Obtain Face attributes, including gender, age, expression, 
beauty, glass, mask, hair, and pose (pitch, roll, yaw). Valid information will be returned only if `NeedFaceAttributes` is set to 1.
 * @method void setFaceAttributesInfo(FaceAttributesInfo $FaceAttributesInfo) Set Face attributes, including gender, age, expression, 
beauty, glass, mask, hair, and pose (pitch, roll, yaw). Valid information will be returned only if `NeedFaceAttributes` is set to 1.
 * @method FaceQualityInfo getFaceQualityInfo() Obtain Face quality information, including score, sharpness, brightness, and completeness. Valid information will be returned only if `NeedFaceDetection` is set to 1.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaceQualityInfo(FaceQualityInfo $FaceQualityInfo) Set Face quality information, including score, sharpness, brightness, and completeness. Valid information will be returned only if `NeedFaceDetection` is set to 1.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class FaceInfo extends AbstractModel
{
    /**
     * @var integer Horizontal coordinate of the top-left vertex of the face frame.
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
     */
    public $X;

    /**
     * @var integer Vertical coordinate of the top-left vertex of the face frame. 
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
     */
    public $Y;

    /**
     * @var integer Face frame width.
     */
    public $Width;

    /**
     * @var integer Face frame height.
     */
    public $Height;

    /**
     * @var FaceAttributesInfo Face attributes, including gender, age, expression, 
beauty, glass, mask, hair, and pose (pitch, roll, yaw). Valid information will be returned only if `NeedFaceAttributes` is set to 1.
     */
    public $FaceAttributesInfo;

    /**
     * @var FaceQualityInfo Face quality information, including score, sharpness, brightness, and completeness. Valid information will be returned only if `NeedFaceDetection` is set to 1.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaceQualityInfo;

    /**
     * @param integer $X Horizontal coordinate of the top-left vertex of the face frame.
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
     * @param integer $Y Vertical coordinate of the top-left vertex of the face frame. 
The face frame encompasses the facial features and is extended accordingly. If it is larger than the image, the coordinates will be negative. 
If you want to capture a complete face, you can set the negative coordinates to 0 if the `completeness` score meets the requirement.
     * @param integer $Width Face frame width.
     * @param integer $Height Face frame height.
     * @param FaceAttributesInfo $FaceAttributesInfo Face attributes, including gender, age, expression, 
beauty, glass, mask, hair, and pose (pitch, roll, yaw). Valid information will be returned only if `NeedFaceAttributes` is set to 1.
     * @param FaceQualityInfo $FaceQualityInfo Face quality information, including score, sharpness, brightness, and completeness. Valid information will be returned only if `NeedFaceDetection` is set to 1.
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("Y",$param) and $param["Y"] !== null) {
            $this->Y = $param["Y"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FaceAttributesInfo",$param) and $param["FaceAttributesInfo"] !== null) {
            $this->FaceAttributesInfo = new FaceAttributesInfo();
            $this->FaceAttributesInfo->deserialize($param["FaceAttributesInfo"]);
        }

        if (array_key_exists("FaceQualityInfo",$param) and $param["FaceQualityInfo"] !== null) {
            $this->FaceQualityInfo = new FaceQualityInfo();
            $this->FaceQualityInfo->deserialize($param["FaceQualityInfo"]);
        }
    }
}
