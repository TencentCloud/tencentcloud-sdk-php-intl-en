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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCdbProxy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getUniqVpcId() Obtain VPC ID
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID
 * @method string getUniqSubnetId() Obtain VPC subnet ID
 * @method void setUniqSubnetId(string $UniqSubnetId) Set VPC subnet ID
 * @method array getProxyNodeCustom() Obtain The specification configuration of a node
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) Set The specification configuration of a node
 * @method array getSecurityGroup() Obtain Security group
 * @method void setSecurityGroup(array $SecurityGroup) Set Security group
 * @method string getDesc() Obtain Description
 * @method void setDesc(string $Desc) Set Description
 * @method integer getConnectionPoolLimit() Obtain Connection pool threshold
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) Set Connection pool threshold
 */
class CreateCdbProxyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string VPC ID
     */
    public $UniqVpcId;

    /**
     * @var string VPC subnet ID
     */
    public $UniqSubnetId;

    /**
     * @var array The specification configuration of a node
     */
    public $ProxyNodeCustom;

    /**
     * @var array Security group
     */
    public $SecurityGroup;

    /**
     * @var string Description
     */
    public $Desc;

    /**
     * @var integer Connection pool threshold
     */
    public $ConnectionPoolLimit;

    /**
     * @param string $InstanceId Instance ID
     * @param string $UniqVpcId VPC ID
     * @param string $UniqSubnetId VPC subnet ID
     * @param array $ProxyNodeCustom The specification configuration of a node
     * @param array $SecurityGroup Security group
     * @param string $Desc Description
     * @param integer $ConnectionPoolLimit Connection pool threshold
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }
    }
}
