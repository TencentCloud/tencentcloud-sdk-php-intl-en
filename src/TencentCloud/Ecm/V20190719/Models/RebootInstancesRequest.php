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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RebootInstances request structure.
 *
 * @method array getInstanceIdSet() Obtain List of IDs of the instances to be restarted. You can request up to 100 instances in a region at a time.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set List of IDs of the instances to be restarted. You can request up to 100 instances in a region at a time.
 * @method boolean getForceReboot() Obtain Whether to force restart the instance after it failed to be restarted normally. Valid values:
TRUE: yes;
FALSE: no;
Default value: FALSE.
 * @method void setForceReboot(boolean $ForceReboot) Set Whether to force restart the instance after it failed to be restarted normally. Valid values:
TRUE: yes;
FALSE: no;
Default value: FALSE.
 * @method string getStopType() Obtain Shutdown type. Valid values:
SOFT: soft shutdown
HARD: hard shutdown
SOFT_FIRST: perform a soft shutdown first; if it fails, perform a hard shutdown

Default value: SOFT.
 * @method void setStopType(string $StopType) Set Shutdown type. Valid values:
SOFT: soft shutdown
HARD: hard shutdown
SOFT_FIRST: perform a soft shutdown first; if it fails, perform a hard shutdown

Default value: SOFT.
 */
class RebootInstancesRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the instances to be restarted. You can request up to 100 instances in a region at a time.
     */
    public $InstanceIdSet;

    /**
     * @var boolean Whether to force restart the instance after it failed to be restarted normally. Valid values:
TRUE: yes;
FALSE: no;
Default value: FALSE.
     */
    public $ForceReboot;

    /**
     * @var string Shutdown type. Valid values:
SOFT: soft shutdown
HARD: hard shutdown
SOFT_FIRST: perform a soft shutdown first; if it fails, perform a hard shutdown

Default value: SOFT.
     */
    public $StopType;

    /**
     * @param array $InstanceIdSet List of IDs of the instances to be restarted. You can request up to 100 instances in a region at a time.
     * @param boolean $ForceReboot Whether to force restart the instance after it failed to be restarted normally. Valid values:
TRUE: yes;
FALSE: no;
Default value: FALSE.
     * @param string $StopType Shutdown type. Valid values:
SOFT: soft shutdown
HARD: hard shutdown
SOFT_FIRST: perform a soft shutdown first; if it fails, perform a hard shutdown

Default value: SOFT.
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("ForceReboot",$param) and $param["ForceReboot"] !== null) {
            $this->ForceReboot = $param["ForceReboot"];
        }

        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }
    }
}
