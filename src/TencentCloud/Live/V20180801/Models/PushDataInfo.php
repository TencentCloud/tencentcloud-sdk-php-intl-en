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
 * @method string getServerIp() Obtain Push receiving server IP.
 * @method void setServerIp(string $ServerIp) Set Push receiving server IP.
 * @method integer getVideoFps() Obtain Pushed video frame rate in Hz.
 * @method void setVideoFps(integer $VideoFps) Set Pushed video frame rate in Hz.
 * @method integer getVideoSpeed() Obtain Pushed video bitrate in bps.
 * @method void setVideoSpeed(integer $VideoSpeed) Set Pushed video bitrate in bps.
 * @method integer getAudioFps() Obtain Pushed audio frame rate in Hz.
 * @method void setAudioFps(integer $AudioFps) Set Pushed audio frame rate in Hz.
 * @method integer getAudioSpeed() Obtain Pushed audio bitrate in bps.
 * @method void setAudioSpeed(integer $AudioSpeed) Set Pushed audio bitrate in bps.
 * @method string getPushDomain() Obtain Push domain name.
 * @method void setPushDomain(string $PushDomain) Set Push domain name.
 * @method string getBeginPushTime() Obtain Push start time.
 * @method void setBeginPushTime(string $BeginPushTime) Set Push start time.
 * @method string getAcodec() Obtain Audio encoding format.
Example: AAC.
 * @method void setAcodec(string $Acodec) Set Audio encoding format.
Example: AAC.
 * @method string getVcodec() Obtain Video encoding format.
Example: H.264.
 * @method void setVcodec(string $Vcodec) Set Video encoding format.
Example: H.264.
 * @method string getResolution() Obtain Resolution.
 * @method void setResolution(string $Resolution) Set Resolution.
 * @method integer getAsampleRate() Obtain 
 * @method void setAsampleRate(integer $AsampleRate) Set 
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
     * @var string Push receiving server IP.
     */
    public $ServerIp;

    /**
     * @var integer Pushed video frame rate in Hz.
     */
    public $VideoFps;

    /**
     * @var integer Pushed video bitrate in bps.
     */
    public $VideoSpeed;

    /**
     * @var integer Pushed audio frame rate in Hz.
     */
    public $AudioFps;

    /**
     * @var integer Pushed audio bitrate in bps.
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
     * @var string Audio encoding format.
Example: AAC.
     */
    public $Acodec;

    /**
     * @var string Video encoding format.
Example: H.264.
     */
    public $Vcodec;

    /**
     * @var string Resolution.
     */
    public $Resolution;

    /**
     * @var integer 
     */
    public $AsampleRate;

    /**
     * @param string $StreamName Stream name.
     * @param string $AppName Push path.
     * @param string $ClientIp Push client IP.
     * @param string $ServerIp Push receiving server IP.
     * @param integer $VideoFps Pushed video frame rate in Hz.
     * @param integer $VideoSpeed Pushed video bitrate in bps.
     * @param integer $AudioFps Pushed audio frame rate in Hz.
     * @param integer $AudioSpeed Pushed audio bitrate in bps.
     * @param string $PushDomain Push domain name.
     * @param string $BeginPushTime Push start time.
     * @param string $Acodec Audio encoding format.
Example: AAC.
     * @param string $Vcodec Video encoding format.
Example: H.264.
     * @param string $Resolution Resolution.
     * @param integer $AsampleRate 
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
    }
}
