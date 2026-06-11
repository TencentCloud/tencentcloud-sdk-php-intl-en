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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application defense overview information
 *
 * @method integer getDefenceVuls() Obtain Number of protectable vulnerabilities
 * @method void setDefenceVuls(integer $DefenceVuls) Set Number of protectable vulnerabilities
 * @method integer getPreciseDefenseVuls() Obtain Number of accurately prevented vulnerabilities
 * @method void setPreciseDefenseVuls(integer $PreciseDefenseVuls) Set Number of accurately prevented vulnerabilities
 * @method integer getUnhandledRaspEvents() Obtain Unprocessed application defense event count
 * @method void setUnhandledRaspEvents(integer $UnhandledRaspEvents) Set Unprocessed application defense event count
 * @method integer getUnhandledMemShellScanEvents() Obtain Number of unprocessed Java Webshell scan events
 * @method void setUnhandledMemShellScanEvents(integer $UnhandledMemShellScanEvents) Set Number of unprocessed Java Webshell scan events
 * @method integer getUnhandledMemShellInjectEvents() Obtain Number of unprocessed memory shell injection events
 * @method void setUnhandledMemShellInjectEvents(integer $UnhandledMemShellInjectEvents) Set Number of unprocessed memory shell injection events
 * @method array getUnHandledEvents() Obtain Daily event handling trend
 * @method void setUnHandledEvents(array $UnHandledEvents) Set Daily event handling trend
 * @method array getRaspAttackCounts() Obtain Daily vulnerability detect event trend
 * @method void setRaspAttackCounts(array $RaspAttackCounts) Set Daily vulnerability detect event trend
 * @method array getRaspDefendCounts() Obtain Daily vulnerability defense event trend
 * @method void setRaspDefendCounts(array $RaspDefendCounts) Set Daily vulnerability defense event trend
 * @method array getMemShellAttackCounts() Obtain Daily Java Webshell detect event trend
 * @method void setMemShellAttackCounts(array $MemShellAttackCounts) Set Daily Java Webshell detect event trend
 * @method array getMemShellDefendCounts() Obtain Daily Java Webshell defense event trends
 * @method void setMemShellDefendCounts(array $MemShellDefendCounts) Set Daily Java Webshell defense event trends
 * @method array getDate() Obtain Date
 * @method void setDate(array $Date) Set Date
 * @method integer getProtectAssetOpenCount() Obtain Enable RASP protection switch number of assets
 * @method void setProtectAssetOpenCount(integer $ProtectAssetOpenCount) Set Enable RASP protection switch number of assets
 * @method integer getProtectAssetCount() Obtain Total number of assets
 * @method void setProtectAssetCount(integer $ProtectAssetCount) Set Total number of assets
 * @method integer getUltimateAssetCount() Obtain Number of asset protection bound to the flagship edition
 * @method void setUltimateAssetCount(integer $UltimateAssetCount) Set Number of asset protection bound to the flagship edition
 * @method integer getRaspAssetCount() Obtain Number of assets bound to the Prioritized Protection package
 * @method void setRaspAssetCount(integer $RaspAssetCount) Set Number of assets bound to the Prioritized Protection package
 * @method integer getNotProtectAssetCount() Obtain Number of unauthorized assets
 * @method void setNotProtectAssetCount(integer $NotProtectAssetCount) Set Number of unauthorized assets
 * @method integer getRecentUnhandledEvents() Obtain Pending events count in the last 7 days
 * @method void setRecentUnhandledEvents(integer $RecentUnhandledEvents) Set Pending events count in the last 7 days
 * @method integer getRaspDefendCount() Obtain Total Number of Successful Defenses
 * @method void setRaspDefendCount(integer $RaspDefendCount) Set Total Number of Successful Defenses
 */
class RaspEventOverview extends AbstractModel
{
    /**
     * @var integer Number of protectable vulnerabilities
     */
    public $DefenceVuls;

    /**
     * @var integer Number of accurately prevented vulnerabilities
     */
    public $PreciseDefenseVuls;

    /**
     * @var integer Unprocessed application defense event count
     */
    public $UnhandledRaspEvents;

    /**
     * @var integer Number of unprocessed Java Webshell scan events
     */
    public $UnhandledMemShellScanEvents;

    /**
     * @var integer Number of unprocessed memory shell injection events
     */
    public $UnhandledMemShellInjectEvents;

    /**
     * @var array Daily event handling trend
     */
    public $UnHandledEvents;

    /**
     * @var array Daily vulnerability detect event trend
     */
    public $RaspAttackCounts;

    /**
     * @var array Daily vulnerability defense event trend
     */
    public $RaspDefendCounts;

    /**
     * @var array Daily Java Webshell detect event trend
     */
    public $MemShellAttackCounts;

    /**
     * @var array Daily Java Webshell defense event trends
     */
    public $MemShellDefendCounts;

    /**
     * @var array Date
     */
    public $Date;

    /**
     * @var integer Enable RASP protection switch number of assets
     */
    public $ProtectAssetOpenCount;

    /**
     * @var integer Total number of assets
     */
    public $ProtectAssetCount;

    /**
     * @var integer Number of asset protection bound to the flagship edition
     */
    public $UltimateAssetCount;

