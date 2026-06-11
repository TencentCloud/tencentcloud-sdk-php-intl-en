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
 * Baseline security user policy information
 *
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method integer getRuleCount() Obtain Total number of baseline detection items
 * @method void setRuleCount(integer $RuleCount) Set Total number of baseline detection items
 * @method integer getHostCount() Obtain Number of hosts
 * @method void setHostCount(integer $HostCount) Set Number of hosts
 * @method integer getScanCycle() Obtain Scan cycle
 * @method void setScanCycle(integer $ScanCycle) Set Scan cycle
 * @method string getScanAt() Obtain Scan time
 * @method void setScanAt(string $ScanAt) Set Scan time
 * @method integer getEnabled() Obtain Available or not?
 * @method void setEnabled(integer $Enabled) Set Available or not?
 * @method integer getPassRate() Obtain pass rate
 * @method void setPassRate(integer $PassRate) Set pass rate
 * @method string getCategoryIds() Obtain Baseline ID
 * @method void setCategoryIds(string $CategoryIds) Set Baseline ID
 * @method integer getIsDefault() Obtain Whether a default policy
 * @method void setIsDefault(integer $IsDefault) Set Whether a default policy
 */
class Strategy extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var integer Total number of baseline detection items
     */
    public $RuleCount;

    /**
     * @var integer Number of hosts
     */
    public $HostCount;

    /**
     * @var integer Scan cycle
     */
    public $ScanCycle;

    /**
     * @var string Scan time
     */
    public $ScanAt;

    /**
     * @var integer Available or not?
     */
    public $Enabled;

    /**
     * @var integer pass rate
     */
    public $PassRate;

    /**
     * @var string Baseline ID
     */
    public $CategoryIds;

    /**
     * @var integer Whether a default policy
     */
    public $IsDefault;

    /**
     * @param string $StrategyName Policy name
     * @param integer $StrategyId Policy ID
     * @param integer $RuleCount Total number of baseline detection items
     * @param integer $HostCount Number of hosts
     * @param integer $ScanCycle Scan cycle
     * @param string $ScanAt Scan time
     * @param integer $Enabled Available or not?
     * @param integer $PassRate pass rate
     * @param string $CategoryIds Baseline ID
     * @param integer $IsDefault Whether a default policy
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
