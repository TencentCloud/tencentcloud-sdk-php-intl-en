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
 * Specific information of facial feature localization (facial keypoints).
 *
 * @method array getFaceProfile() Obtain 21 points that describe the face contour.
 * @method void setFaceProfile(array $FaceProfile) Set 21 points that describe the face contour.
 * @method array getLeftEye() Obtain 8 points that describe the left eye.
 * @method void setLeftEye(array $LeftEye) Set 8 points that describe the left eye.
 * @method array getRightEye() Obtain 8 points that describe the right eye.
 * @method void setRightEye(array $RightEye) Set 8 points that describe the right eye.
 * @method array getLeftEyeBrow() Obtain 8 points that describe the left eyebrow.
 * @method void setLeftEyeBrow(array $LeftEyeBrow) Set 8 points that describe the left eyebrow.
 * @method array getRightEyeBrow() Obtain 8 points that describe the right eyebrow.
 * @method void setRightEyeBrow(array $RightEyeBrow) Set 8 points that describe the right eyebrow.
 * @method array getMouth() Obtain 22 points that describe the mouth.
 * @method void setMouth(array $Mouth) Set 22 points that describe the mouth.
 * @method array getNose() Obtain 13 points that describe the nose.
 * @method void setNose(array $Nose) Set 13 points that describe the nose.
 * @method array getLeftPupil() Obtain 1 point that describes the left pupil.
 * @method void setLeftPupil(array $LeftPupil) Set 1 point that describes the left pupil.
 * @method array getRightPupil() Obtain 1 point that describes the right pupil.
 * @method void setRightPupil(array $RightPupil) Set 1 point that describes the right pupil.
 */
class FaceShape extends AbstractModel
{
    /**
     * @var array 21 points that describe the face contour.
     */
    public $FaceProfile;

    /**
     * @var array 8 points that describe the left eye.
     */
    public $LeftEye;

    /**
     * @var array 8 points that describe the right eye.
     */
    public $RightEye;

    /**
     * @var array 8 points that describe the left eyebrow.
     */
    public $LeftEyeBrow;

    /**
     * @var array 8 points that describe the right eyebrow.
     */
    public $RightEyeBrow;

    /**
     * @var array 22 points that describe the mouth.
     */
    public $Mouth;

    /**
     * @var array 13 points that describe the nose.
     */
    public $Nose;

    /**
     * @var array 1 point that describes the left pupil.
     */
    public $LeftPupil;

    /**
     * @var array 1 point that describes the right pupil.
     */
    public $RightPupil;

    /**
     * @param array $FaceProfile 21 points that describe the face contour.
     * @param array $LeftEye 8 points that describe the left eye.
     * @param array $RightEye 8 points that describe the right eye.
     * @param array $LeftEyeBrow 8 points that describe the left eyebrow.
     * @param array $RightEyeBrow 8 points that describe the right eyebrow.
     * @param array $Mouth 22 points that describe the mouth.
     * @param array $Nose 13 points that describe the nose.
     * @param array $LeftPupil 1 point that describes the left pupil.
     * @param array $RightPupil 1 point that describes the right pupil.
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
        if (array_key_exists("FaceProfile",$param) and $param["FaceProfile"] !== null) {
            $this->FaceProfile = [];
            foreach ($param["FaceProfile"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->FaceProfile, $obj);
            }
        }

        if (array_key_exists("LeftEye",$param) and $param["LeftEye"] !== null) {
            $this->LeftEye = [];
            foreach ($param["LeftEye"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftEye, $obj);
            }
        }

        if (array_key_exists("RightEye",$param) and $param["RightEye"] !== null) {
            $this->RightEye = [];
            foreach ($param["RightEye"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightEye, $obj);
            }
        }

        if (array_key_exists("LeftEyeBrow",$param) and $param["LeftEyeBrow"] !== null) {
            $this->LeftEyeBrow = [];
            foreach ($param["LeftEyeBrow"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftEyeBrow, $obj);
            }
        }

        if (array_key_exists("RightEyeBrow",$param) and $param["RightEyeBrow"] !== null) {
            $this->RightEyeBrow = [];
            foreach ($param["RightEyeBrow"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightEyeBrow, $obj);
            }
        }

        if (array_key_exists("Mouth",$param) and $param["Mouth"] !== null) {
            $this->Mouth = [];
            foreach ($param["Mouth"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Mouth, $obj);
            }
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = [];
            foreach ($param["Nose"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Nose, $obj);
            }
        }

        if (array_key_exists("LeftPupil",$param) and $param["LeftPupil"] !== null) {
            $this->LeftPupil = [];
            foreach ($param["LeftPupil"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftPupil, $obj);
            }
        }

        if (array_key_exists("RightPupil",$param) and $param["RightPupil"] !== null) {
            $this->RightPupil = [];
            foreach ($param["RightPupil"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightPupil, $obj);
            }
        }
    }
}
