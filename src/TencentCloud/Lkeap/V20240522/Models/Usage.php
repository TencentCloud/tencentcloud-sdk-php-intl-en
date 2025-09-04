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
 * @method integer getTotalPages() Obtain Number of document pages.
 * @method void setTotalPages(integer $TotalPages) Set Number of document pages.
 * @method integer getInputTokens() Obtain Number of input tokens.
 * @method void setInputTokens(integer $InputTokens) Set Number of input tokens.
 * @method integer getOutputTokens() Obtain Number of output tokens.
 * @method void setOutputTokens(integer $OutputTokens) Set Number of output tokens.
 * @method integer getTotalTokens() Obtain Total number of tokens.
 * @method void setTotalTokens(integer $TotalTokens) Set Total number of tokens.
 */
class Usage extends AbstractModel
{
    /**
     * @var integer Number of document pages.
     */
    public $TotalPages;

    /**
     * @var integer Number of input tokens.
     */
    public $InputTokens;

    /**
     * @var integer Number of output tokens.
     */
    public $OutputTokens;

    /**
     * @var integer Total number of tokens.
     */
    public $TotalTokens;

    /**
     * @param integer $TotalPages Number of document pages.
     * @param integer $InputTokens Number of input tokens.
     * @param integer $OutputTokens Number of output tokens.
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
        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
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
