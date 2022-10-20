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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS port filtering configuration
 *
 * @method integer getDportEnd() Obtain End of the destination port. Value range: 0–65535.
 * @method void setDportEnd(integer $DportEnd) Set End of the destination port. Value range: 0–65535.
 * @method integer getDportStart() Obtain Start of the destination port. Value range: 0–65535.
 * @method void setDportStart(integer $DportStart) Set Start of the destination port. Value range: 0–65535.
 * @method integer getSportEnd() Obtain End of the source port. Value range: 0–65535.
 * @method void setSportEnd(integer $SportEnd) Set End of the source port. Value range: 0–65535.
 * @method integer getSportStart() Obtain Start of the source port. Value range: 0–65535.
 * @method void setSportStart(integer $SportStart) Set Start of the source port. Value range: 0–65535.
 * @method string getProtocol() Obtain The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`all`: All protocols</li>
 * @method void setProtocol(string $Protocol) Set The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`all`: All protocols</li>
 * @method string getAction() Obtain Action to be executed. Values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`forward`: Continue protection</li>
 * @method void setAction(string $Action) Set Action to be executed. Values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`forward`: Continue protection</li>
 */
class DDoSAclRule extends AbstractModel
{
    /**
     * @var integer End of the destination port. Value range: 0–65535.
     */
    public $DportEnd;

    /**
     * @var integer Start of the destination port. Value range: 0–65535.
     */
    public $DportStart;

    /**
     * @var integer End of the source port. Value range: 0–65535.
     */
    public $SportEnd;

    /**
     * @var integer Start of the source port. Value range: 0–65535.
     */
    public $SportStart;

    /**
     * @var string The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`all`: All protocols</li>
     */
    public $Protocol;

    /**
     * @var string Action to be executed. Values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`forward`: Continue protection</li>
     */
    public $Action;

    /**
     * @param integer $DportEnd End of the destination port. Value range: 0–65535.
     * @param integer $DportStart Start of the destination port. Value range: 0–65535.
     * @param integer $SportEnd End of the source port. Value range: 0–65535.
     * @param integer $SportStart Start of the source port. Value range: 0–65535.
     * @param string $Protocol The protocol. Values:
<li>`tcp`: TCP protocol</li>
<li>`udp`: UDP protocol</li>
<li>`all`: All protocols</li>
     * @param string $Action Action to be executed. Values:
<li>`drop`: Discard</li>
<li>`transmit`: Allow</li>
<li>`forward`: Continue protection</li>
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
    }
}
