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
 * DescribeBillSummaryByPayMode request structure.
 *
 * @method string getBillMonth() Obtain Bill month in the format of "yyyy-MM"
 * @method void setBillMonth(string $BillMonth) Set Bill month in the format of "yyyy-MM"
 * @method integer getCustomerUin() Obtain Customer UIN
 * @method void setCustomerUin(integer $CustomerUin) Set Customer UIN
 */
class DescribeBillSummaryByPayModeRequest extends AbstractModel
{
    /**
     * @var string Bill month in the format of "yyyy-MM"
     */
    public $BillMonth;

    /**
     * @var integer Customer UIN
     */
    public $CustomerUin;

    /**
     * @param string $BillMonth Bill month in the format of "yyyy-MM"
     * @param integer $CustomerUin Customer UIN
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
        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }

        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }
    }
}
