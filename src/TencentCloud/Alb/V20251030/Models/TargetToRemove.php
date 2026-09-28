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
 * Backend service removed from the target group.
 *
 * @method integer getPort() Obtain Port used by the real server. Value range: **1-65535**.

>When the **targetType** value of the target group is **Instance**, this parameter is required.
 * @method void setPort(integer $Port) Set Port used by the real server. Value range: **1-65535**.

>When the **targetType** value of the target group is **Instance**, this parameter is required.
 * @method string getTargetIp() Obtain Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.

 * @method void setTargetIp(string $TargetIp) Set Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.
 */
class TargetToRemove extends AbstractModel
{
    /**
     * @var integer Port used by the real server. Value range: **1-65535**.

>When the **targetType** value of the target group is **Instance**, this parameter is required.
     */
    public $Port;

    /**
     * @var string Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.

     */
    public $TargetIp;

    /**
     * @param integer $Port Port used by the real server. Value range: **1-65535**.

>When the **targetType** value of the target group is **Instance**, this parameter is required.
     * @param string $TargetIp Backend service IP. At least one of **TargetIp** and **TargetId** is required.

- When the server group is of the **Instance** type, this parameter is the primary or secondary private IP of **Eni**.
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }
    }
}
