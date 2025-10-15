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
 * RunSQLScript request structure.
 *
 * @method string getScriptId() Obtain Script id.
 * @method void setScriptId(string $ScriptId) Set Script id.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getScriptContent() Obtain Script content. executed by default if not transmitted. requires Base64 encoding if transmitted.
 * @method void setScriptContent(string $ScriptContent) Set Script content. executed by default if not transmitted. requires Base64 encoding if transmitted.
 * @method string getParams() Obtain Advanced running parameter, JSON format base64 encode.
 * @method void setParams(string $Params) Set Advanced running parameter, JSON format base64 encode.
 */
class RunSQLScriptRequest extends AbstractModel
{
    /**
     * @var string Script id.
     */
    public $ScriptId;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Script content. executed by default if not transmitted. requires Base64 encoding if transmitted.
     */
    public $ScriptContent;

    /**
     * @var string Advanced running parameter, JSON format base64 encode.
     */
    public $Params;

    /**
     * @param string $ScriptId Script id.
     * @param string $ProjectId Project ID.
     * @param string $ScriptContent Script content. executed by default if not transmitted. requires Base64 encoding if transmitted.
     * @param string $Params Advanced running parameter, JSON format base64 encode.
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
        if (array_key_exists("ScriptId",$param) and $param["ScriptId"] !== null) {
            $this->ScriptId = $param["ScriptId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }
    }
}
