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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upgrade notification.
 *
 * @method array getNoticeReceivers() Obtain Alarm notification template recipient information.
 * @method void setNoticeReceivers(array $NoticeReceivers) Set Alarm notification template recipient information.
 * @method array getWebCallbacks() Obtain Callback information of alarm notification template.
 * @method void setWebCallbacks(array $WebCallbacks) Set Callback information of alarm notification template.
 * @method boolean getEscalate() Obtain Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
 * @method void setEscalate(boolean $Escalate) Set Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
 * @method integer getInterval() Obtain Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
 * @method void setInterval(integer $Interval) Set Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
 * @method integer getType() Obtain Upgrade conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered, defaults to 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

 * @method void setType(integer $Type) Set Upgrade conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered, defaults to 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

 * @method EscalateNoticeInfo getEscalateNotice() Obtain Notification channel configuration for the next step after alarm severity escalation. A maximum of five steps can be configured.
 * @method void setEscalateNotice(EscalateNoticeInfo $EscalateNotice) Set Notification channel configuration for the next step after alarm severity escalation. A maximum of five steps can be configured.
 */
class EscalateNoticeInfo extends AbstractModel
{
    /**
     * @var array Alarm notification template recipient information.
     */
    public $NoticeReceivers;

    /**
     * @var array Callback information of alarm notification template.
     */
    public $WebCallbacks;

    /**
     * @var boolean Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
     */
    public $Escalate;

    /**
     * @var integer Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
     */
    public $Interval;

    /**
     * @var integer Upgrade conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered, defaults to 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

     */
    public $Type;

    /**
     * @var EscalateNoticeInfo Notification channel configuration for the next step after alarm severity escalation. A maximum of five steps can be configured.
     */
    public $EscalateNotice;

    /**
     * @param array $NoticeReceivers Alarm notification template recipient information.
     * @param array $WebCallbacks Callback information of alarm notification template.
     * @param boolean $Escalate Alarm escalation switch. `true`: enable alarm escalation, `false`: disable alarm escalation. Default: false.
     * @param integer $Interval Escalate alarms interval. Unit: minutes, range `[1, 14400]`.
     * @param integer $Type Upgrade conditions. `1`: Unclaimed and unrecovered, `2`: Unrecovered, defaults to 1.
-Unclaimed and unrecovered: Upgrade if the alert is not restored and no one claims it.
-Unrecovered: Upgrade if the alarm persists without recovery.

     * @param EscalateNoticeInfo $EscalateNotice Notification channel configuration for the next step after alarm severity escalation. A maximum of five steps can be configured.
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
        if (array_key_exists("NoticeReceivers",$param) and $param["NoticeReceivers"] !== null) {
            $this->NoticeReceivers = [];
            foreach ($param["NoticeReceivers"] as $key => $value){
                $obj = new NoticeReceiver();
                $obj->deserialize($value);
                array_push($this->NoticeReceivers, $obj);
            }
        }

        if (array_key_exists("WebCallbacks",$param) and $param["WebCallbacks"] !== null) {
            $this->WebCallbacks = [];
            foreach ($param["WebCallbacks"] as $key => $value){
                $obj = new WebCallback();
                $obj->deserialize($value);
                array_push($this->WebCallbacks, $obj);
            }
        }

        if (array_key_exists("Escalate",$param) and $param["Escalate"] !== null) {
            $this->Escalate = $param["Escalate"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EscalateNotice",$param) and $param["EscalateNotice"] !== null) {
            $this->EscalateNotice = new EscalateNoticeInfo();
            $this->EscalateNotice->deserialize($param["EscalateNotice"]);
        }
    }
}
