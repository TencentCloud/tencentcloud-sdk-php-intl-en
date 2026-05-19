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
 * Input parameter of adaptive bitrate task multilingual subtitles.
 *
 * @method string getId() Obtain Subtitle ID. The subtitle must belong to the input main media of the adaptive bitrate task.
 * @method void setId(string $Id) Set Subtitle ID. The subtitle must belong to the input main media of the adaptive bitrate task.
 * @method string getDefault() Obtain Set as the default subtitle for adaptive bitrate. Value:
<li>YES: Set as default subtitle;</li>
<li>NO: Not set as default subtitle (default value).</li>
 * @method void setDefault(string $Default) Set Set as the default subtitle for adaptive bitrate. Value:
<li>YES: Set as default subtitle;</li>
<li>NO: Not set as default subtitle (default value).</li>
 */
class ComplexAdaptiveDynamicStreamingTaskSubtitleInput extends AbstractModel
{
    /**
     * @var string Subtitle ID. The subtitle must belong to the input main media of the adaptive bitrate task.
     */
    public $Id;

    /**
     * @var string Set as the default subtitle for adaptive bitrate. Value:
<li>YES: Set as default subtitle;</li>
<li>NO: Not set as default subtitle (default value).</li>
     */
    public $Default;

    /**
     * @param string $Id Subtitle ID. The subtitle must belong to the input main media of the adaptive bitrate task.
     * @param string $Default Set as the default subtitle for adaptive bitrate. Value:
<li>YES: Set as default subtitle;</li>
<li>NO: Not set as default subtitle (default value).</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
