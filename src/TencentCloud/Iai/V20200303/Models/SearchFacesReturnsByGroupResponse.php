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
 * SearchFacesReturnsByGroup response structure.
 *
 * @method integer getFaceNum() Obtain Number of faces included in searched groups.
 * @method void setFaceNum(integer $FaceNum) Set Number of faces included in searched groups.
 * @method array getResultsReturnsByGroup() Obtain Recognition result.
 * @method void setResultsReturnsByGroup(array $ResultsReturnsByGroup) Set Recognition result.
 * @method string getFaceModelVersion() Obtain Algorithm model version used for face recognition.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used for face recognition.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class SearchFacesReturnsByGroupResponse extends AbstractModel
{
    /**
     * @var integer Number of faces included in searched groups.
     */
    public $FaceNum;

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
     * @param integer $FaceNum Number of faces included in searched groups.
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
        if (array_key_exists("FaceNum",$param) and $param["FaceNum"] !== null) {
            $this->FaceNum = $param["FaceNum"];
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
