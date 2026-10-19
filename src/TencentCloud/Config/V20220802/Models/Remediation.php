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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Remediation settings.
 *
 * @method string getRemediationTemplateId() Obtain Remediation template ID.
 * @method void setRemediationTemplateId(string $RemediationTemplateId) Set Remediation template ID.
 * @method string getRemediationId() Obtain Remediation settings ID.
 * @method void setRemediationId(string $RemediationId) Set Remediation settings ID.
 * @method string getRemediationSourceType() Obtain Template source for executing remediation.
 * @method void setRemediationSourceType(string $RemediationSourceType) Set Template source for executing remediation.
 * @method string getRemediationType() Obtain Correction type. Valid values:
SCF: Function Compute (custom remediation).
 * @method void setRemediationType(string $RemediationType) Set Correction type. Valid values:
SCF: Function Compute (custom remediation).
 * @method string getOwnerUin() Obtain Account ID
 * @method void setOwnerUin(string $OwnerUin) Set Account ID
 * @method string getInvokeType() Obtain Correction execution mode. Parameter value:
MANUAL_EXECUTION: manual execution.
 * @method void setInvokeType(string $InvokeType) Set Correction execution mode. Parameter value:
MANUAL_EXECUTION: manual execution.
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 */
class Remediation extends AbstractModel
{
    /**
     * @var string Remediation template ID.
     */
    public $RemediationTemplateId;

    /**
     * @var string Remediation settings ID.
     */
    public $RemediationId;

    /**
     * @var string Template source for executing remediation.
     */
    public $RemediationSourceType;

    /**
     * @var string Correction type. Valid values:
SCF: Function Compute (custom remediation).
     */
    public $RemediationType;

    /**
     * @var string Account ID
     */
    public $OwnerUin;

    /**
     * @var string Correction execution mode. Parameter value:
MANUAL_EXECUTION: manual execution.
     */
    public $InvokeType;

    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @param string $RemediationTemplateId Remediation template ID.
     * @param string $RemediationId Remediation settings ID.
     * @param string $RemediationSourceType Template source for executing remediation.
     * @param string $RemediationType Correction type. Valid values:
SCF: Function Compute (custom remediation).
     * @param string $OwnerUin Account ID
     * @param string $InvokeType Correction execution mode. Parameter value:
MANUAL_EXECUTION: manual execution.
     * @param string $RuleId Rule ID.
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
        if (array_key_exists("RemediationTemplateId",$param) and $param["RemediationTemplateId"] !== null) {
            $this->RemediationTemplateId = $param["RemediationTemplateId"];
        }

        if (array_key_exists("RemediationId",$param) and $param["RemediationId"] !== null) {
            $this->RemediationId = $param["RemediationId"];
        }

        if (array_key_exists("RemediationSourceType",$param) and $param["RemediationSourceType"] !== null) {
            $this->RemediationSourceType = $param["RemediationSourceType"];
        }

        if (array_key_exists("RemediationType",$param) and $param["RemediationType"] !== null) {
            $this->RemediationType = $param["RemediationType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
