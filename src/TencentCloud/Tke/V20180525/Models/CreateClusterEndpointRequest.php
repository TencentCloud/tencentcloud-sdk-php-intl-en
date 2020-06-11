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
 * CreateClusterEndpoint request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getSubnetId() Obtain The ID of the subnet where the cluster’s port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster’s VPC). 
 * @method void setSubnetId(string $SubnetId) Set The ID of the subnet where the cluster’s port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster’s VPC). 
 * @method boolean getIsExtranet() Obtain Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
 * @method void setIsExtranet(boolean $IsExtranet) Set Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
 */
class CreateClusterEndpointRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string The ID of the subnet where the cluster’s port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster’s VPC). 
     */
    public $SubnetId;

    /**
     * @var boolean Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
     */
    public $IsExtranet;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $SubnetId The ID of the subnet where the cluster’s port is located (only needs to be entered when the non-public network access is enabled, and must be within the subnet of the cluster’s VPC). 
     * @param boolean $IsExtranet Whether public network access is enabled or not (True = public network access, FALSE = private network access, with the default value as FALSE).
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IsExtranet",$param) and $param["IsExtranet"] !== null) {
            $this->IsExtranet = $param["IsExtranet"];
        }
    }
}
