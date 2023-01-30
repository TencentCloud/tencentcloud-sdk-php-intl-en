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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input parameters for a cluster check task
 *
 * @method string getClusterId() Obtain ID of the specified cluster to be scanned
 * @method void setClusterId(string $ClusterId) Set ID of the specified cluster to be scanned
 * @method string getClusterRegion() Obtain Cluster region
 * @method void setClusterRegion(string $ClusterRegion) Set Cluster region
 * @method string getNodeIp() Obtain IP of the specified node to be scanned
 * @method void setNodeIp(string $NodeIp) Set IP of the specified node to be scanned
 * @method string getWorkloadName() Obtain Name of the specified workload to be scanned
 * @method void setWorkloadName(string $WorkloadName) Set Name of the specified workload to be scanned
 */
class ClusterCheckTaskItem extends AbstractModel
{
    /**
     * @var string ID of the specified cluster to be scanned
     */
    public $ClusterId;

    /**
     * @var string Cluster region
     */
    public $ClusterRegion;

    /**
     * @var string IP of the specified node to be scanned
     */
    public $NodeIp;

    /**
     * @var string Name of the specified workload to be scanned
     */
    public $WorkloadName;

    /**
     * @param string $ClusterId ID of the specified cluster to be scanned
     * @param string $ClusterRegion Cluster region
     * @param string $NodeIp IP of the specified node to be scanned
     * @param string $WorkloadName Name of the specified workload to be scanned
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }
    }
}
