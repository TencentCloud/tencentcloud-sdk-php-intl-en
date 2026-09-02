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
 * DescribeBaselinePolicyList request structure.
 *
 * @method string getPolicyType() Obtain <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method void setPolicyType(string $PolicyType) Set <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Universal Filter Criteria. Supported filter fields are as follows:</p><li>Name - Policy Name (fuzzy matching)</li><li>Enable - whether enabled</li><li>CycleScanEnable - whether period scanning is enabled</li>
 * @method void setFilters(array $Filters) Set <p>Universal Filter Criteria. Supported filter fields are as follows:</p><li>Name - Policy Name (fuzzy matching)</li><li>Enable - whether enabled</li><li>CycleScanEnable - whether period scanning is enabled</li>
 * @method integer getLimit() Obtain <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
 * @method integer getOffset() Obtain <p>Starting offset amount for paging query. It starts from 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Starting offset amount for paging query. It starts from 0.</p>
 */
class DescribeBaselinePolicyListRequest extends AbstractModel
{
    /**
     * @var string <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     */
    public $PolicyType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Universal Filter Criteria. Supported filter fields are as follows:</p><li>Name - Policy Name (fuzzy matching)</li><li>Enable - whether enabled</li><li>CycleScanEnable - whether period scanning is enabled</li>
     */
    public $Filters;

    /**
     * @var integer <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Starting offset amount for paging query. It starts from 0.</p>
     */
    public $Offset;

    /**
     * @param string $PolicyType <p>Baseline policy type. Values:</p><ul><li>SYSTEM: system policy (CSIP built-in)</li><li>SELF: user-defined policy</li></ul>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Universal Filter Criteria. Supported filter fields are as follows:</p><li>Name - Policy Name (fuzzy matching)</li><li>Enable - whether enabled</li><li>CycleScanEnable - whether period scanning is enabled</li>
     * @param integer $Limit <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
     * @param integer $Offset <p>Starting offset amount for paging query. It starts from 0.</p>
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
        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
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
