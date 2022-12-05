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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePendingRiskInfo response structure.
 *
 * @method boolean getIsPaidUsr() Obtain Whether the user is a paid user
 * @method void setIsPaidUsr(boolean $IsPaidUsr) Set Whether the user is a paid user
 * @method integer getAttackingCount() Obtain Number of resources being attacked
 * @method void setAttackingCount(integer $AttackingCount) Set Number of resources being attacked
 * @method integer getBlockingCount() Obtain Number of resource blocked
 * @method void setBlockingCount(integer $BlockingCount) Set Number of resource blocked
 * @method integer getExpiredCount() Obtain Number of expired resources
 * @method void setExpiredCount(integer $ExpiredCount) Set Number of expired resources
 * @method integer getTotal() Obtain Total pending risk events
 * @method void setTotal(integer $Total) Set Total pending risk events
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribePendingRiskInfoResponse extends AbstractModel
{
    /**
     * @var boolean Whether the user is a paid user
     */
    public $IsPaidUsr;

    /**
     * @var integer Number of resources being attacked
     */
    public $AttackingCount;

    /**
     * @var integer Number of resource blocked
     */
    public $BlockingCount;

    /**
     * @var integer Number of expired resources
     */
    public $ExpiredCount;

    /**
     * @var integer Total pending risk events
     */
    public $Total;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $IsPaidUsr Whether the user is a paid user
     * @param integer $AttackingCount Number of resources being attacked
     * @param integer $BlockingCount Number of resource blocked
     * @param integer $ExpiredCount Number of expired resources
     * @param integer $Total Total pending risk events
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
        if (array_key_exists("IsPaidUsr",$param) and $param["IsPaidUsr"] !== null) {
            $this->IsPaidUsr = $param["IsPaidUsr"];
        }

        if (array_key_exists("AttackingCount",$param) and $param["AttackingCount"] !== null) {
            $this->AttackingCount = $param["AttackingCount"];
        }

        if (array_key_exists("BlockingCount",$param) and $param["BlockingCount"] !== null) {
            $this->BlockingCount = $param["BlockingCount"];
        }

        if (array_key_exists("ExpiredCount",$param) and $param["ExpiredCount"] !== null) {
            $this->ExpiredCount = $param["ExpiredCount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
