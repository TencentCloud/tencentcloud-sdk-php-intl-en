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
 * notebook kernel session information.
 *
 * @method string getNotebookSessionId() Obtain Specifies the session ID.
 * @method void setNotebookSessionId(string $NotebookSessionId) Set Specifies the session ID.
 * @method string getNotebookSessionName() Obtain Session Name
 * @method void setNotebookSessionName(string $NotebookSessionName) Set Session Name
 */
class NotebookSessionInfo extends AbstractModel
{
    /**
     * @var string Specifies the session ID.
     */
    public $NotebookSessionId;

    /**
     * @var string Session Name
     */
    public $NotebookSessionName;

    /**
     * @param string $NotebookSessionId Specifies the session ID.
     * @param string $NotebookSessionName Session Name
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
        if (array_key_exists("NotebookSessionId",$param) and $param["NotebookSessionId"] !== null) {
            $this->NotebookSessionId = $param["NotebookSessionId"];
        }

        if (array_key_exists("NotebookSessionName",$param) and $param["NotebookSessionName"] !== null) {
            $this->NotebookSessionName = $param["NotebookSessionName"];
        }
    }
}
