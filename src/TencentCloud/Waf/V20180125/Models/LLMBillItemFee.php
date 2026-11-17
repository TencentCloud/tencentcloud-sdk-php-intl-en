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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Itemized cost of hourly LLM security bill
 *
 * @method string getPromptAttackFee() Obtain Prompt attack protection cost (in CNY)
 * @method void setPromptAttackFee(string $PromptAttackFee) Set Prompt attack protection cost (in CNY)
 * @method string getContentTextFee() Obtain Content compliance detection (text) cost (in CNY)
 * @method void setContentTextFee(string $ContentTextFee) Set Content compliance detection (text) cost (in CNY)
 * @method string getContentImageFee() Obtain Content compliance detection (image) cost (in CNY)
 * @method void setContentImageFee(string $ContentImageFee) Set Content compliance detection (image) cost (in CNY)
 * @method string getSensitiveDataFee() Obtain Sensitive data detection cost (in CNY)
 * @method void setSensitiveDataFee(string $SensitiveDataFee) Set Sensitive data detection cost (in CNY)
 */
class LLMBillItemFee extends AbstractModel
{
    /**
     * @var string Prompt attack protection cost (in CNY)
     */
    public $PromptAttackFee;

    /**
     * @var string Content compliance detection (text) cost (in CNY)
     */
    public $ContentTextFee;

    /**
     * @var string Content compliance detection (image) cost (in CNY)
     */
    public $ContentImageFee;

    /**
     * @var string Sensitive data detection cost (in CNY)
     */
    public $SensitiveDataFee;

    /**
     * @param string $PromptAttackFee Prompt attack protection cost (in CNY)
     * @param string $ContentTextFee Content compliance detection (text) cost (in CNY)
     * @param string $ContentImageFee Content compliance detection (image) cost (in CNY)
     * @param string $SensitiveDataFee Sensitive data detection cost (in CNY)
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
        if (array_key_exists("PromptAttackFee",$param) and $param["PromptAttackFee"] !== null) {
            $this->PromptAttackFee = $param["PromptAttackFee"];
        }

        if (array_key_exists("ContentTextFee",$param) and $param["ContentTextFee"] !== null) {
            $this->ContentTextFee = $param["ContentTextFee"];
        }

        if (array_key_exists("ContentImageFee",$param) and $param["ContentImageFee"] !== null) {
            $this->ContentImageFee = $param["ContentImageFee"];
        }

        if (array_key_exists("SensitiveDataFee",$param) and $param["SensitiveDataFee"] !== null) {
            $this->SensitiveDataFee = $param["SensitiveDataFee"];
        }
    }
}
