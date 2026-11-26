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
 * Rule engine settings applicable to matchmaking requests.
 *
 * @method string getName() Obtain Value of the parameter name.
 * @method void setName(string $Name) Set Value of the parameter name.
 * @method integer getMin() Obtain Minimum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method void setMin(integer $Min) Set Minimum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method array getChoicesValue() Obtain Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
 * @method void setChoicesValue(array $ChoicesValue) Set Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
 * @method string getType() Obtain Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> OBJECT: The parameter value is an object type, and ChoiceProperties are attributes associated with the object type;</li>
<li> CUSTOM_NUM: user-customized parameter value, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>Note: When the parameter type is OBJECT, see [Example 2: Create with the parameter type OBJECT](https://www.tencentcloud.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E4.BF.AE.E6.94.B9.E6.BA.90.E7.AB.99.E4.B8.BAIP.E5.9F.9F.E5.90.8D)
 * @method void setType(string $Type) Set Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> OBJECT: The parameter value is an object type, and ChoiceProperties are attributes associated with the object type;</li>
<li> CUSTOM_NUM: user-customized parameter value, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>Note: When the parameter type is OBJECT, see [Example 2: Create with the parameter type OBJECT](https://www.tencentcloud.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E4.BF.AE.E6.94.B9.E6.BA.90.E7.AB.99.E4.B8.BAIP.E5.9F.9F.E5.90.8D)
 * @method integer getMax() Obtain Maximum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method void setMax(integer $Max) Set Maximum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
 * @method boolean getIsMultiple() Obtain Whether the parameter value supports multiple selections or filling in multiple values.
 * @method void setIsMultiple(boolean $IsMultiple) Set Whether the parameter value supports multiple selections or filling in multiple values.
 * @method boolean getIsAllowEmpty() Obtain Allow Empty.
 * @method void setIsAllowEmpty(boolean $IsAllowEmpty) Set Allow Empty.
 * @method array getChoiceProperties() Obtain The associated configuration parameter of this parameter is required for the API call.
Note: If no new configuration parameters are added to the optional parameter, this array is an empty array.
 * @method void setChoiceProperties(array $ChoiceProperties) Set The associated configuration parameter of this parameter is required for the API call.
Note: If no new configuration parameters are added to the optional parameter, this array is an empty array.
 * @method RuleExtraParameter getExtraParameter() Obtain <li> NULL: no special parameter. Select NormalAction for RuleAction;</li>
 * @method void setExtraParameter(RuleExtraParameter $ExtraParameter) Set <li> NULL: no special parameter. Select NormalAction for RuleAction;</li>
 */
class RulesProperties extends AbstractModel
{
    /**
     * @var string Value of the parameter name.
     */
    public $Name;

    /**
     * @var integer Minimum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     */
    public $Min;

    /**
     * @var array Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
     */
    public $ChoicesValue;

    /**
     * @var string Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> OBJECT: The parameter value is an object type, and ChoiceProperties are attributes associated with the object type;</li>
<li> CUSTOM_NUM: user-customized parameter value, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>Note: When the parameter type is OBJECT, see [Example 2: Create with the parameter type OBJECT](https://www.tencentcloud.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E4.BF.AE.E6.94.B9.E6.BA.90.E7.AB.99.E4.B8.BAIP.E5.9F.9F.E5.90.8D)
     */
    public $Type;

    /**
     * @var integer Maximum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     */
    public $Max;

    /**
     * @var boolean Whether the parameter value supports multiple selections or filling in multiple values.
     */
    public $IsMultiple;

    /**
     * @var boolean Allow Empty.
     */
    public $IsAllowEmpty;

    /**
     * @var array The associated configuration parameter of this parameter is required for the API call.
Note: If no new configuration parameters are added to the optional parameter, this array is an empty array.
     */
    public $ChoiceProperties;

    /**
     * @var RuleExtraParameter <li> NULL: no special parameter. Select NormalAction for RuleAction;</li>
     */
    public $ExtraParameter;

    /**
     * @param string $Name Value of the parameter name.
     * @param integer $Min Minimum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     * @param array $ChoicesValue Available values of the parameter.
Note: If the parameter value is user-customized, this array is an empty array.
     * @param string $Type Parameter type.
<li> CHOICE: The parameter value can only be selected from ChoicesValue; </li>
<li> TOGGLE: The parameter value is a switch type, select from ChoicesValue;</li>
<li> OBJECT: The parameter value is an object type, and ChoiceProperties are attributes associated with the object type;</li>
<li> CUSTOM_NUM: user-customized parameter value, integer type;</li>
<li>CUSTOM_STRING: The parameter value is user-customized, string type.</li>Note: When the parameter type is OBJECT, see [Example 2: Create with the parameter type OBJECT](https://www.tencentcloud.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E4.BF.AE.E6.94.B9.E6.BA.90.E7.AB.99.E4.B8.BAIP.E5.9F.9F.E5.90.8D)
     * @param integer $Max Maximum value of the numeric parameter. This item is meaningless for non-numeric parameters or when both Min and Max are 0.
     * @param boolean $IsMultiple Whether the parameter value supports multiple selections or filling in multiple values.
     * @param boolean $IsAllowEmpty Allow Empty.
     * @param array $ChoiceProperties The associated configuration parameter of this parameter is required for the API call.
Note: If no new configuration parameters are added to the optional parameter, this array is an empty array.
     * @param RuleExtraParameter $ExtraParameter <li> NULL: no special parameter. Select NormalAction for RuleAction;</li>
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

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ChoicesValue",$param) and $param["ChoicesValue"] !== null) {
            $this->ChoicesValue = $param["ChoicesValue"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("ChoiceProperties",$param) and $param["ChoiceProperties"] !== null) {
            $this->ChoiceProperties = [];
            foreach ($param["ChoiceProperties"] as $key => $value){
                $obj = new RuleChoicePropertiesItem();
                $obj->deserialize($value);
                array_push($this->ChoiceProperties, $obj);
            }
        }

        if (array_key_exists("ExtraParameter",$param) and $param["ExtraParameter"] !== null) {
            $this->ExtraParameter = new RuleExtraParameter();
            $this->ExtraParameter->deserialize($param["ExtraParameter"]);
        }
    }
}
