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
 * Standard word check item
 *
 * @method CheckResult getCheckResult() Obtain Check results
 * @method void setCheckResult(CheckResult $CheckResult) Set Check results
 * @method string getTerm() Obtain Standard words to be checked
 * @method void setTerm(string $Term) Set Standard words to be checked
 * @method string getTermId() Obtain Return the corresponding standard term ID if exists.
 * @method void setTermId(string $TermId) Set Return the corresponding standard term ID if exists.
 */
class LabelTermCheckResult extends AbstractModel
{
    /**
     * @var CheckResult Check results
     */
    public $CheckResult;

    /**
     * @var string Standard words to be checked
     */
    public $Term;

    /**
     * @var string Return the corresponding standard term ID if exists.
     */
    public $TermId;

    /**
     * @param CheckResult $CheckResult Check results
     * @param string $Term Standard words to be checked
     * @param string $TermId Return the corresponding standard term ID if exists.
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
        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = new CheckResult();
            $this->CheckResult->deserialize($param["CheckResult"]);
        }

        if (array_key_exists("Term",$param) and $param["Term"] !== null) {
            $this->Term = $param["Term"];
        }

        if (array_key_exists("TermId",$param) and $param["TermId"] !== null) {
            $this->TermId = $param["TermId"];
        }
    }
}
