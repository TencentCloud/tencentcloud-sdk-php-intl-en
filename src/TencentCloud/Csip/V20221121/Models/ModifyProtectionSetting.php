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
 * Protection settings object.
 *
 * @method string getQUUID() Obtain Unique asset ID.
 * @method void setQUUID(string $QUUID) Set Unique asset ID.
 * @method integer getEnable() Obtain Master switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method void setEnable(integer $Enable) Set Master switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method integer getVulDefEnable() Obtain Vulnerability defense switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method void setVulDefEnable(integer $VulDefEnable) Set Vulnerability defense switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method integer getVulDefMode() Obtain Vulnerability defense mode. Valid values: 0 (standard) and 1 (major event protection).
 * @method void setVulDefMode(integer $VulDefMode) Set Vulnerability defense mode. Valid values: 0 (standard) and 1 (major event protection).
 * @method integer getVulDefAction() Obtain Vulnerability defense action. Valid values: 0 (detection only) and 1 (detection and prevention).
 * @method void setVulDefAction(integer $VulDefAction) Set Vulnerability defense action. Valid values: 0 (detection only) and 1 (detection and prevention).
 * @method integer getMemShellDefEnable() Obtain In-memory webshell defense switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method void setMemShellDefEnable(integer $MemShellDefEnable) Set In-memory webshell defense switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method integer getPerformanceLimit() Obtain Performance limit switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method void setPerformanceLimit(integer $PerformanceLimit) Set Performance limit switch. Valid values: 0 (disabled) and 1 (enabled).
 * @method integer getPerformanceLimitCpu() Obtain CPU threshold. Value range: 1–99.
 * @method void setPerformanceLimitCpu(integer $PerformanceLimitCpu) Set CPU threshold. Value range: 1–99.
 * @method integer getPerformanceLimitMem() Obtain Memory threshold. Value range: 1–99.
 * @method void setPerformanceLimitMem(integer $PerformanceLimitMem) Set Memory threshold. Value range: 1–99.
 * @method integer getPerformanceLimitMemAmount() Obtain Remaining memory threshold.
 * @method void setPerformanceLimitMemAmount(integer $PerformanceLimitMemAmount) Set Remaining memory threshold.
 * @method integer getSafeInject() Obtain Additional protection. Valid values: 0 (do not inject into processes that will restart) and 1 (inject into processes that will restart).
 * @method void setSafeInject(integer $SafeInject) Set Additional protection. Valid values: 0 (do not inject into processes that will restart) and 1 (inject into processes that will restart).
 */
class ModifyProtectionSetting extends AbstractModel
{
    /**
     * @var string Unique asset ID.
     */
    public $QUUID;

    /**
     * @var integer Master switch. Valid values: 0 (disabled) and 1 (enabled).
     */
    public $Enable;

    /**
     * @var integer Vulnerability defense switch. Valid values: 0 (disabled) and 1 (enabled).
     */
    public $VulDefEnable;

    /**
     * @var integer Vulnerability defense mode. Valid values: 0 (standard) and 1 (major event protection).
     */
    public $VulDefMode;

    /**
     * @var integer Vulnerability defense action. Valid values: 0 (detection only) and 1 (detection and prevention).
     */
    public $VulDefAction;

    /**
     * @var integer In-memory webshell defense switch. Valid values: 0 (disabled) and 1 (enabled).
     */
    public $MemShellDefEnable;

    /**
     * @var integer Performance limit switch. Valid values: 0 (disabled) and 1 (enabled).
     */
    public $PerformanceLimit;

    /**
     * @var integer CPU threshold. Value range: 1–99.
     */
    public $PerformanceLimitCpu;

    /**
     * @var integer Memory threshold. Value range: 1–99.
     */
    public $PerformanceLimitMem;

    /**
     * @var integer Remaining memory threshold.
     */
    public $PerformanceLimitMemAmount;

    /**
     * @var integer Additional protection. Valid values: 0 (do not inject into processes that will restart) and 1 (inject into processes that will restart).
     */
    public $SafeInject;

    /**
     * @param string $QUUID Unique asset ID.
     * @param integer $Enable Master switch. Valid values: 0 (disabled) and 1 (enabled).
     * @param integer $VulDefEnable Vulnerability defense switch. Valid values: 0 (disabled) and 1 (enabled).
     * @param integer $VulDefMode Vulnerability defense mode. Valid values: 0 (standard) and 1 (major event protection).
     * @param integer $VulDefAction Vulnerability defense action. Valid values: 0 (detection only) and 1 (detection and prevention).
     * @param integer $MemShellDefEnable In-memory webshell defense switch. Valid values: 0 (disabled) and 1 (enabled).
     * @param integer $PerformanceLimit Performance limit switch. Valid values: 0 (disabled) and 1 (enabled).
     * @param integer $PerformanceLimitCpu CPU threshold. Value range: 1–99.
     * @param integer $PerformanceLimitMem Memory threshold. Value range: 1–99.
     * @param integer $PerformanceLimitMemAmount Remaining memory threshold.
     * @param integer $SafeInject Additional protection. Valid values: 0 (do not inject into processes that will restart) and 1 (inject into processes that will restart).
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
        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VulDefEnable",$param) and $param["VulDefEnable"] !== null) {
            $this->VulDefEnable = $param["VulDefEnable"];
        }

        if (array_key_exists("VulDefMode",$param) and $param["VulDefMode"] !== null) {
            $this->VulDefMode = $param["VulDefMode"];
        }

        if (array_key_exists("VulDefAction",$param) and $param["VulDefAction"] !== null) {
            $this->VulDefAction = $param["VulDefAction"];
        }

        if (array_key_exists("MemShellDefEnable",$param) and $param["MemShellDefEnable"] !== null) {
            $this->MemShellDefEnable = $param["MemShellDefEnable"];
        }

        if (array_key_exists("PerformanceLimit",$param) and $param["PerformanceLimit"] !== null) {
            $this->PerformanceLimit = $param["PerformanceLimit"];
        }

        if (array_key_exists("PerformanceLimitCpu",$param) and $param["PerformanceLimitCpu"] !== null) {
            $this->PerformanceLimitCpu = $param["PerformanceLimitCpu"];
        }

        if (array_key_exists("PerformanceLimitMem",$param) and $param["PerformanceLimitMem"] !== null) {
            $this->PerformanceLimitMem = $param["PerformanceLimitMem"];
        }

        if (array_key_exists("PerformanceLimitMemAmount",$param) and $param["PerformanceLimitMemAmount"] !== null) {
            $this->PerformanceLimitMemAmount = $param["PerformanceLimitMemAmount"];
        }

        if (array_key_exists("SafeInject",$param) and $param["SafeInject"] !== null) {
            $this->SafeInject = $param["SafeInject"];
        }
    }
}
