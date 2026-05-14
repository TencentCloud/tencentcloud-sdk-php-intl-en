<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetNotifyUrl request structure.
 *
 * @method string getNotifyUrl() Obtain Alarm notification callback url
 * @method void setNotifyUrl(string $NotifyUrl) Set Alarm notification callback url
 * @method string getCallbackKey() Obtain Alarm notification callback key
 * @method void setCallbackKey(string $CallbackKey) Set Alarm notification callback key
 * @method integer getAlarmValue() Obtain Alarm threshold of the data transfer plan
 * @method void setAlarmValue(integer $AlarmValue) Set Alarm threshold of the data transfer plan
 */
class SetNotifyUrlRequest extends AbstractModel
{
    /**
     * @var string Alarm notification callback url
     */
    public $NotifyUrl;

    /**
     * @var string Alarm notification callback key
     */
    public $CallbackKey;

    /**
     * @var integer Alarm threshold of the data transfer plan
     */
    public $AlarmValue;

    /**
     * @param string $NotifyUrl Alarm notification callback url
     * @param string $CallbackKey Alarm notification callback key
     * @param integer $AlarmValue Alarm threshold of the data transfer plan
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
        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("AlarmValue",$param) and $param["AlarmValue"] !== null) {
            $this->AlarmValue = $param["AlarmValue"];
        }
    }
}
