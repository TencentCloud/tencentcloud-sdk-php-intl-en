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
 * Information of an upstream
 *
 * @method string getUpstreamId() Obtain Unique ID of the upstream
 * @method void setUpstreamId(string $UpstreamId) Set Unique ID of the upstream
 * @method string getUpstreamName() Obtain Name of the upstream 
 * @method void setUpstreamName(string $UpstreamName) Set Name of the upstream 
 * @method string getUpstreamDescription() Obtain Description of the upstream
 * @method void setUpstreamDescription(string $UpstreamDescription) Set Description of the upstream
 * @method string getScheme() Obtain Protocol
 * @method void setScheme(string $Scheme) Set Protocol
 * @method string getAlgorithm() Obtain Load balancing algorithm
 * @method void setAlgorithm(string $Algorithm) Set Load balancing algorithm
 * @method string getUniqVpcId() Obtain Unique VPC ID.
 * @method void setUniqVpcId(string $UniqVpcId) Set Unique VPC ID.
 * @method integer getRetries() Obtain Number of retried attempts
 * @method void setRetries(integer $Retries) Set Number of retried attempts
 * @method array getNodes() Obtain Backend nodes
 * @method void setNodes(array $Nodes) Set Backend nodes
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method array getTags() Obtain Label
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set Label
Note: This field may return `null`, indicating that no valid value was found.
 * @method UpstreamHealthChecker getHealthChecker() Obtain Health check configuration
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setHealthChecker(UpstreamHealthChecker $HealthChecker) Set Health check configuration
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUpstreamType() Obtain Type of the upstream
 * @method void setUpstreamType(string $UpstreamType) Set Type of the upstream
 * @method array getK8sServices() Obtain Configuration of K8s service
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setK8sServices(array $K8sServices) Set Configuration of K8s service
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getUpstreamHost() Obtain Host of the upstream
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setUpstreamHost(string $UpstreamHost) Set Host of the upstream
Note: This field may return `null`, indicating that no valid value was found.
 */
class UpstreamInfo extends AbstractModel
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
     * @var string Protocol
     */
    public $Scheme;

    /**
     * @var string Load balancing algorithm
     */
    public $Algorithm;

    /**
     * @var string Unique VPC ID.
     */
    public $UniqVpcId;

    /**
     * @var integer Number of retried attempts
     */
    public $Retries;

    /**
     * @var array Backend nodes
     */
    public $Nodes;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var array Label
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var UpstreamHealthChecker Health check configuration
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $HealthChecker;

    /**
     * @var string Type of the upstream
     */
    public $UpstreamType;

    /**
     * @var array Configuration of K8s service
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $K8sServices;

    /**
     * @var string Host of the upstream
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $UpstreamHost;

    /**
     * @param string $UpstreamId Unique ID of the upstream
     * @param string $UpstreamName Name of the upstream 
     * @param string $UpstreamDescription Description of the upstream
     * @param string $Scheme Protocol
     * @param string $Algorithm Load balancing algorithm
     * @param string $UniqVpcId Unique VPC ID.
     * @param integer $Retries Number of retried attempts
     * @param array $Nodes Backend nodes
     * @param string $CreatedTime Creation time.
     * @param array $Tags Label
Note: This field may return `null`, indicating that no valid value was found.
     * @param UpstreamHealthChecker $HealthChecker Health check configuration
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UpstreamType Type of the upstream
     * @param array $K8sServices Configuration of K8s service
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $UpstreamHost Host of the upstream
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
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
