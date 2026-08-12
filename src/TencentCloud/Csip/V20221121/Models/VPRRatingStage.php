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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VRP rating stage
 *
 * @method string getStage() Obtain Stage name (for example: threat activity level, exploitability, vulnerability severity)
 * @method void setStage(string $Stage) Set Stage name (for example: threat activity level, exploitability, vulnerability severity)
 * @method string getResult() Obtain Rating result of this stage
 * @method void setResult(string $Result) Set Rating result of this stage
 */
class VPRRatingStage extends AbstractModel
{
    /**
     * @var string Stage name (for example: threat activity level, exploitability, vulnerability severity)
     */
    public $Stage;

    /**
     * @var string Rating result of this stage
     */
    public $Result;

    /**
     * @param string $Stage Stage name (for example: threat activity level, exploitability, vulnerability severity)
     * @param string $Result Rating result of this stage
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
