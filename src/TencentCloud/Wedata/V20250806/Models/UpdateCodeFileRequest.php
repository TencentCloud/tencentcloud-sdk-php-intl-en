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
 * UpdateCodeFile request structure.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getCodeFileId() Obtain Code file ID. the parameter value comes from the CreateCodeFile API response.
 * @method void setCodeFileId(string $CodeFileId) Set Code file ID. the parameter value comes from the CreateCodeFile API response.
 * @method CodeFileConfig getCodeFileConfig() Obtain Specifies the code file configuration.
 * @method void setCodeFileConfig(CodeFileConfig $CodeFileConfig) Set Specifies the code file configuration.
 * @method string getCodeFileContent() Obtain Specifies the content of the code file.
 * @method void setCodeFileContent(string $CodeFileContent) Set Specifies the content of the code file.
 */
class UpdateCodeFileRequest extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Code file ID. the parameter value comes from the CreateCodeFile API response.
     */
    public $CodeFileId;

    /**
     * @var CodeFileConfig Specifies the code file configuration.
     */
    public $CodeFileConfig;

    /**
     * @var string Specifies the content of the code file.
     */
    public $CodeFileContent;

    /**
     * @param string $ProjectId Project ID.
     * @param string $CodeFileId Code file ID. the parameter value comes from the CreateCodeFile API response.
     * @param CodeFileConfig $CodeFileConfig Specifies the code file configuration.
     * @param string $CodeFileContent Specifies the content of the code file.
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

        if (array_key_exists("CodeFileId",$param) and $param["CodeFileId"] !== null) {
            $this->CodeFileId = $param["CodeFileId"];
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
