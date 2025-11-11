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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group routing information.
 *
 * @method InstanceRoute getInstanceRoute() Obtain Specifies the routing information.
 * @method void setInstanceRoute(InstanceRoute $InstanceRoute) Set Specifies the routing information.
 * @method array getSecurityGroupIds() Obtain Specifies the security group list to associate.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Specifies the security group list to associate.
 * @method string getInstanceName() Obtain CKafka cluster instance name.
 * @method void setInstanceName(string $InstanceName) Set CKafka cluster instance name.
 * @method string getVpcId() Obtain Specifies the route vpcId.
 * @method void setVpcId(string $VpcId) Set Specifies the route vpcId.
 * @method string getVip() Obtain Route vip.
 * @method void setVip(string $Vip) Set Route vip.
 */
class SecurityGroupRoute extends AbstractModel
{
    /**
     * @var InstanceRoute Specifies the routing information.
     */
    public $InstanceRoute;

    /**
     * @var array Specifies the security group list to associate.
     */
    public $SecurityGroupIds;

    /**
     * @var string CKafka cluster instance name.
     */
    public $InstanceName;

    /**
     * @var string Specifies the route vpcId.
     */
    public $VpcId;

    /**
     * @var string Route vip.
     */
    public $Vip;

    /**
     * @param InstanceRoute $InstanceRoute Specifies the routing information.
     * @param array $SecurityGroupIds Specifies the security group list to associate.
     * @param string $InstanceName CKafka cluster instance name.
     * @param string $VpcId Specifies the route vpcId.
     * @param string $Vip Route vip.
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
        if (array_key_exists("InstanceRoute",$param) and $param["InstanceRoute"] !== null) {
            $this->InstanceRoute = new InstanceRoute();
            $this->InstanceRoute->deserialize($param["InstanceRoute"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
