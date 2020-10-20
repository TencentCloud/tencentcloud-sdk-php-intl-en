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
 * @method FaceRect getFaceRect() Obtain Position of the detected face frame.
 * @method void setFaceRect(FaceRect $FaceRect) Set Position of the detected face frame.
 * @method FaceDetailAttributesInfo getFaceDetailAttributesInfo() Obtain Face attribute information. According to the types specified in `FaceAttributesType`, the following face attributes will be returned: age (Age), beauty score (Beauty), 
emotion (Emotion), eye information (Eye), eyebrow information (Eyebrow), gender (Gender), 
hair information (Hair), hat information (Hat), pose (Headpose), mask information (Mask), mouth information (Mouse), beard information (Moustache), 
nose information (Nose), face shape (Shape), skin color (Skin), and smile information (Smile), etc.  
If no types are specified in `FaceAttributesType`, the detailed items returned by `FaceDetaiAttributesInfo` will be meaningless.
 * @method void setFaceDetailAttributesInfo(FaceDetailAttributesInfo $FaceDetailAttributesInfo) Set Face attribute information. According to the types specified in `FaceAttributesType`, the following face attributes will be returned: age (Age), beauty score (Beauty), 
emotion (Emotion), eye information (Eye), eyebrow information (Eyebrow), gender (Gender), 
hair information (Hair), hat information (Hat), pose (Headpose), mask information (Mask), mouth information (Mouse), beard information (Moustache), 
nose information (Nose), face shape (Shape), skin color (Skin), and smile information (Smile), etc.  
If no types are specified in `FaceAttributesType`, the detailed items returned by `FaceDetaiAttributesInfo` will be meaningless.
 */
class FaceDetailInfo extends AbstractModel
{
    /**
     * @var FaceRect Position of the detected face frame.
     */
    public $FaceRect;

    /**
     * @var FaceDetailAttributesInfo Face attribute information. According to the types specified in `FaceAttributesType`, the following face attributes will be returned: age (Age), beauty score (Beauty), 
emotion (Emotion), eye information (Eye), eyebrow information (Eyebrow), gender (Gender), 
hair information (Hair), hat information (Hat), pose (Headpose), mask information (Mask), mouth information (Mouse), beard information (Moustache), 
nose information (Nose), face shape (Shape), skin color (Skin), and smile information (Smile), etc.  
If no types are specified in `FaceAttributesType`, the detailed items returned by `FaceDetaiAttributesInfo` will be meaningless.
     */
    public $FaceDetailAttributesInfo;

    /**
     * @param FaceRect $FaceRect Position of the detected face frame.
     * @param FaceDetailAttributesInfo $FaceDetailAttributesInfo Face attribute information. According to the types specified in `FaceAttributesType`, the following face attributes will be returned: age (Age), beauty score (Beauty), 
emotion (Emotion), eye information (Eye), eyebrow information (Eyebrow), gender (Gender), 
hair information (Hair), hat information (Hat), pose (Headpose), mask information (Mask), mouth information (Mouse), beard information (Moustache), 
nose information (Nose), face shape (Shape), skin color (Skin), and smile information (Smile), etc.  
If no types are specified in `FaceAttributesType`, the detailed items returned by `FaceDetaiAttributesInfo` will be meaningless.
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
        if (array_key_exists("FaceRect",$param) and $param["FaceRect"] !== null) {
            $this->FaceRect = new FaceRect();
            $this->FaceRect->deserialize($param["FaceRect"]);
        }

        if (array_key_exists("FaceDetailAttributesInfo",$param) and $param["FaceDetailAttributesInfo"] !== null) {
            $this->FaceDetailAttributesInfo = new FaceDetailAttributesInfo();
            $this->FaceDetailAttributesInfo->deserialize($param["FaceDetailAttributesInfo"]);
        }
    }
}
