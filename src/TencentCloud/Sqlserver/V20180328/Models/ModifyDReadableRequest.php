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
 * ModifyDReadable request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getType() Obtain Operation type. Valid values: enable - enabling the read-only mode of the replica server; disable - disabling the read-only mode of the replica server
 * @method void setType(string $Type) Set Operation type. Valid values: enable - enabling the read-only mode of the replica server; disable - disabling the read-only mode of the replica server
 * @method string getVpcId() Obtain Replica server network ID, which will be consistent with the primary instance by default if left blank
 * @method void setVpcId(string $VpcId) Set Replica server network ID, which will be consistent with the primary instance by default if left blank
 * @method string getSubnetId() Obtain Replica server subnet ID, which will be consistent with the primary instance by default if left blank
 * @method void setSubnetId(string $SubnetId) Set Replica server subnet ID, which will be consistent with the primary instance by default if left blank
 * @method string getVip() Obtain Specified replica server read-only VIP, which will be assigned automatically if left blank
 * @method void setVip(string $Vip) Set Specified replica server read-only VIP, which will be assigned automatically if left blank
 */
class ModifyDReadableRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Operation type. Valid values: enable - enabling the read-only mode of the replica server; disable - disabling the read-only mode of the replica server
     */
    public $Type;

    /**
     * @var string Replica server network ID, which will be consistent with the primary instance by default if left blank
     */
    public $VpcId;

    /**
     * @var string Replica server subnet ID, which will be consistent with the primary instance by default if left blank
     */
    public $SubnetId;

    /**
     * @var string Specified replica server read-only VIP, which will be assigned automatically if left blank
     */
    public $Vip;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Type Operation type. Valid values: enable - enabling the read-only mode of the replica server; disable - disabling the read-only mode of the replica server
     * @param string $VpcId Replica server network ID, which will be consistent with the primary instance by default if left blank
     * @param string $SubnetId Replica server subnet ID, which will be consistent with the primary instance by default if left blank
     * @param string $Vip Specified replica server read-only VIP, which will be assigned automatically if left blank
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
