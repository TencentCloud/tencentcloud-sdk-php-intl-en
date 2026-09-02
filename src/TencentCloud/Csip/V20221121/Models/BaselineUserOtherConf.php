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
 * Other user-level baseline configuration (synchronize authorization, clear risks offline, Agent scan timeout, etc.).
 *
 * @method boolean getAllowSync() Obtain <p>Whether to allow the Group Administrator to sync the baseline configuration to this account. true means allowed, and false means not allowed.</p>
 * @method void setAllowSync(boolean $AllowSync) Set <p>Whether to allow the Group Administrator to sync the baseline configuration to this account. true means allowed, and false means not allowed.</p>
 * @method boolean getCleanRiskWhenOffline() Obtain <p>Whether to automatically clear the historical risk results of an asset when it goes offline. true: clear; false: retain.</p>
 * @method void setCleanRiskWhenOffline(boolean $CleanRiskWhenOffline) Set <p>Whether to automatically clear the historical risk results of an asset when it goes offline. true: clear; false: retain.</p>
 * @method integer getAgentScanTimeout() Obtain <p>Timeout period for a single scan by the Agent, in seconds. Value ranges from 60 to 86400. Default: 1800.</p>
 * @method void setAgentScanTimeout(integer $AgentScanTimeout) Set <p>Timeout period for a single scan by the Agent, in seconds. Value ranges from 60 to 86400. Default: 1800.</p>
 */
class BaselineUserOtherConf extends AbstractModel
{
    /**
     * @var boolean <p>Whether to allow the Group Administrator to sync the baseline configuration to this account. true means allowed, and false means not allowed.</p>
     */
    public $AllowSync;

    /**
     * @var boolean <p>Whether to automatically clear the historical risk results of an asset when it goes offline. true: clear; false: retain.</p>
     */
    public $CleanRiskWhenOffline;

    /**
     * @var integer <p>Timeout period for a single scan by the Agent, in seconds. Value ranges from 60 to 86400. Default: 1800.</p>
     */
    public $AgentScanTimeout;

    /**
     * @param boolean $AllowSync <p>Whether to allow the Group Administrator to sync the baseline configuration to this account. true means allowed, and false means not allowed.</p>
     * @param boolean $CleanRiskWhenOffline <p>Whether to automatically clear the historical risk results of an asset when it goes offline. true: clear; false: retain.</p>
     * @param integer $AgentScanTimeout <p>Timeout period for a single scan by the Agent, in seconds. Value ranges from 60 to 86400. Default: 1800.</p>
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
        if (array_key_exists("AllowSync",$param) and $param["AllowSync"] !== null) {
            $this->AllowSync = $param["AllowSync"];
        }

        if (array_key_exists("CleanRiskWhenOffline",$param) and $param["CleanRiskWhenOffline"] !== null) {
            $this->CleanRiskWhenOffline = $param["CleanRiskWhenOffline"];
        }

        if (array_key_exists("AgentScanTimeout",$param) and $param["AgentScanTimeout"] !== null) {
            $this->AgentScanTimeout = $param["AgentScanTimeout"];
        }
    }
}
