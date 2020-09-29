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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummaryByProduct request structure.
 *
 * @method string getPayerUin() Obtain Queries bill data user's UIN
 * @method void setPayerUin(string $PayerUin) Set Queries bill data user's UIN
 * @method string getBeginTime() Obtain Only beginning in the current month is supported, and it must be the same month as the EndTime. For example, 2018-09-01 00:00:00.
 * @method void setBeginTime(string $BeginTime) Set Only beginning in the current month is supported, and it must be the same month as the EndTime. For example, 2018-09-01 00:00:00.
 * @method string getEndTime() Obtain Only ending in the current month is supported, and it must be the same month as the BeginTime. For example, 2018-09-30 23:59:59.
 * @method void setEndTime(string $EndTime) Set Only ending in the current month is supported, and it must be the same month as the BeginTime. For example, 2018-09-30 23:59:59.
 */
class DescribeBillSummaryByProductRequest extends AbstractModel
{
    /**
     * @var string Queries bill data user's UIN
     */
    public $PayerUin;

    /**
     * @var string Only beginning in the current month is supported, and it must be the same month as the EndTime. For example, 2018-09-01 00:00:00.
     */
    public $BeginTime;

    /**
     * @var string Only ending in the current month is supported, and it must be the same month as the BeginTime. For example, 2018-09-30 23:59:59.
     */
    public $EndTime;

    /**
     * @param string $PayerUin Queries bill data user's UIN
     * @param string $BeginTime Only beginning in the current month is supported, and it must be the same month as the EndTime. For example, 2018-09-01 00:00:00.
     * @param string $EndTime Only ending in the current month is supported, and it must be the same month as the BeginTime. For example, 2018-09-30 23:59:59.
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
