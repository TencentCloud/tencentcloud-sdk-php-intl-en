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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application usage statistics
 *
 * @method RealTimeSpeechStatisticsItem getRealtimeSpeechStatisticsItem() Obtain Voice Chat statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRealtimeSpeechStatisticsItem(RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem) Set Voice Chat statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method VoiceMessageStatisticsItem getVoiceMessageStatisticsItem() Obtain Voice Message statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVoiceMessageStatisticsItem(VoiceMessageStatisticsItem $VoiceMessageStatisticsItem) Set Voice Message statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method VoiceFilterStatisticsItem getVoiceFilterStatisticsItem() Obtain Phrase Filtering statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setVoiceFilterStatisticsItem(VoiceFilterStatisticsItem $VoiceFilterStatisticsItem) Set Phrase Filtering statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDate() Obtain Reference period
 * @method void setDate(string $Date) Set Reference period
 * @method AudioTextStatisticsItem getAudioTextStatisticsItem() Obtain Recording-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAudioTextStatisticsItem(AudioTextStatisticsItem $AudioTextStatisticsItem) Set Recording-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method StreamTextStatisticsItem getStreamTextStatisticsItem() Obtain Stream-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStreamTextStatisticsItem(StreamTextStatisticsItem $StreamTextStatisticsItem) Set Stream-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method OverseaTextStatisticsItem getOverseaTextStatisticsItem() Obtain Usage statistics of Voice-to-Text of outside-MLC requests
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOverseaTextStatisticsItem(OverseaTextStatisticsItem $OverseaTextStatisticsItem) Set Usage statistics of Voice-to-Text of outside-MLC requests
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method RealtimeTextStatisticsItem getRealtimeTextStatisticsItem() Obtain Real-time Voice-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setRealtimeTextStatisticsItem(RealtimeTextStatisticsItem $RealtimeTextStatisticsItem) Set Real-time Voice-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class AppStatisticsItem extends AbstractModel
{
    /**
     * @var RealTimeSpeechStatisticsItem Voice Chat statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RealtimeSpeechStatisticsItem;

    /**
     * @var VoiceMessageStatisticsItem Voice Message statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $VoiceMessageStatisticsItem;

    /**
     * @var VoiceFilterStatisticsItem Phrase Filtering statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $VoiceFilterStatisticsItem;

    /**
     * @var string Reference period
     */
    public $Date;

    /**
     * @var AudioTextStatisticsItem Recording-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AudioTextStatisticsItem;

    /**
     * @var StreamTextStatisticsItem Stream-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $StreamTextStatisticsItem;

    /**
     * @var OverseaTextStatisticsItem Usage statistics of Voice-to-Text of outside-MLC requests
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OverseaTextStatisticsItem;

    /**
     * @var RealtimeTextStatisticsItem Real-time Voice-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $RealtimeTextStatisticsItem;

    /**
     * @param RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem Voice Chat statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param VoiceMessageStatisticsItem $VoiceMessageStatisticsItem Voice Message statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param VoiceFilterStatisticsItem $VoiceFilterStatisticsItem Phrase Filtering statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Date Reference period
     * @param AudioTextStatisticsItem $AudioTextStatisticsItem Recording-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param StreamTextStatisticsItem $StreamTextStatisticsItem Stream-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param OverseaTextStatisticsItem $OverseaTextStatisticsItem Usage statistics of Voice-to-Text of outside-MLC requests
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param RealtimeTextStatisticsItem $RealtimeTextStatisticsItem Real-time Voice-to-Text usage statistics
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("RealtimeSpeechStatisticsItem",$param) and $param["RealtimeSpeechStatisticsItem"] !== null) {
            $this->RealtimeSpeechStatisticsItem = new RealTimeSpeechStatisticsItem();
            $this->RealtimeSpeechStatisticsItem->deserialize($param["RealtimeSpeechStatisticsItem"]);
        }

        if (array_key_exists("VoiceMessageStatisticsItem",$param) and $param["VoiceMessageStatisticsItem"] !== null) {
            $this->VoiceMessageStatisticsItem = new VoiceMessageStatisticsItem();
            $this->VoiceMessageStatisticsItem->deserialize($param["VoiceMessageStatisticsItem"]);
        }

        if (array_key_exists("VoiceFilterStatisticsItem",$param) and $param["VoiceFilterStatisticsItem"] !== null) {
            $this->VoiceFilterStatisticsItem = new VoiceFilterStatisticsItem();
            $this->VoiceFilterStatisticsItem->deserialize($param["VoiceFilterStatisticsItem"]);
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("AudioTextStatisticsItem",$param) and $param["AudioTextStatisticsItem"] !== null) {
            $this->AudioTextStatisticsItem = new AudioTextStatisticsItem();
            $this->AudioTextStatisticsItem->deserialize($param["AudioTextStatisticsItem"]);
        }

        if (array_key_exists("StreamTextStatisticsItem",$param) and $param["StreamTextStatisticsItem"] !== null) {
            $this->StreamTextStatisticsItem = new StreamTextStatisticsItem();
            $this->StreamTextStatisticsItem->deserialize($param["StreamTextStatisticsItem"]);
        }

        if (array_key_exists("OverseaTextStatisticsItem",$param) and $param["OverseaTextStatisticsItem"] !== null) {
            $this->OverseaTextStatisticsItem = new OverseaTextStatisticsItem();
            $this->OverseaTextStatisticsItem->deserialize($param["OverseaTextStatisticsItem"]);
        }

        if (array_key_exists("RealtimeTextStatisticsItem",$param) and $param["RealtimeTextStatisticsItem"] !== null) {
            $this->RealtimeTextStatisticsItem = new RealtimeTextStatisticsItem();
            $this->RealtimeTextStatisticsItem->deserialize($param["RealtimeTextStatisticsItem"]);
        }
    }
}
