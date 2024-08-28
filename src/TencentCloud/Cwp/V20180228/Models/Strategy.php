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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline security user policy information
 *
 * @method string getStrategyName() Obtain Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyName(string $StrategyName) Set Policy name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStrategyId() Obtain Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleCount() Obtain Total number of baseline detection items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleCount(integer $RuleCount) Set Total number of baseline detection items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostCount() Obtain Number of Hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostCount(integer $HostCount) Set Number of Hosts
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanCycle() Obtain Scan cycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanCycle(integer $ScanCycle) Set Scan cycle
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanAt() Obtain Scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanAt(string $ScanAt) Set Scan time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnabled() Obtain Available or not?
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnabled(integer $Enabled) Set Available or not?
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPassRate() Obtain Pass rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassRate(integer $PassRate) Set Pass rate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCategoryIds() Obtain Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategoryIds(string $CategoryIds) Set Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsDefault() Obtain Whether a default policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDefault(integer $IsDefault) Set Whether a default policy
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Strategy extends AbstractModel
{
    /**
     * @var string Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyName;

    /**
     * @var integer Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StrategyId;

    /**
     * @var integer Total number of baseline detection items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleCount;

    /**
     * @var integer Number of Hosts
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostCount;

    /**
     * @var integer Scan cycle
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanCycle;

    /**
     * @var string Scan time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanAt;

    /**
     * @var integer Available or not?
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enabled;

    /**
     * @var integer Pass rate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassRate;

    /**
     * @var string Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CategoryIds;

    /**
     * @var integer Whether a default policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDefault;

    /**
     * @param string $StrategyName Policy name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StrategyId Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleCount Total number of baseline detection items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostCount Number of Hosts
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanCycle Scan cycle
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanAt Scan time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Enabled Available or not?
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PassRate Pass rate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CategoryIds Baseline ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsDefault Whether a default policy
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("RuleCount",$param) and $param["RuleCount"] !== null) {
            $this->RuleCount = $param["RuleCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ScanCycle",$param) and $param["ScanCycle"] !== null) {
            $this->ScanCycle = $param["ScanCycle"];
        }

        if (array_key_exists("ScanAt",$param) and $param["ScanAt"] !== null) {
            $this->ScanAt = $param["ScanAt"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
