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
 * Information of the file system bound to the snapshot policy
 *
 * @method string getCreationToken() Obtain File system name
 * @method void setCreationToken(string $CreationToken) Set File system name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method integer getSizeByte() Obtain File system size
 * @method void setSizeByte(integer $SizeByte) Set File system size
 * @method string getStorageType() Obtain Storage class
 * @method void setStorageType(string $StorageType) Set Storage class
 * @method integer getTotalSnapshotSize() Obtain Total snapshot size
 * @method void setTotalSnapshotSize(integer $TotalSnapshotSize) Set Total snapshot size
 * @method string getCreationTime() Obtain File system creation time
 * @method void setCreationTime(string $CreationTime) Set File system creation time
 * @method integer getZoneId() Obtain Region ID of the file system
 * @method void setZoneId(integer $ZoneId) Set Region ID of the file system
 */
class FileSystemByPolicy extends AbstractModel
{
    /**
     * @var string File system name
     */
    public $CreationToken;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var integer File system size
     */
    public $SizeByte;

    /**
     * @var string Storage class
     */
    public $StorageType;

    /**
     * @var integer Total snapshot size
     */
    public $TotalSnapshotSize;

    /**
     * @var string File system creation time
     */
    public $CreationTime;

    /**
     * @var integer Region ID of the file system
     */
    public $ZoneId;

    /**
     * @param string $CreationToken File system name
     * @param string $FileSystemId File system ID
     * @param integer $SizeByte File system size
     * @param string $StorageType Storage class
     * @param integer $TotalSnapshotSize Total snapshot size
     * @param string $CreationTime File system creation time
     * @param integer $ZoneId Region ID of the file system
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
        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("TotalSnapshotSize",$param) and $param["TotalSnapshotSize"] !== null) {
            $this->TotalSnapshotSize = $param["TotalSnapshotSize"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
