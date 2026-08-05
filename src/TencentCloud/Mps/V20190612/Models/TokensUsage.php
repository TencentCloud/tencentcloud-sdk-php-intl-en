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
 * token usage
 *
 * @method integer getInputTokens() Obtain <p>Input token count</p>
 * @method void setInputTokens(integer $InputTokens) Set <p>Input token count</p>
 * @method integer getOutputTokens() Obtain <p>Output token count</p>
 * @method void setOutputTokens(integer $OutputTokens) Set <p>Output token count</p>
 * @method integer getTotalTokens() Obtain <p>Total token count, generally input + output</p>
 * @method void setTotalTokens(integer $TotalTokens) Set <p>Total token count, generally input + output</p>
 */
class TokensUsage extends AbstractModel
{
    /**
     * @var integer <p>Input token count</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>Output token count</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>Total token count, generally input + output</p>
     */
    public $TotalTokens;

    /**
     * @param integer $InputTokens <p>Input token count</p>
     * @param integer $OutputTokens <p>Output token count</p>
     * @param integer $TotalTokens <p>Total token count, generally input + output</p>
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
        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
