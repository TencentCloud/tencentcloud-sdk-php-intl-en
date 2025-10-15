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
 * CreateCodeFile request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getCodeFileName() Obtain Filename of the code file.
 * @method void setCodeFileName(string $CodeFileName) Set Filename of the code file.
 * @method string getParentFolderPath() Obtain Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.
 * @method CodeFileConfig getCodeFileConfig() Obtain Specifies the code file configuration.
 * @method void setCodeFileConfig(CodeFileConfig $CodeFileConfig) Set Specifies the code file configuration.
 * @method string getCodeFileContent() Obtain Specifies the code file content.
 * @method void setCodeFileContent(string $CodeFileContent) Set Specifies the code file content.
 */
class CreateCodeFileRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Filename of the code file.
     */
    public $CodeFileName;

    /**
     * @var string Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.
     */
    public $ParentFolderPath;

    /**
     * @var CodeFileConfig Specifies the code file configuration.
     */
    public $CodeFileConfig;

    /**
     * @var string Specifies the code file content.
     */
    public $CodeFileContent;

    /**
     * @param string $ProjectId Project ID.
     * @param string $CodeFileName Filename of the code file.
     * @param string $ParentFolderPath Parent folder path, such as /aaa/bbb/ccc. the path must start with a slash. use / for the root directory.
     * @param CodeFileConfig $CodeFileConfig Specifies the code file configuration.
     * @param string $CodeFileContent Specifies the code file content.
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

        if (array_key_exists("CodeFileName",$param) and $param["CodeFileName"] !== null) {
            $this->CodeFileName = $param["CodeFileName"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("CodeFileConfig",$param) and $param["CodeFileConfig"] !== null) {
            $this->CodeFileConfig = new CodeFileConfig();
            $this->CodeFileConfig->deserialize($param["CodeFileConfig"]);
        }

        if (array_key_exists("CodeFileContent",$param) and $param["CodeFileContent"] !== null) {
            $this->CodeFileContent = $param["CodeFileContent"];
        }
    }
}
