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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceNetwork request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getVpcId() Obtain VpcId of the target VPC network
 * @method void setVpcId(string $VpcId) Set VpcId of the target VPC network
 * @method string getSubnetId() Obtain Subnet ID of the target VPC network
 * @method void setSubnetId(string $SubnetId) Set Subnet ID of the target VPC network
 * @method integer getVipReleaseDelay() Obtain VIP retention duration, in hours, value ranges from 0 to 168. 0 means immediate release with a one-minute delay. Not specified, default is 24 hr for VIP release.
 * @method void setVipReleaseDelay(integer $VipReleaseDelay) Set VIP retention duration, in hours, value ranges from 0 to 168. 0 means immediate release with a one-minute delay. Not specified, default is 24 hr for VIP release.
 * @method string getVip() Obtain Assign vip modification. Leave blank for a random vip.
 * @method void setVip(string $Vip) Set Assign vip modification. Leave blank for a random vip.
 */
class ModifyInstanceNetworkRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string VpcId of the target VPC network
     */
    public $VpcId;

    /**
     * @var string Subnet ID of the target VPC network
     */
    public $SubnetId;

    /**
     * @var integer VIP retention duration, in hours, value ranges from 0 to 168. 0 means immediate release with a one-minute delay. Not specified, default is 24 hr for VIP release.
     */
    public $VipReleaseDelay;

    /**
     * @var string Assign vip modification. Leave blank for a random vip.
     */
    public $Vip;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $VpcId VpcId of the target VPC network
     * @param string $SubnetId Subnet ID of the target VPC network
     * @param integer $VipReleaseDelay VIP retention duration, in hours, value ranges from 0 to 168. 0 means immediate release with a one-minute delay. Not specified, default is 24 hr for VIP release.
     * @param string $Vip Assign vip modification. Leave blank for a random vip.
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VipReleaseDelay",$param) and $param["VipReleaseDelay"] !== null) {
            $this->VipReleaseDelay = $param["VipReleaseDelay"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
