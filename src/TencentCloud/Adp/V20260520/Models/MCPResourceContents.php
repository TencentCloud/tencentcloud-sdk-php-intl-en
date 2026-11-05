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
 * MCP ResourceContents. The chat-manage side does not parse internal fields and only passes through the structure.
 *
 * @method string getBlob() Obtain <p>Binary content. Either this parameter or text must be specified.</p>
 * @method void setBlob(string $Blob) Set <p>Binary content. Either this parameter or text must be specified.</p>
 * @method string getMeta() Obtain <p>JSON: Original _meta of a single resource</p>
 * @method void setMeta(string $Meta) Set <p>JSON: Original _meta of a single resource</p>
 * @method string getMimeType() Obtain <p>MIME type. The HTML of the MCP App is text/html;profile=mcp-app</p>
 * @method void setMimeType(string $MimeType) Set <p>MIME type. The HTML of the MCP App is text/html;profile=mcp-app</p>
 * @method string getText() Obtain <p>Text content. Either this field or blob is required.</p>
 * @method void setText(string $Text) Set <p>Text content. Either this field or blob is required.</p>
 * @method string getUri() Obtain <p>Resource URI</p>
 * @method void setUri(string $Uri) Set <p>Resource URI</p>
 */
class MCPResourceContents extends AbstractModel
{
    /**
     * @var string <p>Binary content. Either this parameter or text must be specified.</p>
     */
    public $Blob;

    /**
     * @var string <p>JSON: Original _meta of a single resource</p>
     */
    public $Meta;

    /**
     * @var string <p>MIME type. The HTML of the MCP App is text/html;profile=mcp-app</p>
     */
    public $MimeType;

    /**
     * @var string <p>Text content. Either this field or blob is required.</p>
     */
    public $Text;

    /**
     * @var string <p>Resource URI</p>
     */
    public $Uri;

    /**
     * @param string $Blob <p>Binary content. Either this parameter or text must be specified.</p>
     * @param string $Meta <p>JSON: Original _meta of a single resource</p>
     * @param string $MimeType <p>MIME type. The HTML of the MCP App is text/html;profile=mcp-app</p>
     * @param string $Text <p>Text content. Either this field or blob is required.</p>
     * @param string $Uri <p>Resource URI</p>
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
        if (array_key_exists("Blob",$param) and $param["Blob"] !== null) {
            $this->Blob = $param["Blob"];
        }

        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = $param["Meta"];
        }

        if (array_key_exists("MimeType",$param) and $param["MimeType"] !== null) {
            $this->MimeType = $param["MimeType"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }
    }
}
