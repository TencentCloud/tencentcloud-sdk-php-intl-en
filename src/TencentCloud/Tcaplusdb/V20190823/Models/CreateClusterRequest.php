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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getIdlType() Obtain Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
 * @method void setIdlType(string $IdlType) Set Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
 * @method string getClusterName() Obtain Cluster name, which can contain up to 32 letters and digits
 * @method void setClusterName(string $ClusterName) Set Cluster name, which can contain up to 32 letters and digits
 * @method string getVpcId() Obtain ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
 * @method void setVpcId(string $VpcId) Set ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
 * @method string getSubnetId() Obtain ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
 * @method string getPassword() Obtain Cluster access password, which must contain lowercase letters (a–z), uppercase letters (A–Z), and digits (0–9).
 * @method void setPassword(string $Password) Set Cluster access password, which must contain lowercase letters (a–z), uppercase letters (A–Z), and digits (0–9).
 */

/**
 *CreateCluster request structure.
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
     */
    public $IdlType;

    /**
     * @var string Cluster name, which can contain up to 32 letters and digits
     */
    public $ClusterName;

    /**
     * @var string ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
     */
    public $VpcId;

    /**
     * @var string ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
     */
    public $SubnetId;

    /**
     * @var string Cluster access password, which must contain lowercase letters (a–z), uppercase letters (A–Z), and digits (0–9).
     */
    public $Password;
    /**
     * @param string $IdlType Cluster data description language type, such as `PROTO`, `TDR`, or `MIX`
     * @param string $ClusterName Cluster name, which can contain up to 32 letters and digits
     * @param string $VpcId ID of the VPC instance bound to a cluster in the format of `vpc-f49l6u0z`
     * @param string $SubnetId ID of the subnet instance bound to a cluster in the format of `subnet-pxir56ns`
     * @param string $Password Cluster access password, which must contain lowercase letters (a–z), uppercase letters (A–Z), and digits (0–9).
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
        if (array_key_exists("IdlType",$param) and $param["IdlType"] !== null) {
            $this->IdlType = $param["IdlType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
