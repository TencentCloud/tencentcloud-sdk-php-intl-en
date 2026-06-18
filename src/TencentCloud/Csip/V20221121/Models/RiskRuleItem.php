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
 * risk rule
 *
 * @method string getItemId() Obtain Risk Check Item ID
 * @method void setItemId(string $ItemId) Set Risk Check Item ID
 * @method string getProvider() Obtain Cloud vendor name
 * @method void setProvider(string $Provider) Set Cloud vendor name
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getInstanceName() Obtain Instance Type Name
 * @method void setInstanceName(string $InstanceName) Set Instance Type Name
 * @method string getRiskTitle() Obtain risk name
 * @method void setRiskTitle(string $RiskTitle) Set risk name
 * @method string getCheckType() Obtain Check type
 * @method void setCheckType(string $CheckType) Set Check type
 * @method string getSeverity() Obtain Risk level
 * @method void setSeverity(string $Severity) Set Risk level
 * @method string getRiskInfluence() Obtain Risk damage
 * @method void setRiskInfluence(string $RiskInfluence) Set Risk damage
 */
class RiskRuleItem extends AbstractModel
{
    /**
     * @var string Risk Check Item ID
     */
    public $ItemId;

    /**
     * @var string Cloud vendor name
     */
    public $Provider;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Instance Type Name
     */
    public $InstanceName;

    /**
     * @var string risk name
     */
    public $RiskTitle;

    /**
     * @var string Check type
     */
    public $CheckType;

    /**
     * @var string Risk level
     */
    public $Severity;

    /**
     * @var string Risk damage
     */
    public $RiskInfluence;

    /**
     * @param string $ItemId Risk Check Item ID
     * @param string $Provider Cloud vendor name
     * @param string $InstanceType Instance type
     * @param string $InstanceName Instance Type Name
     * @param string $RiskTitle risk name
     * @param string $CheckType Check type
     * @param string $Severity Risk level
     * @param string $RiskInfluence Risk damage
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RiskTitle",$param) and $param["RiskTitle"] !== null) {
            $this->RiskTitle = $param["RiskTitle"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("RiskInfluence",$param) and $param["RiskInfluence"] !== null) {
            $this->RiskInfluence = $param["RiskInfluence"];
        }
    }
}
