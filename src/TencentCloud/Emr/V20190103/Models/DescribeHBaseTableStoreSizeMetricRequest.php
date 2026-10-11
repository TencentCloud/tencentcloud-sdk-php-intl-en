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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHBaseTableStoreSizeMetric request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method string getTableName() Obtain HBase table name.
 * @method void setTableName(string $TableName) Set HBase table name.
 * @method string getRegionServer() Obtain HBase RegionServer service.
 * @method void setRegionServer(string $RegionServer) Set HBase RegionServer service.
 * @method string getDownsample() Obtain Specifies the data monitoring granularity to be obtained.
 * @method void setDownsample(string $Downsample) Set Specifies the data monitoring granularity to be obtained.
 * @method integer getStartTime() Obtain Specifies the start timestamp of the monitoring data to be queried.
 * @method void setStartTime(integer $StartTime) Set Specifies the start timestamp of the monitoring data to be queried.
 * @method integer getEndTime() Obtain Specifies the end timestamp of the monitoring data to be queried.
 * @method void setEndTime(integer $EndTime) Set Specifies the end timestamp of the monitoring data to be queried.
 */
class DescribeHBaseTableStoreSizeMetricRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var string HBase table name.
     */
    public $TableName;

    /**
     * @var string HBase RegionServer service.
     */
    public $RegionServer;

    /**
     * @var string Specifies the data monitoring granularity to be obtained.
     */
    public $Downsample;

    /**
     * @var integer Specifies the start timestamp of the monitoring data to be queried.
     */
    public $StartTime;

    /**
     * @var integer Specifies the end timestamp of the monitoring data to be queried.
     */
    public $EndTime;

    /**
     * @param string $InstanceId Cluster ID.
     * @param string $TableName HBase table name.
     * @param string $RegionServer HBase RegionServer service.
     * @param string $Downsample Specifies the data monitoring granularity to be obtained.
     * @param integer $StartTime Specifies the start timestamp of the monitoring data to be queried.
     * @param integer $EndTime Specifies the end timestamp of the monitoring data to be queried.
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RegionServer",$param) and $param["RegionServer"] !== null) {
            $this->RegionServer = $param["RegionServer"];
        }

        if (array_key_exists("Downsample",$param) and $param["Downsample"] !== null) {
            $this->Downsample = $param["Downsample"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
