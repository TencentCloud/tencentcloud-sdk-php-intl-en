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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAutoAuthorizedRule response structure.
 *
 * @method integer getIsEnabled() Obtain Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
 * @method void setIsEnabled(integer $IsEnabled) Set Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
 * @method string getRangeType() Obtain Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRangeType(string $RangeType) Set Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostCount() Obtain Number of servers when the scope is `MANUAL`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostCount(integer $HostCount) Set Number of servers when the scope is `MANUAL`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxDailyCount() Obtain Maximum number of image licenses per day. `0`: Unlimited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxDailyCount(integer $MaxDailyCount) Set Maximum number of image licenses per day. `0`: Unlimited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Rule ID, which is `0` if not specified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID, which is `0` if not specified.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeImageAutoAuthorizedRuleResponse extends AbstractModel
{
    /**
     * @var integer Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
     */
    public $IsEnabled;

    /**
     * @var string Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RangeType;

    /**
     * @var integer Number of servers when the scope is `MANUAL`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostCount;

    /**
     * @var integer Maximum number of image licenses per day. `0`: Unlimited.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxDailyCount;

    /**
     * @var integer Rule ID, which is `0` if not specified.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $IsEnabled Whether the rule takes effect. Valid values: `0` (no); `1` (yes).
     * @param string $RangeType Scope. Valid values: `MANUAL` (specified servers); `ALL` (all images).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostCount Number of servers when the scope is `MANUAL`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxDailyCount Maximum number of image licenses per day. `0`: Unlimited.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule ID, which is `0` if not specified.
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("MaxDailyCount",$param) and $param["MaxDailyCount"] !== null) {
            $this->MaxDailyCount = $param["MaxDailyCount"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
