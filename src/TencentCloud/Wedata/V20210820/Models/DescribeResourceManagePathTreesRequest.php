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
 * DescribeResourceManagePathTrees request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getName() Obtain Name, for search
 * @method void setName(string $Name) Set Name, for search
 * @method string getFileType() Obtain File Type
 * @method void setFileType(string $FileType) Set File Type
 * @method string getFilePath() Obtain File path
 * @method void setFilePath(string $FilePath) Set File path
 * @method string getDirType() Obtain Folder Type
personal individual
project Item
resource
 * @method void setDirType(string $DirType) Set Folder Type
personal individual
project Item
resource
 */
class DescribeResourceManagePathTreesRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Name, for search
     */
    public $Name;

    /**
     * @var string File Type
     */
    public $FileType;

    /**
     * @var string File path
     */
    public $FilePath;

    /**
     * @var string Folder Type
personal individual
project Item
resource
     */
    public $DirType;

    /**
     * @param string $ProjectId Project ID
     * @param string $Name Name, for search
     * @param string $FileType File Type
     * @param string $FilePath File path
     * @param string $DirType Folder Type
personal individual
project Item
resource
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("DirType",$param) and $param["DirType"] !== null) {
            $this->DirType = $param["DirType"];
        }
    }
}
