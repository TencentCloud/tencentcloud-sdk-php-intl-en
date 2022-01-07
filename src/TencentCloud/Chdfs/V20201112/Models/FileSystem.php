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
 * File system
 *
 * @method integer getAppId() Obtain Resource owner `AppId`
 * @method void setAppId(integer $AppId) Set Resource owner `AppId`
 * @method string getFileSystemName() Obtain File system name
 * @method void setFileSystemName(string $FileSystemName) Set File system name
 * @method string getDescription() Obtain File system description
 * @method void setDescription(string $Description) Set File system description
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getBlockSize() Obtain File system block size (in bytes)
 * @method void setBlockSize(integer $BlockSize) Set File system block size (in bytes)
 * @method integer getCapacityQuota() Obtain File system capacity (in bytes)
 * @method void setCapacityQuota(integer $CapacityQuota) Set File system capacity (in bytes)
 * @method integer getStatus() Obtain File system status (1: creating; 2: created successfully; 3: failed to create)
 * @method void setStatus(integer $Status) Set File system status (1: creating; 2: created successfully; 3: failed to create)
 * @method array getSuperUsers() Obtain List of superuser names
 * @method void setSuperUsers(array $SuperUsers) Set List of superuser names
 * @method boolean getPosixAcl() Obtain POSIX permission control
 * @method void setPosixAcl(boolean $PosixAcl) Set POSIX permission control
 * @method boolean getEnableRanger() Obtain Whether to enable verification of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setEnableRanger(boolean $EnableRanger) Set Whether to enable verification of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getRangerServiceAddresses() Obtain List of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setRangerServiceAddresses(array $RangerServiceAddresses) Set List of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
 */
class FileSystem extends AbstractModel
{
    /**
     * @var integer Resource owner `AppId`
     */
    public $AppId;

    /**
     * @var string File system name
     */
    public $FileSystemName;

    /**
     * @var string File system description
     */
    public $Description;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer File system block size (in bytes)
     */
    public $BlockSize;

    /**
     * @var integer File system capacity (in bytes)
     */
    public $CapacityQuota;

    /**
     * @var integer File system status (1: creating; 2: created successfully; 3: failed to create)
     */
    public $Status;

    /**
     * @var array List of superuser names
     */
    public $SuperUsers;

    /**
     * @var boolean POSIX permission control
     */
    public $PosixAcl;

    /**
     * @var boolean Whether to enable verification of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $EnableRanger;

    /**
     * @var array List of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $RangerServiceAddresses;

    /**
     * @param integer $AppId Resource owner `AppId`
     * @param string $FileSystemName File system name
     * @param string $Description File system description
     * @param string $Region Region
     * @param string $FileSystemId File system ID
     * @param string $CreateTime Creation time
     * @param integer $BlockSize File system block size (in bytes)
     * @param integer $CapacityQuota File system capacity (in bytes)
     * @param integer $Status File system status (1: creating; 2: created successfully; 3: failed to create)
     * @param array $SuperUsers List of superuser names
     * @param boolean $PosixAcl POSIX permission control
     * @param boolean $EnableRanger Whether to enable verification of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $RangerServiceAddresses List of Ranger service addresses
Note: this field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            $this->FileSystemName = $param["FileSystemName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BlockSize",$param) and $param["BlockSize"] !== null) {
            $this->BlockSize = $param["BlockSize"];
        }

        if (array_key_exists("CapacityQuota",$param) and $param["CapacityQuota"] !== null) {
            $this->CapacityQuota = $param["CapacityQuota"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
