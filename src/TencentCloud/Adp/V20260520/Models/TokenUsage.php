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
 * Token usage statistics
 *
 * @method integer getCompletionTokens() Obtain <p>Number of completion tokens</p>
 * @method void setCompletionTokens(integer $CompletionTokens) Set <p>Number of completion tokens</p>
 * @method string getModelName() Obtain <p>Model name</p>
 * @method void setModelName(string $ModelName) Set <p>Model name</p>
 * @method integer getPromptTokens() Obtain <p>prompt token count</p>
 * @method void setPromptTokens(integer $PromptTokens) Set <p>prompt token count</p>
 * @method integer getTotalTokens() Obtain <p>Total token count</p>
 * @method void setTotalTokens(integer $TotalTokens) Set <p>Total token count</p>
 */
class TokenUsage extends AbstractModel
{
    /**
     * @var integer <p>Number of completion tokens</p>
     */
    public $CompletionTokens;

    /**
     * @var string <p>Model name</p>
     */
    public $ModelName;

    /**
     * @var integer <p>prompt token count</p>
     */
    public $PromptTokens;

    /**
     * @var integer <p>Total token count</p>
     */
    public $TotalTokens;

    /**
     * @param integer $CompletionTokens <p>Number of completion tokens</p>
     * @param string $ModelName <p>Model name</p>
     * @param integer $PromptTokens <p>prompt token count</p>
     * @param integer $TotalTokens <p>Total token count</p>
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
        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
