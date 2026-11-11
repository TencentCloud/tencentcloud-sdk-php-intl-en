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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAvailabilityZones request structure.
 *
 * @method string getInstanceId() Obtain Specify the instance ID.
 For example: crs-xjhsdj****, please log in to the [Redis Console](https://console.tencentcloud.com/redis) and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Specify the instance ID.
 For example: crs-xjhsdj****, please log in to the [Redis Console](https://console.tencentcloud.com/redis) and copy the instance ID from the instance list.
 * @method integer getSwitchOption() Obtain Switch time.
- 1: Switch during the maintenance window.
- 2: Switch immediately.
 * @method void setSwitchOption(integer $SwitchOption) Set Switch time.
- 1: Switch during the maintenance window.
- 2: Switch immediately.
 * @method array getNodeSet() Obtain Node information of the instance, including node ID, node type, and node availability zone ID. For details, see [RedisNodeInfo](https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1).
For a single-AZ instance, no need to pass in NodeId. For a multi-AZ instance, NodeId is required.
 * @method void setNodeSet(array $NodeSet) Set Node information of the instance, including node ID, node type, and node availability zone ID. For details, see [RedisNodeInfo](https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1).
For a single-AZ instance, no need to pass in NodeId. For a multi-AZ instance, NodeId is required.
 */
class ModifyInstanceAvailabilityZonesRequest extends AbstractModel
{
    /**
     * @var string Specify the instance ID.
 For example: crs-xjhsdj****, please log in to the [Redis Console](https://console.tencentcloud.com/redis) and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var integer Switch time.
- 1: Switch during the maintenance window.
- 2: Switch immediately.
     */
    public $SwitchOption;

    /**
     * @var array Node information of the instance, including node ID, node type, and node availability zone ID. For details, see [RedisNodeInfo](https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1).
For a single-AZ instance, no need to pass in NodeId. For a multi-AZ instance, NodeId is required.
     */
    public $NodeSet;

    /**
     * @param string $InstanceId Specify the instance ID.
 For example: crs-xjhsdj****, please log in to the [Redis Console](https://console.tencentcloud.com/redis) and copy the instance ID from the instance list.
     * @param integer $SwitchOption Switch time.
- 1: Switch during the maintenance window.
- 2: Switch immediately.
     * @param array $NodeSet Node information of the instance, including node ID, node type, and node availability zone ID. For details, see [RedisNodeInfo](https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1).
For a single-AZ instance, no need to pass in NodeId. For a multi-AZ instance, NodeId is required.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SwitchOption",$param) and $param["SwitchOption"] !== null) {
            $this->SwitchOption = $param["SwitchOption"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }
    }
}
