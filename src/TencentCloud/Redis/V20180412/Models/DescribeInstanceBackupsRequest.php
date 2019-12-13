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
 * @method string getInstanceId() 获取ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
 * @method void setInstanceId(string $InstanceId) 设置ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
 * @method integer getLimit() 获取Instance list size. Default value: 20
 * @method void setLimit(integer $Limit) 设置Instance list size. Default value: 20
 * @method integer getOffset() 获取Offset, which is an integral multiple of `Limit`
 * @method void setOffset(integer $Offset) 设置Offset, which is an integral multiple of `Limit`
 * @method string getBeginTime() 获取Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 16:46:34. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
 * @method void setBeginTime(string $BeginTime) 设置Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 16:46:34. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
 * @method string getEndTime() 获取End time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 19:09:26. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
 * @method void setEndTime(string $EndTime) 设置End time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 19:09:26. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
 * @method array getStatus() 获取1: backup in process; 2: backing up normally; 3: converting from backup to RDB file; 4: RDB conversion completed; -1: backup expired; -2: backup deleted.
 * @method void setStatus(array $Status) 设置1: backup in process; 2: backing up normally; 3: converting from backup to RDB file; 4: RDB conversion completed; -1: backup expired; -2: backup deleted.
 */

/**
 *DescribeInstanceBackups request structure.
 */
class DescribeInstanceBackupsRequest extends AbstractModel
{
    /**
     * @var string ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
     */
    public $InstanceId;

    /**
     * @var integer Instance list size. Default value: 20
     */
    public $Limit;

    /**
     * @var integer Offset, which is an integral multiple of `Limit`
     */
    public $Offset;

    /**
     * @var string Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 16:46:34. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
     */
    public $BeginTime;

    /**
     * @var string End time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 19:09:26. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
     */
    public $EndTime;

    /**
     * @var array 1: backup in process; 2: backing up normally; 3: converting from backup to RDB file; 4: RDB conversion completed; -1: backup expired; -2: backup deleted.
     */
    public $Status;
    /**
     * @param string $InstanceId ID of the instance to be operated on, which can be obtained through the `InstanceId` field in the return value of the DescribeInstance API.
     * @param integer $Limit Instance list size. Default value: 20
     * @param integer $Offset Offset, which is an integral multiple of `Limit`
     * @param string $BeginTime Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 16:46:34. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
     * @param string $EndTime End time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-02-08 19:09:26. This parameter is used to query the list of instance backups started during the [beginTime, endTime] range.
     * @param array $Status 1: backup in process; 2: backing up normally; 3: converting from backup to RDB file; 4: RDB conversion completed; -1: backup expired; -2: backup deleted.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
    }
}
