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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The credit information of direct customers
 *
 * @method integer getUin() Obtain User UIN
 * @method void setUin(integer $Uin) Set User UIN
 * @method float getTotalCredit() Obtain Total credit
 * @method void setTotalCredit(float $TotalCredit) Set Total credit
 * @method float getRemainingCredit() Obtain Remaining credit
 * @method void setRemainingCredit(float $RemainingCredit) Set Remaining credit
 */
class QueryDirectCustomersCreditData extends AbstractModel
{
    /**
     * @var integer User UIN
     */
    public $Uin;

    /**
     * @var float Total credit
     */
    public $TotalCredit;

    /**
     * @var float Remaining credit
     */
    public $RemainingCredit;

    /**
     * @param integer $Uin User UIN
     * @param float $TotalCredit Total credit
     * @param float $RemainingCredit Remaining credit
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("TotalCredit",$param) and $param["TotalCredit"] !== null) {
            $this->TotalCredit = $param["TotalCredit"];
        }

        if (array_key_exists("RemainingCredit",$param) and $param["RemainingCredit"] !== null) {
            $this->RemainingCredit = $param["RemainingCredit"];
        }
    }
}
