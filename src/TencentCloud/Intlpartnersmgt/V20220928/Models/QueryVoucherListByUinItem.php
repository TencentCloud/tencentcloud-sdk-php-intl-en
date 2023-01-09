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
 * Voucher information of a single customer
 *
 * @method integer getClientUin() Obtain Customer UIN
 * @method void setClientUin(integer $ClientUin) Set Customer UIN
 * @method integer getTotalCount() Obtain The total number of vouchers
 * @method void setTotalCount(integer $TotalCount) Set The total number of vouchers
 * @method array getData() Obtain Voucher details
 * @method void setData(array $Data) Set Voucher details
 */
class QueryVoucherListByUinItem extends AbstractModel
{
    /**
     * @var integer Customer UIN
     */
    public $ClientUin;

    /**
     * @var integer The total number of vouchers
     */
    public $TotalCount;

    /**
     * @var array Voucher details
     */
    public $Data;

    /**
     * @param integer $ClientUin Customer UIN
     * @param integer $TotalCount The total number of vouchers
     * @param array $Data Voucher details
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new QueryVoucherListByUinVoucherItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
