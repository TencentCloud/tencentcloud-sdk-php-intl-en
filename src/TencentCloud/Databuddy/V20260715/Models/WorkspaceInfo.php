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
 * Workspace information
 *
 * @method string getWorkspaceId() Obtain Workspace ID
 * @method void setWorkspaceId(string $WorkspaceId) Set Workspace ID
 * @method string getWorkspaceName() Obtain Workspace name
 * @method void setWorkspaceName(string $WorkspaceName) Set Workspace name
 * @method string getDescription() Obtain Workspace description
 * @method void setDescription(string $Description) Set Workspace description
 * @method string getWorkspaceRegion() Obtain Workspace region (for example, ap-guangzhou)
 * @method void setWorkspaceRegion(string $WorkspaceRegion) Set Workspace region (for example, ap-guangzhou)
 * @method integer getStatus() Obtain Workspace status: 0=unspecified, 1=creating, 2=creation failed, 3=operating normally, 4=deleted.
 * @method void setStatus(integer $Status) Set Workspace status: 0=unspecified, 1=creating, 2=creation failed, 3=operating normally, 4=deleted.
 * @method string getErrorReason() Obtain Failure reason (valid when Status=2, indicating creation failure)
 * @method void setErrorReason(string $ErrorReason) Set Failure reason (valid when Status=2, indicating creation failure)
 * @method StandardUserInfo getCreator() Obtain Creator information
 * @method void setCreator(StandardUserInfo $Creator) Set Creator information
 * @method string getCreateTime() Obtain Creation time. Millisecond timestamp
 * @method void setCreateTime(string $CreateTime) Set Creation time. Millisecond timestamp
 * @method string getUpdateTime() Obtain Last update time. Timestamp in milliseconds
 * @method void setUpdateTime(string $UpdateTime) Set Last update time. Timestamp in milliseconds
 * @method boolean getHasAccess() Obtain Whether the current user has access permission for the workspace
 * @method void setHasAccess(boolean $HasAccess) Set Whether the current user has access permission for the workspace
 */
class WorkspaceInfo extends AbstractModel
{
    /**
     * @var string Workspace ID
     */
    public $WorkspaceId;

    /**
     * @var string Workspace name
     */
    public $WorkspaceName;

    /**
     * @var string Workspace description
     */
    public $Description;

    /**
     * @var string Workspace region (for example, ap-guangzhou)
     */
    public $WorkspaceRegion;

    /**
     * @var integer Workspace status: 0=unspecified, 1=creating, 2=creation failed, 3=operating normally, 4=deleted.
     */
    public $Status;

    /**
     * @var string Failure reason (valid when Status=2, indicating creation failure)
     */
    public $ErrorReason;

    /**
     * @var StandardUserInfo Creator information
     */
    public $Creator;

    /**
     * @var string Creation time. Millisecond timestamp
     */
    public $CreateTime;

    /**
     * @var string Last update time. Timestamp in milliseconds
     */
    public $UpdateTime;

    /**
     * @var boolean Whether the current user has access permission for the workspace
     */
    public $HasAccess;

    /**
     * @param string $WorkspaceId Workspace ID
     * @param string $WorkspaceName Workspace name
     * @param string $Description Workspace description
     * @param string $WorkspaceRegion Workspace region (for example, ap-guangzhou)
     * @param integer $Status Workspace status: 0=unspecified, 1=creating, 2=creation failed, 3=operating normally, 4=deleted.
     * @param string $ErrorReason Failure reason (valid when Status=2, indicating creation failure)
     * @param StandardUserInfo $Creator Creator information
     * @param string $CreateTime Creation time. Millisecond timestamp
     * @param string $UpdateTime Last update time. Timestamp in milliseconds
     * @param boolean $HasAccess Whether the current user has access permission for the workspace
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

        if (array_key_exists("WorkspaceName",$param) and $param["WorkspaceName"] !== null) {
            $this->WorkspaceName = $param["WorkspaceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkspaceRegion",$param) and $param["WorkspaceRegion"] !== null) {
            $this->WorkspaceRegion = $param["WorkspaceRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorReason",$param) and $param["ErrorReason"] !== null) {
            $this->ErrorReason = $param["ErrorReason"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new StandardUserInfo();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HasAccess",$param) and $param["HasAccess"] !== null) {
            $this->HasAccess = $param["HasAccess"];
        }
    }
}
