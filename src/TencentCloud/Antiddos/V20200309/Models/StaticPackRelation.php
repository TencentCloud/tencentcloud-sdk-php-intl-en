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
 * Non-BGP package details
 *
 * @method integer getProtectBandwidth() Obtain Base protection bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setProtectBandwidth(integer $ProtectBandwidth) Set Base protection bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getNormalBandwidth() Obtain Application bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNormalBandwidth(integer $NormalBandwidth) Set Application bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getForwardRulesLimit() Obtain Forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setForwardRulesLimit(integer $ForwardRulesLimit) Set Forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCurDeadline() Obtain Expiration time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCurDeadline(string $CurDeadline) Set Expiration time
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class StaticPackRelation extends AbstractModel
{
    /**
     * @var integer Base protection bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ProtectBandwidth;

    /**
     * @var integer Application bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NormalBandwidth;

    /**
     * @var integer Forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ForwardRulesLimit;

    /**
     * @var integer Auto-renewal flag
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var string Expiration time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CurDeadline;

    /**
     * @param integer $ProtectBandwidth Base protection bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $NormalBandwidth Application bandwidth
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ForwardRulesLimit Forwarding rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $AutoRenewFlag Auto-renewal flag
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CurDeadline Expiration time
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ProtectBandwidth",$param) and $param["ProtectBandwidth"] !== null) {
            $this->ProtectBandwidth = $param["ProtectBandwidth"];
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
