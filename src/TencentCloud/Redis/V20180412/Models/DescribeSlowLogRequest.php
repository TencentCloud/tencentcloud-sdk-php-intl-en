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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getBeginTime() Obtain The start time
 * @method void setBeginTime(string $BeginTime) Set The start time
 * @method string getEndTime() Obtain The end time
 * @method void setEndTime(string $EndTime) Set The end time
 * @method integer getMinQueryTime() Obtain The average execution time threshold of slow query in ms.
 * @method void setMinQueryTime(integer $MinQueryTime) Set The average execution time threshold of slow query in ms.
 * @method integer getLimit() Obtain Number of slow queries displayed per page. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of slow queries displayed per page. Default value: `20`.
 * @method integer getOffset() Obtain Slow query offset, which is an integral multiple of `Limit`.
 * @method void setOffset(integer $Offset) Set Slow query offset, which is an integral multiple of `Limit`.
 * @method string getRole() Obtain Node role. <ul><li>`Master`: Master node</li><li>`Slave`: Replica node</li></ul>
 * @method void setRole(string $Role) Set Node role. <ul><li>`Master`: Master node</li><li>`Slave`: Replica node</li></ul>
 */
class DescribeSlowLogRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string The start time
     */
    public $BeginTime;

    /**
     * @var string The end time
     */
    public $EndTime;

    /**
     * @var integer The average execution time threshold of slow query in ms.
     */
    public $MinQueryTime;

    /**
     * @var integer Number of slow queries displayed per page. Default value: `20`.
     */
    public $Limit;

    /**
     * @var integer Slow query offset, which is an integral multiple of `Limit`.
     */
    public $Offset;

    /**
     * @var string Node role. <ul><li>`Master`: Master node</li><li>`Slave`: Replica node</li></ul>
     */
    public $Role;

    /**
     * @param string $InstanceId Instance ID
     * @param string $BeginTime The start time
     * @param string $EndTime The end time
     * @param integer $MinQueryTime The average execution time threshold of slow query in ms.
     * @param integer $Limit Number of slow queries displayed per page. Default value: `20`.
     * @param integer $Offset Slow query offset, which is an integral multiple of `Limit`.
     * @param string $Role Node role. <ul><li>`Master`: Master node</li><li>`Slave`: Replica node</li></ul>
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
