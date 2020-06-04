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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disabled port in advanced DDoS policy
 *
 * @method string getProtocol() Obtain Protocol. Valid values: [tcp, udp, all]
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: [tcp, udp, all]
 * @method integer getDPortStart() Obtain Start destination port. Value range: [0,65535]
 * @method void setDPortStart(integer $DPortStart) Set Start destination port. Value range: [0,65535]
 * @method integer getDPortEnd() Obtain End destination port, which must be greater than or equal to the start destination port. Value range: [0,65535]
 * @method void setDPortEnd(integer $DPortEnd) Set End destination port, which must be greater than or equal to the start destination port. Value range: [0,65535]
 * @method integer getSPortStart() Obtain Start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSPortStart(integer $SPortStart) Set Start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSPortEnd() Obtain End source port, which must be greater than or equal to the start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSPortEnd(integer $SPortEnd) Set End source port, which must be greater than or equal to the start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAction() Obtain Action to be executed. Valid values: [drop (discard) , transmit (forward)]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Action to be executed. Valid values: [drop (discard) , transmit (forward)]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getKind() Obtain Type of port to be disabled. Valid values: [0 (destination port range), 1 (source port range), 2 (destination port range and source port range)]
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setKind(integer $Kind) Set Type of port to be disabled. Valid values: [0 (destination port range), 1 (source port range), 2 (destination port range and source port range)]
Note: this field may return null, indicating that no valid values can be obtained.
 */
class DDoSPolicyPortLimit extends AbstractModel
{
    /**
     * @var string Protocol. Valid values: [tcp, udp, all]
     */
    public $Protocol;

    /**
     * @var integer Start destination port. Value range: [0,65535]
     */
    public $DPortStart;

    /**
     * @var integer End destination port, which must be greater than or equal to the start destination port. Value range: [0,65535]
     */
    public $DPortEnd;

    /**
     * @var integer Start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SPortStart;

    /**
     * @var integer End source port, which must be greater than or equal to the start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SPortEnd;

    /**
     * @var string Action to be executed. Valid values: [drop (discard) , transmit (forward)]
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var integer Type of port to be disabled. Valid values: [0 (destination port range), 1 (source port range), 2 (destination port range and source port range)]
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Kind;

    /**
     * @param string $Protocol Protocol. Valid values: [tcp, udp, all]
     * @param integer $DPortStart Start destination port. Value range: [0,65535]
     * @param integer $DPortEnd End destination port, which must be greater than or equal to the start destination port. Value range: [0,65535]
     * @param integer $SPortStart Start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SPortEnd End source port, which must be greater than or equal to the start source port. Value range: [0,65535]
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Action Action to be executed. Valid values: [drop (discard) , transmit (forward)]
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Kind Type of port to be disabled. Valid values: [0 (destination port range), 1 (source port range), 2 (destination port range and source port range)]
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DPortStart",$param) and $param["DPortStart"] !== null) {
            $this->DPortStart = $param["DPortStart"];
        }

        if (array_key_exists("DPortEnd",$param) and $param["DPortEnd"] !== null) {
            $this->DPortEnd = $param["DPortEnd"];
        }

        if (array_key_exists("SPortStart",$param) and $param["SPortStart"] !== null) {
            $this->SPortStart = $param["SPortStart"];
        }

        if (array_key_exists("SPortEnd",$param) and $param["SPortEnd"] !== null) {
            $this->SPortEnd = $param["SPortEnd"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }
    }
}
