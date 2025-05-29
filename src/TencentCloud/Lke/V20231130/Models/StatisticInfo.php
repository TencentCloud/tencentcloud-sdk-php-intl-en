<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistical information of large model tokens.
 *
 * @method string getModelName() Obtain Model name.
 * @method void setModelName(string $ModelName) Set Model name.
 * @method integer getFirstTokenCost() Obtain Time consumption of the first token.
 * @method void setFirstTokenCost(integer $FirstTokenCost) Set Time consumption of the first token.
 * @method integer getTotalCost() Obtain Total time consumption.
 * @method void setTotalCost(integer $TotalCost) Set Total time consumption.
 * @method integer getInputTokens() Obtain Number of input tokens.
 * @method void setInputTokens(integer $InputTokens) Set Number of input tokens.
 * @method integer getOutputTokens() Obtain Number of output tokens.
 * @method void setOutputTokens(integer $OutputTokens) Set Number of output tokens.
 * @method integer getTotalTokens() Obtain Total number of tokens.
 * @method void setTotalTokens(integer $TotalTokens) Set Total number of tokens.
 */
class StatisticInfo extends AbstractModel
{
    /**
     * @var string Model name.
     */
    public $ModelName;

    /**
     * @var integer Time consumption of the first token.
     */
    public $FirstTokenCost;

    /**
     * @var integer Total time consumption.
     */
    public $TotalCost;

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
     * @param string $ModelName Model name.
     * @param integer $FirstTokenCost Time consumption of the first token.
     * @param integer $TotalCost Total time consumption.
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("FirstTokenCost",$param) and $param["FirstTokenCost"] !== null) {
            $this->FirstTokenCost = $param["FirstTokenCost"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
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
