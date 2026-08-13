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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TESHD parameter configuration.
 *
 * @method string getType() Obtain Top Speed Codec type. Available values:
<li>TEHD-100: Top Speed Codec-100 (video top speed codec).</li>
<li>TEHD-200: Top Speed Codec-200 (TSC audio).</li>
Leave it blank to keep it unchanged.
 * @method void setType(string $Type) Set Top Speed Codec type. Available values:
<li>TEHD-100: Top Speed Codec-100 (video top speed codec).</li>
<li>TEHD-200: Top Speed Codec-200 (TSC audio).</li>
Leave it blank to keep it unchanged.
 * @method integer getMaxVideoBitrate() Obtain Upper limit of video bitrate. Leave blank to keep unchanged.
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) Set Upper limit of video bitrate. Leave blank to keep unchanged.
 */
class TEHDConfigForUpdate extends AbstractModel
{
    /**
     * @var string Top Speed Codec type. Available values:
<li>TEHD-100: Top Speed Codec-100 (video top speed codec).</li>
<li>TEHD-200: Top Speed Codec-200 (TSC audio).</li>
Leave it blank to keep it unchanged.
     */
    public $Type;

    /**
     * @var integer Upper limit of video bitrate. Leave blank to keep unchanged.
     */
    public $MaxVideoBitrate;

    /**
     * @param string $Type Top Speed Codec type. Available values:
<li>TEHD-100: Top Speed Codec-100 (video top speed codec).</li>
<li>TEHD-200: Top Speed Codec-200 (TSC audio).</li>
Leave it blank to keep it unchanged.
     * @param integer $MaxVideoBitrate Upper limit of video bitrate. Leave blank to keep unchanged.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MaxVideoBitrate",$param) and $param["MaxVideoBitrate"] !== null) {
            $this->MaxVideoBitrate = $param["MaxVideoBitrate"];
        }
    }
}
