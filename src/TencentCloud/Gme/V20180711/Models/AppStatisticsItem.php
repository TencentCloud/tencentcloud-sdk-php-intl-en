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
 * @method RealTimeSpeechStatisticsItem getRealtimeSpeechStatisticsItem() 获取Voice chat statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealtimeSpeechStatisticsItem(RealTimeSpeechStatisticsItem $RealtimeSpeechStatisticsItem) 设置Voice chat statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VoiceMessageStatisticsItem getVoiceMessageStatisticsItem() 获取Voice messaging statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoiceMessageStatisticsItem(VoiceMessageStatisticsItem $VoiceMessageStatisticsItem) 设置Voice messaging statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method VoiceFilterStatisticsItem getVoiceFilterStatisticsItem() 获取Phrase filtering statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoiceFilterStatisticsItem(VoiceFilterStatisticsItem $VoiceFilterStatisticsItem) 设置Phrase filtering statistics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDate() 获取Statistical period
 * @method void setDate(string $Date) 设置Statistical period
 */

/**
 *Application usage statistics
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
     * 内部实现，用户禁止调用
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
