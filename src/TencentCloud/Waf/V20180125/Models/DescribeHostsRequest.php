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
 * DescribeHosts request structure.
 *
 * @method string getDomain() Obtain Protection domain. If a specific protection domain is to be queried, this parameter should be input. It requires an accurate domain and does not support fuzzy search.
 * @method void setDomain(string $Domain) Set Protection domain. If a specific protection domain is to be queried, this parameter should be input. It requires an accurate domain and does not support fuzzy search.
 * @method string getDomainId() Obtain Protection domain ID. If it is to query a specific protection domain, this parameter is input, requiring the accurate domain ID. This parameter does not support fuzzy search.
 * @method void setDomainId(string $DomainId) Set Protection domain ID. If it is to query a specific protection domain, this parameter is input, requiring the accurate domain ID. This parameter does not support fuzzy search.
 * @method string getSearch() Obtain Searching criteria, fuzzy search on domain based on this parameter
 * @method void setSearch(string $Search) Set Searching criteria, fuzzy search on domain based on this parameter
 * @method SearchItem getItem() Obtain Complex search criteria
 * @method void setItem(SearchItem $Item) Set Complex search criteria
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 */
class DescribeHostsRequest extends AbstractModel
{
    /**
     * @var string Protection domain. If a specific protection domain is to be queried, this parameter should be input. It requires an accurate domain and does not support fuzzy search.
     */
    public $Domain;

    /**
     * @var string Protection domain ID. If it is to query a specific protection domain, this parameter is input, requiring the accurate domain ID. This parameter does not support fuzzy search.
     */
    public $DomainId;

    /**
     * @var string Searching criteria, fuzzy search on domain based on this parameter
     */
    public $Search;

    /**
     * @var SearchItem Complex search criteria
     */
    public $Item;

    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @param string $Domain Protection domain. If a specific protection domain is to be queried, this parameter should be input. It requires an accurate domain and does not support fuzzy search.
     * @param string $DomainId Protection domain ID. If it is to query a specific protection domain, this parameter is input, requiring the accurate domain ID. This parameter does not support fuzzy search.
     * @param string $Search Searching criteria, fuzzy search on domain based on this parameter
     * @param SearchItem $Item Complex search criteria
     * @param string $InstanceID Instance ID
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            $this->Search = $param["Search"];
        }

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new SearchItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
