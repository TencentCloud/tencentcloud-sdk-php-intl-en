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
 * Recognition result of the human face
 *
 * @method array getCandidates() Obtain The most similar candidate identified.
 * @method void setCandidates(array $Candidates) Set The most similar candidate identified.
 * @method FaceRect getFaceRect() Obtain Face bounding box position detected.
 * @method void setFaceRect(FaceRect $FaceRect) Set Face bounding box position detected.
 * @method integer getRetCode() Obtain Status return code of the detected face image.
- 0 indicates normal. 
-1601 indicates the image quality control requirement is not met. At this point, the Candidate content is empty.
 * @method void setRetCode(integer $RetCode) Set Status return code of the detected face image.
- 0 indicates normal. 
-1601 indicates the image quality control requirement is not met. At this point, the Candidate content is empty.
 */
class Result extends AbstractModel
{
    /**
     * @var array The most similar candidate identified.
     */
    public $Candidates;

    /**
     * @var FaceRect Face bounding box position detected.
     */
    public $FaceRect;

    /**
     * @var integer Status return code of the detected face image.
- 0 indicates normal. 
-1601 indicates the image quality control requirement is not met. At this point, the Candidate content is empty.
     */
    public $RetCode;

    /**
     * @param array $Candidates The most similar candidate identified.
     * @param FaceRect $FaceRect Face bounding box position detected.
     * @param integer $RetCode Status return code of the detected face image.
- 0 indicates normal. 
-1601 indicates the image quality control requirement is not met. At this point, the Candidate content is empty.
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
