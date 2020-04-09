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
 * Consumer information
 *
 * @method string getMemberId() Obtain Unique ID generated for consumer in consumer group by coordinator
 * @method void setMemberId(string $MemberId) Set Unique ID generated for consumer in consumer group by coordinator
 * @method string getClientId() Obtain `client.id` information by the client consumer SDK
 * @method void setClientId(string $ClientId) Set `client.id` information by the client consumer SDK
 * @method string getClientHost() Obtain Generally stores client IP address
 * @method void setClientHost(string $ClientHost) Set Generally stores client IP address
 * @method Assignment getAssignment() Obtain Stores the information of partition assigned to this consumer
 * @method void setAssignment(Assignment $Assignment) Set Stores the information of partition assigned to this consumer
 */
class GroupInfoMember extends AbstractModel
{
    /**
     * @var string Unique ID generated for consumer in consumer group by coordinator
     */
    public $MemberId;

    /**
     * @var string `client.id` information by the client consumer SDK
     */
    public $ClientId;

    /**
     * @var string Generally stores client IP address
     */
    public $ClientHost;

    /**
     * @var Assignment Stores the information of partition assigned to this consumer
     */
    public $Assignment;

    /**
     * @param string $MemberId Unique ID generated for consumer in consumer group by coordinator
     * @param string $ClientId `client.id` information by the client consumer SDK
     * @param string $ClientHost Generally stores client IP address
     * @param Assignment $Assignment Stores the information of partition assigned to this consumer
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("ClientHost",$param) and $param["ClientHost"] !== null) {
            $this->ClientHost = $param["ClientHost"];
        }

        if (array_key_exists("Assignment",$param) and $param["Assignment"] !== null) {
            $this->Assignment = new Assignment();
            $this->Assignment->deserialize($param["Assignment"]);
        }
    }
}
