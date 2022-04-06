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
 * Push information
 *
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method string getAppName() Obtain Push path.
 * @method void setAppName(string $AppName) Set Push path.
 * @method string getClientIp() Obtain Push client IP.
 * @method void setClientIp(string $ClientIp) Set Push client IP.
 * @method string getServerIp() Obtain IP of the server that receives the stream.
 * @method void setServerIp(string $ServerIp) Set IP of the server that receives the stream.
 * @method integer getVideoFps() Obtain Pushed video frame rate in Hz.
 * @method void setVideoFps(integer $VideoFps) Set Pushed video frame rate in Hz.
 * @method integer getVideoSpeed() Obtain Video bitrate (bps) for publishing
 * @method void setVideoSpeed(integer $VideoSpeed) Set Video bitrate (bps) for publishing
 * @method integer getAudioFps() Obtain Pushed audio frame rate in Hz.
 * @method void setAudioFps(integer $AudioFps) Set Pushed audio frame rate in Hz.
 * @method integer getAudioSpeed() Obtain Audio bitrate (bps) for publishing
 * @method void setAudioSpeed(integer $AudioSpeed) Set Audio bitrate (bps) for publishing
 * @method string getPushDomain() Obtain Push domain name.
 * @method void setPushDomain(string $PushDomain) Set Push domain name.
 * @method string getBeginPushTime() Obtain Push start time.
 * @method void setBeginPushTime(string $BeginPushTime) Set Push start time.
 * @method string getAcodec() Obtain Audio codec,
Example: AAC.
 * @method void setAcodec(string $Acodec) Set Audio codec,
Example: AAC.
 * @method string getVcodec() Obtain Video codec,
Example: H.264.
 * @method void setVcodec(string $Vcodec) Set Video codec,
Example: H.264.
 * @method string getResolution() Obtain Resolution.
 * @method void setResolution(string $Resolution) Set Resolution.
 * @method integer getAsampleRate() Obtain Sample rate.
 * @method void setAsampleRate(integer $AsampleRate) Set Sample rate.
 * @method integer getMetaAudioSpeed() Obtain Audio bitrate (bps) in metadata
 * @method void setMetaAudioSpeed(integer $MetaAudioSpeed) Set Audio bitrate (bps) in metadata
 * @method integer getMetaVideoSpeed() Obtain Video bitrate (bps) in metadata
 * @method void setMetaVideoSpeed(integer $MetaVideoSpeed) Set Video bitrate (bps) in metadata
 * @method integer getMetaFps() Obtain Frame rate in `metadata`.
 * @method void setMetaFps(integer $MetaFps) Set Frame rate in `metadata`.
 */
class PushDataInfo extends AbstractModel
{
    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var string Push path.
     */
    public $AppName;

    /**
     * @var string Push client IP.
     */
    public $ClientIp;

    /**
     * @var string IP of the server that receives the stream.
     */
    public $ServerIp;

    /**
     * @var integer Pushed video frame rate in Hz.
     */
    public $VideoFps;

    /**
     * @var integer Video bitrate (bps) for publishing
     */
    public $VideoSpeed;

    /**
     * @var integer Pushed audio frame rate in Hz.
     */
    public $AudioFps;

    /**
     * @var integer Audio bitrate (bps) for publishing
     */
    public $AudioSpeed;

    /**
     * @var string Push domain name.
     */
    public $PushDomain;

    /**
     * @var string Push start time.
     */
    public $BeginPushTime;

    /**
     * @var string Audio codec,
Example: AAC.
     */
    public $Acodec;

    /**
     * @var string Video codec,
Example: H.264.
     */
    public $Vcodec;

    /**
     * @var string Resolution.
     */
    public $Resolution;

    /**
     * @var integer Sample rate.
     */
    public $AsampleRate;

    /**
     * @var integer Audio bitrate (bps) in metadata
     */
    public $MetaAudioSpeed;

    /**
     * @var integer Video bitrate (bps) in metadata
     */
    public $MetaVideoSpeed;

    /**
     * @var integer Frame rate in `metadata`.
     */
    public $MetaFps;

    /**
     * @param string $StreamName Stream name.
     * @param string $AppName Push path.
     * @param string $ClientIp Push client IP.
     * @param string $ServerIp IP of the server that receives the stream.
     * @param integer $VideoFps Pushed video frame rate in Hz.
     * @param integer $VideoSpeed Video bitrate (bps) for publishing
     * @param integer $AudioFps Pushed audio frame rate in Hz.
     * @param integer $AudioSpeed Audio bitrate (bps) for publishing
     * @param string $PushDomain Push domain name.
     * @param string $BeginPushTime Push start time.
     * @param string $Acodec Audio codec,
Example: AAC.
     * @param string $Vcodec Video codec,
Example: H.264.
     * @param string $Resolution Resolution.
     * @param integer $AsampleRate Sample rate.
     * @param integer $MetaAudioSpeed Audio bitrate (bps) in metadata
     * @param integer $MetaVideoSpeed Video bitrate (bps) in metadata
     * @param integer $MetaFps Frame rate in `metadata`.
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("ServerIp",$param) and $param["ServerIp"] !== null) {
            $this->ServerIp = $param["ServerIp"];
        }

        if (array_key_exists("VideoFps",$param) and $param["VideoFps"] !== null) {
            $this->VideoFps = $param["VideoFps"];
        }

        if (array_key_exists("VideoSpeed",$param) and $param["VideoSpeed"] !== null) {
            $this->VideoSpeed = $param["VideoSpeed"];
        }

        if (array_key_exists("AudioFps",$param) and $param["AudioFps"] !== null) {
            $this->AudioFps = $param["AudioFps"];
        }

        if (array_key_exists("AudioSpeed",$param) and $param["AudioSpeed"] !== null) {
            $this->AudioSpeed = $param["AudioSpeed"];
        }

        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("BeginPushTime",$param) and $param["BeginPushTime"] !== null) {
            $this->BeginPushTime = $param["BeginPushTime"];
        }

        if (array_key_exists("Acodec",$param) and $param["Acodec"] !== null) {
            $this->Acodec = $param["Acodec"];
        }

        if (array_key_exists("Vcodec",$param) and $param["Vcodec"] !== null) {
            $this->Vcodec = $param["Vcodec"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AsampleRate",$param) and $param["AsampleRate"] !== null) {
            $this->AsampleRate = $param["AsampleRate"];
        }

        if (array_key_exists("MetaAudioSpeed",$param) and $param["MetaAudioSpeed"] !== null) {
            $this->MetaAudioSpeed = $param["MetaAudioSpeed"];
        }

        if (array_key_exists("MetaVideoSpeed",$param) and $param["MetaVideoSpeed"] !== null) {
            $this->MetaVideoSpeed = $param["MetaVideoSpeed"];
        }

        if (array_key_exists("MetaFps",$param) and $param["MetaFps"] !== null) {
            $this->MetaFps = $param["MetaFps"];
        }
    }
}
