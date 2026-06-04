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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumption.
 *
 * @method integer getPromptTokens() Obtain Number of input tokens.
 * @method void setPromptTokens(integer $PromptTokens) Set Number of input tokens.
 * @method integer getCompletionTokens() Obtain Number of output tokens.
 * @method void setCompletionTokens(integer $CompletionTokens) Set Number of output tokens.
 * @method integer getTotalTokens() Obtain Total number of tokens.
 * @method void setTotalTokens(integer $TotalTokens) Set Total number of tokens.
 */
class ChatUsage extends AbstractModel
{
    /**
     * @var integer Number of input tokens.
     */
    public $PromptTokens;

    /**
     * @var integer Number of output tokens.
     */
    public $CompletionTokens;

    /**
     * @var integer Total number of tokens.
     */
    public $TotalTokens;

    /**
     * @param integer $PromptTokens Number of input tokens.
     * @param integer $CompletionTokens Number of output tokens.
     * @param integer $TotalTokens Total number of tokens.
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
        if (array_key_exists("PromptTokens",$param) and $param["PromptTokens"] !== null) {
            $this->PromptTokens = $param["PromptTokens"];
        }

        if (array_key_exists("CompletionTokens",$param) and $param["CompletionTokens"] !== null) {
            $this->CompletionTokens = $param["CompletionTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
