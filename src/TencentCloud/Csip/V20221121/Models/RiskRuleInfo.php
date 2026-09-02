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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk rule
 *
 * @method string getRuleID() Obtain Risk check item ID
 * @method void setRuleID(string $RuleID) Set Risk check item ID
 * @method string getProvider() Obtain Vendor name
 * @method void setProvider(string $Provider) Set Vendor name
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getRiskTitle() Obtain Risk name
 * @method void setRiskTitle(string $RiskTitle) Set Risk name
 * @method string getCheckType() Obtain Check type
 * @method void setCheckType(string $CheckType) Set Check type
 * @method string getRiskLevel() Obtain Risk level
 * @method void setRiskLevel(string $RiskLevel) Set Risk level
 * @method string getRiskInfluence() Obtain Risk damage
 * @method void setRiskInfluence(string $RiskInfluence) Set Risk damage
 * @method string getRiskFixAdvance() Obtain Risk remediation guide report link
 * @method void setRiskFixAdvance(string $RiskFixAdvance) Set Risk remediation guide report link
 * @method string getDispositionType() Obtain Boundary management and control
 * @method void setDispositionType(string $DispositionType) Set Boundary management and control
 */
class RiskRuleInfo extends AbstractModel
{
    /**
     * @var string Risk check item ID
     */
    public $RuleID;

    /**
     * @var string Vendor name
     */
    public $Provider;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Risk name
     */
    public $RiskTitle;

    /**
     * @var string Check type
     */
    public $CheckType;

    /**
     * @var string Risk level
     */
    public $RiskLevel;

    /**
     * @var string Risk damage
     */
    public $RiskInfluence;

    /**
     * @var string Risk remediation guide report link
     */
    public $RiskFixAdvance;

    /**
     * @var string Boundary management and control
     */
    public $DispositionType;

    /**
     * @param string $RuleID Risk check item ID
     * @param string $Provider Vendor name
     * @param string $InstanceType Instance type
     * @param string $RiskTitle Risk name
     * @param string $CheckType Check type
     * @param string $RiskLevel Risk level
     * @param string $RiskInfluence Risk damage
     * @param string $RiskFixAdvance Risk remediation guide report link
     * @param string $DispositionType Boundary management and control
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskInfluence",$param) and $param["RiskInfluence"] !== null) {
            $this->RiskInfluence = $param["RiskInfluence"];
        }

        if (array_key_exists("RiskFixAdvance",$param) and $param["RiskFixAdvance"] !== null) {
            $this->RiskFixAdvance = $param["RiskFixAdvance"];
        }

        if (array_key_exists("DispositionType",$param) and $param["DispositionType"] !== null) {
            $this->DispositionType = $param["DispositionType"];
        }
    }
}
