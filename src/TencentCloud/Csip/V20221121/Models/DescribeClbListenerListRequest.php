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
 * DescribeClbListenerList request structure.
 *
 * @method string getAssetID() Obtain <p>Asset ID.</p>
 * @method void setAssetID(string $AssetID) Set <p>Asset ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method array getFilters() Obtain <p>Filter</p>
 * @method void setFilters(array $Filters) Set <p>Filter</p>
 * @method integer getLimit() Obtain <p>Entries per page</p>
 * @method void setLimit(integer $Limit) Set <p>Entries per page</p>
 * @method integer getOffset() Obtain <p>Offset</p>
 * @method void setOffset(integer $Offset) Set <p>Offset</p>
 * @method string getOrder() Obtain <p>Sorting order</p>
 * @method void setOrder(string $Order) Set <p>Sorting order</p>
 * @method string getBy() Obtain <p>Sorting field.</p>
 * @method void setBy(string $By) Set <p>Sorting field.</p>
 */
class DescribeClbListenerListRequest extends AbstractModel
{
    /**
     * @var string <p>Asset ID.</p>
     */
    public $AssetID;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter</p>
     */
    public $Filters;

    /**
     * @var integer <p>Entries per page</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting order</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field.</p>
     */
    public $By;

    /**
     * @param string $AssetID <p>Asset ID.</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param array $Filters <p>Filter</p>
     * @param integer $Limit <p>Entries per page</p>
     * @param integer $Offset <p>Offset</p>
     * @param string $Order <p>Sorting order</p>
     * @param string $By <p>Sorting field.</p>
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
        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
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
