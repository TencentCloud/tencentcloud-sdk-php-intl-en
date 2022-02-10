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
 * Face attribute information. According to the types specified in `FaceAttributesType`, the following face attributes will be returned: Age, Beauty, 
Emotion, Eye, Eyebrow, Gender, 
Hair, Hat, Headpose, Mask, Mouth, Moustache, 
Nose, Shape, Skin, Smile, etc.  
If no types are specified in `FaceAttributesType`, the details returned by `FaceDetaiAttributesInfo` will be meaningless.
 *
 * @method integer getAge() Obtain Age. Value range: [0,65], where 65 indicates 65 years old or above. 
If `FaceAttributesType` does not include `Age` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setAge(integer $Age) Set Age. Value range: [0,65], where 65 indicates 65 years old or above. 
If `FaceAttributesType` does not include `Age` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method integer getBeauty() Obtain Beauty score. Value range: [0,100]. 
If `FaceAttributesType` does not include `Beauty` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setBeauty(integer $Beauty) Set Beauty score. Value range: [0,100]. 
If `FaceAttributesType` does not include `Beauty` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getEmotion() Obtain Emotion, including relaxed, happy, surprised, angry, sad, disgusted, and scared. 
The `Type` values of the `AttributeItem` include: 0: relaxed; 1: happy; 2: surprised; 3: angry; 4: sad; 5: disgusted; 6: scared.
If `FaceAttributesType` does not include `Emotion` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setEmotion(AttributeItem $Emotion) Set Emotion, including relaxed, happy, surprised, angry, sad, disgusted, and scared. 
The `Type` values of the `AttributeItem` include: 0: relaxed; 1: happy; 2: surprised; 3: angry; 4: sad; 5: disgusted; 6: scared.
If `FaceAttributesType` does not include `Emotion` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method Eye getEye() Obtain Eye information, including whether glasses are worn, whether eyes are closed, whether the person has double eyelids, and the eye size. 
If `FaceAttributesType` does not include `Eye` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setEye(Eye $Eye) Set Eye information, including whether glasses are worn, whether eyes are closed, whether the person has double eyelids, and the eye size. 
If `FaceAttributesType` does not include `Eye` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method Eyebrow getEyebrow() Obtain Eyebrow information, including whether the eyebrows are thick, curved, or long. 
If `FaceAttributesType` does not include `Eyebrow` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setEyebrow(Eyebrow $Eyebrow) Set Eyebrow information, including whether the eyebrows are thick, curved, or long. 
If `FaceAttributesType` does not include `Eyebrow` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getGender() Obtain Gender information. 
The `Type` values of the `AttributeItem` include: 0: male; 1: female.	
If `FaceAttributesType` does not include `Gender` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setGender(AttributeItem $Gender) Set Gender information. 
The `Type` values of the `AttributeItem` include: 0: male; 1: female.	
If `FaceAttributesType` does not include `Gender` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method Hair getHair() Obtain Hair information, including length, bang, and color. 
If `FaceAttributesType` does not include `Hair` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setHair(Hair $Hair) Set Hair information, including length, bang, and color. 
If `FaceAttributesType` does not include `Hair` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method Hat getHat() Obtain Hat information, including whether a hat is worn, hat style, and hat color. 
If `FaceAttributesType` does not include `Hat` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setHat(Hat $Hat) Set Hat information, including whether a hat is worn, hat style, and hat color. 
If `FaceAttributesType` does not include `Hat` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method HeadPose getHeadPose() Obtain Pose information, including the face pitch, yaw, and roll. 
If `FaceAttributesType` does not include `Headpose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setHeadPose(HeadPose $HeadPose) Set Pose information, including the face pitch, yaw, and roll. 
If `FaceAttributesType` does not include `Headpose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getMask() Obtain Mask information. 
The `Type` values of the `AttributeItem` include: 0: no mask; 1: the mask is worn and does not cover the face; 2: the mask is worn and covers the chin; 3: the mask is worn and covers the mouth; 4: the mask is worn properly.
If `FaceAttributesType` does not include `Mask` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setMask(AttributeItem $Mask) Set Mask information. 
The `Type` values of the `AttributeItem` include: 0: no mask; 1: the mask is worn and does not cover the face; 2: the mask is worn and covers the chin; 3: the mask is worn and covers the mouth; 4: the mask is worn properly.
If `FaceAttributesType` does not include `Mask` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method Mouth getMouth() Obtain Mouth information, including whether the mouth is open and the lip thickness. 
If `FaceAttributesType` does not include `Mouth` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setMouth(Mouth $Mouth) Set Mouth information, including whether the mouth is open and the lip thickness. 
If `FaceAttributesType` does not include `Mouth` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getMoustache() Obtain Beard information.
The `Type` values of the `AttributeItem` include: 0: no beard; 1: beard detected. 
If `FaceAttributesType` does not include `Moustache` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setMoustache(AttributeItem $Moustache) Set Beard information.
The `Type` values of the `AttributeItem` include: 0: no beard; 1: beard detected. 
If `FaceAttributesType` does not include `Moustache` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getNose() Obtain Nose information. 
The `Type` values of the `AttributeItem` include: 0: upturned nose; 1: aquiline nose; 2: general nose; 3: bulbous nose.
If `FaceAttributesType` does not include `Nose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setNose(AttributeItem $Nose) Set Nose information. 
The `Type` values of the `AttributeItem` include: 0: upturned nose; 1: aquiline nose; 2: general nose; 3: bulbous nose.
If `FaceAttributesType` does not include `Nose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getShape() Obtain Face shape information. 
The `Type` values of the `AttributeItem` include: 0: square; 1: triangular; 2: oval; 3: heart-shaped; 4: round.
If `FaceAttributesType` does not include `Shape` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setShape(AttributeItem $Shape) Set Face shape information. 
The `Type` values of the `AttributeItem` include: 0: square; 1: triangular; 2: oval; 3: heart-shaped; 4: round.
If `FaceAttributesType` does not include `Shape` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method AttributeItem getSkin() Obtain Skin color information. 
The `Type` values of the `AttributeItem` include: 0: yellow; 1: brown; 2: black; 3: white.
If `FaceAttributesType` does not include `Skin` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setSkin(AttributeItem $Skin) Set Skin color information. 
The `Type` values of the `AttributeItem` include: 0: yellow; 1: brown; 2: black; 3: white.
If `FaceAttributesType` does not include `Skin` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method integer getSmile() Obtain Smile level. Value range: [0,100]. 
If `FaceAttributesType` does not include `Smile` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 * @method void setSmile(integer $Smile) Set Smile level. Value range: [0,100]. 
If `FaceAttributesType` does not include `Smile` or more than 5 faces are detected, this parameter will still be returned but meaningless.
 */
