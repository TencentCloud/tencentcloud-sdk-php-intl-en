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
 * Hourly bill detail line of LLM security
 *
 * @method string getTimeRange() Obtain Hour range, for example, 00:00-01:00.
 * @method void setTimeRange(string $TimeRange) Set Hour range, for example, 00:00-01:00.
 * @method integer getPromptAttackUsage() Obtain Prompt attack protection metering value (in tokens)
 * @method void setPromptAttackUsage(integer $PromptAttackUsage) Set Prompt attack protection metering value (in tokens)
 * @method integer getContentTextUsage() Obtain Content compliance detection (text) metering value (in tokens)
 * @method void setContentTextUsage(integer $ContentTextUsage) Set Content compliance detection (text) metering value (in tokens)
 * @method integer getContentImageUsage() Obtain Content compliance detection (image) metering value (in images)
 * @method void setContentImageUsage(integer $ContentImageUsage) Set Content compliance detection (image) metering value (in images)
 * @method integer getSensitiveDataUsage() Obtain Sensitive data detection metering value (in tokens)
 * @method void setSensitiveDataUsage(integer $SensitiveDataUsage) Set Sensitive data detection metering value (in tokens)
 * @method string getPromptAttackFee() Obtain Prompt attack protection cost for the hour (in CNY)
 * @method void setPromptAttackFee(string $PromptAttackFee) Set Prompt attack protection cost for the hour (in CNY)
 * @method string getContentTextFee() Obtain Content compliance detection (text) cost for the hour (in CNY)
 * @method void setContentTextFee(string $ContentTextFee) Set Content compliance detection (text) cost for the hour (in CNY)
 * @method string getContentImageFee() Obtain Content compliance detection (image) cost for the hour (in CNY)
 * @method void setContentImageFee(string $ContentImageFee) Set Content compliance detection (image) cost for the hour (in CNY)
 * @method string getSensitiveDataFee() Obtain Sensitive data detection cost for the hour (in CNY)
 * @method void setSensitiveDataFee(string $SensitiveDataFee) Set Sensitive data detection cost for the hour (in CNY)
 * @method string getTotalFee() Obtain Total bill amount for the hour (in CNY, net cost)
 * @method void setTotalFee(string $TotalFee) Set Total bill amount for the hour (in CNY, net cost)
 */
class LLMHourBillDetailItem extends AbstractModel
{
    /**
     * @var string Hour range, for example, 00:00-01:00.
     */
    public $TimeRange;

    /**
     * @var integer Prompt attack protection metering value (in tokens)
     */
    public $PromptAttackUsage;

    /**
     * @var integer Content compliance detection (text) metering value (in tokens)
     */
    public $ContentTextUsage;

    /**
     * @var integer Content compliance detection (image) metering value (in images)
     */
    public $ContentImageUsage;

    /**
     * @var integer Sensitive data detection metering value (in tokens)
     */
    public $SensitiveDataUsage;

    /**
     * @var string Prompt attack protection cost for the hour (in CNY)
     */
    public $PromptAttackFee;

    /**
     * @var string Content compliance detection (text) cost for the hour (in CNY)
     */
    public $ContentTextFee;

    /**
     * @var string Content compliance detection (image) cost for the hour (in CNY)
     */
    public $ContentImageFee;

    /**
     * @var string Sensitive data detection cost for the hour (in CNY)
     */
    public $SensitiveDataFee;

    /**
     * @var string Total bill amount for the hour (in CNY, net cost)
     */
    public $TotalFee;

    /**
     * @param string $TimeRange Hour range, for example, 00:00-01:00.
     * @param integer $PromptAttackUsage Prompt attack protection metering value (in tokens)
     * @param integer $ContentTextUsage Content compliance detection (text) metering value (in tokens)
     * @param integer $ContentImageUsage Content compliance detection (image) metering value (in images)
     * @param integer $SensitiveDataUsage Sensitive data detection metering value (in tokens)
     * @param string $PromptAttackFee Prompt attack protection cost for the hour (in CNY)
     * @param string $ContentTextFee Content compliance detection (text) cost for the hour (in CNY)
     * @param string $ContentImageFee Content compliance detection (image) cost for the hour (in CNY)
     * @param string $SensitiveDataFee Sensitive data detection cost for the hour (in CNY)
     * @param string $TotalFee Total bill amount for the hour (in CNY, net cost)
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
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = $param["TimeRange"];
        }

        if (array_key_exists("PromptAttackUsage",$param) and $param["PromptAttackUsage"] !== null) {
            $this->PromptAttackUsage = $param["PromptAttackUsage"];
        }

        if (array_key_exists("ContentTextUsage",$param) and $param["ContentTextUsage"] !== null) {
            $this->ContentTextUsage = $param["ContentTextUsage"];
        }

        if (array_key_exists("ContentImageUsage",$param) and $param["ContentImageUsage"] !== null) {
            $this->ContentImageUsage = $param["ContentImageUsage"];
        }

        if (array_key_exists("SensitiveDataUsage",$param) and $param["SensitiveDataUsage"] !== null) {
            $this->SensitiveDataUsage = $param["SensitiveDataUsage"];
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

        if (array_key_exists("TotalFee",$param) and $param["TotalFee"] !== null) {
            $this->TotalFee = $param["TotalFee"];
        }
    }
}
