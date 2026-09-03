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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP entity
 *
 * @method string getMCPId() Obtain <p>mcp ID</p>
 * @method void setMCPId(string $MCPId) Set <p>mcp ID</p>
 * @method string getName() Obtain <p>MCP name</p>
 * @method void setName(string $Name) Set <p>MCP name</p>
 * @method string getDescription() Obtain <p>MCP description</p>
 * @method void setDescription(string $Description) Set <p>MCP description</p>
 * @method string getUrl() Obtain <p>MCP URL</p>
 * @method void setUrl(string $Url) Set <p>MCP URL</p>
 * @method string getTransport() Obtain <p>Transport protocol: sse / streamable_http / stdio</p>
 * @method void setTransport(string $Transport) Set <p>Transport protocol: sse / streamable_http / stdio</p>
 * @method string getAuthType() Obtain <p>Authentication type: none / bearer / basic / api_key</p>
 * @method void setAuthType(string $AuthType) Set <p>Authentication type: none / bearer / basic / api_key</p>
 * @method string getAuthSecret() Obtain <p>Authentication key (masked in the response)</p>
 * @method void setAuthSecret(string $AuthSecret) Set <p>Authentication key (masked in the response)</p>
 * @method integer getTimeout() Obtain <p>Timeout (s)</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout (s)</p>
 * @method integer getRetryCount() Obtain <p>Retry count</p>
 * @method void setRetryCount(integer $RetryCount) Set <p>Retry count</p>
 * @method string getHeaders() Obtain <p>Request header JSON</p>
 * @method void setHeaders(string $Headers) Set <p>Request header JSON</p>
 * @method boolean getEnabled() Obtain <p>Whether to enable</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable</p>
 */
class MCPInfo extends AbstractModel
{
    /**
     * @var string <p>mcp ID</p>
     */
    public $MCPId;

    /**
     * @var string <p>MCP name</p>
     */
    public $Name;

    /**
     * @var string <p>MCP description</p>
     */
    public $Description;

    /**
     * @var string <p>MCP URL</p>
     */
    public $Url;

    /**
     * @var string <p>Transport protocol: sse / streamable_http / stdio</p>
     */
    public $Transport;

    /**
     * @var string <p>Authentication type: none / bearer / basic / api_key</p>
     */
    public $AuthType;

    /**
     * @var string <p>Authentication key (masked in the response)</p>
     */
    public $AuthSecret;

    /**
     * @var integer <p>Timeout (s)</p>
     */
    public $Timeout;

    /**
     * @var integer <p>Retry count</p>
     */
    public $RetryCount;

    /**
     * @var string <p>Request header JSON</p>
     */
    public $Headers;

    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enabled;

    /**
     * @param string $MCPId <p>mcp ID</p>
     * @param string $Name <p>MCP name</p>
     * @param string $Description <p>MCP description</p>
     * @param string $Url <p>MCP URL</p>
     * @param string $Transport <p>Transport protocol: sse / streamable_http / stdio</p>
     * @param string $AuthType <p>Authentication type: none / bearer / basic / api_key</p>
     * @param string $AuthSecret <p>Authentication key (masked in the response)</p>
     * @param integer $Timeout <p>Timeout (s)</p>
     * @param integer $RetryCount <p>Retry count</p>
     * @param string $Headers <p>Request header JSON</p>
     * @param boolean $Enabled <p>Whether to enable</p>
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
        if (array_key_exists("MCPId",$param) and $param["MCPId"] !== null) {
            $this->MCPId = $param["MCPId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Transport",$param) and $param["Transport"] !== null) {
            $this->Transport = $param["Transport"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthSecret",$param) and $param["AuthSecret"] !== null) {
            $this->AuthSecret = $param["AuthSecret"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = $param["Headers"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
