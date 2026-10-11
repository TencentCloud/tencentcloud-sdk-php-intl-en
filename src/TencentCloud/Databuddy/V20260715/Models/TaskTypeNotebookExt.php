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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * (This object is abandoned in TaskType. Use TaskType.TaskTypePropertyList instead.) Notebook task extension
 *
 * @method string getSource() Obtain <p>SCRIPT SOURCE. Value: SCRIPT_SOURCE_LOCAL (LOCAL) / SCRIPT_SOURCE_GIT (GIT repository) /<br>SCRIPT_SOURCE_CFS (CFS file system) / SCRIPT_SOURCE_COS (cloud object storage) /<br>SCRIPT_SOURCE_WORKSPACE (WORKSPACE)</p>
 * @method void setSource(string $Source) Set <p>SCRIPT SOURCE. Value: SCRIPT_SOURCE_LOCAL (LOCAL) / SCRIPT_SOURCE_GIT (GIT repository) /<br>SCRIPT_SOURCE_CFS (CFS file system) / SCRIPT_SOURCE_COS (cloud object storage) /<br>SCRIPT_SOURCE_WORKSPACE (WORKSPACE)</p>
 * @method string getDisplayPath() Obtain <p>For frontend display usage, meaningless to the execution platform</p>
 * @method void setDisplayPath(string $DisplayPath) Set <p>For frontend display usage, meaningless to the execution platform</p>
 * @method string getNotebookPath() Obtain <p>Notebook relative path</p>
 * @method void setNotebookPath(string $NotebookPath) Set <p>Notebook relative path</p>
 * @method string getNotebookAbsolutePath() Obtain <p>Notebook absolute path</p>
 * @method void setNotebookAbsolutePath(string $NotebookAbsolutePath) Set <p>Notebook absolute path</p>
 */
class TaskTypeNotebookExt extends AbstractModel
{
    /**
     * @var string <p>SCRIPT SOURCE. Value: SCRIPT_SOURCE_LOCAL (LOCAL) / SCRIPT_SOURCE_GIT (GIT repository) /<br>SCRIPT_SOURCE_CFS (CFS file system) / SCRIPT_SOURCE_COS (cloud object storage) /<br>SCRIPT_SOURCE_WORKSPACE (WORKSPACE)</p>
     * @deprecated
     */
    public $Source;

    /**
     * @var string <p>For frontend display usage, meaningless to the execution platform</p>
     * @deprecated
     */
    public $DisplayPath;

    /**
     * @var string <p>Notebook relative path</p>
     * @deprecated
     */
    public $NotebookPath;

    /**
     * @var string <p>Notebook absolute path</p>
     * @deprecated
     */
    public $NotebookAbsolutePath;

    /**
     * @param string $Source <p>SCRIPT SOURCE. Value: SCRIPT_SOURCE_LOCAL (LOCAL) / SCRIPT_SOURCE_GIT (GIT repository) /<br>SCRIPT_SOURCE_CFS (CFS file system) / SCRIPT_SOURCE_COS (cloud object storage) /<br>SCRIPT_SOURCE_WORKSPACE (WORKSPACE)</p>
     * @param string $DisplayPath <p>For frontend display usage, meaningless to the execution platform</p>
     * @param string $NotebookPath <p>Notebook relative path</p>
     * @param string $NotebookAbsolutePath <p>Notebook absolute path</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DisplayPath",$param) and $param["DisplayPath"] !== null) {
            $this->DisplayPath = $param["DisplayPath"];
        }

        if (array_key_exists("NotebookPath",$param) and $param["NotebookPath"] !== null) {
            $this->NotebookPath = $param["NotebookPath"];
        }

        if (array_key_exists("NotebookAbsolutePath",$param) and $param["NotebookAbsolutePath"] !== null) {
            $this->NotebookAbsolutePath = $param["NotebookAbsolutePath"];
        }
    }
}
