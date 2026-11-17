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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method RuleContentProcessInfo getProcess() Obtain 
 * @method void setProcess(RuleContentProcessInfo $Process) Set 
 * @method RuleContentProcessInfo getParentProcess() Obtain 
 * @method void setParentProcess(RuleContentProcessInfo $ParentProcess) Set 
 * @method string getFilePath() Obtain 
 * @method void setFilePath(string $FilePath) Set 
 * @method array getFileActions() Obtain 
 * @method void setFileActions(array $FileActions) Set 
 */
class RuleContentFileOperation extends AbstractModel
{
    /**
     * @var RuleContentProcessInfo 
     */
    public $Process;

    /**
     * @var RuleContentProcessInfo 
     */
    public $ParentProcess;

    /**
     * @var string 
     */
    public $FilePath;

    /**
     * @var array 
     */
    public $FileActions;

    /**
     * @param RuleContentProcessInfo $Process 
     * @param RuleContentProcessInfo $ParentProcess 
     * @param string $FilePath 
     * @param array $FileActions 
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
        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = new RuleContentProcessInfo();
            $this->Process->deserialize($param["Process"]);
        }

        if (array_key_exists("ParentProcess",$param) and $param["ParentProcess"] !== null) {
            $this->ParentProcess = new RuleContentProcessInfo();
            $this->ParentProcess->deserialize($param["ParentProcess"]);
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileActions",$param) and $param["FileActions"] !== null) {
            $this->FileActions = $param["FileActions"];
        }
    }
}
