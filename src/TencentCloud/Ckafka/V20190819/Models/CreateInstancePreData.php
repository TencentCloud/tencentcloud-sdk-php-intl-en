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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data returned by the `CreateInstancePre` API.
 *
 * @method integer getFlowId() Obtain <p>CreateInstancePre returns fixed as 0 and cannot be used as a query condition for CheckTaskStatus. It is merely to ensure alignment with the backend data structure.</p>
 * @method void setFlowId(integer $FlowId) Set <p>CreateInstancePre returns fixed as 0 and cannot be used as a query condition for CheckTaskStatus. It is merely to ensure alignment with the backend data structure.</p>
 * @method array getDealNames() Obtain <p>Order number list</p>
 * @method void setDealNames(array $DealNames) Set <p>Order number list</p>
 * @method string getInstanceId() Obtain <p>Cluster instance Id of ckafka. When you purchase multiple instances, the first instance Id is returned by default.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Cluster instance Id of ckafka. When you purchase multiple instances, the first instance Id is returned by default.</p>
 * @method array getDealNameInstanceIdMapping() Obtain <p>Order and purchase mapping list corresponding to the instance</p>
 * @method void setDealNameInstanceIdMapping(array $DealNameInstanceIdMapping) Set <p>Order and purchase mapping list corresponding to the instance</p>
 * @method string getEventId() Obtain <p>Event ID returned by CAM authentication</p>
 * @method void setEventId(string $EventId) Set <p>Event ID returned by CAM authentication</p>
 */
class CreateInstancePreData extends AbstractModel
{
    /**
     * @var integer <p>CreateInstancePre returns fixed as 0 and cannot be used as a query condition for CheckTaskStatus. It is merely to ensure alignment with the backend data structure.</p>
     */
    public $FlowId;

    /**
     * @var array <p>Order number list</p>
     */
    public $DealNames;

    /**
     * @var string <p>Cluster instance Id of ckafka. When you purchase multiple instances, the first instance Id is returned by default.</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Order and purchase mapping list corresponding to the instance</p>
     */
    public $DealNameInstanceIdMapping;

    /**
     * @var string <p>Event ID returned by CAM authentication</p>
     */
    public $EventId;

    /**
     * @param integer $FlowId <p>CreateInstancePre returns fixed as 0 and cannot be used as a query condition for CheckTaskStatus. It is merely to ensure alignment with the backend data structure.</p>
     * @param array $DealNames <p>Order number list</p>
     * @param string $InstanceId <p>Cluster instance Id of ckafka. When you purchase multiple instances, the first instance Id is returned by default.</p>
     * @param array $DealNameInstanceIdMapping <p>Order and purchase mapping list corresponding to the instance</p>
     * @param string $EventId <p>Event ID returned by CAM authentication</p>
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DealNameInstanceIdMapping",$param) and $param["DealNameInstanceIdMapping"] !== null) {
            $this->DealNameInstanceIdMapping = [];
            foreach ($param["DealNameInstanceIdMapping"] as $key => $value){
                $obj = new DealInstanceDTO();
                $obj->deserialize($value);
                array_push($this->DealNameInstanceIdMapping, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
