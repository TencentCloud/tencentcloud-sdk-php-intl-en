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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backend service output parameter.
 *
 * @method string getEniId() Obtain Network-interface ID.
 * @method void setEniId(string $EniId) Set Network-interface ID.
 * @method integer getPort() Obtain Port used by the real server. Value range: **1-65535**.
 * @method void setPort(integer $Port) Set Port used by the real server. Value range: **1-65535**.
 * @method string getTargetId() Obtain Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
 * @method void setTargetId(string $TargetId) Set Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
 * @method string getTargetIp() Obtain Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.

 * @method void setTargetIp(string $TargetIp) Set Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.

 * @method string getTargetName() Obtain Backend service name. Currently, only CVM backend services return a valid name.
 * @method void setTargetName(string $TargetName) Set Backend service name. Currently, only CVM backend services return a valid name.
 * @method string getTargetStatus() Obtain Backend service status. Valid values:
- **Adding**: Adding.
- **Active**: available status.
- **Configuring**: configuration in progress.
- **Removing**: removing.
 * @method void setTargetStatus(string $TargetStatus) Set Backend service status. Valid values:
- **Adding**: Adding.
- **Active**: available status.
- **Configuring**: configuration in progress.
- **Removing**: removing.
 * @method string getTargetType() Obtain Backend service type.
 * @method void setTargetType(string $TargetType) Set Backend service type.
 * @method integer getWeight() Obtain Weight of the backend service. Value range: **0-100**. Default value: **100**. If the weight is set to **0**, no request will be forwarded to this backend service.
 * @method void setWeight(integer $Weight) Set Weight of the backend service. Value range: **0-100**. Default value: **100**. If the weight is set to **0**, no request will be forwarded to this backend service.
 */
class TargetOutput extends AbstractModel
{
    /**
     * @var string Network-interface ID.
     */
    public $EniId;

    /**
     * @var integer Port used by the real server. Value range: **1-65535**.
     */
    public $Port;

    /**
     * @var string Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
     */
    public $TargetId;

    /**
     * @var string Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.

     */
    public $TargetIp;

    /**
     * @var string Backend service name. Currently, only CVM backend services return a valid name.
     */
    public $TargetName;

    /**
     * @var string Backend service status. Valid values:
- **Adding**: Adding.
- **Active**: available status.
- **Configuring**: configuration in progress.
- **Removing**: removing.
     */
    public $TargetStatus;

    /**
     * @var string Backend service type.
     */
    public $TargetType;

    /**
     * @var integer Weight of the backend service. Value range: **0-100**. Default value: **100**. If the weight is set to **0**, no request will be forwarded to this backend service.
     */
    public $Weight;

    /**
     * @param string $EniId Network-interface ID.
     * @param integer $Port Port used by the real server. Value range: **1-65535**.
     * @param string $TargetId Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
     * @param string $TargetIp Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.

     * @param string $TargetName Backend service name. Currently, only CVM backend services return a valid name.
     * @param string $TargetStatus Backend service status. Valid values:
- **Adding**: Adding.
- **Active**: available status.
- **Configuring**: configuration in progress.
- **Removing**: removing.
     * @param string $TargetType Backend service type.
     * @param integer $Weight Weight of the backend service. Value range: **0-100**. Default value: **100**. If the weight is set to **0**, no request will be forwarded to this backend service.
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
        if (array_key_exists("EniId",$param) and $param["EniId"] !== null) {
            $this->EniId = $param["EniId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("TargetStatus",$param) and $param["TargetStatus"] !== null) {
            $this->TargetStatus = $param["TargetStatus"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
