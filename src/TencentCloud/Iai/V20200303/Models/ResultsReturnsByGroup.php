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
 * Recognition result.

 *
 * @method FaceRect getFaceRect() Obtain Position of detected face frame
 * @method void setFaceRect(FaceRect $FaceRect) Set Position of detected face frame
 * @method array getGroupCandidates() Obtain Recognition result.
 * @method void setGroupCandidates(array $GroupCandidates) Set Recognition result.
 * @method integer getRetCode() Obtain Status return code of detected face image. 0: normal. 
-1601: the image quality control requirement is not met; in this case, `Candidate` is empty.
 * @method void setRetCode(integer $RetCode) Set Status return code of detected face image. 0: normal. 
-1601: the image quality control requirement is not met; in this case, `Candidate` is empty.
 */
class ResultsReturnsByGroup extends AbstractModel
{
    /**
     * @var FaceRect Position of detected face frame
     */
    public $FaceRect;

    /**
     * @var array Recognition result.
     */
    public $GroupCandidates;

    /**
     * @var integer Status return code of detected face image. 0: normal. 
-1601: the image quality control requirement is not met; in this case, `Candidate` is empty.
     */
    public $RetCode;

    /**
     * @param FaceRect $FaceRect Position of detected face frame
     * @param array $GroupCandidates Recognition result.
     * @param integer $RetCode Status return code of detected face image. 0: normal. 
-1601: the image quality control requirement is not met; in this case, `Candidate` is empty.
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

        if (array_key_exists("GroupCandidates",$param) and $param["GroupCandidates"] !== null) {
            $this->GroupCandidates = [];
            foreach ($param["GroupCandidates"] as $key => $value){
                $obj = new GroupCandidate();
                $obj->deserialize($value);
                array_push($this->GroupCandidates, $obj);
            }
        }

        if (array_key_exists("RetCode",$param) and $param["RetCode"] !== null) {
            $this->RetCode = $param["RetCode"];
        }
    }
}
