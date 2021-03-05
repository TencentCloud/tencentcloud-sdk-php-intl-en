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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchDBInstanceMasterSlave request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getDstSlave() Obtain Specifies the replica server to switched to. Valid values: `first` (the first replica server), `second` (the second replica server). Default value: `first`. `second` is valid only for a multi-AZ instance.
 * @method void setDstSlave(string $DstSlave) Set Specifies the replica server to switched to. Valid values: `first` (the first replica server), `second` (the second replica server). Default value: `first`. `second` is valid only for a multi-AZ instance.
 * @method boolean getForceSwitch() Obtain Whether to force the switch. Valid values: `True`, `False` (default). If this parameter is set to `True`, instance data may be lost during the switch.
 * @method void setForceSwitch(boolean $ForceSwitch) Set Whether to force the switch. Valid values: `True`, `False` (default). If this parameter is set to `True`, instance data may be lost during the switch.
 * @method boolean getWaitSwitch() Obtain Whether to perform the switch during a time window. Valid values: `True`, `False` (default). If `ForceSwitch` is set to `True`, this parameter is invalid.
 * @method void setWaitSwitch(boolean $WaitSwitch) Set Whether to perform the switch during a time window. Valid values: `True`, `False` (default). If `ForceSwitch` is set to `True`, this parameter is invalid.
 */
class SwitchDBInstanceMasterSlaveRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the replica server to switched to. Valid values: `first` (the first replica server), `second` (the second replica server). Default value: `first`. `second` is valid only for a multi-AZ instance.
     */
    public $DstSlave;

    /**
     * @var boolean Whether to force the switch. Valid values: `True`, `False` (default). If this parameter is set to `True`, instance data may be lost during the switch.
     */
    public $ForceSwitch;

    /**
     * @var boolean Whether to perform the switch during a time window. Valid values: `True`, `False` (default). If `ForceSwitch` is set to `True`, this parameter is invalid.
     */
    public $WaitSwitch;

    /**
     * @param string $InstanceId Instance ID
     * @param string $DstSlave Specifies the replica server to switched to. Valid values: `first` (the first replica server), `second` (the second replica server). Default value: `first`. `second` is valid only for a multi-AZ instance.
     * @param boolean $ForceSwitch Whether to force the switch. Valid values: `True`, `False` (default). If this parameter is set to `True`, instance data may be lost during the switch.
     * @param boolean $WaitSwitch Whether to perform the switch during a time window. Valid values: `True`, `False` (default). If `ForceSwitch` is set to `True`, this parameter is invalid.
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

        if (array_key_exists("DstSlave",$param) and $param["DstSlave"] !== null) {
            $this->DstSlave = $param["DstSlave"];
        }

        if (array_key_exists("ForceSwitch",$param) and $param["ForceSwitch"] !== null) {
            $this->ForceSwitch = $param["ForceSwitch"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }
    }
}
