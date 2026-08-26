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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Main limit package info
 *
 * @method string getTotalQuota() Obtain Total quota. The unit is determined by the package type: credits for the Enterprise Professional package and tokens for the Enterprise auto package.
 * @method void setTotalQuota(string $TotalQuota) Set Total quota. The unit is determined by the package type: credits for the Enterprise Professional package and tokens for the Enterprise auto package.
 * @method string getTotalUsed() Obtain Total used quota. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
 * @method void setTotalUsed(string $TotalUsed) Set Total used quota. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
 * @method integer getTotalCycles() Obtain Total number of periods.
 * @method void setTotalCycles(integer $TotalCycles) Set Total number of periods.
 * @method string getCycleUnit() Obtain Period unit. Value: month
 * @method void setCycleUnit(string $CycleUnit) Set Period unit. Value: month
 * @method string getStartTime() Obtain Package effective time.
 * @method void setStartTime(string $StartTime) Set Package effective time.
 * @method string getExpireTime() Obtain Package expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Package expiration time.
 * @method string getExclusiveAllocated() Obtain Allocated quota for dedicated pool. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
 * @method void setExclusiveAllocated(string $ExclusiveAllocated) Set Allocated quota for dedicated pool. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
 * @method string getExclusiveUsed() Obtain Used credit of the dedicated pool. The unit varies based on the package type: credits for the enterprise professional package, and tokens for the enterprise auto package.
 * @method void setExclusiveUsed(string $ExclusiveUsed) Set Used credit of the dedicated pool. The unit varies based on the package type: credits for the enterprise professional package, and tokens for the enterprise auto package.
 * @method string getSharedPool() Obtain Total shared pool quota. The measurement unit varies based on the package type: credits (enterprise edition professional package), tokens (enterprise edition auto package).
 * @method void setSharedPool(string $SharedPool) Set Total shared pool quota. The measurement unit varies based on the package type: credits (enterprise edition professional package), tokens (enterprise edition auto package).
 * @method string getSharedUsed() Obtain Shared used credit. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
 * @method void setSharedUsed(string $SharedUsed) Set Shared used credit. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
 * @method string getCycleQuota() Obtain Current period limit. The unit varies by package type: credits (Enterprise Edition Professional), tokens (Enterprise Edition auto).
 * @method void setCycleQuota(string $CycleQuota) Set Current period limit. The unit varies by package type: credits (Enterprise Edition Professional), tokens (Enterprise Edition auto).
 * @method integer getCurrentCycle() Obtain Current cycle.
 * @method void setCurrentCycle(integer $CurrentCycle) Set Current cycle.
 * @method integer getRemainCycles() Obtain Remaining cycle.
 * @method void setRemainCycles(integer $RemainCycles) Set Remaining cycle.
 */
class TokenPlanPackageInfo extends AbstractModel
{
    /**
     * @var string Total quota. The unit is determined by the package type: credits for the Enterprise Professional package and tokens for the Enterprise auto package.
     */
    public $TotalQuota;

    /**
     * @var string Total used quota. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
     */
    public $TotalUsed;

    /**
     * @var integer Total number of periods.
     */
    public $TotalCycles;

    /**
     * @var string Period unit. Value: month
     */
    public $CycleUnit;

    /**
     * @var string Package effective time.
     */
    public $StartTime;

    /**
     * @var string Package expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Allocated quota for dedicated pool. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
     */
    public $ExclusiveAllocated;

    /**
     * @var string Used credit of the dedicated pool. The unit varies based on the package type: credits for the enterprise professional package, and tokens for the enterprise auto package.
     */
    public $ExclusiveUsed;

    /**
     * @var string Total shared pool quota. The measurement unit varies based on the package type: credits (enterprise edition professional package), tokens (enterprise edition auto package).
     */
    public $SharedPool;

    /**
     * @var string Shared used credit. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
     */
    public $SharedUsed;

    /**
     * @var string Current period limit. The unit varies by package type: credits (Enterprise Edition Professional), tokens (Enterprise Edition auto).
     */
    public $CycleQuota;

    /**
     * @var integer Current cycle.
     */
    public $CurrentCycle;

    /**
     * @var integer Remaining cycle.
     */
    public $RemainCycles;

    /**
     * @param string $TotalQuota Total quota. The unit is determined by the package type: credits for the Enterprise Professional package and tokens for the Enterprise auto package.
     * @param string $TotalUsed Total used quota. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
     * @param integer $TotalCycles Total number of periods.
     * @param string $CycleUnit Period unit. Value: month
     * @param string $StartTime Package effective time.
     * @param string $ExpireTime Package expiration time.
     * @param string $ExclusiveAllocated Allocated quota for dedicated pool. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
     * @param string $ExclusiveUsed Used credit of the dedicated pool. The unit varies based on the package type: credits for the enterprise professional package, and tokens for the enterprise auto package.
     * @param string $SharedPool Total shared pool quota. The measurement unit varies based on the package type: credits (enterprise edition professional package), tokens (enterprise edition auto package).
     * @param string $SharedUsed Shared used credit. The unit varies by package type: credits (enterprise edition professional package), tokens (enterprise edition auto package)
     * @param string $CycleQuota Current period limit. The unit varies by package type: credits (Enterprise Edition Professional), tokens (Enterprise Edition auto).
     * @param integer $CurrentCycle Current cycle.
     * @param integer $RemainCycles Remaining cycle.
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
        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("TotalUsed",$param) and $param["TotalUsed"] !== null) {
            $this->TotalUsed = $param["TotalUsed"];
        }

        if (array_key_exists("TotalCycles",$param) and $param["TotalCycles"] !== null) {
            $this->TotalCycles = $param["TotalCycles"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ExclusiveAllocated",$param) and $param["ExclusiveAllocated"] !== null) {
            $this->ExclusiveAllocated = $param["ExclusiveAllocated"];
        }

        if (array_key_exists("ExclusiveUsed",$param) and $param["ExclusiveUsed"] !== null) {
            $this->ExclusiveUsed = $param["ExclusiveUsed"];
        }

        if (array_key_exists("SharedPool",$param) and $param["SharedPool"] !== null) {
            $this->SharedPool = $param["SharedPool"];
        }

        if (array_key_exists("SharedUsed",$param) and $param["SharedUsed"] !== null) {
            $this->SharedUsed = $param["SharedUsed"];
        }

        if (array_key_exists("CycleQuota",$param) and $param["CycleQuota"] !== null) {
            $this->CycleQuota = $param["CycleQuota"];
        }

        if (array_key_exists("CurrentCycle",$param) and $param["CurrentCycle"] !== null) {
            $this->CurrentCycle = $param["CurrentCycle"];
        }

        if (array_key_exists("RemainCycles",$param) and $param["RemainCycles"] !== null) {
            $this->RemainCycles = $param["RemainCycles"];
        }
    }
}
