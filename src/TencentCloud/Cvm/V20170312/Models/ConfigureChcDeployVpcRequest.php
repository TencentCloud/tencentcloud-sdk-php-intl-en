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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureChcDeployVpc request structure.
 *
 * @method array getChcIds() Obtain CHC instance ID
 * @method void setChcIds(array $ChcIds) Set CHC instance ID
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() Obtain Deployment network information
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) Set Deployment network information
 * @method array getDeploySecurityGroupIds() Obtain Deployment network security group list
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) Set Deployment network security group list
 */
class ConfigureChcDeployVpcRequest extends AbstractModel
{
    /**
     * @var array CHC instance ID
     */
    public $ChcIds;

    /**
     * @var VirtualPrivateCloud Deployment network information
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var array Deployment network security group list
     */
    public $DeploySecurityGroupIds;

    /**
     * @param array $ChcIds CHC instance ID
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud Deployment network information
     * @param array $DeploySecurityGroupIds Deployment network security group list
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
        if (array_key_exists("ChcIds",$param) and $param["ChcIds"] !== null) {
            $this->ChcIds = $param["ChcIds"];
        }

        if (array_key_exists("DeployVirtualPrivateCloud",$param) and $param["DeployVirtualPrivateCloud"] !== null) {
            $this->DeployVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->DeployVirtualPrivateCloud->deserialize($param["DeployVirtualPrivateCloud"]);
        }

        if (array_key_exists("DeploySecurityGroupIds",$param) and $param["DeploySecurityGroupIds"] !== null) {
            $this->DeploySecurityGroupIds = $param["DeploySecurityGroupIds"];
        }
    }
}
