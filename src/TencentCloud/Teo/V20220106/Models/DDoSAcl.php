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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS port filtering configuration
 *
 * @method integer getDportEnd() Obtain Destination port used as the end port
 * @method void setDportEnd(integer $DportEnd) Set Destination port used as the end port
 * @method integer getDportStart() Obtain Destination port used as the start port
 * @method void setDportStart(integer $DportStart) Set Destination port used as the start port
 * @method integer getSportEnd() Obtain Source port used as the end port
 * @method void setSportEnd(integer $SportEnd) Set Source port used as the end port
 * @method integer getSportStart() Obtain Source port used as the start port
 * @method void setSportStart(integer $SportStart) Set Source port used as the start port
 * @method string getProtocol() Obtain Protocol. Values: `tcp`, `udp`, and `all`.
 * @method void setProtocol(string $Protocol) Set Protocol. Values: `tcp`, `udp`, and `all`.
 * @method string getAction() Obtain Action. Values: `drop` (Drop the request); `transmit` (Allow the request); `forward` (Continue to offer protection).
 * @method void setAction(string $Action) Set Action. Values: `drop` (Drop the request); `transmit` (Allow the request); `forward` (Continue to offer protection).
 * @method integer getDefault() Obtain Whether it is a system configuration. Values: `0` (manual configuration); `1` (system configuration).
 * @method void setDefault(integer $Default) Set Whether it is a system configuration. Values: `0` (manual configuration); `1` (system configuration).
 */
class DDoSAcl extends AbstractModel
{
    /**
     * @var integer Destination port used as the end port
     */
    public $DportEnd;

    /**
     * @var integer Destination port used as the start port
     */
    public $DportStart;

    /**
     * @var integer Source port used as the end port
     */
    public $SportEnd;

    /**
     * @var integer Source port used as the start port
     */
    public $SportStart;

    /**
     * @var string Protocol. Values: `tcp`, `udp`, and `all`.
     */
    public $Protocol;

    /**
     * @var string Action. Values: `drop` (Drop the request); `transmit` (Allow the request); `forward` (Continue to offer protection).
     */
    public $Action;

    /**
     * @var integer Whether it is a system configuration. Values: `0` (manual configuration); `1` (system configuration).
     */
    public $Default;

    /**
     * @param integer $DportEnd Destination port used as the end port
     * @param integer $DportStart Destination port used as the start port
     * @param integer $SportEnd Source port used as the end port
     * @param integer $SportStart Source port used as the start port
     * @param string $Protocol Protocol. Values: `tcp`, `udp`, and `all`.
     * @param string $Action Action. Values: `drop` (Drop the request); `transmit` (Allow the request); `forward` (Continue to offer protection).
     * @param integer $Default Whether it is a system configuration. Values: `0` (manual configuration); `1` (system configuration).
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
        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
