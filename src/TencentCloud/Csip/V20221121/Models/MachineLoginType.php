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
 * CVM login method
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getQuuid() Obtain <p>Host Quuid</p>
 * @method void setQuuid(string $Quuid) Set <p>Host Quuid</p>
 * @method integer getLoginType() Obtain <p>Login method: 0-original login method, 1-scan code for password-free log-in, 2-enable scan code, 3-disable scan code</p>
 * @method void setLoginType(integer $LoginType) Set <p>Login method: 0-original login method, 1-scan code for password-free log-in, 2-enable scan code, 3-disable scan code</p>
 */
class MachineLoginType extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Host Quuid</p>
     */
    public $Quuid;

    /**
     * @var integer <p>Login method: 0-original login method, 1-scan code for password-free log-in, 2-enable scan code, 3-disable scan code</p>
     */
    public $LoginType;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $Quuid <p>Host Quuid</p>
     * @param integer $LoginType <p>Login method: 0-original login method, 1-scan code for password-free log-in, 2-enable scan code, 3-disable scan code</p>
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }
    }
}
