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
 * Corresponds to the MCP protocol _meta.ui, defining the meta information of the interactive interface for MCP Apps tools (this period only consumes resourceUri and visibility).
 *
 * @method string getResourceUri() Obtain <p>Associated UI resource URI in UI:// scheme, format: UI://&lt;plug-in flag&gt;/&lt;resource name&gt;-&lt;version&gt;. This field is the entry to the interactive UI of MCP Apps. If not empty, it means the tool supports Apps (shown as "text + interactive UI"). If empty, it is a plain text tool. It is automatically identified and filled based on the tool sync result and does not support manual editing.</p>
 * @method void setResourceUri(string $ResourceUri) Set <p>Associated UI resource URI in UI:// scheme, format: UI://&lt;plug-in flag&gt;/&lt;resource name&gt;-&lt;version&gt;. This field is the entry to the interactive UI of MCP Apps. If not empty, it means the tool supports Apps (shown as "text + interactive UI"). If empty, it is a plain text tool. It is automatically identified and filled based on the tool sync result and does not support manual editing.</p>
 * @method array getVisibility() Obtain <p>Visibility declaration for tool callers. Value range: model (callable by models), app (callable by UI). Multiple selections allowed, for example [&quot;model&quot;,&quot;app&quot;]. Independent of ResourceUri (SEP-1865) and can exist independently. For example, a backend app-only tool is [&quot;app&quot;]. When ResourceUri is non-empty and this field is not specified, it is normalized to [&quot;model&quot;,&quot;app&quot;] by default. Existing non-Apps tools remain empty.</p><p>Enumeration values:</p><ul><li>model: Supports model</li><li>app: Supports app</li></ul>
 * @method void setVisibility(array $Visibility) Set <p>Visibility declaration for tool callers. Value range: model (callable by models), app (callable by UI). Multiple selections allowed, for example [&quot;model&quot;,&quot;app&quot;]. Independent of ResourceUri (SEP-1865) and can exist independently. For example, a backend app-only tool is [&quot;app&quot;]. When ResourceUri is non-empty and this field is not specified, it is normalized to [&quot;model&quot;,&quot;app&quot;] by default. Existing non-Apps tools remain empty.</p><p>Enumeration values:</p><ul><li>model: Supports model</li><li>app: Supports app</li></ul>
 */
class MCPToolUIMeta extends AbstractModel
{
    /**
     * @var string <p>Associated UI resource URI in UI:// scheme, format: UI://&lt;plug-in flag&gt;/&lt;resource name&gt;-&lt;version&gt;. This field is the entry to the interactive UI of MCP Apps. If not empty, it means the tool supports Apps (shown as "text + interactive UI"). If empty, it is a plain text tool. It is automatically identified and filled based on the tool sync result and does not support manual editing.</p>
     */
    public $ResourceUri;

    /**
     * @var array <p>Visibility declaration for tool callers. Value range: model (callable by models), app (callable by UI). Multiple selections allowed, for example [&quot;model&quot;,&quot;app&quot;]. Independent of ResourceUri (SEP-1865) and can exist independently. For example, a backend app-only tool is [&quot;app&quot;]. When ResourceUri is non-empty and this field is not specified, it is normalized to [&quot;model&quot;,&quot;app&quot;] by default. Existing non-Apps tools remain empty.</p><p>Enumeration values:</p><ul><li>model: Supports model</li><li>app: Supports app</li></ul>
     */
    public $Visibility;

    /**
     * @param string $ResourceUri <p>Associated UI resource URI in UI:// scheme, format: UI://&lt;plug-in flag&gt;/&lt;resource name&gt;-&lt;version&gt;. This field is the entry to the interactive UI of MCP Apps. If not empty, it means the tool supports Apps (shown as "text + interactive UI"). If empty, it is a plain text tool. It is automatically identified and filled based on the tool sync result and does not support manual editing.</p>
     * @param array $Visibility <p>Visibility declaration for tool callers. Value range: model (callable by models), app (callable by UI). Multiple selections allowed, for example [&quot;model&quot;,&quot;app&quot;]. Independent of ResourceUri (SEP-1865) and can exist independently. For example, a backend app-only tool is [&quot;app&quot;]. When ResourceUri is non-empty and this field is not specified, it is normalized to [&quot;model&quot;,&quot;app&quot;] by default. Existing non-Apps tools remain empty.</p><p>Enumeration values:</p><ul><li>model: Supports model</li><li>app: Supports app</li></ul>
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
        if (array_key_exists("ResourceUri",$param) and $param["ResourceUri"] !== null) {
            $this->ResourceUri = $param["ResourceUri"];
        }

        if (array_key_exists("Visibility",$param) and $param["Visibility"] !== null) {
            $this->Visibility = $param["Visibility"];
        }
    }
}
