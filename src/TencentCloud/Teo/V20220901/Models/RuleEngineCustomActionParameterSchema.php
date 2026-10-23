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
 * Rule engine operation custom configuration parameter structure definition.
 *
 * @method string getName() Obtain <p>Parameter field name.</p>
 * @method void setName(string $Name) Set <p>Parameter field name.</p>
 * @method string getValueType() Obtain <p>Parameter field data type. Valid values: <li>Boolean: boolean;</li><li>Integer: integer;</li><li>Float: floating-point;</li><li>String: string;</li><li>ArrayOfInteger: integer array;</li><li>ArrayOfFloat: floating-point array;</li><li>ArrayOfString: array of strings.</li></p>
 * @method void setValueType(string $ValueType) Set <p>Parameter field data type. Valid values: <li>Boolean: boolean;</li><li>Integer: integer;</li><li>Float: floating-point;</li><li>String: string;</li><li>ArrayOfInteger: integer array;</li><li>ArrayOfFloat: floating-point array;</li><li>ArrayOfString: array of strings.</li></p>
 * @method string getDescription() Obtain <p>Parameter field description.</p>
 * @method void setDescription(string $Description) Set <p>Parameter field description.</p>
 * @method string getDefault() Obtain <p>Field default value of the parameter.</p>
 * @method void setDefault(string $Default) Set <p>Field default value of the parameter.</p>
 * @method string getUnit() Obtain <p>Parameter field unit.</p>
 * @method void setUnit(string $Unit) Set <p>Parameter field unit.</p>
 * @method boolean getRequired() Obtain <p>Whether the parameter field is required or not.</p><p>Default value: false</p><p>If filled, it is applicable to ALL parameter field type verification; if left blank, no verification.</p>
 * @method void setRequired(boolean $Required) Set <p>Whether the parameter field is required or not.</p><p>Default value: false</p><p>If filled, it is applicable to ALL parameter field type verification; if left blank, no verification.</p>
 * @method float getMinValue() Obtain <p>Minimum value of the parameter field.</p><p>If filled, it is used to validate the value for integer, floating-point number, integer array, and floating-point number array type parameters; if left blank, there is no verification.</p>
 * @method void setMinValue(float $MinValue) Set <p>Minimum value of the parameter field.</p><p>If filled, it is used to validate the value for integer, floating-point number, integer array, and floating-point number array type parameters; if left blank, there is no verification.</p>
 * @method float getMaxValue() Obtain <p>Maximum value of the parameter field.</p><p>If filled, it is used for value verification of type parameters for integers, floating-point numbers, integer arrays, and floating-point number arrays. If left blank, there is no verification.</p>
 * @method void setMaxValue(float $MaxValue) Set <p>Maximum value of the parameter field.</p><p>If filled, it is used for value verification of type parameters for integers, floating-point numbers, integer arrays, and floating-point number arrays. If left blank, there is no verification.</p>
 * @method integer getMinLength() Obtain <p>Minimum length of the parameter field.</p><p>If filled, it is used for value verification of string and string array type parameters. If not filled, there is no verification.</p>
 * @method void setMinLength(integer $MinLength) Set <p>Minimum length of the parameter field.</p><p>If filled, it is used for value verification of string and string array type parameters. If not filled, there is no verification.</p>
 * @method integer getMaxLength() Obtain <p>Maximum length of the parameter field.</p><p>If filled, it is used for value verification for strings and array of strings type parameters; if left blank, no verification.</p>
 * @method void setMaxLength(integer $MaxLength) Set <p>Maximum length of the parameter field.</p><p>If filled, it is used for value verification for strings and array of strings type parameters; if left blank, no verification.</p>
 * @method integer getMinItems() Obtain <p>Minimum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters; if left blank, there is no verification.</p>
 * @method void setMinItems(integer $MinItems) Set <p>Minimum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters; if left blank, there is no verification.</p>
 * @method integer getMaxItems() Obtain <p>Maximum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters. If left blank, there is no verification.</p>
 * @method void setMaxItems(integer $MaxItems) Set <p>Maximum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters. If left blank, there is no verification.</p>
 * @method boolean getUniqueItems() Obtain <p>Whether the parameter field item is unique.</p><p>Default value: false</p><p>If filled, it is applicable to various array type parameter value verification; if left blank, no verification.</p>
 * @method void setUniqueItems(boolean $UniqueItems) Set <p>Whether the parameter field item is unique.</p><p>Default value: false</p><p>If filled, it is applicable to various array type parameter value verification; if left blank, no verification.</p>
 * @method string getAllowedPattern() Obtain <p>Allowed format of the parameter field.</p><p>If filled, verification of string or string array content is required. If not filled, there is no verification.</p>
 * @method void setAllowedPattern(string $AllowedPattern) Set <p>Allowed format of the parameter field.</p><p>If filled, verification of string or string array content is required. If not filled, there is no verification.</p>
 * @method array getAllowedValues() Obtain <p>Allowed values of the parameter field. If empty, there is no verification.</p><p>If this parameter is filled, it indicates that the corresponding parameter is an enum and only allows values from this parameter array; if left blank, there is no verification.</p>
 * @method void setAllowedValues(array $AllowedValues) Set <p>Allowed values of the parameter field. If empty, there is no verification.</p><p>If this parameter is filled, it indicates that the corresponding parameter is an enum and only allows values from this parameter array; if left blank, there is no verification.</p>
 * @method string getMultipleOf() Obtain <p>Minimum step size of the parameter field.</p><p>If filled, it is suitable for value verification of floating-point and floating-point array type parameters. If not filled, there is no verification.</p>
 * @method void setMultipleOf(string $MultipleOf) Set <p>Minimum step size of the parameter field.</p><p>If filled, it is suitable for value verification of floating-point and floating-point array type parameters. If not filled, there is no verification.</p>
 */
