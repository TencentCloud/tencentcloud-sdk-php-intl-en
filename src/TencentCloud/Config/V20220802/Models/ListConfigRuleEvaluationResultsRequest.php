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
 * ListConfigRuleEvaluationResults request structure.
 *
 * @method string getConfigRuleId() Obtain Rule ID
 * @method void setConfigRuleId(string $ConfigRuleId) Set Rule ID
 * @method integer getLimit() Obtain Offset.
 * @method void setLimit(integer $Limit) Set Offset.
 * @method integer getOffset() Obtain Current Page
 * @method void setOffset(integer $Offset) Set Current Page
 * @method array getResourceType() Obtain Type.
 * @method void setResourceType(array $ResourceType) Set Type.
 * @method array getComplianceType() Obtain Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.
 * @method void setComplianceType(array $ComplianceType) Set Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.
 */
class ListConfigRuleEvaluationResultsRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $ConfigRuleId;

    /**
     * @var integer Offset.
     */
    public $Limit;

    /**
     * @var integer Current Page
     */
    public $Offset;

    /**
     * @var array Type.
     */
    public $ResourceType;

    /**
     * @var array Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.
     */
    public $ComplianceType;

    /**
     * @param string $ConfigRuleId Rule ID
     * @param integer $Limit Offset.
     * @param integer $Offset Current Page
     * @param array $ResourceType Type.
     * @param array $ComplianceType Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.
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
        if (array_key_exists("ConfigRuleId",$param) and $param["ConfigRuleId"] !== null) {
            $this->ConfigRuleId = $param["ConfigRuleId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }
    }
}
