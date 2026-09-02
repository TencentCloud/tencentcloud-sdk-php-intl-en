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
 * Binding status details of a single machine
 *
 * @method string getQuuid() Obtain Instance ID.
 * @method void setQuuid(string $Quuid) Set Instance ID.
 * @method integer getStatus() Obtain Binding status. 0: initialization; 1: successful; 2: failed; 3: skipped.
 * @method void setStatus(integer $Status) Set Binding status. 0: initialization; 1: successful; 2: failed; 3: skipped.
 * @method string getErrMsg() Obtain Error message
 * @method void setErrMsg(string $ErrMsg) Set Error message
 * @method string getFixMessage() Obtain Fixing suggestion
 * @method void setFixMessage(string $FixMessage) Set Fixing suggestion
 */
class LicenseBindScheduleItem extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $Quuid;

    /**
     * @var integer Binding status. 0: initialization; 1: successful; 2: failed; 3: skipped.
     */
    public $Status;

    /**
     * @var string Error message
     */
    public $ErrMsg;

    /**
     * @var string Fixing suggestion
     */
    public $FixMessage;

    /**
     * @param string $Quuid Instance ID.
     * @param integer $Status Binding status. 0: initialization; 1: successful; 2: failed; 3: skipped.
     * @param string $ErrMsg Error message
     * @param string $FixMessage Fixing suggestion
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("FixMessage",$param) and $param["FixMessage"] !== null) {
            $this->FixMessage = $param["FixMessage"];
        }
    }
}
