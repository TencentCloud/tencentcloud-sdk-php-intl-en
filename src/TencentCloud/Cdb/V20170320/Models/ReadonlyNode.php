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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO node configuration for cloud disk edition.
 *
 * @method string getIsRandomZone() Obtain Whether distributed in a random availability Zone. Import YES means random availability Zone. Otherwise used specified availability Zone.
 * @method void setIsRandomZone(string $IsRandomZone) Set Whether distributed in a random availability Zone. Import YES means random availability Zone. Otherwise used specified availability Zone.
 * @method string getZone() Obtain Specify the availability zone for node distribution.
 * @method void setZone(string $Zone) Set Specify the availability zone for node distribution.
 * @method string getNodeId() Obtain When upgrading a cloud disk edition instance, if you need to adjust the Availability Zone of Read-Only Nodes, you must specify the node ID.
 * @method void setNodeId(string $NodeId) Set When upgrading a cloud disk edition instance, if you need to adjust the Availability Zone of Read-Only Nodes, you must specify the node ID.
 */
class ReadonlyNode extends AbstractModel
{
    /**
     * @var string Whether distributed in a random availability Zone. Import YES means random availability Zone. Otherwise used specified availability Zone.
     */
    public $IsRandomZone;

    /**
     * @var string Specify the availability zone for node distribution.
     */
    public $Zone;

    /**
     * @var string When upgrading a cloud disk edition instance, if you need to adjust the Availability Zone of Read-Only Nodes, you must specify the node ID.
     */
    public $NodeId;

    /**
     * @param string $IsRandomZone Whether distributed in a random availability Zone. Import YES means random availability Zone. Otherwise used specified availability Zone.
     * @param string $Zone Specify the availability zone for node distribution.
     * @param string $NodeId When upgrading a cloud disk edition instance, if you need to adjust the Availability Zone of Read-Only Nodes, you must specify the node ID.
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
        if (array_key_exists("IsRandomZone",$param) and $param["IsRandomZone"] !== null) {
            $this->IsRandomZone = $param["IsRandomZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }
    }
}
