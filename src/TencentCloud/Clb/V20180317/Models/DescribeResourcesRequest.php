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
 * DescribeResources request structure.
 *
 * @method integer getLimit() Obtain Number of returned AZ resources. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned AZ resources. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Starting offset of the returned AZ resource list. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting offset of the returned AZ resource list. Default value: 0.
 * @method array getFilters() Obtain Conditions for querying the list of availability zone resources. Detailed filter criteria are as follows:<li>master-zone -- String - Required: No - (Filter criterion) Filter by region type, such as ap-guangzhou-2.</li><li>ip-version -- String - Required: No - (Filter criterion) Filter by IP type. Valid values: IPv4, IPv6, IPv6_Nat.</li><li> isp -- String - Required: No - (Filter criterion) Filter by ISP type, such as BGP, CMCC, CUCC, and CTCC.</li>
 * @method void setFilters(array $Filters) Set Conditions for querying the list of availability zone resources. Detailed filter criteria are as follows:<li>master-zone -- String - Required: No - (Filter criterion) Filter by region type, such as ap-guangzhou-2.</li><li>ip-version -- String - Required: No - (Filter criterion) Filter by IP type. Valid values: IPv4, IPv6, IPv6_Nat.</li><li> isp -- String - Required: No - (Filter criterion) Filter by ISP type, such as BGP, CMCC, CUCC, and CTCC.</li>
 */
class DescribeResourcesRequest extends AbstractModel
{
    /**
     * @var integer Number of returned AZ resources. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Starting offset of the returned AZ resource list. Default value: 0.
     */
    public $Offset;

    /**
     * @var array Conditions for querying the list of availability zone resources. Detailed filter criteria are as follows:<li>master-zone -- String - Required: No - (Filter criterion) Filter by region type, such as ap-guangzhou-2.</li><li>ip-version -- String - Required: No - (Filter criterion) Filter by IP type. Valid values: IPv4, IPv6, IPv6_Nat.</li><li> isp -- String - Required: No - (Filter criterion) Filter by ISP type, such as BGP, CMCC, CUCC, and CTCC.</li>
     */
    public $Filters;

    /**
     * @param integer $Limit Number of returned AZ resources. Default value: 20. Maximum value: 100.
     * @param integer $Offset Starting offset of the returned AZ resource list. Default value: 0.
     * @param array $Filters Conditions for querying the list of availability zone resources. Detailed filter criteria are as follows:<li>master-zone -- String - Required: No - (Filter criterion) Filter by region type, such as ap-guangzhou-2.</li><li>ip-version -- String - Required: No - (Filter criterion) Filter by IP type. Valid values: IPv4, IPv6, IPv6_Nat.</li><li> isp -- String - Required: No - (Filter criterion) Filter by ISP type, such as BGP, CMCC, CUCC, and CTCC.</li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
