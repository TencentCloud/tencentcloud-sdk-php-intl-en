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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authorization binding task details
 *
 * @method string getQuuid() Obtain CVM UUID
 * @method void setQuuid(string $Quuid) Set CVM UUID
 * @method string getErrMsg() Obtain Error message
 * @method void setErrMsg(string $ErrMsg) Set Error message
 * @method integer getStatus() Obtain 0-in progress; 1-succeeded; 2-failed
 * @method void setStatus(integer $Status) Set 0-in progress; 1-succeeded; 2-failed
 * @method string getFixMessage() Obtain Fix suggestion
 * @method void setFixMessage(string $FixMessage) Set Fix suggestion
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information of machine
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information of machine
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LicenseBindTaskDetail extends AbstractModel
{
    /**
     * @var string CVM UUID
     */
    public $Quuid;

    /**
     * @var string Error message
     */
    public $ErrMsg;

    /**
     * @var integer 0-in progress; 1-succeeded; 2-failed
     */
    public $Status;

    /**
     * @var string Fix suggestion
     */
    public $FixMessage;

    /**
     * @var MachineExtraInfo Additional information of machine
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid CVM UUID
     * @param string $ErrMsg Error message
     * @param integer $Status 0-in progress; 1-succeeded; 2-failed
     * @param string $FixMessage Fix suggestion
     * @param MachineExtraInfo $MachineExtraInfo Additional information of machine
Note: This field may return null, indicating that no valid values can be obtained.
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
