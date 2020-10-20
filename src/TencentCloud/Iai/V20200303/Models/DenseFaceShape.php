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
 * Dense keypoint details
 *
 * @method integer getX() Obtain X-coordinate of the top-left vertex of the face frame.
 * @method void setX(integer $X) Set X-coordinate of the top-left vertex of the face frame.
 * @method integer getY() Obtain Y-coordinate of the top-left vertex of the face frame.
 * @method void setY(integer $Y) Set Y-coordinate of the top-left vertex of the face frame.
 * @method integer getWidth() Obtain Face frame width.
 * @method void setWidth(integer $Width) Set Face frame width.
 * @method integer getHeight() Obtain Face frame height.
 * @method void setHeight(integer $Height) Set Face frame height.
 * @method array getLeftEye() Obtain XX points that outline the left eye.
 * @method void setLeftEye(array $LeftEye) Set XX points that outline the left eye.
 * @method array getRightEye() Obtain XX points that outline the right eye.
 * @method void setRightEye(array $RightEye) Set XX points that outline the right eye.
 * @method array getLeftEyeBrow() Obtain XX points that outline the left eyebrow.
 * @method void setLeftEyeBrow(array $LeftEyeBrow) Set XX points that outline the left eyebrow.
 * @method array getRightEyeBrow() Obtain XX points that outline the right eyebrow.
 * @method void setRightEyeBrow(array $RightEyeBrow) Set XX points that outline the right eyebrow.
 * @method array getMouthOutside() Obtain XX points that outline the outer contour of the mouth, which are returned from left anticlockwise.
 * @method void setMouthOutside(array $MouthOutside) Set XX points that outline the outer contour of the mouth, which are returned from left anticlockwise.
 * @method array getMouthInside() Obtain XX points that outline the inner contour of the mouth, which are returned from left anticlockwise.
 * @method void setMouthInside(array $MouthInside) Set XX points that outline the inner contour of the mouth, which are returned from left anticlockwise.
 * @method array getNose() Obtain XX points that outline the nose.
 * @method void setNose(array $Nose) Set XX points that outline the nose.
 * @method array getLeftPupil() Obtain XX points that outline the left pupil.
 * @method void setLeftPupil(array $LeftPupil) Set XX points that outline the left pupil.
 * @method array getRightPupil() Obtain XX points that outline the right pupil.
 * @method void setRightPupil(array $RightPupil) Set XX points that outline the right pupil.
 * @method array getCentralAxis() Obtain XX points that outline the midline.
 * @method void setCentralAxis(array $CentralAxis) Set XX points that outline the midline.
 * @method array getChin() Obtain XX points that outline the chin.
 * @method void setChin(array $Chin) Set XX points that outline the chin.
 * @method array getLeftEyeBags() Obtain XX points that outline the left eye bag.
 * @method void setLeftEyeBags(array $LeftEyeBags) Set XX points that outline the left eye bag.
 * @method array getRightEyeBags() Obtain XX points that outline the right eye bag.
 * @method void setRightEyeBags(array $RightEyeBags) Set XX points that outline the right eye bag.
 * @method array getForehead() Obtain XX points that outline the forehead.
 * @method void setForehead(array $Forehead) Set XX points that outline the forehead.
 */
class DenseFaceShape extends AbstractModel
{
    /**
     * @var integer X-coordinate of the top-left vertex of the face frame.
     */
    public $X;

    /**
     * @var integer Y-coordinate of the top-left vertex of the face frame.
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
     * @var array XX points that outline the left eye.
     */
    public $LeftEye;

    /**
     * @var array XX points that outline the right eye.
     */
    public $RightEye;

    /**
     * @var array XX points that outline the left eyebrow.
     */
    public $LeftEyeBrow;

    /**
     * @var array XX points that outline the right eyebrow.
     */
    public $RightEyeBrow;

    /**
     * @var array XX points that outline the outer contour of the mouth, which are returned from left anticlockwise.
     */
    public $MouthOutside;

    /**
     * @var array XX points that outline the inner contour of the mouth, which are returned from left anticlockwise.
     */
    public $MouthInside;

    /**
     * @var array XX points that outline the nose.
     */
    public $Nose;

    /**
     * @var array XX points that outline the left pupil.
     */
    public $LeftPupil;

    /**
     * @var array XX points that outline the right pupil.
     */
    public $RightPupil;

    /**
     * @var array XX points that outline the midline.
     */
    public $CentralAxis;

    /**
     * @var array XX points that outline the chin.
     */
    public $Chin;

    /**
     * @var array XX points that outline the left eye bag.
     */
    public $LeftEyeBags;

    /**
     * @var array XX points that outline the right eye bag.
     */
    public $RightEyeBags;

    /**
     * @var array XX points that outline the forehead.
     */
    public $Forehead;

    /**
     * @param integer $X X-coordinate of the top-left vertex of the face frame.
     * @param integer $Y Y-coordinate of the top-left vertex of the face frame.
     * @param integer $Width Face frame width.
     * @param integer $Height Face frame height.
     * @param array $LeftEye XX points that outline the left eye.
     * @param array $RightEye XX points that outline the right eye.
     * @param array $LeftEyeBrow XX points that outline the left eyebrow.
     * @param array $RightEyeBrow XX points that outline the right eyebrow.
     * @param array $MouthOutside XX points that outline the outer contour of the mouth, which are returned from left anticlockwise.
     * @param array $MouthInside XX points that outline the inner contour of the mouth, which are returned from left anticlockwise.
     * @param array $Nose XX points that outline the nose.
     * @param array $LeftPupil XX points that outline the left pupil.
     * @param array $RightPupil XX points that outline the right pupil.
     * @param array $CentralAxis XX points that outline the midline.
     * @param array $Chin XX points that outline the chin.
     * @param array $LeftEyeBags XX points that outline the left eye bag.
     * @param array $RightEyeBags XX points that outline the right eye bag.
     * @param array $Forehead XX points that outline the forehead.
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

        if (array_key_exists("MouthOutside",$param) and $param["MouthOutside"] !== null) {
            $this->MouthOutside = [];
            foreach ($param["MouthOutside"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->MouthOutside, $obj);
            }
        }

        if (array_key_exists("MouthInside",$param) and $param["MouthInside"] !== null) {
            $this->MouthInside = [];
            foreach ($param["MouthInside"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->MouthInside, $obj);
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

        if (array_key_exists("CentralAxis",$param) and $param["CentralAxis"] !== null) {
            $this->CentralAxis = [];
            foreach ($param["CentralAxis"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->CentralAxis, $obj);
            }
        }

        if (array_key_exists("Chin",$param) and $param["Chin"] !== null) {
            $this->Chin = [];
            foreach ($param["Chin"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Chin, $obj);
            }
        }

        if (array_key_exists("LeftEyeBags",$param) and $param["LeftEyeBags"] !== null) {
            $this->LeftEyeBags = [];
            foreach ($param["LeftEyeBags"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->LeftEyeBags, $obj);
            }
        }

        if (array_key_exists("RightEyeBags",$param) and $param["RightEyeBags"] !== null) {
            $this->RightEyeBags = [];
            foreach ($param["RightEyeBags"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->RightEyeBags, $obj);
            }
        }

        if (array_key_exists("Forehead",$param) and $param["Forehead"] !== null) {
            $this->Forehead = [];
            foreach ($param["Forehead"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Forehead, $obj);
            }
        }
    }
}
