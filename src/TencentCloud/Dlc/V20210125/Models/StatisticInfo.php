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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task statistics information.
 *
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalProcessedBytes() Obtain Amount of data scanned
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalProcessedBytes(integer $TotalProcessedBytes) Set Amount of data scanned
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUsedTime() Obtain Calculation time: ms
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsedTime(integer $UsedTime) Set Calculation time: ms
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set Task end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStartTime() Obtain Task start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(integer $StartTime) Set Task start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRowsAffect() Obtain Number of rows affected
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRowsAffect(integer $RowsAffect) Set Number of rows affected
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalTime() Obtain Task duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalTime(integer $TotalTime) Set Task duration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StatisticInfo extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer Amount of data scanned
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalProcessedBytes;

    /**
     * @var integer Calculation time: ms
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsedTime;

    /**
     * @var integer Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Task start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var integer Number of rows affected
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RowsAffect;

    /**
     * @var integer Task duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalTime;

    /**
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalProcessedBytes Amount of data scanned
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UsedTime Calculation time: ms
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime Task end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StartTime Task start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RowsAffect Number of rows affected
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalTime Task duration
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TotalProcessedBytes",$param) and $param["TotalProcessedBytes"] !== null) {
            $this->TotalProcessedBytes = $param["TotalProcessedBytes"];
        }

        if (array_key_exists("UsedTime",$param) and $param["UsedTime"] !== null) {
            $this->UsedTime = $param["UsedTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RowsAffect",$param) and $param["RowsAffect"] !== null) {
            $this->RowsAffect = $param["RowsAffect"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }
    }
}
