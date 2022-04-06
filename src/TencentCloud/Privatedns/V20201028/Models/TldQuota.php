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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TLD quota
 *
 * @method integer getTotal() Obtain Total quota
 * @method void setTotal(integer $Total) Set Total quota
 * @method integer getUsed() Obtain Used quota
 * @method void setUsed(integer $Used) Set Used quota
 * @method integer getStock() Obtain Available quota
 * @method void setStock(integer $Stock) Set Available quota
 * @method integer getQuota() Obtain User’s quota
 * @method void setQuota(integer $Quota) Set User’s quota
 */
class TldQuota extends AbstractModel
{
    /**
     * @var integer Total quota
     */
    public $Total;

    /**
     * @var integer Used quota
     */
    public $Used;

    /**
     * @var integer Available quota
     */
    public $Stock;

    /**
     * @var integer User’s quota
     */
    public $Quota;

    /**
     * @param integer $Total Total quota
     * @param integer $Used Used quota
     * @param integer $Stock Available quota
     * @param integer $Quota User’s quota
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("Stock",$param) and $param["Stock"] !== null) {
            $this->Stock = $param["Stock"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }
    }
}
