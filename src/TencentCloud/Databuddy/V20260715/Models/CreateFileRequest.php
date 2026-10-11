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
 * CreateFile request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
 * @method string getFileName() Obtain <p>File name with suffix, up to 255 bytes. It cannot begin or end with . or .., and cannot contain spaces or control characters.</p>
 * @method void setFileName(string $FileName) Set <p>File name with suffix, up to 255 bytes. It cannot begin or end with . or .., and cannot contain spaces or control characters.</p>
 * @method string getParentFolderPath() Obtain <p>Parent folder path, starting with / and not ending with /. Pass / for the root directory. Source: Path returned by the ListFiles API</p>
 * @method void setParentFolderPath(string $ParentFolderPath) Set <p>Parent folder path, starting with / and not ending with /. Pass / for the root directory. Source: Path returned by the ListFiles API</p>
 * @method string getFileType() Obtain <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) Set <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method FileConfig getFileConfig() Obtain <p>File operation configuration.</p>
 * @method void setFileConfig(FileConfig $FileConfig) Set <p>File operation configuration.</p>
 * @method string getBundleId() Obtain <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
 * @method void setBundleId(string $BundleId) Set <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
 * @method string getBundleInfo() Obtain <p>Bound BundleInfo, JSON string</p>
 * @method void setBundleInfo(string $BundleInfo) Set <p>Bound BundleInfo, JSON string</p>
 * @method FileStorage getStorage() Obtain <p>Initial file content. If not passed, default content will be generated based on FileType.</p>
 * @method void setStorage(FileStorage $Storage) Set <p>Initial file content. If not passed, default content will be generated based on FileType.</p>
 * @method boolean getExtractArchive() Obtain Whether to asynchronously decompress and create ZIP files in Storage. false by default. When true, the async job is fully managed by Workspace throughout its lifecycle, and the response only returns job information through AsyncOperation (FileId is empty). Job progress querying is implemented by the basic platform WS interface and is not defined in this agreement.
 * @method void setExtractArchive(boolean $ExtractArchive) Set Whether to asynchronously decompress and create ZIP files in Storage. false by default. When true, the async job is fully managed by Workspace throughout its lifecycle, and the response only returns job information through AsyncOperation (FileId is empty). Job progress querying is implemented by the basic platform WS interface and is not defined in this agreement.
 */
class CreateFileRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>File name with suffix, up to 255 bytes. It cannot begin or end with . or .., and cannot contain spaces or control characters.</p>
     */
    public $FileName;

    /**
     * @var string <p>Parent folder path, starting with / and not ending with /. Pass / for the root directory. Source: Path returned by the ListFiles API</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var FileConfig <p>File operation configuration.</p>
     */
    public $FileConfig;

    /**
     * @var string <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bound BundleInfo, JSON string</p>
     */
    public $BundleInfo;

    /**
     * @var FileStorage <p>Initial file content. If not passed, default content will be generated based on FileType.</p>
     */
    public $Storage;

    /**
     * @var boolean Whether to asynchronously decompress and create ZIP files in Storage. false by default. When true, the async job is fully managed by Workspace throughout its lifecycle, and the response only returns job information through AsyncOperation (FileId is empty). Job progress querying is implemented by the basic platform WS interface and is not defined in this agreement.
     */
    public $ExtractArchive;

    /**
     * @param string $WorkspaceId <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
     * @param string $FileName <p>File name with suffix, up to 255 bytes. It cannot begin or end with . or .., and cannot contain spaces or control characters.</p>
     * @param string $ParentFolderPath <p>Parent folder path, starting with / and not ending with /. Pass / for the root directory. Source: Path returned by the ListFiles API</p>
     * @param string $FileType <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     * @param FileConfig $FileConfig <p>File operation configuration.</p>
     * @param string $BundleId <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
     * @param string $BundleInfo <p>Bound BundleInfo, JSON string</p>
     * @param FileStorage $Storage <p>Initial file content. If not passed, default content will be generated based on FileType.</p>
     * @param boolean $ExtractArchive Whether to asynchronously decompress and create ZIP files in Storage. false by default. When true, the async job is fully managed by Workspace throughout its lifecycle, and the response only returns job information through AsyncOperation (FileId is empty). Job progress querying is implemented by the basic platform WS interface and is not defined in this agreement.
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
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

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new FileStorage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("ExtractArchive",$param) and $param["ExtractArchive"] !== null) {
            $this->ExtractArchive = $param["ExtractArchive"];
        }
    }
}
