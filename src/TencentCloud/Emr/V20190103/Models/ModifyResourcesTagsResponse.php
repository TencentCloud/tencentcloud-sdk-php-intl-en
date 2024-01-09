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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcesTags response structure.
 *
 * @method array getSuccessList() Obtain List of resource IDs with successful modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuccessList(array $SuccessList) Set List of resource IDs with successful modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getFailList() Obtain List of resource IDs with failed modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailList(array $FailList) Set List of resource IDs with failed modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPartSuccessList() Obtain List of resource IDs with partial successful modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPartSuccessList(array $PartSuccessList) Set List of resource IDs with partial successful modification
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getClusterToFlowIdList() Obtain Mapping list of cluster IDs and process IDs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterToFlowIdList(array $ClusterToFlowIdList) Set Mapping list of cluster IDs and process IDs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ModifyResourcesTagsResponse extends AbstractModel
{
    /**
     * @var array List of resource IDs with successful modification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuccessList;

    /**
     * @var array List of resource IDs with failed modification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailList;

    /**
     * @var array List of resource IDs with partial successful modification
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PartSuccessList;

    /**
     * @var array Mapping list of cluster IDs and process IDs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterToFlowIdList;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SuccessList List of resource IDs with successful modification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $FailList List of resource IDs with failed modification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PartSuccessList List of resource IDs with partial successful modification
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ClusterToFlowIdList Mapping list of cluster IDs and process IDs
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SuccessList",$param) and $param["SuccessList"] !== null) {
            $this->SuccessList = $param["SuccessList"];
        }

        if (array_key_exists("FailList",$param) and $param["FailList"] !== null) {
            $this->FailList = $param["FailList"];
        }

        if (array_key_exists("PartSuccessList",$param) and $param["PartSuccessList"] !== null) {
            $this->PartSuccessList = $param["PartSuccessList"];
        }

        if (array_key_exists("ClusterToFlowIdList",$param) and $param["ClusterToFlowIdList"] !== null) {
            $this->ClusterToFlowIdList = [];
            foreach ($param["ClusterToFlowIdList"] as $key => $value){
                $obj = new ClusterIDToFlowID();
                $obj->deserialize($value);
                array_push($this->ClusterToFlowIdList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
