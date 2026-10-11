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
 * UpdateFile request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
 * @method string getFileId() Obtain <p>File ID. Source: FileId returned by the CreateFile / ListFiles / GetFile APIs</p>
 * @method void setFileId(string $FileId) Set <p>File ID. Source: FileId returned by the CreateFile / ListFiles / GetFile APIs</p>
 * @method FileConfig getFileConfig() Obtain <p>File operation configuration. If not passed, the configuration will not be updated.</p>
 * @method void setFileConfig(FileConfig $FileConfig) Set <p>File operation configuration. If not passed, the configuration will not be updated.</p>
 * @method string getFileType() Obtain <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) Set <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method string getBundleId() Obtain <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
 * @method void setBundleId(string $BundleId) Set <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
 * @method string getBundleInfo() Obtain <p>Bound BundleInfo, JSON string</p>
 * @method void setBundleInfo(string $BundleInfo) Set <p>Bound BundleInfo, JSON string</p>
 * @method FileStorage getStorage() Obtain <p>File content. If not passed, the content will not be updated.</p>
 * @method void setStorage(FileStorage $Storage) Set <p>File content. If not passed, the content will not be updated.</p>
 * @method string getFileName() Obtain <p>Target file name. When it is not empty and different from the current file name, perform the rename action. Length not exceeding SCRIPT_NAME_MAX_LENGTH. It must not begin or end with . or .., and spaces, double dots, control characters, and Linux reserved names are forbidden (see docs/linux_filename_rules.md). Validate the suffix legitimacy together with ExtensionType.</p>
 * @method void setFileName(string $FileName) Set <p>Target file name. When it is not empty and different from the current file name, perform the rename action. Length not exceeding SCRIPT_NAME_MAX_LENGTH. It must not begin or end with . or .., and spaces, double dots, control characters, and Linux reserved names are forbidden (see docs/linux_filename_rules.md). Validate the suffix legitimacy together with ExtensionType.</p>
 * @method string getParentFolderPath() Obtain <p>Target parent directory path. If not empty, execute the move action. For the root directory, pass /; it can simultaneously appear with FileName, with the semantics of "move + rename". It should be consistent with ParentFolderPath of CreateFile.</p>
 * @method void setParentFolderPath(string $ParentFolderPath) Set <p>Target parent directory path. If not empty, execute the move action. For the root directory, pass /; it can simultaneously appear with FileName, with the semantics of "move + rename". It should be consistent with ParentFolderPath of CreateFile.</p>
 * @method string getTargetFileType() Obtain <p>FileType of the target parent directory. Value: FOLDER, GIT_FOLDER. Used only when ParentFolderPath is not empty; by default, it is handled based on the actual type of the parsed parent directory</p>
 * @method void setTargetFileType(string $TargetFileType) Set <p>FileType of the target parent directory. Value: FOLDER, GIT_FOLDER. Used only when ParentFolderPath is not empty; by default, it is handled based on the actual type of the parsed parent directory</p>
 * @method integer getUpdateAction() Obtain <p>Action type (optional, default value: 1, mandatory verification in future versions). Value: 1 = UPDATE_CONTENT (only refresh FileConfig / Storage / Bundle*, forbid passing FileName / ParentFolderPath / TargetFileType); 2 = RENAME (rename only, must pass FileName, forbid passing ParentFolderPath / FileConfig / Storage / Bundle*); 3 = MOVE (move only, must pass ParentFolderPath, forbid passing FileName / FileConfig / Storage / Bundle*). A ParamIllegal error will be returned if parameter mutual exclusion verification fails</p>
 * @method void setUpdateAction(integer $UpdateAction) Set <p>Action type (optional, default value: 1, mandatory verification in future versions). Value: 1 = UPDATE_CONTENT (only refresh FileConfig / Storage / Bundle*, forbid passing FileName / ParentFolderPath / TargetFileType); 2 = RENAME (rename only, must pass FileName, forbid passing ParentFolderPath / FileConfig / Storage / Bundle*); 3 = MOVE (move only, must pass ParentFolderPath, forbid passing FileName / FileConfig / Storage / Bundle*). A ParamIllegal error will be returned if parameter mutual exclusion verification fails</p>
 */
class UpdateFileRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>File ID. Source: FileId returned by the CreateFile / ListFiles / GetFile APIs</p>
     */
    public $FileId;

    /**
     * @var FileConfig <p>File operation configuration. If not passed, the configuration will not be updated.</p>
     */
    public $FileConfig;

    /**
     * @var string <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var string <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
     */
    public $BundleId;

    /**
     * @var string <p>Bound BundleInfo, JSON string</p>
     */
    public $BundleInfo;

    /**
     * @var FileStorage <p>File content. If not passed, the content will not be updated.</p>
     */
    public $Storage;

    /**
     * @var string <p>Target file name. When it is not empty and different from the current file name, perform the rename action. Length not exceeding SCRIPT_NAME_MAX_LENGTH. It must not begin or end with . or .., and spaces, double dots, control characters, and Linux reserved names are forbidden (see docs/linux_filename_rules.md). Validate the suffix legitimacy together with ExtensionType.</p>
     */
    public $FileName;

    /**
     * @var string <p>Target parent directory path. If not empty, execute the move action. For the root directory, pass /; it can simultaneously appear with FileName, with the semantics of "move + rename". It should be consistent with ParentFolderPath of CreateFile.</p>
     */
    public $ParentFolderPath;

    /**
     * @var string <p>FileType of the target parent directory. Value: FOLDER, GIT_FOLDER. Used only when ParentFolderPath is not empty; by default, it is handled based on the actual type of the parsed parent directory</p>
     */
    public $TargetFileType;

    /**
     * @var integer <p>Action type (optional, default value: 1, mandatory verification in future versions). Value: 1 = UPDATE_CONTENT (only refresh FileConfig / Storage / Bundle*, forbid passing FileName / ParentFolderPath / TargetFileType); 2 = RENAME (rename only, must pass FileName, forbid passing ParentFolderPath / FileConfig / Storage / Bundle*); 3 = MOVE (move only, must pass ParentFolderPath, forbid passing FileName / FileConfig / Storage / Bundle*). A ParamIllegal error will be returned if parameter mutual exclusion verification fails</p>
     */
    public $UpdateAction;

    /**
     * @param string $WorkspaceId <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API</p>
     * @param string $FileId <p>File ID. Source: FileId returned by the CreateFile / ListFiles / GetFile APIs</p>
     * @param FileConfig $FileConfig <p>File operation configuration. If not passed, the configuration will not be updated.</p>
     * @param string $FileType <p>File type. Parameter Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     * @param string $BundleId <p>Bound BundleId. Source: BundleId returned by the ListBundles API</p>
     * @param string $BundleInfo <p>Bound BundleInfo, JSON string</p>
     * @param FileStorage $Storage <p>File content. If not passed, the content will not be updated.</p>
     * @param string $FileName <p>Target file name. When it is not empty and different from the current file name, perform the rename action. Length not exceeding SCRIPT_NAME_MAX_LENGTH. It must not begin or end with . or .., and spaces, double dots, control characters, and Linux reserved names are forbidden (see docs/linux_filename_rules.md). Validate the suffix legitimacy together with ExtensionType.</p>
     * @param string $ParentFolderPath <p>Target parent directory path. If not empty, execute the move action. For the root directory, pass /; it can simultaneously appear with FileName, with the semantics of "move + rename". It should be consistent with ParentFolderPath of CreateFile.</p>
     * @param string $TargetFileType <p>FileType of the target parent directory. Value: FOLDER, GIT_FOLDER. Used only when ParentFolderPath is not empty; by default, it is handled based on the actual type of the parsed parent directory</p>
     * @param integer $UpdateAction <p>Action type (optional, default value: 1, mandatory verification in future versions). Value: 1 = UPDATE_CONTENT (only refresh FileConfig / Storage / Bundle*, forbid passing FileName / ParentFolderPath / TargetFileType); 2 = RENAME (rename only, must pass FileName, forbid passing ParentFolderPath / FileConfig / Storage / Bundle*); 3 = MOVE (move only, must pass ParentFolderPath, forbid passing FileName / FileConfig / Storage / Bundle*). A ParamIllegal error will be returned if parameter mutual exclusion verification fails</p>
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileConfig",$param) and $param["FileConfig"] !== null) {
            $this->FileConfig = new FileConfig();
            $this->FileConfig->deserialize($param["FileConfig"]);
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("TargetFileType",$param) and $param["TargetFileType"] !== null) {
            $this->TargetFileType = $param["TargetFileType"];
        }

        if (array_key_exists("UpdateAction",$param) and $param["UpdateAction"] !== null) {
            $this->UpdateAction = $param["UpdateAction"];
        }
    }
}
