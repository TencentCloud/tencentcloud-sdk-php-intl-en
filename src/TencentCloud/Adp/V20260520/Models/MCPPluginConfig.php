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
 * MCP plug-in configuration message
 *
 * @method string getExternalMCPServerUrl() Obtain <p>MCP plug-in public access address</p>
 * @method void setExternalMCPServerUrl(string $ExternalMCPServerUrl) Set <p>MCP plug-in public access address</p>
 * @method string getMCPServerUrl() Obtain <p>MCP server address</p>
 * @method void setMCPServerUrl(string $MCPServerUrl) Set <p>MCP server address</p>
 * @method integer getMCPTransport() Obtain <p>MCP transmission type: SSE/Streamable<br>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | SSE + HTTP mode |<br>| 1 | Streamable HTTP mode |</p>
 * @method void setMCPTransport(integer $MCPTransport) Set <p>MCP transmission type: SSE/Streamable<br>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | SSE + HTTP mode |<br>| 1 | Streamable HTTP mode |</p>
 * @method array getPluginHeader() Obtain <p>header parameters of the MCP plug-in</p>
 * @method void setPluginHeader(array $PluginHeader) Set <p>header parameters of the MCP plug-in</p>
 * @method array getPluginQuery() Obtain <p>query parameter of the MCP plug-in</p>
 * @method void setPluginQuery(array $PluginQuery) Set <p>query parameter of the MCP plug-in</p>
 * @method integer getSSEReadTimeout() Obtain <p>SSE persistent connection timeout period, in seconds</p>
 * @method void setSSEReadTimeout(integer $SSEReadTimeout) Set <p>SSE persistent connection timeout period, in seconds</p>
 * @method integer getTimeout() Obtain <p>Request timeout period, in seconds</p>
 * @method void setTimeout(integer $Timeout) Set <p>Request timeout period, in seconds</p>
 * @method AuthConfig getAuthConfig() Obtain <p>Authorization information.</p>
 * @method void setAuthConfig(AuthConfig $AuthConfig) Set <p>Authorization information.</p>
 * @method boolean getSupportsApps() Obtain <p>Whether the interactive interface (MCP Apps) and plug-in-level tags are supported. Default false</p>
 * @method void setSupportsApps(boolean $SupportsApps) Set <p>Whether the interactive interface (MCP Apps) and plug-in-level tags are supported. Default false</p>
 */
class MCPPluginConfig extends AbstractModel
{
    /**
     * @var string <p>MCP plug-in public access address</p>
     */
    public $ExternalMCPServerUrl;

    /**
     * @var string <p>MCP server address</p>
     */
    public $MCPServerUrl;

    /**
     * @var integer <p>MCP transmission type: SSE/Streamable<br>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | SSE + HTTP mode |<br>| 1 | Streamable HTTP mode |</p>
     */
    public $MCPTransport;

    /**
     * @var array <p>header parameters of the MCP plug-in</p>
     */
    public $PluginHeader;

    /**
     * @var array <p>query parameter of the MCP plug-in</p>
     */
    public $PluginQuery;

    /**
     * @var integer <p>SSE persistent connection timeout period, in seconds</p>
     */
    public $SSEReadTimeout;

    /**
     * @var integer <p>Request timeout period, in seconds</p>
     */
    public $Timeout;

    /**
     * @var AuthConfig <p>Authorization information.</p>
     */
    public $AuthConfig;

    /**
     * @var boolean <p>Whether the interactive interface (MCP Apps) and plug-in-level tags are supported. Default false</p>
     */
    public $SupportsApps;

    /**
     * @param string $ExternalMCPServerUrl <p>MCP plug-in public access address</p>
     * @param string $MCPServerUrl <p>MCP server address</p>
     * @param integer $MCPTransport <p>MCP transmission type: SSE/Streamable<br>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | SSE + HTTP mode |<br>| 1 | Streamable HTTP mode |</p>
     * @param array $PluginHeader <p>header parameters of the MCP plug-in</p>
     * @param array $PluginQuery <p>query parameter of the MCP plug-in</p>
     * @param integer $SSEReadTimeout <p>SSE persistent connection timeout period, in seconds</p>
     * @param integer $Timeout <p>Request timeout period, in seconds</p>
     * @param AuthConfig $AuthConfig <p>Authorization information.</p>
     * @param boolean $SupportsApps <p>Whether the interactive interface (MCP Apps) and plug-in-level tags are supported. Default false</p>
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
        if (array_key_exists("ExternalMCPServerUrl",$param) and $param["ExternalMCPServerUrl"] !== null) {
            $this->ExternalMCPServerUrl = $param["ExternalMCPServerUrl"];
        }

        if (array_key_exists("MCPServerUrl",$param) and $param["MCPServerUrl"] !== null) {
            $this->MCPServerUrl = $param["MCPServerUrl"];
        }

        if (array_key_exists("MCPTransport",$param) and $param["MCPTransport"] !== null) {
            $this->MCPTransport = $param["MCPTransport"];
        }

        if (array_key_exists("PluginHeader",$param) and $param["PluginHeader"] !== null) {
            $this->PluginHeader = [];
            foreach ($param["PluginHeader"] as $key => $value){
                $obj = new PluginParam();
                $obj->deserialize($value);
                array_push($this->PluginHeader, $obj);
            }
        }

        if (array_key_exists("PluginQuery",$param) and $param["PluginQuery"] !== null) {
            $this->PluginQuery = [];
            foreach ($param["PluginQuery"] as $key => $value){
                $obj = new PluginParam();
                $obj->deserialize($value);
                array_push($this->PluginQuery, $obj);
            }
        }

        if (array_key_exists("SSEReadTimeout",$param) and $param["SSEReadTimeout"] !== null) {
            $this->SSEReadTimeout = $param["SSEReadTimeout"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("AuthConfig",$param) and $param["AuthConfig"] !== null) {
            $this->AuthConfig = new AuthConfig();
            $this->AuthConfig->deserialize($param["AuthConfig"]);
        }

        if (array_key_exists("SupportsApps",$param) and $param["SupportsApps"] !== null) {
            $this->SupportsApps = $param["SupportsApps"];
        }
    }
}
