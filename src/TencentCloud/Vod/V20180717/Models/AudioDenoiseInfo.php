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
 * Audio noise reduction control information
 *
 * @method string getSwitch() Obtain Audio noise reduction control switch. Available values:
<li>ON: turn on audio noise reduction;</li>
<li>OFF: disable audio noise reduction.</li>
 * @method void setSwitch(string $Switch) Set Audio noise reduction control switch. Available values:
<li>ON: turn on audio noise reduction;</li>
<li>OFF: disable audio noise reduction.</li>
 * @method string getType() Obtain Audio noise reduction type. It is valid only when the audio noise reduction control switch is ON. Available values:
<li>normal: Normal audio noise reduction;</li>
Default value: normal.
 * @method void setType(string $Type) Set Audio noise reduction type. It is valid only when the audio noise reduction control switch is ON. Available values:
<li>normal: Normal audio noise reduction;</li>
Default value: normal.
 */
class AudioDenoiseInfo extends AbstractModel
{
    /**
     * @var string Audio noise reduction control switch. Available values:
<li>ON: turn on audio noise reduction;</li>
<li>OFF: disable audio noise reduction.</li>
     */
    public $Switch;

    /**
     * @var string Audio noise reduction type. It is valid only when the audio noise reduction control switch is ON. Available values:
<li>normal: Normal audio noise reduction;</li>
Default value: normal.
     */
    public $Type;

    /**
     * @param string $Switch Audio noise reduction control switch. Available values:
<li>ON: turn on audio noise reduction;</li>
<li>OFF: disable audio noise reduction.</li>
     * @param string $Type Audio noise reduction type. It is valid only when the audio noise reduction control switch is ON. Available values:
<li>normal: Normal audio noise reduction;</li>
Default value: normal.
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
