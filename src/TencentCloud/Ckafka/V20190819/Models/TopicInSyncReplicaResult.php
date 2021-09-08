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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Set of topic replicas and details
 *
 * @method array getTopicInSyncReplicaList() Obtain Set of topic details and replicas
 * @method void setTopicInSyncReplicaList(array $TopicInSyncReplicaList) Set Set of topic details and replicas
 * @method integer getTotalCount() Obtain Total number
 * @method void setTotalCount(integer $TotalCount) Set Total number
 */
class TopicInSyncReplicaResult extends AbstractModel
{
    /**
     * @var array Set of topic details and replicas
     */
    public $TopicInSyncReplicaList;

    /**
     * @var integer Total number
     */
    public $TotalCount;

    /**
     * @param array $TopicInSyncReplicaList Set of topic details and replicas
     * @param integer $TotalCount Total number
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
        if (array_key_exists("TopicInSyncReplicaList",$param) and $param["TopicInSyncReplicaList"] !== null) {
            $this->TopicInSyncReplicaList = [];
            foreach ($param["TopicInSyncReplicaList"] as $key => $value){
                $obj = new TopicInSyncReplicaInfo();
                $obj->deserialize($value);
                array_push($this->TopicInSyncReplicaList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
