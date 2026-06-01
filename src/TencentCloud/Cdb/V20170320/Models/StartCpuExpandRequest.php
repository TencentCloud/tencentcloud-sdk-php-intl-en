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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartCpuExpand request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getType() Obtain Scale-out type supports auto-scaling and custom scaling.
Description: 1. auto means automatic scaling. 2. manual means custom scaling with immediate effect. 3. timeInterval means custom scaling by time. 4. period means custom scaling by cycle.
 * @method void setType(string $Type) Set Scale-out type supports auto-scaling and custom scaling.
Description: 1. auto means automatic scaling. 2. manual means custom scaling with immediate effect. 3. timeInterval means custom scaling by time. 4. period means custom scaling by cycle.
 * @method integer getExpandCpu() Obtain Number of CPU cores for scale-out during customization.
Description: 1. This parameter is required when Type is set to manual, timeInterval, or period. 2. The maximum number of CPU cores to increase is the current instance's CPU core number. For example, an 8-core 16GB instance can scale out up to 8 CPU cores, with a range of 1 - 8.
 * @method void setExpandCpu(integer $ExpandCpu) Set Number of CPU cores for scale-out during customization.
Description: 1. This parameter is required when Type is set to manual, timeInterval, or period. 2. The maximum number of CPU cores to increase is the current instance's CPU core number. For example, an 8-core 16GB instance can scale out up to 8 CPU cores, with a range of 1 - 8.
 * @method AutoStrategy getAutoStrategy() Obtain Automatic scale-out policy. This parameter is required when Type is set to auto.
 * @method void setAutoStrategy(AutoStrategy $AutoStrategy) Set Automatic scale-out policy. This parameter is required when Type is set to auto.
 * @method TimeIntervalStrategy getTimeIntervalStrategy() Obtain Scaling policy by time period.
Description: When Type is timeInterval, TimeIntervalStrategy is required.
 * @method void setTimeIntervalStrategy(TimeIntervalStrategy $TimeIntervalStrategy) Set Scaling policy by time period.
Description: When Type is timeInterval, TimeIntervalStrategy is required.
 * @method PeriodStrategy getPeriodStrategy() Obtain Scale by cycle.
Description: When Type is period, PeriodStrategy is required.
 * @method void setPeriodStrategy(PeriodStrategy $PeriodStrategy) Set Scale by cycle.
Description: When Type is period, PeriodStrategy is required.
 */
class StartCpuExpandRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Scale-out type supports auto-scaling and custom scaling.
Description: 1. auto means automatic scaling. 2. manual means custom scaling with immediate effect. 3. timeInterval means custom scaling by time. 4. period means custom scaling by cycle.
     */
    public $Type;

    /**
     * @var integer Number of CPU cores for scale-out during customization.
Description: 1. This parameter is required when Type is set to manual, timeInterval, or period. 2. The maximum number of CPU cores to increase is the current instance's CPU core number. For example, an 8-core 16GB instance can scale out up to 8 CPU cores, with a range of 1 - 8.
     */
    public $ExpandCpu;

    /**
     * @var AutoStrategy Automatic scale-out policy. This parameter is required when Type is set to auto.
     */
    public $AutoStrategy;

    /**
     * @var TimeIntervalStrategy Scaling policy by time period.
Description: When Type is timeInterval, TimeIntervalStrategy is required.
     */
    public $TimeIntervalStrategy;

    /**
     * @var PeriodStrategy Scale by cycle.
Description: When Type is period, PeriodStrategy is required.
     */
    public $PeriodStrategy;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $Type Scale-out type supports auto-scaling and custom scaling.
Description: 1. auto means automatic scaling. 2. manual means custom scaling with immediate effect. 3. timeInterval means custom scaling by time. 4. period means custom scaling by cycle.
     * @param integer $ExpandCpu Number of CPU cores for scale-out during customization.
Description: 1. This parameter is required when Type is set to manual, timeInterval, or period. 2. The maximum number of CPU cores to increase is the current instance's CPU core number. For example, an 8-core 16GB instance can scale out up to 8 CPU cores, with a range of 1 - 8.
     * @param AutoStrategy $AutoStrategy Automatic scale-out policy. This parameter is required when Type is set to auto.
     * @param TimeIntervalStrategy $TimeIntervalStrategy Scaling policy by time period.
Description: When Type is timeInterval, TimeIntervalStrategy is required.
     * @param PeriodStrategy $PeriodStrategy Scale by cycle.
Description: When Type is period, PeriodStrategy is required.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ExpandCpu",$param) and $param["ExpandCpu"] !== null) {
            $this->ExpandCpu = $param["ExpandCpu"];
        }

        if (array_key_exists("AutoStrategy",$param) and $param["AutoStrategy"] !== null) {
            $this->AutoStrategy = new AutoStrategy();
            $this->AutoStrategy->deserialize($param["AutoStrategy"]);
        }

        if (array_key_exists("TimeIntervalStrategy",$param) and $param["TimeIntervalStrategy"] !== null) {
            $this->TimeIntervalStrategy = new TimeIntervalStrategy();
            $this->TimeIntervalStrategy->deserialize($param["TimeIntervalStrategy"]);
        }

        if (array_key_exists("PeriodStrategy",$param) and $param["PeriodStrategy"] !== null) {
            $this->PeriodStrategy = new PeriodStrategy();
            $this->PeriodStrategy->deserialize($param["PeriodStrategy"]);
        }
    }
}
