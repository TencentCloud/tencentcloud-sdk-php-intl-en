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
 * GetFile request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API.</p>
 * @method string getFileId() Obtain <p>File ID. Source: FileId returned by the CreateFile / ListFiles API. Choose either this or FilePath</p>
 * @method void setFileId(string $FileId) Set <p>File ID. Source: FileId returned by the CreateFile / ListFiles API. Choose either this or FilePath</p>
 * @method string getFileType() Obtain <p>File type. Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method void setFileType(string $FileType) Set <p>File type. Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
 * @method boolean getIncludeContent() Obtain <p>Whether to return file content. If true, Storage.Content returns base64 content. false by default</p>
 * @method void setIncludeContent(boolean $IncludeContent) Set <p>Whether to return file content. If true, Storage.Content returns base64 content. false by default</p>
 * @method string getVersionId() Obtain <p>File version ID. Source: VersionId returned by the ListFileVersions API. If not specified, the latest version is read.</p>
 * @method void setVersionId(string $VersionId) Set <p>File version ID. Source: VersionId returned by the ListFileVersions API. If not specified, the latest version is read.</p>
 * @method string getFilePath() Obtain <p>Full path of the file, beginning with /, for example /etl/daily/demo.ipynb. Either this or FileId</p>
 * @method void setFilePath(string $FilePath) Set <p>Full path of the file, beginning with /, for example /etl/daily/demo.ipynb. Either this or FileId</p>
 */
class GetFileRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API.</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>File ID. Source: FileId returned by the CreateFile / ListFiles API. Choose either this or FilePath</p>
     */
    public $FileId;

    /**
     * @var string <p>File type. Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     */
    public $FileType;

    /**
     * @var boolean <p>Whether to return file content. If true, Storage.Content returns base64 content. false by default</p>
     */
    public $IncludeContent;

    /**
     * @var string <p>File version ID. Source: VersionId returned by the ListFileVersions API. If not specified, the latest version is read.</p>
     */
    public $VersionId;

    /**
     * @var string <p>Full path of the file, beginning with /, for example /etl/daily/demo.ipynb. Either this or FileId</p>
     */
    public $FilePath;

    /**
     * @param string $WorkspaceId <p>Workspace ID. Source: WorkspaceId returned by the ListWorkspaces API.</p>
     * @param string $FileId <p>File ID. Source: FileId returned by the CreateFile / ListFiles API. Choose either this or FilePath</p>
     * @param string $FileType <p>File type. Value: FILE (regular file/script), NOTEBOOK_FILE (Notebook), SQL_FILE (SQL file). Corresponds to common/domain/entity.proto EntityType</p>
     * @param boolean $IncludeContent <p>Whether to return file content. If true, Storage.Content returns base64 content. false by default</p>
     * @param string $VersionId <p>File version ID. Source: VersionId returned by the ListFileVersions API. If not specified, the latest version is read.</p>
     * @param string $FilePath <p>Full path of the file, beginning with /, for example /etl/daily/demo.ipynb. Either this or FileId</p>
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("IncludeContent",$param) and $param["IncludeContent"] !== null) {
            $this->IncludeContent = $param["IncludeContent"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }
    }
}
