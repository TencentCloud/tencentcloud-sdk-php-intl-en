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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostsCertificate request structure.
 *
 * @method string getZoneId() Obtain ID of the site
 * @method void setZoneId(string $ZoneId) Set ID of the site
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method array getFilters() Obtain Query filter
 * @method void setFilters(array $Filters) Set Query filter
 * @method CertSort getSort() Obtain Sorting order
 * @method void setSort(CertSort $Sort) Set Sorting order
 */
class DescribeHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string ID of the site
     */
    public $ZoneId;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 100. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Query filter
     */
    public $Filters;

    /**
     * @var CertSort Sorting order
     */
    public $Sort;

    /**
     * @param string $ZoneId ID of the site
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 100. Maximum value: 1000.
     * @param array $Filters Query filter
     * @param CertSort $Sort Sorting order
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CertFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new CertSort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
