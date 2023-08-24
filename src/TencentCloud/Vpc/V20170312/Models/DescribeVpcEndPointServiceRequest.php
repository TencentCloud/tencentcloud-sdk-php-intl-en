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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcEndPointService request structure.
 *
 * @method array getFilters() Obtain Filters. `EndPointServiceIds` and `Filters` cannot be both passed in. 
<li>`service-id` - String - Unique endpoint service ID. </li>
<li>`service-name` - String - Endpoint service instance name. </li>
<li>`service-instance-id` - String - Unique backend service ID in the format of `lb-xxx`. </li>
<li>`service-type` - String - Backend PaaS service type. It can be `CLB`, `CDB` or `CRS`. It defaults to `CLB` if not specified. </li>
 * @method void setFilters(array $Filters) Set Filters. `EndPointServiceIds` and `Filters` cannot be both passed in. 
<li>`service-id` - String - Unique endpoint service ID. </li>
<li>`service-name` - String - Endpoint service instance name. </li>
<li>`service-instance-id` - String - Unique backend service ID in the format of `lb-xxx`. </li>
<li>`service-type` - String - Backend PaaS service type. It can be `CLB`, `CDB` or `CRS`. It defaults to `CLB` if not specified. </li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results per page; default value: 20; maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results per page; default value: 20; maximum value: 100.
 * @method array getEndPointServiceIds() Obtain Endpoint service ID `EndPointServiceIds` and `Filters` cannot be both passed in. 
 * @method void setEndPointServiceIds(array $EndPointServiceIds) Set Endpoint service ID `EndPointServiceIds` and `Filters` cannot be both passed in. 
 * @method boolean getIsListAuthorizedEndPointService() Obtain 
 * @method void setIsListAuthorizedEndPointService(boolean $IsListAuthorizedEndPointService) Set 
 */
class DescribeVpcEndPointServiceRequest extends AbstractModel
{
    /**
     * @var array Filters. `EndPointServiceIds` and `Filters` cannot be both passed in. 
<li>`service-id` - String - Unique endpoint service ID. </li>
<li>`service-name` - String - Endpoint service instance name. </li>
<li>`service-instance-id` - String - Unique backend service ID in the format of `lb-xxx`. </li>
<li>`service-type` - String - Backend PaaS service type. It can be `CLB`, `CDB` or `CRS`. It defaults to `CLB` if not specified. </li>
     */
    public $Filters;

    /**
     * @var integer Offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results per page; default value: 20; maximum value: 100.
     */
    public $Limit;

    /**
     * @var array Endpoint service ID `EndPointServiceIds` and `Filters` cannot be both passed in. 
     */
    public $EndPointServiceIds;

    /**
     * @var boolean 
     */
    public $IsListAuthorizedEndPointService;

    /**
     * @param array $Filters Filters. `EndPointServiceIds` and `Filters` cannot be both passed in. 
<li>`service-id` - String - Unique endpoint service ID. </li>
<li>`service-name` - String - Endpoint service instance name. </li>
<li>`service-instance-id` - String - Unique backend service ID in the format of `lb-xxx`. </li>
<li>`service-type` - String - Backend PaaS service type. It can be `CLB`, `CDB` or `CRS`. It defaults to `CLB` if not specified. </li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of results per page; default value: 20; maximum value: 100.
     * @param array $EndPointServiceIds Endpoint service ID `EndPointServiceIds` and `Filters` cannot be both passed in. 
     * @param boolean $IsListAuthorizedEndPointService 
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

        if (array_key_exists("EndPointServiceIds",$param) and $param["EndPointServiceIds"] !== null) {
            $this->EndPointServiceIds = $param["EndPointServiceIds"];
        }

        if (array_key_exists("IsListAuthorizedEndPointService",$param) and $param["IsListAuthorizedEndPointService"] !== null) {
            $this->IsListAuthorizedEndPointService = $param["IsListAuthorizedEndPointService"];
        }
    }
}
