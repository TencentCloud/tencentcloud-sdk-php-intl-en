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
 * CLB backend service
 *
 * @method string getInstanceID() Obtain <p>Instance ID.</p>
 * @method void setInstanceID(string $InstanceID) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getPrivateIpAddresses() Obtain <p>Private IP address.</p>
 * @method void setPrivateIpAddresses(string $PrivateIpAddresses) Set <p>Private IP address.</p>
 * @method string getEniID() Obtain <p>ENI ID.</p>
 * @method void setEniID(string $EniID) Set <p>ENI ID.</p>
 * @method integer getPort() Obtain <p>Port</p>
 * @method void setPort(integer $Port) Set <p>Port</p>
 */
class ClbTargetItem extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceID;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIpAddresses;

    /**
     * @var string <p>ENI ID.</p>
     */
    public $EniID;

    /**
     * @var integer <p>Port</p>
     */
    public $Port;

    /**
     * @param string $InstanceID <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $PrivateIpAddresses <p>Private IP address.</p>
     * @param string $EniID <p>ENI ID.</p>
     * @param integer $Port <p>Port</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("EniID",$param) and $param["EniID"] !== null) {
            $this->EniID = $param["EniID"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
