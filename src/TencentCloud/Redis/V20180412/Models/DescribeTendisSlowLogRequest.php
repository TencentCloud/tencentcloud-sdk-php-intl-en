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
 * DescribeTendisSlowLog request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [Tendis console](https://console.cloud.tencent.com/tendis) and copy it in the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [Tendis console](https://console.cloud.tencent.com/tendis) and copy it in the instance list.
 * @method string getBeginTime() Obtain Start time for a query, for example, 2019-09-08 12:12:41, with a maximum query span of 30 days.
 * @method void setBeginTime(string $BeginTime) Set Start time for a query, for example, 2019-09-08 12:12:41, with a maximum query span of 30 days.
 * @method string getEndTime() Obtain End time for a query, for example, 2019-09-09 12:12:41, with a maximum query span of 30 days.
 * @method void setEndTime(string $EndTime) Set End time for a query, for example, 2019-09-09 12:12:41, with a maximum query span of 30 days.
 * @method integer getMinQueryTime() Obtain Slow query threshold in ms
 * @method void setMinQueryTime(integer $MinQueryTime) Set Slow query threshold in ms
 * @method integer getLimit() Obtain Page size. Default value 20. Maximum value 100.
 * @method void setLimit(integer $Limit) Set Page size. Default value 20. Maximum value 100.
 * @method integer getOffset() Obtain Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
 */
class DescribeTendisSlowLogRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [Tendis console](https://console.cloud.tencent.com/tendis) and copy it in the instance list.
     */
    public $InstanceId;

    /**
     * @var string Start time for a query, for example, 2019-09-08 12:12:41, with a maximum query span of 30 days.
     */
    public $BeginTime;

    /**
     * @var string End time for a query, for example, 2019-09-09 12:12:41, with a maximum query span of 30 days.
     */
    public $EndTime;

    /**
     * @var integer Slow query threshold in ms
     */
    public $MinQueryTime;

    /**
     * @var integer Page size. Default value 20. Maximum value 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integer multiple of Limit. Calculation formula: Offset = Limit x (Page number - 1).
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID. Log in to the [Tendis console](https://console.cloud.tencent.com/tendis) and copy it in the instance list.
     * @param string $BeginTime Start time for a query, for example, 2019-09-08 12:12:41, with a maximum query span of 30 days.
     * @param string $EndTime End time for a query, for example, 2019-09-09 12:12:41, with a maximum query span of 30 days.
     * @param integer $MinQueryTime Slow query threshold in ms
     * @param integer $Limit Page size. Default value 20. Maximum value 100.
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
