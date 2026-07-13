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
 * Budget History Details
 *
 * @method string getDateDesc() Obtain budget period
 * @method void setDateDesc(string $DateDesc) Set budget period
 * @method string getRealCost() Obtain actual fee
 * @method void setRealCost(string $RealCost) Set actual fee
 * @method string getBudgetQuota() Obtain Budget amount limit
 * @method void setBudgetQuota(string $BudgetQuota) Set Budget amount limit
 * @method string getAlarmType() Obtain Reminder type.
Enumeration values:
BUDGET reminder
Fluctuation alert
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmType(string $AlarmType) Set Reminder type.
Enumeration values:
BUDGET reminder
Fluctuation alert
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessageContent() Obtain message content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessageContent(string $MessageContent) Set message content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSendTime() Obtain Send time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSendTime(integer $SendTime) Set Send time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetRemindRecords extends AbstractModel
{
    /**
     * @var string budget period
     */
    public $DateDesc;

    /**
     * @var string actual fee
     */
    public $RealCost;

    /**
     * @var string Budget amount limit
     */
    public $BudgetQuota;

    /**
     * @var string Reminder type.
Enumeration values:
BUDGET reminder
Fluctuation alert
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmType;

    /**
     * @var string message content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MessageContent;

    /**
     * @var integer Send time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SendTime;

    /**
     * @var integer Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $DateDesc budget period
     * @param string $RealCost actual fee
     * @param string $BudgetQuota Budget amount limit
     * @param string $AlarmType Reminder type.
Enumeration values:
BUDGET reminder
Fluctuation alert
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MessageContent message content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SendTime Send time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time.
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
        if (array_key_exists("DateDesc",$param) and $param["DateDesc"] !== null) {
            $this->DateDesc = $param["DateDesc"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("BudgetQuota",$param) and $param["BudgetQuota"] !== null) {
            $this->BudgetQuota = $param["BudgetQuota"];
        }

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("MessageContent",$param) and $param["MessageContent"] !== null) {
            $this->MessageContent = $param["MessageContent"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
