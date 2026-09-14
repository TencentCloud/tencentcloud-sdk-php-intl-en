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
 * TSC parameter configuration.
 *
 * @method string getType() Obtain Top speed Codec type. Available values:
<li>TEHD-100: top speed codec-100 (video top speed codec).</li>
<li>TEHD-200: top speed codec-200 (audio top speed codec).</li>
If not specified, top speed Codec is not enabled.
 * @method void setType(string $Type) Set Top speed Codec type. Available values:
<li>TEHD-100: top speed codec-100 (video top speed codec).</li>
<li>TEHD-200: top speed codec-200 (audio top speed codec).</li>
If not specified, top speed Codec is not enabled.
 * @method integer getMaxVideoBitrate() Obtain Maximum video bitrate. Valid when Type is set to top speed Codec.
If this is not specified or is set to 0, no upper limit is set for the video bitrate.
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) Set Maximum video bitrate. Valid when Type is set to top speed Codec.
If this is not specified or is set to 0, no upper limit is set for the video bitrate.
 */
class TEHDConfig extends AbstractModel
{
    /**
     * @var string Top speed Codec type. Available values:
<li>TEHD-100: top speed codec-100 (video top speed codec).</li>
<li>TEHD-200: top speed codec-200 (audio top speed codec).</li>
If not specified, top speed Codec is not enabled.
     */
    public $Type;

    /**
     * @var integer Maximum video bitrate. Valid when Type is set to top speed Codec.
If this is not specified or is set to 0, no upper limit is set for the video bitrate.
     */
    public $MaxVideoBitrate;

    /**
     * @param string $Type Top speed Codec type. Available values:
<li>TEHD-100: top speed codec-100 (video top speed codec).</li>
<li>TEHD-200: top speed codec-200 (audio top speed codec).</li>
If not specified, top speed Codec is not enabled.
     * @param integer $MaxVideoBitrate Maximum video bitrate. Valid when Type is set to top speed Codec.
If this is not specified or is set to 0, no upper limit is set for the video bitrate.
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
