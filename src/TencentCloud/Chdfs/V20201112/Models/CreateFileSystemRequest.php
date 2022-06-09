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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileSystem request structure.
 *
 * @method string getFileSystemName() Obtain File system name
 * @method void setFileSystemName(string $FileSystemName) Set File system name
 * @method integer getCapacityQuota() Obtain File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
 * @method void setCapacityQuota(integer $CapacityQuota) Set File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
 * @method boolean getPosixAcl() Obtain Whether to verify POSIX ACL
 * @method void setPosixAcl(boolean $PosixAcl) Set Whether to verify POSIX ACL
 * @method string getDescription() Obtain File system description, which is an empty string by default
 * @method void setDescription(string $Description) Set File system description, which is an empty string by default
 * @method array getSuperUsers() Obtain List of superuser names, which is an empty array by default
 * @method void setSuperUsers(array $SuperUsers) Set List of superuser names, which is an empty array by default
 * @method string getRootInodeUser() Obtain Username of the root directory Inode, which is `hadoop` by default
 * @method void setRootInodeUser(string $RootInodeUser) Set Username of the root directory Inode, which is `hadoop` by default
 * @method string getRootInodeGroup() Obtain Group name of the root directory Inode, which is `supergroup` by default
 * @method void setRootInodeGroup(string $RootInodeGroup) Set Group name of the root directory Inode, which is `supergroup` by default
 * @method boolean getEnableRanger() Obtain Whether to enable verification of Ranger service addresses
 * @method void setEnableRanger(boolean $EnableRanger) Set Whether to enable verification of Ranger service addresses
 * @method array getRangerServiceAddresses() Obtain List of Ranger service addresses (empty array by default)
 * @method void setRangerServiceAddresses(array $RangerServiceAddresses) Set List of Ranger service addresses (empty array by default)
 * @method array getTags() Obtain Multiple resource tags, which can be an empty array
 * @method void setTags(array $Tags) Set Multiple resource tags, which can be an empty array
 */
class CreateFileSystemRequest extends AbstractModel
{
    /**
     * @var string File system name
     */
    public $FileSystemName;

    /**
     * @var integer File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
     */
    public $CapacityQuota;

    /**
     * @var boolean Whether to verify POSIX ACL
     */
    public $PosixAcl;

    /**
     * @var string File system description, which is an empty string by default
     */
    public $Description;

    /**
     * @var array List of superuser names, which is an empty array by default
     */
    public $SuperUsers;

    /**
     * @var string Username of the root directory Inode, which is `hadoop` by default
     */
    public $RootInodeUser;

    /**
     * @var string Group name of the root directory Inode, which is `supergroup` by default
     */
    public $RootInodeGroup;

    /**
     * @var boolean Whether to enable verification of Ranger service addresses
     */
    public $EnableRanger;

    /**
     * @var array List of Ranger service addresses (empty array by default)
     */
    public $RangerServiceAddresses;

    /**
     * @var array Multiple resource tags, which can be an empty array
     */
    public $Tags;

    /**
     * @param string $FileSystemName File system name
     * @param integer $CapacityQuota File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
     * @param boolean $PosixAcl Whether to verify POSIX ACL
     * @param string $Description File system description, which is an empty string by default
     * @param array $SuperUsers List of superuser names, which is an empty array by default
     * @param string $RootInodeUser Username of the root directory Inode, which is `hadoop` by default
     * @param string $RootInodeGroup Group name of the root directory Inode, which is `supergroup` by default
     * @param boolean $EnableRanger Whether to enable verification of Ranger service addresses
     * @param array $RangerServiceAddresses List of Ranger service addresses (empty array by default)
     * @param array $Tags Multiple resource tags, which can be an empty array
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
        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            $this->FileSystemName = $param["FileSystemName"];
        }

        if (array_key_exists("CapacityQuota",$param) and $param["CapacityQuota"] !== null) {
            $this->CapacityQuota = $param["CapacityQuota"];
        }

        if (array_key_exists("PosixAcl",$param) and $param["PosixAcl"] !== null) {
            $this->PosixAcl = $param["PosixAcl"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SuperUsers",$param) and $param["SuperUsers"] !== null) {
            $this->SuperUsers = $param["SuperUsers"];
        }

        if (array_key_exists("RootInodeUser",$param) and $param["RootInodeUser"] !== null) {
            $this->RootInodeUser = $param["RootInodeUser"];
        }

        if (array_key_exists("RootInodeGroup",$param) and $param["RootInodeGroup"] !== null) {
            $this->RootInodeGroup = $param["RootInodeGroup"];
        }

        if (array_key_exists("EnableRanger",$param) and $param["EnableRanger"] !== null) {
            $this->EnableRanger = $param["EnableRanger"];
        }

        if (array_key_exists("RangerServiceAddresses",$param) and $param["RangerServiceAddresses"] !== null) {
            $this->RangerServiceAddresses = $param["RangerServiceAddresses"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
