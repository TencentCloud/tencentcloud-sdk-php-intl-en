<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDsFolder request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getFolderName() Obtain Folder Name
 * @method void setFolderName(string $FolderName) Set Folder Name
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getParentsFolderId() Obtain Parent Folder ID
 * @method void setParentsFolderId(string $ParentsFolderId) Set Parent Folder ID
 */
class ModifyDsFolderRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Folder Name
     */
    public $FolderName;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Parent Folder ID
     */
    public $ParentsFolderId;

    /**
     * @param string $ProjectId Project ID
     * @param string $FolderName Folder Name
     * @param string $FolderId Folder ID
     * @param string $ParentsFolderId Parent Folder ID
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

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }
    }
}
