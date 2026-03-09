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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProject request structure.
 *
 * @method string getProjectId() Obtain Modify the project ID.
 * @method void setProjectId(string $ProjectId) Set Modify the project ID.
 * @method string getDisplayName() Obtain Project display name can be a chinese name and must be unique within the tenant scope.
 * @method void setDisplayName(string $DisplayName) Set Project display name can be a chinese name and must be unique within the tenant scope.
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method string getProjectOwnerUin() Obtain Project leader id.
 * @method void setProjectOwnerUin(string $ProjectOwnerUin) Set Project leader id.
 */
class UpdateProjectRequest extends AbstractModel
{
    /**
     * @var string Modify the project ID.
     */
    public $ProjectId;

    /**
     * @var string Project display name can be a chinese name and must be unique within the tenant scope.
     */
    public $DisplayName;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var string Project leader id.
     */
    public $ProjectOwnerUin;

    /**
     * @param string $ProjectId Modify the project ID.
     * @param string $DisplayName Project display name can be a chinese name and must be unique within the tenant scope.
     * @param string $Description Remarks
     * @param string $ProjectOwnerUin Project leader id.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProjectOwnerUin",$param) and $param["ProjectOwnerUin"] !== null) {
            $this->ProjectOwnerUin = $param["ProjectOwnerUin"];
        }
    }
}
