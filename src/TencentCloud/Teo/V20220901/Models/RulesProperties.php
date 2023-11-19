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
 * Detailed settings of the rule engine that can be used for request match.
 *
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method integer getMin() Obtain Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method void setMin(integer $Min) Set Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method array getChoicesValue() Obtain Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
 * @method void setChoicesValue(array $ChoicesValue) Set Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
 * @method string getType() Obtain The parameter value type.
<li>`CHOICE`: `If Type=CHOICE`, choose a value in `ChoiceValue`.</li>
<li>`TOGGLE`: If `Type=TOGGLE`, choose `on` or `off` from `ChoicesValue`.</li>
<li>`OBJECT`: Specify an object. If this is specified, `ChoiceProperties` includes attributes of the specified object. See [Example 2. Create a rule with Type=OBJECT](https://intl.cloud.tencent.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.8F.82.E6.95.B0.E4.B8.BA-OBJECT-.E7.B1.BB.E5.9E.8B.E7.9A.84.E5.88.9B.E5.BB.BA)</li>
<li>`CUSTOM_NUM`: (Integer) Custom value.</li>
<li>`CUSTOM_STRING`: (String) Custom value.</li>
 * @method void setType(string $Type) Set The parameter value type.
<li>`CHOICE`: `If Type=CHOICE`, choose a value in `ChoiceValue`.</li>
<li>`TOGGLE`: If `Type=TOGGLE`, choose `on` or `off` from `ChoicesValue`.</li>
<li>`OBJECT`: Specify an object. If this is specified, `ChoiceProperties` includes attributes of the specified object. See [Example 2. Create a rule with Type=OBJECT](https://intl.cloud.tencent.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.8F.82.E6.95.B0.E4.B8.BA-OBJECT-.E7.B1.BB.E5.9E.8B.E7.9A.84.E5.88.9B.E5.BB.BA)</li>
<li>`CUSTOM_NUM`: (Integer) Custom value.</li>
<li>`CUSTOM_STRING`: (String) Custom value.</li>
 * @method integer getMax() Obtain Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method void setMax(integer $Max) Set Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
 * @method boolean getIsMultiple() Obtain Whether multiple values can be selected or entered.
 * @method void setIsMultiple(boolean $IsMultiple) Set Whether multiple values can be selected or entered.
 * @method boolean getIsAllowEmpty() Obtain Whether the parameter can be left empty.
 * @method void setIsAllowEmpty(boolean $IsAllowEmpty) Set Whether the parameter can be left empty.
 * @method array getChoiceProperties() Obtain Associated configuration parameters of this parameter, which are required for API call.
Note: This parameter will be an empty array if no special parameters are added as optional parameters.
 * @method void setChoiceProperties(array $ChoiceProperties) Set Associated configuration parameters of this parameter, which are required for API call.
Note: This parameter will be an empty array if no special parameters are added as optional parameters.
 * @method RuleExtraParameter getExtraParameter() Obtain <li>NULL: No special parameters when `NormalAction` is selected for `RuleAction`.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtraParameter(RuleExtraParameter $ExtraParameter) Set <li>NULL: No special parameters when `NormalAction` is selected for `RuleAction`.</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RulesProperties extends AbstractModel
{
    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var integer Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     */
    public $Min;

    /**
     * @var array Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
     */
    public $ChoicesValue;

    /**
     * @var string The parameter value type.
<li>`CHOICE`: `If Type=CHOICE`, choose a value in `ChoiceValue`.</li>
<li>`TOGGLE`: If `Type=TOGGLE`, choose `on` or `off` from `ChoicesValue`.</li>
<li>`OBJECT`: Specify an object. If this is specified, `ChoiceProperties` includes attributes of the specified object. See [Example 2. Create a rule with Type=OBJECT](https://intl.cloud.tencent.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.8F.82.E6.95.B0.E4.B8.BA-OBJECT-.E7.B1.BB.E5.9E.8B.E7.9A.84.E5.88.9B.E5.BB.BA)</li>
<li>`CUSTOM_NUM`: (Integer) Custom value.</li>
<li>`CUSTOM_STRING`: (String) Custom value.</li>
     */
    public $Type;

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
     * @var array Associated configuration parameters of this parameter, which are required for API call.
Note: This parameter will be an empty array if no special parameters are added as optional parameters.
     */
    public $ChoiceProperties;

    /**
     * @var RuleExtraParameter <li>NULL: No special parameters when `NormalAction` is selected for `RuleAction`.</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExtraParameter;

    /**
     * @param string $Name Parameter name.
     * @param integer $Min Minimum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     * @param array $ChoicesValue Valid parameter values.
Note: If `Type` is `CUSTOM_NUM` or `CUSTOM_STRING`, this parameter will be an empty array.
     * @param string $Type The parameter value type.
<li>`CHOICE`: `If Type=CHOICE`, choose a value in `ChoiceValue`.</li>
<li>`TOGGLE`: If `Type=TOGGLE`, choose `on` or `off` from `ChoicesValue`.</li>
<li>`OBJECT`: Specify an object. If this is specified, `ChoiceProperties` includes attributes of the specified object. See [Example 2. Create a rule with Type=OBJECT](https://intl.cloud.tencent.com/document/product/1552/80622?from_cn_redirect=1#.E7.A4.BA.E4.BE.8B2-.E5.8F.82.E6.95.B0.E4.B8.BA-OBJECT-.E7.B1.BB.E5.9E.8B.E7.9A.84.E5.88.9B.E5.BB.BA)</li>
<li>`CUSTOM_NUM`: (Integer) Custom value.</li>
<li>`CUSTOM_STRING`: (String) Custom value.</li>
     * @param integer $Max Maximum value. If both `Min` and `Max` are set to `0`, this parameter does not take effect.
     * @param boolean $IsMultiple Whether multiple values can be selected or entered.
     * @param boolean $IsAllowEmpty Whether the parameter can be left empty.
     * @param array $ChoiceProperties Associated configuration parameters of this parameter, which are required for API call.
Note: This parameter will be an empty array if no special parameters are added as optional parameters.
     * @param RuleExtraParameter $ExtraParameter <li>NULL: No special parameters when `NormalAction` is selected for `RuleAction`.</li>
Note: This field may return null, indicating that no valid values can be obtained.
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
