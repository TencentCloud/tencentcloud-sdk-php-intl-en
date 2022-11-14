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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleOverview response structure.
 *
 * @method integer getAllTotal() Obtain Total number of rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAllTotal(integer $AllTotal) Set Total number of rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStrategyNum() Obtain Number of blocking rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStrategyNum(integer $StrategyNum) Set Number of blocking rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStartRuleNum() Obtain Number of enabled rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStartRuleNum(integer $StartRuleNum) Set Number of enabled rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStopRuleNum() Obtain Number of disabled rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStopRuleNum(integer $StopRuleNum) Set Number of disabled rules
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getRemainingNum() Obtain Remaining quota
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRemainingNum(integer $RemainingNum) Set Remaining quota
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRuleOverviewResponse extends AbstractModel
{
    /**
     * @var integer Total number of rules
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AllTotal;

    /**
     * @var integer Number of blocking rules
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StrategyNum;

    /**
     * @var integer Number of enabled rules
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StartRuleNum;

    /**
     * @var integer Number of disabled rules
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $StopRuleNum;

    /**
     * @var integer Remaining quota
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RemainingNum;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AllTotal Total number of rules
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $StrategyNum Number of blocking rules
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $StartRuleNum Number of enabled rules
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $StopRuleNum Number of disabled rules
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $RemainingNum Remaining quota
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("AllTotal",$param) and $param["AllTotal"] !== null) {
            $this->AllTotal = $param["AllTotal"];
        }

        if (array_key_exists("StrategyNum",$param) and $param["StrategyNum"] !== null) {
            $this->StrategyNum = $param["StrategyNum"];
        }

        if (array_key_exists("StartRuleNum",$param) and $param["StartRuleNum"] !== null) {
            $this->StartRuleNum = $param["StartRuleNum"];
        }

        if (array_key_exists("StopRuleNum",$param) and $param["StopRuleNum"] !== null) {
            $this->StopRuleNum = $param["StopRuleNum"];
        }

        if (array_key_exists("RemainingNum",$param) and $param["RemainingNum"] !== null) {
            $this->RemainingNum = $param["RemainingNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
