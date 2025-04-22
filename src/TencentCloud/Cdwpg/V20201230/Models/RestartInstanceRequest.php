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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance name. Example: cdwpg-xxxx.
 * @method void setInstanceId(string $InstanceId) Set Instance name. Example: cdwpg-xxxx.
 * @method array getNodeTypes() Obtain Types of node that need to restart. Valid values: gtm, cn, dn and fn.
 * @method void setNodeTypes(array $NodeTypes) Set Types of node that need to restart. Valid values: gtm, cn, dn and fn.
 * @method array getNodeIds() Obtain Specifies th ID of nodes that need to restart.
 * @method void setNodeIds(array $NodeIds) Set Specifies th ID of nodes that need to restart.
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance name. Example: cdwpg-xxxx.
     */
    public $InstanceId;

    /**
     * @var array Types of node that need to restart. Valid values: gtm, cn, dn and fn.
     */
    public $NodeTypes;

    /**
     * @var array Specifies th ID of nodes that need to restart.
     */
    public $NodeIds;

    /**
     * @param string $InstanceId Instance name. Example: cdwpg-xxxx.
     * @param array $NodeTypes Types of node that need to restart. Valid values: gtm, cn, dn and fn.
     * @param array $NodeIds Specifies th ID of nodes that need to restart.
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

        if (array_key_exists("NodeTypes",$param) and $param["NodeTypes"] !== null) {
            $this->NodeTypes = $param["NodeTypes"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }
    }
}
