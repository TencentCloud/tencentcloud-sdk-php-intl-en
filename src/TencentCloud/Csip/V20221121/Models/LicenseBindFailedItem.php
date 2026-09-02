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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bind failure detail
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getExceptionMessage() Obtain Reason for failure
 * @method void setExceptionMessage(string $ExceptionMessage) Set Reason for failure
 * @method string getFixMessage() Obtain Fixing suggestion
 * @method void setFixMessage(string $FixMessage) Set Fixing suggestion
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional Information on Machine
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional Information on Machine
 */
class LicenseBindFailedItem extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Reason for failure
     */
    public $ExceptionMessage;

    /**
     * @var string Fixing suggestion
     */
    public $FixMessage;

    /**
     * @var MachineExtraInfo Additional Information on Machine
     */
    public $MachineExtraInfo;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $ExceptionMessage Reason for failure
     * @param string $FixMessage Fixing suggestion
     * @param MachineExtraInfo $MachineExtraInfo Additional Information on Machine
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

        if (array_key_exists("ExceptionMessage",$param) and $param["ExceptionMessage"] !== null) {
            $this->ExceptionMessage = $param["ExceptionMessage"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
