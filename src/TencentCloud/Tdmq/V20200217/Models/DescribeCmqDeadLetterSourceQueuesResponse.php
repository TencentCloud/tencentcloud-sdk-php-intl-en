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
 * DescribeCmqDeadLetterSourceQueues response structure.
 *
 * @method integer getTotalCount() Obtain Number of eligible queues
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible queues
 * @method array getQueueSet() Obtain Source queues of dead letter queue
 * @method void setQueueSet(array $QueueSet) Set Source queues of dead letter queue
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCmqDeadLetterSourceQueuesResponse extends AbstractModel
{
    /**
     * @var integer Number of eligible queues
     */
    public $TotalCount;

    /**
     * @var array Source queues of dead letter queue
     */
    public $QueueSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Number of eligible queues
     * @param array $QueueSet Source queues of dead letter queue
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("QueueSet",$param) and $param["QueueSet"] !== null) {
            $this->QueueSet = [];
            foreach ($param["QueueSet"] as $key => $value){
                $obj = new CmqDeadLetterSource();
                $obj->deserialize($value);
                array_push($this->QueueSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
