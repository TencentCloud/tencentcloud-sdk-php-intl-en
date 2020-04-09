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
 * DescribeClassicLinkInstances request structure.
 *
 * @method array getFilters() Obtain Filter conditions.
<li>vpc-id - String - (Filter condition) The VPC instance ID.</li>
<li>vm-ip - String - (Filter condition) The IP address of the CVM on the basic network.</li>
 * @method void setFilters(array $Filters) Set Filter conditions.
<li>vpc-id - String - (Filter condition) The VPC instance ID.</li>
<li>vm-ip - String - (Filter condition) The IP address of the CVM on the basic network.</li>
 * @method string getOffset() Obtain Offset
 * @method void setOffset(string $Offset) Set Offset
 * @method string getLimit() Obtain The returned quantity
 * @method void setLimit(string $Limit) Set The returned quantity
 */
class DescribeClassicLinkInstancesRequest extends AbstractModel
{
    /**
     * @var array Filter conditions.
<li>vpc-id - String - (Filter condition) The VPC instance ID.</li>
<li>vm-ip - String - (Filter condition) The IP address of the CVM on the basic network.</li>
     */
    public $Filters;

    /**
     * @var string Offset
     */
    public $Offset;

    /**
     * @var string The returned quantity
     */
    public $Limit;

    /**
     * @param array $Filters Filter conditions.
<li>vpc-id - String - (Filter condition) The VPC instance ID.</li>
<li>vm-ip - String - (Filter condition) The IP address of the CVM on the basic network.</li>
     * @param string $Offset Offset
     * @param string $Limit The returned quantity
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
                $obj = new FilterObject();
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
