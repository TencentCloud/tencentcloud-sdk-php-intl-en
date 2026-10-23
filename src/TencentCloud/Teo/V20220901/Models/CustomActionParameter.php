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
 * Parameter content of a single field in custom configuration.
 *
 * @method string getName() Obtain <p>Field Name of each parameter under custom configuration.</p><p>You can get it through the API return value CustomActionSet[].Parameters[].Name of DescribeAvailableCustomActionsForRuleEngine, such as "Seconds", "Ports", "StatusCode".</p>
 * @method void setName(string $Name) Set <p>Field Name of each parameter under custom configuration.</p><p>You can get it through the API return value CustomActionSet[].Parameters[].Name of DescribeAvailableCustomActionsForRuleEngine, such as "Seconds", "Ports", "StatusCode".</p>
 * @method string getValueType() Obtain <p>Data type of each parameter field value under custom configuration.</p><p>Enumeration value:</p><ul><li>String: string type.</li><li>Integer: integer type.</li><li>Float: floating-point type.</li><li>Boolean: boolean type.</li><li>ArrayOfString: string array type.</li><li>ArrayOfInteger: integer array type.</li><li>ArrayOfFloat: floating-point number array type.</li></ul><p>It can be obtained through the API return value CustomActionSet[].Parameters[].Type of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setValueType(string $ValueType) Set <p>Data type of each parameter field value under custom configuration.</p><p>Enumeration value:</p><ul><li>String: string type.</li><li>Integer: integer type.</li><li>Float: floating-point type.</li><li>Boolean: boolean type.</li><li>ArrayOfString: string array type.</li><li>ArrayOfInteger: integer array type.</li><li>ArrayOfFloat: floating-point number array type.</li></ul><p>It can be obtained through the API return value CustomActionSet[].Parameters[].Type of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method string getStringValue() Obtain <p>Parameter value of string type. This parameter is required when ValueType is String.</p><p>You can get the default value, measurement unit, limit and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setStringValue(string $StringValue) Set <p>Parameter value of string type. This parameter is required when ValueType is String.</p><p>You can get the default value, measurement unit, limit and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method integer getIntegerValue() Obtain <p>Integer type parameter value. This parameter is required when ValueType is Integer.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setIntegerValue(integer $IntegerValue) Set <p>Integer type parameter value. This parameter is required when ValueType is Integer.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method float getFloatValue() Obtain <p>Floating-point type parameter value. This parameter is required when ValueType is Float.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setFloatValue(float $FloatValue) Set <p>Floating-point type parameter value. This parameter is required when ValueType is Float.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method boolean getBooleanValue() Obtain <p>Boolean type parameter value. This parameter is required when ValueType is Boolean.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setBooleanValue(boolean $BooleanValue) Set <p>Boolean type parameter value. This parameter is required when ValueType is Boolean.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method array getStringArrayValue() Obtain <p>String array type parameter value. This parameter is required when ValueType is ArrayOfString.</p><p>You can get the default value, measurement unit, and limitation of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method void setStringArrayValue(array $StringArrayValue) Set <p>String array type parameter value. This parameter is required when ValueType is ArrayOfString.</p><p>You can get the default value, measurement unit, and limitation of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method array getIntegerArrayValue() Obtain <p>Array type parameter value of integer. This parameter is required when ValueType is ArrayOfInteger.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method void setIntegerArrayValue(array $IntegerArrayValue) Set <p>Array type parameter value of integer. This parameter is required when ValueType is ArrayOfInteger.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
 * @method array getFloatArrayValue() Obtain <p>Floating-point number array type parameter value. This parameter is required when ValueType is ArrayOfFloat.</p><p>You can get the default value, measurement unit, limitation, and other descriptions of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 * @method void setFloatArrayValue(array $FloatArrayValue) Set <p>Floating-point number array type parameter value. This parameter is required when ValueType is ArrayOfFloat.</p><p>You can get the default value, measurement unit, limitation, and other descriptions of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
 */
class CustomActionParameter extends AbstractModel
{
    /**
     * @var string <p>Field Name of each parameter under custom configuration.</p><p>You can get it through the API return value CustomActionSet[].Parameters[].Name of DescribeAvailableCustomActionsForRuleEngine, such as "Seconds", "Ports", "StatusCode".</p>
     */
    public $Name;

