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
 * DescribeInstanceBackups request structure.
 *
 * @method integer getLimit() Obtain Number of backups returned per page. Default value: `20`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of backups returned per page. Default value: `20`. Maximum value: `100`.
 * @method integer getOffset() Obtain Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
 * @method void setOffset(integer $Offset) Set Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
 * @method string getInstanceId() Obtain ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the `DescribeInstance` API.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the `DescribeInstance` API.
 * @method string getBeginTime() Obtain Start time for a query, for example, in the format of 2017-02-08 16:46:34, with a maximum query span of 30 days. You can query the list of instances backed up within the [beginTime, endTime] period.
 * @method void setBeginTime(string $BeginTime) Set Start time for a query, for example, in the format of 2017-02-08 16:46:34, with a maximum query span of 30 days. You can query the list of instances backed up within the [beginTime, endTime] period.
 * @method string getEndTime() Obtain End time for a query, for example, in the format of 2017-02-08 19:09:26, with a maximum query span of 30 days. You can query the list of instances backed up within the [BeginTime, EndTime] period.
 * @method void setEndTime(string $EndTime) Set End time for a query, for example, in the format of 2017-02-08 19:09:26, with a maximum query span of 30 days. You can query the list of instances backed up within the [BeginTime, EndTime] period.
 * @method array getStatus() Obtain Backup task status:
`1`: The backup is in the process.
`2`: The backup is normal.
`3`: The backup is being converted to an RDB file.
`4`: Conversion to RDB has been completed.
`-1`: The backup expired.
`-2`: The backup has been deleted.
 * @method void setStatus(array $Status) Set Backup task status:
`1`: The backup is in the process.
`2`: The backup is normal.
`3`: The backup is being converted to an RDB file.
`4`: Conversion to RDB has been completed.
`-1`: The backup expired.
`-2`: The backup has been deleted.
 * @method string getInstanceName() Obtain Instance name, which can be fuzzily searched.
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can be fuzzily searched.
 */
class DescribeInstanceBackupsRequest extends AbstractModel
{
    /**
     * @var integer Number of backups returned per page. Default value: `20`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
     */
    public $Offset;

    /**
     * @var string ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the `DescribeInstance` API.
     */
    public $InstanceId;

    /**
     * @var string Start time for a query, for example, in the format of 2017-02-08 16:46:34, with a maximum query span of 30 days. You can query the list of instances backed up within the [beginTime, endTime] period.
     */
    public $BeginTime;

    /**
     * @var string End time for a query, for example, in the format of 2017-02-08 19:09:26, with a maximum query span of 30 days. You can query the list of instances backed up within the [BeginTime, EndTime] period.
     */
    public $EndTime;

    /**
     * @var array Backup task status:
`1`: The backup is in the process.
`2`: The backup is normal.
`3`: The backup is being converted to an RDB file.
`4`: Conversion to RDB has been completed.
`-1`: The backup expired.
`-2`: The backup has been deleted.
     */
    public $Status;

    /**
     * @var string Instance name, which can be fuzzily searched.
     */
    public $InstanceName;

    /**
     * @param integer $Limit Number of backups returned per page. Default value: `20`. Maximum value: `100`.
     * @param integer $Offset Pagination offset, which is an integral multiple of `Limit`. `offset` = `limit` * (page number - 1).
     * @param string $InstanceId ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the `DescribeInstance` API.
     * @param string $BeginTime Start time for a query, for example, in the format of 2017-02-08 16:46:34, with a maximum query span of 30 days. You can query the list of instances backed up within the [beginTime, endTime] period.
     * @param string $EndTime End time for a query, for example, in the format of 2017-02-08 19:09:26, with a maximum query span of 30 days. You can query the list of instances backed up within the [BeginTime, EndTime] period.
     * @param array $Status Backup task status:
`1`: The backup is in the process.
`2`: The backup is normal.
`3`: The backup is being converted to an RDB file.
`4`: Conversion to RDB has been completed.
`-1`: The backup expired.
`-2`: The backup has been deleted.
     * @param string $InstanceName Instance name, which can be fuzzily searched.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
