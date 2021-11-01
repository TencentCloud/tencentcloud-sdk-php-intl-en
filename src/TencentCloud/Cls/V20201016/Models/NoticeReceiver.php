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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alarm notification recipient information
 *
 * @method string getReceiverType() Obtain Recipient type. Valid values:
<br><li> `Uin`: user ID
<br><li> `Group`: user group ID
Currently, other recipient types are not supported.
 * @method void setReceiverType(string $ReceiverType) Set Recipient type. Valid values:
<br><li> `Uin`: user ID
<br><li> `Group`: user group ID
Currently, other recipient types are not supported.
 * @method array getReceiverIds() Obtain Recipient
 * @method void setReceiverIds(array $ReceiverIds) Set Recipient
 * @method array getReceiverChannels() Obtain Notification method
<br><li> `Email`: email
<br><li> `Sms`: SMS
<br><li> `WeChat`: WeChat
<br><li> `Phone`: phone
 * @method void setReceiverChannels(array $ReceiverChannels) Set Notification method
<br><li> `Email`: email
<br><li> `Sms`: SMS
<br><li> `WeChat`: WeChat
<br><li> `Phone`: phone
 * @method string getStartTime() Obtain Start time for allowed message receipt
 * @method void setStartTime(string $StartTime) Set Start time for allowed message receipt
 * @method string getEndTime() Obtain End time for allowed message receipt
 * @method void setEndTime(string $EndTime) Set End time for allowed message receipt
 * @method integer getIndex() Obtain Index
 * @method void setIndex(integer $Index) Set Index
 */
class NoticeReceiver extends AbstractModel
{
    /**
     * @var string Recipient type. Valid values:
<br><li> `Uin`: user ID
<br><li> `Group`: user group ID
Currently, other recipient types are not supported.
     */
    public $ReceiverType;

    /**
     * @var array Recipient
     */
    public $ReceiverIds;

    /**
     * @var array Notification method
<br><li> `Email`: email
<br><li> `Sms`: SMS
<br><li> `WeChat`: WeChat
<br><li> `Phone`: phone
     */
    public $ReceiverChannels;

    /**
     * @var string Start time for allowed message receipt
     */
    public $StartTime;

    /**
     * @var string End time for allowed message receipt
     */
    public $EndTime;

    /**
     * @var integer Index
     */
    public $Index;

    /**
     * @param string $ReceiverType Recipient type. Valid values:
<br><li> `Uin`: user ID
<br><li> `Group`: user group ID
Currently, other recipient types are not supported.
     * @param array $ReceiverIds Recipient
     * @param array $ReceiverChannels Notification method
<br><li> `Email`: email
<br><li> `Sms`: SMS
<br><li> `WeChat`: WeChat
<br><li> `Phone`: phone
     * @param string $StartTime Start time for allowed message receipt
     * @param string $EndTime End time for allowed message receipt
     * @param integer $Index Index
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }

        if (array_key_exists("ReceiverChannels",$param) and $param["ReceiverChannels"] !== null) {
            $this->ReceiverChannels = $param["ReceiverChannels"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
