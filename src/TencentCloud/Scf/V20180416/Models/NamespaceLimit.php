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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace limit
 *
 * @method integer getFunctionsCount() Obtain Total number of functions
 * @method void setFunctionsCount(integer $FunctionsCount) Set Total number of functions
 * @method TriggerCount getTrigger() Obtain Trigger information
 * @method void setTrigger(TriggerCount $Trigger) Set Trigger information
 * @method string getNamespace() Obtain Namespace name
 * @method void setNamespace(string $Namespace) Set Namespace name
 * @method integer getConcurrentExecutions() Obtain Concurrency
 * @method void setConcurrentExecutions(integer $ConcurrentExecutions) Set Concurrency
 * @method integer getTimeoutLimit() Obtain Timeout limit
 * @method void setTimeoutLimit(integer $TimeoutLimit) Set Timeout limit
 * @method integer getTestModelLimit() Obtain Test event limit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTestModelLimit(integer $TestModelLimit) Set Test event limit
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getInitTimeoutLimit() Obtain Initialization timeout limit
 * @method void setInitTimeoutLimit(integer $InitTimeoutLimit) Set Initialization timeout limit
 * @method integer getRetryNumLimit() Obtain Limit of async retry attempt quantity
 * @method void setRetryNumLimit(integer $RetryNumLimit) Set Limit of async retry attempt quantity
 * @method integer getMinMsgTTL() Obtain Lower limit of message retention time for async retry
 * @method void setMinMsgTTL(integer $MinMsgTTL) Set Lower limit of message retention time for async retry
 * @method integer getMaxMsgTTL() Obtain Upper limit of message retention time for async retry
 * @method void setMaxMsgTTL(integer $MaxMsgTTL) Set Upper limit of message retention time for async retry
 */
class NamespaceLimit extends AbstractModel
{
    /**
     * @var integer Total number of functions
     */
    public $FunctionsCount;

    /**
     * @var TriggerCount Trigger information
     */
    public $Trigger;

    /**
     * @var string Namespace name
     */
    public $Namespace;

    /**
     * @var integer Concurrency
     */
    public $ConcurrentExecutions;

    /**
     * @var integer Timeout limit
     */
    public $TimeoutLimit;

    /**
     * @var integer Test event limit
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TestModelLimit;

    /**
     * @var integer Initialization timeout limit
     */
    public $InitTimeoutLimit;

    /**
     * @var integer Limit of async retry attempt quantity
     */
    public $RetryNumLimit;

    /**
     * @var integer Lower limit of message retention time for async retry
     */
    public $MinMsgTTL;

    /**
     * @var integer Upper limit of message retention time for async retry
     */
    public $MaxMsgTTL;

    /**
     * @param integer $FunctionsCount Total number of functions
     * @param TriggerCount $Trigger Trigger information
     * @param string $Namespace Namespace name
     * @param integer $ConcurrentExecutions Concurrency
     * @param integer $TimeoutLimit Timeout limit
     * @param integer $TestModelLimit Test event limit
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $InitTimeoutLimit Initialization timeout limit
     * @param integer $RetryNumLimit Limit of async retry attempt quantity
     * @param integer $MinMsgTTL Lower limit of message retention time for async retry
     * @param integer $MaxMsgTTL Upper limit of message retention time for async retry
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
        if (array_key_exists("FunctionsCount",$param) and $param["FunctionsCount"] !== null) {
            $this->FunctionsCount = $param["FunctionsCount"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new TriggerCount();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ConcurrentExecutions",$param) and $param["ConcurrentExecutions"] !== null) {
            $this->ConcurrentExecutions = $param["ConcurrentExecutions"];
        }

        if (array_key_exists("TimeoutLimit",$param) and $param["TimeoutLimit"] !== null) {
            $this->TimeoutLimit = $param["TimeoutLimit"];
        }

        if (array_key_exists("TestModelLimit",$param) and $param["TestModelLimit"] !== null) {
            $this->TestModelLimit = $param["TestModelLimit"];
        }

        if (array_key_exists("InitTimeoutLimit",$param) and $param["InitTimeoutLimit"] !== null) {
            $this->InitTimeoutLimit = $param["InitTimeoutLimit"];
        }

        if (array_key_exists("RetryNumLimit",$param) and $param["RetryNumLimit"] !== null) {
            $this->RetryNumLimit = $param["RetryNumLimit"];
        }

        if (array_key_exists("MinMsgTTL",$param) and $param["MinMsgTTL"] !== null) {
            $this->MinMsgTTL = $param["MinMsgTTL"];
        }

        if (array_key_exists("MaxMsgTTL",$param) and $param["MaxMsgTTL"] !== null) {
            $this->MaxMsgTTL = $param["MaxMsgTTL"];
        }
    }
}
