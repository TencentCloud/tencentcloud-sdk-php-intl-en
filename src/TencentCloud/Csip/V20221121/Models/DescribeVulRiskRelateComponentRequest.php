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
 * DescribeVulRiskRelateComponent request structure.
 *
 * @method integer getVulID() Obtain <p>Vulnerability ID (vul_vuls.id)</p>
 * @method void setVulID(integer $VulID) Set <p>Vulnerability ID (vul_vuls.id)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter conditions array, multi-condition with each other in the AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for component name)</p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions array, multi-condition with each other in the AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for component name)</p>
 */
class DescribeVulRiskRelateComponentRequest extends AbstractModel
{
    /**
     * @var integer <p>Vulnerability ID (vul_vuls.id)</p>
     */
    public $VulID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter conditions array, multi-condition with each other in the AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for component name)</p>
     */
    public $Filters;

    /**
     * @param integer $VulID <p>Vulnerability ID (vul_vuls.id)</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter conditions array, multi-condition with each other in the AND relationship<br>Supported Filter.Name:<br>Keyword: Keyword fuzzy search (fuzzy matching for component name)</p>
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
    }
}
