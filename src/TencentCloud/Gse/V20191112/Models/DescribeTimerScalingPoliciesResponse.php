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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimerScalingPolicies response structure.
 *
 * @method array getTimerScalingPolicies() Obtain Configuration of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setTimerScalingPolicies(array $TimerScalingPolicies) Set Configuration of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getTotalCount() Obtain Total number of scheduled scaling policies
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTotalCount(integer $TotalCount) Set Total number of scheduled scaling policies
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTimerScalingPoliciesResponse extends AbstractModel
{
    /**
     * @var array Configuration of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $TimerScalingPolicies;

    /**
     * @var integer Total number of scheduled scaling policies
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $TimerScalingPolicies Configuration of the scheduled scaling policy
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $TotalCount Total number of scheduled scaling policies
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("TimerScalingPolicies",$param) and $param["TimerScalingPolicies"] !== null) {
            $this->TimerScalingPolicies = [];
            foreach ($param["TimerScalingPolicies"] as $key => $value){
                $obj = new TimerScalingPolicy();
                $obj->deserialize($value);
                array_push($this->TimerScalingPolicies, $obj);
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
