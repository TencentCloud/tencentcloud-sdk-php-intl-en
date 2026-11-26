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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInferenceDomains request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getServiceId() Obtain <p>Inference service ID.</p>
 * @method void setServiceId(string $ServiceId) Set <p>Inference service ID.</p>
 * @method string getSortBy() Obtain <p>Sorting field.</p><p>Enumeration values:</p><ul><li>CreateTime: domain name creation time;</li><li>UpdateTime: domain modification time.</li></ul><p>Default value: CreateTime.</p>
 * @method void setSortBy(string $SortBy) Set <p>Sorting field.</p><p>Enumeration values:</p><ul><li>CreateTime: domain name creation time;</li><li>UpdateTime: domain modification time.</li></ul><p>Default value: CreateTime.</p>
 * @method string getSortOrder() Obtain <p>Sorting method.</p><p>Enumeration values:</p><ul><li>Asc: in ascending order;</li><li>Desc: in descending order.</li></ul><p>Default value: Desc.</p>
 * @method void setSortOrder(string $SortOrder) Set <p>Sorting method.</p><p>Enumeration values:</p><ul><li>Asc: in ascending order;</li><li>Desc: in descending order.</li></ul><p>Default value: Desc.</p>
 * @method integer getOffset() Obtain <p>Paginated query offset.</p><p>Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Paginated query offset.</p><p>Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Paginated query limit.</p><p>Default value: 20.</p><p>Maximum value: 200.</p>
 * @method void setLimit(integer $Limit) Set <p>Paginated query limit.</p><p>Default value: 20.</p><p>Maximum value: 200.</p>
 */
class DescribeInferenceDomainsRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Inference service ID.</p>
     */
    public $ServiceId;

    /**
     * @var string <p>Sorting field.</p><p>Enumeration values:</p><ul><li>CreateTime: domain name creation time;</li><li>UpdateTime: domain modification time.</li></ul><p>Default value: CreateTime.</p>
     */
    public $SortBy;

    /**
     * @var string <p>Sorting method.</p><p>Enumeration values:</p><ul><li>Asc: in ascending order;</li><li>Desc: in descending order.</li></ul><p>Default value: Desc.</p>
     */
    public $SortOrder;

    /**
     * @var integer <p>Paginated query offset.</p><p>Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Paginated query limit.</p><p>Default value: 20.</p><p>Maximum value: 200.</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $ServiceId <p>Inference service ID.</p>
     * @param string $SortBy <p>Sorting field.</p><p>Enumeration values:</p><ul><li>CreateTime: domain name creation time;</li><li>UpdateTime: domain modification time.</li></ul><p>Default value: CreateTime.</p>
     * @param string $SortOrder <p>Sorting method.</p><p>Enumeration values:</p><ul><li>Asc: in ascending order;</li><li>Desc: in descending order.</li></ul><p>Default value: Desc.</p>
     * @param integer $Offset <p>Paginated query offset.</p><p>Default value: 0.</p>
     * @param integer $Limit <p>Paginated query limit.</p><p>Default value: 20.</p><p>Maximum value: 200.</p>
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
