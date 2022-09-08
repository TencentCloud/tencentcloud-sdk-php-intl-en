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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the Anycast package
 *
 * @method integer getNormalBandwidth() Obtain Application bandwidth (in Mbps).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNormalBandwidth(integer $NormalBandwidth) Set Application bandwidth (in Mbps).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getForwardRulesLimit() Obtain Number of forwarding rules
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForwardRulesLimit(integer $ForwardRulesLimit) Set Number of forwarding rules
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurDeadline() Obtain Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurDeadline(string $CurDeadline) Set Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AnycastOutPackRelation extends AbstractModel
{
    /**
     * @var integer Application bandwidth (in Mbps).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NormalBandwidth;

    /**
     * @var integer Number of forwarding rules
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardRulesLimit;

    /**
     * @var integer Auto-renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var string Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CurDeadline;

    /**
     * @param integer $NormalBandwidth Application bandwidth (in Mbps).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ForwardRulesLimit Number of forwarding rules
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AutoRenewFlag Auto-renewal flag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CurDeadline Expiration date
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
        if (array_key_exists("NormalBandwidth",$param) and $param["NormalBandwidth"] !== null) {
            $this->NormalBandwidth = $param["NormalBandwidth"];
        }

        if (array_key_exists("ForwardRulesLimit",$param) and $param["ForwardRulesLimit"] !== null) {
            $this->ForwardRulesLimit = $param["ForwardRulesLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }
    }
}
