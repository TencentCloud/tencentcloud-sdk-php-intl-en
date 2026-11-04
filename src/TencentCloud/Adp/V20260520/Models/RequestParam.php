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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RequestParam
 *
 * @method array getAnyOf() Obtain <p>Parameters in types of AnyOf</p>
 * @method void setAnyOf(array $AnyOf) Set <p>Parameters in types of AnyOf</p>
 * @method string getDefaultValue() Obtain <p>Default value.</p>
 * @method void setDefaultValue(string $DefaultValue) Set <p>Default value.</p>
 * @method string getDescription() Obtain <p>Parameter description</p>
 * @method void setDescription(string $Description) Set <p>Parameter description</p>
 * @method boolean getIsGlobalHidden() Obtain <p>Globally hidden and invisible (different from agent_hidden in the Agent scenario). true: globally hidden and invisible; false: visible</p>
 * @method void setIsGlobalHidden(boolean $IsGlobalHidden) Set <p>Globally hidden and invisible (different from agent_hidden in the Agent scenario). true: globally hidden and invisible; false: visible</p>
 * @method boolean getIsRequired() Obtain <p>Required or optional</p>
 * @method void setIsRequired(boolean $IsRequired) Set <p>Required or optional</p>
 * @method string getName() Obtain <p>Parameter name</p>
 * @method void setName(string $Name) Set <p>Parameter name</p>
 * @method array getOneOf() Obtain <p>Parameters in types of OneOf</p>
 * @method void setOneOf(array $OneOf) Set <p>Parameters in types of OneOf</p>
 * @method array getSubParams() Obtain <p>Sub-parameter, used only when ParamType is OBJECT or ARRAY&lt;&gt;</p>
 * @method void setSubParams(array $SubParams) Set <p>Sub-parameter, used only when ParamType is OBJECT or ARRAY&lt;&gt;</p>
 * @method integer getType() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, for OneOf and AnyOf scenarios</td></tr></tbody></table>
 * @method void setType(integer $Type) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, for OneOf and AnyOf scenarios</td></tr></tbody></table>
 */
class RequestParam extends AbstractModel
{
    /**
     * @var array <p>Parameters in types of AnyOf</p>
     */
    public $AnyOf;

    /**
     * @var string <p>Default value.</p>
     */
    public $DefaultValue;

    /**
     * @var string <p>Parameter description</p>
     */
    public $Description;

    /**
     * @var boolean <p>Globally hidden and invisible (different from agent_hidden in the Agent scenario). true: globally hidden and invisible; false: visible</p>
     */
    public $IsGlobalHidden;

    /**
     * @var boolean <p>Required or optional</p>
     */
    public $IsRequired;

    /**
     * @var string <p>Parameter name</p>
     */
    public $Name;

    /**
     * @var array <p>Parameters in types of OneOf</p>
     */
    public $OneOf;

    /**
     * @var array <p>Sub-parameter, used only when ParamType is OBJECT or ARRAY&lt;&gt;</p>
     */
    public $SubParams;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, for OneOf and AnyOf scenarios</td></tr></tbody></table>
     */
    public $Type;

    /**
     * @param array $AnyOf <p>Parameters in types of AnyOf</p>
     * @param string $DefaultValue <p>Default value.</p>
     * @param string $Description <p>Parameter description</p>
     * @param boolean $IsGlobalHidden <p>Globally hidden and invisible (different from agent_hidden in the Agent scenario). true: globally hidden and invisible; false: visible</p>
     * @param boolean $IsRequired <p>Required or optional</p>
     * @param string $Name <p>Parameter name</p>
     * @param array $OneOf <p>Parameters in types of OneOf</p>
     * @param array $SubParams <p>Sub-parameter, used only when ParamType is OBJECT or ARRAY&lt;&gt;</p>
     * @param integer $Type <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, for OneOf and AnyOf scenarios</td></tr></tbody></table>
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
        if (array_key_exists("AnyOf",$param) and $param["AnyOf"] !== null) {
            $this->AnyOf = [];
            foreach ($param["AnyOf"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->AnyOf, $obj);
            }
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsGlobalHidden",$param) and $param["IsGlobalHidden"] !== null) {
            $this->IsGlobalHidden = $param["IsGlobalHidden"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OneOf",$param) and $param["OneOf"] !== null) {
            $this->OneOf = [];
            foreach ($param["OneOf"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->OneOf, $obj);
            }
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
