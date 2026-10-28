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
 * QA search configuration
 *
 * @method float getConfidence() Obtain <p>Confidence threshold</p>
 * @method void setConfidence(float $Confidence) Set <p>Confidence threshold</p>
 * @method boolean getEnabled() Obtain <p>Whether to enable</p>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable</p>
 * @method integer getTopN() Obtain <p>Return the top N entries</p>
 * @method void setTopN(integer $TopN) Set <p>Return the top N entries</p>
 */
class QARetrievalConfig extends AbstractModel
{
    /**
     * @var float <p>Confidence threshold</p>
     */
    public $Confidence;

    /**
     * @var boolean <p>Whether to enable</p>
     */
    public $Enabled;

    /**
     * @var integer <p>Return the top N entries</p>
     */
    public $TopN;

    /**
     * @param float $Confidence <p>Confidence threshold</p>
     * @param boolean $Enabled <p>Whether to enable</p>
     * @param integer $TopN <p>Return the top N entries</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("TopN",$param) and $param["TopN"] !== null) {
            $this->TopN = $param["TopN"];
        }
    }
}
