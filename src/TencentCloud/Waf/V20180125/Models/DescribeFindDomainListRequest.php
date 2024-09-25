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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFindDomainList request structure.
 *
 * @method integer getOffset() Obtain Pagination
 * @method void setOffset(integer $Offset) Set Pagination
 * @method integer getLimit() Obtain Capacity per page
 * @method void setLimit(integer $Limit) Set Capacity per page
 * @method string getKey() Obtain Filter criteria.
 * @method void setKey(string $Key) Set Filter criteria.
 * @method string getIsWafDomain() Obtain Whether to access WAF
 * @method void setIsWafDomain(string $IsWafDomain) Set Whether to access WAF
 * @method string getBy() Obtain Sort parameters
 * @method void setBy(string $By) Set Sort parameters
 * @method string getOrder() Obtain Sorting method
 * @method void setOrder(string $Order) Set Sorting method
 */
class DescribeFindDomainListRequest extends AbstractModel
{
    /**
     * @var integer Pagination
     */
    public $Offset;

    /**
     * @var integer Capacity per page
     */
    public $Limit;

    /**
     * @var string Filter criteria.
     */
    public $Key;

    /**
     * @var string Whether to access WAF
     */
    public $IsWafDomain;

    /**
     * @var string Sort parameters
     */
    public $By;

    /**
     * @var string Sorting method
     */
    public $Order;

    /**
     * @param integer $Offset Pagination
     * @param integer $Limit Capacity per page
     * @param string $Key Filter criteria.
     * @param string $IsWafDomain Whether to access WAF
     * @param string $By Sort parameters
     * @param string $Order Sorting method
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("IsWafDomain",$param) and $param["IsWafDomain"] !== null) {
            $this->IsWafDomain = $param["IsWafDomain"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
