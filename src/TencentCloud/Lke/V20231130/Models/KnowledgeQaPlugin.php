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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of application-associated plug-in.
 *
 * @method string getPluginId() Obtain Plugin ID.
 * @method void setPluginId(string $PluginId) Set Plugin ID.
 * @method string getPluginName() Obtain Plugin name.
 * @method void setPluginName(string $PluginName) Set Plugin name.
 * @method string getPluginIcon() Obtain Plugin icon.
 * @method void setPluginIcon(string $PluginIcon) Set Plugin icon.
 * @method string getToolId() Obtain Tool ID.
 * @method void setToolId(string $ToolId) Set Tool ID.
 * @method string getToolName() Obtain Tool name.
 * @method void setToolName(string $ToolName) Set Tool name.
 * @method string getToolDesc() Obtain Tool description.
 * @method void setToolDesc(string $ToolDesc) Set Tool description.
 * @method array getInputs() Obtain Tool input parameter.
 * @method void setInputs(array $Inputs) Set Tool input parameter.
 * @method boolean getIsBindingKnowledge() Obtain Whether the plugin is bound to the knowledge library.
 * @method void setIsBindingKnowledge(boolean $IsBindingKnowledge) Set Whether the plugin is bound to the knowledge library.
 */
class KnowledgeQaPlugin extends AbstractModel
{
    /**
     * @var string Plugin ID.
     */
    public $PluginId;

    /**
     * @var string Plugin name.
     */
    public $PluginName;

    /**
     * @var string Plugin icon.
     */
    public $PluginIcon;

    /**
     * @var string Tool ID.
     */
    public $ToolId;

    /**
     * @var string Tool name.
     */
    public $ToolName;

    /**
     * @var string Tool description.
     */
    public $ToolDesc;

    /**
     * @var array Tool input parameter.
     */
    public $Inputs;

    /**
     * @var boolean Whether the plugin is bound to the knowledge library.
     */
    public $IsBindingKnowledge;

    /**
     * @param string $PluginId Plugin ID.
     * @param string $PluginName Plugin name.
     * @param string $PluginIcon Plugin icon.
     * @param string $ToolId Tool ID.
     * @param string $ToolName Tool name.
     * @param string $ToolDesc Tool description.
     * @param array $Inputs Tool input parameter.
     * @param boolean $IsBindingKnowledge Whether the plugin is bound to the knowledge library.
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

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginIcon",$param) and $param["PluginIcon"] !== null) {
            $this->PluginIcon = $param["PluginIcon"];
        }

        if (array_key_exists("ToolId",$param) and $param["ToolId"] !== null) {
            $this->ToolId = $param["ToolId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolDesc",$param) and $param["ToolDesc"] !== null) {
            $this->ToolDesc = $param["ToolDesc"];
        }

        if (array_key_exists("Inputs",$param) and $param["Inputs"] !== null) {
            $this->Inputs = [];
            foreach ($param["Inputs"] as $key => $value){
                $obj = new PluginToolReqParam();
                $obj->deserialize($value);
                array_push($this->Inputs, $obj);
            }
        }

        if (array_key_exists("IsBindingKnowledge",$param) and $param["IsBindingKnowledge"] !== null) {
            $this->IsBindingKnowledge = $param["IsBindingKnowledge"];
        }
    }
}
