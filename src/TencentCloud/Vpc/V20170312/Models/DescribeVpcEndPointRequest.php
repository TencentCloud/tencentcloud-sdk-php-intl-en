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
 * DescribeVpcEndPoint request structure.
 *
 * @method array getFilters() Obtain Filter condition
<li> end-point-service-id - String - (Filter condition) Endpoint service ID.</li>
<li>end-point-name - String - (Filter condition) Endpoint instance name.</li>
<li> end-point-id - String - (Filter condition) Endpoint instance ID.</li>
<li> vpc-id - String - (Filter condition) VPC instance ID.</li>
 * @method void setFilters(array $Filters) Set Filter condition
<li> end-point-service-id - String - (Filter condition) Endpoint service ID.</li>
<li>end-point-name - String - (Filter condition) Endpoint instance name.</li>
<li> end-point-id - String - (Filter condition) Endpoint instance ID.</li>
<li> vpc-id - String - (Filter condition) VPC instance ID.</li>
 * @method integer getOffset() Obtain Offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0.
 * @method integer getLimit() Obtain Number of results per page; default value: 20; maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of results per page; default value: 20; maximum value: 100.
 * @method array getEndPointId() Obtain Endpoint ID list
 * @method void setEndPointId(array $EndPointId) Set Endpoint ID list
 */
class DescribeVpcEndPointRequest extends AbstractModel
{
    /**
     * @var array Filter condition
<li> end-point-service-id - String - (Filter condition) Endpoint service ID.</li>
<li>end-point-name - String - (Filter condition) Endpoint instance name.</li>
<li> end-point-id - String - (Filter condition) Endpoint instance ID.</li>
<li> vpc-id - String - (Filter condition) VPC instance ID.</li>
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
     * @var array Endpoint ID list
     */
    public $EndPointId;

    /**
     * @param array $Filters Filter condition
<li> end-point-service-id - String - (Filter condition) Endpoint service ID.</li>
<li>end-point-name - String - (Filter condition) Endpoint instance name.</li>
<li> end-point-id - String - (Filter condition) Endpoint instance ID.</li>
<li> vpc-id - String - (Filter condition) VPC instance ID.</li>
     * @param integer $Offset Offset. Default value: 0.
     * @param integer $Limit Number of results per page; default value: 20; maximum value: 100.
     * @param array $EndPointId Endpoint ID list
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

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }
    }
}
