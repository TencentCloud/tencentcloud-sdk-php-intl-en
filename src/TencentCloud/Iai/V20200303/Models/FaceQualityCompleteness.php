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
 * Completeness of facial features, which assesses the completeness of the eyebrows, eyes, nose, cheeks, mouth, and chin.
 *
 * @method integer getEyebrow() Obtain Eyebrow completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEyebrow(integer $Eyebrow) Set Eyebrow completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getEye() Obtain Eye completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEye(integer $Eye) Set Eye completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNose() Obtain Nose completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,60], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNose(integer $Nose) Set Nose completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,60], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCheek() Obtain Cheek completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCheek(integer $Cheek) Set Cheek completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMouth() Obtain Mouth completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,50], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMouth(integer $Mouth) Set Mouth completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,50], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getChin() Obtain Chin completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setChin(integer $Chin) Set Chin completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class FaceQualityCompleteness extends AbstractModel
{
    /**
     * @var integer Eyebrow completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Eyebrow;

    /**
     * @var integer Eye completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Eye;

    /**
     * @var integer Nose completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,60], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Nose;

    /**
     * @var integer Cheek completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Cheek;

    /**
     * @var integer Mouth completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,50], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Mouth;

    /**
     * @var integer Chin completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Chin;

    /**
     * @param integer $Eyebrow Eyebrow completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Eye Eye completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,80], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Nose Nose completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,60], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Cheek Cheek completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Mouth Mouth completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,50], which means incomplete.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Chin Chin completeness. Value range: [0,100]. The higher the score, the higher the completeness. 
Reference range: [0,70], which means incomplete.
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
        if (array_key_exists("Eyebrow",$param) and $param["Eyebrow"] !== null) {
            $this->Eyebrow = $param["Eyebrow"];
        }

        if (array_key_exists("Eye",$param) and $param["Eye"] !== null) {
            $this->Eye = $param["Eye"];
        }

        if (array_key_exists("Nose",$param) and $param["Nose"] !== null) {
            $this->Nose = $param["Nose"];
        }

        if (array_key_exists("Cheek",$param) and $param["Cheek"] !== null) {
            $this->Cheek = $param["Cheek"];
        }

        if (array_key_exists("Mouth",$param) and $param["Mouth"] !== null) {
            $this->Mouth = $param["Mouth"];
        }

        if (array_key_exists("Chin",$param) and $param["Chin"] !== null) {
            $this->Chin = $param["Chin"];
        }
    }
}
