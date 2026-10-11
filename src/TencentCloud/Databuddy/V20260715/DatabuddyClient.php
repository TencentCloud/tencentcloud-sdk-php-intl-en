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

namespace TencentCloud\Databuddy\V20260715;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Databuddy\V20260715\Models as Models;

/**
 * @method Models\AddConsoleUsersResponse AddConsoleUsers(Models\AddConsoleUsersRequest $req) Add a console user
 * @method Models\AddWorkspaceGroupsResponse AddWorkspaceGroups(Models\AddWorkspaceGroupsRequest $req) This API is used to add a user group to a workspace.
 * @method Models\AddWorkspaceUsersResponse AddWorkspaceUsers(Models\AddWorkspaceUsersRequest $req) This API is used to create user groups.
 * @method Models\CreateCatalogResponse CreateCatalog(Models\CreateCatalogRequest $req) This API is used to create a data catalog.
 * @method Models\CreateConsoleGroupResponse CreateConsoleGroup(Models\CreateConsoleGroupRequest $req) Create a console user group
 * @method Models\CreateFileResponse CreateFile(Models\CreateFileRequest $req) Create a new file (Notebook/SQL/Python, etc.) in the workspace file tree of Studio (unified development IDE), and return the complete meta-information of the file upon success.

**Prerequisite**
1. WorkspaceId corresponds to an existent workspace, and the caller is a space member of this workspace;
2. The parent folder corresponding to ParentFolderPath must exist, and the caller must have write permission on it (pass `/` for the root directory);
3. FileName must be unique under the same parent folder, including suffix comparison.
4. The FileName suffix must be consistent with FileType (`.ipynb`↔`NOTEBOOK_FILE`, `.sql`↔`SQL_FILE`);
5. To create with file content, pass it through Storage (large files are transferred via COS, and small files are placed in Storage.Content).
 * @method Models\CreateFolderResponse CreateFolder(Models\CreateFolderRequest $req) Create a folder
 * @method Models\CreateSchemaResponse CreateSchema(Models\CreateSchemaRequest $req) Create a schema
 * @method Models\CreateWorkflowResponse CreateWorkflow(Models\CreateWorkflowRequest $req) Create a workflow
 * @method Models\CreateWorkspaceResponse CreateWorkspace(Models\CreateWorkspaceRequest $req) This API is used to create a workspace.
 * @method Models\CreateWorkspaceRoleResponse CreateWorkspaceRole(Models\CreateWorkspaceRoleRequest $req) Creates a workspace role
 * @method Models\DeleteCatalogResponse DeleteCatalog(Models\DeleteCatalogRequest $req) Delete a catalog.
 * @method Models\DeleteConsoleGroupsResponse DeleteConsoleGroups(Models\DeleteConsoleGroupsRequest $req) Delete a console user group
 * @method Models\DeleteFileResponse DeleteFile(Models\DeleteFileRequest $req) Move the file to Recycle Bin (soft deletion) and clear its version history and execution result snapshots.

**Prerequisite**
1. The file corresponding to FileId must exist and be in active status;
2. The caller has permission to delete the file;
3. The file hasn't been referenced by a workflow task.

**Error codes (Module are all `Studio`)**

| Error Code (Code) | InnerCode | Description | Handling Suggestion |
| --- | --- | --- | --- |
| `MissingParameter.WorkspaceId` | 1030001 | lack of WorkspaceId | Please input WorkspaceId |
| `MissingParameter.FileId` | 1030003 | lack of FileId | Please import FileId |
| `InvalidParameterValue.FileType` | 1030102 | FileType value not supported | FileType takes FILE/NOTEBOOK_FILE/SQL_FILE |
| `ResourceNotFound.FileNotFound` | 1030203 | File does not exist or has been deleted | Please confirm the FileId |
| `ResourceInUse.FileReferencedByTask` | 1030204 | The file is referenced by a workflow task and cannot be deleted. | Disassociate the task reference first. |
| `UnauthorizedOperation.FileDeleteDenied` | 1030303 | No deletion permission for this file | Contact the file owner or space admin for authorization |
| `InternalError` | 1030900 | Internal service error | Please carry the RequestId and contact support |
 * @method Models\DeleteFolderResponse DeleteFolder(Models\DeleteFolderRequest $req) Delete folder
 * @method Models\DeleteSchemaResponse DeleteSchema(Models\DeleteSchemaRequest $req) Delete schema
 * @method Models\DeleteWorkflowResponse DeleteWorkflow(Models\DeleteWorkflowRequest $req) Deletes a workflow
 * @method Models\DeleteWorkspaceResponse DeleteWorkspace(Models\DeleteWorkspaceRequest $req) Delete a workspace.
 * @method Models\DeleteWorkspaceRoleResponse DeleteWorkspaceRole(Models\DeleteWorkspaceRoleRequest $req) Delete a workspace role.
 * @method Models\GetCatalogResponse GetCatalog(Models\GetCatalogRequest $req) Query catalog description
 * @method Models\GetFileResponse GetFile(Models\GetFileRequest $req) Get the file's metadata, optionally including file content, and read historical snapshots by version.

**Prerequisite**
1. Pass at least one of FileId and FilePath. If both are passed, FileId takes precedence.
2. The corresponding file must exist, and the caller must have read permission for the file;
3. If VersionId is passed, the version must exist.

**Error codes (Module: `Studio`)**

| Error Code | Inner Code | Description | Handling Suggestion |
| --- | --- | --- | --- |
| `MissingParameter.WorkspaceId` | 1030001 | Lack of WorkspaceId | Please input WorkspaceId |
| `MissingParameter.FileId` | 1030003 | FileId and FilePath cannot be empty at the same time | Pass at least one of FileId and FilePath |
| `InvalidParameterValue.FileType` | 1030102 | FileType value unsupported | FileType takes FILE/NOTEBOOK_FILE/SQL_FILE |
| `ResourceNotFound.FileNotFound` | 1030203 | File does not exist or has been deleted | Confirm the FileId or FilePath |
| `ResourceNotFound.FileVersionNotFound` | 1030205 | The specified file version does not exist | Confirm the VersionId or call ListFileVersions to retrieve |
| `UnauthorizedOperation.FileReadDenied` | 1030304 | No read permission for this file | Contact the file owner or space admin for authorization |
| `InternalError` | 1030900 | Internal service error | Please carry the RequestId and contact support |
 * @method Models\GetFolderResponse GetFolder(Models\GetFolderRequest $req) Get folder details.
 * @method Models\GetWorkflowResponse GetWorkflow(Models\GetWorkflowRequest $req) This API is used to query workflow details.
 * @method Models\GetWorkflowRunResponse GetWorkflowRun(Models\GetWorkflowRunRequest $req) Queries workflow running details.
 * @method Models\GetWorkflowTaskRunResponse GetWorkflowTaskRun(Models\GetWorkflowTaskRunRequest $req) Query task execution details
 * @method Models\GetWorkspaceResponse GetWorkspace(Models\GetWorkspaceRequest $req) Queries the details of a workspace.
 * @method Models\KillWorkflowRunResponse KillWorkflowRun(Models\KillWorkflowRunRequest $req) Terminate the operation of a workflow.
 * @method Models\ListCatalogsResponse ListCatalogs(Models\ListCatalogsRequest $req) Pagination fetch data catalog list
 * @method Models\ListConsoleGroupUsersResponse ListConsoleGroupUsers(Models\ListConsoleGroupUsersRequest $req) Queries the console user group member list. This API is a console-level API and is only supported in the central region: use ap-guangzhou for the Chinese site and ap-singapore for the international site. Calls from other regions will return UnsupportedRegion.
 * @method Models\ListConsoleGroupsResponse ListConsoleGroups(Models\ListConsoleGroupsRequest $req) Queries the console user group list. This API is a console-level API and is only supported in the central region: use ap-guangzhou for the Chinese site and ap-singapore for the international site. Calls from other regions will return UnsupportedRegion.
 * @method Models\ListConsoleRolesResponse ListConsoleRoles(Models\ListConsoleRolesRequest $req) Queries the console role list. This API is a console-level API and is only supported in the central region: use ap-guangzhou for the Chinese site and ap-singapore for the international site. Calls from other regions will return UnsupportedRegion.
 * @method Models\ListConsoleUsersResponse ListConsoleUsers(Models\ListConsoleUsersRequest $req) Queries the console user list. This API is a console-level API and is only supported in the central region: use ap-guangzhou for the Chinese site and ap-singapore for the international site. Calls from other regions will return UnsupportedRegion.
 * @method Models\ListFilesResponse ListFiles(Models\ListFilesRequest $req) Get the folder and file list
 * @method Models\ListSchemasResponse ListSchemas(Models\ListSchemasRequest $req) Get schema list
 * @method Models\ListWorkflowRunsResponse ListWorkflowRuns(Models\ListWorkflowRunsRequest $req) Workflow run list
 * @method Models\ListWorkflowTaskRunsResponse ListWorkflowTaskRuns(Models\ListWorkflowTaskRunsRequest $req) Query the historical operation list of workflow tasks
 * @method Models\ListWorkflowsResponse ListWorkflows(Models\ListWorkflowsRequest $req) This API is used to query the list of workflows.
 * @method Models\ListWorkspaceGroupsResponse ListWorkspaceGroups(Models\ListWorkspaceGroupsRequest $req) This API is used to query the list of user groups in a workspace.
 * @method Models\ListWorkspaceUsersResponse ListWorkspaceUsers(Models\ListWorkspaceUsersRequest $req) Queries the list of users in a workspace.
 * @method Models\ListWorkspacesResponse ListWorkspaces(Models\ListWorkspacesRequest $req) Queries the workspace list.
 * @method Models\RemoveConsoleUsersResponse RemoveConsoleUsers(Models\RemoveConsoleUsersRequest $req) <p>Batch remove console users (up to 10 at a time; pre-verification rejects the entire request if any fails; during the Execution Phase, a single failure does not interrupt subsequent deletion, and success or failure is determined by SuccessUins/FailItems)</p>
 * @method Models\RemoveWorkspaceGroupsResponse RemoveWorkspaceGroups(Models\RemoveWorkspaceGroupsRequest $req) Remove a user group from a workspace.
 * @method Models\RerunWorkflowRunResponse RerunWorkflowRun(Models\RerunWorkflowRunRequest $req) Rerun a workflow
 * @method Models\RunWorkflowResponse RunWorkflow(Models\RunWorkflowRequest $req) Runs the workflow
 * @method Models\StartComputeResponse StartCompute(Models\StartComputeRequest $req) Start up the computational resource.
 * @method Models\StopComputeResponse StopCompute(Models\StopComputeRequest $req) Terminate computational resources
 * @method Models\UnbindWorkflowBundleResponse UnbindWorkflowBundle(Models\UnbindWorkflowBundleRequest $req) Unbind workflow Bundle info
Description: This interface is semantically equivalent to Detach in the standard verb list. The name Unbind is retained for compatibility with existing product forms.
 * @method Models\UpdateConsoleGroupResponse UpdateConsoleGroup(Models\UpdateConsoleGroupRequest $req) Modify a console user group
 * @method Models\UpdateConsoleUsersResponse UpdateConsoleUsers(Models\UpdateConsoleUsersRequest $req) Modify a console user role
 * @method Models\UpdateFileResponse UpdateFile(Models\UpdateFileRequest $req) Update file contents and running configuration (computational resource, default catalog/schema, parameters), and return the file metadata after the update.

**Prerequisite**
1. The file corresponding to FileId must exist and be in active status;
2. The caller has write permission on the file;
3. To update only the configuration, do not pass in Storage. To update only the content, do not pass in FileConfig.
4. If FileConfig.ResourceId is not empty, the match between the resource type and file type will be validated.

**Error codes (Module: `Studio`)**

| Error Code (Code) | InnerCode | Description | Handling Suggestions |
| --- | --- | --- | --- |
| `MissingParameter.WorkspaceId` | 1030001 | lack of WorkspaceId | Please input WorkspaceId |
| `MissingParameter.FileId` | 1030003 | lack of FileId | Please import FileId |
| `InvalidParameterValue.FileType` | 1030102 | FileType value not supported | FileType takes FILE/NOTEBOOK_FILE/SQL_FILE |
| `InvalidParameterValue.ResourceId` | 1030104 | Compute resource type and file type mismatch | Select a computational resource for Python/Notebook and a data analysis resource for SQL |
| `ResourceNotFound.FileNotFound` | 1030203 | File does not exist or has been deleted | confirm the FileId or call GetFile to check the file status |
| `UnauthorizedOperation.FileWriteDenied` | 1030302 | No write permission for this file | Contact the file owner or space admin for authorization |
| `FailedOperation.FileStorageUpdateFailed` | 1030401 | Failed to write file content to storage | Try again later. If the failure persists, contact support with the RequestId. |
| `InternalError` | 1030900 | Internal service error | Please carry the RequestId and contact support |
 * @method Models\UpdateFolderResponse UpdateFolder(Models\UpdateFolderRequest $req) Update folder (supports rename and move)
 * @method Models\UpdateWorkflowResponse UpdateWorkflow(Models\UpdateWorkflowRequest $req) Updating a Workflow
 * @method Models\UpdateWorkspaceResponse UpdateWorkspace(Models\UpdateWorkspaceRequest $req) Modifies a workspace
 * @method Models\UpdateWorkspaceRoleResponse UpdateWorkspaceRole(Models\UpdateWorkspaceRoleRequest $req) Updates a workspace role
 */

class DatabuddyClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "databuddy.intl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "databuddy";

    /**
     * @var string
     */
    protected $version = "2026-07-15";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("databuddy")."\\"."V20260715\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
