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
 * Push quality data of a stream.
 *
 * @method string getTime() Obtain Data time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
 * @method void setTime(string $Time) Set Data time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
 * @method string getPushDomain() Obtain Push domain name.
 * @method void setPushDomain(string $PushDomain) Set Push domain name.
 * @method string getAppName() Obtain Push path.
 * @method void setAppName(string $AppName) Set Push path.
 * @method string getClientIp() Obtain Push client IP.
 * @method void setClientIp(string $ClientIp) Set Push client IP.
 * @method string getBeginPushTime() Obtain Push start time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
 * @method void setBeginPushTime(string $BeginPushTime) Set Push start time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
 * @method string getResolution() Obtain Resolution information.
 * @method void setResolution(string $Resolution) Set Resolution information.
 * @method string getVCodec() Obtain Video codec.
 * @method void setVCodec(string $VCodec) Set Video codec.
 * @method string getACodec() Obtain Audio codec.
 * @method void setACodec(string $ACodec) Set Audio codec.
 * @method string getSequence() Obtain Push serial number, which uniquely identifies a push.
 * @method void setSequence(string $Sequence) Set Push serial number, which uniquely identifies a push.
 * @method integer getVideoFps() Obtain Video frame rate.
 * @method void setVideoFps(integer $VideoFps) Set Video frame rate.
 * @method integer getVideoRate() Obtain Video bitrate in bps.
 * @method void setVideoRate(integer $VideoRate) Set Video bitrate in bps.
 * @method integer getAudioFps() Obtain Audio frame rate.
 * @method void setAudioFps(integer $AudioFps) Set Audio frame rate.
 * @method integer getAudioRate() Obtain Audio bitrate in bps.
 * @method void setAudioRate(integer $AudioRate) Set Audio bitrate in bps.
 * @method integer getLocalTs() Obtain Local elapsed time in milliseconds. The greater the difference between audio/video elapsed time and local elapsed time, the poorer the push quality and the more serious the upstream lag.
 * @method void setLocalTs(integer $LocalTs) Set Local elapsed time in milliseconds. The greater the difference between audio/video elapsed time and local elapsed time, the poorer the push quality and the more serious the upstream lag.
 * @method integer getVideoTs() Obtain Video elapsed time in milliseconds.
 * @method void setVideoTs(integer $VideoTs) Set Video elapsed time in milliseconds.
 * @method integer getAudioTs() Obtain Audio elapsed time in milliseconds.
 * @method void setAudioTs(integer $AudioTs) Set Audio elapsed time in milliseconds.
 * @method integer getMetaVideoRate() Obtain Video bitrate in `metadata` in Kbps.
 * @method void setMetaVideoRate(integer $MetaVideoRate) Set Video bitrate in `metadata` in Kbps.
 * @method integer getMetaAudioRate() Obtain Audio bitrate in `metadata` in Kbps.
 * @method void setMetaAudioRate(integer $MetaAudioRate) Set Audio bitrate in `metadata` in Kbps.
 * @method integer getMateFps() Obtain Frame rate in `metadata`.
 * @method void setMateFps(integer $MateFps) Set Frame rate in `metadata`.
 */
class PushQualityData extends AbstractModel
{
    /**
     * @var string Data time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
     */
    public $Time;

    /**
     * @var string Push domain name.
     */
    public $PushDomain;

    /**
     * @var string Push path.
     */
    public $AppName;

    /**
     * @var string Push client IP.
     */
    public $ClientIp;

    /**
     * @var string Push start time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
     */
    public $BeginPushTime;

    /**
     * @var string Resolution information.
     */
    public $Resolution;

    /**
     * @var string Video codec.
     */
    public $VCodec;

    /**
     * @var string Audio codec.
     */
    public $ACodec;

    /**
     * @var string Push serial number, which uniquely identifies a push.
     */
    public $Sequence;

    /**
     * @var integer Video frame rate.
     */
    public $VideoFps;

    /**
     * @var integer Video bitrate in bps.
     */
    public $VideoRate;

    /**
     * @var integer Audio frame rate.
     */
    public $AudioFps;

    /**
     * @var integer Audio bitrate in bps.
     */
    public $AudioRate;

    /**
     * @var integer Local elapsed time in milliseconds. The greater the difference between audio/video elapsed time and local elapsed time, the poorer the push quality and the more serious the upstream lag.
     */
    public $LocalTs;

    /**
     * @var integer Video elapsed time in milliseconds.
     */
    public $VideoTs;

    /**
     * @var integer Audio elapsed time in milliseconds.
     */
    public $AudioTs;

    /**
     * @var integer Video bitrate in `metadata` in Kbps.
     */
    public $MetaVideoRate;

    /**
     * @var integer Audio bitrate in `metadata` in Kbps.
     */
    public $MetaAudioRate;

    /**
     * @var integer Frame rate in `metadata`.
     */
    public $MateFps;

    /**
     * @param string $Time Data time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
     * @param string $PushDomain Push domain name.
     * @param string $AppName Push path.
     * @param string $ClientIp Push client IP.
     * @param string $BeginPushTime Push start time in the format of `%Y-%m-%d %H:%M:%S.%ms` and accurate down to the millisecond level.
     * @param string $Resolution Resolution information.
     * @param string $VCodec Video codec.
     * @param string $ACodec Audio codec.
     * @param string $Sequence Push serial number, which uniquely identifies a push.
     * @param integer $VideoFps Video frame rate.
     * @param integer $VideoRate Video bitrate in bps.
     * @param integer $AudioFps Audio frame rate.
     * @param integer $AudioRate Audio bitrate in bps.
     * @param integer $LocalTs Local elapsed time in milliseconds. The greater the difference between audio/video elapsed time and local elapsed time, the poorer the push quality and the more serious the upstream lag.
     * @param integer $VideoTs Video elapsed time in milliseconds.
     * @param integer $AudioTs Audio elapsed time in milliseconds.
     * @param integer $MetaVideoRate Video bitrate in `metadata` in Kbps.
     * @param integer $MetaAudioRate Audio bitrate in `metadata` in Kbps.
     * @param integer $MateFps Frame rate in `metadata`.
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
    }
}
