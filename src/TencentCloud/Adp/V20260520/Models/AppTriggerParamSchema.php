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
 * AppTriggerParamSchema
 *
 * @method string getParamName() Obtain <p>Parameter name</p>
 * @method void setParamName(string $ParamName) Set <p>Parameter name</p>
 * @method integer getParamType() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>String array</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Integer array</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Floating-point number array</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Boolean value array</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
 * @method void setParamType(integer $ParamType) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>String array</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Integer array</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Floating-point number array</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Boolean value array</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
 * @method boolean getRequired() Obtain <p>Required or optional</p>
 * @method void setRequired(boolean $Required) Set <p>Required or optional</p>
 * @method array getSubParamList() Obtain <p>Sub-parameter list</p>
 * @method void setSubParamList(array $SubParamList) Set <p>Sub-parameter list</p>
 */
class AppTriggerParamSchema extends AbstractModel
{
    /**
     * @var string <p>Parameter name</p>
     */
    public $ParamName;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>String array</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Integer array</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Floating-point number array</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Boolean value array</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
     */
    public $ParamType;

    /**
     * @var boolean <p>Required or optional</p>
     */
    public $Required;

    /**
     * @var array <p>Sub-parameter list</p>
     */
    public $SubParamList;

    /**
     * @param string $ParamName <p>Parameter name</p>
     * @param integer $ParamType <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>String array</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Integer array</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Floating-point number array</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Boolean value array</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
     * @param boolean $Required <p>Required or optional</p>
     * @param array $SubParamList <p>Sub-parameter list</p>
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamType",$param) and $param["ParamType"] !== null) {
            $this->ParamType = $param["ParamType"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("SubParamList",$param) and $param["SubParamList"] !== null) {
            $this->SubParamList = [];
            foreach ($param["SubParamList"] as $key => $value){
                $obj = new AppTriggerParamSchema();
                $obj->deserialize($value);
                array_push($this->SubParamList, $obj);
            }
        }
    }
}
