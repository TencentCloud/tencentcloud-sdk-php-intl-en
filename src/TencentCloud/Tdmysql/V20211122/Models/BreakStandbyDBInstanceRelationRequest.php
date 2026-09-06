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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BreakStandbyDBInstanceRelation request structure.
 *
 * @method string getInstanceId() Obtain Disaster Recovery instance ID
 * @method void setInstanceId(string $InstanceId) Set Disaster Recovery instance ID
 * @method boolean getIsForce() Obtain Whether to force disconnection
 * @method void setIsForce(boolean $IsForce) Set Whether to force disconnection
 * @method integer getSyncDelay() Obtain Latency in seconds. 0 means do not check.
 * @method void setSyncDelay(integer $SyncDelay) Set Latency in seconds. 0 means do not check.
 */
class BreakStandbyDBInstanceRelationRequest extends AbstractModel
{
    /**
     * @var string Disaster Recovery instance ID
     */
    public $InstanceId;

    /**
     * @var boolean Whether to force disconnection
     */
    public $IsForce;

    /**
     * @var integer Latency in seconds. 0 means do not check.
     */
    public $SyncDelay;

    /**
     * @param string $InstanceId Disaster Recovery instance ID
     * @param boolean $IsForce Whether to force disconnection
     * @param integer $SyncDelay Latency in seconds. 0 means do not check.
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

        if (array_key_exists("IsForce",$param) and $param["IsForce"] !== null) {
            $this->IsForce = $param["IsForce"];
        }

        if (array_key_exists("SyncDelay",$param) and $param["SyncDelay"] !== null) {
            $this->SyncDelay = $param["SyncDelay"];
        }
    }
}
