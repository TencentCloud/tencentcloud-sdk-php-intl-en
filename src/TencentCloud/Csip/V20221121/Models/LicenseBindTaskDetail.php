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
 * Authorization binding task details
 *
 * @method string getQuuid() Obtain <p>UUID of the CVM instance</p>
 * @method void setQuuid(string $Quuid) Set <p>UUID of the CVM instance</p>
 * @method string getErrMsg() Obtain <p>Error information.</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error information.</p>
 * @method integer getStatus() Obtain <p>0 in execution, 1 successful, 2 failed</p>
 * @method void setStatus(integer $Status) Set <p>0 in execution, 1 successful, 2 failed</p>
 * @method string getFixMessage() Obtain <p>Repair advice</p>
 * @method void setFixMessage(string $FixMessage) Set <p>Repair advice</p>
 * @method MachineExtraInfo getMachineExtraInfo() Obtain <p>Additional information of machine</p>
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set <p>Additional information of machine</p>
 */
class LicenseBindTaskDetail extends AbstractModel
{
    /**
     * @var string <p>UUID of the CVM instance</p>
     */
    public $Quuid;

    /**
     * @var string <p>Error information.</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>0 in execution, 1 successful, 2 failed</p>
     */
    public $Status;

    /**
     * @var string <p>Repair advice</p>
     */
    public $FixMessage;

    /**
     * @var MachineExtraInfo <p>Additional information of machine</p>
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid <p>UUID of the CVM instance</p>
     * @param string $ErrMsg <p>Error information.</p>
     * @param integer $Status <p>0 in execution, 1 successful, 2 failed</p>
     * @param string $FixMessage <p>Repair advice</p>
     * @param MachineExtraInfo $MachineExtraInfo <p>Additional information of machine</p>
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
