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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed settings of the rule engine applicable to match requests, with selectable parameter configuration items.
 *
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method string getType() Obtain Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> CUSTOM_NUM: The parameter value is user-customized, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized and of string type.</li>
 * @method void setType(string $Type) Set Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> CUSTOM_NUM: The parameter value is user-customized, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized and of string type.</li>
 * @method array getChoicesValue() Obtain Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
 * @method void setChoicesValue(array $ChoicesValue) Set Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
 * @method integer getMin() Obtain Minimum value of the value parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method void setMin(integer $Min) Set Minimum value of the value parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method integer getMax() Obtain Maximum value of a numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method void setMax(integer $Max) Set Maximum value of a numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method boolean getIsMultiple() Obtain Whether the parameter value supports multi-select or filling in multiple values.
 * @method void setIsMultiple(boolean $IsMultiple) Set Whether the parameter value supports multi-select or filling in multiple values.
 * @method boolean getIsAllowEmpty() Obtain Allow Empty.
 * @method void setIsAllowEmpty(boolean $IsAllowEmpty) Set Allow Empty.
 * @method RuleExtraParameter getExtraParameter() Obtain Special parameter.
<li> NULL: select NormalAction for RuleAction;</li>
<li> The member parameter Id is Action: select RewirteAction for RuleAction;</li>
<li> The member parameter Id is StatusCode: select CodeAction for RuleAction.</li>
 * @method void setExtraParameter(RuleExtraParameter $ExtraParameter) Set Special parameter.
<li> NULL: select NormalAction for RuleAction;</li>
<li> The member parameter Id is Action: select RewirteAction for RuleAction;</li>
<li> The member parameter Id is StatusCode: select CodeAction for RuleAction.</li>
 */
class RuleChoicePropertiesItem extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var string Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> CUSTOM_NUM: The parameter value is user-customized, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized and of string type.</li>
     */
    public $Type;

    /**
     * @var array Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
     */
    public $ChoicesValue;

    /**
     * @var integer Minimum value of the value parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     */
    public $Min;

    /**
     * @var integer Maximum value of a numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     */
    public $Max;

    /**
     * @var boolean Whether the parameter value supports multi-select or filling in multiple values.
     */
    public $IsMultiple;

    /**
     * @var boolean Allow Empty.
     */
    public $IsAllowEmpty;

    /**
     * @var RuleExtraParameter Special parameter.
<li> NULL: select NormalAction for RuleAction;</li>
<li> The member parameter Id is Action: select RewirteAction for RuleAction;</li>
<li> The member parameter Id is StatusCode: select CodeAction for RuleAction.</li>
     */
    public $ExtraParameter;

    /**
     * @param string $Name Parameter name.
     * @param string $Type Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> CUSTOM_NUM: The parameter value is user-customized, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized and of string type.</li>
     * @param array $ChoicesValue Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
     * @param integer $Min Minimum value of the value parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     * @param integer $Max Maximum value of a numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     * @param boolean $IsMultiple Whether the parameter value supports multi-select or filling in multiple values.
     * @param boolean $IsAllowEmpty Allow Empty.
     * @param RuleExtraParameter $ExtraParameter Special parameter.
<li> NULL: select NormalAction for RuleAction;</li>
<li> The member parameter Id is Action: select RewirteAction for RuleAction;</li>
<li> The member parameter Id is StatusCode: select CodeAction for RuleAction.</li>
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
