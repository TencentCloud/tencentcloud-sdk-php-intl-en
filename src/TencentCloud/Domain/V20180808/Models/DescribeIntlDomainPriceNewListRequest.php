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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntlDomainPriceNewList request structure.
 *
 * @method array getTldList() Obtain The list of domain suffixes for which you want to query prices. This parameter defaults to all suffixes.
 * @method void setTldList(array $TldList) Set The list of domain suffixes for which you want to query prices. This parameter defaults to all suffixes.
 * @method array getYear() Obtain The purchase year of the domains for which you want to query prices. This parameter defaults to all years.
 * @method void setYear(array $Year) Set The purchase year of the domains for which you want to query prices. This parameter defaults to all years.
 * @method array getOperation() Obtain The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
 * @method void setOperation(array $Operation) Set The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
 */
class DescribeIntlDomainPriceNewListRequest extends AbstractModel
{
    /**
     * @var array The list of domain suffixes for which you want to query prices. This parameter defaults to all suffixes.
     */
    public $TldList;

    /**
     * @var array The purchase year of the domains for which you want to query prices. This parameter defaults to all years.
     */
    public $Year;

    /**
     * @var array The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
     */
    public $Operation;

    /**
     * @param array $TldList The list of domain suffixes for which you want to query prices. This parameter defaults to all suffixes.
     * @param array $Year The purchase year of the domains for which you want to query prices. This parameter defaults to all years.
     * @param array $Operation The domain purchase type. Valid values: `new`, `renew`, `redem` (redeem), `tran` (transfer in).
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
        if (array_key_exists("TldList",$param) and $param["TldList"] !== null) {
            $this->TldList = $param["TldList"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
