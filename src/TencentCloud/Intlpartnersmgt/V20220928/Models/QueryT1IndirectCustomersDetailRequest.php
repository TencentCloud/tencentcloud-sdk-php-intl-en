<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * QueryT1IndirectCustomersDetail request structure.
 *
 * @method integer getSubAgentUin() Obtain Second-level reseller UIN.
 * @method void setSubAgentUin(integer $SubAgentUin) Set Second-level reseller UIN.
 * @method integer getPage() Obtain Pagination parameter: current page number. it starts from 1.
 * @method void setPage(integer $Page) Set Pagination parameter: current page number. it starts from 1.
 * @method integer getPageSize() Obtain Pagination parameter, indicates the number of entries per page. supports [1, 100] data entries per request.
 * @method void setPageSize(integer $PageSize) Set Pagination parameter, indicates the number of entries per page. supports [1, 100] data entries per request.
 */
class QueryT1IndirectCustomersDetailRequest extends AbstractModel
{
    /**
     * @var integer Second-level reseller UIN.
     */
    public $SubAgentUin;

    /**
     * @var integer Pagination parameter: current page number. it starts from 1.
     */
    public $Page;

    /**
     * @var integer Pagination parameter, indicates the number of entries per page. supports [1, 100] data entries per request.
     */
    public $PageSize;

    /**
     * @param integer $SubAgentUin Second-level reseller UIN.
     * @param integer $Page Pagination parameter: current page number. it starts from 1.
     * @param integer $PageSize Pagination parameter, indicates the number of entries per page. supports [1, 100] data entries per request.
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
        if (array_key_exists("SubAgentUin",$param) and $param["SubAgentUin"] !== null) {
            $this->SubAgentUin = $param["SubAgentUin"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