    /**
     * @var integer Number of assets bound to the Prioritized Protection package
     */
    public $RaspAssetCount;

    /**
     * @var integer Number of unauthorized assets
     */
    public $NotProtectAssetCount;

    /**
     * @var integer Pending events count in the last 7 days
     */
    public $RecentUnhandledEvents;

    /**
     * @var integer Total Number of Successful Defenses
     */
    public $RaspDefendCount;

    /**
     * @param integer $DefenceVuls Number of protectable vulnerabilities
     * @param integer $PreciseDefenseVuls Number of accurately prevented vulnerabilities
     * @param integer $UnhandledRaspEvents Unprocessed application defense event count
     * @param integer $UnhandledMemShellScanEvents Number of unprocessed Java Webshell scan events
     * @param integer $UnhandledMemShellInjectEvents Number of unprocessed memory shell injection events
     * @param array $UnHandledEvents Daily event handling trend
     * @param array $RaspAttackCounts Daily vulnerability detect event trend
     * @param array $RaspDefendCounts Daily vulnerability defense event trend
     * @param array $MemShellAttackCounts Daily Java Webshell detect event trend
     * @param array $MemShellDefendCounts Daily Java Webshell defense event trends
     * @param array $Date Date
     * @param integer $ProtectAssetOpenCount Enable RASP protection switch number of assets
     * @param integer $ProtectAssetCount Total number of assets
     * @param integer $UltimateAssetCount Number of asset protection bound to the flagship edition
     * @param integer $RaspAssetCount Number of assets bound to the Prioritized Protection package
     * @param integer $NotProtectAssetCount Number of unauthorized assets
     * @param integer $RecentUnhandledEvents Pending events count in the last 7 days
     * @param integer $RaspDefendCount Total Number of Successful Defenses
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
        if (array_key_exists("DefenceVuls",$param) and $param["DefenceVuls"] !== null) {
            $this->DefenceVuls = $param["DefenceVuls"];
        }

        if (array_key_exists("PreciseDefenseVuls",$param) and $param["PreciseDefenseVuls"] !== null) {
            $this->PreciseDefenseVuls = $param["PreciseDefenseVuls"];
        }

        if (array_key_exists("UnhandledRaspEvents",$param) and $param["UnhandledRaspEvents"] !== null) {
            $this->UnhandledRaspEvents = $param["UnhandledRaspEvents"];
        }

        if (array_key_exists("UnhandledMemShellScanEvents",$param) and $param["UnhandledMemShellScanEvents"] !== null) {
            $this->UnhandledMemShellScanEvents = $param["UnhandledMemShellScanEvents"];
        }

        if (array_key_exists("UnhandledMemShellInjectEvents",$param) and $param["UnhandledMemShellInjectEvents"] !== null) {
            $this->UnhandledMemShellInjectEvents = $param["UnhandledMemShellInjectEvents"];
        }

        if (array_key_exists("UnHandledEvents",$param) and $param["UnHandledEvents"] !== null) {
            $this->UnHandledEvents = $param["UnHandledEvents"];
        }

        if (array_key_exists("RaspAttackCounts",$param) and $param["RaspAttackCounts"] !== null) {
            $this->RaspAttackCounts = $param["RaspAttackCounts"];
        }

        if (array_key_exists("RaspDefendCounts",$param) and $param["RaspDefendCounts"] !== null) {
            $this->RaspDefendCounts = $param["RaspDefendCounts"];
        }

        if (array_key_exists("MemShellAttackCounts",$param) and $param["MemShellAttackCounts"] !== null) {
            $this->MemShellAttackCounts = $param["MemShellAttackCounts"];
        }

        if (array_key_exists("MemShellDefendCounts",$param) and $param["MemShellDefendCounts"] !== null) {
            $this->MemShellDefendCounts = $param["MemShellDefendCounts"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ProtectAssetOpenCount",$param) and $param["ProtectAssetOpenCount"] !== null) {
            $this->ProtectAssetOpenCount = $param["ProtectAssetOpenCount"];
        }

        if (array_key_exists("ProtectAssetCount",$param) and $param["ProtectAssetCount"] !== null) {
            $this->ProtectAssetCount = $param["ProtectAssetCount"];
        }

        if (array_key_exists("UltimateAssetCount",$param) and $param["UltimateAssetCount"] !== null) {
            $this->UltimateAssetCount = $param["UltimateAssetCount"];
        }

        if (array_key_exists("RaspAssetCount",$param) and $param["RaspAssetCount"] !== null) {
            $this->RaspAssetCount = $param["RaspAssetCount"];
        }

        if (array_key_exists("NotProtectAssetCount",$param) and $param["NotProtectAssetCount"] !== null) {
            $this->NotProtectAssetCount = $param["NotProtectAssetCount"];
        }

        if (array_key_exists("RecentUnhandledEvents",$param) and $param["RecentUnhandledEvents"] !== null) {
            $this->RecentUnhandledEvents = $param["RecentUnhandledEvents"];
        }

        if (array_key_exists("RaspDefendCount",$param) and $param["RaspDefendCount"] !== null) {
            $this->RaspDefendCount = $param["RaspDefendCount"];
        }
    }
}
