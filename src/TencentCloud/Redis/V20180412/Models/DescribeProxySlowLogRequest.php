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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxySlowLog request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method string getBeginTime() Obtain Start time of a slow query, with a maximum query span of 30 days.
 * @method void setBeginTime(string $BeginTime) Set Start time of a slow query, with a maximum query span of 30 days.
 * @method string getEndTime() Obtain End time of a slow query, with a maximum query span of 30 days.
 * @method void setEndTime(string $EndTime) Set End time of a slow query, with a maximum query span of 30 days.
 * @method integer getMinQueryTime() Obtain Slow query threshold  in milliseconds
 * @method void setMinQueryTime(integer $MinQueryTime) Set Slow query threshold  in milliseconds
 * @method integer getLimit() Obtain Number of tasks output on each page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of tasks output on each page. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
 */
class DescribeProxySlowLogRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     */
    public $InstanceId;

    /**
     * @var string Start time of a slow query, with a maximum query span of 30 days.
     */
    public $BeginTime;

    /**
     * @var string End time of a slow query, with a maximum query span of 30 days.
     */
    public $EndTime;

    /**
     * @var integer Slow query threshold  in milliseconds
     */
    public $MinQueryTime;

    /**
     * @var integer Number of tasks output on each page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
     */
    public $Offset;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     * @param string $BeginTime Start time of a slow query, with a maximum query span of 30 days.
     * @param string $EndTime End time of a slow query, with a maximum query span of 30 days.
     * @param integer $MinQueryTime Slow query threshold  in milliseconds
     * @param integer $Limit Number of tasks output on each page. Default value: 20. Maximum value: 100.
     * @param integer $Offset Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MinQueryTime",$param) and $param["MinQueryTime"] !== null) {
            $this->MinQueryTime = $param["MinQueryTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
