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
 * Event result
 *
 * @method string getStatus() Obtain <p>Actual completion status</p><p>Enumeration values:</p><ul><li>success: Success,</li><li>failure: Failure.</li></ul>
 * @method void setStatus(string $Status) Set <p>Actual completion status</p><p>Enumeration values:</p><ul><li>success: Success,</li><li>failure: Failure.</li></ul>
 * @method string getFailureReason() Obtain <p>Failure reason</p>
 * @method void setFailureReason(string $FailureReason) Set <p>Failure reason</p>
 */
class Result extends AbstractModel
{
    /**
     * @var string <p>Actual completion status</p><p>Enumeration values:</p><ul><li>success: Success,</li><li>failure: Failure.</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Failure reason</p>
     */
    public $FailureReason;

    /**
     * @param string $Status <p>Actual completion status</p><p>Enumeration values:</p><ul><li>success: Success,</li><li>failure: Failure.</li></ul>
     * @param string $FailureReason <p>Failure reason</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }
    }
}
