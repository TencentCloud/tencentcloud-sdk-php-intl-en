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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node operation content
 *
 * @method string getInput() Obtain Input variable information
 * @method void setInput(string $Input) Set Input variable information
 * @method string getOutput() Obtain Output variable information
 * @method void setOutput(string $Output) Set Output variable information
 * @method string getOriginalOutput() Obtain Original output information. Only partial nodes have a value, such as tool nodes and code nodes.
 * @method void setOriginalOutput(string $OriginalOutput) Set Original output information. Only partial nodes have a value, such as tool nodes and code nodes.
 * @method string getInputRef() Obtain URLs of the complete node Input content. (This field has a value only when the Input content exceeds the limit.)
 * @method void setInputRef(string $InputRef) Set URLs of the complete node Input content. (This field has a value only when the Input content exceeds the limit.)
 * @method string getOutputRef() Obtain URLs of the complete node Output. This field has a value only when the Output exceeds the limit.
 * @method void setOutputRef(string $OutputRef) Set URLs of the complete node Output. This field has a value only when the Output exceeds the limit.
 * @method string getOriginalOutputRef() Obtain URLs of the complete original output content of the task. (This field has a value only when the TaskOutput content exceeds the limit.)
 * @method void setOriginalOutputRef(string $OriginalOutputRef) Set URLs of the complete original output content of the task. (This field has a value only when the TaskOutput content exceeds the limit.)
 */
class NodeRunContent extends AbstractModel
{
    /**
     * @var string Input variable information
     */
    public $Input;

    /**
     * @var string Output variable information
     */
    public $Output;

    /**
     * @var string Original output information. Only partial nodes have a value, such as tool nodes and code nodes.
     */
    public $OriginalOutput;

    /**
     * @var string URLs of the complete node Input content. (This field has a value only when the Input content exceeds the limit.)
     */
    public $InputRef;

    /**
     * @var string URLs of the complete node Output. This field has a value only when the Output exceeds the limit.
     */
    public $OutputRef;

    /**
     * @var string URLs of the complete original output content of the task. (This field has a value only when the TaskOutput content exceeds the limit.)
     */
    public $OriginalOutputRef;

    /**
     * @param string $Input Input variable information
     * @param string $Output Output variable information
     * @param string $OriginalOutput Original output information. Only partial nodes have a value, such as tool nodes and code nodes.
     * @param string $InputRef URLs of the complete node Input content. (This field has a value only when the Input content exceeds the limit.)
     * @param string $OutputRef URLs of the complete node Output. This field has a value only when the Output exceeds the limit.
     * @param string $OriginalOutputRef URLs of the complete original output content of the task. (This field has a value only when the TaskOutput content exceeds the limit.)
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("OriginalOutput",$param) and $param["OriginalOutput"] !== null) {
            $this->OriginalOutput = $param["OriginalOutput"];
        }

        if (array_key_exists("InputRef",$param) and $param["InputRef"] !== null) {
            $this->InputRef = $param["InputRef"];
        }

        if (array_key_exists("OutputRef",$param) and $param["OutputRef"] !== null) {
            $this->OutputRef = $param["OutputRef"];
        }

        if (array_key_exists("OriginalOutputRef",$param) and $param["OriginalOutputRef"] !== null) {
            $this->OriginalOutputRef = $param["OriginalOutputRef"];
        }
    }
}
