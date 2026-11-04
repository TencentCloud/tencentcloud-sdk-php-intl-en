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
 * Statistics
 *
 * @method integer getFirstTokenCostMs() Obtain <p>Time to first token</p>
 * @method void setFirstTokenCostMs(integer $FirstTokenCostMs) Set <p>Time to first token</p>
 * @method integer getInputTokens() Obtain <p>Input token count</p>
 * @method void setInputTokens(integer $InputTokens) Set <p>Input token count</p>
 * @method string getModelName() Obtain <p>Model name</p>
 * @method void setModelName(string $ModelName) Set <p>Model name</p>
 * @method integer getOutputTokens() Obtain <p>Output token count</p>
 * @method void setOutputTokens(integer $OutputTokens) Set <p>Output token count</p>
 * @method integer getTotalCostMs() Obtain <p>Total reasoning time</p>
 * @method void setTotalCostMs(integer $TotalCostMs) Set <p>Total reasoning time</p>
 * @method integer getTotalTokens() Obtain <p>Total input and output tokens</p>
 * @method void setTotalTokens(integer $TotalTokens) Set <p>Total input and output tokens</p>
 */
class Statistic extends AbstractModel
{
    /**
     * @var integer <p>Time to first token</p>
     */
    public $FirstTokenCostMs;

    /**
     * @var integer <p>Input token count</p>
     */
    public $InputTokens;

    /**
     * @var string <p>Model name</p>
     */
    public $ModelName;

    /**
     * @var integer <p>Output token count</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>Total reasoning time</p>
     */
    public $TotalCostMs;

    /**
     * @var integer <p>Total input and output tokens</p>
     */
    public $TotalTokens;

    /**
     * @param integer $FirstTokenCostMs <p>Time to first token</p>
     * @param integer $InputTokens <p>Input token count</p>
     * @param string $ModelName <p>Model name</p>
     * @param integer $OutputTokens <p>Output token count</p>
     * @param integer $TotalCostMs <p>Total reasoning time</p>
     * @param integer $TotalTokens <p>Total input and output tokens</p>
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
        if (array_key_exists("FirstTokenCostMs",$param) and $param["FirstTokenCostMs"] !== null) {
            $this->FirstTokenCostMs = $param["FirstTokenCostMs"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalCostMs",$param) and $param["TotalCostMs"] !== null) {
            $this->TotalCostMs = $param["TotalCostMs"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
