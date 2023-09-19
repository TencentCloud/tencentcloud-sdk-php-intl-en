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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTKEEdgeClusterCredential response structure.
 *
 * @method array getAddresses() Obtain Access address of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddresses(array $Addresses) Set Access address of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method ClusterCredential getCredential() Obtain Cluster authentication information
 * @method void setCredential(ClusterCredential $Credential) Set Cluster authentication information
 * @method EdgeClusterPublicLB getPublicLB() Obtain Public network access information of the cluster
 * @method void setPublicLB(EdgeClusterPublicLB $PublicLB) Set Public network access information of the cluster
 * @method EdgeClusterInternalLB getInternalLB() Obtain Private network access information of the cluster
 * @method void setInternalLB(EdgeClusterInternalLB $InternalLB) Set Private network access information of the cluster
 * @method string getCoreDns() Obtain CoreDns deployment information of the cluster
 * @method void setCoreDns(string $CoreDns) Set CoreDns deployment information of the cluster
 * @method string getHealthRegion() Obtain Multi-region health check deployment information of the cluster
 * @method void setHealthRegion(string $HealthRegion) Set Multi-region health check deployment information of the cluster
 * @method string getHealth() Obtain Health check deployment information of the cluster
 * @method void setHealth(string $Health) Set Health check deployment information of the cluster
 * @method string getGridDaemon() Obtain Whether to deploy GridDaemon to support headless service
 * @method void setGridDaemon(string $GridDaemon) Set Whether to deploy GridDaemon to support headless service
 * @method string getUnitCluster() Obtain Access kins clusters over the public network
 * @method void setUnitCluster(string $UnitCluster) Set Access kins clusters over the public network
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTKEEdgeClusterCredentialResponse extends AbstractModel
{
    /**
     * @var array Access address of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Addresses;

    /**
     * @var ClusterCredential Cluster authentication information
     */
    public $Credential;

    /**
     * @var EdgeClusterPublicLB Public network access information of the cluster
     */
    public $PublicLB;

    /**
     * @var EdgeClusterInternalLB Private network access information of the cluster
     */
    public $InternalLB;

    /**
     * @var string CoreDns deployment information of the cluster
     */
    public $CoreDns;

    /**
     * @var string Multi-region health check deployment information of the cluster
     */
    public $HealthRegion;

    /**
     * @var string Health check deployment information of the cluster
     */
    public $Health;

    /**
     * @var string Whether to deploy GridDaemon to support headless service
     */
    public $GridDaemon;

    /**
     * @var string Access kins clusters over the public network
     */
    public $UnitCluster;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Addresses Access address of the cluster
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param ClusterCredential $Credential Cluster authentication information
     * @param EdgeClusterPublicLB $PublicLB Public network access information of the cluster
     * @param EdgeClusterInternalLB $InternalLB Private network access information of the cluster
     * @param string $CoreDns CoreDns deployment information of the cluster
     * @param string $HealthRegion Multi-region health check deployment information of the cluster
     * @param string $Health Health check deployment information of the cluster
     * @param string $GridDaemon Whether to deploy GridDaemon to support headless service
     * @param string $UnitCluster Access kins clusters over the public network
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
        if (array_key_exists("Addresses",$param) and $param["Addresses"] !== null) {
            $this->Addresses = [];
            foreach ($param["Addresses"] as $key => $value){
                $obj = new IPAddress();
                $obj->deserialize($value);
                array_push($this->Addresses, $obj);
            }
        }

        if (array_key_exists("Credential",$param) and $param["Credential"] !== null) {
            $this->Credential = new ClusterCredential();
            $this->Credential->deserialize($param["Credential"]);
        }

        if (array_key_exists("PublicLB",$param) and $param["PublicLB"] !== null) {
            $this->PublicLB = new EdgeClusterPublicLB();
            $this->PublicLB->deserialize($param["PublicLB"]);
        }

        if (array_key_exists("InternalLB",$param) and $param["InternalLB"] !== null) {
            $this->InternalLB = new EdgeClusterInternalLB();
            $this->InternalLB->deserialize($param["InternalLB"]);
        }

        if (array_key_exists("CoreDns",$param) and $param["CoreDns"] !== null) {
            $this->CoreDns = $param["CoreDns"];
        }

        if (array_key_exists("HealthRegion",$param) and $param["HealthRegion"] !== null) {
            $this->HealthRegion = $param["HealthRegion"];
        }

        if (array_key_exists("Health",$param) and $param["Health"] !== null) {
            $this->Health = $param["Health"];
        }

        if (array_key_exists("GridDaemon",$param) and $param["GridDaemon"] !== null) {
            $this->GridDaemon = $param["GridDaemon"];
        }

        if (array_key_exists("UnitCluster",$param) and $param["UnitCluster"] !== null) {
            $this->UnitCluster = $param["UnitCluster"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
