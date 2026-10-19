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
 * ListAggregateConfigRuleEvaluationResults request structure.
 *
 * @method string getConfigRuleId() Obtain <p>Rule ID.</p>
 * @method void setConfigRuleId(string $ConfigRuleId) Set <p>Rule ID.</p>
 * @method integer getLimit() Obtain <p>Offset.</p>
 * @method void setLimit(integer $Limit) Set <p>Offset.</p>
 * @method integer getOffset() Obtain <p>Current page.</p>
 * @method void setOffset(integer $Offset) Set <p>Current page.</p>
 * @method string getAccountGroupId() Obtain <p>Account group ID.</p>
 * @method void setAccountGroupId(string $AccountGroupId) Set <p>Account group ID.</p>
 * @method array getResourceType() Obtain <p>Type.</p>
 * @method void setResourceType(array $ResourceType) Set <p>Type.</p>
 * @method array getComplianceType() Obtain <p>Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.</p>
 * @method void setComplianceType(array $ComplianceType) Set <p>Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.</p>
 * @method integer getResourceOwnerId() Obtain <p>Resource owner ID.</p>
 * @method void setResourceOwnerId(integer $ResourceOwnerId) Set <p>Resource owner ID.</p>
 * @method array getResourceOwnerIds() Obtain <p>Filtered resource owner UIN collection.</p>
 * @method void setResourceOwnerIds(array $ResourceOwnerIds) Set <p>Filtered resource owner UIN collection.</p>
 */
class ListAggregateConfigRuleEvaluationResultsRequest extends AbstractModel
{
    /**
     * @var string <p>Rule ID.</p>
     */
    public $ConfigRuleId;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Current page.</p>
     */
    public $Offset;

    /**
     * @var string <p>Account group ID.</p>
     */
    public $AccountGroupId;

    /**
     * @var array <p>Type.</p>
     */
    public $ResourceType;

    /**
     * @var array <p>Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.</p>
     */
    public $ComplianceType;

    /**
     * @var integer <p>Resource owner ID.</p>
     */
    public $ResourceOwnerId;

    /**
     * @var array <p>Filtered resource owner UIN collection.</p>
     */
    public $ResourceOwnerIds;

    /**
     * @param string $ConfigRuleId <p>Rule ID.</p>
     * @param integer $Limit <p>Offset.</p>
     * @param integer $Offset <p>Current page.</p>
     * @param string $AccountGroupId <p>Account group ID.</p>
     * @param array $ResourceType <p>Type.</p>
     * @param array $ComplianceType <p>Evaluation result. Valid values: COMPLIANT and NON_COMPLIANT.</p>
     * @param integer $ResourceOwnerId <p>Resource owner ID.</p>
     * @param array $ResourceOwnerIds <p>Filtered resource owner UIN collection.</p>
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

        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }

        if (array_key_exists("ResourceOwnerId",$param) and $param["ResourceOwnerId"] !== null) {
            $this->ResourceOwnerId = $param["ResourceOwnerId"];
        }

        if (array_key_exists("ResourceOwnerIds",$param) and $param["ResourceOwnerIds"] !== null) {
            $this->ResourceOwnerIds = $param["ResourceOwnerIds"];
        }
    }
}
