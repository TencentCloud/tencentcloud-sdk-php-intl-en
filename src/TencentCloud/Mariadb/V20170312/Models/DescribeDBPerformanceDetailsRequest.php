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
 * DescribeDBPerformanceDetails request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of `tdsql-ow728lmc`.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `tdsql-ow728lmc`.
 * @method string getStartTime() Obtain Start date in the format of `yyyy-mm-dd`
 * @method void setStartTime(string $StartTime) Set Start date in the format of `yyyy-mm-dd`
 * @method string getEndTime() Obtain End date in the format of `yyyy-mm-dd`
 * @method void setEndTime(string $EndTime) Set End date in the format of `yyyy-mm-dd`
 * @method string getMetricName() Obtain Name of pulled metric. Valid values: long_query, select_total, update_total, insert_total, delete_total, mem_hit_rate, disk_iops, conn_active, is_master_switched, slave_delay
 * @method void setMetricName(string $MetricName) Set Name of pulled metric. Valid values: long_query, select_total, update_total, insert_total, delete_total, mem_hit_rate, disk_iops, conn_active, is_master_switched, slave_delay
 */
class DescribeDBPerformanceDetailsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of `tdsql-ow728lmc`.
     */
    public $InstanceId;

    /**
     * @var string Start date in the format of `yyyy-mm-dd`
     */
    public $StartTime;

    /**
     * @var string End date in the format of `yyyy-mm-dd`
     */
    public $EndTime;

    /**
     * @var string Name of pulled metric. Valid values: long_query, select_total, update_total, insert_total, delete_total, mem_hit_rate, disk_iops, conn_active, is_master_switched, slave_delay
     */
    public $MetricName;

    /**
     * @param string $InstanceId Instance ID in the format of `tdsql-ow728lmc`.
     * @param string $StartTime Start date in the format of `yyyy-mm-dd`
     * @param string $EndTime End date in the format of `yyyy-mm-dd`
     * @param string $MetricName Name of pulled metric. Valid values: long_query, select_total, update_total, insert_total, delete_total, mem_hit_rate, disk_iops, conn_active, is_master_switched, slave_delay
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }
    }
}
