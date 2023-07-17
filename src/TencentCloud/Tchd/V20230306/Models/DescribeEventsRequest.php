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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEvents request structure.
 *
 * @method string getEventDate() Obtain event occurrence date
 * @method void setEventDate(string $EventDate) Set event occurrence date
 * @method array getProductIds() Obtain Query by Product ID(s). Product ID examples: cvm, lb, cdb, cdn, crs.
 * @method void setProductIds(array $ProductIds) Set Query by Product ID(s). Product ID examples: cvm, lb, cdb, cdn, crs.
 * @method array getRegionIds() Obtain  1. Query by Region ID(s). Region ID examples: ap-guangzhou、ap-shanghai、ap-singapore.
2. The region ID for non-region-specific products should be set to non-regional.
 * @method void setRegionIds(array $RegionIds) Set  1. Query by Region ID(s). Region ID examples: ap-guangzhou、ap-shanghai、ap-singapore.
2. The region ID for non-region-specific products should be set to non-regional.
 */
class DescribeEventsRequest extends AbstractModel
{
    /**
     * @var string event occurrence date
     */
    public $EventDate;

    /**
     * @var array Query by Product ID(s). Product ID examples: cvm, lb, cdb, cdn, crs.
     */
    public $ProductIds;

    /**
     * @var array  1. Query by Region ID(s). Region ID examples: ap-guangzhou、ap-shanghai、ap-singapore.
2. The region ID for non-region-specific products should be set to non-regional.
     */
    public $RegionIds;

    /**
     * @param string $EventDate event occurrence date
     * @param array $ProductIds Query by Product ID(s). Product ID examples: cvm, lb, cdb, cdn, crs.
     * @param array $RegionIds  1. Query by Region ID(s). Region ID examples: ap-guangzhou、ap-shanghai、ap-singapore.
2. The region ID for non-region-specific products should be set to non-regional.
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
        if (array_key_exists("EventDate",$param) and $param["EventDate"] !== null) {
            $this->EventDate = $param["EventDate"];
        }

        if (array_key_exists("ProductIds",$param) and $param["ProductIds"] !== null) {
            $this->ProductIds = $param["ProductIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }
    }
}
