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
 * GetPersonGroupInfo response structure.
 *
 * @method array getPersonGroupInfos() Obtain List of groups containing this person and their description fields
 * @method void setPersonGroupInfos(array $PersonGroupInfos) Set List of groups containing this person and their description fields
 * @method integer getGroupNum() Obtain Total number of groups
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupNum(integer $GroupNum) Set Total number of groups
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFaceModelVersion() Obtain Algorithm model version used by the Face Recognition service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used by the Face Recognition service.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetPersonGroupInfoResponse extends AbstractModel
{
    /**
     * @var array List of groups containing this person and their description fields
     */
    public $PersonGroupInfos;

    /**
     * @var integer Total number of groups
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupNum;

    /**
     * @var string Algorithm model version used by the Face Recognition service.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FaceModelVersion;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $PersonGroupInfos List of groups containing this person and their description fields
     * @param integer $GroupNum Total number of groups
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FaceModelVersion Algorithm model version used by the Face Recognition service.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PersonGroupInfos",$param) and $param["PersonGroupInfos"] !== null) {
            $this->PersonGroupInfos = [];
            foreach ($param["PersonGroupInfos"] as $key => $value){
                $obj = new PersonGroupInfo();
                $obj->deserialize($value);
                array_push($this->PersonGroupInfos, $obj);
            }
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
