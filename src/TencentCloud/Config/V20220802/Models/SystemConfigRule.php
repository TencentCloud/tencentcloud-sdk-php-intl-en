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
 * Rule details on the operation side.
 *
 * @method string getIdentifier() Obtain <p>Rule ID.</p>
 * @method void setIdentifier(string $Identifier) Set <p>Rule ID.</p>
 * @method string getRuleName() Obtain <p>Rule name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name.</p>
 * @method array getInputParameter() Obtain <p>Rule parameters</p>
 * @method void setInputParameter(array $InputParameter) Set <p>Rule parameters</p>
 * @method array getSourceCondition() Obtain <p>Rule trigger condition</p>
 * @method void setSourceCondition(array $SourceCondition) Set <p>Rule trigger condition</p>
 * @method array getResourceType() Obtain <p>Supported resource types.</p>
 * @method void setResourceType(array $ResourceType) Set <p>Supported resource types.</p>
 * @method array getLabel() Obtain <p>Tag.</p>
 * @method void setLabel(array $Label) Set <p>Tag.</p>
 * @method integer getRiskLevel() Obtain <p>Risk level, 1, 2, 3</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level, 1, 2, 3</p>
 * @method string getServiceFunction() Obtain <p>Corresponding function</p>
 * @method void setServiceFunction(string $ServiceFunction) Set <p>Corresponding function</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 * @method array getTriggerType() Obtain <p>Trigger type.</p>
 * @method void setTriggerType(array $TriggerType) Set <p>Trigger type.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method integer getReferenceCount() Obtain <p>Number of use</p>
 * @method void setReferenceCount(integer $ReferenceCount) Set <p>Number of use</p>
 * @method string getIdentifierType() Obtain <p>Rule type.</p>
 * @method void setIdentifierType(string $IdentifierType) Set <p>Rule type.</p>
 */
class SystemConfigRule extends AbstractModel
{
    /**
     * @var string <p>Rule ID.</p>
     */
    public $Identifier;

    /**
     * @var string <p>Rule name.</p>
     */
    public $RuleName;

    /**
     * @var array <p>Rule parameters</p>
     */
    public $InputParameter;

    /**
     * @var array <p>Rule trigger condition</p>
     */
    public $SourceCondition;

    /**
     * @var array <p>Supported resource types.</p>
     */
    public $ResourceType;

    /**
     * @var array <p>Tag.</p>
     */
    public $Label;

    /**
     * @var integer <p>Risk level, 1, 2, 3</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Corresponding function</p>
     */
    public $ServiceFunction;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>Trigger type.</p>
     */
    public $TriggerType;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var integer <p>Number of use</p>
     */
    public $ReferenceCount;

    /**
     * @var string <p>Rule type.</p>
     */
    public $IdentifierType;

    /**
     * @param string $Identifier <p>Rule ID.</p>
     * @param string $RuleName <p>Rule name.</p>
     * @param array $InputParameter <p>Rule parameters</p>
     * @param array $SourceCondition <p>Rule trigger condition</p>
     * @param array $ResourceType <p>Supported resource types.</p>
     * @param array $Label <p>Tag.</p>
     * @param integer $RiskLevel <p>Risk level, 1, 2, 3</p>
     * @param string $ServiceFunction <p>Corresponding function</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
     * @param array $TriggerType <p>Trigger type.</p>
     * @param string $Description <p>Description.</p>
     * @param integer $ReferenceCount <p>Number of use</p>
     * @param string $IdentifierType <p>Rule type.</p>
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InputParameter",$param) and $param["InputParameter"] !== null) {
            $this->InputParameter = [];
            foreach ($param["InputParameter"] as $key => $value){
                $obj = new InputParameterForManage();
                $obj->deserialize($value);
                array_push($this->InputParameter, $obj);
            }
        }

        if (array_key_exists("SourceCondition",$param) and $param["SourceCondition"] !== null) {
            $this->SourceCondition = [];
            foreach ($param["SourceCondition"] as $key => $value){
                $obj = new SourceConditionForManage();
                $obj->deserialize($value);
                array_push($this->SourceCondition, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("ServiceFunction",$param) and $param["ServiceFunction"] !== null) {
            $this->ServiceFunction = $param["ServiceFunction"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReferenceCount",$param) and $param["ReferenceCount"] !== null) {
            $this->ReferenceCount = $param["ReferenceCount"];
        }

        if (array_key_exists("IdentifierType",$param) and $param["IdentifierType"] !== null) {
            $this->IdentifierType = $param["IdentifierType"];
        }
    }
}
