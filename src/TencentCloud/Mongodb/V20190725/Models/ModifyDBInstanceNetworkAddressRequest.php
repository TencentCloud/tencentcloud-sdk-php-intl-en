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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceNetworkAddress request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getOldIpExpiredTime() Obtain Old IP retention period in minutes. The old IP will be released after the specified time, and both the old and new IPs can be accessed before the release. The value `0` indicates that the old IP will be reclaimed immediately.
 * @method void setOldIpExpiredTime(integer $OldIpExpiredTime) Set Old IP retention period in minutes. The old IP will be released after the specified time, and both the old and new IPs can be accessed before the release. The value `0` indicates that the old IP will be reclaimed immediately.
 * @method string getNewUniqVpcId() Obtain ID of the VPC to which the new IP belongs after the switch. When it is classic network, this field will be empty.
 * @method void setNewUniqVpcId(string $NewUniqVpcId) Set ID of the VPC to which the new IP belongs after the switch. When it is classic network, this field will be empty.
 * @method string getNewUniqSubnetId() Obtain ID of the subnet to which the new IP belongs after the switch. When it is classic network, this field will be empty.
 * @method void setNewUniqSubnetId(string $NewUniqSubnetId) Set ID of the subnet to which the new IP belongs after the switch. When it is classic network, this field will be empty.
 * @method array getNetworkAddresses() Obtain IP information to be modified
 * @method void setNetworkAddresses(array $NetworkAddresses) Set IP information to be modified
 */
class ModifyDBInstanceNetworkAddressRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Old IP retention period in minutes. The old IP will be released after the specified time, and both the old and new IPs can be accessed before the release. The value `0` indicates that the old IP will be reclaimed immediately.
     */
    public $OldIpExpiredTime;

    /**
     * @var string ID of the VPC to which the new IP belongs after the switch. When it is classic network, this field will be empty.
     */
    public $NewUniqVpcId;

    /**
     * @var string ID of the subnet to which the new IP belongs after the switch. When it is classic network, this field will be empty.
     */
    public $NewUniqSubnetId;

    /**
     * @var array IP information to be modified
     */
    public $NetworkAddresses;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $OldIpExpiredTime Old IP retention period in minutes. The old IP will be released after the specified time, and both the old and new IPs can be accessed before the release. The value `0` indicates that the old IP will be reclaimed immediately.
     * @param string $NewUniqVpcId ID of the VPC to which the new IP belongs after the switch. When it is classic network, this field will be empty.
     * @param string $NewUniqSubnetId ID of the subnet to which the new IP belongs after the switch. When it is classic network, this field will be empty.
     * @param array $NetworkAddresses IP information to be modified
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

        if (array_key_exists("OldIpExpiredTime",$param) and $param["OldIpExpiredTime"] !== null) {
            $this->OldIpExpiredTime = $param["OldIpExpiredTime"];
        }

        if (array_key_exists("NewUniqVpcId",$param) and $param["NewUniqVpcId"] !== null) {
            $this->NewUniqVpcId = $param["NewUniqVpcId"];
        }

        if (array_key_exists("NewUniqSubnetId",$param) and $param["NewUniqSubnetId"] !== null) {
            $this->NewUniqSubnetId = $param["NewUniqSubnetId"];
        }

        if (array_key_exists("NetworkAddresses",$param) and $param["NetworkAddresses"] !== null) {
            $this->NetworkAddresses = [];
            foreach ($param["NetworkAddresses"] as $key => $value){
                $obj = new ModifyNetworkAddress();
                $obj->deserialize($value);
                array_push($this->NetworkAddresses, $obj);
            }
        }
    }
}
