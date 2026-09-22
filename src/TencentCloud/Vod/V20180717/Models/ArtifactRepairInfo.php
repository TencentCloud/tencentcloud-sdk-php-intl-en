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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Artifact (burr) removal control information.
 *
 * @method string getSwitch() Obtain Artifact (burr) removal control switch. Available values:
<li>ON: enable artifact (burr) removal;</li>
<li>OFF: disables artifact (burr) removal.</li>
 * @method void setSwitch(string $Switch) Set Artifact (burr) removal control switch. Available values:
<li>ON: enable artifact (burr) removal;</li>
<li>OFF: disables artifact (burr) removal.</li>
 * @method string getType() Obtain Artifact (burr) removal type. It is valid only when the artifact (burr) removal control switch is ON. Available values:
<li>weak: slightly remove artifacts (burrs);</li>
<li>strong: Strong artifact removal (burr).</li>
Default value: weak.
 * @method void setType(string $Type) Set Artifact (burr) removal type. It is valid only when the artifact (burr) removal control switch is ON. Available values:
<li>weak: slightly remove artifacts (burrs);</li>
<li>strong: Strong artifact removal (burr).</li>
Default value: weak.
 */
class ArtifactRepairInfo extends AbstractModel
{
    /**
     * @var string Artifact (burr) removal control switch. Available values:
<li>ON: enable artifact (burr) removal;</li>
<li>OFF: disables artifact (burr) removal.</li>
     */
    public $Switch;

    /**
     * @var string Artifact (burr) removal type. It is valid only when the artifact (burr) removal control switch is ON. Available values:
<li>weak: slightly remove artifacts (burrs);</li>
<li>strong: Strong artifact removal (burr).</li>
Default value: weak.
     */
    public $Type;

    /**
     * @param string $Switch Artifact (burr) removal control switch. Available values:
<li>ON: enable artifact (burr) removal;</li>
<li>OFF: disables artifact (burr) removal.</li>
     * @param string $Type Artifact (burr) removal type. It is valid only when the artifact (burr) removal control switch is ON. Available values:
<li>weak: slightly remove artifacts (burrs);</li>
<li>strong: Strong artifact removal (burr).</li>
Default value: weak.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
