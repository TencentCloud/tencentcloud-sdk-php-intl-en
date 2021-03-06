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
 * @method RealTimeSpeechStatisticsItem getRealtimeSpeechStatisticsItem() Obtain Voice chat statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealtimeSpeechStatisticsItem(RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem) Set Voice chat statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VoiceMessageStatisticsItem getVoiceMessageStatisticsItem() Obtain Voice messaging statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoiceMessageStatisticsItem(VoiceMessageStatisticsItem $VoiceMessageStatisticsItem) Set Voice messaging statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VoiceFilterStatisticsItem getVoiceFilterStatisticsItem() Obtain Phrase filtering statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoiceFilterStatisticsItem(VoiceFilterStatisticsItem $VoiceFilterStatisticsItem) Set Phrase filtering statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDate() Obtain Statistical period
 * @method void setDate(string $Date) Set Statistical period
 */
class AppStatisticsItem extends AbstractModel
{
    /**
     * @var RealTimeSpeechStatisticsItem Voice chat statistics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealtimeSpeechStatisticsItem;

    /**
     * @var VoiceMessageStatisticsItem Voice messaging statistics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoiceMessageStatisticsItem;

    /**
     * @var VoiceFilterStatisticsItem Phrase filtering statistics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoiceFilterStatisticsItem;

    /**
     * @var string Statistical period
     */
    public $Date;

    /**
     * @param RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem Voice chat statistics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VoiceMessageStatisticsItem $VoiceMessageStatisticsItem Voice messaging statistics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param VoiceFilterStatisticsItem $VoiceFilterStatisticsItem Phrase filtering statistics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Date Statistical period
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
    }
}
