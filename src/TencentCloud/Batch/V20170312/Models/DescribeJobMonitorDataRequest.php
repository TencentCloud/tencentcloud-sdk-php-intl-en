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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobMonitorData request structure.
 *
 * @method string getJobId() Obtain Job ID; see JobId in the job list (https://www.tencentcloud.com/document/product/599/15909?from_cn_redirect=1).
 * @method void setJobId(string $JobId) Set Job ID; see JobId in the job list (https://www.tencentcloud.com/document/product/599/15909?from_cn_redirect=1).
 * @method string getTaskName() Obtain Name of the job Task. See [job details](https://www.tencentcloud.com/document/product/599/15904?from_cn_redirect=1).
 * @method void setTaskName(string $TaskName) Set Name of the job Task. See [job details](https://www.tencentcloud.com/document/product/599/15904?from_cn_redirect=1).
 * @method integer getTaskInstanceIndex() Obtain Serial number of the task instance. For details, see [Task Detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1).
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) Set Serial number of the task instance. For details, see [Task Detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1).
 * @method string getMetricName() Obtain Supported metrics; Metrics to be queried for the task currently supported.

-CpuUsage: cpu usage, unit: %
-MemUsage: Memory usage, measurement unit: %
-LanOuttraffic: Private network outbound bandwidth, measurement unit: Bytes/s
-LanIntraffic: Private network inbound bandwidth, unit: Bytes/s
-MaxDiskUsage: Highest disk utilization among all disks. Measurement unit: %
-TargetDiskUsage: Specify disk utilization, unit: %; use in conjunction with the Dimensions parameter.
 * @method void setMetricName(string $MetricName) Set Supported metrics; Metrics to be queried for the task currently supported.

-CpuUsage: cpu usage, unit: %
-MemUsage: Memory usage, measurement unit: %
-LanOuttraffic: Private network outbound bandwidth, measurement unit: Bytes/s
-LanIntraffic: Private network inbound bandwidth, unit: Bytes/s
-MaxDiskUsage: Highest disk utilization among all disks. Measurement unit: %
-TargetDiskUsage: Specify disk utilization, unit: %; use in conjunction with the Dimensions parameter.
 * @method string getStartTime() Obtain Query start time of the task instance. If the query start time is not passed in or the incoming time is less than the instance creation time (see task detail (https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for instance creation time), the query time will automatically be adjusted to the instance creation time. The passed-in time format supports only the zero time zone format.
 * @method void setStartTime(string $StartTime) Set Query start time of the task instance. If the query start time is not passed in or the incoming time is less than the instance creation time (see task detail (https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for instance creation time), the query time will automatically be adjusted to the instance creation time. The passed-in time format supports only the zero time zone format.
 * @method string getEndTime() Obtain Query the termination time of the task instance. If the query end time is not passed in or the passed-in time is larger than the termination time of the task instance (see [task detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for the termination time of the task instance), and the task instance has already ended, the query end time will be automatically adjusted to the termination time of the task instance. If the task instance has not ended, the query end time will be automatically adjusted to the current time. The input time format supports only the zero time zone format.
 * @method void setEndTime(string $EndTime) Set Query the termination time of the task instance. If the query end time is not passed in or the passed-in time is larger than the termination time of the task instance (see [task detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for the termination time of the task instance), and the task instance has already ended, the query end time will be automatically adjusted to the termination time of the task instance. If the task instance has not ended, the query end time will be automatically adjusted to the current time. The input time format supports only the zero time zone format.
 * @method array getDimensions() Obtain Query metrics extension parameter; currently only support TargetDiskUsage.

- TargetDiskUsage
-Supported query dimensions include diskname. The dimension value is the disk mount name, such as vdb. If this parameter is not provided, the default query is disk utilization of vdb.
Sample: [{"Name":"diskname", "Value":"vdb"}]
 * @method void setDimensions(array $Dimensions) Set Query metrics extension parameter; currently only support TargetDiskUsage.

- TargetDiskUsage
-Supported query dimensions include diskname. The dimension value is the disk mount name, such as vdb. If this parameter is not provided, the default query is disk utilization of vdb.
Sample: [{"Name":"diskname", "Value":"vdb"}]
 */
class DescribeJobMonitorDataRequest extends AbstractModel
{
    /**
     * @var string Job ID; see JobId in the job list (https://www.tencentcloud.com/document/product/599/15909?from_cn_redirect=1).
     */
    public $JobId;

    /**
     * @var string Name of the job Task. See [job details](https://www.tencentcloud.com/document/product/599/15904?from_cn_redirect=1).
     */
    public $TaskName;

    /**
     * @var integer Serial number of the task instance. For details, see [Task Detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1).
     */
    public $TaskInstanceIndex;

    /**
     * @var string Supported metrics; Metrics to be queried for the task currently supported.

-CpuUsage: cpu usage, unit: %
-MemUsage: Memory usage, measurement unit: %
-LanOuttraffic: Private network outbound bandwidth, measurement unit: Bytes/s
-LanIntraffic: Private network inbound bandwidth, unit: Bytes/s
-MaxDiskUsage: Highest disk utilization among all disks. Measurement unit: %
-TargetDiskUsage: Specify disk utilization, unit: %; use in conjunction with the Dimensions parameter.
     */
    public $MetricName;

    /**
     * @var string Query start time of the task instance. If the query start time is not passed in or the incoming time is less than the instance creation time (see task detail (https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for instance creation time), the query time will automatically be adjusted to the instance creation time. The passed-in time format supports only the zero time zone format.
     */
    public $StartTime;

    /**
     * @var string Query the termination time of the task instance. If the query end time is not passed in or the passed-in time is larger than the termination time of the task instance (see [task detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for the termination time of the task instance), and the task instance has already ended, the query end time will be automatically adjusted to the termination time of the task instance. If the task instance has not ended, the query end time will be automatically adjusted to the current time. The input time format supports only the zero time zone format.
     */
    public $EndTime;

    /**
     * @var array Query metrics extension parameter; currently only support TargetDiskUsage.

- TargetDiskUsage
-Supported query dimensions include diskname. The dimension value is the disk mount name, such as vdb. If this parameter is not provided, the default query is disk utilization of vdb.
Sample: [{"Name":"diskname", "Value":"vdb"}]
     */
    public $Dimensions;

    /**
     * @param string $JobId Job ID; see JobId in the job list (https://www.tencentcloud.com/document/product/599/15909?from_cn_redirect=1).
     * @param string $TaskName Name of the job Task. See [job details](https://www.tencentcloud.com/document/product/599/15904?from_cn_redirect=1).
     * @param integer $TaskInstanceIndex Serial number of the task instance. For details, see [Task Detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1).
     * @param string $MetricName Supported metrics; Metrics to be queried for the task currently supported.

-CpuUsage: cpu usage, unit: %
-MemUsage: Memory usage, measurement unit: %
-LanOuttraffic: Private network outbound bandwidth, measurement unit: Bytes/s
-LanIntraffic: Private network inbound bandwidth, unit: Bytes/s
-MaxDiskUsage: Highest disk utilization among all disks. Measurement unit: %
-TargetDiskUsage: Specify disk utilization, unit: %; use in conjunction with the Dimensions parameter.
     * @param string $StartTime Query start time of the task instance. If the query start time is not passed in or the incoming time is less than the instance creation time (see task detail (https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for instance creation time), the query time will automatically be adjusted to the instance creation time. The passed-in time format supports only the zero time zone format.
     * @param string $EndTime Query the termination time of the task instance. If the query end time is not passed in or the passed-in time is larger than the termination time of the task instance (see [task detail](https://www.tencentcloud.com/document/product/599/15905?from_cn_redirect=1) for the termination time of the task instance), and the task instance has already ended, the query end time will be automatically adjusted to the termination time of the task instance. If the task instance has not ended, the query end time will be automatically adjusted to the current time. The input time format supports only the zero time zone format.
     * @param array $Dimensions Query metrics extension parameter; currently only support TargetDiskUsage.

- TargetDiskUsage
-Supported query dimensions include diskname. The dimension value is the disk mount name, such as vdb. If this parameter is not provided, the default query is disk utilization of vdb.
Sample: [{"Name":"diskname", "Value":"vdb"}]
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new Dimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
