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
 * @method string getZone() Obtain <p>Availability zone code, such as ap-guangzhou-1.</p>
 * @method void setZone(string $Zone) Set <p>Availability zone code, such as ap-guangzhou-1.</p>
 * @method string getInstanceType() Obtain <p>Model specifications, such as BMS5.MEDIUM8.</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Model specifications, such as BMS5.MEDIUM8.</p>
 * @method string getPrivateNetworkId() Obtain <p>Private network instance ID in the format of net-xxx.</p>
 * @method void setPrivateNetworkId(string $PrivateNetworkId) Set <p>Private network instance ID in the format of net-xxx.</p>
 * @method string getPublicNetworkId() Obtain <p>Public network instance ID, in the format of net-xxx.</p>
 * @method void setPublicNetworkId(string $PublicNetworkId) Set <p>Public network instance ID, in the format of net-xxx.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getImageId() Obtain <p>Image ID, for example img-centos-7.9.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID, for example img-centos-7.9.</p>
 * @method integer getInstanceCount() Obtain <p>Specify the quantity. Default is 1. Maximum is 50.</p>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Specify the quantity. Default is 1. Maximum is 50.</p>
 * @method string getPassword() Obtain <p>Login password. Either it or SSHKey is required.</p>
 * @method void setPassword(string $Password) Set <p>Login password. Either it or SSHKey is required.</p>
 * @method string getSSHKey() Obtain <p>Public key string of the SSH key. Either this parameter or Password must be specified.</p>
 * @method void setSSHKey(string $SSHKey) Set <p>Public key string of the SSH key. Either this parameter or Password must be specified.</p>
 * @method string getVersionNumber() Obtain <p>Image version number. Only public images have the concept of version.</p>
 * @method void setVersionNumber(string $VersionNumber) Set <p>Image version number. Only public images have the concept of version.</p>
 * @method boolean getEnableIpv6() Obtain <p>Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.</p>
 * @method void setEnableIpv6(boolean $EnableIpv6) Set <p>Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.</p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Availability zone code, such as ap-guangzhou-1.</p>
     */
    public $Zone;

    /**
     * @var string <p>Model specifications, such as BMS5.MEDIUM8.</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Private network instance ID in the format of net-xxx.</p>
     */
    public $PrivateNetworkId;

    /**
     * @var string <p>Public network instance ID, in the format of net-xxx.</p>
     */
    public $PublicNetworkId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Image ID, for example img-centos-7.9.</p>
     */
    public $ImageId;

    /**
     * @var integer <p>Specify the quantity. Default is 1. Maximum is 50.</p>
     */
    public $InstanceCount;

    /**
     * @var string <p>Login password. Either it or SSHKey is required.</p>
     */
    public $Password;

    /**
     * @var string <p>Public key string of the SSH key. Either this parameter or Password must be specified.</p>
     */
    public $SSHKey;

    /**
     * @var string <p>Image version number. Only public images have the concept of version.</p>
     * @deprecated
     */
    public $VersionNumber;

    /**
     * @var boolean <p>Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.</p>
     * @deprecated
     */
    public $EnableIpv6;

    /**
     * @param string $Zone <p>Availability zone code, such as ap-guangzhou-1.</p>
     * @param string $InstanceType <p>Model specifications, such as BMS5.MEDIUM8.</p>
     * @param string $PrivateNetworkId <p>Private network instance ID in the format of net-xxx.</p>
     * @param string $PublicNetworkId <p>Public network instance ID, in the format of net-xxx.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $ImageId <p>Image ID, for example img-centos-7.9.</p>
     * @param integer $InstanceCount <p>Specify the quantity. Default is 1. Maximum is 50.</p>
     * @param string $Password <p>Login password. Either it or SSHKey is required.</p>
     * @param string $SSHKey <p>Public key string of the SSH key. Either this parameter or Password must be specified.</p>
     * @param string $VersionNumber <p>Image version number. Only public images have the concept of version.</p>
     * @param boolean $EnableIpv6 <p>Whether to enable public IPv6, default false. Enabled, the system will allocate an additional IPv6 address after assigning an IPv4 address.</p>
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

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
        }

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("SSHKey",$param) and $param["SSHKey"] !== null) {
            $this->SSHKey = $param["SSHKey"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("EnableIpv6",$param) and $param["EnableIpv6"] !== null) {
            $this->EnableIpv6 = $param["EnableIpv6"];
        }
    }
}
