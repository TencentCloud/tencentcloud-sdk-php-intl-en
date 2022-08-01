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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReportData request structure.
 *
 * @method string getStartTime() Obtain Query the start time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
 * @method void setStartTime(string $StartTime) Set Query the start time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
 * @method string getEndTime() Obtain Query the end time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
 * @method void setEndTime(string $EndTime) Set Query the end time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
 * @method string getReportType() Obtain Report type
daily: daily report
weekly: weekly report (Monday to Sunday)
monthly: monthly report (calendar month)
 * @method void setReportType(string $ReportType) Set Report type
daily: daily report
weekly: weekly report (Monday to Sunday)
monthly: monthly report (calendar month)
 * @method string getArea() Obtain Domain name acceleration region
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
 * @method void setArea(string $Area) Set Domain name acceleration region
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of data entries. Default value: 1000.
 * @method void setLimit(integer $Limit) Set Number of data entries. Default value: 1000.
 * @method integer getProject() Obtain Filters by project ID
 * @method void setProject(integer $Project) Set Filters by project ID
 */
class DescribeReportDataRequest extends AbstractModel
{
    /**
     * @var string Query the start time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
     */
    public $StartTime;

    /**
     * @var string Query the end time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
     */
    public $EndTime;

    /**
     * @var string Report type
daily: daily report
weekly: weekly report (Monday to Sunday)
monthly: monthly report (calendar month)
     */
    public $ReportType;

    /**
     * @var string Domain name acceleration region
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
     */
    public $Area;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of data entries. Default value: 1000.
     */
    public $Limit;

    /**
     * @var integer Filters by project ID
     */
    public $Project;

    /**
     * @param string $StartTime Query the start time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
     * @param string $EndTime Query the end time in the format of `yyyy-MM-dd`
If the report type is `daily`, the start time and end time must be of the same day.
If the report type is `weekly`, the start time must be Monday and the end time must be the Sunday of the same week.
If the report type is `monthly`, the start time must be the first day of the month and the end time must be the last day of the same month.
     * @param string $ReportType Report type
daily: daily report
weekly: weekly report (Monday to Sunday)
monthly: monthly report (calendar month)
     * @param string $Area Domain name acceleration region
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of data entries. Default value: 1000.
     * @param integer $Project Filters by project ID
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

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }
    }
}
