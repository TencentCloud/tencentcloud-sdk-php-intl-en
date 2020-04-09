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
 * DescribeInstances response structure.
 *
 * @method integer getTotalCnt() Obtain Number of eligible instances.
 * @method void setTotalCnt(integer $TotalCnt) Set Number of eligible instances.
 * @method array getClusterList() Obtain List of EMR instance details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterList(array $ClusterList) Set List of EMR instance details.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTagKeys() Obtain List of tag keys associated to an instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTagKeys(array $TagKeys) Set List of tag keys associated to an instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeInstancesResponse extends AbstractModel
{
    /**
     * @var integer Number of eligible instances.
     */
    public $TotalCnt;

    /**
     * @var array List of EMR instance details.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterList;

    /**
     * @var array List of tag keys associated to an instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TagKeys;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt Number of eligible instances.
     * @param array $ClusterList List of EMR instance details.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TagKeys List of tag keys associated to an instance.
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("ClusterList",$param) and $param["ClusterList"] !== null) {
            $this->ClusterList = [];
            foreach ($param["ClusterList"] as $key => $value){
                $obj = new ClusterInstancesInfo();
                $obj->deserialize($value);
                array_push($this->ClusterList, $obj);
            }
        }

        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
