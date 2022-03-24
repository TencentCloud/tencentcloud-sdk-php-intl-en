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
 * @method string getUpstreamId() Obtain Unique ID of the upstream
 * @method void setUpstreamId(string $UpstreamId) Set Unique ID of the upstream
 * @method string getUpstreamName() Obtain Name of the upstream 
 * @method void setUpstreamName(string $UpstreamName) Set Name of the upstream 
 * @method string getUpstreamDescription() Obtain Description of the upstream
 * @method void setUpstreamDescription(string $UpstreamDescription) Set Description of the upstream
 * @method string getScheme() Obtain Backend protocol. Values: `HTTP`, `HTTPS`
 * @method void setScheme(string $Scheme) Set Backend protocol. Values: `HTTP`, `HTTPS`
 * @method string getAlgorithm() Obtain The balancing method can only be `ROUND_ROBIN`.
 * @method void setAlgorithm(string $Algorithm) Set The balancing method can only be `ROUND_ROBIN`.
 * @method string getUniqVpcId() Obtain Unique VPC ID.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID.
 * @method integer getRetries() Obtain Retry attempts. It defaults to `3`.
 * @method void setRetries(integer $Retries) Set Retry attempts. It defaults to `3`.
 * @method string getUpstreamHost() Obtain The host header in the request sending to the backend
 * @method void setUpstreamHost(string $UpstreamHost) Set The host header in the request sending to the backend
 * @method array getNodes() Obtain List of backend nodes
 * @method void setNodes(array $Nodes) Set List of backend nodes
 * @method array getK8sService() Obtain Configuration of K8s service
 * @method void setK8sService(array $K8sService) Set Configuration of K8s service
 */
class ModifyUpstreamRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the upstream
     */
    public $UpstreamId;

    /**
     * @var string Name of the upstream 
     */
    public $UpstreamName;

    /**
     * @var string Description of the upstream
     */
    public $UpstreamDescription;

    /**
     * @var string Backend protocol. Values: `HTTP`, `HTTPS`
     */
    public $Scheme;

    /**
     * @var string The balancing method can only be `ROUND_ROBIN`.
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
     * @var string The host header in the request sending to the backend
     */
    public $UpstreamHost;

    /**
     * @var array List of backend nodes
     */
    public $Nodes;

    /**
     * @var array Configuration of K8s service
     */
    public $K8sService;

    /**
     * @param string $UpstreamId Unique ID of the upstream
     * @param string $UpstreamName Name of the upstream 
     * @param string $UpstreamDescription Description of the upstream
     * @param string $Scheme Backend protocol. Values: `HTTP`, `HTTPS`
     * @param string $Algorithm The balancing method can only be `ROUND_ROBIN`.
     * @param string $UniqVpcId Unique VPC ID.
     * @param integer $Retries Retry attempts. It defaults to `3`.
     * @param string $UpstreamHost The host header in the request sending to the backend
     * @param array $Nodes List of backend nodes
     * @param array $K8sService Configuration of K8s service
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
