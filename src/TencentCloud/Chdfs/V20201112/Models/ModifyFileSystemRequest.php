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
 * ModifyFileSystem request structure.
 *
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getFileSystemName() Obtain File system name
 * @method void setFileSystemName(string $FileSystemName) Set File system name
 * @method string getDescription() Obtain File system description
 * @method void setDescription(string $Description) Set File system description
 * @method integer getCapacityQuota() Obtain File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
Note: the file system capacity after change cannot be smaller than the currently used capacity
 * @method void setCapacityQuota(integer $CapacityQuota) Set File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
Note: the file system capacity after change cannot be smaller than the currently used capacity
 * @method array getSuperUsers() Obtain List of superuser names, which can be an empty array
 * @method void setSuperUsers(array $SuperUsers) Set List of superuser names, which can be an empty array
 * @method boolean getPosixAcl() Obtain Whether to verify POSIX ACL
 * @method void setPosixAcl(boolean $PosixAcl) Set Whether to verify POSIX ACL
 * @method boolean getEnableRanger() Obtain Whether to enable verification of Ranger service addresses
 * @method void setEnableRanger(boolean $EnableRanger) Set Whether to enable verification of Ranger service addresses
 * @method array getRangerServiceAddresses() Obtain List of Ranger service addresses, which can be an empty array
 * @method void setRangerServiceAddresses(array $RangerServiceAddresses) Set List of Ranger service addresses, which can be an empty array
 */
class ModifyFileSystemRequest extends AbstractModel
{
    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string File system name
     */
    public $FileSystemName;

    /**
     * @var string File system description
     */
    public $Description;

    /**
     * @var integer File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
Note: the file system capacity after change cannot be smaller than the currently used capacity
     */
    public $CapacityQuota;

    /**
     * @var array List of superuser names, which can be an empty array
     */
    public $SuperUsers;

    /**
     * @var boolean Whether to verify POSIX ACL
     */
    public $PosixAcl;

    /**
     * @var boolean Whether to enable verification of Ranger service addresses
     */
    public $EnableRanger;

    /**
     * @var array List of Ranger service addresses, which can be an empty array
     */
    public $RangerServiceAddresses;

    /**
     * @param string $FileSystemId File system ID
     * @param string $FileSystemName File system name
     * @param string $Description File system description
     * @param integer $CapacityQuota File system capacity (in bytes), which can range from 1 GB to 1 PB and must be an integer multiple of 1 GB
Note: the file system capacity after change cannot be smaller than the currently used capacity
     * @param array $SuperUsers List of superuser names, which can be an empty array
     * @param boolean $PosixAcl Whether to verify POSIX ACL
     * @param boolean $EnableRanger Whether to enable verification of Ranger service addresses
     * @param array $RangerServiceAddresses List of Ranger service addresses, which can be an empty array
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

        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            $this->FileSystemName = $param["FileSystemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CapacityQuota",$param) and $param["CapacityQuota"] !== null) {
            $this->CapacityQuota = $param["CapacityQuota"];
        }

        if (array_key_exists("SuperUsers",$param) and $param["SuperUsers"] !== null) {
            $this->SuperUsers = $param["SuperUsers"];
        }

        if (array_key_exists("PosixAcl",$param) and $param["PosixAcl"] !== null) {
            $this->PosixAcl = $param["PosixAcl"];
        }

        if (array_key_exists("EnableRanger",$param) and $param["EnableRanger"] !== null) {
            $this->EnableRanger = $param["EnableRanger"];
        }

        if (array_key_exists("RangerServiceAddresses",$param) and $param["RangerServiceAddresses"] !== null) {
            $this->RangerServiceAddresses = $param["RangerServiceAddresses"];
        }
    }
}
