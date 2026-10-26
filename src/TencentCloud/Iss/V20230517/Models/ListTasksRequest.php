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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTasks request structure.
 *
 * @method integer getPageNumber() Obtain Page number, which is 1 by default.
 * @method void setPageNumber(integer $PageNumber) Set Page number, which is 1 by default.
 * @method integer getPageSize() Obtain Number of items per page. The default value is 20.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. The default value is 20.
 * @method string getOperation() Obtain Default: do not filter by this field. Otherwise, filter by device operation type. Current values: BatchDeleteUserDevice, BatchDisableDevice, BatchEnableDevice.
BatchUpgradeDevice,
BatchResetDevice,
BatchRebootDevice,
BatchRefreshDeviceChannel
 * @method void setOperation(string $Operation) Set Default: do not filter by this field. Otherwise, filter by device operation type. Current values: BatchDeleteUserDevice, BatchDisableDevice, BatchEnableDevice.
BatchUpgradeDevice,
BatchResetDevice,
BatchRebootDevice,
BatchRefreshDeviceChannel
 * @method integer getStatus() Obtain By default, filtering is not based on this field. Otherwise, filter by task status. Status code: 1 - Pending, 2 - Executing, 3 - Completed, 4 - Cancelled.
 * @method void setStatus(integer $Status) Set By default, filtering is not based on this field. Otherwise, filter by task status. Status code: 1 - Pending, 2 - Executing, 3 - Completed, 4 - Cancelled.
 * @method integer getBeginTime() Obtain Start time.
 * @method void setBeginTime(integer $BeginTime) Set Start time.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var integer Page number, which is 1 by default.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. The default value is 20.
     */
    public $PageSize;

    /**
     * @var string Default: do not filter by this field. Otherwise, filter by device operation type. Current values: BatchDeleteUserDevice, BatchDisableDevice, BatchEnableDevice.
BatchUpgradeDevice,
BatchResetDevice,
BatchRebootDevice,
BatchRefreshDeviceChannel
     */
    public $Operation;

    /**
     * @var integer By default, filtering is not based on this field. Otherwise, filter by task status. Status code: 1 - Pending, 2 - Executing, 3 - Completed, 4 - Cancelled.
     */
    public $Status;

    /**
     * @var integer Start time.
     */
    public $BeginTime;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @param integer $PageNumber Page number, which is 1 by default.
     * @param integer $PageSize Number of items per page. The default value is 20.
     * @param string $Operation Default: do not filter by this field. Otherwise, filter by device operation type. Current values: BatchDeleteUserDevice, BatchDisableDevice, BatchEnableDevice.
BatchUpgradeDevice,
BatchResetDevice,
BatchRebootDevice,
BatchRefreshDeviceChannel
     * @param integer $Status By default, filtering is not based on this field. Otherwise, filter by task status. Status code: 1 - Pending, 2 - Executing, 3 - Completed, 4 - Cancelled.
     * @param integer $BeginTime Start time.
     * @param integer $EndTime End time.
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
