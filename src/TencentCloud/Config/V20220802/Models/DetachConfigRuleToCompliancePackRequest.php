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
 * DetachConfigRuleToCompliancePack request structure.
 *
 * @method string getCompliancePackId() Obtain <p>Compliance package ID.</p>
 * @method void setCompliancePackId(string $CompliancePackId) Set <p>Compliance package ID.</p>
 * @method string getConfigRuleId() Obtain <p>Rule ID.</p>
 * @method void setConfigRuleId(string $ConfigRuleId) Set <p>Rule ID.</p>
 */
class DetachConfigRuleToCompliancePackRequest extends AbstractModel
{
    /**
     * @var string <p>Compliance package ID.</p>
     */
    public $CompliancePackId;

    /**
     * @var string <p>Rule ID.</p>
     */
    public $ConfigRuleId;

    /**
     * @param string $CompliancePackId <p>Compliance package ID.</p>
     * @param string $ConfigRuleId <p>Rule ID.</p>
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
        if (array_key_exists("CompliancePackId",$param) and $param["CompliancePackId"] !== null) {
            $this->CompliancePackId = $param["CompliancePackId"];
        }

        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }
    }
}
