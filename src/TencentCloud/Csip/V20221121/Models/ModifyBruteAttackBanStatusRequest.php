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
 * ModifyBruteAttackBanStatus request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method boolean getOpenSmartMode() Obtain <p>Whether to enable the intelligent over-whitening mode</p>
 * @method void setOpenSmartMode(boolean $OpenSmartMode) Set <p>Whether to enable the intelligent over-whitening mode</p>
 * @method boolean getBanBlackIp() Obtain <p>Whether to block intelligence blacklisted IPs</p>
 * @method void setBanBlackIp(boolean $BanBlackIp) Set <p>Whether to block intelligence blacklisted IPs</p>
 * @method boolean getBanVulIp() Obtain <p>Whether to block the black IP exploiting the vulnerability</p>
 * @method void setBanVulIp(boolean $BanVulIp) Set <p>Whether to block the black IP exploiting the vulnerability</p>
 * @method boolean getBanByRule() Obtain <p>Whether to enable rule blocking</p>
 * @method void setBanByRule(boolean $BanByRule) Set <p>Whether to enable rule blocking</p>
 */
class ModifyBruteAttackBanStatusRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var boolean <p>Whether to enable the intelligent over-whitening mode</p>
     */
    public $OpenSmartMode;

    /**
     * @var boolean <p>Whether to block intelligence blacklisted IPs</p>
     */
    public $BanBlackIp;

    /**
     * @var boolean <p>Whether to block the black IP exploiting the vulnerability</p>
     */
    public $BanVulIp;

    /**
     * @var boolean <p>Whether to enable rule blocking</p>
     */
    public $BanByRule;

    /**
     * @param array $MemberId <p>Group account member id.</p>
     * @param boolean $OpenSmartMode <p>Whether to enable the intelligent over-whitening mode</p>
     * @param boolean $BanBlackIp <p>Whether to block intelligence blacklisted IPs</p>
     * @param boolean $BanVulIp <p>Whether to block the black IP exploiting the vulnerability</p>
     * @param boolean $BanByRule <p>Whether to enable rule blocking</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OpenSmartMode",$param) and $param["OpenSmartMode"] !== null) {
            $this->OpenSmartMode = $param["OpenSmartMode"];
        }

        if (array_key_exists("BanBlackIp",$param) and $param["BanBlackIp"] !== null) {
            $this->BanBlackIp = $param["BanBlackIp"];
        }

        if (array_key_exists("BanVulIp",$param) and $param["BanVulIp"] !== null) {
            $this->BanVulIp = $param["BanVulIp"];
        }

        if (array_key_exists("BanByRule",$param) and $param["BanByRule"] !== null) {
            $this->BanByRule = $param["BanByRule"];
        }
    }
}
