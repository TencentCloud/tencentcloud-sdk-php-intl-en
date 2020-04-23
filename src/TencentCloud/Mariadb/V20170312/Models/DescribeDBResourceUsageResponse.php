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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBResourceUsage response structure.
 *
 * @method MonitorData getBinlogDiskAvailable() Obtain Available capacity of binlog disk in GB
 * @method void setBinlogDiskAvailable(MonitorData $BinlogDiskAvailable) Set Available capacity of binlog disk in GB
 * @method MonitorData getDataDiskAvailable() Obtain Available disk capacity in GB
 * @method void setDataDiskAvailable(MonitorData $DataDiskAvailable) Set Available disk capacity in GB
 * @method MonitorData getCpuUsageRate() Obtain CPU utilization
 * @method void setCpuUsageRate(MonitorData $CpuUsageRate) Set CPU utilization
 * @method MonitorData getMemAvailable() Obtain Available memory size in GB
 * @method void setMemAvailable(MonitorData $MemAvailable) Set Available memory size in GB
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBResourceUsageResponse extends AbstractModel
{
    /**
     * @var MonitorData Available capacity of binlog disk in GB
     */
    public $BinlogDiskAvailable;

    /**
     * @var MonitorData Available disk capacity in GB
     */
    public $DataDiskAvailable;

    /**
     * @var MonitorData CPU utilization
     */
    public $CpuUsageRate;

    /**
     * @var MonitorData Available memory size in GB
     */
    public $MemAvailable;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param MonitorData $BinlogDiskAvailable Available capacity of binlog disk in GB
     * @param MonitorData $DataDiskAvailable Available disk capacity in GB
     * @param MonitorData $CpuUsageRate CPU utilization
     * @param MonitorData $MemAvailable Available memory size in GB
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("BinlogDiskAvailable",$param) and $param["BinlogDiskAvailable"] !== null) {
            $this->BinlogDiskAvailable = new MonitorData();
            $this->BinlogDiskAvailable->deserialize($param["BinlogDiskAvailable"]);
        }

        if (array_key_exists("DataDiskAvailable",$param) and $param["DataDiskAvailable"] !== null) {
            $this->DataDiskAvailable = new MonitorData();
            $this->DataDiskAvailable->deserialize($param["DataDiskAvailable"]);
        }

        if (array_key_exists("CpuUsageRate",$param) and $param["CpuUsageRate"] !== null) {
            $this->CpuUsageRate = new MonitorData();
            $this->CpuUsageRate->deserialize($param["CpuUsageRate"]);
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = new MonitorData();
            $this->MemAvailable->deserialize($param["MemAvailable"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
