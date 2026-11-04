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
 * Basic tool foundation configuration of the Agent
 *
 * @method string getPluginId() Obtain <p>plugin_id</p>
 * @method void setPluginId(string $PluginId) Set <p>plugin_id</p>
 * @method string getToolId() Obtain <p>Tool id</p>
 * @method void setToolId(string $ToolId) Set <p>Tool id</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method array getInputList() Obtain <p>Tool input parameter list</p>
 * @method void setInputList(array $InputList) Set <p>Tool input parameter list</p>
 * @method array getOutputList() Obtain <p>Tool output parameter list</p>
 * @method void setOutputList(array $OutputList) Set <p>Tool output parameter list</p>
 * @method array getHeaderParameterList() Obtain <p>Tool Header parameter list</p>
 * @method void setHeaderParameterList(array $HeaderParameterList) Set <p>Tool Header parameter list</p>
 * @method array getQueryParameterList() Obtain <p>Tool Query parameter list</p>
 * @method void setQueryParameterList(array $QueryParameterList) Set <p>Tool Query parameter list</p>
 * @method integer getToolSource() Obtain <p>Tool source: 0-comes from plug-in, 1-comes from workflow</p>
 * @method void setToolSource(integer $ToolSource) Set <p>Tool source: 0-comes from plug-in, 1-comes from workflow</p>
 * @method boolean getIsDisabled() Obtain <p>Whether to disable</p>
 * @method void setIsDisabled(boolean $IsDisabled) Set <p>Whether to disable</p>
 */
class AgentToolBasicConfig extends AbstractModel
{
    /**
     * @var string <p>plugin_id</p>
     */
    public $PluginId;

    /**
     * @var string <p>Tool id</p>
     */
    public $ToolId;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var array <p>Tool input parameter list</p>
     */
    public $InputList;

    /**
     * @var array <p>Tool output parameter list</p>
     */
    public $OutputList;

    /**
     * @var array <p>Tool Header parameter list</p>
     */
    public $HeaderParameterList;

    /**
     * @var array <p>Tool Query parameter list</p>
     */
    public $QueryParameterList;

    /**
     * @var integer <p>Tool source: 0-comes from plug-in, 1-comes from workflow</p>
     */
    public $ToolSource;

    /**
     * @var boolean <p>Whether to disable</p>
     */
    public $IsDisabled;

    /**
     * @param string $PluginId <p>plugin_id</p>
     * @param string $ToolId <p>Tool id</p>
     * @param string $Description <p>Description.</p>
     * @param array $InputList <p>Tool input parameter list</p>
     * @param array $OutputList <p>Tool output parameter list</p>
     * @param array $HeaderParameterList <p>Tool Header parameter list</p>
     * @param array $QueryParameterList <p>Tool Query parameter list</p>
     * @param integer $ToolSource <p>Tool source: 0-comes from plug-in, 1-comes from workflow</p>
     * @param boolean $IsDisabled <p>Whether to disable</p>
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InputList",$param) and $param["InputList"] !== null) {
            $this->InputList = [];
            foreach ($param["InputList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->InputList, $obj);
            }
        }

        if (array_key_exists("OutputList",$param) and $param["OutputList"] !== null) {
            $this->OutputList = [];
            foreach ($param["OutputList"] as $key => $value){
                $obj = new AgentToolOutputParameter();
                $obj->deserialize($value);
                array_push($this->OutputList, $obj);
            }
        }

        if (array_key_exists("HeaderParameterList",$param) and $param["HeaderParameterList"] !== null) {
            $this->HeaderParameterList = [];
            foreach ($param["HeaderParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->HeaderParameterList, $obj);
            }
        }

        if (array_key_exists("QueryParameterList",$param) and $param["QueryParameterList"] !== null) {
            $this->QueryParameterList = [];
            foreach ($param["QueryParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->QueryParameterList, $obj);
            }
        }

        if (array_key_exists("ToolSource",$param) and $param["ToolSource"] !== null) {
            $this->ToolSource = $param["ToolSource"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }
    }
}
