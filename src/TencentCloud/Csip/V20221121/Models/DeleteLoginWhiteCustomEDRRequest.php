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
 * DeleteLoginWhiteCustomEDR request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getIds() Obtain <p>List of explicitly selected rule IDs, up to 1,000; mutually exclusive with SelectAll</p>
 * @method void setIds(array $Ids) Set <p>List of explicitly selected rule IDs, up to 1,000; mutually exclusive with SelectAll</p>
 * @method boolean getSelectAll() Obtain <p>Select all across pages: true - Delete all rules that meet Filters (Filters is required at this point). false - Delete only Ids</p>
 * @method void setSelectAll(boolean $SelectAll) Set <p>Select all across pages: true - Delete all rules that meet Filters (Filters is required at this point). false - Delete only Ids</p>
 * @method array getTargetAppIDs() Obtain <p>List of target account AppIds for multi-account, up to 1000; being empty indicates only the current account; returns InvalidParameter when input but no permissions at all</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) Set <p>List of target account AppIds for multi-account, up to 1000; being empty indicates only the current account; returns InvalidParameter when input but no permissions at all</p>
 * @method array getExcludeIds() Obtain <p>List of excluded rule IDs, up to 1000</p>
 * @method void setExcludeIds(array $ExcludeIds) Set <p>List of excluded rule IDs, up to 1000</p>
 * @method array getFilters() Obtain <p>Filtering criteria under select all</p>
 * @method void setFilters(array $Filters) Set <p>Filtering criteria under select all</p>
 */
class DeleteLoginWhiteCustomEDRRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>List of explicitly selected rule IDs, up to 1,000; mutually exclusive with SelectAll</p>
     */
    public $Ids;

    /**
     * @var boolean <p>Select all across pages: true - Delete all rules that meet Filters (Filters is required at this point). false - Delete only Ids</p>
     */
    public $SelectAll;

    /**
     * @var array <p>List of target account AppIds for multi-account, up to 1000; being empty indicates only the current account; returns InvalidParameter when input but no permissions at all</p>
     */
    public $TargetAppIDs;

    /**
     * @var array <p>List of excluded rule IDs, up to 1000</p>
     */
    public $ExcludeIds;

    /**
     * @var array <p>Filtering criteria under select all</p>
     */
    public $Filters;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Ids <p>List of explicitly selected rule IDs, up to 1,000; mutually exclusive with SelectAll</p>
     * @param boolean $SelectAll <p>Select all across pages: true - Delete all rules that meet Filters (Filters is required at this point). false - Delete only Ids</p>
     * @param array $TargetAppIDs <p>List of target account AppIds for multi-account, up to 1000; being empty indicates only the current account; returns InvalidParameter when input but no permissions at all</p>
     * @param array $ExcludeIds <p>List of excluded rule IDs, up to 1000</p>
     * @param array $Filters <p>Filtering criteria under select all</p>
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

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }

        if (array_key_exists("ExcludeIds",$param) and $param["ExcludeIds"] !== null) {
            $this->ExcludeIds = $param["ExcludeIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
