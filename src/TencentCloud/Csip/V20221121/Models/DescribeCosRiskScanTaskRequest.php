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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCosRiskScanTask request structure.
 *
 * @method array getBucketInfoSet() Obtain Bucket details to view
 * @method void setBucketInfoSet(array $BucketInfoSet) Set Bucket details to view
 */
class DescribeCosRiskScanTaskRequest extends AbstractModel
{
    /**
     * @var array Bucket details to view
     */
    public $BucketInfoSet;

    /**
     * @param array $BucketInfoSet Bucket details to view
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
        if (array_key_exists("BucketInfoSet",$param) and $param["BucketInfoSet"] !== null) {
            $this->BucketInfoSet = [];
            foreach ($param["BucketInfoSet"] as $key => $value){
                $obj = new CosBucketInfo();
                $obj->deserialize($value);
                array_push($this->BucketInfoSet, $obj);
            }
        }
    }
}