class RuleEngineCustomActionParameterSchema extends AbstractModel
{
    /**
     * @var string <p>Parameter field name.</p>
     */
    public $Name;

    /**
     * @var string <p>Parameter field data type. Valid values: <li>Boolean: boolean;</li><li>Integer: integer;</li><li>Float: floating-point;</li><li>String: string;</li><li>ArrayOfInteger: integer array;</li><li>ArrayOfFloat: floating-point array;</li><li>ArrayOfString: array of strings.</li></p>
     */
    public $ValueType;

    /**
     * @var string <p>Parameter field description.</p>
     */
    public $Description;

    /**
     * @var string <p>Field default value of the parameter.</p>
     */
    public $Default;

    /**
     * @var string <p>Parameter field unit.</p>
     */
    public $Unit;

    /**
     * @var boolean <p>Whether the parameter field is required or not.</p><p>Default value: false</p><p>If filled, it is applicable to ALL parameter field type verification; if left blank, no verification.</p>
     */
    public $Required;

    /**
     * @var float <p>Minimum value of the parameter field.</p><p>If filled, it is used to validate the value for integer, floating-point number, integer array, and floating-point number array type parameters; if left blank, there is no verification.</p>
     */
    public $MinValue;

    /**
     * @var float <p>Maximum value of the parameter field.</p><p>If filled, it is used for value verification of type parameters for integers, floating-point numbers, integer arrays, and floating-point number arrays. If left blank, there is no verification.</p>
     */
    public $MaxValue;

    /**
     * @var integer <p>Minimum length of the parameter field.</p><p>If filled, it is used for value verification of string and string array type parameters. If not filled, there is no verification.</p>
     */
    public $MinLength;

    /**
     * @var integer <p>Maximum length of the parameter field.</p><p>If filled, it is used for value verification for strings and array of strings type parameters; if left blank, no verification.</p>
     */
    public $MaxLength;

    /**
     * @var integer <p>Minimum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters; if left blank, there is no verification.</p>
     */
    public $MinItems;

    /**
     * @var integer <p>Maximum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters. If left blank, there is no verification.</p>
     */
    public $MaxItems;

    /**
     * @var boolean <p>Whether the parameter field item is unique.</p><p>Default value: false</p><p>If filled, it is applicable to various array type parameter value verification; if left blank, no verification.</p>
     */
    public $UniqueItems;

