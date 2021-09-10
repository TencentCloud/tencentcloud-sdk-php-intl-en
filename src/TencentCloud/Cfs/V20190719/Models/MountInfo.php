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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mount target information
 *
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getMountTargetId() Obtain Mount target ID
 * @method void setMountTargetId(string $MountTargetId) Set Mount target ID
 * @method string getIpAddress() Obtain Mount target IP
 * @method void setIpAddress(string $IpAddress) Set Mount target IP
 * @method string getFSID() Obtain Mount root-directory
 * @method void setFSID(string $FSID) Set Mount root-directory
 * @method string getLifeCycleState() Obtain Mount target status
 * @method void setLifeCycleState(string $LifeCycleState) Set Mount target status
 * @method string getNetworkInterface() Obtain Network type
 * @method void setNetworkInterface(string $NetworkInterface) Set Network type
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getVpcName() Obtain VPC name
 * @method void setVpcName(string $VpcName) Set VPC name
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getSubnetName() Obtain Subnet name
 * @method void setSubnetName(string $SubnetName) Set Subnet name
 * @method string getCcnID() Obtain CCN instance ID used by CFS Turbo
 * @method void setCcnID(string $CcnID) Set CCN instance ID used by CFS Turbo
 * @method string getCidrBlock() Obtain CCN IP range used by CFS Turbo
 * @method void setCidrBlock(string $CidrBlock) Set CCN IP range used by CFS Turbo
 */
class MountInfo extends AbstractModel
{
    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string Mount target ID
     */
    public $MountTargetId;

    /**
     * @var string Mount target IP
     */
    public $IpAddress;

    /**
     * @var string Mount root-directory
     */
    public $FSID;

    /**
     * @var string Mount target status
     */
    public $LifeCycleState;

    /**
     * @var string Network type
     */
    public $NetworkInterface;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string VPC name
     */
    public $VpcName;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Subnet name
     */
    public $SubnetName;

    /**
     * @var string CCN instance ID used by CFS Turbo
     */
    public $CcnID;

    /**
     * @var string CCN IP range used by CFS Turbo
     */
    public $CidrBlock;

    /**
     * @param string $FileSystemId File system ID
     * @param string $MountTargetId Mount target ID
     * @param string $IpAddress Mount target IP
     * @param string $FSID Mount root-directory
     * @param string $LifeCycleState Mount target status
     * @param string $NetworkInterface Network type
     * @param string $VpcId VPC ID
     * @param string $VpcName VPC name
     * @param string $SubnetId Subnet ID
     * @param string $SubnetName Subnet name
     * @param string $CcnID CCN instance ID used by CFS Turbo
     * @param string $CidrBlock CCN IP range used by CFS Turbo
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("MountTargetId",$param) and $param["MountTargetId"] !== null) {
            $this->MountTargetId = $param["MountTargetId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("FSID",$param) and $param["FSID"] !== null) {
            $this->FSID = $param["FSID"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("NetworkInterface",$param) and $param["NetworkInterface"] !== null) {
            $this->NetworkInterface = $param["NetworkInterface"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("CcnID",$param) and $param["CcnID"] !== null) {
            $this->CcnID = $param["CcnID"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
