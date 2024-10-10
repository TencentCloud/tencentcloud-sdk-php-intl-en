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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Upstream details
 *
 * @method string getUpstreamId() Obtain Unique upstream ID
 * @method void setUpstreamId(string $UpstreamId) Set Unique upstream ID
 * @method string getUpstreamName() Obtain Upstream name
 * @method void setUpstreamName(string $UpstreamName) Set Upstream name
 * @method string getUpstreamDescription() Obtain Upstream description
 * @method void setUpstreamDescription(string $UpstreamDescription) Set Upstream description
 * @method string getScheme() Obtain Backend protocol. Valid values: `HTTP`, `HTTPS`
 * @method void setScheme(string $Scheme) Set Backend protocol. Valid values: `HTTP`, `HTTPS`
 * @method string getAlgorithm() Obtain Load balancing algorithm. Valid value: `ROUND_ROBIN`
 * @method void setAlgorithm(string $Algorithm) Set Load balancing algorithm. Valid value: `ROUND_ROBIN`
 * @method string getUniqVpcId() Obtain Unique VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID
 * @method integer getRetries() Obtain Number of retry attempts
 * @method void setRetries(integer $Retries) Set Number of retry attempts
 * @method array getNodes() Obtain Backend nodes
 * @method void setNodes(array $Nodes) Set Backend nodes
 * @method string getCreatedTime() Obtain Creation time
 * @method void setCreatedTime(string $CreatedTime) Set Creation time
 * @method UpstreamHealthChecker getHealthChecker() Obtain Health check configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthChecker(UpstreamHealthChecker $HealthChecker) Set Health check configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpstreamType() Obtain Upstream type. Valid values: `IP_PORT`, `K8S`
 * @method void setUpstreamType(string $UpstreamType) Set Upstream type. Valid values: `IP_PORT`, `K8S`
 * @method array getK8sServices() Obtain Configuration of TKE service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setK8sServices(array $K8sServices) Set Configuration of TKE service
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpstreamHost() Obtain The Host header that the gateway forwards to the upstream
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamHost(string $UpstreamHost) Set The Host header that the gateway forwards to the upstream
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ModifyUpstreamResultInfo extends AbstractModel
{
    /**
     * @var string Unique upstream ID
     */
    public $UpstreamId;

    /**
     * @var string Upstream name
     */
    public $UpstreamName;

    /**
     * @var string Upstream description
     */
    public $UpstreamDescription;

    /**
     * @var string Backend protocol. Valid values: `HTTP`, `HTTPS`
     */
    public $Scheme;

    /**
     * @var string Load balancing algorithm. Valid value: `ROUND_ROBIN`
     */
    public $Algorithm;

    /**
     * @var string Unique VPC ID
     */
    public $UniqVpcId;

    /**
     * @var integer Number of retry attempts
     */
    public $Retries;

    /**
     * @var array Backend nodes
     */
    public $Nodes;

    /**
     * @var string Creation time
     */
    public $CreatedTime;

    /**
     * @var UpstreamHealthChecker Health check configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthChecker;

    /**
     * @var string Upstream type. Valid values: `IP_PORT`, `K8S`
     */
    public $UpstreamType;

    /**
     * @var array Configuration of TKE service
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $K8sServices;

    /**
     * @var string The Host header that the gateway forwards to the upstream
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamHost;

    /**
     * @param string $UpstreamId Unique upstream ID
     * @param string $UpstreamName Upstream name
     * @param string $UpstreamDescription Upstream description
     * @param string $Scheme Backend protocol. Valid values: `HTTP`, `HTTPS`
     * @param string $Algorithm Load balancing algorithm. Valid value: `ROUND_ROBIN`
     * @param string $UniqVpcId Unique VPC ID
     * @param integer $Retries Number of retry attempts
     * @param array $Nodes Backend nodes
     * @param string $CreatedTime Creation time
     * @param UpstreamHealthChecker $HealthChecker Health check configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpstreamType Upstream type. Valid values: `IP_PORT`, `K8S`
     * @param array $K8sServices Configuration of TKE service
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpstreamHost The Host header that the gateway forwards to the upstream
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UpstreamId",$param) and $param["UpstreamId"] !== null) {
            $this->UpstreamId = $param["UpstreamId"];
        }

        if (array_key_exists("UpstreamName",$param) and $param["UpstreamName"] !== null) {
            $this->UpstreamName = $param["UpstreamName"];
        }

        if (array_key_exists("UpstreamDescription",$param) and $param["UpstreamDescription"] !== null) {
            $this->UpstreamDescription = $param["UpstreamDescription"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new UpstreamNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("HealthChecker",$param) and $param["HealthChecker"] !== null) {
            $this->HealthChecker = new UpstreamHealthChecker();
            $this->HealthChecker->deserialize($param["HealthChecker"]);
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("K8sServices",$param) and $param["K8sServices"] !== null) {
            $this->K8sServices = [];
            foreach ($param["K8sServices"] as $key => $value){
                $obj = new K8sService();
                $obj->deserialize($value);
                array_push($this->K8sServices, $obj);
            }
        }

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }
    }
}