class FaceDetailAttributesInfo extends AbstractModel
{
    /**
     * @var integer Age. Value range: [0,65], where 65 indicates 65 years old or above. 
If `FaceAttributesType` does not include `Age` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Age;

    /**
     * @var integer Beauty score. Value range: [0,100]. 
If `FaceAttributesType` does not include `Beauty` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Beauty;

    /**
     * @var AttributeItem Emotion, including relaxed, happy, surprised, angry, sad, disgusted, and scared. 
The `Type` values of the `AttributeItem` include: 0: relaxed; 1: happy; 2: surprised; 3: angry; 4: sad; 5: disgusted; 6: scared.
If `FaceAttributesType` does not include `Emotion` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Emotion;

    /**
     * @var Eye Eye information, including whether glasses are worn, whether eyes are closed, whether the person has double eyelids, and the eye size. 
If `FaceAttributesType` does not include `Eye` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Eye;

    /**
     * @var Eyebrow Eyebrow information, including whether the eyebrows are thick, curved, or long. 
If `FaceAttributesType` does not include `Eyebrow` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Eyebrow;

    /**
     * @var AttributeItem Gender information. 
The `Type` values of the `AttributeItem` include: 0: male; 1: female.	
If `FaceAttributesType` does not include `Gender` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Gender;

    /**
     * @var Hair Hair information, including length, bang, and color. 
If `FaceAttributesType` does not include `Hair` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Hair;

    /**
     * @var Hat Hat information, including whether a hat is worn, hat style, and hat color. 
If `FaceAttributesType` does not include `Hat` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Hat;

    /**
     * @var HeadPose Pose information, including the face pitch, yaw, and roll. 
If `FaceAttributesType` does not include `Headpose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $HeadPose;

    /**
     * @var AttributeItem Mask information. 
The `Type` values of the `AttributeItem` include: 0: no mask; 1: the mask is worn and does not cover the face; 2: the mask is worn and covers the chin; 3: the mask is worn and covers the mouth; 4: the mask is worn properly.
If `FaceAttributesType` does not include `Mask` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Mask;

    /**
     * @var Mouth Mouth information, including whether the mouth is open and the lip thickness. 
If `FaceAttributesType` does not include `Mouth` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Mouth;

    /**
     * @var AttributeItem Beard information.
The `Type` values of the `AttributeItem` include: 0: no beard; 1: beard detected. 
If `FaceAttributesType` does not include `Moustache` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Moustache;

    /**
     * @var AttributeItem Nose information. 
The `Type` values of the `AttributeItem` include: 0: upturned nose; 1: aquiline nose; 2: general nose; 3: bulbous nose.
If `FaceAttributesType` does not include `Nose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Nose;

    /**
     * @var AttributeItem Face shape information. 
The `Type` values of the `AttributeItem` include: 0: square; 1: triangular; 2: oval; 3: heart-shaped; 4: round.
If `FaceAttributesType` does not include `Shape` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Shape;

    /**
     * @var AttributeItem Skin color information. 
The `Type` values of the `AttributeItem` include: 0: yellow; 1: brown; 2: black; 3: white.
If `FaceAttributesType` does not include `Skin` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Skin;

    /**
     * @var integer Smile level. Value range: [0,100]. 
If `FaceAttributesType` does not include `Smile` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     */
    public $Smile;

