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
 * Producer
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method integer getCountConnect() Obtain Number of connections.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCountConnect(integer $CountConnect) Set Number of connections.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getConnectionSets() Obtain Set of connections.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConnectionSets(array $ConnectionSets) Set Set of connections.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Producer extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var integer Number of connections.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CountConnect;

    /**
     * @var array Set of connections.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectionSets;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $TopicName Topic name.
     * @param integer $CountConnect Number of connections.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $ConnectionSets Set of connections.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("CountConnect",$param) and $param["CountConnect"] !== null) {
            $this->CountConnect = $param["CountConnect"];
        }

        if (array_key_exists("ConnectionSets",$param) and $param["ConnectionSets"] !== null) {
            $this->ConnectionSets = [];
            foreach ($param["ConnectionSets"] as $key => $value){
                $obj = new Connection();
                $obj->deserialize($value);
                array_push($this->ConnectionSets, $obj);
            }
        }
    }
}
