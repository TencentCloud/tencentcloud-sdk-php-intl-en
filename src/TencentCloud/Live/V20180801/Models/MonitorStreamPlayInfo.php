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
 * Monitored playback data
 *
 * @method string getPlayDomain() Obtain Playback domain name.
 * @method void setPlayDomain(string $PlayDomain) Set Playback domain name.
 * @method string getStreamName() Obtain Stream ID.
 * @method void setStreamName(string $StreamName) Set Stream ID.
 * @method integer getRate() Obtain Playback bitrate. 0 indicates the original bitrate.
 * @method void setRate(integer $Rate) Set Playback bitrate. 0 indicates the original bitrate.
 * @method string getProtocol() Obtain Playback protocol. Valid values: Unknown, Flv, Hls, Rtmp, Huyap2p.
 * @method void setProtocol(string $Protocol) Set Playback protocol. Valid values: Unknown, Flv, Hls, Rtmp, Huyap2p.
 * @method float getBandwidth() Obtain Bandwidth in Mbps.
 * @method void setBandwidth(float $Bandwidth) Set Bandwidth in Mbps.
 * @method integer getOnline() Obtain Number of online viewers. A data point is sampled per minute, and the number of TCP connections across the sample points is calculated.
 * @method void setOnline(integer $Online) Set Number of online viewers. A data point is sampled per minute, and the number of TCP connections across the sample points is calculated.
 * @method integer getRequest() Obtain Number of requests.
 * @method void setRequest(integer $Request) Set Number of requests.
 */
class MonitorStreamPlayInfo extends AbstractModel
{
    /**
     * @var string Playback domain name.
     */
    public $PlayDomain;

    /**
     * @var string Stream ID.
     */
    public $StreamName;

    /**
     * @var integer Playback bitrate. 0 indicates the original bitrate.
     */
    public $Rate;

    /**
     * @var string Playback protocol. Valid values: Unknown, Flv, Hls, Rtmp, Huyap2p.
     */
    public $Protocol;

    /**
     * @var float Bandwidth in Mbps.
     */
    public $Bandwidth;

    /**
     * @var integer Number of online viewers. A data point is sampled per minute, and the number of TCP connections across the sample points is calculated.
     */
    public $Online;

    /**
     * @var integer Number of requests.
     */
    public $Request;

    /**
     * @param string $PlayDomain Playback domain name.
     * @param string $StreamName Stream ID.
     * @param integer $Rate Playback bitrate. 0 indicates the original bitrate.
     * @param string $Protocol Playback protocol. Valid values: Unknown, Flv, Hls, Rtmp, Huyap2p.
     * @param float $Bandwidth Bandwidth in Mbps.
     * @param integer $Online Number of online viewers. A data point is sampled per minute, and the number of TCP connections across the sample points is calculated.
     * @param integer $Request Number of requests.
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
        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Online",$param) and $param["Online"] !== null) {
            $this->Online = $param["Online"];
        }

        if (array_key_exists("Request",$param) and $param["Request"] !== null) {
            $this->Request = $param["Request"];
        }
    }
}
