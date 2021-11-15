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
 * QueryPartnerCredit response structure.
 *
 * @method float getAllocatedCredit() Obtain Allocated credit
 * @method void setAllocatedCredit(float $AllocatedCredit) Set Allocated credit
 * @method float getTotalCredit() Obtain Total credit
 * @method void setTotalCredit(float $TotalCredit) Set Total credit
 * @method float getRemainingCredit() Obtain Remaining credit
 * @method void setRemainingCredit(float $RemainingCredit) Set Remaining credit
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class QueryPartnerCreditResponse extends AbstractModel
{
    /**
     * @var float Allocated credit
     */
    public $AllocatedCredit;

    /**
     * @var float Total credit
     */
    public $TotalCredit;

    /**
     * @var float Remaining credit
     */
    public $RemainingCredit;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $AllocatedCredit Allocated credit
     * @param float $TotalCredit Total credit
     * @param float $RemainingCredit Remaining credit
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
        if (array_key_exists("AllocatedCredit",$param) and $param["AllocatedCredit"] !== null) {
            $this->AllocatedCredit = $param["AllocatedCredit"];
        }

        if (array_key_exists("TotalCredit",$param) and $param["TotalCredit"] !== null) {
            $this->TotalCredit = $param["TotalCredit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