    /**
     * @var string <p>Data type of each parameter field value under custom configuration.</p><p>Enumeration value:</p><ul><li>String: string type.</li><li>Integer: integer type.</li><li>Float: floating-point type.</li><li>Boolean: boolean type.</li><li>ArrayOfString: string array type.</li><li>ArrayOfInteger: integer array type.</li><li>ArrayOfFloat: floating-point number array type.</li></ul><p>It can be obtained through the API return value CustomActionSet[].Parameters[].Type of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $ValueType;

    /**
     * @var string <p>Parameter value of string type. This parameter is required when ValueType is String.</p><p>You can get the default value, measurement unit, limit and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $StringValue;

    /**
     * @var integer <p>Integer type parameter value. This parameter is required when ValueType is Integer.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $IntegerValue;

    /**
     * @var float <p>Floating-point type parameter value. This parameter is required when ValueType is Float.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $FloatValue;

    /**
     * @var boolean <p>Boolean type parameter value. This parameter is required when ValueType is Boolean.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $BooleanValue;

    /**
     * @var array <p>String array type parameter value. This parameter is required when ValueType is ArrayOfString.</p><p>You can get the default value, measurement unit, and limitation of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     */
    public $StringArrayValue;

    /**
     * @var array <p>Array type parameter value of integer. This parameter is required when ValueType is ArrayOfInteger.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     */
    public $IntegerArrayValue;

    /**
     * @var array <p>Floating-point number array type parameter value. This parameter is required when ValueType is ArrayOfFloat.</p><p>You can get the default value, measurement unit, limitation, and other descriptions of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     */
    public $FloatArrayValue;

    /**
     * @param string $Name <p>Field Name of each parameter under custom configuration.</p><p>You can get it through the API return value CustomActionSet[].Parameters[].Name of DescribeAvailableCustomActionsForRuleEngine, such as "Seconds", "Ports", "StatusCode".</p>
     * @param string $ValueType <p>Data type of each parameter field value under custom configuration.</p><p>Enumeration value:</p><ul><li>String: string type.</li><li>Integer: integer type.</li><li>Float: floating-point type.</li><li>Boolean: boolean type.</li><li>ArrayOfString: string array type.</li><li>ArrayOfInteger: integer array type.</li><li>ArrayOfFloat: floating-point number array type.</li></ul><p>It can be obtained through the API return value CustomActionSet[].Parameters[].Type of DescribeAvailableCustomActionsForRuleEngine.</p>
     * @param string $StringValue <p>Parameter value of string type. This parameter is required when ValueType is String.</p><p>You can get the default value, measurement unit, limit and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     * @param integer $IntegerValue <p>Integer type parameter value. This parameter is required when ValueType is Integer.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     * @param float $FloatValue <p>Floating-point type parameter value. This parameter is required when ValueType is Float.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     * @param boolean $BooleanValue <p>Boolean type parameter value. This parameter is required when ValueType is Boolean.</p><p>You can get the default value, measurement unit, limitation, and other details of the parameter value through the CustomActionSet[].Parameters in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
     * @param array $StringArrayValue <p>String array type parameter value. This parameter is required when ValueType is ArrayOfString.</p><p>You can get the default value, measurement unit, and limitation of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     * @param array $IntegerArrayValue <p>Array type parameter value of integer. This parameter is required when ValueType is ArrayOfInteger.</p><p>You can get the default value, measurement unit, limit, and other details of the parameter value through the API return value CustomActionSet[].Parameters of the DescribeAvailableCustomActionsForRuleEngine API.</p>
     * @param array $FloatArrayValue <p>Floating-point number array type parameter value. This parameter is required when ValueType is ArrayOfFloat.</p><p>You can get the default value, measurement unit, limitation, and other descriptions of the parameter value through the CustomActionSet[].Parameters field in the API return value of DescribeAvailableCustomActionsForRuleEngine.</p>
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

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("StringValue",$param) and $param["StringValue"] !== null) {
            $this->StringValue = $param["StringValue"];
        }

        if (array_key_exists("IntegerValue",$param) and $param["IntegerValue"] !== null) {
            $this->IntegerValue = $param["IntegerValue"];
        }

        if (array_key_exists("FloatValue",$param) and $param["FloatValue"] !== null) {
            $this->FloatValue = $param["FloatValue"];
        }

        if (array_key_exists("BooleanValue",$param) and $param["BooleanValue"] !== null) {
            $this->BooleanValue = $param["BooleanValue"];
        }

        if (array_key_exists("StringArrayValue",$param) and $param["StringArrayValue"] !== null) {
            $this->StringArrayValue = $param["StringArrayValue"];
        }

        if (array_key_exists("IntegerArrayValue",$param) and $param["IntegerArrayValue"] !== null) {
            $this->IntegerArrayValue = $param["IntegerArrayValue"];
        }

        if (array_key_exists("FloatArrayValue",$param) and $param["FloatArrayValue"] !== null) {
            $this->FloatArrayValue = $param["FloatArrayValue"];
        }
    }
}
