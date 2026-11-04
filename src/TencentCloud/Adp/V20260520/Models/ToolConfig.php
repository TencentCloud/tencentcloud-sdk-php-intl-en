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
 * ToolConfig
 *
 * @method ApiToolConfig getApiToolConfig() Obtain <p>API tool configuration message.</p>
 * @method void setApiToolConfig(ApiToolConfig $ApiToolConfig) Set <p>API tool configuration message.</p>
 * @method AppToolConfig getAppToolConfig() Obtain <p>Application configuration information</p>
 * @method void setAppToolConfig(AppToolConfig $AppToolConfig) Set <p>Application configuration information</p>
 * @method CodeToolConfig getCodeToolConfig() Obtain <p>Code tool configuration message</p>
 * @method void setCodeToolConfig(CodeToolConfig $CodeToolConfig) Set <p>Code tool configuration message</p>
 * @method MCPToolConfig getMCPToolConfig() Obtain <p>Configuration information of the MCP tool</p>
 * @method void setMCPToolConfig(MCPToolConfig $MCPToolConfig) Set <p>Configuration information of the MCP tool</p>
 */
class ToolConfig extends AbstractModel
{
    /**
     * @var ApiToolConfig <p>API tool configuration message.</p>
     */
    public $ApiToolConfig;

    /**
     * @var AppToolConfig <p>Application configuration information</p>
     */
    public $AppToolConfig;

    /**
     * @var CodeToolConfig <p>Code tool configuration message</p>
     */
    public $CodeToolConfig;

    /**
     * @var MCPToolConfig <p>Configuration information of the MCP tool</p>
     */
    public $MCPToolConfig;

    /**
     * @param ApiToolConfig $ApiToolConfig <p>API tool configuration message.</p>
     * @param AppToolConfig $AppToolConfig <p>Application configuration information</p>
     * @param CodeToolConfig $CodeToolConfig <p>Code tool configuration message</p>
     * @param MCPToolConfig $MCPToolConfig <p>Configuration information of the MCP tool</p>
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
        if (array_key_exists("ApiToolConfig",$param) and $param["ApiToolConfig"] !== null) {
            $this->ApiToolConfig = new ApiToolConfig();
            $this->ApiToolConfig->deserialize($param["ApiToolConfig"]);
        }

        if (array_key_exists("AppToolConfig",$param) and $param["AppToolConfig"] !== null) {
            $this->AppToolConfig = new AppToolConfig();
            $this->AppToolConfig->deserialize($param["AppToolConfig"]);
        }

        if (array_key_exists("CodeToolConfig",$param) and $param["CodeToolConfig"] !== null) {
            $this->CodeToolConfig = new CodeToolConfig();
            $this->CodeToolConfig->deserialize($param["CodeToolConfig"]);
        }

        if (array_key_exists("MCPToolConfig",$param) and $param["MCPToolConfig"] !== null) {
            $this->MCPToolConfig = new MCPToolConfig();
            $this->MCPToolConfig->deserialize($param["MCPToolConfig"]);
        }
    }
}
