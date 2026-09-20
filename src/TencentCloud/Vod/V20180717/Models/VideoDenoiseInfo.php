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
 * Video noise reduction control parameters
 *
 * @method string getSwitch() Obtain Video noise reduction control switch. Available values:
<li>ON: turn on video noise reduction</li>
<li>OFF: Turn off video noise reduction.</li>
 * @method void setSwitch(string $Switch) Set Video noise reduction control switch. Available values:
<li>ON: turn on video noise reduction</li>
<li>OFF: Turn off video noise reduction.</li>
 * @method string getType() Obtain Video noise reduction type. It is valid only when the video noise reduction control switch is ON. Available values:
<li>weak: light video noise reduction;</li>
<li>strong: strong video noise reduction.</li>
Default value: weak.
 * @method void setType(string $Type) Set Video noise reduction type. It is valid only when the video noise reduction control switch is ON. Available values:
<li>weak: light video noise reduction;</li>
<li>strong: strong video noise reduction.</li>
Default value: weak.
 */
class VideoDenoiseInfo extends AbstractModel
{
    /**
     * @var string Video noise reduction control switch. Available values:
<li>ON: turn on video noise reduction</li>
<li>OFF: Turn off video noise reduction.</li>
     */
    public $Switch;

    /**
     * @var string Video noise reduction type. It is valid only when the video noise reduction control switch is ON. Available values:
<li>weak: light video noise reduction;</li>
<li>strong: strong video noise reduction.</li>
Default value: weak.
     */
    public $Type;

    /**
     * @param string $Switch Video noise reduction control switch. Available values:
<li>ON: turn on video noise reduction</li>
<li>OFF: Turn off video noise reduction.</li>
     * @param string $Type Video noise reduction type. It is valid only when the video noise reduction control switch is ON. Available values:
<li>weak: light video noise reduction;</li>
<li>strong: strong video noise reduction.</li>
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
