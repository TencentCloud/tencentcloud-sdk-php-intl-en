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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the reserved network resource
 *
 * @method string getVpcId() Obtain VPC
 * @method void setVpcId(string $VpcId) Set VPC
 * @method string getSubnetId() Obtain Subnet
 * @method void setSubnetId(string $SubnetId) Set Subnet
 * @method string getVip() Obtain Reserved private network IP under `VpcId` and `SubnetId`
 * @method void setVip(string $Vip) Set Reserved private network IP under `VpcId` and `SubnetId`
 * @method array getVports() Obtain Port under `Vip`
 * @method void setVports(array $Vports) Set Port under `Vip`
 * @method string getRecycleTime() Obtain Valid hours of VIP
 * @method void setRecycleTime(string $RecycleTime) Set Valid hours of VIP
 */
class ReservedNetResource extends AbstractModel
{
    /**
     * @var string VPC
     */
    public $VpcId;

    /**
     * @var string Subnet
     */
    public $SubnetId;

    /**
     * @var string Reserved private network IP under `VpcId` and `SubnetId`
     */
    public $Vip;

    /**
     * @var array Port under `Vip`
     */
    public $Vports;

    /**
     * @var string Valid hours of VIP
     */
    public $RecycleTime;

    /**
     * @param string $VpcId VPC
     * @param string $SubnetId Subnet
     * @param string $Vip Reserved private network IP under `VpcId` and `SubnetId`
     * @param array $Vports Port under `Vip`
     * @param string $RecycleTime Valid hours of VIP
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vports",$param) and $param["Vports"] !== null) {
            $this->Vports = $param["Vports"];
        }

        if (array_key_exists("RecycleTime",$param) and $param["RecycleTime"] !== null) {
            $this->RecycleTime = $param["RecycleTime"];
        }
    }
}
