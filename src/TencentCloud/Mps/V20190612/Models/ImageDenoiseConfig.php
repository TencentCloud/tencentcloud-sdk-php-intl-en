<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image denoising configuration.
 *
 * @method string getSwitch() Obtain Capability configuration enabling status. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
 * @method void setSwitch(string $Switch) Set Capability configuration enabling status. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
 * @method string getType() Obtain Type, with valid values including:
<li>weak</li>
<li>strong</li>
Default value: weak.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Type, with valid values including:
<li>weak</li>
<li>strong</li>
Default value: weak.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ImageDenoiseConfig extends AbstractModel
{
    /**
     * @var string Capability configuration enabling status. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
     */
    public $Switch;

    /**
     * @var string Type, with valid values including:
<li>weak</li>
<li>strong</li>
Default value: weak.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @param string $Switch Capability configuration enabling status. Valid values:
<li>ON: enabled.</li>
<li>OFF: disabled.</li>
Default value: ON.
     * @param string $Type Type, with valid values including:
<li>weak</li>
<li>strong</li>
Default value: weak.
Note: This field may return null, indicating that no valid value can be obtained.
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
