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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Budget reminder
 *
 * @method array getWeekDays() Obtain Notification cycle, separated by commas.
Enumeration values:
Monday:1
Tuesday:2
Sunday: 7
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeekDays(array $WeekDays) Set Notification cycle, separated by commas.
Enumeration values:
Monday:1
Tuesday:2
Sunday: 7
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReceiverType() Obtain Reception type.
Enumeration values:
UIN default mode
USER
GROUP User group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverType(string $ReceiverType) Set Reception type.
Enumeration values:
UIN default mode
USER
GROUP User group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Sending and receiving window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Sending and receiving window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBudgetId() Obtain Budget configuration id (budget name)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBudgetId(integer $BudgetId) Set Budget configuration id (budget name)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNoticeWays() Obtain receiving channel, separated by commas
Enumeration values:
TITLE
Message Center
mail
SMS
WECHAT
VOICE
WeCom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoticeWays(array $NoticeWays) Set receiving channel, separated by commas
Enumeration values:
TITLE
Message Center
mail
SMS
WECHAT
VOICE
WeCom
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Send start window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Send start window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getId() Obtain id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(string $Id) Set id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getReceiverIds() Obtain user id, user group id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReceiverIds(array $ReceiverIds) Set user id, user group id
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetSendInfoDto extends AbstractModel
{
    /**
     * @var array Notification cycle, separated by commas.
Enumeration values:
Monday:1
Tuesday:2
Sunday: 7
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WeekDays;

    /**
     * @var string Reception type.
Enumeration values:
UIN default mode
USER
GROUP User group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverType;

    /**
     * @var string Sending and receiving window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Budget configuration id (budget name)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BudgetId;

    /**
     * @var array receiving channel, separated by commas
Enumeration values:
TITLE
Message Center
mail
SMS
WECHAT
VOICE
WeCom
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoticeWays;

    /**
     * @var string Send start window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var array user id, user group id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReceiverIds;

    /**
     * @param array $WeekDays Notification cycle, separated by commas.
Enumeration values:
Monday:1
Tuesday:2
Sunday: 7
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReceiverType Reception type.
Enumeration values:
UIN default mode
USER
GROUP User group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Sending and receiving window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BudgetId Budget configuration id (budget name)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NoticeWays receiving channel, separated by commas
Enumeration values:
TITLE
Message Center
mail
SMS
WECHAT
VOICE
WeCom
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Send start window HH:mm:ss
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Id id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ReceiverIds user id, user group id
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
        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("NoticeWays",$param) and $param["NoticeWays"] !== null) {
            $this->NoticeWays = $param["NoticeWays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }
    }
}
