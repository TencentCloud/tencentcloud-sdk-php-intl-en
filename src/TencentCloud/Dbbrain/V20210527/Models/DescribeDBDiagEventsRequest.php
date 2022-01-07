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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagEvents request structure.
 *
 * @method string getStartTime() Obtain Start time in the format of “2021-05-27 00:00:00”. The earliest time that can be queried is 30 days before the current time.
 * @method void setStartTime(string $StartTime) Set Start time in the format of “2021-05-27 00:00:00”. The earliest time that can be queried is 30 days before the current time.
 * @method string getEndTime() Obtain End time in the format of "2021-05-27 01:00:00". The interval between the end time and the start time can be up to 7 days.
 * @method void setEndTime(string $EndTime) Set End time in the format of "2021-05-27 01:00:00". The interval between the end time and the start time can be up to 7 days.
 * @method array getSeverities() Obtain Risk level list. Valid values in descending order of severity: `1` (critical), `2` (serious), `3` (alarm), `4` (warning), `5` (healthy).
 * @method void setSeverities(array $Severities) Set Risk level list. Valid values in descending order of severity: `1` (critical), `2` (serious), `3` (alarm), `4` (warning), `5` (healthy).
 * @method array getInstanceIds() Obtain Instance ID list.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list.
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned results. Default value: 20. Maximum value: 50.
 * @method void setLimit(integer $Limit) Set Number of returned results. Default value: 20. Maximum value: 50.
 */
class DescribeDBDiagEventsRequest extends AbstractModel
{
    /**
     * @var string Start time in the format of “2021-05-27 00:00:00”. The earliest time that can be queried is 30 days before the current time.
     */
    public $StartTime;

    /**
     * @var string End time in the format of "2021-05-27 01:00:00". The interval between the end time and the start time can be up to 7 days.
     */
    public $EndTime;

    /**
     * @var array Risk level list. Valid values in descending order of severity: `1` (critical), `2` (serious), `3` (alarm), `4` (warning), `5` (healthy).
     */
    public $Severities;

    /**
     * @var array Instance ID list.
     */
    public $InstanceIds;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned results. Default value: 20. Maximum value: 50.
     */
    public $Limit;

    /**
     * @param string $StartTime Start time in the format of “2021-05-27 00:00:00”. The earliest time that can be queried is 30 days before the current time.
     * @param string $EndTime End time in the format of "2021-05-27 01:00:00". The interval between the end time and the start time can be up to 7 days.
     * @param array $Severities Risk level list. Valid values in descending order of severity: `1` (critical), `2` (serious), `3` (alarm), `4` (warning), `5` (healthy).
     * @param array $InstanceIds Instance ID list.
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of returned results. Default value: 20. Maximum value: 50.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Severities",$param) and $param["Severities"] !== null) {
            $this->Severities = $param["Severities"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
