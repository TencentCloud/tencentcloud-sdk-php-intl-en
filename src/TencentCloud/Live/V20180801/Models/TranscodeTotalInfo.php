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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Total usage of the transcoding service
 *
 * @method string getTime() Obtain Usage time (Beijing time)
Example: 2019-03-01 00:00:00
 * @method void setTime(string $Time) Set Usage time (Beijing time)
Example: 2019-03-01 00:00:00
 * @method integer getDuration() Obtain Transcoding duration in minutes
 * @method void setDuration(integer $Duration) Set Transcoding duration in minutes
 * @method string getModuleCodec() Obtain Codec, with modules
Examples:
`liveprocessor_H264`: live transcoding-H264
`liveprocessor_H265`: live transcoding-H265
`topspeed_H264`: top speed codec-H264
`topspeed_H265`: top speed codec-H265
 * @method void setModuleCodec(string $ModuleCodec) Set Codec, with modules
Examples:
`liveprocessor_H264`: live transcoding-H264
`liveprocessor_H265`: live transcoding-H265
`topspeed_H264`: top speed codec-H264
`topspeed_H265`: top speed codec-H265
 * @method string getResolution() Obtain Resolution
Example: 540*480
 * @method void setResolution(string $Resolution) Set Resolution
Example: 540*480
 */
class TranscodeTotalInfo extends AbstractModel
{
    /**
     * @var string Usage time (Beijing time)
Example: 2019-03-01 00:00:00
     */
    public $Time;

    /**
     * @var integer Transcoding duration in minutes
     */
    public $Duration;

    /**
     * @var string Codec, with modules
Examples:
`liveprocessor_H264`: live transcoding-H264
`liveprocessor_H265`: live transcoding-H265
`topspeed_H264`: top speed codec-H264
`topspeed_H265`: top speed codec-H265
     */
    public $ModuleCodec;

    /**
     * @var string Resolution
Example: 540*480
     */
    public $Resolution;

    /**
     * @param string $Time Usage time (Beijing time)
Example: 2019-03-01 00:00:00
     * @param integer $Duration Transcoding duration in minutes
     * @param string $ModuleCodec Codec, with modules
Examples:
`liveprocessor_H264`: live transcoding-H264
`liveprocessor_H265`: live transcoding-H265
`topspeed_H264`: top speed codec-H264
`topspeed_H265`: top speed codec-H265
     * @param string $Resolution Resolution
Example: 540*480
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ModuleCodec",$param) and $param["ModuleCodec"] !== null) {
            $this->ModuleCodec = $param["ModuleCodec"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
