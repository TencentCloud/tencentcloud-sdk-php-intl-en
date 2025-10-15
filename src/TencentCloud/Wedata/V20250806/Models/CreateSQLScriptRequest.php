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
 * CreateSQLScript request structure.
 *
 * @method string getScriptName() Obtain Script name.
 * @method void setScriptName(string $ScriptName) Set Script name.
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method string getParentFolderPath() Obtain Parent folder path, /aaa/bbb/ccc. root directory is empty string or /.
 * @method void setParentFolderPath(string $ParentFolderPath) Set Parent folder path, /aaa/bbb/ccc. root directory is empty string or /.
 * @method SQLScriptConfig getScriptConfig() Obtain Specifies the script configuration for data exploration.
 * @method void setScriptConfig(SQLScriptConfig $ScriptConfig) Set Specifies the script configuration for data exploration.
 * @method string getScriptContent() Obtain Specifies the script content, if any, needs to be base64 encoded.
 * @method void setScriptContent(string $ScriptContent) Set Specifies the script content, if any, needs to be base64 encoded.
 * @method string getAccessScope() Obtain Access permission: SHARED, PRIVATE.
 * @method void setAccessScope(string $AccessScope) Set Access permission: SHARED, PRIVATE.
 */
class CreateSQLScriptRequest extends AbstractModel
{
    /**
     * @var string Script name.
     */
    public $ScriptName;

    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var string Parent folder path, /aaa/bbb/ccc. root directory is empty string or /.
     */
    public $ParentFolderPath;

    /**
     * @var SQLScriptConfig Specifies the script configuration for data exploration.
     */
    public $ScriptConfig;

    /**
     * @var string Specifies the script content, if any, needs to be base64 encoded.
     */
    public $ScriptContent;

    /**
     * @var string Access permission: SHARED, PRIVATE.
     */
    public $AccessScope;

    /**
     * @param string $ScriptName Script name.
     * @param string $ProjectId Project ID.

     * @param string $ParentFolderPath Parent folder path, /aaa/bbb/ccc. root directory is empty string or /.
     * @param SQLScriptConfig $ScriptConfig Specifies the script configuration for data exploration.
     * @param string $ScriptContent Specifies the script content, if any, needs to be base64 encoded.
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
        if (array_key_exists("ScriptName",$param) and $param["ScriptName"] !== null) {
            $this->ScriptName = $param["ScriptName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ParentFolderPath",$param) and $param["ParentFolderPath"] !== null) {
            $this->ParentFolderPath = $param["ParentFolderPath"];
        }

        if (array_key_exists("ScriptConfig",$param) and $param["ScriptConfig"] !== null) {
            $this->ScriptConfig = new SQLScriptConfig();
            $this->ScriptConfig->deserialize($param["ScriptConfig"]);
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("AccessScope",$param) and $param["AccessScope"] !== null) {
            $this->AccessScope = $param["AccessScope"];
        }
    }
}
