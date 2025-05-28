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
 * QuerySubAgentsDetailV2 request structure.
 *
 * @method integer getPage() Obtain Page number. starts from 1.
 * @method void setPage(integer $Page) Set Page number. starts from 1.
 * @method integer getPageSize() Obtain Number of items per page. supports up to 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. supports up to 100.
 * @method string getFilterType() Obtain Filter criteria, support the following filter parameters.
Note: Email, SubAgentUin, and ClientUin only support exact search. other conditions support fuzzy retrieval.The following are the definitions of filtering  items:

Name: specifies second-level reseller name.
SubAgentUin: specifies the uin of the second-level reseller.
Remark: specifies remark.
Mobile: specifies the mobile number.
Email: specifies email address.
ClientUin: specifies the Indirect customer uin.
 * @method void setFilterType(string $FilterType) Set Filter criteria, support the following filter parameters.
Note: Email, SubAgentUin, and ClientUin only support exact search. other conditions support fuzzy retrieval.The following are the definitions of filtering  items:

Name: specifies second-level reseller name.
SubAgentUin: specifies the uin of the second-level reseller.
Remark: specifies remark.
Mobile: specifies the mobile number.
Email: specifies email address.
ClientUin: specifies the Indirect customer uin.
 * @method string getFilter() Obtain Filter value
 * @method void setFilter(string $Filter) Set Filter value
 * @method string getOrder() Obtain Sorting method. sorts by binding time in ascending or descending order. defaults to descending order if not specified.
Desc: descending order.
acs: ascending.
 * @method void setOrder(string $Order) Set Sorting method. sorts by binding time in ascending or descending order. defaults to descending order if not specified.
Desc: descending order.
acs: ascending.
 */
class QuerySubAgentsDetailV2Request extends AbstractModel
{
    /**
     * @var integer Page number. starts from 1.
     */
    public $Page;

    /**
     * @var integer Number of items per page. supports up to 100.
     */
    public $PageSize;

    /**
     * @var string Filter criteria, support the following filter parameters.
Note: Email, SubAgentUin, and ClientUin only support exact search. other conditions support fuzzy retrieval.The following are the definitions of filtering  items:

Name: specifies second-level reseller name.
SubAgentUin: specifies the uin of the second-level reseller.
Remark: specifies remark.
Mobile: specifies the mobile number.
Email: specifies email address.
ClientUin: specifies the Indirect customer uin.
     */
    public $FilterType;

    /**
     * @var string Filter value
     */
    public $Filter;

    /**
     * @var string Sorting method. sorts by binding time in ascending or descending order. defaults to descending order if not specified.
Desc: descending order.
acs: ascending.
     */
    public $Order;

    /**
     * @param integer $Page Page number. starts from 1.
     * @param integer $PageSize Number of items per page. supports up to 100.
     * @param string $FilterType Filter criteria, support the following filter parameters.
Note: Email, SubAgentUin, and ClientUin only support exact search. other conditions support fuzzy retrieval.The following are the definitions of filtering  items:

Name: specifies second-level reseller name.
SubAgentUin: specifies the uin of the second-level reseller.
Remark: specifies remark.
Mobile: specifies the mobile number.
Email: specifies email address.
ClientUin: specifies the Indirect customer uin.
     * @param string $Filter Filter value
     * @param string $Order Sorting method. sorts by binding time in ascending or descending order. defaults to descending order if not specified.
Desc: descending order.
acs: ascending.
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
