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
 * ApiToolConfig
 *
 * @method array getBody() Obtain <p>Request body parameters</p>
 * @method void setBody(array $Body) Set <p>Request body parameters</p>
 * @method ToolExample getExample() Obtain <p>Example</p>
 * @method void setExample(ToolExample $Example) Set <p>Example</p>
 * @method string getExternalApiUrl() Obtain <p>External call address of API plug-in</p>
 * @method void setExternalApiUrl(string $ExternalApiUrl) Set <p>External call address of API plug-in</p>
 * @method array getHeader() Obtain <p>Header</p>
 * @method void setHeader(array $Header) Set <p>Header</p>
 * @method string getMethod() Obtain <p>Request method</p>
 * @method void setMethod(string $Method) Set <p>Request method</p>
 * @method array getOutputs() Obtain <p>Output</p>
 * @method void setOutputs(array $Outputs) Set <p>Output</p>
 * @method array getQuery() Obtain <p>Query parameter</p>
 * @method void setQuery(array $Query) Set <p>Query parameter</p>
 * @method integer getStreamMode() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>Non-streaming</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>Streaming</td></tr></tbody></table>
 * @method void setStreamMode(integer $StreamMode) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>Non-streaming</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>Streaming</td></tr></tbody></table>
 * @method string getUrl() Obtain <p>Address</p>
 * @method void setUrl(string $Url) Set <p>Address</p>
 */
class ApiToolConfig extends AbstractModel
{
    /**
     * @var array <p>Request body parameters</p>
     */
    public $Body;

    /**
     * @var ToolExample <p>Example</p>
     */
    public $Example;

    /**
     * @var string <p>External call address of API plug-in</p>
     */
    public $ExternalApiUrl;

    /**
     * @var array <p>Header</p>
     */
    public $Header;

    /**
     * @var string <p>Request method</p>
     */
    public $Method;

    /**
     * @var array <p>Output</p>
     */
    public $Outputs;

    /**
     * @var array <p>Query parameter</p>
     */
    public $Query;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>Non-streaming</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>Streaming</td></tr></tbody></table>
     */
    public $StreamMode;

    /**
     * @var string <p>Address</p>
     */
    public $Url;

    /**
     * @param array $Body <p>Request body parameters</p>
     * @param ToolExample $Example <p>Example</p>
     * @param string $ExternalApiUrl <p>External call address of API plug-in</p>
     * @param array $Header <p>Header</p>
     * @param string $Method <p>Request method</p>
     * @param array $Outputs <p>Output</p>
     * @param array $Query <p>Query parameter</p>
     * @param integer $StreamMode <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>STREAM_MODE_UNARY</td><td>0</td><td>Non-streaming</td></tr><tr><td>STREAM_MODE_STREAMING</td><td>1</td><td>Streaming</td></tr></tbody></table>
     * @param string $Url <p>Address</p>
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
        if (array_key_exists("Body",$param) and $param["Body"] !== null) {
            $this->Body = [];
            foreach ($param["Body"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Body, $obj);
            }
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = new ToolExample();
            $this->Example->deserialize($param["Example"]);
        }

        if (array_key_exists("ExternalApiUrl",$param) and $param["ExternalApiUrl"] !== null) {
            $this->ExternalApiUrl = $param["ExternalApiUrl"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = [];
            foreach ($param["Header"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Header, $obj);
            }
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new ResponseParam();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = [];
            foreach ($param["Query"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->Query, $obj);
            }
        }

        if (array_key_exists("StreamMode",$param) and $param["StreamMode"] !== null) {
            $this->StreamMode = $param["StreamMode"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
