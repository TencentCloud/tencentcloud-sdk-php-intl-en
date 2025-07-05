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
 * @method integer getFlowId() Obtain The value returned by `CreateInstancePre` is 0, which is fixed and cannot be used as the query condition of `CheckTaskStatus`. It is only used to ensure the consistency with the backend data structure.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setFlowId(integer $FlowId) Set The value returned by `CreateInstancePre` is 0, which is fixed and cannot be used as the query condition of `CheckTaskStatus`. It is only used to ensure the consistency with the backend data structure.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getDealNames() Obtain Order number list.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDealNames(array $DealNames) Set Order number list.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID. When multiple instances are purchased, the ID of the first one is returned by default . Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. When multiple instances are purchased, the ID of the first one is returned by default . Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDealNameInstanceIdMapping() Obtain Mapping between orders and the purchased instances.  Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDealNameInstanceIdMapping(array $DealNameInstanceIdMapping) Set Mapping between orders and the purchased instances.  Note: This field may return null, indicating that no valid values can be obtained.
 */
class CreateInstancePreData extends AbstractModel
{
    /**
     * @var integer The value returned by `CreateInstancePre` is 0, which is fixed and cannot be used as the query condition of `CheckTaskStatus`. It is only used to ensure the consistency with the backend data structure.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $FlowId;

    /**
     * @var array Order number list.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DealNames;

    /**
     * @var string Instance ID. When multiple instances are purchased, the ID of the first one is returned by default . Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var array Mapping between orders and the purchased instances.  Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DealNameInstanceIdMapping;

    /**
     * @param integer $FlowId The value returned by `CreateInstancePre` is 0, which is fixed and cannot be used as the query condition of `CheckTaskStatus`. It is only used to ensure the consistency with the backend data structure.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $DealNames Order number list.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID. When multiple instances are purchased, the ID of the first one is returned by default . Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DealNameInstanceIdMapping Mapping between orders and the purchased instances.  Note: This field may return null, indicating that no valid values can be obtained.
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
