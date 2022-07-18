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
 * DeleteTopics request structure.
 *
 * @method array getTopicSets() Obtain Topic set. Up to 20 topics can be deleted at a time.
 * @method void setTopicSets(array $TopicSets) Set Topic set. Up to 20 topics can be deleted at a time.
 * @method string getClusterId() Obtain Pulsar cluster ID.
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID.
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method boolean getForce() Obtain Whether to forcibly delete a topic. Default value: `false`.
 * @method void setForce(boolean $Force) Set Whether to forcibly delete a topic. Default value: `false`.
 */
class DeleteTopicsRequest extends AbstractModel
{
    /**
     * @var array Topic set. Up to 20 topics can be deleted at a time.
     */
    public $TopicSets;

    /**
     * @var string Pulsar cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var boolean Whether to forcibly delete a topic. Default value: `false`.
     */
    public $Force;

    /**
     * @param array $TopicSets Topic set. Up to 20 topics can be deleted at a time.
     * @param string $ClusterId Pulsar cluster ID.
     * @param string $EnvironmentId Environment (namespace) name.
     * @param boolean $Force Whether to forcibly delete a topic. Default value: `false`.
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
        if (array_key_exists("TopicSets",$param) and $param["TopicSets"] !== null) {
            $this->TopicSets = [];
            foreach ($param["TopicSets"] as $key => $value){
                $obj = new TopicRecord();
                $obj->deserialize($value);
                array_push($this->TopicSets, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
