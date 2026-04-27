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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances request structure.
 *
 * @method string getZone() Obtain Availability zone code, such as ap-guangzhou-1.
 * @method void setZone(string $Zone) Set Availability zone code, such as ap-guangzhou-1.
 * @method string getInstanceType() Obtain Model specifications, such as BMS5.MEDIUM8.
 * @method void setInstanceType(string $InstanceType) Set Model specifications, such as BMS5.MEDIUM8.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getPrivateNetworkId() Obtain Private network instance ID in the format of net-xxx.
 * @method void setPrivateNetworkId(string $PrivateNetworkId) Set Private network instance ID in the format of net-xxx.
 * @method string getPublicNetworkId() Obtain Public network instance ID, in the format of net-xxx.
 * @method void setPublicNetworkId(string $PublicNetworkId) Set Public network instance ID, in the format of net-xxx.
 * @method string getImageId() Obtain Image ID, for example img-centos-7.9.
 * @method void setImageId(string $ImageId) Set Image ID, for example img-centos-7.9.
 * @method integer getInstanceCount() Obtain Specify the quantity. Default is 1. Maximum is 50.
 * @method void setInstanceCount(integer $InstanceCount) Set Specify the quantity. Default is 1. Maximum is 50.
 * @method string getVersionNumber() Obtain Image version number. Only public images have the concept of version.
 * @method void setVersionNumber(string $VersionNumber) Set Image version number. Only public images have the concept of version.
 * @method boolean getEnableIpv6() Obtain Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.
 * @method void setEnableIpv6(boolean $EnableIpv6) Set Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string Availability zone code, such as ap-guangzhou-1.
     */
    public $Zone;

    /**
     * @var string Model specifications, such as BMS5.MEDIUM8.
     */
    public $InstanceType;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Private network instance ID in the format of net-xxx.
     */
    public $PrivateNetworkId;

    /**
     * @var string Public network instance ID, in the format of net-xxx.
     */
    public $PublicNetworkId;

    /**
     * @var string Image ID, for example img-centos-7.9.
     */
    public $ImageId;

    /**
     * @var integer Specify the quantity. Default is 1. Maximum is 50.
     */
    public $InstanceCount;

    /**
     * @var string Image version number. Only public images have the concept of version.
     */
    public $VersionNumber;

    /**
     * @var boolean Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.
     */
    public $EnableIpv6;

    /**
     * @param string $Zone Availability zone code, such as ap-guangzhou-1.
     * @param string $InstanceType Model specifications, such as BMS5.MEDIUM8.
     * @param string $InstanceName Instance name.
     * @param string $PrivateNetworkId Private network instance ID in the format of net-xxx.
     * @param string $PublicNetworkId Public network instance ID, in the format of net-xxx.
     * @param string $ImageId Image ID, for example img-centos-7.9.
     * @param integer $InstanceCount Specify the quantity. Default is 1. Maximum is 50.
     * @param string $VersionNumber Image version number. Only public images have the concept of version.
     * @param boolean $EnableIpv6 Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
        }

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("EnableIpv6",$param) and $param["EnableIpv6"] !== null) {
            $this->EnableIpv6 = $param["EnableIpv6"];
        }
    }
}
