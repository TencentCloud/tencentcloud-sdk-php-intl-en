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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAlarmMessages request structure.
 *
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method integer getPageNumber() Obtain Page number for pagination, minimum value is 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number for pagination, minimum value is 1.
 * @method integer getPageSize() Obtain Specifies the number of items displayed per page. maximum value: 100.
 * @method void setPageSize(integer $PageSize) Set Specifies the number of items displayed per page. maximum value: 100.
 * @method string getStartTime() Obtain Starting Alarm time. format: yyyy-MM-dd HH:MM:ss.
 * @method void setStartTime(string $StartTime) Set Starting Alarm time. format: yyyy-MM-dd HH:MM:ss.
 * @method string getEndTime() Obtain Specifies the Alarm end time in the format yyyy-MM-dd HH:MM:ss.
 * @method void setEndTime(string $EndTime) Set Specifies the Alarm end time in the format yyyy-MM-dd HH:MM:ss.
 * @method integer getAlarmLevel() Obtain Alarm level.
 * @method void setAlarmLevel(integer $AlarmLevel) Set Alarm level.
 * @method string getAlarmRecipientId() Obtain Alert recipient Id.
 * @method void setAlarmRecipientId(string $AlarmRecipientId) Set Alert recipient Id.
 * @method string getTimeZone() Obtain For incoming and returned filter time zone, default UTC+8.
 * @method void setTimeZone(string $TimeZone) Set For incoming and returned filter time zone, default UTC+8.
 */
class ListAlarmMessagesRequest extends AbstractModel
{
    /**
     * @var string Project id.
     */
    public $ProjectId;

    /**
     * @var integer Page number for pagination, minimum value is 1.
     */
    public $PageNumber;

    /**
     * @var integer Specifies the number of items displayed per page. maximum value: 100.
     */
    public $PageSize;

    /**
     * @var string Starting Alarm time. format: yyyy-MM-dd HH:MM:ss.
     */
    public $StartTime;

    /**
     * @var string Specifies the Alarm end time in the format yyyy-MM-dd HH:MM:ss.
     */
    public $EndTime;

    /**
     * @var integer Alarm level.
     */
    public $AlarmLevel;

    /**
     * @var string Alert recipient Id.
     */
    public $AlarmRecipientId;

    /**
     * @var string For incoming and returned filter time zone, default UTC+8.
     */
    public $TimeZone;

    /**
     * @param string $ProjectId Project id.
     * @param integer $PageNumber Page number for pagination, minimum value is 1.
     * @param integer $PageSize Specifies the number of items displayed per page. maximum value: 100.
     * @param string $StartTime Starting Alarm time. format: yyyy-MM-dd HH:MM:ss.
     * @param string $EndTime Specifies the Alarm end time in the format yyyy-MM-dd HH:MM:ss.
     * @param integer $AlarmLevel Alarm level.
     * @param string $AlarmRecipientId Alert recipient Id.
     * @param string $TimeZone For incoming and returned filter time zone, default UTC+8.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmRecipientId",$param) and $param["AlarmRecipientId"] !== null) {
            $this->AlarmRecipientId = $param["AlarmRecipientId"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
