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
 * DescribeVulComponentRelateHost request structure.
 *
 * @method integer getVulID() Obtain <p>Vulnerability ID (vul_vuls.id)</p>
 * @method void setVulID(integer $VulID) Set <p>Vulnerability ID (vul_vuls.id)</p>
 * @method string getName() Obtain <p>Component name.</p>
 * @method void setName(string $Name) Set <p>Component name.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter conditions array, multi-condition with each other are AND relationship<br>Supported Filter.Name:<br>Keyword: keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)</p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions array, multi-condition with each other are AND relationship<br>Supported Filter.Name:<br>Keyword: keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method integer getOffset() Obtain <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 */
class DescribeVulComponentRelateHostRequest extends AbstractModel
{
    /**
     * @var integer <p>Vulnerability ID (vul_vuls.id)</p>
     */
    public $VulID;

    /**
     * @var string <p>Component name.</p>
     */
    public $Name;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter conditions array, multi-condition with each other are AND relationship<br>Supported Filter.Name:<br>Keyword: keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)</p>
     */
    public $Filters;

    /**
     * @var integer <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var integer <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @param integer $VulID <p>Vulnerability ID (vul_vuls.id)</p>
     * @param string $Name <p>Component name.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter conditions array, multi-condition with each other are AND relationship<br>Supported Filter.Name:<br>Keyword: keyword fuzzy search (fuzzy matching for host name/IP/InstanceID)</p>
     * @param integer $Limit <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     * @param integer $Offset <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
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
        if (array_key_exists("VulID",$param) and $param["VulID"] !== null) {
            $this->VulID = $param["VulID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
    }
}
