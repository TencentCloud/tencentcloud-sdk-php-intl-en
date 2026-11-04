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
 * ResponseParam
 *
 * @method string getDescription() Obtain <p>Variable description</p>
 * @method void setDescription(string $Description) Set <p>Variable description</p>
 * @method string getName() Obtain <p>Parameter name</p>
 * @method void setName(string $Name) Set <p>Parameter name</p>
 * @method integer getRenderMode() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>OUTPUT_RENDER_REPLACE</td><td>0</td><td>Overwrite (full replacement)</td></tr><tr><td>OUTPUT_RENDER_APPEND</td><td>1</td><td>Incremental append</td></tr></tbody></table>
 * @method void setRenderMode(integer $RenderMode) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>OUTPUT_RENDER_REPLACE</td><td>0</td><td>Overwrite (full replacement)</td></tr><tr><td>OUTPUT_RENDER_APPEND</td><td>1</td><td>Incremental append</td></tr></tbody></table>
 * @method array getSubParams() Obtain <p>Only useful for OBJECT or ARRAY_OBJECT types</p>
 * @method void setSubParams(array $SubParams) Set <p>Only useful for OBJECT or ARRAY_OBJECT types</p>
 * @method integer getType() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null value</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
 * @method void setType(integer $Type) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null value</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
 */
class ResponseParam extends AbstractModel
{
    /**
     * @var string <p>Variable description</p>
     */
    public $Description;

    /**
     * @var string <p>Parameter name</p>
     */
    public $Name;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>OUTPUT_RENDER_REPLACE</td><td>0</td><td>Overwrite (full replacement)</td></tr><tr><td>OUTPUT_RENDER_APPEND</td><td>1</td><td>Incremental append</td></tr></tbody></table>
     */
    public $RenderMode;

    /**
     * @var array <p>Only useful for OBJECT or ARRAY_OBJECT types</p>
     */
    public $SubParams;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null value</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
     */
    public $Type;

    /**
     * @param string $Description <p>Variable description</p>
     * @param string $Name <p>Parameter name</p>
     * @param integer $RenderMode <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>OUTPUT_RENDER_REPLACE</td><td>0</td><td>Overwrite (full replacement)</td></tr><tr><td>OUTPUT_RENDER_APPEND</td><td>1</td><td>Incremental append</td></tr></tbody></table>
     * @param array $SubParams <p>Only useful for OBJECT or ARRAY_OBJECT types</p>
     * @param integer $Type <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>PARAM_TYPE_STRING</td><td>0</td><td>String</td></tr><tr><td>PARAM_TYPE_INT</td><td>1</td><td>Integer</td></tr><tr><td>PARAM_TYPE_FLOAT</td><td>2</td><td>Floating-point number</td></tr><tr><td>PARAM_TYPE_BOOL</td><td>3</td><td>Boolean value</td></tr><tr><td>PARAM_TYPE_OBJECT</td><td>4</td><td>Object</td></tr><tr><td>PARAM_TYPE_ARRAY_STRING</td><td>5</td><td>Array of strings</td></tr><tr><td>PARAM_TYPE_ARRAY_INT</td><td>6</td><td>Array of integers</td></tr><tr><td>PARAM_TYPE_ARRAY_FLOAT</td><td>7</td><td>Array of floating-point numbers</td></tr><tr><td>PARAM_TYPE_ARRAY_BOOL</td><td>8</td><td>Array of boolean values</td></tr><tr><td>PARAM_TYPE_ARRAY_OBJECT</td><td>9</td><td>Object array</td></tr><tr><td>PARAM_TYPE_ARRAY_ARRAY</td><td>20</td><td>Nested array</td></tr><tr><td>PARAM_TYPE_NULL</td><td>99</td><td>Null value</td></tr><tr><td>PARAM_TYPE_UNSPECIFIED</td><td>100</td><td>Unspecified type, used for OneOf and AnyOf scenarios</td></tr></tbody></table>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new ResponseParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
