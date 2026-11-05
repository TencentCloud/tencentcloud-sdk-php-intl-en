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
 * MsgRecordResult
 *
 * @method integer getCallResult() Obtain Indicates the call result of the message: 0=CALL_RESULT_UNKNOWN (all/unknown), 1=CALL_RESULT_SUCCESS (success), 2=CALL_RESULT_FAILED (failed). fail_reason (string) describes the failure reason when the call failed.
 * @method void setCallResult(integer $CallResult) Set Indicates the call result of the message: 0=CALL_RESULT_UNKNOWN (all/unknown), 1=CALL_RESULT_SUCCESS (success), 2=CALL_RESULT_FAILED (failed). fail_reason (string) describes the failure reason when the call failed.
 * @method string getCustomerVariable() Obtain Custom variable, json string
 * @method void setCustomerVariable(string $CustomerVariable) Set Custom variable, json string
 * @method string getFailReason() Obtain Failure cause.
 * @method void setFailReason(string $FailReason) Set Failure cause.
 * @method integer getFirstTokenLatency() Obtain Time to first token
 * @method void setFirstTokenLatency(integer $FirstTokenLatency) Set Time to first token
 * @method integer getInputToken() Obtain Number of input tokens.
 * @method void setInputToken(integer $InputToken) Set Number of input tokens.
 * @method integer getOutputToken() Obtain Number of output tokens.
 * @method void setOutputToken(integer $OutputToken) Set Number of output tokens.
 * @method integer getTotalToken() Obtain Total number of tokens.
 * @method void setTotalToken(integer $TotalToken) Set Total number of tokens.
 * @method integer getTotalTokenLatency() Obtain Total token duration
 * @method void setTotalTokenLatency(integer $TotalTokenLatency) Set Total token duration
 */
class MsgRecordResult extends AbstractModel
{
    /**
     * @var integer Indicates the call result of the message: 0=CALL_RESULT_UNKNOWN (all/unknown), 1=CALL_RESULT_SUCCESS (success), 2=CALL_RESULT_FAILED (failed). fail_reason (string) describes the failure reason when the call failed.
     */
    public $CallResult;

    /**
     * @var string Custom variable, json string
     */
    public $CustomerVariable;

    /**
     * @var string Failure cause.
     */
    public $FailReason;

    /**
     * @var integer Time to first token
     */
    public $FirstTokenLatency;

    /**
     * @var integer Number of input tokens.
     */
    public $InputToken;

    /**
     * @var integer Number of output tokens.
     */
    public $OutputToken;

    /**
     * @var integer Total number of tokens.
     */
    public $TotalToken;

    /**
     * @var integer Total token duration
     */
    public $TotalTokenLatency;

    /**
     * @param integer $CallResult Indicates the call result of the message: 0=CALL_RESULT_UNKNOWN (all/unknown), 1=CALL_RESULT_SUCCESS (success), 2=CALL_RESULT_FAILED (failed). fail_reason (string) describes the failure reason when the call failed.
     * @param string $CustomerVariable Custom variable, json string
     * @param string $FailReason Failure cause.
     * @param integer $FirstTokenLatency Time to first token
     * @param integer $InputToken Number of input tokens.
     * @param integer $OutputToken Number of output tokens.
     * @param integer $TotalToken Total number of tokens.
     * @param integer $TotalTokenLatency Total token duration
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
        if (array_key_exists("CallResult",$param) and $param["CallResult"] !== null) {
            $this->CallResult = $param["CallResult"];
        }

        if (array_key_exists("CustomerVariable",$param) and $param["CustomerVariable"] !== null) {
            $this->CustomerVariable = $param["CustomerVariable"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("FirstTokenLatency",$param) and $param["FirstTokenLatency"] !== null) {
            $this->FirstTokenLatency = $param["FirstTokenLatency"];
        }

        if (array_key_exists("InputToken",$param) and $param["InputToken"] !== null) {
            $this->InputToken = $param["InputToken"];
        }

        if (array_key_exists("OutputToken",$param) and $param["OutputToken"] !== null) {
            $this->OutputToken = $param["OutputToken"];
        }

        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("TotalTokenLatency",$param) and $param["TotalTokenLatency"] !== null) {
            $this->TotalTokenLatency = $param["TotalTokenLatency"];
        }
    }
}
