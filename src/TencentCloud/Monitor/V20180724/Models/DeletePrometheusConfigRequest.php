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
 * DeletePrometheusConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getClusterType() Obtain Cluster type
 * @method void setClusterType(string $ClusterType) Set Cluster type
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getServiceMonitors() Obtain List of names of the service monitors to be deleted
 * @method void setServiceMonitors(array $ServiceMonitors) Set List of names of the service monitors to be deleted
 * @method array getPodMonitors() Obtain List of names of the pod monitors to be deleted
 * @method void setPodMonitors(array $PodMonitors) Set List of names of the pod monitors to be deleted
 * @method array getRawJobs() Obtain List of names of the raw jobs to be deleted
 * @method void setRawJobs(array $RawJobs) Set List of names of the raw jobs to be deleted
 */
class DeletePrometheusConfigRequest extends AbstractModel
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
     * @var array List of names of the service monitors to be deleted
     */
    public $ServiceMonitors;

    /**
     * @var array List of names of the pod monitors to be deleted
     */
    public $PodMonitors;

    /**
     * @var array List of names of the raw jobs to be deleted
     */
    public $RawJobs;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ClusterType Cluster type
     * @param string $ClusterId Cluster ID
     * @param array $ServiceMonitors List of names of the service monitors to be deleted
     * @param array $PodMonitors List of names of the pod monitors to be deleted
     * @param array $RawJobs List of names of the raw jobs to be deleted
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

        if (array_key_exists("ServiceMonitors",$param) and $param["ServiceMonitors"] !== null) {
            $this->ServiceMonitors = $param["ServiceMonitors"];
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = $param["PodMonitors"];
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = $param["RawJobs"];
        }
    }
}
