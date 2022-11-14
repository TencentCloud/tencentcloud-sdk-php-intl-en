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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceNetwork request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVpcId() Obtain The ID of the desired VPC network
 * @method void setVpcId(string $VpcId) Set The ID of the desired VPC network
 * @method string getSubnetId() Obtain The subnet ID of the desired VPC network
 * @method void setSubnetId(string $SubnetId) Set The subnet ID of the desired VPC network
 * @method string getVip() Obtain The field is required to specify VIP.
 * @method void setVip(string $Vip) Set The field is required to specify VIP.
 * @method string getVipv6() Obtain The field is required to specify VIPv6.
 * @method void setVipv6(string $Vipv6) Set The field is required to specify VIPv6.
 * @method integer getVipReleaseDelay() Obtain VIP retention period in hours. Value range: 0-168. Default value: `24`. `0` indicates that the VIP will be released immediately, but there will be 1-minute delay.
 * @method void setVipReleaseDelay(integer $VipReleaseDelay) Set VIP retention period in hours. Value range: 0-168. Default value: `24`. `0` indicates that the VIP will be released immediately, but there will be 1-minute delay.
 */
class ModifyInstanceNetworkRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string The ID of the desired VPC network
     */
    public $VpcId;

    /**
     * @var string The subnet ID of the desired VPC network
     */
    public $SubnetId;

    /**
     * @var string The field is required to specify VIP.
     */
    public $Vip;

    /**
     * @var string The field is required to specify VIPv6.
     */
    public $Vipv6;

    /**
     * @var integer VIP retention period in hours. Value range: 0-168. Default value: `24`. `0` indicates that the VIP will be released immediately, but there will be 1-minute delay.
     */
    public $VipReleaseDelay;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VpcId The ID of the desired VPC network
     * @param string $SubnetId The subnet ID of the desired VPC network
     * @param string $Vip The field is required to specify VIP.
     * @param string $Vipv6 The field is required to specify VIPv6.
     * @param integer $VipReleaseDelay VIP retention period in hours. Value range: 0-168. Default value: `24`. `0` indicates that the VIP will be released immediately, but there will be 1-minute delay.
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("VipReleaseDelay",$param) and $param["VipReleaseDelay"] !== null) {
            $this->VipReleaseDelay = $param["VipReleaseDelay"];
        }
    }
}
