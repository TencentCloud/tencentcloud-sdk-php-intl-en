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
 * ResetInstancesMaxBandwidth request structure.
 *
 * @method array getInstanceIdSet() Obtain List of IDs of the instances for which to reset the bandwidth cap. You can request up to 100 instances in a region at a time.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set List of IDs of the instances for which to reset the bandwidth cap. You can request up to 100 instances in a region at a time.
 * @method integer getMaxBandwidthOut() Obtain Modified outbound bandwidth cap.
 * @method void setMaxBandwidthOut(integer $MaxBandwidthOut) Set Modified outbound bandwidth cap.
 * @method integer getMaxBandwidthIn() Obtain Modified inbound bandwidth cap.
 * @method void setMaxBandwidthIn(integer $MaxBandwidthIn) Set Modified inbound bandwidth cap.
 */
class ResetInstancesMaxBandwidthRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the instances for which to reset the bandwidth cap. You can request up to 100 instances in a region at a time.
     */
    public $InstanceIdSet;

    /**
     * @var integer Modified outbound bandwidth cap.
     */
    public $MaxBandwidthOut;

    /**
     * @var integer Modified inbound bandwidth cap.
     */
    public $MaxBandwidthIn;

    /**
     * @param array $InstanceIdSet List of IDs of the instances for which to reset the bandwidth cap. You can request up to 100 instances in a region at a time.
     * @param integer $MaxBandwidthOut Modified outbound bandwidth cap.
     * @param integer $MaxBandwidthIn Modified inbound bandwidth cap.
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

        if (array_key_exists("MaxBandwidthOut",$param) and $param["MaxBandwidthOut"] !== null) {
            $this->MaxBandwidthOut = $param["MaxBandwidthOut"];
        }

        if (array_key_exists("MaxBandwidthIn",$param) and $param["MaxBandwidthIn"] !== null) {
            $this->MaxBandwidthIn = $param["MaxBandwidthIn"];
        }
    }
}
