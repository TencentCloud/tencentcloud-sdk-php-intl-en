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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent review log
 *
 * @method string getStepKey() Obtain <p>Indexes of the procedure.</p><p>Enumeration value:</p><ul><li>L1_IMAGE_QUALITY: Image quality detection</li><li>L2_RULE_ENGINE: Rule verification</li><li>L3_LLM_JUDGE: Large model judgment</li></ul>
 * @method void setStepKey(string $StepKey) Set <p>Indexes of the procedure.</p><p>Enumeration value:</p><ul><li>L1_IMAGE_QUALITY: Image quality detection</li><li>L2_RULE_ENGINE: Rule verification</li><li>L3_LLM_JUDGE: Large model judgment</li></ul>
 * @method string getDecision() Obtain <p>Compliant and non-compliant are final states; to be determined is an intermediate state. Judgment status of each layer: Compliant Non-Compliant Pending.</p>
 * @method void setDecision(string $Decision) Set <p>Compliant and non-compliant are final states; to be determined is an intermediate state. Judgment status of each layer: Compliant Non-Compliant Pending.</p>
 * @method string getDecisionMessage() Obtain <p>Reason for the current layer judgment</p>
 * @method void setDecisionMessage(string $DecisionMessage) Set <p>Reason for the current layer judgment</p>
 * @method integer getCostTime() Obtain <p>Time taken by the current layer</p><p>Unit: ms</p>
 * @method void setCostTime(integer $CostTime) Set <p>Time taken by the current layer</p><p>Unit: ms</p>
 */
class AnalyzedLog extends AbstractModel
{
    /**
     * @var string <p>Indexes of the procedure.</p><p>Enumeration value:</p><ul><li>L1_IMAGE_QUALITY: Image quality detection</li><li>L2_RULE_ENGINE: Rule verification</li><li>L3_LLM_JUDGE: Large model judgment</li></ul>
     */
    public $StepKey;

    /**
     * @var string <p>Compliant and non-compliant are final states; to be determined is an intermediate state. Judgment status of each layer: Compliant Non-Compliant Pending.</p>
     */
    public $Decision;

    /**
     * @var string <p>Reason for the current layer judgment</p>
     */
    public $DecisionMessage;

    /**
     * @var integer <p>Time taken by the current layer</p><p>Unit: ms</p>
     */
    public $CostTime;

    /**
     * @param string $StepKey <p>Indexes of the procedure.</p><p>Enumeration value:</p><ul><li>L1_IMAGE_QUALITY: Image quality detection</li><li>L2_RULE_ENGINE: Rule verification</li><li>L3_LLM_JUDGE: Large model judgment</li></ul>
     * @param string $Decision <p>Compliant and non-compliant are final states; to be determined is an intermediate state. Judgment status of each layer: Compliant Non-Compliant Pending.</p>
     * @param string $DecisionMessage <p>Reason for the current layer judgment</p>
     * @param integer $CostTime <p>Time taken by the current layer</p><p>Unit: ms</p>
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
        if (array_key_exists("StepKey",$param) and $param["StepKey"] !== null) {
            $this->StepKey = $param["StepKey"];
        }

        if (array_key_exists("Decision",$param) and $param["Decision"] !== null) {
            $this->Decision = $param["Decision"];
        }

        if (array_key_exists("DecisionMessage",$param) and $param["DecisionMessage"] !== null) {
            $this->DecisionMessage = $param["DecisionMessage"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }
    }
}
