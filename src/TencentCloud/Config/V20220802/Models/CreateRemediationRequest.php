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
 * CreateRemediation request structure.
 *
 * @method string getRuleId() Obtain <p>Rule ID.</p>
 * @method void setRuleId(string $RuleId) Set <p>Rule ID.</p>
 * @method string getRemediationType() Obtain <p>Remediation type. Valid values: SCF (serverless cloud function, custom remediation).</p>
 * @method void setRemediationType(string $RemediationType) Set <p>Remediation type. Valid values: SCF (serverless cloud function, custom remediation).</p>
 * @method string getRemediationTemplateId() Obtain <p>Remediation template ID.</p>
 * @method void setRemediationTemplateId(string $RemediationTemplateId) Set <p>Remediation template ID.</p>
 * @method string getInvokeType() Obtain <p>Remediation execution mode.<br>Valid values: MANUAL_EXECUTION (manual execution).</p>
 * @method void setInvokeType(string $InvokeType) Set <p>Remediation execution mode.<br>Valid values: MANUAL_EXECUTION (manual execution).</p>
 * @method string getSourceType() Obtain <p>Template source for executing remediation. Valid values:<br>CUSTOM: custom template.</p>
 * @method void setSourceType(string $SourceType) Set <p>Template source for executing remediation. Valid values:<br>CUSTOM: custom template.</p>
 */
class CreateRemediationRequest extends AbstractModel
{
    /**
     * @var string <p>Rule ID.</p>
     */
    public $RuleId;

    /**
     * @var string <p>Remediation type. Valid values: SCF (serverless cloud function, custom remediation).</p>
     */
    public $RemediationType;

    /**
     * @var string <p>Remediation template ID.</p>
     */
    public $RemediationTemplateId;

    /**
     * @var string <p>Remediation execution mode.<br>Valid values: MANUAL_EXECUTION (manual execution).</p>
     */
    public $InvokeType;

    /**
     * @var string <p>Template source for executing remediation. Valid values:<br>CUSTOM: custom template.</p>
     */
    public $SourceType;

    /**
     * @param string $RuleId <p>Rule ID.</p>
     * @param string $RemediationType <p>Remediation type. Valid values: SCF (serverless cloud function, custom remediation).</p>
     * @param string $RemediationTemplateId <p>Remediation template ID.</p>
     * @param string $InvokeType <p>Remediation execution mode.<br>Valid values: MANUAL_EXECUTION (manual execution).</p>
     * @param string $SourceType <p>Template source for executing remediation. Valid values:<br>CUSTOM: custom template.</p>
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

        if (array_key_exists("RemediationType",$param) and $param["RemediationType"] !== null) {
            $this->RemediationType = $param["RemediationType"];
        }

        if (array_key_exists("RemediationTemplateId",$param) and $param["RemediationTemplateId"] !== null) {
            $this->RemediationTemplateId = $param["RemediationTemplateId"];
        }

        if (array_key_exists("InvokeType",$param) and $param["InvokeType"] !== null) {
            $this->InvokeType = $param["InvokeType"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
