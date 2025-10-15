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
 * Data exploration script configuration.
 *
 * @method string getParams() Obtain Advanced running parameter variable replacement map-json String,String.

 * @method void setParams(string $Params) Set Advanced running parameter variable replacement map-json String,String.

 * @method NotebookSessionInfo getNotebookSessionInfo() Obtain notebook kernel session information.

 * @method void setNotebookSessionInfo(NotebookSessionInfo $NotebookSessionInfo) Set notebook kernel session information.
 */
class CodeFileConfig extends AbstractModel
{
    /**
     * @var string Advanced running parameter variable replacement map-json String,String.

     */
    public $Params;

    /**
     * @var NotebookSessionInfo notebook kernel session information.

     */
    public $NotebookSessionInfo;

    /**
     * @param string $Params Advanced running parameter variable replacement map-json String,String.

     * @param NotebookSessionInfo $NotebookSessionInfo notebook kernel session information.
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
        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("NotebookSessionInfo",$param) and $param["NotebookSessionInfo"] !== null) {
            $this->NotebookSessionInfo = new NotebookSessionInfo();
            $this->NotebookSessionInfo->deserialize($param["NotebookSessionInfo"]);
        }
    }
}
