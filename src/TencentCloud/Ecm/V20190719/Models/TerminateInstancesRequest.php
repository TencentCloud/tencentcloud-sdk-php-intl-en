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
 * TerminateInstances request structure.
 *
 * @method array getInstanceIdSet() Obtain List of IDs of the instances to be terminated.
 * @method void setInstanceIdSet(array $InstanceIdSet) Set List of IDs of the instances to be terminated.
 * @method boolean getTerminateDelay() Obtain Whether to enable scheduled termination. Default value: no.
 * @method void setTerminateDelay(boolean $TerminateDelay) Set Whether to enable scheduled termination. Default value: no.
 * @method string getTerminateTime() Obtain Scheduled termination time, such as `2019-08-05 12:01:30`. If you don't enable scheduled termination, you can ignore this parameter.
 * @method void setTerminateTime(string $TerminateTime) Set Scheduled termination time, such as `2019-08-05 12:01:30`. If you don't enable scheduled termination, you can ignore this parameter.
 * @method boolean getAssociatedResourceDestroy() Obtain Whether to delete the bound ENI and EIP. Default value: true.
true: the ENI and EIP will also be deleted;
false: only the server will be terminated, while the ENI and EIP will be retained.
 * @method void setAssociatedResourceDestroy(boolean $AssociatedResourceDestroy) Set Whether to delete the bound ENI and EIP. Default value: true.
true: the ENI and EIP will also be deleted;
false: only the server will be terminated, while the ENI and EIP will be retained.
 */
class TerminateInstancesRequest extends AbstractModel
{
    /**
     * @var array List of IDs of the instances to be terminated.
     */
    public $InstanceIdSet;

    /**
     * @var boolean Whether to enable scheduled termination. Default value: no.
     */
    public $TerminateDelay;

    /**
     * @var string Scheduled termination time, such as `2019-08-05 12:01:30`. If you don't enable scheduled termination, you can ignore this parameter.
     */
    public $TerminateTime;

    /**
     * @var boolean Whether to delete the bound ENI and EIP. Default value: true.
true: the ENI and EIP will also be deleted;
false: only the server will be terminated, while the ENI and EIP will be retained.
     */
    public $AssociatedResourceDestroy;

    /**
     * @param array $InstanceIdSet List of IDs of the instances to be terminated.
     * @param boolean $TerminateDelay Whether to enable scheduled termination. Default value: no.
     * @param string $TerminateTime Scheduled termination time, such as `2019-08-05 12:01:30`. If you don't enable scheduled termination, you can ignore this parameter.
     * @param boolean $AssociatedResourceDestroy Whether to delete the bound ENI and EIP. Default value: true.
true: the ENI and EIP will also be deleted;
false: only the server will be terminated, while the ENI and EIP will be retained.
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

        if (array_key_exists("TerminateDelay",$param) and $param["TerminateDelay"] !== null) {
            $this->TerminateDelay = $param["TerminateDelay"];
        }

        if (array_key_exists("TerminateTime",$param) and $param["TerminateTime"] !== null) {
            $this->TerminateTime = $param["TerminateTime"];
        }

        if (array_key_exists("AssociatedResourceDestroy",$param) and $param["AssociatedResourceDestroy"] !== null) {
            $this->AssociatedResourceDestroy = $param["AssociatedResourceDestroy"];
        }
    }
}
