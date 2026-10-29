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
 * DescribeAvailableOriginACLFamily request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method array getFilters() Obtain <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all available versions under the current site are returned. The IP range control domain of origin protection includes the standard control domain and the streamlined control domain. The main difference between the standard control domain and the streamlined control domain is the quantity difference of origin IP ranges provided. The latter has fewer IP ranges, however it is limited in use. Contact technical support if needed. Specific values are as follows:<br>Detailed filter criteria are as follows:<br>OriginACLFamily: filter by control domain;</p><li>gaz: standard global availability zone control domain;</li><li>mlc: standard Chinese mainland availability zone control domain;</li><li>emc: standard global (excluding Chinese mainland) availability zone control domain;</li><li>plat-gaz: streamlined global availability zone control domain;</li><li>plat-mlc: streamlined Chinese mainland availability zone control domain;</li><li>plat-emc: streamlined global (excluding Chinese mainland) availability zone control domain;</li><li>plat-specific-gaz: custom edition global availability zone control domain;</li><li>plat-specific-mlc: custom edition Chinese mainland availability zone control domain;</li><li>plat-specific-emc: custom edition global (excluding Chinese mainland) availability zone control domain.</li>
 * @method void setFilters(array $Filters) Set <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all available versions under the current site are returned. The IP range control domain of origin protection includes the standard control domain and the streamlined control domain. The main difference between the standard control domain and the streamlined control domain is the quantity difference of origin IP ranges provided. The latter has fewer IP ranges, however it is limited in use. Contact technical support if needed. Specific values are as follows:<br>Detailed filter criteria are as follows:<br>OriginACLFamily: filter by control domain;</p><li>gaz: standard global availability zone control domain;</li><li>mlc: standard Chinese mainland availability zone control domain;</li><li>emc: standard global (excluding Chinese mainland) availability zone control domain;</li><li>plat-gaz: streamlined global availability zone control domain;</li><li>plat-mlc: streamlined Chinese mainland availability zone control domain;</li><li>plat-emc: streamlined global (excluding Chinese mainland) availability zone control domain;</li><li>plat-specific-gaz: custom edition global availability zone control domain;</li><li>plat-specific-mlc: custom edition Chinese mainland availability zone control domain;</li><li>plat-specific-emc: custom edition global (excluding Chinese mainland) availability zone control domain.</li>
 * @method integer getOffset() Obtain <p>The offset of paginated query. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>The offset of paginated query. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number limit of paginated query. Default value: 20. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number limit of paginated query. Default value: 20. Maximum value: 100.</p>
 */
class DescribeAvailableOriginACLFamilyRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var array <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all available versions under the current site are returned. The IP range control domain of origin protection includes the standard control domain and the streamlined control domain. The main difference between the standard control domain and the streamlined control domain is the quantity difference of origin IP ranges provided. The latter has fewer IP ranges, however it is limited in use. Contact technical support if needed. Specific values are as follows:<br>Detailed filter criteria are as follows:<br>OriginACLFamily: filter by control domain;</p><li>gaz: standard global availability zone control domain;</li><li>mlc: standard Chinese mainland availability zone control domain;</li><li>emc: standard global (excluding Chinese mainland) availability zone control domain;</li><li>plat-gaz: streamlined global availability zone control domain;</li><li>plat-mlc: streamlined Chinese mainland availability zone control domain;</li><li>plat-emc: streamlined global (excluding Chinese mainland) availability zone control domain;</li><li>plat-specific-gaz: custom edition global availability zone control domain;</li><li>plat-specific-mlc: custom edition Chinese mainland availability zone control domain;</li><li>plat-specific-emc: custom edition global (excluding Chinese mainland) availability zone control domain.</li>
     */
    public $Filters;

    /**
     * @var integer <p>The offset of paginated query. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number limit of paginated query. Default value: 20. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param array $Filters <p>Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all available versions under the current site are returned. The IP range control domain of origin protection includes the standard control domain and the streamlined control domain. The main difference between the standard control domain and the streamlined control domain is the quantity difference of origin IP ranges provided. The latter has fewer IP ranges, however it is limited in use. Contact technical support if needed. Specific values are as follows:<br>Detailed filter criteria are as follows:<br>OriginACLFamily: filter by control domain;</p><li>gaz: standard global availability zone control domain;</li><li>mlc: standard Chinese mainland availability zone control domain;</li><li>emc: standard global (excluding Chinese mainland) availability zone control domain;</li><li>plat-gaz: streamlined global availability zone control domain;</li><li>plat-mlc: streamlined Chinese mainland availability zone control domain;</li><li>plat-emc: streamlined global (excluding Chinese mainland) availability zone control domain;</li><li>plat-specific-gaz: custom edition global availability zone control domain;</li><li>plat-specific-mlc: custom edition Chinese mainland availability zone control domain;</li><li>plat-specific-emc: custom edition global (excluding Chinese mainland) availability zone control domain.</li>
     * @param integer $Offset <p>The offset of paginated query. Default value: 0.</p>
     * @param integer $Limit <p>Number limit of paginated query. Default value: 20. Maximum value: 100.</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
