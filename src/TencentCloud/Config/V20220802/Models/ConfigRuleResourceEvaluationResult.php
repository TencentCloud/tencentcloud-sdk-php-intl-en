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
 * Configuration rule resource evaluation result.
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getRuleIdentifier() Obtain Rule ID.
 * @method void setRuleIdentifier(string $RuleIdentifier) Set Rule ID.
 * @method string getRuleDescription() Obtain Rule description
 * @method void setRuleDescription(string $RuleDescription) Set Rule description
 * @method integer getRuleOwnerId() Obtain Account to which the rule belongs.
 * @method void setRuleOwnerId(integer $RuleOwnerId) Set Account to which the rule belongs.
 * @method integer getRuleRiskLevel() Obtain Rule risk level.
 * @method void setRuleRiskLevel(integer $RuleRiskLevel) Set Rule risk level.
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceType() Obtain Resource type.
 * @method void setResourceType(string $ResourceType) Set Resource type.
 * @method string getResourceName() Obtain Resource name
 * @method void setResourceName(string $ResourceName) Set Resource name
 * @method string getResourceRegion() Obtain Resource region
 * @method void setResourceRegion(string $ResourceRegion) Set Resource region
 * @method array getResourceTags() Obtain Resource tag
 * @method void setResourceTags(array $ResourceTags) Set Resource tag
 * @method Annotation getAnnotation() Obtain Compliance details
 * @method void setAnnotation(Annotation $Annotation) Set Compliance details
 */
class ConfigRuleResourceEvaluationResult extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule ID.
     */
    public $RuleIdentifier;

    /**
     * @var string Rule description
     */
    public $RuleDescription;

    /**
     * @var integer Account to which the rule belongs.
     */
    public $RuleOwnerId;

    /**
     * @var integer Rule risk level.
     */
    public $RuleRiskLevel;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource type.
     */
    public $ResourceType;

    /**
     * @var string Resource name
     */
    public $ResourceName;

    /**
     * @var string Resource region
     */
    public $ResourceRegion;

    /**
     * @var array Resource tag
     */
    public $ResourceTags;

    /**
     * @var Annotation Compliance details
     */
    public $Annotation;

    /**
     * @param string $RuleId Rule ID
     * @param string $RuleName Rule name
     * @param string $RuleIdentifier Rule ID.
     * @param string $RuleDescription Rule description
     * @param integer $RuleOwnerId Account to which the rule belongs.
     * @param integer $RuleRiskLevel Rule risk level.
     * @param string $ResourceId Resource ID
     * @param string $ResourceType Resource type.
     * @param string $ResourceName Resource name
     * @param string $ResourceRegion Resource region
     * @param array $ResourceTags Resource tag
     * @param Annotation $Annotation Compliance details
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

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleIdentifier",$param) and $param["RuleIdentifier"] !== null) {
            $this->RuleIdentifier = $param["RuleIdentifier"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("RuleOwnerId",$param) and $param["RuleOwnerId"] !== null) {
            $this->RuleOwnerId = $param["RuleOwnerId"];
        }

        if (array_key_exists("RuleRiskLevel",$param) and $param["RuleRiskLevel"] !== null) {
            $this->RuleRiskLevel = $param["RuleRiskLevel"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }
    }
}
