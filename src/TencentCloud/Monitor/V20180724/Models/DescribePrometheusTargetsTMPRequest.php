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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusTargetsTMP request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getClusterType() Obtain Cluster type
 * @method void setClusterType(string $ClusterType) Set Cluster type
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getFilters() Obtain Filters.
You can filter by `RawJob`, `Job`, `ServiceMonitor`, `PodMonitor`, or `Health`.
`Health` contains three values: `up`, `down`, `unknown`.
 * @method void setFilters(array $Filters) Set Filters.
You can filter by `RawJob`, `Job`, `ServiceMonitor`, `PodMonitor`, or `Health`.
`Health` contains three values: `up`, `down`, `unknown`.
 */
class DescribePrometheusTargetsTMPRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Cluster type
     */
    public $ClusterType;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Filters.
You can filter by `RawJob`, `Job`, `ServiceMonitor`, `PodMonitor`, or `Health`.
`Health` contains three values: `up`, `down`, `unknown`.
     */
    public $Filters;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ClusterType Cluster type
     * @param string $ClusterId Cluster ID
     * @param array $Filters Filters.
You can filter by `RawJob`, `Job`, `ServiceMonitor`, `PodMonitor`, or `Health`.
`Health` contains three values: `up`, `down`, `unknown`.
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
