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
 * CreateSQLFolder request structure.
 *
 * @method string getFolderName() Obtain Folder name.
 * @method void setFolderName(string $FolderName) Set Folder name.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getParentFolderPath() Obtain Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
 * @method string getAccessScope() Obtain Access permission: SHARED, PRIVATE.
 * @method void setAccessScope(string $AccessScope) Set Access permission: SHARED, PRIVATE.
 */
class CreateSQLFolderRequest extends AbstractModel
{
    /**
     * @var string Folder name.
     */
    public $FolderName;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
     */
    public $ParentFolderPath;

    /**
     * @var string Access permission: SHARED, PRIVATE.
     */
    public $AccessScope;

    /**
     * @param string $FolderName Folder name.
     * @param string $ProjectId Project ID.
     * @param string $ParentFolderPath Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
     * @param string $AccessScope Access permission: SHARED, PRIVATE.
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
        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
