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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
 * @method boolean getForceStop() Obtain (Disused. Please use `StopType` instead.) Whether to forcibly shut down an instance after a normal shutdown fails. Valid values: <br><li>`TRUE`: yes;<br><li>`FALSE`: no<br><br>Default value: `FALSE`. 
 * @method void setForceStop(boolean $ForceStop) Set (Disused. Please use `StopType` instead.) Whether to forcibly shut down an instance after a normal shutdown fails. Valid values: <br><li>`TRUE`: yes;<br><li>`FALSE`: no<br><br>Default value: `FALSE`. 
 * @method string getStopType() Obtain Instance shutdown mode. Valid values: <br><li>SOFT_FIRST: perform a soft shutdown first, and force shut down the instance if the soft shutdown fails <br><li>HARD: force shut down the instance directly <br><li>SOFT: soft shutdown only <br>Default value: SOFT.
 * @method void setStopType(string $StopType) Set Instance shutdown mode. Valid values: <br><li>SOFT_FIRST: perform a soft shutdown first, and force shut down the instance if the soft shutdown fails <br><li>HARD: force shut down the instance directly <br><li>SOFT: soft shutdown only <br>Default value: SOFT.
 * @method string getStoppedMode() Obtain Billing method of a pay-as-you-go instance after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <br>Default value: KEEP_CHARGING.
This parameter is only valid for some pay-as-you-go instances using cloud disks. For more information, see [No charges when shut down for pay-as-you-go instances](https://intl.cloud.tencent.com/document/product/213/19918).
 * @method void setStoppedMode(string $StoppedMode) Set Billing method of a pay-as-you-go instance after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <br>Default value: KEEP_CHARGING.
This parameter is only valid for some pay-as-you-go instances using cloud disks. For more information, see [No charges when shut down for pay-as-you-go instances](https://intl.cloud.tencent.com/document/product/213/19918).
 */
class StopInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     */
    public $InstanceIds;

    /**
     * @var boolean (Disused. Please use `StopType` instead.) Whether to forcibly shut down an instance after a normal shutdown fails. Valid values: <br><li>`TRUE`: yes;<br><li>`FALSE`: no<br><br>Default value: `FALSE`. 
     */
    public $ForceStop;

    /**
     * @var string Instance shutdown mode. Valid values: <br><li>SOFT_FIRST: perform a soft shutdown first, and force shut down the instance if the soft shutdown fails <br><li>HARD: force shut down the instance directly <br><li>SOFT: soft shutdown only <br>Default value: SOFT.
     */
    public $StopType;

    /**
     * @var string Billing method of a pay-as-you-go instance after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <br>Default value: KEEP_CHARGING.
This parameter is only valid for some pay-as-you-go instances using cloud disks. For more information, see [No charges when shut down for pay-as-you-go instances](https://intl.cloud.tencent.com/document/product/213/19918).
     */
    public $StoppedMode;

    /**
     * @param array $InstanceIds Instance ID(s). To obtain the instance IDs, you can call [`DescribeInstances`](https://intl.cloud.tencent.com/document/api/213/15728?from_cn_redirect=1) and look for `InstanceId` in the response. The maximum number of instances in each request is 100.
     * @param boolean $ForceStop (Disused. Please use `StopType` instead.) Whether to forcibly shut down an instance after a normal shutdown fails. Valid values: <br><li>`TRUE`: yes;<br><li>`FALSE`: no<br><br>Default value: `FALSE`. 
     * @param string $StopType Instance shutdown mode. Valid values: <br><li>SOFT_FIRST: perform a soft shutdown first, and force shut down the instance if the soft shutdown fails <br><li>HARD: force shut down the instance directly <br><li>SOFT: soft shutdown only <br>Default value: SOFT.
     * @param string $StoppedMode Billing method of a pay-as-you-go instance after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <br>Default value: KEEP_CHARGING.
This parameter is only valid for some pay-as-you-go instances using cloud disks. For more information, see [No charges when shut down for pay-as-you-go instances](https://intl.cloud.tencent.com/document/product/213/19918).
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }

        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }

        if (array_key_exists("StoppedMode",$param) and $param["StoppedMode"] !== null) {
            $this->StoppedMode = $param["StoppedMode"];
        }
    }
}
