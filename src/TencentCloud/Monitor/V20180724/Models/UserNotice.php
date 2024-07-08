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
 * Alarm notification template - user notification details
 *
 * @method string getReceiverType() Obtain Recipient type. Valid values: USER (user), GROUP (user group)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverType(string $ReceiverType) Set Recipient type. Valid values: USER (user), GROUP (user group)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain Notification start time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set Notification start time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain Notification end time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set Notification end time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getNoticeWay() Obtain Notification channel list. Valid values: `EMAIL` (email), `SMS` (SMS), `CALL` (phone), `WECHAT` (WeChat), `RTX` (WeCom)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setNoticeWay(array $NoticeWay) Set Notification channel list. Valid values: `EMAIL` (email), `SMS` (SMS), `CALL` (phone), `WECHAT` (WeChat), `RTX` (WeCom)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getUserIds() Obtain User `uid` list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUserIds(array $UserIds) Set User `uid` list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getGroupIds() Obtain User group ID list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupIds(array $GroupIds) Set User group ID list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPhoneOrder() Obtain Phone polling list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneOrder(array $PhoneOrder) Set Phone polling list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPhoneCircleTimes() Obtain Number of phone pollings. Value range: 1-5
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneCircleTimes(integer $PhoneCircleTimes) Set Number of phone pollings. Value range: 1-5
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPhoneInnerInterval() Obtain Call interval in seconds within one polling. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneInnerInterval(integer $PhoneInnerInterval) Set Call interval in seconds within one polling. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPhoneCircleInterval() Obtain Polling interval in seconds. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPhoneCircleInterval(integer $PhoneCircleInterval) Set Polling interval in seconds. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getNeedPhoneArriveNotice() Obtain Whether receipt notification is required. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNeedPhoneArriveNotice(integer $NeedPhoneArriveNotice) Set Whether receipt notification is required. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPhoneCallType() Obtain Dial type. `SYNC` (simultaneous dial), `CIRCLE` (polled dial). Default value: `CIRCLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setPhoneCallType(string $PhoneCallType) Set Dial type. `SYNC` (simultaneous dial), `CIRCLE` (polled dial). Default value: `CIRCLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getWeekday() Obtain Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setWeekday(array $Weekday) Set Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getOnCallFormIDs() Obtain List of schedule IDs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOnCallFormIDs(array $OnCallFormIDs) Set List of schedule IDs
Note: This field may return null, indicating that no valid values can be obtained.
 */
class UserNotice extends AbstractModel
{
    /**
     * @var string Recipient type. Valid values: USER (user), GROUP (user group)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverType;

    /**
     * @var integer Notification start time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer Notification end time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var array Notification channel list. Valid values: `EMAIL` (email), `SMS` (SMS), `CALL` (phone), `WECHAT` (WeChat), `RTX` (WeCom)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $NoticeWay;

    /**
     * @var array User `uid` list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UserIds;

    /**
     * @var array User group ID list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupIds;

    /**
     * @var array Phone polling list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneOrder;

    /**
     * @var integer Number of phone pollings. Value range: 1-5
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneCircleTimes;

    /**
     * @var integer Call interval in seconds within one polling. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneInnerInterval;

    /**
     * @var integer Polling interval in seconds. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PhoneCircleInterval;

    /**
     * @var integer Whether receipt notification is required. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NeedPhoneArriveNotice;

    /**
     * @var string Dial type. `SYNC` (simultaneous dial), `CIRCLE` (polled dial). Default value: `CIRCLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $PhoneCallType;

    /**
     * @var array Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Weekday;

    /**
     * @var array List of schedule IDs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OnCallFormIDs;

    /**
     * @param string $ReceiverType Recipient type. Valid values: USER (user), GROUP (user group)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime Notification start time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime Notification end time, which is expressed by the number of seconds since 00:00:00. Value range: 0-86399
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $NoticeWay Notification channel list. Valid values: `EMAIL` (email), `SMS` (SMS), `CALL` (phone), `WECHAT` (WeChat), `RTX` (WeCom)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $UserIds User `uid` list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $GroupIds User group ID list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PhoneOrder Phone polling list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PhoneCircleTimes Number of phone pollings. Value range: 1-5
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PhoneInnerInterval Call interval in seconds within one polling. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PhoneCircleInterval Polling interval in seconds. Value range: 60-900
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $NeedPhoneArriveNotice Whether receipt notification is required. Valid values: 0 (no), 1 (yes)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PhoneCallType Dial type. `SYNC` (simultaneous dial), `CIRCLE` (polled dial). Default value: `CIRCLE`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Weekday Notification cycle. The values 1-7 indicate Monday to Sunday.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $OnCallFormIDs List of schedule IDs
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NoticeWay",$param) and $param["NoticeWay"] !== null) {
            $this->NoticeWay = $param["NoticeWay"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("PhoneOrder",$param) and $param["PhoneOrder"] !== null) {
            $this->PhoneOrder = $param["PhoneOrder"];
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

        if (array_key_exists("NeedPhoneArriveNotice",$param) and $param["NeedPhoneArriveNotice"] !== null) {
            $this->NeedPhoneArriveNotice = $param["NeedPhoneArriveNotice"];
        }

        if (array_key_exists("PhoneCallType",$param) and $param["PhoneCallType"] !== null) {
            $this->PhoneCallType = $param["PhoneCallType"];
        }

        if (array_key_exists("Weekday",$param) and $param["Weekday"] !== null) {
            $this->Weekday = $param["Weekday"];
        }

        if (array_key_exists("OnCallFormIDs",$param) and $param["OnCallFormIDs"] !== null) {
            $this->OnCallFormIDs = $param["OnCallFormIDs"];
        }
    }
}
