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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Sever parameters.
 *
 * @method string getName() Obtain <p>The unique mcp identifier.</p>
 * @method void setName(string $Name) Set <p>The unique mcp identifier.</p>
 * @method string getUrl() Obtain <p>Endpoint URL.</p>
 * @method void setUrl(string $Url) Set <p>Endpoint URL.</p>
 * @method integer getTimeout() Obtain <p>Request timeout in ms. Default: 5000. This value should not exceed 30000.</p>
 * @method void setTimeout(integer $Timeout) Set <p>Request timeout in ms. Default: 5000. This value should not exceed 30000.</p>
 * @method array getHeaders() Obtain <p>Custom request headers, such as authentication information.</p>
 * @method void setHeaders(array $Headers) Set <p>Custom request headers, such as authentication information.</p>
 * @method array getToolList() Obtain <p>Allowlist of tools that can be used.</p>
 * @method void setToolList(array $ToolList) Set <p>Allowlist of tools that can be used.</p>
 */
class VoiceConversationMcpServer extends AbstractModel
{
    /**
     * @var string <p>The unique mcp identifier.</p>
     */
    public $Name;

    /**
     * @var string <p>Endpoint URL.</p>
     */
    public $Url;

    /**
     * @var integer <p>Request timeout in ms. Default: 5000. This value should not exceed 30000.</p>
     */
    public $Timeout;

    /**
     * @var array <p>Custom request headers, such as authentication information.</p>
     */
    public $Headers;

    /**
     * @var array <p>Allowlist of tools that can be used.</p>
     */
    public $ToolList;

    /**
     * @param string $Name <p>The unique mcp identifier.</p>
     * @param string $Url <p>Endpoint URL.</p>
     * @param integer $Timeout <p>Request timeout in ms. Default: 5000. This value should not exceed 30000.</p>
     * @param array $Headers <p>Custom request headers, such as authentication information.</p>
     * @param array $ToolList <p>Allowlist of tools that can be used.</p>
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("ToolList",$param) and $param["ToolList"] !== null) {
            $this->ToolList = $param["ToolList"];
        }
    }
}
