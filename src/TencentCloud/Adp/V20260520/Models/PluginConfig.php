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
 * Plug-in configuration
 *
 * @method ApiPluginConfig getApiPluginConfig() Obtain API plug-in configuration
 * @method void setApiPluginConfig(ApiPluginConfig $ApiPluginConfig) Set API plug-in configuration
 * @method AppPluginConfig getAppPluginConfig() Obtain App plugin configuration
 * @method void setAppPluginConfig(AppPluginConfig $AppPluginConfig) Set App plugin configuration
 * @method MCPPluginConfig getMCPPluginConfig() Obtain mcp plug-in configuration
 * @method void setMCPPluginConfig(MCPPluginConfig $MCPPluginConfig) Set mcp plug-in configuration
 */
class PluginConfig extends AbstractModel
{
    /**
     * @var ApiPluginConfig API plug-in configuration
     */
    public $ApiPluginConfig;

    /**
     * @var AppPluginConfig App plugin configuration
     */
    public $AppPluginConfig;

    /**
     * @var MCPPluginConfig mcp plug-in configuration
     */
    public $MCPPluginConfig;

    /**
     * @param ApiPluginConfig $ApiPluginConfig API plug-in configuration
     * @param AppPluginConfig $AppPluginConfig App plugin configuration
     * @param MCPPluginConfig $MCPPluginConfig mcp plug-in configuration
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
        if (array_key_exists("ApiPluginConfig",$param) and $param["ApiPluginConfig"] !== null) {
            $this->ApiPluginConfig = new ApiPluginConfig();
            $this->ApiPluginConfig->deserialize($param["ApiPluginConfig"]);
        }

        if (array_key_exists("AppPluginConfig",$param) and $param["AppPluginConfig"] !== null) {
            $this->AppPluginConfig = new AppPluginConfig();
            $this->AppPluginConfig->deserialize($param["AppPluginConfig"]);
        }

        if (array_key_exists("MCPPluginConfig",$param) and $param["MCPPluginConfig"] !== null) {
            $this->MCPPluginConfig = new MCPPluginConfig();
            $this->MCPPluginConfig->deserialize($param["MCPPluginConfig"]);
        }
    }
}
