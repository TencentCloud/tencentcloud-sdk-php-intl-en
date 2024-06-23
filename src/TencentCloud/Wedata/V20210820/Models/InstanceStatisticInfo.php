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
 * Operation and Maintenance Dashboard Instance Status Statistics and Instance Status Trend
 *
 * @method array getCountList() Obtain Instance Status Trend Statistics
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCountList(array $CountList) Set Instance Status Trend Statistics
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTimeList() Obtain Instance Status Trend Time Segmentation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTimeList(array $TimeList) Set Instance Status Trend Time Segmentation
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceStatus() Obtain Instance Status Identification: WAITING_RUNNING, KILLING, FAILED, FAILED_TRYING, SUCCEED, respectively indicate waiting for execution, terminating, failed, trying again, successful, used for Instance Status Distribution and Instance Status Trend
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance Status Identification: WAITING_RUNNING, KILLING, FAILED, FAILED_TRYING, SUCCEED, respectively indicate waiting for execution, terminating, failed, trying again, successful, used for Instance Status Distribution and Instance Status Trend
 * @method integer getInstanceCount() Obtain Used for Instance Status Distribution Count
 * @method void setInstanceCount(integer $InstanceCount) Set Used for Instance Status Distribution Count
 * @method string getShowTime() Obtain Current Display Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setShowTime(string $ShowTime) Set Current Display Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getReportTime() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setReportTime(string $ReportTime) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCount() Obtain 1
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCount(integer $Count) Set 1
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceStatisticInfo extends AbstractModel
{
    /**
     * @var array Instance Status Trend Statistics
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CountList;

    /**
     * @var array Instance Status Trend Time Segmentation
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TimeList;

    /**
     * @var string Instance Status Identification: WAITING_RUNNING, KILLING, FAILED, FAILED_TRYING, SUCCEED, respectively indicate waiting for execution, terminating, failed, trying again, successful, used for Instance Status Distribution and Instance Status Trend
     */
    public $InstanceStatus;

    /**
     * @var integer Used for Instance Status Distribution Count
     */
    public $InstanceCount;

    /**
     * @var string Current Display Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ShowTime;

    /**
     * @var string 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ReportTime;

    /**
     * @var integer 1
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Count;

    /**
     * @param array $CountList Instance Status Trend Statistics
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $TimeList Instance Status Trend Time Segmentation
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceStatus Instance Status Identification: WAITING_RUNNING, KILLING, FAILED, FAILED_TRYING, SUCCEED, respectively indicate waiting for execution, terminating, failed, trying again, successful, used for Instance Status Distribution and Instance Status Trend
     * @param integer $InstanceCount Used for Instance Status Distribution Count
     * @param string $ShowTime Current Display Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ReportTime 1
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Count 1
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CountList",$param) and $param["CountList"] !== null) {
            $this->CountList = $param["CountList"];
        }

        if (array_key_exists("TimeList",$param) and $param["TimeList"] !== null) {
            $this->TimeList = $param["TimeList"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ShowTime",$param) and $param["ShowTime"] !== null) {
            $this->ShowTime = $param["ShowTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
