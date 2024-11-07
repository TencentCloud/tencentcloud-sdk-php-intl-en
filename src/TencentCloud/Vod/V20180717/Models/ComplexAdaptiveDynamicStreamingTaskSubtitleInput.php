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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameters for subtitles in the complex adaptive bitrate streaming task.
 *
 * @method string getId() Obtain Subtitle ID, which must belongs to the main media.
 * @method void setId(string $Id) Set Subtitle ID, which must belongs to the main media.
 * @method string getDefault() Obtain Whether to set as the default subtitle for adaptive bitrate streaming.
<li>YES: Set as the default subtitle;</li>
<li>NO: Not set as the default subtitle (default value).</li>
 * @method void setDefault(string $Default) Set Whether to set as the default subtitle for adaptive bitrate streaming.
<li>YES: Set as the default subtitle;</li>
<li>NO: Not set as the default subtitle (default value).</li>
 */
class ComplexAdaptiveDynamicStreamingTaskSubtitleInput extends AbstractModel
{
    /**
     * @var string Subtitle ID, which must belongs to the main media.
     */
    public $Id;

    /**
     * @var string Whether to set as the default subtitle for adaptive bitrate streaming.
<li>YES: Set as the default subtitle;</li>
<li>NO: Not set as the default subtitle (default value).</li>
     */
    public $Default;

    /**
     * @param string $Id Subtitle ID, which must belongs to the main media.
     * @param string $Default Whether to set as the default subtitle for adaptive bitrate streaming.
<li>YES: Set as the default subtitle;</li>
<li>NO: Not set as the default subtitle (default value).</li>
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
