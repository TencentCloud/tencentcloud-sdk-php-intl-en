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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEnvironment request structure.
 *
 * @method string getEnvironmentName() Obtain Environment name
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
 * @method string getVpc() Obtain VPC name
 * @method void setVpc(string $Vpc) Set VPC name
 * @method array getSubnetIds() Obtain List of subnets
 * @method void setSubnetIds(array $SubnetIds) Set List of subnets
 * @method string getDescription() Obtain Environment description
 * @method void setDescription(string $Description) Set Environment description
 * @method string getK8sVersion() Obtain Kubernetes version
 * @method void setK8sVersion(string $K8sVersion) Set Kubernetes version
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method boolean getEnableTswTraceService() Obtain Whether to enable the TSW service
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) Set Whether to enable the TSW service
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 * @method string getEnvType() Obtain Environment type. Values: `test`, `pre`, `prod`
 * @method void setEnvType(string $EnvType) Set Environment type. Values: `test`, `pre`, `prod`
 * @method string getCreateRegion() Obtain The region to create the environment
 * @method void setCreateRegion(string $CreateRegion) Set The region to create the environment
 */
class CreateEnvironmentRequest extends AbstractModel
{
    /**
     * @var string Environment name
     */
    public $EnvironmentName;

    /**
     * @var string VPC name
     */
    public $Vpc;

    /**
     * @var array List of subnets
     */
    public $SubnetIds;

    /**
     * @var string Environment description
     */
    public $Description;

    /**
     * @var string Kubernetes version
     */
    public $K8sVersion;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var boolean Whether to enable the TSW service
     */
    public $EnableTswTraceService;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @var string Environment type. Values: `test`, `pre`, `prod`
     */
    public $EnvType;

    /**
     * @var string The region to create the environment
     */
    public $CreateRegion;

    /**
     * @param string $EnvironmentName Environment name
     * @param string $Vpc VPC name
     * @param array $SubnetIds List of subnets
     * @param string $Description Environment description
     * @param string $K8sVersion Kubernetes version
     * @param integer $SourceChannel Source channel
     * @param boolean $EnableTswTraceService Whether to enable the TSW service
     * @param array $Tags Tag
     * @param string $EnvType Environment type. Values: `test`, `pre`, `prod`
     * @param string $CreateRegion The region to create the environment
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
        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("CreateRegion",$param) and $param["CreateRegion"] !== null) {
            $this->CreateRegion = $param["CreateRegion"];
        }
    }
}
