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
 * @method integer getFlowId() Obtain CreateInstancePre returns fixed as 0. it cannot be used as a query condition for CheckTaskStatus. this is merely to ensure alignment with the backend data structure.
 * @method void setFlowId(integer $FlowId) Set CreateInstancePre returns fixed as 0. it cannot be used as a query condition for CheckTaskStatus. this is merely to ensure alignment with the backend data structure.
 * @method array getDealNames() Obtain Order ID list
 * @method void setDealNames(array $DealNames) Set Order ID list
 * @method string getInstanceId() Obtain The ckafka cluster instance Id. by default, returns the Id of the first purchased instance when purchasing multiple instances.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id. by default, returns the Id of the first purchased instance when purchasing multiple instances.
 * @method array getDealNameInstanceIdMapping() Obtain Order and purchase mapping list corresponding to the instance.
 * @method void setDealNameInstanceIdMapping(array $DealNameInstanceIdMapping) Set Order and purchase mapping list corresponding to the instance.
 */
class CreateInstancePreData extends AbstractModel
{
    /**
     * @var integer CreateInstancePre returns fixed as 0. it cannot be used as a query condition for CheckTaskStatus. this is merely to ensure alignment with the backend data structure.
     */
    public $FlowId;

    /**
     * @var array Order ID list
     */
    public $DealNames;

    /**
     * @var string The ckafka cluster instance Id. by default, returns the Id of the first purchased instance when purchasing multiple instances.
     */
    public $InstanceId;

    /**
     * @var array Order and purchase mapping list corresponding to the instance.
     */
    public $DealNameInstanceIdMapping;

    /**
     * @param integer $FlowId CreateInstancePre returns fixed as 0. it cannot be used as a query condition for CheckTaskStatus. this is merely to ensure alignment with the backend data structure.
     * @param array $DealNames Order ID list
     * @param string $InstanceId The ckafka cluster instance Id. by default, returns the Id of the first purchased instance when purchasing multiple instances.
     * @param array $DealNameInstanceIdMapping Order and purchase mapping list corresponding to the instance.
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
    }
}
