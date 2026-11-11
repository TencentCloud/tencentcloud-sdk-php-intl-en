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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLoginWhiteCustomListEDR request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter condition array (multiple Filters have an AND relationship). Supports Name: Keyword (SrcIp/UserName/Locations/Remark blurry), SrcIp, UserName, Location, Remark, ModifyBeginTime, ModifyEndTime (time format 2006-01-02 15:04:05); unknown Name is ignored with no error reported</p>
 * @method void setFilters(array $Filters) Set <p>Filter condition array (multiple Filters have an AND relationship). Supports Name: Keyword (SrcIp/UserName/Locations/Remark blurry), SrcIp, UserName, Location, Remark, ModifyBeginTime, ModifyEndTime (time format 2006-01-02 15:04:05); unknown Name is ignored with no error reported</p>
 * @method integer getLimit() Obtain <p>Page size. Default: 10. Upper limit: 100. If 0 or more than 100 is passed, the default or upper limit is used.</p>
 * @method void setLimit(integer $Limit) Set <p>Page size. Default: 10. Upper limit: 100. If 0 or more than 100 is passed, the default or upper limit is used.</p>
 * @method integer getOffset() Obtain <p>Pagination offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset. Default value: 0.</p>
 * @method string getOrder() Obtain <p>Sorting order: ASC - ascending, DESC - descending (not case-sensitive). Default: DESC</p>
 * @method void setOrder(string $Order) Set <p>Sorting order: ASC - ascending, DESC - descending (not case-sensitive). Default: DESC</p>
 * @method string getBy() Obtain <p>Sorting field: CreateTime-creation time, ModifyTime-last modified. Default: ModifyTime. If an illegal value is passed, InvalidParameter is returned.</p>
 * @method void setBy(string $By) Set <p>Sorting field: CreateTime-creation time, ModifyTime-last modified. Default: ModifyTime. If an illegal value is passed, InvalidParameter is returned.</p>
 */
class DescribeLoginWhiteCustomListEDRRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter condition array (multiple Filters have an AND relationship). Supports Name: Keyword (SrcIp/UserName/Locations/Remark blurry), SrcIp, UserName, Location, Remark, ModifyBeginTime, ModifyEndTime (time format 2006-01-02 15:04:05); unknown Name is ignored with no error reported</p>
     */
    public $Filters;

    /**
     * @var integer <p>Page size. Default: 10. Upper limit: 100. If 0 or more than 100 is passed, the default or upper limit is used.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting order: ASC - ascending, DESC - descending (not case-sensitive). Default: DESC</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field: CreateTime-creation time, ModifyTime-last modified. Default: ModifyTime. If an illegal value is passed, InvalidParameter is returned.</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter condition array (multiple Filters have an AND relationship). Supports Name: Keyword (SrcIp/UserName/Locations/Remark blurry), SrcIp, UserName, Location, Remark, ModifyBeginTime, ModifyEndTime (time format 2006-01-02 15:04:05); unknown Name is ignored with no error reported</p>
     * @param integer $Limit <p>Page size. Default: 10. Upper limit: 100. If 0 or more than 100 is passed, the default or upper limit is used.</p>
     * @param integer $Offset <p>Pagination offset. Default value: 0.</p>
     * @param string $Order <p>Sorting order: ASC - ascending, DESC - descending (not case-sensitive). Default: DESC</p>
     * @param string $By <p>Sorting field: CreateTime-creation time, ModifyTime-last modified. Default: ModifyTime. If an illegal value is passed, InvalidParameter is returned.</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
