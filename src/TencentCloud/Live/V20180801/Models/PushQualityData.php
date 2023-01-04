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
 * The push data of a stream.
 *
 * @method string getTime() Obtain The time of the data in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
 * @method void setTime(string $Time) Set The time of the data in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
 * @method string getPushDomain() Obtain The push domain.
 * @method void setPushDomain(string $PushDomain) Set The push domain.
 * @method string getAppName() Obtain The push path.
 * @method void setAppName(string $AppName) Set The push path.
 * @method string getClientIp() Obtain The IP address of the push client.
 * @method void setClientIp(string $ClientIp) Set The IP address of the push client.
 * @method string getBeginPushTime() Obtain The push start time in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
 * @method void setBeginPushTime(string $BeginPushTime) Set The push start time in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
 * @method string getResolution() Obtain The resolution.
 * @method void setResolution(string $Resolution) Set The resolution.
 * @method string getVCodec() Obtain The video codec.
 * @method void setVCodec(string $VCodec) Set The video codec.
 * @method string getACodec() Obtain The audio codec.
 * @method void setACodec(string $ACodec) Set The audio codec.
 * @method string getSequence() Obtain The push sequence number, which uniquely identifies a push.
 * @method void setSequence(string $Sequence) Set The push sequence number, which uniquely identifies a push.
 * @method integer getVideoFps() Obtain The video frame rate.
 * @method void setVideoFps(integer $VideoFps) Set The video frame rate.
 * @method integer getVideoRate() Obtain The video bitrate (bps).
 * @method void setVideoRate(integer $VideoRate) Set The video bitrate (bps).
 * @method integer getAudioFps() Obtain The audio frame rate.
 * @method void setAudioFps(integer $AudioFps) Set The audio frame rate.
 * @method integer getAudioRate() Obtain The audio bitrate (bps).
 * @method void setAudioRate(integer $AudioRate) Set The audio bitrate (bps).
 * @method integer getLocalTs() Obtain The local elapsed time (milliseconds). The greater the difference between the local elapsed time and audio/video elapsed time, the poorer the push quality and the more severe the upstream lag.
 * @method void setLocalTs(integer $LocalTs) Set The local elapsed time (milliseconds). The greater the difference between the local elapsed time and audio/video elapsed time, the poorer the push quality and the more severe the upstream lag.
 * @method integer getVideoTs() Obtain The video elapsed time (milliseconds).
 * @method void setVideoTs(integer $VideoTs) Set The video elapsed time (milliseconds).
 * @method integer getAudioTs() Obtain The audio elapsed time (milliseconds).
 * @method void setAudioTs(integer $AudioTs) Set The audio elapsed time (milliseconds).
 * @method integer getMetaVideoRate() Obtain The video bitrate (Kbps) in the metadata.
 * @method void setMetaVideoRate(integer $MetaVideoRate) Set The video bitrate (Kbps) in the metadata.
 * @method integer getMetaAudioRate() Obtain The audio bitrate (Kbps) in the metadata.
 * @method void setMetaAudioRate(integer $MetaAudioRate) Set The audio bitrate (Kbps) in the metadata.
 * @method integer getMateFps() Obtain The frame rate in the metadata.
 * @method void setMateFps(integer $MateFps) Set The frame rate in the metadata.
 * @method string getStreamParam() Obtain The push parameter.
 * @method void setStreamParam(string $StreamParam) Set The push parameter.
 * @method float getBandwidth() Obtain The bandwidth (Mbps).
 * @method void setBandwidth(float $Bandwidth) Set The bandwidth (Mbps).
 * @method float getFlux() Obtain The traffic (MB).
 * @method void setFlux(float $Flux) Set The traffic (MB).
 * @method string getServerIp() Obtain The IP address of the push client.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerIp(string $ServerIp) Set The IP address of the push client.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PushQualityData extends AbstractModel
{
    /**
     * @var string The time of the data in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
     */
    public $Time;

    /**
     * @var string The push domain.
     */
    public $PushDomain;

    /**
     * @var string The push path.
     */
    public $AppName;

    /**
     * @var string The IP address of the push client.
     */
    public $ClientIp;

    /**
     * @var string The push start time in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
     */
    public $BeginPushTime;

    /**
     * @var string The resolution.
     */
    public $Resolution;

    /**
     * @var string The video codec.
     */
    public $VCodec;

    /**
     * @var string The audio codec.
     */
    public $ACodec;

    /**
     * @var string The push sequence number, which uniquely identifies a push.
     */
    public $Sequence;

    /**
     * @var integer The video frame rate.
     */
    public $VideoFps;

    /**
     * @var integer The video bitrate (bps).
     */
    public $VideoRate;

    /**
     * @var integer The audio frame rate.
     */
    public $AudioFps;

    /**
     * @var integer The audio bitrate (bps).
     */
    public $AudioRate;

    /**
     * @var integer The local elapsed time (milliseconds). The greater the difference between the local elapsed time and audio/video elapsed time, the poorer the push quality and the more severe the upstream lag.
     */
    public $LocalTs;

    /**
     * @var integer The video elapsed time (milliseconds).
     */
    public $VideoTs;

    /**
     * @var integer The audio elapsed time (milliseconds).
     */
    public $AudioTs;

    /**
     * @var integer The video bitrate (Kbps) in the metadata.
     */
    public $MetaVideoRate;

    /**
     * @var integer The audio bitrate (Kbps) in the metadata.
     */
    public $MetaAudioRate;

    /**
     * @var integer The frame rate in the metadata.
     */
    public $MateFps;

    /**
     * @var string The push parameter.
     */
    public $StreamParam;

    /**
     * @var float The bandwidth (Mbps).
     */
    public $Bandwidth;

    /**
     * @var float The traffic (MB).
     */
    public $Flux;

    /**
     * @var string The IP address of the push client.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerIp;

    /**
     * @param string $Time The time of the data in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
     * @param string $PushDomain The push domain.
     * @param string $AppName The push path.
     * @param string $ClientIp The IP address of the push client.
     * @param string $BeginPushTime The push start time in the format of “%Y-%m-%d %H:%M:%S.%ms” (accurate to the millisecond).
     * @param string $Resolution The resolution.
     * @param string $VCodec The video codec.
     * @param string $ACodec The audio codec.
     * @param string $Sequence The push sequence number, which uniquely identifies a push.
     * @param integer $VideoFps The video frame rate.
     * @param integer $VideoRate The video bitrate (bps).
     * @param integer $AudioFps The audio frame rate.
     * @param integer $AudioRate The audio bitrate (bps).
     * @param integer $LocalTs The local elapsed time (milliseconds). The greater the difference between the local elapsed time and audio/video elapsed time, the poorer the push quality and the more severe the upstream lag.
     * @param integer $VideoTs The video elapsed time (milliseconds).
     * @param integer $AudioTs The audio elapsed time (milliseconds).
     * @param integer $MetaVideoRate The video bitrate (Kbps) in the metadata.
     * @param integer $MetaAudioRate The audio bitrate (Kbps) in the metadata.
     * @param integer $MateFps The frame rate in the metadata.
     * @param string $StreamParam The push parameter.
     * @param float $Bandwidth The bandwidth (Mbps).
     * @param float $Flux The traffic (MB).
     * @param string $ServerIp The IP address of the push client.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("BeginPushTime",$param) and $param["BeginPushTime"] !== null) {
            $this->BeginPushTime = $param["BeginPushTime"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("VCodec",$param) and $param["VCodec"] !== null) {
            $this->VCodec = $param["VCodec"];
        }

        if (array_key_exists("ACodec",$param) and $param["ACodec"] !== null) {
            $this->ACodec = $param["ACodec"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("VideoFps",$param) and $param["VideoFps"] !== null) {
            $this->VideoFps = $param["VideoFps"];
        }

        if (array_key_exists("VideoRate",$param) and $param["VideoRate"] !== null) {
            $this->VideoRate = $param["VideoRate"];
        }

        if (array_key_exists("AudioFps",$param) and $param["AudioFps"] !== null) {
            $this->AudioFps = $param["AudioFps"];
        }

        if (array_key_exists("AudioRate",$param) and $param["AudioRate"] !== null) {
            $this->AudioRate = $param["AudioRate"];
        }

        if (array_key_exists("LocalTs",$param) and $param["LocalTs"] !== null) {
            $this->LocalTs = $param["LocalTs"];
        }

        if (array_key_exists("VideoTs",$param) and $param["VideoTs"] !== null) {
            $this->VideoTs = $param["VideoTs"];
        }

        if (array_key_exists("AudioTs",$param) and $param["AudioTs"] !== null) {
            $this->AudioTs = $param["AudioTs"];
        }

        if (array_key_exists("MetaVideoRate",$param) and $param["MetaVideoRate"] !== null) {
            $this->MetaVideoRate = $param["MetaVideoRate"];
        }

        if (array_key_exists("MetaAudioRate",$param) and $param["MetaAudioRate"] !== null) {
            $this->MetaAudioRate = $param["MetaAudioRate"];
        }

        if (array_key_exists("MateFps",$param) and $param["MateFps"] !== null) {
            $this->MateFps = $param["MateFps"];
        }

        if (array_key_exists("StreamParam",$param) and $param["StreamParam"] !== null) {
            $this->StreamParam = $param["StreamParam"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Flux",$param) and $param["Flux"] !== null) {
            $this->Flux = $param["Flux"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }
    }
}
