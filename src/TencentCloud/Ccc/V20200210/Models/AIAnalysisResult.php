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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI conversation analytics result.
 *
 * @method string getType() Obtain Summary: describes the session summary.
mood: specifies the emotion analysis.
intention extraction.
 * @method void setType(string $Type) Set Summary: describes the session summary.
mood: specifies the emotion analysis.
intention extraction.
 * @method string getResult() Obtain AI session analysis result.
 * @method void setResult(string $Result) Set AI session analysis result.
 */
class AIAnalysisResult extends AbstractModel
{
    /**
     * @var string Summary: describes the session summary.
mood: specifies the emotion analysis.
intention extraction.
     */
    public $Type;

    /**
     * @var string AI session analysis result.
     */
    public $Result;

    /**
     * @param string $Type Summary: describes the session summary.
mood: specifies the emotion analysis.
intention extraction.
     * @param string $Result AI session analysis result.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
