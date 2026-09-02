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
 * EDR command-line rule.
 *
 * @method RuleContentProcessInfo getProcess() Obtain <p>Process command line information</p>
 * @method void setProcess(RuleContentProcessInfo $Process) Set <p>Process command line information</p>
 * @method RuleContentProcessInfo getParentProcess() Obtain <p>Command line information of the parent process</p>
 * @method void setParentProcess(RuleContentProcessInfo $ParentProcess) Set <p>Command line information of the parent process</p>
 * @method RuleContentProcessInfo getAncestorProcess() Obtain <p>Command line information of the ancestor process</p>
 * @method void setAncestorProcess(RuleContentProcessInfo $AncestorProcess) Set <p>Command line information of the ancestor process</p>
 */
class RuleContentCmdLine extends AbstractModel
{
    /**
     * @var RuleContentProcessInfo <p>Process command line information</p>
     */
    public $Process;

    /**
     * @var RuleContentProcessInfo <p>Command line information of the parent process</p>
     */
    public $ParentProcess;

    /**
     * @var RuleContentProcessInfo <p>Command line information of the ancestor process</p>
     */
    public $AncestorProcess;

    /**
     * @param RuleContentProcessInfo $Process <p>Process command line information</p>
     * @param RuleContentProcessInfo $ParentProcess <p>Command line information of the parent process</p>
     * @param RuleContentProcessInfo $AncestorProcess <p>Command line information of the ancestor process</p>
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

        if (array_key_exists("AncestorProcess",$param) and $param["AncestorProcess"] !== null) {
            $this->AncestorProcess = new RuleContentProcessInfo();
            $this->AncestorProcess->deserialize($param["AncestorProcess"]);
        }
    }
}
