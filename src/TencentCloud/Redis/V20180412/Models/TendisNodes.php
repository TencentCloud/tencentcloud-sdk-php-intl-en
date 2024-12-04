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
 * Tendis node information
 *
 * @method string getNodeId() Obtain Node ID
 * @method void setNodeId(string $NodeId) Set Node ID
 * @method string getNodeRole() Obtain Node role
 * @method void setNodeRole(string $NodeRole) Set Node role
 * @method integer getZoneId() Obtain AZ ID.	
 * @method void setZoneId(integer $ZoneId) Set AZ ID.	
 */
class TendisNodes extends AbstractModel
{
    /**
     * @var string Node ID
     */
    public $NodeId;

    /**
     * @var string Node role
     */
    public $NodeRole;

    /**
     * @var integer AZ ID.	
     */
    public $ZoneId;

    /**
     * @param string $NodeId Node ID
     * @param string $NodeRole Node role
     * @param integer $ZoneId AZ ID.	
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
