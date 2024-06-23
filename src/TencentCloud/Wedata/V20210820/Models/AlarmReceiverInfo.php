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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert Recipient Details
 *
 * @method string getAlarmId() Obtain Alert ID
 * @method void setAlarmId(string $AlarmId) Set Alert ID
 * @method string getAlarmReceiver() Obtain Alarm Recipient ID
 * @method void setAlarmReceiver(string $AlarmReceiver) Set Alarm Recipient ID
 * @method integer getEmail() Obtain Email,0: Not set,1: Success,2: Failure
 * @method void setEmail(integer $Email) Set Email,0: Not set,1: Success,2: Failure
 * @method integer getSms() Obtain SMS,0: Not set,1: Success,2: Failure
 * @method void setSms(integer $Sms) Set SMS,0: Not set,1: Success,2: Failure
 * @method integer getWechat() Obtain WeChat,0: Not set,1: Success,2: Failure
 * @method void setWechat(integer $Wechat) Set WeChat,0: Not set,1: Success,2: Failure
 * @method integer getVoice() Obtain Telephone,0: Not set,1: Success,2: Failure
 * @method void setVoice(integer $Voice) Set Telephone,0: Not set,1: Success,2: Failure
 * @method integer getWecom() Obtain WeCom,0: Not set,1: Success,2: Failure
 * @method void setWecom(integer $Wecom) Set WeCom,0: Not set,1: Success,2: Failure
 * @method integer getHttp() Obtain http,0: Not set,1: Success,2: Failure
 * @method void setHttp(integer $Http) Set http,0: Not set,1: Success,2: Failure
 * @method integer getWecomGroup() Obtain Enterprise WeChat group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWecomGroup(integer $WecomGroup) Set Enterprise WeChat group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getLarkGroup() Obtain FeiShu Group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLarkGroup(integer $LarkGroup) Set FeiShu Group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AlarmReceiverInfo extends AbstractModel
{
    /**
     * @var string Alert ID
     */
    public $AlarmId;

    /**
     * @var string Alarm Recipient ID
     */
    public $AlarmReceiver;

    /**
     * @var integer Email,0: Not set,1: Success,2: Failure
     */
    public $Email;

    /**
     * @var integer SMS,0: Not set,1: Success,2: Failure
     */
    public $Sms;

    /**
     * @var integer WeChat,0: Not set,1: Success,2: Failure
     */
    public $Wechat;

    /**
     * @var integer Telephone,0: Not set,1: Success,2: Failure
     */
    public $Voice;

    /**
     * @var integer WeCom,0: Not set,1: Success,2: Failure
     */
    public $Wecom;

    /**
     * @var integer http,0: Not set,1: Success,2: Failure
     */
    public $Http;

    /**
     * @var integer Enterprise WeChat group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WecomGroup;

    /**
     * @var integer FeiShu Group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LarkGroup;

    /**
     * @param string $AlarmId Alert ID
     * @param string $AlarmReceiver Alarm Recipient ID
     * @param integer $Email Email,0: Not set,1: Success,2: Failure
     * @param integer $Sms SMS,0: Not set,1: Success,2: Failure
     * @param integer $Wechat WeChat,0: Not set,1: Success,2: Failure
     * @param integer $Voice Telephone,0: Not set,1: Success,2: Failure
     * @param integer $Wecom WeCom,0: Not set,1: Success,2: Failure
     * @param integer $Http http,0: Not set,1: Success,2: Failure
     * @param integer $WecomGroup Enterprise WeChat group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $LarkGroup FeiShu Group,0: Not set,1: Success,2: Failure
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("AlarmReceiver",$param) and $param["AlarmReceiver"] !== null) {
            $this->AlarmReceiver = $param["AlarmReceiver"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Sms",$param) and $param["Sms"] !== null) {
            $this->Sms = $param["Sms"];
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = $param["Wechat"];
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = $param["Voice"];
        }

        if (array_key_exists("Wecom",$param) and $param["Wecom"] !== null) {
            $this->Wecom = $param["Wecom"];
        }

        if (array_key_exists("Http",$param) and $param["Http"] !== null) {
            $this->Http = $param["Http"];
        }

        if (array_key_exists("WecomGroup",$param) and $param["WecomGroup"] !== null) {
            $this->WecomGroup = $param["WecomGroup"];
        }

        if (array_key_exists("LarkGroup",$param) and $param["LarkGroup"] !== null) {
            $this->LarkGroup = $param["LarkGroup"];
        }
    }
}
