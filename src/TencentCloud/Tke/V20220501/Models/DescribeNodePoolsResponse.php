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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodePools response structure.
 *
 * @method array getNodePools() Obtain Node pool list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodePools(array $NodePools) Set Node pool list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getTotalCount() Obtain Total resources
 * @method void setTotalCount(integer $TotalCount) Set Total resources
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeNodePoolsResponse extends AbstractModel
{
    /**
     * @var array Node pool list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodePools;

    /**
     * @var integer Total resources
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $NodePools Node pool list
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $TotalCount Total resources
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("NodePools",$param) and $param["NodePools"] !== null) {
            $this->NodePools = [];
            foreach ($param["NodePools"] as $key => $value){
                $obj = new NodePool();
                $obj->deserialize($value);
                array_push($this->NodePools, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
