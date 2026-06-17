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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomizedConfigList request structure.
 *
 * @method string getConfigType() Obtain Configuration type. CLB: CLB dimension; SERVER: Domain name dimension; LOCATION: Rule dimension.
 * @method void setConfigType(string $ConfigType) Set Configuration type. CLB: CLB dimension; SERVER: Domain name dimension; LOCATION: Rule dimension.
 * @method integer getOffset() Obtain Pagination offset. Default: 0
 * @method void setOffset(integer $Offset) Set Pagination offset. Default: 0
 * @method integer getLimit() Obtain Number of results. Default: 20
 * @method void setLimit(integer $Limit) Set Number of results. Default: 20
 * @method string getConfigName() Obtain Specify the name of configurations to query. Fuzzy match is supported.
 * @method void setConfigName(string $ConfigName) Set Specify the name of configurations to query. Fuzzy match is supported.
 * @method array getConfigIds() Obtain Configuration ID
 * @method void setConfigIds(array $ConfigIds) Set Configuration ID
 * @method array getFilters() Obtain Filter criteria are as follows:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
 * @method void setFilters(array $Filters) Set Filter criteria are as follows:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
 */
class DescribeCustomizedConfigListRequest extends AbstractModel
{
    /**
     * @var string Configuration type. CLB: CLB dimension; SERVER: Domain name dimension; LOCATION: Rule dimension.
     */
    public $ConfigType;

    /**
     * @var integer Pagination offset. Default: 0
     */
    public $Offset;

    /**
     * @var integer Number of results. Default: 20
     */
    public $Limit;

    /**
     * @var string Specify the name of configurations to query. Fuzzy match is supported.
     */
    public $ConfigName;

    /**
     * @var array Configuration ID
     */
    public $ConfigIds;

    /**
     * @var array Filter criteria are as follows:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
     */
    public $Filters;

    /**
     * @param string $ConfigType Configuration type. CLB: CLB dimension; SERVER: Domain name dimension; LOCATION: Rule dimension.
     * @param integer $Offset Pagination offset. Default: 0
     * @param integer $Limit Number of results. Default: 20
     * @param string $ConfigName Specify the name of configurations to query. Fuzzy match is supported.
     * @param array $ConfigIds Configuration ID
     * @param array $Filters Filter criteria are as follows:
<li> loadbalancer-id - String - Required: No - (Filter condition) Filter by CLB ID, for example: "lb-12345678".</li>
<li> vip - String - Required: No - (Filter condition) Filter by CLB vip, for example: "1.1.1.1", "2204::22:3".</li>
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
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigIds",$param) and $param["ConfigIds"] !== null) {
            $this->ConfigIds = $param["ConfigIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
