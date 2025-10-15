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
 * ListSQLFolderContents request structure.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method string getParentFolderPath() Obtain Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
 * @method string getKeyword() Obtain Folder name or script name search.
 * @method void setKeyword(string $Keyword) Set Folder name or script name search.
 * @method boolean getOnlyFolderNode() Obtain Queries only the folder.
 * @method void setOnlyFolderNode(boolean $OnlyFolderNode) Set Queries only the folder.
 * @method boolean getOnlyUserSelfScript() Obtain Specifies whether to query only scripts created by the user themselves.
 * @method void setOnlyUserSelfScript(boolean $OnlyUserSelfScript) Set Specifies whether to query only scripts created by the user themselves.
 * @method string getAccessScope() Obtain Access permission: SHARED, PRIVATE.
 * @method void setAccessScope(string $AccessScope) Set Access permission: SHARED, PRIVATE.
 */
class ListSQLFolderContentsRequest extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var string Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
     */
    public $ParentFolderPath;

    /**
     * @var string Folder name or script name search.
     */
    public $Keyword;

    /**
     * @var boolean Queries only the folder.
     */
    public $OnlyFolderNode;

    /**
     * @var boolean Specifies whether to query only scripts created by the user themselves.
     */
    public $OnlyUserSelfScript;

    /**
     * @var string Access permission: SHARED, PRIVATE.
     */
    public $AccessScope;

    /**
     * @param string $ProjectId Project ID.

     * @param string $ParentFolderPath Parent folder path, /aaa/bbb/ccc. path header must include a slash. pass / to query the root directory.
     * @param string $Keyword Folder name or script name search.
     * @param boolean $OnlyFolderNode Queries only the folder.
     * @param boolean $OnlyUserSelfScript Specifies whether to query only scripts created by the user themselves.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("OnlyFolderNode",$param) and $param["OnlyFolderNode"] !== null) {
            $this->OnlyFolderNode = $param["OnlyFolderNode"];
        }

        if (array_key_exists("OnlyUserSelfScript",$param) and $param["OnlyUserSelfScript"] !== null) {
            $this->OnlyUserSelfScript = $param["OnlyUserSelfScript"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
