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
 * Transcoding details.
 *
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method string getStartTime() Obtain Start time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
 * @method void setStartTime(string $StartTime) Set Start time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
 * @method string getEndTime() Obtain End time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
 * @method void setEndTime(string $EndTime) Set End time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
 * @method integer getDuration() Obtain Transcoding duration in minutes.
Note: given the possible interruptions during push, duration here is the sum of actual duration of transcoding instead of the interval between the start time and end time.
 * @method void setDuration(integer $Duration) Set Transcoding duration in minutes.
Note: given the possible interruptions during push, duration here is the sum of actual duration of transcoding instead of the interval between the start time and end time.
 * @method string getModuleCodec() Obtain Codec with modules,
Example:
liveprocessor_H264: LVB transcoding - H264,
liveprocessor_H265: LVB transcoding - H265,
topspeed_H264: top speed codec - H264,
topspeed_H265: top speed codec - H265.
 * @method void setModuleCodec(string $ModuleCodec) Set Codec with modules,
Example:
liveprocessor_H264: LVB transcoding - H264,
liveprocessor_H265: LVB transcoding - H265,
topspeed_H264: top speed codec - H264,
topspeed_H265: top speed codec - H265.
 * @method integer getBitrate() Obtain Bitrate.
 * @method void setBitrate(integer $Bitrate) Set Bitrate.
 * @method string getType() Obtain The task type. Valid values: Transcode, MixStream, WaterMark, Webrtc.
 * @method void setType(string $Type) Set The task type. Valid values: Transcode, MixStream, WaterMark, Webrtc.
 * @method string getPushDomain() Obtain Push domain name.
 * @method void setPushDomain(string $PushDomain) Set Push domain name.
 * @method string getResolution() Obtain Resolution.
 * @method void setResolution(string $Resolution) Set Resolution.
 * @method string getMainlandOrOversea() Obtain The region. Valid values:
`Mainland`: Inside the Chinese mainland.
`Overseas`: Outside the Chinese mainland.
 * @method void setMainlandOrOversea(string $MainlandOrOversea) Set The region. Valid values:
`Mainland`: Inside the Chinese mainland.
`Overseas`: Outside the Chinese mainland.
 */
class TranscodeDetailInfo extends AbstractModel
{
    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var string Start time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
     */
    public $StartTime;

    /**
     * @var string End time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
     */
    public $EndTime;

    /**
     * @var integer Transcoding duration in minutes.
Note: given the possible interruptions during push, duration here is the sum of actual duration of transcoding instead of the interval between the start time and end time.
     */
    public $Duration;

    /**
     * @var string Codec with modules,
Example:
liveprocessor_H264: LVB transcoding - H264,
liveprocessor_H265: LVB transcoding - H265,
topspeed_H264: top speed codec - H264,
topspeed_H265: top speed codec - H265.
     */
    public $ModuleCodec;

    /**
     * @var integer Bitrate.
     */
    public $Bitrate;

    /**
     * @var string The task type. Valid values: Transcode, MixStream, WaterMark, Webrtc.
     */
    public $Type;

    /**
     * @var string Push domain name.
     */
    public $PushDomain;

    /**
     * @var string Resolution.
     */
    public $Resolution;

    /**
     * @var string The region. Valid values:
`Mainland`: Inside the Chinese mainland.
`Overseas`: Outside the Chinese mainland.
     */
    public $MainlandOrOversea;

    /**
     * @param string $StreamName Stream name.
     * @param string $StartTime Start time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
     * @param string $EndTime End time (Beijing time) in the format of `yyyy-mm-dd HH:MM`.
     * @param integer $Duration Transcoding duration in minutes.
Note: given the possible interruptions during push, duration here is the sum of actual duration of transcoding instead of the interval between the start time and end time.
     * @param string $ModuleCodec Codec with modules,
Example:
liveprocessor_H264: LVB transcoding - H264,
liveprocessor_H265: LVB transcoding - H265,
topspeed_H264: top speed codec - H264,
topspeed_H265: top speed codec - H265.
     * @param integer $Bitrate Bitrate.
     * @param string $Type The task type. Valid values: Transcode, MixStream, WaterMark, Webrtc.
     * @param string $PushDomain Push domain name.
     * @param string $Resolution Resolution.
     * @param string $MainlandOrOversea The region. Valid values:
`Mainland`: Inside the Chinese mainland.
`Overseas`: Outside the Chinese mainland.
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ModuleCodec",$param) and $param["ModuleCodec"] !== null) {
            $this->ModuleCodec = $param["ModuleCodec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MainlandOrOversea",$param) and $param["MainlandOrOversea"] !== null) {
            $this->MainlandOrOversea = $param["MainlandOrOversea"];
        }
    }
}
