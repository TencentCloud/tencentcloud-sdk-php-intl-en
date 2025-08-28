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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupMonitor request structure.
 *
 * @method string getStartTime() Obtain Sets the start time for querying backup space usage details.
 * @method void setStartTime(string $StartTime) Set Sets the start time for querying backup space usage details.
 * @method string getEndTime() Obtain End time of backup space usage.
 * @method void setEndTime(string $EndTime) Set End time of backup space usage.
 * @method string getType() Obtain Backup trend query type. local - local backup; cross - cross-region backup.
 * @method void setType(string $Type) Set Backup trend query type. local - local backup; cross - cross-region backup.
 */
class DescribeBackupMonitorRequest extends AbstractModel
{
    /**
     * @var string Sets the start time for querying backup space usage details.
     */
    public $StartTime;

    /**
     * @var string End time of backup space usage.
     */
    public $EndTime;

    /**
     * @var string Backup trend query type. local - local backup; cross - cross-region backup.
     */
    public $Type;

    /**
     * @param string $StartTime Sets the start time for querying backup space usage details.
     * @param string $EndTime End time of backup space usage.
     * @param string $Type Backup trend query type. local - local backup; cross - cross-region backup.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
