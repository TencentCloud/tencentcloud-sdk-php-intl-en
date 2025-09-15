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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoRenewFlag request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method array getResourceIds() Obtain Instance ID.
 * @method void setResourceIds(array $ResourceIds) Set Instance ID.
 * @method string getRenewFlag() Obtain NOTIFY_AND_MANUAL_RENEW: Notification of impending expiration, without auto-renewal. NOTIFY_AND_AUTO_RENEW: Notification of impending expiration, with auto-renewal. DISABLE_NOTIFY_AND_MANUAL_RENEW: No notification of impending expiration, without auto-renewal.
 * @method void setRenewFlag(string $RenewFlag) Set NOTIFY_AND_MANUAL_RENEW: Notification of impending expiration, without auto-renewal. NOTIFY_AND_AUTO_RENEW: Notification of impending expiration, with auto-renewal. DISABLE_NOTIFY_AND_MANUAL_RENEW: No notification of impending expiration, without auto-renewal.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 */
class ModifyAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var array Instance ID.
     */
    public $ResourceIds;

    /**
     * @var string NOTIFY_AND_MANUAL_RENEW: Notification of impending expiration, without auto-renewal. NOTIFY_AND_AUTO_RENEW: Notification of impending expiration, with auto-renewal. DISABLE_NOTIFY_AND_MANUAL_RENEW: No notification of impending expiration, without auto-renewal.
     */
    public $RenewFlag;

    /**
     * @var string Computing resource ID.
     */
    public $ComputeResourceId;

    /**
     * @param string $InstanceId Cluster ID.
     * @param array $ResourceIds Instance ID.
     * @param string $RenewFlag NOTIFY_AND_MANUAL_RENEW: Notification of impending expiration, without auto-renewal. NOTIFY_AND_AUTO_RENEW: Notification of impending expiration, with auto-renewal. DISABLE_NOTIFY_AND_MANUAL_RENEW: No notification of impending expiration, without auto-renewal.
     * @param string $ComputeResourceId Computing resource ID.
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

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
