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
 * ModifyUpstream request structure.
 *
 * @method string getUpstreamId() Obtain Unique upstream ID
 * @method void setUpstreamId(string $UpstreamId) Set Unique upstream ID
 * @method string getUpstreamName() Obtain Upstream name
 * @method void setUpstreamName(string $UpstreamName) Set Upstream name
 * @method string getUpstreamDescription() Obtain Upstream description
 * @method void setUpstreamDescription(string $UpstreamDescription) Set Upstream description
 * @method string getScheme() Obtain Backend protocol. Valid values: `HTTP`, `HTTPS`
 * @method void setScheme(string $Scheme) Set Backend protocol. Valid values: `HTTP`, `HTTPS`
 * @method string getUpstreamType() Obtain Upstream access type. Valid values: `IP_PORT`, `K8S`
 * @method void setUpstreamType(string $UpstreamType) Set Upstream access type. Valid values: `IP_PORT`, `K8S`
 * @method string getAlgorithm() Obtain Load balancing algorithm. Valid value: `ROUND_ROBIN`
 * @method void setAlgorithm(string $Algorithm) Set Load balancing algorithm. Valid value: `ROUND_ROBIN`
 * @method string getUniqVpcId() Obtain Unique VPC ID.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID.
 * @method integer getRetries() Obtain Retry attempts. It defaults to `3`.
 * @method void setRetries(integer $Retries) Set Retry attempts. It defaults to `3`.
 * @method string getUpstreamHost() Obtain Gateway forwarding to the upstream Host request header
 * @method void setUpstreamHost(string $UpstreamHost) Set Gateway forwarding to the upstream Host request header
 * @method array getNodes() Obtain List of backend nodes
 * @method void setNodes(array $Nodes) Set List of backend nodes
 * @method UpstreamHealthChecker getHealthChecker() Obtain Health check configuration
 * @method void setHealthChecker(UpstreamHealthChecker $HealthChecker) Set Health check configuration
 * @method array getK8sService() Obtain Configuration of TKE service
 * @method void setK8sService(array $K8sService) Set Configuration of TKE service
 */
class ModifyUpstreamRequest extends AbstractModel
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
     * @var string Upstream access type. Valid values: `IP_PORT`, `K8S`
     */
    public $UpstreamType;

    /**
     * @var string Load balancing algorithm. Valid value: `ROUND_ROBIN`
     */
    public $Algorithm;

    /**
     * @var string Unique VPC ID.
     */
    public $UniqVpcId;

    /**
     * @var integer Retry attempts. It defaults to `3`.
     */
    public $Retries;

    /**
     * @var string Gateway forwarding to the upstream Host request header
     */
    public $UpstreamHost;

    /**
     * @var array List of backend nodes
     */
    public $Nodes;

    /**
     * @var UpstreamHealthChecker Health check configuration
     */
    public $HealthChecker;

    /**
     * @var array Configuration of TKE service
     */
    public $K8sService;

    /**
     * @param string $UpstreamId Unique upstream ID
     * @param string $UpstreamName Upstream name
     * @param string $UpstreamDescription Upstream description
     * @param string $Scheme Backend protocol. Valid values: `HTTP`, `HTTPS`
     * @param string $UpstreamType Upstream access type. Valid values: `IP_PORT`, `K8S`
     * @param string $Algorithm Load balancing algorithm. Valid value: `ROUND_ROBIN`
     * @param string $UniqVpcId Unique VPC ID.
     * @param integer $Retries Retry attempts. It defaults to `3`.
     * @param string $UpstreamHost Gateway forwarding to the upstream Host request header
     * @param array $Nodes List of backend nodes
     * @param UpstreamHealthChecker $HealthChecker Health check configuration
     * @param array $K8sService Configuration of TKE service
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

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
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

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new UpstreamNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("HealthChecker",$param) and $param["HealthChecker"] !== null) {
            $this->HealthChecker = new UpstreamHealthChecker();
            $this->HealthChecker->deserialize($param["HealthChecker"]);
        }

        if (array_key_exists("K8sService",$param) and $param["K8sService"] !== null) {
            $this->K8sService = [];
            foreach ($param["K8sService"] as $key => $value){
                $obj = new K8sService();
                $obj->deserialize($value);
                array_push($this->K8sService, $obj);
            }
        }
    }
}
