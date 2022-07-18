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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscriptions response structure.
 *
 * @method array getSubscriptionSets() Obtain Array of subscriber sets.
 * @method void setSubscriptionSets(array $SubscriptionSets) Set Array of subscriber sets.
 * @method integer getTotalCount() Obtain The total number of returned results.
 * @method void setTotalCount(integer $TotalCount) Set The total number of returned results.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSubscriptionsResponse extends AbstractModel
{
    /**
     * @var array Array of subscriber sets.
     */
    public $SubscriptionSets;

    /**
     * @var integer The total number of returned results.
     */
    public $TotalCount;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $SubscriptionSets Array of subscriber sets.
     * @param integer $TotalCount The total number of returned results.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("SubscriptionSets",$param) and $param["SubscriptionSets"] !== null) {
            $this->SubscriptionSets = [];
            foreach ($param["SubscriptionSets"] as $key => $value){
                $obj = new Subscription();
                $obj->deserialize($value);
                array_push($this->SubscriptionSets, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
