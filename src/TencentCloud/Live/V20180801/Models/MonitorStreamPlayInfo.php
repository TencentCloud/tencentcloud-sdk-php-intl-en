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
 * The playback data.
 *
 * @method string getPlayDomain() Obtain The playback domain.
 * @method void setPlayDomain(string $PlayDomain) Set The playback domain.
 * @method string getStreamName() Obtain The stream ID.
 * @method void setStreamName(string $StreamName) Set The stream ID.
 * @method integer getRate() Obtain The playback bitrate. `0` indicates the original bitrate.
 * @method void setRate(integer $Rate) Set The playback bitrate. `0` indicates the original bitrate.
 * @method string getProtocol() Obtain The playback protocol. Valid values: `Unknown`, `Flv`, `Hls`, `Rtmp`, `Huyap2p`.
 * @method void setProtocol(string $Protocol) Set The playback protocol. Valid values: `Unknown`, `Flv`, `Hls`, `Rtmp`, `Huyap2p`.
 * @method float getBandwidth() Obtain The bandwidth (Mbps).
 * @method void setBandwidth(float $Bandwidth) Set The bandwidth (Mbps).
 * @method integer getOnline() Obtain The number of online users, which is represented by the number of TCP connections (data collected every minute).
 * @method void setOnline(integer $Online) Set The number of online users, which is represented by the number of TCP connections (data collected every minute).
 * @method integer getRequest() Obtain The number of requests.
 * @method void setRequest(integer $Request) Set The number of requests.
 */
class MonitorStreamPlayInfo extends AbstractModel
{
    /**
     * @var string The playback domain.
     */
    public $PlayDomain;

    /**
     * @var string The stream ID.
     */
    public $StreamName;

    /**
     * @var integer The playback bitrate. `0` indicates the original bitrate.
     */
    public $Rate;

    /**
     * @var string The playback protocol. Valid values: `Unknown`, `Flv`, `Hls`, `Rtmp`, `Huyap2p`.
     */
    public $Protocol;

    /**
     * @var float The bandwidth (Mbps).
     */
    public $Bandwidth;

    /**
     * @var integer The number of online users, which is represented by the number of TCP connections (data collected every minute).
     */
    public $Online;

    /**
     * @var integer The number of requests.
     */
    public $Request;

    /**
     * @param string $PlayDomain The playback domain.
     * @param string $StreamName The stream ID.
     * @param integer $Rate The playback bitrate. `0` indicates the original bitrate.
     * @param string $Protocol The playback protocol. Valid values: `Unknown`, `Flv`, `Hls`, `Rtmp`, `Huyap2p`.
     * @param float $Bandwidth The bandwidth (Mbps).
     * @param integer $Online The number of online users, which is represented by the number of TCP connections (data collected every minute).
     * @param integer $Request The number of requests.
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
