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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File detail
 *
 * @method string getAppId() Obtain <p>Root account AppId</p>
 * @method void setAppId(string $AppId) Set <p>Root account AppId</p>
 * @method string getWorkspaceId() Obtain <p>Workspace ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID</p>
 * @method string getFileId() Obtain <p>File ID</p>
 * @method void setFileId(string $FileId) Set <p>File ID</p>
 * @method string getFileName() Obtain <p>File name, including suffix</p>
 * @method void setFileName(string $FileName) Set <p>File name, including suffix</p>
 * @method string getFileType() Obtain <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) Set <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method string getPath() Obtain <p>Full path of the file in the workspace, starting with /, for example /etl/daily/demo.ipynb</p>
 * @method void setPath(string $Path) Set <p>Full path of the file in the workspace, starting with /, for example /etl/daily/demo.ipynb</p>
 * @method FileConfig getFileConfig() Obtain <p>File operation configuration.</p>
 * @method void setFileConfig(FileConfig $FileConfig) Set <p>File operation configuration.</p>
 * @method string getBundleId() Obtain <p>Bound BundleId</p>
 * @method void setBundleId(string $BundleId) Set <p>Bound BundleId</p>
 * @method string getBundleInfo() Obtain <p>Bound BundleInfo, JSON string</p>
 * @method void setBundleInfo(string $BundleInfo) Set <p>Bound BundleInfo, JSON string</p>
 * @method string getStatus() Obtain <p>File status. active=normal, deleted=deleted</p>
 * @method void setStatus(string $Status) Set <p>File status. active=normal, deleted=deleted</p>
 * @method string getOwnerUserName() Obtain <p>File owner userName</p>
 * @method void setOwnerUserName(string $OwnerUserName) Set <p>File owner userName</p>
 * @method string getCreateUserUin() Obtain <p>Creator sub-account Uin.</p>
 * @method void setCreateUserUin(string $CreateUserUin) Set <p>Creator sub-account Uin.</p>
 * @method string getUpdateUserUin() Obtain <p>Last updated by sub-account Uin</p>
 * @method void setUpdateUserUin(string $UpdateUserUin) Set <p>Last updated by sub-account Uin</p>
 * @method string getCreateTime() Obtain <p>Creation time, millisecond-level timestamp</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time, millisecond-level timestamp</p>
 * @method string getUpdateTime() Obtain <p>Latest update time, millisecond-level timestamp</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Latest update time, millisecond-level timestamp</p>
 * @method FileStorage getStorage() Obtain <p>File storage information. Content is returned only when the request IncludeContent=true</p>
 * @method void setStorage(FileStorage $Storage) Set <p>File storage information. Content is returned only when the request IncludeContent=true</p>
 * @method string getPermissions() Obtain <p>Permission point list of the current caller for the file</p>
 * @method void setPermissions(string $Permissions) Set <p>Permission point list of the current caller for the file</p>
 * @method boolean getReleaseStatus() Obtain <p>Whether it is released</p>
 * @method void setReleaseStatus(boolean $ReleaseStatus) Set <p>Whether it is released</p>
 * @method integer getResourceMode() Obtain <p>Resource mode. 1=distributed, 2=single-node</p>
 * @method void setResourceMode(integer $ResourceMode) Set <p>Resource mode. 1=distributed, 2=single-node</p>
 * @method AsyncOperation getAsyncOperation() Obtain <p>Pass through Workspace job information during async file preview job creation; leave this field unset for ordinary sync creation or other APIs that reuse this return structure</p>
 * @method void setAsyncOperation(AsyncOperation $AsyncOperation) Set <p>Pass through Workspace job information during async file preview job creation; leave this field unset for ordinary sync creation or other APIs that reuse this return structure</p>
 * @method string getVersionId() Obtain <p>Script version ID.</p>
 * @method void setVersionId(string $VersionId) Set <p>Script version ID.</p>
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string <p>Root account AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>Workspace ID</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>File ID</p>
     */
    public $FileId;

    /**
     * @var string <p>File name, including suffix</p>
     */
    public $FileName;

    /**
     * @var string <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var string <p>Full path of the file in the workspace, starting with /, for example /etl/daily/demo.ipynb</p>
     */
    public $Path;

    /**
     * @var FileConfig <p>File operation configuration.</p>
     */
    public $FileConfig;

    /**
     * @var string <p>Bound BundleId</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bound BundleInfo, JSON string</p>
     */
    public $BundleInfo;

    /**
     * @var string <p>File status. active=normal, deleted=deleted</p>
     */
    public $Status;

    /**
     * @var string <p>File owner userName</p>
     */
    public $OwnerUserName;

    /**
     * @var string <p>Creator sub-account Uin.</p>
     */
    public $CreateUserUin;

    /**
     * @var string <p>Last updated by sub-account Uin</p>
     */
    public $UpdateUserUin;

    /**
     * @var string <p>Creation time, millisecond-level timestamp</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Latest update time, millisecond-level timestamp</p>
     */
    public $UpdateTime;

    /**
     * @var FileStorage <p>File storage information. Content is returned only when the request IncludeContent=true</p>
     */
    public $Storage;

    /**
     * @var string <p>Permission point list of the current caller for the file</p>
     */
    public $Permissions;

    /**
     * @var boolean <p>Whether it is released</p>
     */
    public $ReleaseStatus;

    /**
     * @var integer <p>Resource mode. 1=distributed, 2=single-node</p>
     */
    public $ResourceMode;

    /**
     * @var AsyncOperation <p>Pass through Workspace job information during async file preview job creation; leave this field unset for ordinary sync creation or other APIs that reuse this return structure</p>
     */
    public $AsyncOperation;

    /**
     * @var string <p>Script version ID.</p>
     */
    public $VersionId;

    /**
     * @param string $AppId <p>Root account AppId</p>
     * @param string $WorkspaceId <p>Workspace ID</p>
     * @param string $FileId <p>File ID</p>
     * @param string $FileName <p>File name, including suffix</p>
     * @param string $FileType <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     * @param string $Path <p>Full path of the file in the workspace, starting with /, for example /etl/daily/demo.ipynb</p>
     * @param FileConfig $FileConfig <p>File operation configuration.</p>
     * @param string $BundleId <p>Bound BundleId</p>
     * @param string $BundleInfo <p>Bound BundleInfo, JSON string</p>
     * @param string $Status <p>File status. active=normal, deleted=deleted</p>
     * @param string $OwnerUserName <p>File owner userName</p>
     * @param string $CreateUserUin <p>Creator sub-account Uin.</p>
     * @param string $UpdateUserUin <p>Last updated by sub-account Uin</p>
     * @param string $CreateTime <p>Creation time, millisecond-level timestamp</p>
     * @param string $UpdateTime <p>Latest update time, millisecond-level timestamp</p>
     * @param FileStorage $Storage <p>File storage information. Content is returned only when the request IncludeContent=true</p>
     * @param string $Permissions <p>Permission point list of the current caller for the file</p>
     * @param boolean $ReleaseStatus <p>Whether it is released</p>
     * @param integer $ResourceMode <p>Resource mode. 1=distributed, 2=single-node</p>
     * @param AsyncOperation $AsyncOperation <p>Pass through Workspace job information during async file preview job creation; leave this field unset for ordinary sync creation or other APIs that reuse this return structure</p>
     * @param string $VersionId <p>Script version ID.</p>
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

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("FileConfig",$param) and $param["FileConfig"] !== null) {
            $this->FileConfig = new FileConfig();
            $this->FileConfig->deserialize($param["FileConfig"]);
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new FileStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }

        if (array_key_exists("ResourceMode",$param) and $param["ResourceMode"] !== null) {
            $this->ResourceMode = $param["ResourceMode"];
        }

        if (array_key_exists("AsyncOperation",$param) and $param["AsyncOperation"] !== null) {
            $this->AsyncOperation = new AsyncOperation();
            $this->AsyncOperation->deserialize($param["AsyncOperation"]);
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
