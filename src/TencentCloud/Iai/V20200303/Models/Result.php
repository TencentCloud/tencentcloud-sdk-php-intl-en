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
 * Face recognition result
 *
 * @method array getCandidates() Obtain Most matching candidate recognized
 * @method void setCandidates(array $Candidates) Set Most matching candidate recognized
 * @method FaceRect getFaceRect() Obtain Position of detected face frame
 * @method void setFaceRect(FaceRect $FaceRect) Set Position of detected face frame
 * @method integer getRetCode() Obtain The status return code for the face image detected. Valid values: `0` - normal; `-1601` - the image does not meet the quality requirements, in which case `Candidate` is empty; `-1604` - the face similarity is not higher than `FaceMatchThreshold`.
 * @method void setRetCode(integer $RetCode) Set The status return code for the face image detected. Valid values: `0` - normal; `-1601` - the image does not meet the quality requirements, in which case `Candidate` is empty; `-1604` - the face similarity is not higher than `FaceMatchThreshold`.
 */
class Result extends AbstractModel
{
    /**
     * @var array Most matching candidate recognized
     */
    public $Candidates;

    /**
     * @var FaceRect Position of detected face frame
     */
    public $FaceRect;

    /**
     * @var integer The status return code for the face image detected. Valid values: `0` - normal; `-1601` - the image does not meet the quality requirements, in which case `Candidate` is empty; `-1604` - the face similarity is not higher than `FaceMatchThreshold`.
     */
    public $RetCode;

    /**
     * @param array $Candidates Most matching candidate recognized
     * @param FaceRect $FaceRect Position of detected face frame
     * @param integer $RetCode The status return code for the face image detected. Valid values: `0` - normal; `-1601` - the image does not meet the quality requirements, in which case `Candidate` is empty; `-1604` - the face similarity is not higher than `FaceMatchThreshold`.
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
        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = [];
            foreach ($param["Candidates"] as $key => $value){
                $obj = new Candidate();
                $obj->deserialize($value);
                array_push($this->Candidates, $obj);
            }
        }

        if (array_key_exists("FaceRect",$param) and $param["FaceRect"] !== null) {
            $this->FaceRect = new FaceRect();
            $this->FaceRect->deserialize($param["FaceRect"]);
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }
    }
}
