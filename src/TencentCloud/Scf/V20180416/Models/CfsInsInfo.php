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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cfs configuration message associated with the SCF
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserGroupId() Obtain User group id.
 * @method void setUserGroupId(string $UserGroupId) Set User group id.
 * @method string getCfsId() Obtain File system instance id
 * @method void setCfsId(string $CfsId) Set File system instance id
 * @method string getMountInsId() Obtain File system mount point id
 * @method void setMountInsId(string $MountInsId) Set File system mount point id
 * @method string getLocalMountDir() Obtain Local mount point
 * @method void setLocalMountDir(string $LocalMountDir) Set Local mount point
 * @method string getRemoteMountDir() Obtain Remote mount point.
 * @method void setRemoteMountDir(string $RemoteMountDir) Set Remote mount point.
 * @method string getIpAddress() Obtain File system ip. No need to specify when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpAddress(string $IpAddress) Set File system ip. No need to specify when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMountVpcId() Obtain VPC id where the file system is located. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMountVpcId(string $MountVpcId) Set VPC id where the file system is located. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMountSubnetId() Obtain Subnet id of the private network where the file system resides. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMountSubnetId(string $MountSubnetId) Set Subnet id of the private network where the file system resides. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CfsInsInfo extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string User group id.
     */
    public $UserGroupId;

    /**
     * @var string File system instance id
     */
    public $CfsId;

    /**
     * @var string File system mount point id
     */
    public $MountInsId;

    /**
     * @var string Local mount point
     */
    public $LocalMountDir;

    /**
     * @var string Remote mount point.
     */
    public $RemoteMountDir;

    /**
     * @var string File system ip. No need to specify when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpAddress;

    /**
     * @var string VPC id where the file system is located. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MountVpcId;

    /**
     * @var string Subnet id of the private network where the file system resides. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MountSubnetId;

    /**
     * @param string $UserId User ID
     * @param string $UserGroupId User group id.
     * @param string $CfsId File system instance id
     * @param string $MountInsId File system mount point id
     * @param string $LocalMountDir Local mount point
     * @param string $RemoteMountDir Remote mount point.
     * @param string $IpAddress File system ip. No need to specify when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MountVpcId VPC id where the file system is located. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MountSubnetId Subnet id of the private network where the file system resides. Not required when configuring cfs.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("CfsId",$param) and $param["CfsId"] !== null) {
            $this->CfsId = $param["CfsId"];
        }

        if (array_key_exists("MountInsId",$param) and $param["MountInsId"] !== null) {
            $this->MountInsId = $param["MountInsId"];
        }

        if (array_key_exists("LocalMountDir",$param) and $param["LocalMountDir"] !== null) {
            $this->LocalMountDir = $param["LocalMountDir"];
        }

        if (array_key_exists("RemoteMountDir",$param) and $param["RemoteMountDir"] !== null) {
            $this->RemoteMountDir = $param["RemoteMountDir"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("MountVpcId",$param) and $param["MountVpcId"] !== null) {
            $this->MountVpcId = $param["MountVpcId"];
        }

        if (array_key_exists("MountSubnetId",$param) and $param["MountSubnetId"] !== null) {
            $this->MountSubnetId = $param["MountSubnetId"];
        }
    }
}
