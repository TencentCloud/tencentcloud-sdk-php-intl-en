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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Transcoding details.
 *
 * @method string getChannelId() Obtain The channel ID.
 * @method void setChannelId(string $ChannelId) Set The channel ID.
 * @method string getStartTime() Obtain The start time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
 * @method void setStartTime(string $StartTime) Set The start time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
 * @method string getEndTime() Obtain The end time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
 * @method void setEndTime(string $EndTime) Set The end time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
 * @method integer getDuration() Obtain The duration (s) of transcoding.
 * @method void setDuration(integer $Duration) Set The duration (s) of transcoding.
 * @method string getModuleCodec() Obtain The encoding method.
Examples:
`liveprocessor_H264`: Live transcoding-H264
`liveprocessor_H265`: Live transcoding-H265
`topspeed_H264`: Top speed codec-H264
`topspeed_H265`: Top speed codec-H265
 * @method void setModuleCodec(string $ModuleCodec) Set The encoding method.
Examples:
`liveprocessor_H264`: Live transcoding-H264
`liveprocessor_H265`: Live transcoding-H265
`topspeed_H264`: Top speed codec-H264
`topspeed_H265`: Top speed codec-H265
 * @method integer getBitrate() Obtain The target bitrate (Kbps).
 * @method void setBitrate(integer $Bitrate) Set The target bitrate (Kbps).
 * @method string getType() Obtain The transcoding type.
 * @method void setType(string $Type) Set The transcoding type.
 * @method string getPushDomain() Obtain The push domain name.
 * @method void setPushDomain(string $PushDomain) Set The push domain name.
 * @method string getResolution() Obtain The target resolution.
 * @method void setResolution(string $Resolution) Set The target resolution.
 */
class DescribeTranscodeDetailInfo extends AbstractModel
{
    /**
     * @var string The channel ID.
     */
    public $ChannelId;

    /**
     * @var string The start time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
     */
    public $StartTime;

    /**
     * @var string The end time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
     */
    public $EndTime;

    /**
     * @var integer The duration (s) of transcoding.
     */
    public $Duration;

    /**
     * @var string The encoding method.
Examples:
`liveprocessor_H264`: Live transcoding-H264
`liveprocessor_H265`: Live transcoding-H265
`topspeed_H264`: Top speed codec-H264
`topspeed_H265`: Top speed codec-H265
     */
    public $ModuleCodec;

    /**
     * @var integer The target bitrate (Kbps).
     */
    public $Bitrate;

    /**
     * @var string The transcoding type.
     */
    public $Type;

    /**
     * @var string The push domain name.
     */
    public $PushDomain;

    /**
     * @var string The target resolution.
     */
    public $Resolution;

    /**
     * @param string $ChannelId The channel ID.
     * @param string $StartTime The start time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
     * @param string $EndTime The end time (UTC+8) of transcoding in the format of yyyy-MM-dd HH:mm:ss.
     * @param integer $Duration The duration (s) of transcoding.
     * @param string $ModuleCodec The encoding method.
Examples:
`liveprocessor_H264`: Live transcoding-H264
`liveprocessor_H265`: Live transcoding-H265
`topspeed_H264`: Top speed codec-H264
`topspeed_H265`: Top speed codec-H265
     * @param integer $Bitrate The target bitrate (Kbps).
     * @param string $Type The transcoding type.
     * @param string $PushDomain The push domain name.
     * @param string $Resolution The target resolution.
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
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
    }
}
