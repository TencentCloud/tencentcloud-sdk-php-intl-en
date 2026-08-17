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
 * DescribeInstanceBackups request structure.
 *
 * @method integer getLimit() Obtain <p>List size of output backup per page. Default size is 20, maximum value is 100.</p>
 * @method void setLimit(integer $Limit) Set <p>List size of output backup per page. Default size is 20, maximum value is 100.</p>
 * @method integer getOffset() Obtain <p>Pagination offset, integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset, integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
 * @method string getInstanceId() Obtain <p>Instance ID to be operated. You can get it from the InstanceId in the return value from the DescribeInstance API.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID to be operated. You can get it from the InstanceId in the return value from the DescribeInstance API.</p>
 * @method string getBeginTime() Obtain <p>Start time, for example, in the format of 2017-02-08 16:46:34. Query the backup list of instances that started backup during the [beginTime, endTime] period, with a maximum query span of 30 days.</p>
 * @method void setBeginTime(string $BeginTime) Set <p>Start time, for example, in the format of 2017-02-08 16:46:34. Query the backup list of instances that started backup during the [beginTime, endTime] period, with a maximum query span of 30 days.</p>
 * @method string getEndTime() Obtain <p>End time, in the format of 2017-02-08 19:09:26. Query the backup list of instances that started backup within the period of [beginTime, endTime]. The maximum query time span is 30 days.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time, in the format of 2017-02-08 19:09:26. Query the backup list of instances that started backup within the period of [beginTime, endTime]. The maximum query time span is 30 days.</p>
 * @method array getStatus() Obtain <p>Backup task status:<br>1: Backup is in progress.<br>2: Backup is normal.<br>3: Backup is switching to RDB file processing.<br>4: RDB switch completed.<br>-1: Backup has expired.<br>-2: Backup has been deleted.</p>
 * @method void setStatus(array $Status) Set <p>Backup task status:<br>1: Backup is in progress.<br>2: Backup is normal.<br>3: Backup is switching to RDB file processing.<br>4: RDB switch completed.<br>-1: Backup has expired.<br>-2: Backup has been deleted.</p>
 * @method string getInstanceName() Obtain <p>Instance name, supports name fuzzy search based on instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name, supports name fuzzy search based on instance name.</p>
 */
class DescribeInstanceBackupsRequest extends AbstractModel
{
    /**
     * @var integer <p>List size of output backup per page. Default size is 20, maximum value is 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset, integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
     */
    public $Offset;

    /**
     * @var string <p>Instance ID to be operated. You can get it from the InstanceId in the return value from the DescribeInstance API.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Start time, for example, in the format of 2017-02-08 16:46:34. Query the backup list of instances that started backup during the [beginTime, endTime] period, with a maximum query span of 30 days.</p>
     */
    public $BeginTime;

    /**
     * @var string <p>End time, in the format of 2017-02-08 19:09:26. Query the backup list of instances that started backup within the period of [beginTime, endTime]. The maximum query time span is 30 days.</p>
     */
    public $EndTime;

    /**
     * @var array <p>Backup task status:<br>1: Backup is in progress.<br>2: Backup is normal.<br>3: Backup is switching to RDB file processing.<br>4: RDB switch completed.<br>-1: Backup has expired.<br>-2: Backup has been deleted.</p>
     */
    public $Status;

    /**
     * @var string <p>Instance name, supports name fuzzy search based on instance name.</p>
     */
    public $InstanceName;

    /**
     * @param integer $Limit <p>List size of output backup per page. Default size is 20, maximum value is 100.</p>
     * @param integer $Offset <p>Pagination offset, integer multiple of Limit. Calculation formula: offset=limit*(page number-1).</p>
     * @param string $InstanceId <p>Instance ID to be operated. You can get it from the InstanceId in the return value from the DescribeInstance API.</p>
     * @param string $BeginTime <p>Start time, for example, in the format of 2017-02-08 16:46:34. Query the backup list of instances that started backup during the [beginTime, endTime] period, with a maximum query span of 30 days.</p>
     * @param string $EndTime <p>End time, in the format of 2017-02-08 19:09:26. Query the backup list of instances that started backup within the period of [beginTime, endTime]. The maximum query time span is 30 days.</p>
     * @param array $Status <p>Backup task status:<br>1: Backup is in progress.<br>2: Backup is normal.<br>3: Backup is switching to RDB file processing.<br>4: RDB switch completed.<br>-1: Backup has expired.<br>-2: Backup has been deleted.</p>
     * @param string $InstanceName <p>Instance name, supports name fuzzy search based on instance name.</p>
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
