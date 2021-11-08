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
namespace TencentCloud\Ip\V20210409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAgentCredit response structure.
 *
 * @method float getAssignedCreditAmount() Obtain Allocated credit
 * @method void setAssignedCreditAmount(float $AssignedCreditAmount) Set Allocated credit
 * @method float getCustomerCreditAmount() Obtain Total credit
 * @method void setCustomerCreditAmount(float $CustomerCreditAmount) Set Total credit
 * @method float getRemainingCreditAmount() Obtain Remaining credit
 * @method void setRemainingCreditAmount(float $RemainingCreditAmount) Set Remaining credit
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class QueryAgentCreditResponse extends AbstractModel
{
    /**
     * @var float Allocated credit
     */
    public $AssignedCreditAmount;

    /**
     * @var float Total credit
     */
    public $CustomerCreditAmount;

    /**
     * @var float Remaining credit
     */
    public $RemainingCreditAmount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $AssignedCreditAmount Allocated credit
     * @param float $CustomerCreditAmount Total credit
     * @param float $RemainingCreditAmount Remaining credit
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AssignedCreditAmount",$param) and $param["AssignedCreditAmount"] !== null) {
            $this->AssignedCreditAmount = $param["AssignedCreditAmount"];
        }

        if (array_key_exists("CustomerCreditAmount",$param) and $param["CustomerCreditAmount"] !== null) {
            $this->CustomerCreditAmount = $param["CustomerCreditAmount"];
        }

        if (array_key_exists("RemainingCreditAmount",$param) and $param["RemainingCreditAmount"] !== null) {
            $this->RemainingCreditAmount = $param["RemainingCreditAmount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
