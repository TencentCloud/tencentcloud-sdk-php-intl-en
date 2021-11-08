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
 * Queries reseller's credit allocation records and returns individual records
 *
 * @method integer getCreditAssignUin() Obtain Credit allocatee UIN
 * @method void setCreditAssignUin(integer $CreditAssignUin) Set Credit allocatee UIN
 * @method string getAssginTime() Obtain Allocation time
 * @method void setAssginTime(string $AssginTime) Set Allocation time
 * @method string getOperator() Obtain Operator
 * @method void setOperator(string $Operator) Set Operator
 * @method float getCreditAmount() Obtain Allocated credit value
 * @method void setCreditAmount(float $CreditAmount) Set Allocated credit value
 */
class QueryUinCreditHistoryData extends AbstractModel
{
    /**
     * @var integer Credit allocatee UIN
     */
    public $CreditAssignUin;

    /**
     * @var string Allocation time
     */
    public $AssginTime;

    /**
     * @var string Operator
     */
    public $Operator;

    /**
     * @var float Allocated credit value
     */
    public $CreditAmount;

    /**
     * @param integer $CreditAssignUin Credit allocatee UIN
     * @param string $AssginTime Allocation time
     * @param string $Operator Operator
     * @param float $CreditAmount Allocated credit value
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
        if (array_key_exists("CreditAssignUin",$param) and $param["CreditAssignUin"] !== null) {
            $this->CreditAssignUin = $param["CreditAssignUin"];
        }

        if (array_key_exists("AssginTime",$param) and $param["AssginTime"] !== null) {
            $this->AssginTime = $param["AssginTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CreditAmount",$param) and $param["CreditAmount"] !== null) {
            $this->CreditAmount = $param["CreditAmount"];
        }
    }
}
