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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert notification channel configuration
 *
 * @method boolean getEnabled() Obtain Whether it is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
 * @method string getType() Obtain Channel type. Default value: `amp`. Valid values:
`amp`
`webhook`
`alertmanager`
 * @method void setType(string $Type) Set Channel type. Default value: `amp`. Valid values:
`amp`
`webhook`
`alertmanager`
 * @method string getWebHook() Obtain If `Type` is `webhook`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWebHook(string $WebHook) Set If `Type` is `webhook`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method PrometheusAlertManagerConfig getAlertManager() Obtain If `Type` is `alertmanager`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlertManager(PrometheusAlertManagerConfig $AlertManager) Set If `Type` is `alertmanager`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRepeatInterval() Obtain Convergence time
 * @method void setRepeatInterval(string $RepeatInterval) Set Convergence time
 * @method string getTimeRangeStart() Obtain Effect start time
 * @method void setTimeRangeStart(string $TimeRangeStart) Set Effect start time
 * @method string getTimeRangeEnd() Obtain Effect end time
 * @method void setTimeRangeEnd(string $TimeRangeEnd) Set Effect end time
 * @method array getNotifyWay() Obtain Alert notification channel. Valid values: `SMS`, `EMAIL`, `CALL`, `WECHAT`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNotifyWay(array $NotifyWay) Set Alert notification channel. Valid values: `SMS`, `EMAIL`, `CALL`, `WECHAT`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReceiverGroups() Obtain Alert recipient group (user group)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverGroups(array $ReceiverGroups) Set Alert recipient group (user group)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPhoneNotifyOrder() Obtain Alert call sequence.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneNotifyOrder(array $PhoneNotifyOrder) Set Alert call sequence.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPhoneCircleTimes() Obtain Number of alert calls.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneCircleTimes(integer $PhoneCircleTimes) Set Number of alert calls.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPhoneInnerInterval() Obtain Alert call interval within a cycle in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneInnerInterval(integer $PhoneInnerInterval) Set Alert call interval within a cycle in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPhoneCircleInterval() Obtain Alert call cycle interval in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneCircleInterval(integer $PhoneCircleInterval) Set Alert call cycle interval in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getPhoneArriveNotice() Obtain Alert call receipt notification
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneArriveNotice(boolean $PhoneArriveNotice) Set Alert call receipt notification
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrometheusNotificationItem extends AbstractModel
{
    /**
     * @var boolean Whether it is enabled
     */
    public $Enabled;

    /**
     * @var string Channel type. Default value: `amp`. Valid values:
`amp`
`webhook`
`alertmanager`
     */
    public $Type;

    /**
     * @var string If `Type` is `webhook`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WebHook;

    /**
     * @var PrometheusAlertManagerConfig If `Type` is `alertmanager`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlertManager;

    /**
     * @var string Convergence time
     */
    public $RepeatInterval;

    /**
     * @var string Effect start time
     */
    public $TimeRangeStart;

    /**
     * @var string Effect end time
     */
    public $TimeRangeEnd;

    /**
     * @var array Alert notification channel. Valid values: `SMS`, `EMAIL`, `CALL`, `WECHAT`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NotifyWay;

    /**
     * @var array Alert recipient group (user group)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverGroups;

    /**
     * @var array Alert call sequence.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneNotifyOrder;

    /**
     * @var integer Number of alert calls.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneCircleTimes;

    /**
     * @var integer Alert call interval within a cycle in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneInnerInterval;

    /**
     * @var integer Alert call cycle interval in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneCircleInterval;

    /**
     * @var boolean Alert call receipt notification
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneArriveNotice;

    /**
     * @param boolean $Enabled Whether it is enabled
     * @param string $Type Channel type. Default value: `amp`. Valid values:
`amp`
`webhook`
`alertmanager`
     * @param string $WebHook If `Type` is `webhook`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param PrometheusAlertManagerConfig $AlertManager If `Type` is `alertmanager`, this field is required.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RepeatInterval Convergence time
     * @param string $TimeRangeStart Effect start time
     * @param string $TimeRangeEnd Effect end time
     * @param array $NotifyWay Alert notification channel. Valid values: `SMS`, `EMAIL`, `CALL`, `WECHAT`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ReceiverGroups Alert recipient group (user group)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PhoneNotifyOrder Alert call sequence.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PhoneCircleTimes Number of alert calls.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PhoneInnerInterval Alert call interval within a cycle in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PhoneCircleInterval Alert call cycle interval in seconds.
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $PhoneArriveNotice Alert call receipt notification
Note: If `NotifyWay` is `CALL`, this parameter will be used.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("WebHook",$param) and $param["WebHook"] !== null) {
            $this->WebHook = $param["WebHook"];
        }

        if (array_key_exists("AlertManager",$param) and $param["AlertManager"] !== null) {
            $this->AlertManager = new PrometheusAlertManagerConfig();
            $this->AlertManager->deserialize($param["AlertManager"]);
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
    }
}
