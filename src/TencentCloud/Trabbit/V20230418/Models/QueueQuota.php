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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the queue usage quota information.
 *
 * @method integer getMaxQueue() Obtain Specifies the maximum number of queues that can be created.
 * @method void setMaxQueue(integer $MaxQueue) Set Specifies the maximum number of queues that can be created.
 * @method integer getUsedQueue() Obtain Number of queues created.
 * @method void setUsedQueue(integer $UsedQueue) Set Number of queues created.
 */
class QueueQuota extends AbstractModel
{
    /**
     * @var integer Specifies the maximum number of queues that can be created.
     */
    public $MaxQueue;

    /**
     * @var integer Number of queues created.
     */
    public $UsedQueue;

    /**
     * @param integer $MaxQueue Specifies the maximum number of queues that can be created.
     * @param integer $UsedQueue Number of queues created.
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
        if (array_key_exists("MaxQueue",$param) and $param["MaxQueue"] !== null) {
            $this->MaxQueue = $param["MaxQueue"];
        }

        if (array_key_exists("UsedQueue",$param) and $param["UsedQueue"] !== null) {
            $this->UsedQueue = $param["UsedQueue"];
        }
    }
}
