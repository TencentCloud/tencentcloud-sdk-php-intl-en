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
 * UpdateCodeFolder request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getFolderId() Obtain Folder ID. The parameter value can be obtained from the response of the CreateCodeFolder API.
 * @method void setFolderId(string $FolderId) Set Folder ID. The parameter value can be obtained from the response of the CreateCodeFolder API.
 * @method string getFolderName() Obtain Folder name.
 * @method void setFolderName(string $FolderName) Set Folder name.
 */
class UpdateCodeFolderRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Folder ID. The parameter value can be obtained from the response of the CreateCodeFolder API.
     */
    public $FolderId;

    /**
     * @var string Folder name.
     */
    public $FolderName;

    /**
     * @param string $ProjectId Project ID.
     * @param string $FolderId Folder ID. The parameter value can be obtained from the response of the CreateCodeFolder API.
     * @param string $FolderName Folder name.
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

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }
    }
}
