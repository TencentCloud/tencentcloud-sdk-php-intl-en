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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TKE resource metadata.
 *
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getPodName() Obtain pod name
 * @method void setPodName(string $PodName) Set pod name
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getDeployment() Obtain workload
 * @method void setDeployment(string $Deployment) Set workload
 * @method string getPodIP() Obtain pod ip
 * @method void setPodIP(string $PodIP) Set pod ip
 * @method string getNodeIP() Obtain node ip
 * @method void setNodeIP(string $NodeIP) Set node ip
 */
class TkeMeta extends AbstractModel
{
    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string pod name
     */
    public $PodName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string workload
     */
    public $Deployment;

    /**
     * @var string pod ip
     */
    public $PodIP;

    /**
     * @var string node ip
     */
    public $NodeIP;

    /**
     * @param string $Region Region.
     * @param string $ClusterID Cluster ID
     * @param string $PodName pod name
     * @param string $Namespace Namespace
     * @param string $Deployment workload
     * @param string $PodIP pod ip
     * @param string $NodeIP node ip
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Deployment",$param) and $param["Deployment"] !== null) {
            $this->Deployment = $param["Deployment"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }
    }
}
