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
 * Agent tool output parameter
 *
 * @method string getName() Obtain <p>Parameter name</p>
 * @method void setName(string $Name) Set <p>Parameter name</p>
 * @method string getDescription() Obtain <p>Variable description</p>
 * @method void setDescription(string $Description) Set <p>Variable description</p>
 * @method integer getType() Obtain <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
 * @method void setType(integer $Type) Set <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
 * @method array getSubParameterList() Obtain <p>Sub-parameter, used only when the data type is OBJECT or ARRAY_OBJECT</p>
 * @method void setSubParameterList(array $SubParameterList) Set <p>Sub-parameter, used only when the data type is OBJECT or ARRAY_OBJECT</p>
 * @method integer getRenderMode() Obtain <p>Parsing method</p>
 * @method void setRenderMode(integer $RenderMode) Set <p>Parsing method</p>
 */
class AgentToolOutputParameter extends AbstractModel
{
    /**
     * @var string <p>Parameter name</p>
     */
    public $Name;

    /**
     * @var string <p>Variable description</p>
     */
    public $Description;

    /**
     * @var integer <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
     */
    public $Type;

    /**
     * @var array <p>Sub-parameter, used only when the data type is OBJECT or ARRAY_OBJECT</p>
     */
    public $SubParameterList;

    /**
     * @var integer <p>Parsing method</p>
     */
    public $RenderMode;

    /**
     * @param string $Name <p>Parameter name</p>
     * @param string $Description <p>Variable description</p>
     * @param integer $Type <p>Parameter type</p><p>Enumeration values:</p><ul><li>0: STRING</li><li>1: INT</li><li>2: FLOAT</li><li>3: BOOL</li><li>4: OBJECT</li><li>5: ARRAY_STRING</li><li>6: ARRAY_INT</li><li>7: ARRAY_FLOAT</li><li>8: ARRAY_BOOL</li><li>9: ARRAY_OBJECT</li><li>20: ARRAY_ARRAY</li><li>99: NULL</li></ul>
     * @param array $SubParameterList <p>Sub-parameter, used only when the data type is OBJECT or ARRAY_OBJECT</p>
     * @param integer $RenderMode <p>Parsing method</p>
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

        if (array_key_exists("SubParameterList",$param) and $param["SubParameterList"] !== null) {
            $this->SubParameterList = [];
            foreach ($param["SubParameterList"] as $key => $value){
                $obj = new AgentToolOutputParameter();
                $obj->deserialize($value);
                array_push($this->SubParameterList, $obj);
            }
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }
    }
}
