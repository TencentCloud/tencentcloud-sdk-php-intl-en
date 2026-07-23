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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Decision information
 *
 * @method string getDecisionResult() Obtain <p>Decision result</p><ul><li>pass: Pass</li><li>review: Review</li><li>reject: Reject</li></ul>
 * @method void setDecisionResult(string $DecisionResult) Set <p>Decision result</p><ul><li>pass: Pass</li><li>review: Review</li><li>reject: Reject</li></ul>
 */
class Decision extends AbstractModel
{
    /**
     * @var string <p>Decision result</p><ul><li>pass: Pass</li><li>review: Review</li><li>reject: Reject</li></ul>
     */
    public $DecisionResult;

    /**
     * @param string $DecisionResult <p>Decision result</p><ul><li>pass: Pass</li><li>review: Review</li><li>reject: Reject</li></ul>
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
        if (array_key_exists("DecisionResult",$param) and $param["DecisionResult"] !== null) {
            $this->DecisionResult = $param["DecisionResult"];
        }
    }
}
