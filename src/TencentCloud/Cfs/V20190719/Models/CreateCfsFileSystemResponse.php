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
 * CreateCfsFileSystem response structure.
 *
 * @method string getCreationTime() Obtain File system creation time
 * @method void setCreationTime(string $CreationTime) Set File system creation time
 * @method string getCreationToken() Obtain Custom file system name
 * @method void setCreationToken(string $CreationToken) Set Custom file system name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getLifeCycleState() Obtain File system status. Valid values: `creating`, `create_failed`, `available`, `unserviced`, `upgrading`, `deleting`
 * @method void setLifeCycleState(string $LifeCycleState) Set File system status. Valid values: `creating`, `create_failed`, `available`, `unserviced`, `upgrading`, `deleting`
 * @method integer getSizeByte() Obtain Storage used by the file system, in bytes
 * @method void setSizeByte(integer $SizeByte) Set Storage used by the file system, in bytes
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getFsName() Obtain Custom file system name
 * @method void setFsName(string $FsName) Set Custom file system name
 * @method boolean getEncrypted() Obtain Whether a file system is encrypted
 * @method void setEncrypted(boolean $Encrypted) Set Whether a file system is encrypted
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateCfsFileSystemResponse extends AbstractModel
{
    /**
     * @var string File system creation time
     */
    public $CreationTime;

    /**
     * @var string Custom file system name
     */
    public $CreationToken;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string File system status. Valid values: `creating`, `create_failed`, `available`, `unserviced`, `upgrading`, `deleting`
     */
    public $LifeCycleState;

    /**
     * @var integer Storage used by the file system, in bytes
     */
    public $SizeByte;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string Custom file system name
     */
    public $FsName;

    /**
     * @var boolean Whether a file system is encrypted
     */
    public $Encrypted;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CreationTime File system creation time
     * @param string $CreationToken Custom file system name
     * @param string $FileSystemId File system ID
     * @param string $LifeCycleState File system status. Valid values: `creating`, `create_failed`, `available`, `unserviced`, `upgrading`, `deleting`
     * @param integer $SizeByte Storage used by the file system, in bytes
     * @param integer $ZoneId AZ ID
     * @param string $FsName Custom file system name
     * @param boolean $Encrypted Whether a file system is encrypted
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
