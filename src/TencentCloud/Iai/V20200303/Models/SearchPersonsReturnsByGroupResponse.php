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
 * SearchPersonsReturnsByGroup response structure.
 *
 * @method integer getPersonNum() Obtain Number of the persons included in searched groups. If the quality of all faces in the input image does not meet the requirement, 0 will be returned.
 * @method void setPersonNum(integer $PersonNum) Set Number of the persons included in searched groups. If the quality of all faces in the input image does not meet the requirement, 0 will be returned.
 * @method array getResultsReturnsByGroup() Obtain Recognition result.
 * @method void setResultsReturnsByGroup(array $ResultsReturnsByGroup) Set Recognition result.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SearchPersonsReturnsByGroupResponse extends AbstractModel
{
    /**
     * @var integer Number of the persons included in searched groups. If the quality of all faces in the input image does not meet the requirement, 0 will be returned.
     */
    public $PersonNum;

    /**
     * @var array Recognition result.
     */
    public $ResultsReturnsByGroup;

    /**
     * @var string Algorithm model version used for face recognition.
     */
    public $FaceModelVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $PersonNum Number of the persons included in searched groups. If the quality of all faces in the input image does not meet the requirement, 0 will be returned.
     * @param array $ResultsReturnsByGroup Recognition result.
     * @param string $FaceModelVersion Algorithm model version used for face recognition.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PersonNum",$param) and $param["PersonNum"] !== null) {
            $this->PersonNum = $param["PersonNum"];
        }

        if (array_key_exists("ResultsReturnsByGroup",$param) and $param["ResultsReturnsByGroup"] !== null) {
            $this->ResultsReturnsByGroup = [];
            foreach ($param["ResultsReturnsByGroup"] as $key => $value){
                $obj = new ResultsReturnsByGroup();
                $obj->deserialize($value);
                array_push($this->ResultsReturnsByGroup, $obj);
            }
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
