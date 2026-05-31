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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateLibraDBInstance request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIdList() Obtain Read-only analysis engine instance ID list
 * @method void setInstanceIdList(array $InstanceIdList) Set Read-only analysis engine instance ID list
 * @method boolean getForceIsolate() Obtain Whether to force isolation
 * @method void setForceIsolate(boolean $ForceIsolate) Set Whether to force isolation
 * @method array getIsolateReasonTypes() Obtain Isolation reason type
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) Set Isolation reason type
 * @method string getIsolateReason() Obtain Cause of isolation
 * @method void setIsolateReason(string $IsolateReason) Set Cause of isolation
 */
class IsolateLibraDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Read-only analysis engine instance ID list
     */
    public $InstanceIdList;

    /**
     * @var boolean Whether to force isolation
     */
    public $ForceIsolate;

    /**
     * @var array Isolation reason type
     */
    public $IsolateReasonTypes;

    /**
     * @var string Cause of isolation
     */
    public $IsolateReason;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIdList Read-only analysis engine instance ID list
     * @param boolean $ForceIsolate Whether to force isolation
     * @param array $IsolateReasonTypes Isolation reason type
     * @param string $IsolateReason Cause of isolation
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("ForceIsolate",$param) and $param["ForceIsolate"] !== null) {
            $this->ForceIsolate = $param["ForceIsolate"];
        }

        if (array_key_exists("IsolateReasonTypes",$param) and $param["IsolateReasonTypes"] !== null) {
            $this->IsolateReasonTypes = $param["IsolateReasonTypes"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }
    }
}
