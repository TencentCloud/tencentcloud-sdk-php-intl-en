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
 * Control parameter of prohibited information detection in text task
 *
 * @method string getSwitch() Obtain Switch of prohibited information detection in text task. Valid values:
<li>ON: enables prohibited information detection in text task;</li>
<li>OFF: disables prohibited information detection in text task.</li>
 * @method void setSwitch(string $Switch) Set Switch of prohibited information detection in text task. Valid values:
<li>ON: enables prohibited information detection in text task;</li>
<li>OFF: disables prohibited information detection in text task.</li>
 * @method integer getBlockConfidence() Obtain Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 100 will be used by default. Value range: 0–100.
 * @method void setBlockConfidence(integer $BlockConfidence) Set Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 100 will be used by default. Value range: 0–100.
 * @method integer getReviewConfidence() Obtain Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 75 will be used by default. Value range: 0–100.
 * @method void setReviewConfidence(integer $ReviewConfidence) Set Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 75 will be used by default. Value range: 0–100.
 */
class ProhibitedOcrReviewTemplateInfo extends AbstractModel
{
    /**
     * @var string Switch of prohibited information detection in text task. Valid values:
<li>ON: enables prohibited information detection in text task;</li>
<li>OFF: disables prohibited information detection in text task.</li>
     */
    public $Switch;

    /**
     * @var integer Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 100 will be used by default. Value range: 0–100.
     */
    public $BlockConfidence;

    /**
     * @var integer Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 75 will be used by default. Value range: 0–100.
     */
    public $ReviewConfidence;

    /**
     * @param string $Switch Switch of prohibited information detection in text task. Valid values:
<li>ON: enables prohibited information detection in text task;</li>
<li>OFF: disables prohibited information detection in text task.</li>
     * @param integer $BlockConfidence Threshold score for violation. If this score is reached or exceeded during intelligent audit, it will be deemed that a suspected violation has occurred. If this parameter is left empty, 100 will be used by default. Value range: 0–100.
     * @param integer $ReviewConfidence Threshold score for human audit. If this score is reached or exceeded during intelligent audit, human audit will be considered necessary. If this parameter is left empty, 75 will be used by default. Value range: 0–100.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("BlockConfidence",$param) and $param["BlockConfidence"] !== null) {
            $this->BlockConfidence = $param["BlockConfidence"];
        }

        if (array_key_exists("ReviewConfidence",$param) and $param["ReviewConfidence"] !== null) {
            $this->ReviewConfidence = $param["ReviewConfidence"];
        }
    }
}
