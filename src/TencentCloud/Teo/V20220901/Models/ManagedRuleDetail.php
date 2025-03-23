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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Managed rule detail.
 *
 * @method string getRuleId() Obtain Managed rule Id.
 * @method void setRuleId(string $RuleId) Set Managed rule Id.
 * @method string getRiskLevel() Obtain Protection level of managed rules. Values: <li>`low`: low risk, this rule has a relatively low risk and is applicable to very strict access scenarios, this level of rule may generate considerable false alarms.</li> <li>`medium`: medium risk, this means the risk of this rule is normal and is suitable for protection scenarios with stricter requirements.</li> <li>`high`: high risk, this indicates that the risk of this rule is relatively high and will not generate false alarms in most scenarios.</li> <li>`extreme`: ultra-high risk. this represents that the risk of this rule is extremely high and will not generate false alarms basically.</li>.
 * @method void setRiskLevel(string $RiskLevel) Set Protection level of managed rules. Values: <li>`low`: low risk, this rule has a relatively low risk and is applicable to very strict access scenarios, this level of rule may generate considerable false alarms.</li> <li>`medium`: medium risk, this means the risk of this rule is normal and is suitable for protection scenarios with stricter requirements.</li> <li>`high`: high risk, this indicates that the risk of this rule is relatively high and will not generate false alarms in most scenarios.</li> <li>`extreme`: ultra-high risk. this represents that the risk of this rule is extremely high and will not generate false alarms basically.</li>.
 * @method string getDescription() Obtain Rule description.
 * @method void setDescription(string $Description) Set Rule description.
 * @method array getTags() Obtain Rule tag. Some types of rules do not have tags.
 * @method void setTags(array $Tags) Set Rule tag. Some types of rules do not have tags.
 * @method string getRuleVersion() Obtain Rule version.
 * @method void setRuleVersion(string $RuleVersion) Set Rule version.
 */
class ManagedRuleDetail extends AbstractModel
{
    /**
     * @var string Managed rule Id.
     */
    public $RuleId;

    /**
     * @var string Protection level of managed rules. Values: <li>`low`: low risk, this rule has a relatively low risk and is applicable to very strict access scenarios, this level of rule may generate considerable false alarms.</li> <li>`medium`: medium risk, this means the risk of this rule is normal and is suitable for protection scenarios with stricter requirements.</li> <li>`high`: high risk, this indicates that the risk of this rule is relatively high and will not generate false alarms in most scenarios.</li> <li>`extreme`: ultra-high risk. this represents that the risk of this rule is extremely high and will not generate false alarms basically.</li>.
     */
    public $RiskLevel;

    /**
     * @var string Rule description.
     */
    public $Description;

    /**
     * @var array Rule tag. Some types of rules do not have tags.
     */
    public $Tags;

    /**
     * @var string Rule version.
     */
    public $RuleVersion;

    /**
     * @param string $RuleId Managed rule Id.
     * @param string $RiskLevel Protection level of managed rules. Values: <li>`low`: low risk, this rule has a relatively low risk and is applicable to very strict access scenarios, this level of rule may generate considerable false alarms.</li> <li>`medium`: medium risk, this means the risk of this rule is normal and is suitable for protection scenarios with stricter requirements.</li> <li>`high`: high risk, this indicates that the risk of this rule is relatively high and will not generate false alarms in most scenarios.</li> <li>`extreme`: ultra-high risk. this represents that the risk of this rule is extremely high and will not generate false alarms basically.</li>.
     * @param string $Description Rule description.
     * @param array $Tags Rule tag. Some types of rules do not have tags.
     * @param string $RuleVersion Rule version.
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

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("RuleVersion",$param) and $param["RuleVersion"] !== null) {
            $this->RuleVersion = $param["RuleVersion"];
        }
    }
}
