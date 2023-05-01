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
 * Streaming event information.
 *
 * @method string getAppName() Obtain Application name.
 * @method void setAppName(string $AppName) Set Application name.
 * @method string getDomainName() Obtain Push domain name.
 * @method void setDomainName(string $DomainName) Set Push domain name.
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method string getStreamStartTime() Obtain Push start time.
In UTC format, such as 2019-01-07T12:00:00Z.
 * @method void setStreamStartTime(string $StreamStartTime) Set Push start time.
In UTC format, such as 2019-01-07T12:00:00Z.
 * @method string getStreamEndTime() Obtain Push end time.
In UTC format, such as 2019-01-07T15:00:00Z.
 * @method void setStreamEndTime(string $StreamEndTime) Set Push end time.
In UTC format, such as 2019-01-07T15:00:00Z.
 * @method string getStopReason() Obtain Stop reason.
 * @method void setStopReason(string $StopReason) Set Stop reason.
 * @method integer getDuration() Obtain Push duration in seconds.
 * @method void setDuration(integer $Duration) Set Push duration in seconds.
 * @method string getClientIp() Obtain The IP address of the host.
If the stream is published from a private network, this parameter will be `-`.
 * @method void setClientIp(string $ClientIp) Set The IP address of the host.
If the stream is published from a private network, this parameter will be `-`.
 * @method string getResolution() Obtain Resolution.
 * @method void setResolution(string $Resolution) Set Resolution.
 */
class StreamEventInfo extends AbstractModel
{
    /**
     * @var string Application name.
     */
    public $AppName;

    /**
     * @var string Push domain name.
     */
    public $DomainName;

    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var string Push start time.
In UTC format, such as 2019-01-07T12:00:00Z.
     */
    public $StreamStartTime;

    /**
     * @var string Push end time.
In UTC format, such as 2019-01-07T15:00:00Z.
     */
    public $StreamEndTime;

    /**
     * @var string Stop reason.
     */
    public $StopReason;

    /**
     * @var integer Push duration in seconds.
     */
    public $Duration;

    /**
     * @var string The IP address of the host.
If the stream is published from a private network, this parameter will be `-`.
     */
    public $ClientIp;

    /**
     * @var string Resolution.
     */
    public $Resolution;

    /**
     * @param string $AppName Application name.
     * @param string $DomainName Push domain name.
     * @param string $StreamName Stream name.
     * @param string $StreamStartTime Push start time.
In UTC format, such as 2019-01-07T12:00:00Z.
     * @param string $StreamEndTime Push end time.
In UTC format, such as 2019-01-07T15:00:00Z.
     * @param string $StopReason Stop reason.
     * @param integer $Duration Push duration in seconds.
     * @param string $ClientIp The IP address of the host.
If the stream is published from a private network, this parameter will be `-`.
     * @param string $Resolution Resolution.
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StreamStartTime",$param) and $param["StreamStartTime"] !== null) {
            $this->StreamStartTime = $param["StreamStartTime"];
        }

        if (array_key_exists("StreamEndTime",$param) and $param["StreamEndTime"] !== null) {
            $this->StreamEndTime = $param["StreamEndTime"];
        }

        if (array_key_exists("StopReason",$param) and $param["StopReason"] !== null) {
            $this->StopReason = $param["StopReason"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
