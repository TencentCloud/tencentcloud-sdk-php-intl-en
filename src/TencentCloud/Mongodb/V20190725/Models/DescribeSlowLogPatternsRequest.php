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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogPatterns request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method string getStartTime() Obtain Slow log start time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method void setStartTime(string $StartTime) Set Slow log start time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method string getEndTime() Obtain Slow log end time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method void setEndTime(string $EndTime) Set Slow log end time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
 * @method integer getSlowMS() Obtain Threshold of slow log execution time in milliseconds. Minimum value: 100. Slow logs whose execution time exceeds the threshold will be returned.
 * @method void setSlowMS(integer $SlowMS) Set Threshold of slow log execution time in milliseconds. Minimum value: 100. Slow logs whose execution time exceeds the threshold will be returned.
 * @method integer getOffset() Obtain Offset. Minimum value: 0. Maximum value: 10000. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Minimum value: 0. Maximum value: 10000. Default value: 0.
 * @method integer getLimit() Obtain Number of entries per page. Minimum value: 1. Maximum value: 100. Default value: 20.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Minimum value: 1. Maximum value: 100. Default value: 20.
 * @method string getFormat() Obtain Slow log format, which can be JSON. If this parameter is left empty, the slow log will be returned in its native format.
 * @method void setFormat(string $Format) Set Slow log format, which can be JSON. If this parameter is left empty, the slow log will be returned in its native format.
 */
class DescribeSlowLogPatternsRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var string Slow log start time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     */
    public $StartTime;

    /**
     * @var string Slow log end time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     */
    public $EndTime;

    /**
     * @var integer Threshold of slow log execution time in milliseconds. Minimum value: 100. Slow logs whose execution time exceeds the threshold will be returned.
     */
    public $SlowMS;

    /**
     * @var integer Offset. Minimum value: 0. Maximum value: 10000. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Minimum value: 1. Maximum value: 100. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Slow log format, which can be JSON. If this parameter is left empty, the slow log will be returned in its native format.
     */
    public $Format;

    /**
     * @param string $InstanceId Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param string $StartTime Slow log start time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-01 10:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     * @param string $EndTime Slow log end time.
- Format: yyyy-mm-dd hh:mm:ss. For example, 2019-06-02 12:00:00.
- The query start and end time interval cannot exceed 24 hours. Only slow logs within the last 7 days can be queried.
     * @param integer $SlowMS Threshold of slow log execution time in milliseconds. Minimum value: 100. Slow logs whose execution time exceeds the threshold will be returned.
     * @param integer $Offset Offset. Minimum value: 0. Maximum value: 10000. Default value: 0.
     * @param integer $Limit Number of entries per page. Minimum value: 1. Maximum value: 100. Default value: 20.
     * @param string $Format Slow log format, which can be JSON. If this parameter is left empty, the slow log will be returned in its native format.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SlowMS",$param) and $param["SlowMS"] !== null) {
            $this->SlowMS = $param["SlowMS"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
