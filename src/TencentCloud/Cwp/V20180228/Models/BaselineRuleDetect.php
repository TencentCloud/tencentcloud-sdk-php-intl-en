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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline rule detection.
 *
 * @method integer getRuleId() Obtain Rule ID
 * @method void setRuleId(integer $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleDesc() Obtain Rule description
 * @method void setRuleDesc(string $RuleDesc) Set Rule description
 * @method integer getItemCount() Obtain Number of associated items.
 * @method void setItemCount(integer $ItemCount) Set Number of associated items.
 * @method integer getHostCount() Obtain Associated hosts
 * @method void setHostCount(integer $HostCount) Set Associated hosts
 * @method string getFirstTime() Obtain First detection time
 * @method void setFirstTime(string $FirstTime) Set First detection time
 * @method string getLastTime() Obtain string
 * @method void setLastTime(string $LastTime) Set string
 * @method integer getDetectStatus() Obtain 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
 * @method void setDetectStatus(integer $DetectStatus) Set 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
 * @method array getItemIds() Obtain Item ID collection.
 * @method void setItemIds(array $ItemIds) Set Item ID collection.
 */
class BaselineRuleDetect extends AbstractModel
{
    /**
     * @var integer Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule description
     */
    public $RuleDesc;

    /**
     * @var integer Number of associated items.
     */
    public $ItemCount;

    /**
     * @var integer Associated hosts
     */
    public $HostCount;

    /**
     * @var string First detection time
     */
    public $FirstTime;

    /**
     * @var string string
     */
    public $LastTime;

    /**
     * @var integer 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
     */
    public $DetectStatus;

    /**
     * @var array Item ID collection.
     */
    public $ItemIds;

    /**
     * @param integer $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param string $RuleDesc Rule description
     * @param integer $ItemCount Number of associated items.
     * @param integer $HostCount Associated hosts
     * @param string $FirstTime First detection time
     * @param string $LastTime string
     * @param integer $DetectStatus 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
     * @param array $ItemIds Item ID collection.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }
    }
}