    /**
     * @param integer $Age Age. Value range: [0,65], where 65 indicates 65 years old or above. 
If `FaceAttributesType` does not include `Age` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param integer $Beauty Beauty score. Value range: [0,100]. 
If `FaceAttributesType` does not include `Beauty` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Emotion Emotion, including relaxed, happy, surprised, angry, sad, disgusted, and scared. 
The `Type` values of the `AttributeItem` include: 0: relaxed; 1: happy; 2: surprised; 3: angry; 4: sad; 5: disgusted; 6: scared.
If `FaceAttributesType` does not include `Emotion` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param Eye $Eye Eye information, including whether glasses are worn, whether eyes are closed, whether the person has double eyelids, and the eye size. 
If `FaceAttributesType` does not include `Eye` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param Eyebrow $Eyebrow Eyebrow information, including whether the eyebrows are thick, curved, or long. 
If `FaceAttributesType` does not include `Eyebrow` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Gender Gender information. 
The `Type` values of the `AttributeItem` include: 0: male; 1: female.	
If `FaceAttributesType` does not include `Gender` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param Hair $Hair Hair information, including length, bang, and color. 
If `FaceAttributesType` does not include `Hair` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param Hat $Hat Hat information, including whether a hat is worn, hat style, and hat color. 
If `FaceAttributesType` does not include `Hat` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param HeadPose $HeadPose Pose information, including the face pitch, yaw, and roll. 
If `FaceAttributesType` does not include `Headpose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Mask Mask information. 
The `Type` values of the `AttributeItem` include: 0: no mask; 1: the mask is worn and does not cover the face; 2: the mask is worn and covers the chin; 3: the mask is worn and covers the mouth; 4: the mask is worn properly.
If `FaceAttributesType` does not include `Mask` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param Mouth $Mouth Mouth information, including whether the mouth is open and the lip thickness. 
If `FaceAttributesType` does not include `Mouth` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Moustache Beard information.
The `Type` values of the `AttributeItem` include: 0: no beard; 1: beard detected. 
If `FaceAttributesType` does not include `Moustache` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Nose Nose information. 
The `Type` values of the `AttributeItem` include: 0: upturned nose; 1: aquiline nose; 2: general nose; 3: bulbous nose.
If `FaceAttributesType` does not include `Nose` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Shape Face shape information. 
The `Type` values of the `AttributeItem` include: 0: square; 1: triangular; 2: oval; 3: heart-shaped; 4: round.
If `FaceAttributesType` does not include `Shape` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param AttributeItem $Skin Skin color information. 
The `Type` values of the `AttributeItem` include: 0: yellow; 1: brown; 2: black; 3: white.
If `FaceAttributesType` does not include `Skin` or more than 5 faces are detected, this parameter will still be returned but meaningless.
     * @param integer $Smile Smile level. Value range: [0,100]. 
If `FaceAttributesType` does not include `Smile` or more than 5 faces are detected, this parameter will still be returned but meaningless.
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
        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Beauty",$param) and $param["Beauty"] !== null) {
            $this->Beauty = $param["Beauty"];
        }

        if (array_key_exists("Emotion",$param) and $param["Emotion"] !== null) {
            $this->Emotion = new AttributeItem();
            $this->Emotion->deserialize($param["Emotion"]);
        }

        if (array_key_exists("Eye",$param) and $param["Eye"] !== null) {
            $this->Eye = new Eye();
            $this->Eye->deserialize($param["Eye"]);
        }

        if (array_key_exists("Eyebrow",$param) and $param["Eyebrow"] !== null) {
            $this->Eyebrow = new Eyebrow();
            $this->Eyebrow->deserialize($param["Eyebrow"]);
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = new AttributeItem();
            $this->Gender->deserialize($param["Gender"]);
        }

        if (array_key_exists("Hair",$param) and $param["Hair"] !== null) {
            $this->Hair = new Hair();
            $this->Hair->deserialize($param["Hair"]);
        }

        if (array_key_exists("Hat",$param) and $param["Hat"] !== null) {
            $this->Hat = new Hat();
            $this->Hat->deserialize($param["Hat"]);
        }

        if (array_key_exists("HeadPose",$param) and $param["HeadPose"] !== null) {
            $this->HeadPose = new HeadPose();
            $this->HeadPose->deserialize($param["HeadPose"]);
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = new AttributeItem();
            $this->Mask->deserialize($param["Mask"]);
        }

        if (array_key_exists("Mouth",$param) and $param["Mouth"] !== null) {
            $this->Mouth = new Mouth();
            $this->Mouth->deserialize($param["Mouth"]);
        }

        if (array_key_exists("Moustache",$param) and $param["Moustache"] !== null) {
            $this->Moustache = new AttributeItem();
            $this->Moustache->deserialize($param["Moustache"]);
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = new AttributeItem();
            $this->Nose->deserialize($param["Nose"]);
        }

        if (array_key_exists("Shape",$param) and $param["Shape"] !== null) {
            $this->Shape = new AttributeItem();
            $this->Shape->deserialize($param["Shape"]);
        }

        if (array_key_exists("Skin",$param) and $param["Skin"] !== null) {
            $this->Skin = new AttributeItem();
            $this->Skin->deserialize($param["Skin"]);
        }

        if (array_key_exists("Smile",$param) and $param["Smile"] !== null) {
            $this->Smile = $param["Smile"];
        }
    }
}
