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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle task result.
 *
 * @method SmartSubtitleTaskResultInput getInput() Obtain Input information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInput(SmartSubtitleTaskResultInput $Input) Set Input information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getOutputs() Obtain Output information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputs(array $Outputs) Set Output information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class BatchSmartSubtitlesResult extends AbstractModel
{
    /**
     * @var SmartSubtitleTaskResultInput Input information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Input;

    /**
     * @var array Output information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Outputs;

    /**
     * @param SmartSubtitleTaskResultInput $Input Input information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Outputs Output information for smart subtitle tasks.
Note: This field may return null, indicating that no valid value can be obtained.
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
            $this->Input = new SmartSubtitleTaskResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = [];
            foreach ($param["Outputs"] as $key => $value){
                $obj = new SmartSubtitleTaskBatchOutput();
                $obj->deserialize($value);
                array_push($this->Outputs, $obj);
            }
        }
    }
}
