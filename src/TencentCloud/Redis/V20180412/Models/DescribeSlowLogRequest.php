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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLog request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method string getBeginTime() Obtain Start time for pre-querying slow query logs, with a maximum query span of 30 days.
 * @method void setBeginTime(string $BeginTime) Set Start time for pre-querying slow query logs, with a maximum query span of 30 days.
 * @method string getEndTime() Obtain End time for pre-querying slow query logs, with a maximum query span of 30 days.
 * @method void setEndTime(string $EndTime) Set End time for pre-querying slow query logs, with a maximum query span of 30 days.
 * @method integer getMinQueryTime() Obtain The average execution time threshold of slow query  in microseconds
 * @method void setMinQueryTime(integer $MinQueryTime) Set The average execution time threshold of slow query  in microseconds
 * @method integer getLimit() Obtain Number of slow query logs displayed per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of slow query logs displayed per page. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Slow query offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
 * @method void setOffset(integer $Offset) Set Slow query offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
 * @method string getRole() Obtain Node role.
- master: Master node.- slave: Replica node.
 * @method void setRole(string $Role) Set Node role.
- master: Master node.- slave: Replica node.
 */
class DescribeSlowLogRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     */
    public $InstanceId;

    /**
     * @var string Start time for pre-querying slow query logs, with a maximum query span of 30 days.
     */
    public $BeginTime;

    /**
     * @var string End time for pre-querying slow query logs, with a maximum query span of 30 days.
     */
    public $EndTime;

    /**
     * @var integer The average execution time threshold of slow query  in microseconds
     */
    public $MinQueryTime;

    /**
     * @var integer Number of slow query logs displayed per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Slow query offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     */
    public $Offset;

    /**
     * @var string Node role.
- master: Master node.- slave: Replica node.
     */
    public $Role;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     * @param string $BeginTime Start time for pre-querying slow query logs, with a maximum query span of 30 days.
     * @param string $EndTime End time for pre-querying slow query logs, with a maximum query span of 30 days.
     * @param integer $MinQueryTime The average execution time threshold of slow query  in microseconds
     * @param integer $Limit Number of slow query logs displayed per page. Default value: 20. Maximum value: 100.
     * @param integer $Offset Slow query offset, which is an integral multiple of `Limit`. Calculation formula:  `offset` = `limit` * (page number - 1).
     * @param string $Role Node role.
- master: Master node.- slave: Replica node.
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
