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
 * Detailed settings of the rule engine that can be used for request match, which are optional parameter configuration items.
 *
 * @method string getName() Obtain The parameter name.
 * @method void setName(string $Name) Set The parameter name.
 * @method string getType() Obtain The parameter value type.
<li>CHOICE: The parameter value can be selected only from `Values`.</li>
<li>TOGGLE: The parameter value is of switch type and can be selected from `ChoicesValue`.</li>
<li>CUSTOM_NUM: The parameter value is a custom integer.</li>
<li>CUSTOM_STRING: The parameter value is a custom string.</li>
 * @method void setType(string $Type) Set The parameter value type.
<li>CHOICE: The parameter value can be selected only from `Values`.</li>
<li>TOGGLE: The parameter value is of switch type and can be selected from `ChoicesValue`.</li>
<li>CUSTOM_NUM: The parameter value is a custom integer.</li>
<li>CUSTOM_STRING: The parameter value is a custom string.</li>
 * @method array getChoicesValue() Obtain Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
 * @method void setChoicesValue(array $ChoicesValue) Set Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
 * @method integer getMin() Obtain Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method void setMin(integer $Min) Set Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method integer getMax() Obtain Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method void setMax(integer $Max) Set Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method boolean getIsMultiple() Obtain Whether multiple values can be selected or entered.
 * @method void setIsMultiple(boolean $IsMultiple) Set Whether multiple values can be selected or entered.
 * @method boolean getIsAllowEmpty() Obtain Whether the parameter can be left empty.
 * @method void setIsAllowEmpty(boolean $IsAllowEmpty) Set Whether the parameter can be left empty.
 * @method RuleExtraParameter getExtraParameter() Obtain Special parameter.
<li>NULL: Select `NormalAction` for `RuleAction`. </li>
<li>If the member parameter `Id` is `Action`, select `RewirteAction` for `RuleAction`.</li>
<li>If the member parameter `Id` is `StatusCode`, select `CodeAction` for `RuleAction`.</li>
 * @method void setExtraParameter(RuleExtraParameter $ExtraParameter) Set Special parameter.
<li>NULL: Select `NormalAction` for `RuleAction`. </li>
<li>If the member parameter `Id` is `Action`, select `RewirteAction` for `RuleAction`.</li>
<li>If the member parameter `Id` is `StatusCode`, select `CodeAction` for `RuleAction`.</li>
 */
class RuleChoicePropertiesItem extends AbstractModel
{
    /**
     * @var string The parameter name.
     */
    public $Name;

    /**
     * @var string The parameter value type.
<li>CHOICE: The parameter value can be selected only from `Values`.</li>
<li>TOGGLE: The parameter value is of switch type and can be selected from `ChoicesValue`.</li>
<li>CUSTOM_NUM: The parameter value is a custom integer.</li>
<li>CUSTOM_STRING: The parameter value is a custom string.</li>
     */
    public $Type;

    /**
     * @var array Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
     */
    public $ChoicesValue;

    /**
     * @var integer Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     */
    public $Min;

    /**
     * @var integer Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     */
    public $Max;

    /**
     * @var boolean Whether multiple values can be selected or entered.
     */
    public $IsMultiple;

    /**
     * @var boolean Whether the parameter can be left empty.
     */
    public $IsAllowEmpty;

    /**
     * @var RuleExtraParameter Special parameter.
<li>NULL: Select `NormalAction` for `RuleAction`. </li>
<li>If the member parameter `Id` is `Action`, select `RewirteAction` for `RuleAction`.</li>
<li>If the member parameter `Id` is `StatusCode`, select `CodeAction` for `RuleAction`.</li>
     */
    public $ExtraParameter;

    /**
     * @param string $Name The parameter name.
     * @param string $Type The parameter value type.
<li>CHOICE: The parameter value can be selected only from `Values`.</li>
<li>TOGGLE: The parameter value is of switch type and can be selected from `ChoicesValue`.</li>
<li>CUSTOM_NUM: The parameter value is a custom integer.</li>
<li>CUSTOM_STRING: The parameter value is a custom string.</li>
     * @param array $ChoicesValue Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
     * @param integer $Min Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     * @param integer $Max Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     * @param boolean $IsMultiple Whether multiple values can be selected or entered.
     * @param boolean $IsAllowEmpty Whether the parameter can be left empty.
     * @param RuleExtraParameter $ExtraParameter Special parameter.
<li>NULL: Select `NormalAction` for `RuleAction`. </li>
<li>If the member parameter `Id` is `Action`, select `RewirteAction` for `RuleAction`.</li>
<li>If the member parameter `Id` is `StatusCode`, select `CodeAction` for `RuleAction`.</li>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ChoicesValue",$param) and $param["ChoicesValue"] !== null) {
            $this->ChoicesValue = $param["ChoicesValue"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("IsMultiple",$param) and $param["IsMultiple"] !== null) {
            $this->IsMultiple = $param["IsMultiple"];
        }

        if (array_key_exists("IsAllowEmpty",$param) and $param["IsAllowEmpty"] !== null) {
            $this->IsAllowEmpty = $param["IsAllowEmpty"];
        }

        if (array_key_exists("ExtraParameter",$param) and $param["ExtraParameter"] !== null) {
            $this->ExtraParameter = new RuleExtraParameter();
            $this->ExtraParameter->deserialize($param["ExtraParameter"]);
        }
    }
}
