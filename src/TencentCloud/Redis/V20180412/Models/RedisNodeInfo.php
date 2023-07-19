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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Master or replica node information of the TencentDB for Redis instance.
 *
 * @method integer getNodeType() Obtain Node type. <ul><li>`0`: Master node.</li><li>`1`: Replica node.</li></ul>
 * @method void setNodeType(integer $NodeType) Set Node type. <ul><li>`0`: Master node.</li><li>`1`: Replica node.</li></ul>
 * @method integer getNodeId() Obtain ID of the master or replica node <ul><li>This parameter is optional when the [CreateInstances](https://intl.cloud.tencent.com/document/product/239/20026?from_cn_redirect=1) API is used to create a TencentDB for Redis instance, but it is required when the [UpgradeInstance](https://intl.cloud.tencent.com/document/product/239/20013?from_cn_redirect=1) API is used to adjust the configuration of an instance by deleting a replica.  </li><li>You can use the [DescribeInstances](https://intl.cloud.tencent.com/document/product/239/20018?from_cn_redirect=1) API to get the node ID of integer type. </li></ul> </li></ul>
 * @method void setNodeId(integer $NodeId) Set ID of the master or replica node <ul><li>This parameter is optional when the [CreateInstances](https://intl.cloud.tencent.com/document/product/239/20026?from_cn_redirect=1) API is used to create a TencentDB for Redis instance, but it is required when the [UpgradeInstance](https://intl.cloud.tencent.com/document/product/239/20013?from_cn_redirect=1) API is used to adjust the configuration of an instance by deleting a replica.  </li><li>You can use the [DescribeInstances](https://intl.cloud.tencent.com/document/product/239/20018?from_cn_redirect=1) API to get the node ID of integer type. </li></ul> </li></ul>
 * @method integer getZoneId() Obtain ID of the AZ of the master or replica node
 * @method void setZoneId(integer $ZoneId) Set ID of the AZ of the master or replica node
 * @method string getZoneName() Obtain Name of the AZ of the master or replica node
 * @method void setZoneName(string $ZoneName) Set Name of the AZ of the master or replica node
 */
class RedisNodeInfo extends AbstractModel
{
    /**
     * @var integer Node type. <ul><li>`0`: Master node.</li><li>`1`: Replica node.</li></ul>
     */
    public $NodeType;

    /**
     * @var integer ID of the master or replica node <ul><li>This parameter is optional when the [CreateInstances](https://intl.cloud.tencent.com/document/product/239/20026?from_cn_redirect=1) API is used to create a TencentDB for Redis instance, but it is required when the [UpgradeInstance](https://intl.cloud.tencent.com/document/product/239/20013?from_cn_redirect=1) API is used to adjust the configuration of an instance by deleting a replica.  </li><li>You can use the [DescribeInstances](https://intl.cloud.tencent.com/document/product/239/20018?from_cn_redirect=1) API to get the node ID of integer type. </li></ul> </li></ul>
     */
    public $NodeId;

    /**
     * @var integer ID of the AZ of the master or replica node
     */
    public $ZoneId;

    /**
     * @var string Name of the AZ of the master or replica node
     */
    public $ZoneName;

    /**
     * @param integer $NodeType Node type. <ul><li>`0`: Master node.</li><li>`1`: Replica node.</li></ul>
     * @param integer $NodeId ID of the master or replica node <ul><li>This parameter is optional when the [CreateInstances](https://intl.cloud.tencent.com/document/product/239/20026?from_cn_redirect=1) API is used to create a TencentDB for Redis instance, but it is required when the [UpgradeInstance](https://intl.cloud.tencent.com/document/product/239/20013?from_cn_redirect=1) API is used to adjust the configuration of an instance by deleting a replica.  </li><li>You can use the [DescribeInstances](https://intl.cloud.tencent.com/document/product/239/20018?from_cn_redirect=1) API to get the node ID of integer type. </li></ul> </li></ul>
     * @param integer $ZoneId ID of the AZ of the master or replica node
     * @param string $ZoneName Name of the AZ of the master or replica node
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
