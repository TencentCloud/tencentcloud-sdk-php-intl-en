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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomizedConfigList request structure.
 *
 * @method string getConfigType() Obtain Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
 * @method void setConfigType(string $ConfigType) Set Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
 * @method integer getOffset() Obtain Pagination offset. Default: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default: 0.
 * @method integer getLimit() Obtain Number of results per page. Default: 20.
 * @method void setLimit(integer $Limit) Set Number of results per page. Default: 20.
 * @method string getConfigName() Obtain Specifies the name of configs to query. Fuzzy match is supported.
 * @method void setConfigName(string $ConfigName) Set Specifies the name of configs to query. Fuzzy match is supported.
 * @method array getUconfigIds() Obtain Configuration ID.
 * @method void setUconfigIds(array $UconfigIds) Set Configuration ID.
 * @method array getFilters() Obtain The filters are:
<li> loadbalancer-id - String - Required: no - (filter) CLB instance ID, such as "lb-12345678". </li>
<li> vip - String - Required: no - (filter) CLB instance VIP, such as "1.1.1.1" and "2204::22:3". </li>
 * @method void setFilters(array $Filters) Set The filters are:
<li> loadbalancer-id - String - Required: no - (filter) CLB instance ID, such as "lb-12345678". </li>
<li> vip - String - Required: no - (filter) CLB instance VIP, such as "1.1.1.1" and "2204::22:3". </li>
 */
class DescribeCustomizedConfigListRequest extends AbstractModel
{
    /**
     * @var string Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
     */
    public $ConfigType;

    /**
     * @var integer Pagination offset. Default: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results per page. Default: 20.
     */
    public $Limit;

    /**
     * @var string Specifies the name of configs to query. Fuzzy match is supported.
     */
    public $ConfigName;

    /**
     * @var array Configuration ID.
     */
    public $UconfigIds;

    /**
     * @var array The filters are:
<li> loadbalancer-id - String - Required: no - (filter) CLB instance ID, such as "lb-12345678". </li>
<li> vip - String - Required: no - (filter) CLB instance VIP, such as "1.1.1.1" and "2204::22:3". </li>
     */
    public $Filters;

    /**
     * @param string $ConfigType Configuration type. Valid values: `CLB` (CLB-specific configs), `SERVER` (domain name-specific configs), and `LOCATION` (forwarding rule-specific configs).
     * @param integer $Offset Pagination offset. Default: 0.
     * @param integer $Limit Number of results per page. Default: 20.
     * @param string $ConfigName Specifies the name of configs to query. Fuzzy match is supported.
     * @param array $UconfigIds Configuration ID.
     * @param array $Filters The filters are:
<li> loadbalancer-id - String - Required: no - (filter) CLB instance ID, such as "lb-12345678". </li>
<li> vip - String - Required: no - (filter) CLB instance VIP, such as "1.1.1.1" and "2204::22:3". </li>
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

        if (array_key_exists("UconfigIds",$param) and $param["UconfigIds"] !== null) {
            $this->UconfigIds = $param["UconfigIds"];
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
