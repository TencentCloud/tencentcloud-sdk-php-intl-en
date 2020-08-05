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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSchedulingDomainList request structure.
 *
 * @method integer getLimit() Obtain Number of items in a page. Returned results are not paged if you enter '0'.
 * @method void setLimit(integer $Limit) Set Number of items in a page. Returned results are not paged if you enter '0'.
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages - 1) * items per page
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages - 1) * items per page
 * @method string getDomain() Obtain (Optional) Filter by specific domain name
 * @method void setDomain(string $Domain) Set (Optional) Filter by specific domain name
 */
class DescribeSchedulingDomainListRequest extends AbstractModel
{
    /**
     * @var integer Number of items in a page. Returned results are not paged if you enter '0'.
     */
    public $Limit;

    /**
     * @var integer Starting offset of the page. Value: (number of pages - 1) * items per page
     */
    public $Offset;

    /**
     * @var string (Optional) Filter by specific domain name
     */
    public $Domain;

    /**
     * @param integer $Limit Number of items in a page. Returned results are not paged if you enter '0'.
     * @param integer $Offset Starting offset of the page. Value: (number of pages - 1) * items per page
     * @param string $Domain (Optional) Filter by specific domain name
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
