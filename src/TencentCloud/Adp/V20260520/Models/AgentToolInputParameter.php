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
 * Agent tool input parameter definition
 *
 * @method string getName() Obtain <p>Tool name</p>
 * @method void setName(string $Name) Set <p>Tool name</p>
 * @method string getDescription() Obtain <p>Tool description</p>
 * @method void setDescription(string $Description) Set <p>Tool description</p>
 * @method integer getType() Obtain <p>Tool parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
 * @method void setType(integer $Type) Set <p>Tool parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
 * @method boolean getIsRequired() Obtain <p>Required or not</p>
 * @method void setIsRequired(boolean $IsRequired) Set <p>Required or not</p>
 * @method array getSubParameterList() Obtain <p>Sub-parameter, used only when the data type is OBJECT or ARRAY&lt;&gt;</p>
 * @method void setSubParameterList(array $SubParameterList) Set <p>Sub-parameter, used only when the data type is OBJECT or ARRAY&lt;&gt;</p>
 * @method boolean getIsHidden() Obtain <p>Whether to hide from the model in mode</p>
 * @method void setIsHidden(boolean $IsHidden) Set <p>Whether to hide from the model in mode</p>
 * @method array getOneOfList() Obtain <p>Parameters in types of OneOf</p>
 * @method void setOneOfList(array $OneOfList) Set <p>Parameters in types of OneOf</p>
 * @method array getAnyOfList() Obtain <p>Parameters in types of AnyOf</p>
 * @method void setAnyOfList(array $AnyOfList) Set <p>Parameters in types of AnyOf</p>
 * @method AgentInput getInput() Obtain <p>Source of parameter value</p>
 * @method void setInput(AgentInput $Input) Set <p>Source of parameter value</p>
 */
class AgentToolInputParameter extends AbstractModel
{
    /**
     * @var string <p>Tool name</p>
     */
    public $Name;

    /**
     * @var string <p>Tool description</p>
     */
    public $Description;

    /**
     * @var integer <p>Tool parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
     */
    public $Type;

    /**
     * @var boolean <p>Required or not</p>
     */
    public $IsRequired;

    /**
     * @var array <p>Sub-parameter, used only when the data type is OBJECT or ARRAY&lt;&gt;</p>
     */
    public $SubParameterList;

    /**
     * @var boolean <p>Whether to hide from the model in mode</p>
     */
    public $IsHidden;

    /**
     * @var array <p>Parameters in types of OneOf</p>
     */
    public $OneOfList;

    /**
     * @var array <p>Parameters in types of AnyOf</p>
     */
    public $AnyOfList;

    /**
     * @var AgentInput <p>Source of parameter value</p>
     */
    public $Input;

    /**
     * @param string $Name <p>Tool name</p>
     * @param string $Description <p>Tool description</p>
     * @param integer $Type <p>Tool parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
     * @param boolean $IsRequired <p>Required or not</p>
     * @param array $SubParameterList <p>Sub-parameter, used only when the data type is OBJECT or ARRAY&lt;&gt;</p>
     * @param boolean $IsHidden <p>Whether to hide from the model in mode</p>
     * @param array $OneOfList <p>Parameters in types of OneOf</p>
     * @param array $AnyOfList <p>Parameters in types of AnyOf</p>
     * @param AgentInput $Input <p>Source of parameter value</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("SubParameterList",$param) and $param["SubParameterList"] !== null) {
            $this->SubParameterList = [];
            foreach ($param["SubParameterList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->SubParameterList, $obj);
            }
        }

        if (array_key_exists("IsHidden",$param) and $param["IsHidden"] !== null) {
            $this->IsHidden = $param["IsHidden"];
        }

        if (array_key_exists("OneOfList",$param) and $param["OneOfList"] !== null) {
            $this->OneOfList = [];
            foreach ($param["OneOfList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->OneOfList, $obj);
            }
        }

        if (array_key_exists("AnyOfList",$param) and $param["AnyOfList"] !== null) {
            $this->AnyOfList = [];
            foreach ($param["AnyOfList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->AnyOfList, $obj);
            }
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
