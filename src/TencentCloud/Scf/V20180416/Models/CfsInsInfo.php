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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of the CFS instance associated with function
 *
 * @method string getUserId() Obtain User ID
 * @method void setUserId(string $UserId) Set User ID
 * @method string getUserGroupId() Obtain User group ID
 * @method void setUserGroupId(string $UserGroupId) Set User group ID
 * @method string getCfsId() Obtain CFS instance ID
 * @method void setCfsId(string $CfsId) Set CFS instance ID
 * @method string getMountInsId() Obtain File system mount target ID
 * @method void setMountInsId(string $MountInsId) Set File system mount target ID
 * @method string getLocalMountDir() Obtain Local mount target
 * @method void setLocalMountDir(string $LocalMountDir) Set Local mount target
 * @method string getRemoteMountDir() Obtain Remote mount target
 * @method void setRemoteMountDir(string $RemoteMountDir) Set Remote mount target
 * @method string getIpAddress() Obtain File system IP, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIpAddress(string $IpAddress) Set File system IP, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMountVpcId() Obtain VPC ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMountVpcId(string $MountVpcId) Set VPC ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMountSubnetId() Obtain VPC subnet ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMountSubnetId(string $MountSubnetId) Set VPC subnet ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CfsInsInfo extends AbstractModel
{
    /**
     * @var string User ID
     */
    public $UserId;

    /**
     * @var string User group ID
     */
    public $UserGroupId;

    /**
     * @var string CFS instance ID
     */
    public $CfsId;

    /**
     * @var string File system mount target ID
     */
    public $MountInsId;

    /**
     * @var string Local mount target
     */
    public $LocalMountDir;

    /**
     * @var string Remote mount target
     */
    public $RemoteMountDir;

    /**
     * @var string File system IP, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IpAddress;

    /**
     * @var string VPC ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MountVpcId;

    /**
     * @var string VPC subnet ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MountSubnetId;

    /**
     * @param string $UserId User ID
     * @param string $UserGroupId User group ID
     * @param string $CfsId CFS instance ID
     * @param string $MountInsId File system mount target ID
     * @param string $LocalMountDir Local mount target
     * @param string $RemoteMountDir Remote mount target
     * @param string $IpAddress File system IP, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MountVpcId VPC ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $MountSubnetId VPC subnet ID of file system, which is not required when you configure CFS.
Note: this field may return null, indicating that no valid values can be obtained.
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
