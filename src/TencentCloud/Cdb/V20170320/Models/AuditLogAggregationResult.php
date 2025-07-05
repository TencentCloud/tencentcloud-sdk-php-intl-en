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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Analysis result of an audit log
 *
 * @method string getAggregationField() Obtain Aggregation dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAggregationField(string $AggregationField) Set Aggregation dimension
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBuckets() Obtain Result set of an aggregation bucket
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBuckets(array $Buckets) Set Result set of an aggregation bucket
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AuditLogAggregationResult extends AbstractModel
{
    /**
     * @var string Aggregation dimension
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AggregationField;

    /**
     * @var array Result set of an aggregation bucket
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Buckets;

    /**
     * @param string $AggregationField Aggregation dimension
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Buckets Result set of an aggregation bucket
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AggregationField",$param) and $param["AggregationField"] !== null) {
            $this->AggregationField = $param["AggregationField"];
        }

        if (array_key_exists("Buckets",$param) and $param["Buckets"] !== null) {
            $this->Buckets = [];
            foreach ($param["Buckets"] as $key => $value){
                $obj = new Bucket();
                $obj->deserialize($value);
                array_push($this->Buckets, $obj);
            }
        }
    }
}
