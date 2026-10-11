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
 * CreateWorkspace request structure.
 *
 * @method string getWorkspaceName() Obtain <p>Workspace name. max_len=128</p>
 * @method void setWorkspaceName(string $WorkspaceName) Set <p>Workspace name. max_len=128</p>
 * @method string getWorkspaceRegion() Obtain <p>Workspace region (for example, ap-guangzhou), max_len=64</p>
 * @method void setWorkspaceRegion(string $WorkspaceRegion) Set <p>Workspace region (for example, ap-guangzhou), max_len=64</p>
 * @method string getDescription() Obtain <p>Workspace description, max_len=300</p>
 * @method void setDescription(string $Description) Set <p>Workspace description, max_len=300</p>
 */
class CreateWorkspaceRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace name. max_len=128</p>
     */
    public $WorkspaceName;

    /**
     * @var string <p>Workspace region (for example, ap-guangzhou), max_len=64</p>
     */
    public $WorkspaceRegion;

    /**
     * @var string <p>Workspace description, max_len=300</p>
     */
    public $Description;

    /**
     * @param string $WorkspaceName <p>Workspace name. max_len=128</p>
     * @param string $WorkspaceRegion <p>Workspace region (for example, ap-guangzhou), max_len=64</p>
     * @param string $Description <p>Workspace description, max_len=300</p>
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
        if (array_key_exists("WorkspaceName",$param) and $param["WorkspaceName"] !== null) {
            $this->WorkspaceName = $param["WorkspaceName"];
        }

        if (array_key_exists("WorkspaceRegion",$param) and $param["WorkspaceRegion"] !== null) {
            $this->WorkspaceRegion = $param["WorkspaceRegion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
