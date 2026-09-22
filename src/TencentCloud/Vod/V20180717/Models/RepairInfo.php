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
 * Image quality restoration control parameters.
 *
 * @method string getSwitch() Obtain Image quality restoration control switch. Available values:
<li>ON: Enable image quality restoration;</li>
<li>OFF: disables image quality restoration.</li>
 * @method void setSwitch(string $Switch) Set Image quality restoration control switch. Available values:
<li>ON: Enable image quality restoration;</li>
<li>OFF: disables image quality restoration.</li>
 * @method string getType() Obtain Image quality restoration type. It is valid only when the image quality restoration control switch is ON. Available values:
<li>weak: light image quality restoration;</li>
<li>normal: normal image quality restoration;</li>
<li>strong: strong image restoration.</li>
Default value: weak.
 * @method void setType(string $Type) Set Image quality restoration type. It is valid only when the image quality restoration control switch is ON. Available values:
<li>weak: light image quality restoration;</li>
<li>normal: normal image quality restoration;</li>
<li>strong: strong image restoration.</li>
Default value: weak.
 */
class RepairInfo extends AbstractModel
{
    /**
     * @var string Image quality restoration control switch. Available values:
<li>ON: Enable image quality restoration;</li>
<li>OFF: disables image quality restoration.</li>
     */
    public $Switch;

    /**
     * @var string Image quality restoration type. It is valid only when the image quality restoration control switch is ON. Available values:
<li>weak: light image quality restoration;</li>
<li>normal: normal image quality restoration;</li>
<li>strong: strong image restoration.</li>
Default value: weak.
     */
    public $Type;

    /**
     * @param string $Switch Image quality restoration control switch. Available values:
<li>ON: Enable image quality restoration;</li>
<li>OFF: disables image quality restoration.</li>
     * @param string $Type Image quality restoration type. It is valid only when the image quality restoration control switch is ON. Available values:
<li>weak: light image quality restoration;</li>
<li>normal: normal image quality restoration;</li>
<li>strong: strong image restoration.</li>
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
