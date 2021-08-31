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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * amp alarm channel configuration
 *
 * @method boolean getEnabled() Obtain Whether it is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
 * @method string getRepeatInterval() Obtain Convergence time
 * @method void setRepeatInterval(string $RepeatInterval) Set Convergence time
 * @method string getTimeRangeStart() Obtain Start time
 * @method void setTimeRangeStart(string $TimeRangeStart) Set Start time
 * @method string getTimeRangeEnd() Obtain End time
 * @method void setTimeRangeEnd(string $TimeRangeEnd) Set End time
 * @method array getNotifyWay() Obtain Alarm delivery method. Valid values: `SMS`, `EMAIL`, `CALL`, and `WECHAT`
It respectively represents SMS, email, phone calls, and WeChat.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setNotifyWay(array $NotifyWay) Set Alarm delivery method. Valid values: `SMS`, `EMAIL`, `CALL`, and `WECHAT`
It respectively represents SMS, email, phone calls, and WeChat.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method array getReceiverGroups() Obtain The alarm recipient group (user group)
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setReceiverGroups(array $ReceiverGroups) Set The alarm recipient group (user group)
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method array getPhoneNotifyOrder() Obtain The alarm sequence of phone calls
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPhoneNotifyOrder(array $PhoneNotifyOrder) Set The alarm sequence of phone calls
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPhoneCircleTimes() Obtain The number of phone call alarms
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPhoneCircleTimes(integer $PhoneCircleTimes) Set The number of phone call alarms
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPhoneInnerInterval() Obtain Dialing interval in seconds within one polling
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPhoneInnerInterval(integer $PhoneInnerInterval) Set Dialing interval in seconds within one polling
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method integer getPhoneCircleInterval() Obtain Polling interval in seconds
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPhoneCircleInterval(integer $PhoneCircleInterval) Set Polling interval in seconds
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getPhoneArriveNotice() Obtain Phone call alarm arrival notification
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setPhoneArriveNotice(boolean $PhoneArriveNotice) Set Phone call alarm arrival notification
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getType() Obtain Channel type. Default value: `amp`. The following channels are supported:
amp
webhook
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set Channel type. Default value: `amp`. The following channels are supported:
amp
webhook
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method string getWebHook() Obtain This parameter is required if `Type` is `webhook`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setWebHook(string $WebHook) Set This parameter is required if `Type` is `webhook`.
Note: this field may return `null`, indicating that no valid value can be obtained.
 */
class PrometheusNotification extends AbstractModel
{
    /**
     * @var boolean Whether it is enabled
     */
    public $Enabled;

    /**
     * @var string Convergence time
     */
    public $RepeatInterval;

    /**
     * @var string Start time
     */
    public $TimeRangeStart;

    /**
     * @var string End time
     */
    public $TimeRangeEnd;

    /**
     * @var array Alarm delivery method. Valid values: `SMS`, `EMAIL`, `CALL`, and `WECHAT`
It respectively represents SMS, email, phone calls, and WeChat.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $NotifyWay;

    /**
     * @var array The alarm recipient group (user group)
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $ReceiverGroups;

    /**
     * @var array The alarm sequence of phone calls
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PhoneNotifyOrder;

    /**
     * @var integer The number of phone call alarms
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PhoneCircleTimes;

    /**
     * @var integer Dialing interval in seconds within one polling
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PhoneInnerInterval;

    /**
     * @var integer Polling interval in seconds
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PhoneCircleInterval;

    /**
     * @var boolean Phone call alarm arrival notification
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $PhoneArriveNotice;

    /**
     * @var string Channel type. Default value: `amp`. The following channels are supported:
amp
webhook
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string This parameter is required if `Type` is `webhook`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $WebHook;

    /**
     * @param boolean $Enabled Whether it is enabled
     * @param string $RepeatInterval Convergence time
     * @param string $TimeRangeStart Start time
     * @param string $TimeRangeEnd End time
     * @param array $NotifyWay Alarm delivery method. Valid values: `SMS`, `EMAIL`, `CALL`, and `WECHAT`
It respectively represents SMS, email, phone calls, and WeChat.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param array $ReceiverGroups The alarm recipient group (user group)
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param array $PhoneNotifyOrder The alarm sequence of phone calls
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PhoneCircleTimes The number of phone call alarms
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PhoneInnerInterval Dialing interval in seconds within one polling
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param integer $PhoneCircleInterval Polling interval in seconds
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $PhoneArriveNotice Phone call alarm arrival notification
This parameter is used when you specify `CALL` for `NotifyWay`.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $Type Channel type. Default value: `amp`. The following channels are supported:
amp
webhook
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param string $WebHook This parameter is required if `Type` is `webhook`.
Note: this field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RepeatInterval",$param) and $param["RepeatInterval"] !== null) {
            $this->RepeatInterval = $param["RepeatInterval"];
        }

        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }

        if (array_key_exists("NotifyWay",$param) and $param["NotifyWay"] !== null) {
            $this->NotifyWay = $param["NotifyWay"];
        }

        if (array_key_exists("ReceiverGroups",$param) and $param["ReceiverGroups"] !== null) {
            $this->ReceiverGroups = $param["ReceiverGroups"];
        }

        if (array_key_exists("PhoneNotifyOrder",$param) and $param["PhoneNotifyOrder"] !== null) {
            $this->PhoneNotifyOrder = $param["PhoneNotifyOrder"];
        }

        if (array_key_exists("PhoneCircleTimes",$param) and $param["PhoneCircleTimes"] !== null) {
            $this->PhoneCircleTimes = $param["PhoneCircleTimes"];
        }

        if (array_key_exists("PhoneInnerInterval",$param) and $param["PhoneInnerInterval"] !== null) {
            $this->PhoneInnerInterval = $param["PhoneInnerInterval"];
        }

        if (array_key_exists("PhoneCircleInterval",$param) and $param["PhoneCircleInterval"] !== null) {
            $this->PhoneCircleInterval = $param["PhoneCircleInterval"];
        }

        if (array_key_exists("PhoneArriveNotice",$param) and $param["PhoneArriveNotice"] !== null) {
            $this->PhoneArriveNotice = $param["PhoneArriveNotice"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WebHook",$param) and $param["WebHook"] !== null) {
            $this->WebHook = $param["WebHook"];
        }
    }
}
