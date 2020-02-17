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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() Obtain Total number of slow logs
 * @method void setTotalCount(integer $TotalCount) Set Total number of slow logs
 * @method array getInstanceSlowlogDetail() Obtain Slow log details
 * @method void setInstanceSlowlogDetail(array $InstanceSlowlogDetail) Set Slow log details
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeSlowLog response structure.
 */
class DescribeSlowLogResponse extends AbstractModel
{
    /**
     * @var integer Total number of slow logs
     */
    public $TotalCount;

    /**
     * @var array Slow log details
     */
    public $InstanceSlowlogDetail;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Total number of slow logs
     * @param array $InstanceSlowlogDetail Slow log details
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("InstanceSlowlogDetail",$param) and $param["InstanceSlowlogDetail"] !== null) {
            $this->InstanceSlowlogDetail = [];
            foreach ($param["InstanceSlowlogDetail"] as $key => $value){
                $obj = new InstanceSlowlogDetail();
                $obj->deserialize($value);
                array_push($this->InstanceSlowlogDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
