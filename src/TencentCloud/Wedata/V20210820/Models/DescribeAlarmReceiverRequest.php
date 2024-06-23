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
 * DescribeAlarmReceiver request structure.
 *
 * @method string getAlarmId() Obtain Alert ID
 * @method void setAlarmId(string $AlarmId) Set Alert ID
 * @method integer getPageNumber() Obtain Current Page
 * @method void setPageNumber(integer $PageNumber) Set Current Page
 * @method integer getPageSize() Obtain Number of records per page
 * @method void setPageSize(integer $PageSize) Set Number of records per page
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getTaskType() Obtain Type
 * @method void setTaskType(integer $TaskType) Set Type
 * @method string getAlarmRecipient() Obtain Alarm Recipient ID (comma-separated)
 * @method void setAlarmRecipient(string $AlarmRecipient) Set Alarm Recipient ID (comma-separated)
 * @method string getAlarmRecipientName() Obtain Name of alarm recipient (comma-separated)
 * @method void setAlarmRecipientName(string $AlarmRecipientName) Set Name of alarm recipient (comma-separated)
 * @method string getAlarmTime() Obtain Alarm Time
 * @method void setAlarmTime(string $AlarmTime) Set Alarm Time
 * @method string getMessageId() Obtain Message ID
 * @method void setMessageId(string $MessageId) Set Message ID
 * @method integer getRecordId() Obtain Alert Record ID
 * @method void setRecordId(integer $RecordId) Set Alert Record ID
 * @method integer getMonitorType() Obtain Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
 * @method void setMonitorType(integer $MonitorType) Set Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
 */
class DescribeAlarmReceiverRequest extends AbstractModel
{
    /**
     * @var string Alert ID
     */
    public $AlarmId;

    /**
     * @var integer Current Page
     */
    public $PageNumber;

    /**
     * @var integer Number of records per page
     */
    public $PageSize;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Type
     */
    public $TaskType;

    /**
     * @var string Alarm Recipient ID (comma-separated)
     */
    public $AlarmRecipient;

    /**
     * @var string Name of alarm recipient (comma-separated)
     */
    public $AlarmRecipientName;

    /**
     * @var string Alarm Time
     */
    public $AlarmTime;

    /**
     * @var string Message ID
     */
    public $MessageId;

    /**
     * @var integer Alert Record ID
     */
    public $RecordId;

    /**
     * @var integer Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
     */
    public $MonitorType;

    /**
     * @param string $AlarmId Alert ID
     * @param integer $PageNumber Current Page
     * @param integer $PageSize Number of records per page
     * @param string $ProjectId Project ID
     * @param integer $TaskType Type
     * @param string $AlarmRecipient Alarm Recipient ID (comma-separated)
     * @param string $AlarmRecipientName Name of alarm recipient (comma-separated)
     * @param string $AlarmTime Alarm Time
     * @param string $MessageId Message ID
     * @param integer $RecordId Alert Record ID
     * @param integer $MonitorType Monitored Object Type (1: All Tasks, 2: Assigned Task, 3: Designated Responsible Person, 4: Specified Resource Group)
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("AlarmRecipient",$param) and $param["AlarmRecipient"] !== null) {
            $this->AlarmRecipient = $param["AlarmRecipient"];
        }

        if (array_key_exists("AlarmRecipientName",$param) and $param["AlarmRecipientName"] !== null) {
            $this->AlarmRecipientName = $param["AlarmRecipientName"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
