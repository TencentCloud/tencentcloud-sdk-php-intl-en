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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceNetwork request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getNewVpcId() Obtain ID of the new VPC
 * @method void setNewVpcId(string $NewVpcId) Set ID of the new VPC
 * @method string getNewSubnetId() Obtain ID of the new subnet
 * @method void setNewSubnetId(string $NewSubnetId) Set ID of the new subnet
 * @method integer getOldIpRetainTime() Obtain Retention period (in hours) of the original VIP. Value range: `0-168`. Default value: `0`, indicating the original VIP is released immediately.
 * @method void setOldIpRetainTime(integer $OldIpRetainTime) Set Retention period (in hours) of the original VIP. Value range: `0-168`. Default value: `0`, indicating the original VIP is released immediately.
 * @method string getVip() Obtain New VIP
 * @method void setVip(string $Vip) Set New VIP
 * @method integer getDRNetwork() Obtain 
 * @method void setDRNetwork(integer $DRNetwork) Set 
 */
class ModifyDBInstanceNetworkRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string ID of the new VPC
     */
    public $NewVpcId;

    /**
     * @var string ID of the new subnet
     */
    public $NewSubnetId;

    /**
     * @var integer Retention period (in hours) of the original VIP. Value range: `0-168`. Default value: `0`, indicating the original VIP is released immediately.
     */
    public $OldIpRetainTime;

    /**
     * @var string New VIP
     */
    public $Vip;

    /**
     * @var integer 
     */
    public $DRNetwork;

    /**
     * @param string $InstanceId Instance ID
     * @param string $NewVpcId ID of the new VPC
     * @param string $NewSubnetId ID of the new subnet
     * @param integer $OldIpRetainTime Retention period (in hours) of the original VIP. Value range: `0-168`. Default value: `0`, indicating the original VIP is released immediately.
     * @param string $Vip New VIP
     * @param integer $DRNetwork 
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

        if (array_key_exists("NewVpcId",$param) and $param["NewVpcId"] !== null) {
            $this->NewVpcId = $param["NewVpcId"];
        }

        if (array_key_exists("NewSubnetId",$param) and $param["NewSubnetId"] !== null) {
            $this->NewSubnetId = $param["NewSubnetId"];
        }

        if (array_key_exists("OldIpRetainTime",$param) and $param["OldIpRetainTime"] !== null) {
            $this->OldIpRetainTime = $param["OldIpRetainTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("DRNetwork",$param) and $param["DRNetwork"] !== null) {
            $this->DRNetwork = $param["DRNetwork"];
        }
    }
}
