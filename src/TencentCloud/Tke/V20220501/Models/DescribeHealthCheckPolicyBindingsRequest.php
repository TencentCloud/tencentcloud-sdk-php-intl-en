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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHealthCheckPolicyBindings request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getFilter() Obtain ·  HealthCheckPolicyName
    Filter by [Health Check Rule Name].
    Type: String
        Required: No
 * @method void setFilter(array $Filter) Set ·  HealthCheckPolicyName
    Filter by [Health Check Rule Name].
    Type: String
        Required: No
 * @method integer getLimit() Obtain Maximum number of output entries. Default value: 20; maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of output entries. Default value: 20; maximum value: 100.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 */
class DescribeHealthCheckPolicyBindingsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array ·  HealthCheckPolicyName
    Filter by [Health Check Rule Name].
    Type: String
        Required: No
     */
    public $Filter;

    /**
     * @var integer Maximum number of output entries. Default value: 20; maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $Filter ·  HealthCheckPolicyName
    Filter by [Health Check Rule Name].
    Type: String
        Required: No
     * @param integer $Limit Maximum number of output entries. Default value: 20; maximum value: 100.
     * @param integer $Offset Offset. Default value: 0
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
