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
 * UpdateRemediation request structure.
 *
 * @method string getRemediationId() Obtain Remediation setting ID.
 * @method void setRemediationId(string $RemediationId) Set Remediation setting ID.
 * @method string getRemediationType() Obtain Remediation type. Valid values: SCF (function compute, custom remediation).
 * @method void setRemediationType(string $RemediationType) Set Remediation type. Valid values: SCF (function compute, custom remediation).
 * @method string getRemediationTemplateId() Obtain Remediation template ID.
 * @method void setRemediationTemplateId(string $RemediationTemplateId) Set Remediation template ID.
 * @method string getInvokeType() Obtain Remediation execution mode. Valid values: NON_EXECUTION (no execution), AUTO_EXECUTION (automatic execution), MANUAL_EXECUTION (manual execution), and NOT_CONFIG (not configured).
 * @method void setInvokeType(string $InvokeType) Set Remediation execution mode. Valid values: NON_EXECUTION (no execution), AUTO_EXECUTION (automatic execution), MANUAL_EXECUTION (manual execution), and NOT_CONFIG (not configured).
 * @method string getSourceType() Obtain Remediation execution source.
 * @method void setSourceType(string $SourceType) Set Remediation execution source.
 */
class UpdateRemediationRequest extends AbstractModel
{
    /**
     * @var string Remediation setting ID.
     */
    public $RemediationId;

    /**
     * @var string Remediation type. Valid values: SCF (function compute, custom remediation).
     */
    public $RemediationType;

    /**
     * @var string Remediation template ID.
     */
    public $RemediationTemplateId;

    /**
     * @var string Remediation execution mode. Valid values: NON_EXECUTION (no execution), AUTO_EXECUTION (automatic execution), MANUAL_EXECUTION (manual execution), and NOT_CONFIG (not configured).
     */
    public $InvokeType;

    /**
     * @var string Remediation execution source.
     */
    public $SourceType;

    /**
     * @param string $RemediationId Remediation setting ID.
     * @param string $RemediationType Remediation type. Valid values: SCF (function compute, custom remediation).
     * @param string $RemediationTemplateId Remediation template ID.
     * @param string $InvokeType Remediation execution mode. Valid values: NON_EXECUTION (no execution), AUTO_EXECUTION (automatic execution), MANUAL_EXECUTION (manual execution), and NOT_CONFIG (not configured).
     * @param string $SourceType Remediation execution source.
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
        if (array_key_exists("RemediationId",$param) and $param["RemediationId"] !== null) {
            $this->RemediationId = $param["RemediationId"];
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
