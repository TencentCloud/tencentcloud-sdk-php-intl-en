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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method SplitMediaTaskInput getInput() Obtain 
 * @method void setInput(SplitMediaTaskInput $Input) Set 
 * @method TaskOutputMediaInfo getOutput() Obtain 
 * @method void setOutput(TaskOutputMediaInfo $Output) Set 
 * @method string getProcedureTaskId() Obtain 
 * @method void setProcedureTaskId(string $ProcedureTaskId) Set 
 * @method string getReviewAudioVideoTaskId() Obtain 
 * @method void setReviewAudioVideoTaskId(string $ReviewAudioVideoTaskId) Set 
 */
class SplitMediaTaskSegmentInfo extends AbstractModel
{
    /**
     * @var SplitMediaTaskInput 
     */
    public $Input;

    /**
     * @var TaskOutputMediaInfo 
     */
    public $Output;

    /**
     * @var string 
     */
    public $ProcedureTaskId;

    /**
     * @var string 
     */
    public $ReviewAudioVideoTaskId;

    /**
     * @param SplitMediaTaskInput $Input 
     * @param TaskOutputMediaInfo $Output 
     * @param string $ProcedureTaskId 
     * @param string $ReviewAudioVideoTaskId 
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
            $this->Input = new SplitMediaTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new TaskOutputMediaInfo();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("ProcedureTaskId",$param) and $param["ProcedureTaskId"] !== null) {
            $this->ProcedureTaskId = $param["ProcedureTaskId"];
        }

        if (array_key_exists("ReviewAudioVideoTaskId",$param) and $param["ReviewAudioVideoTaskId"] !== null) {
            $this->ReviewAudioVideoTaskId = $param["ReviewAudioVideoTaskId"];
        }
    }
}