    /**
     * @var string <p>Allowed format of the parameter field.</p><p>If filled, verification of string or string array content is required. If not filled, there is no verification.</p>
     */
    public $AllowedPattern;

    /**
     * @var array <p>Allowed values of the parameter field. If empty, there is no verification.</p><p>If this parameter is filled, it indicates that the corresponding parameter is an enum and only allows values from this parameter array; if left blank, there is no verification.</p>
     */
    public $AllowedValues;

    /**
     * @var string <p>Minimum step size of the parameter field.</p><p>If filled, it is suitable for value verification of floating-point and floating-point array type parameters. If not filled, there is no verification.</p>
     */
    public $MultipleOf;

    /**
     * @param string $Name <p>Parameter field name.</p>
     * @param string $ValueType <p>Parameter field data type. Valid values: <li>Boolean: boolean;</li><li>Integer: integer;</li><li>Float: floating-point;</li><li>String: string;</li><li>ArrayOfInteger: integer array;</li><li>ArrayOfFloat: floating-point array;</li><li>ArrayOfString: array of strings.</li></p>
     * @param string $Description <p>Parameter field description.</p>
     * @param string $Default <p>Field default value of the parameter.</p>
     * @param string $Unit <p>Parameter field unit.</p>
     * @param boolean $Required <p>Whether the parameter field is required or not.</p><p>Default value: false</p><p>If filled, it is applicable to ALL parameter field type verification; if left blank, no verification.</p>
     * @param float $MinValue <p>Minimum value of the parameter field.</p><p>If filled, it is used to validate the value for integer, floating-point number, integer array, and floating-point number array type parameters; if left blank, there is no verification.</p>
     * @param float $MaxValue <p>Maximum value of the parameter field.</p><p>If filled, it is used for value verification of type parameters for integers, floating-point numbers, integer arrays, and floating-point number arrays. If left blank, there is no verification.</p>
     * @param integer $MinLength <p>Minimum length of the parameter field.</p><p>If filled, it is used for value verification of string and string array type parameters. If not filled, there is no verification.</p>
     * @param integer $MaxLength <p>Maximum length of the parameter field.</p><p>If filled, it is used for value verification for strings and array of strings type parameters; if left blank, no verification.</p>
     * @param integer $MinItems <p>Minimum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters; if left blank, there is no verification.</p>
     * @param integer $MaxItems <p>Maximum item count of the parameter field.</p><p>If filled, it is applicable to value verification for various array type parameters. If left blank, there is no verification.</p>
     * @param boolean $UniqueItems <p>Whether the parameter field item is unique.</p><p>Default value: false</p><p>If filled, it is applicable to various array type parameter value verification; if left blank, no verification.</p>
     * @param string $AllowedPattern <p>Allowed format of the parameter field.</p><p>If filled, verification of string or string array content is required. If not filled, there is no verification.</p>
     * @param array $AllowedValues <p>Allowed values of the parameter field. If empty, there is no verification.</p><p>If this parameter is filled, it indicates that the corresponding parameter is an enum and only allows values from this parameter array; if left blank, there is no verification.</p>
     * @param string $MultipleOf <p>Minimum step size of the parameter field.</p><p>If filled, it is suitable for value verification of floating-point and floating-point array type parameters. If not filled, there is no verification.</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("MinItems",$param) and $param["MinItems"] !== null) {
            $this->MinItems = $param["MinItems"];
        }

        if (array_key_exists("MaxItems",$param) and $param["MaxItems"] !== null) {
            $this->MaxItems = $param["MaxItems"];
        }

        if (array_key_exists("UniqueItems",$param) and $param["UniqueItems"] !== null) {
            $this->UniqueItems = $param["UniqueItems"];
        }

        if (array_key_exists("AllowedPattern",$param) and $param["AllowedPattern"] !== null) {
            $this->AllowedPattern = $param["AllowedPattern"];
        }

        if (array_key_exists("AllowedValues",$param) and $param["AllowedValues"] !== null) {
            $this->AllowedValues = $param["AllowedValues"];
        }

        if (array_key_exists("MultipleOf",$param) and $param["MultipleOf"] !== null) {
            $this->MultipleOf = $param["MultipleOf"];
        }
    }
}
