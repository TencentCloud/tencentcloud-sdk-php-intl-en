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
 * Parameter configuration for top speed Codec.
 *
 * @method string getType() Obtain Top speed codec type. Available values: <li>TEHD-100 means top speed codec-100;</li> <li>OFF means disabling top speed codec.</li>If not specified, OFF is used.
 * @method void setType(string $Type) Set Top speed codec type. Available values: <li>TEHD-100 means top speed codec-100;</li> <li>OFF means disabling top speed codec.</li>If not specified, OFF is used.
 * @method integer getMaxVideoBitrate() Obtain Maximum video bitrate. Valid when Type is specified as top speed Codec.
If not specified or set to 0, VOD automatically sets the bitrate cap.
 * @method void setMaxVideoBitrate(integer $MaxVideoBitrate) Set Maximum video bitrate. Valid when Type is specified as top speed Codec.
If not specified or set to 0, VOD automatically sets the bitrate cap.
 */
class TEHDConfig extends AbstractModel
{
    /**
     * @var string Top speed codec type. Available values: <li>TEHD-100 means top speed codec-100;</li> <li>OFF means disabling top speed codec.</li>If not specified, OFF is used.
     */
    public $Type;

    /**
     * @var integer Maximum video bitrate. Valid when Type is specified as top speed Codec.
If not specified or set to 0, VOD automatically sets the bitrate cap.
     */
    public $MaxVideoBitrate;

    /**
     * @param string $Type Top speed codec type. Available values: <li>TEHD-100 means top speed codec-100;</li> <li>OFF means disabling top speed codec.</li>If not specified, OFF is used.
     * @param integer $MaxVideoBitrate Maximum video bitrate. Valid when Type is specified as top speed Codec.
If not specified or set to 0, VOD automatically sets the bitrate cap.
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
