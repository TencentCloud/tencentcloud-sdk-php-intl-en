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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bucket information of the table
 *
 * @method string getDistributionType() Obtain Bucket type:
●Hash: hash bucket
●Random: random number bucket

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDistributionType(string $DistributionType) Set Bucket type:
●Hash: hash bucket
●Random: random number bucket

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCount() Obtain Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCount(integer $Count) Set Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Distribution extends AbstractModel
{
    /**
     * @var string Bucket type:
●Hash: hash bucket
●Random: random number bucket

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DistributionType;

    /**
     * @var integer Number of buckets
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Count;

    /**
     * @param string $DistributionType Bucket type:
●Hash: hash bucket
●Random: random number bucket

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Count Number of buckets
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
        if (array_key_exists("DistributionType",$param) and $param["DistributionType"] !== null) {
            $this->DistributionType = $param["DistributionType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
