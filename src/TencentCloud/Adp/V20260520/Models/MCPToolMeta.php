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
 * _meta corresponding to the MCP protocol tool, carrying UI meta information for MCP Apps tools (only resourceUri is consumed in the current period)
 *
 * @method MCPToolUIMeta getUi() Obtain <p>UI extended meta information of the tool, corresponding to _meta.UI in the MCP protocol, declaring the interactive UI resource (ResourceUri) associated with the tool and the caller Visibility. Returned only when the tool supports MCP Apps or declares Visibility; this field is empty for text tools. For details, see the MCPToolUIMeta structure definition.</p>
 * @method void setUi(MCPToolUIMeta $Ui) Set <p>UI extended meta information of the tool, corresponding to _meta.UI in the MCP protocol, declaring the interactive UI resource (ResourceUri) associated with the tool and the caller Visibility. Returned only when the tool supports MCP Apps or declares Visibility; this field is empty for text tools. For details, see the MCPToolUIMeta structure definition.</p>
 */
class MCPToolMeta extends AbstractModel
{
    /**
     * @var MCPToolUIMeta <p>UI extended meta information of the tool, corresponding to _meta.UI in the MCP protocol, declaring the interactive UI resource (ResourceUri) associated with the tool and the caller Visibility. Returned only when the tool supports MCP Apps or declares Visibility; this field is empty for text tools. For details, see the MCPToolUIMeta structure definition.</p>
     */
    public $Ui;

    /**
     * @param MCPToolUIMeta $Ui <p>UI extended meta information of the tool, corresponding to _meta.UI in the MCP protocol, declaring the interactive UI resource (ResourceUri) associated with the tool and the caller Visibility. Returned only when the tool supports MCP Apps or declares Visibility; this field is empty for text tools. For details, see the MCPToolUIMeta structure definition.</p>
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
        if (array_key_exists("Ui",$param) and $param["Ui"] !== null) {
            $this->Ui = new MCPToolUIMeta();
            $this->Ui->deserialize($param["Ui"]);
        }
    }
}
