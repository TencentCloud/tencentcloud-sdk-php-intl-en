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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database configurations
 *
 * @method string getIsSubscribed() Obtain Whether it is subscribed. Valid values: `0` (no), `1` (yes)
 * @method void setIsSubscribed(string $IsSubscribed) Set Whether it is subscribed. Valid values: `0` (no), `1` (yes)
 * @method string getCollationName() Obtain Database collation
 * @method void setCollationName(string $CollationName) Set Database collation
 * @method string getIsAutoCleanupOn() Obtain Whether the cleanup task is enabled to automatically remove old change tracking information when CT is enabled. Valid values: `0` (no), `1` (yes)
 * @method void setIsAutoCleanupOn(string $IsAutoCleanupOn) Set Whether the cleanup task is enabled to automatically remove old change tracking information when CT is enabled. Valid values: `0` (no), `1` (yes)
 * @method string getIsBrokerEnabled() Obtain Whether SQL Server Service Broker is enabled. Valid values: `0` (no), `1` (yes)
 * @method void setIsBrokerEnabled(string $IsBrokerEnabled) Set Whether SQL Server Service Broker is enabled. Valid values: `0` (no), `1` (yes)
 * @method string getIsCdcEnabled() Obtain Whether CDC is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method void setIsCdcEnabled(string $IsCdcEnabled) Set Whether CDC is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method string getIsDbChainingOn() Obtain Whether CT is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method void setIsDbChainingOn(string $IsDbChainingOn) Set Whether CT is enabled. Valid values: `0` (disabled), `1` (enabled)
 * @method string getIsEncrypted() Obtain Whether it is encrypted. Valid values: `0` (no), `1` (yes)
 * @method void setIsEncrypted(string $IsEncrypted) Set Whether it is encrypted. Valid values: `0` (no), `1` (yes)
 * @method string getIsFulltextEnabled() Obtain Whether full-text indexes are enabled. Valid values: `0` (no), `1` (yes)
 * @method void setIsFulltextEnabled(string $IsFulltextEnabled) Set Whether full-text indexes are enabled. Valid values: `0` (no), `1` (yes)
 * @method string getIsMirroring() Obtain Whether it is a mirror database. Valid values: `0` (no), `1` (yes)
 * @method void setIsMirroring(string $IsMirroring) Set Whether it is a mirror database. Valid values: `0` (no), `1` (yes)
 * @method string getIsPublished() Obtain Whether it is published. Valid values: `0` (no), `1` (yes)
 * @method void setIsPublished(string $IsPublished) Set Whether it is published. Valid values: `0` (no), `1` (yes)
 * @method string getIsReadCommittedSnapshotOn() Obtain Whether snapshots are enabled. Valid values: `0` (no), `1` (yes)
 * @method void setIsReadCommittedSnapshotOn(string $IsReadCommittedSnapshotOn) Set Whether snapshots are enabled. Valid values: `0` (no), `1` (yes)
 * @method string getIsTrustworthyOn() Obtain Whether it is trustworthy. Valid values: `0` (no), `1` (yes)
 * @method void setIsTrustworthyOn(string $IsTrustworthyOn) Set Whether it is trustworthy. Valid values: `0` (no), `1` (yes)
 * @method string getMirroringState() Obtain Mirroring state
 * @method void setMirroringState(string $MirroringState) Set Mirroring state
 * @method string getName() Obtain Database name
 * @method void setName(string $Name) Set Database name
 * @method string getRecoveryModelDesc() Obtain Recovery model
 * @method void setRecoveryModelDesc(string $RecoveryModelDesc) Set Recovery model
 * @method string getRetentionPeriod() Obtain Retention period (in days) of change tracking information
 * @method void setRetentionPeriod(string $RetentionPeriod) Set Retention period (in days) of change tracking information
 * @method string getStateDesc() Obtain Database status
 * @method void setStateDesc(string $StateDesc) Set Database status
 * @method string getUserAccessDesc() Obtain User type
 * @method void setUserAccessDesc(string $UserAccessDesc) Set User type
 * @method string getCreateTime() Obtain Database creation time
 * @method void setCreateTime(string $CreateTime) Set Database creation time
 */
class DbNormalDetail extends AbstractModel
{
    /**
     * @var string Whether it is subscribed. Valid values: `0` (no), `1` (yes)
     */
    public $IsSubscribed;

    /**
     * @var string Database collation
     */
    public $CollationName;

    /**
     * @var string Whether the cleanup task is enabled to automatically remove old change tracking information when CT is enabled. Valid values: `0` (no), `1` (yes)
     */
    public $IsAutoCleanupOn;

    /**
     * @var string Whether SQL Server Service Broker is enabled. Valid values: `0` (no), `1` (yes)
     */
    public $IsBrokerEnabled;

    /**
     * @var string Whether CDC is enabled. Valid values: `0` (disabled), `1` (enabled)
     */
    public $IsCdcEnabled;

    /**
     * @var string Whether CT is enabled. Valid values: `0` (disabled), `1` (enabled)
     */
    public $IsDbChainingOn;

    /**
     * @var string Whether it is encrypted. Valid values: `0` (no), `1` (yes)
     */
    public $IsEncrypted;

    /**
     * @var string Whether full-text indexes are enabled. Valid values: `0` (no), `1` (yes)
     * @deprecated
     */
    public $IsFulltextEnabled;

    /**
     * @var string Whether it is a mirror database. Valid values: `0` (no), `1` (yes)
     */
    public $IsMirroring;

    /**
     * @var string Whether it is published. Valid values: `0` (no), `1` (yes)
     */
    public $IsPublished;

    /**
     * @var string Whether snapshots are enabled. Valid values: `0` (no), `1` (yes)
     */
    public $IsReadCommittedSnapshotOn;

    /**
     * @var string Whether it is trustworthy. Valid values: `0` (no), `1` (yes)
     */
    public $IsTrustworthyOn;

    /**
     * @var string Mirroring state
     */
    public $MirroringState;

    /**
     * @var string Database name
     */
    public $Name;

    /**
     * @var string Recovery model
     */
    public $RecoveryModelDesc;

    /**
     * @var string Retention period (in days) of change tracking information
     */
    public $RetentionPeriod;

    /**
     * @var string Database status
     */
    public $StateDesc;

    /**
     * @var string User type
     */
    public $UserAccessDesc;

    /**
     * @var string Database creation time
     */
    public $CreateTime;

    /**
     * @param string $IsSubscribed Whether it is subscribed. Valid values: `0` (no), `1` (yes)
     * @param string $CollationName Database collation
     * @param string $IsAutoCleanupOn Whether the cleanup task is enabled to automatically remove old change tracking information when CT is enabled. Valid values: `0` (no), `1` (yes)
     * @param string $IsBrokerEnabled Whether SQL Server Service Broker is enabled. Valid values: `0` (no), `1` (yes)
     * @param string $IsCdcEnabled Whether CDC is enabled. Valid values: `0` (disabled), `1` (enabled)
     * @param string $IsDbChainingOn Whether CT is enabled. Valid values: `0` (disabled), `1` (enabled)
     * @param string $IsEncrypted Whether it is encrypted. Valid values: `0` (no), `1` (yes)
     * @param string $IsFulltextEnabled Whether full-text indexes are enabled. Valid values: `0` (no), `1` (yes)
     * @param string $IsMirroring Whether it is a mirror database. Valid values: `0` (no), `1` (yes)
     * @param string $IsPublished Whether it is published. Valid values: `0` (no), `1` (yes)
     * @param string $IsReadCommittedSnapshotOn Whether snapshots are enabled. Valid values: `0` (no), `1` (yes)
     * @param string $IsTrustworthyOn Whether it is trustworthy. Valid values: `0` (no), `1` (yes)
     * @param string $MirroringState Mirroring state
     * @param string $Name Database name
     * @param string $RecoveryModelDesc Recovery model
     * @param string $RetentionPeriod Retention period (in days) of change tracking information
     * @param string $StateDesc Database status
     * @param string $UserAccessDesc User type
     * @param string $CreateTime Database creation time
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
        if (array_key_exists("IsSubscribed",$param) and $param["IsSubscribed"] !== null) {
            $this->IsSubscribed = $param["IsSubscribed"];
        }

        if (array_key_exists("CollationName",$param) and $param["CollationName"] !== null) {
            $this->CollationName = $param["CollationName"];
        }

        if (array_key_exists("IsAutoCleanupOn",$param) and $param["IsAutoCleanupOn"] !== null) {
            $this->IsAutoCleanupOn = $param["IsAutoCleanupOn"];
        }

        if (array_key_exists("IsBrokerEnabled",$param) and $param["IsBrokerEnabled"] !== null) {
            $this->IsBrokerEnabled = $param["IsBrokerEnabled"];
        }

        if (array_key_exists("IsCdcEnabled",$param) and $param["IsCdcEnabled"] !== null) {
            $this->IsCdcEnabled = $param["IsCdcEnabled"];
        }

        if (array_key_exists("IsDbChainingOn",$param) and $param["IsDbChainingOn"] !== null) {
            $this->IsDbChainingOn = $param["IsDbChainingOn"];
        }

        if (array_key_exists("IsEncrypted",$param) and $param["IsEncrypted"] !== null) {
            $this->IsEncrypted = $param["IsEncrypted"];
        }

        if (array_key_exists("IsFulltextEnabled",$param) and $param["IsFulltextEnabled"] !== null) {
            $this->IsFulltextEnabled = $param["IsFulltextEnabled"];
        }

        if (array_key_exists("IsMirroring",$param) and $param["IsMirroring"] !== null) {
            $this->IsMirroring = $param["IsMirroring"];
        }

        if (array_key_exists("IsPublished",$param) and $param["IsPublished"] !== null) {
            $this->IsPublished = $param["IsPublished"];
        }

        if (array_key_exists("IsReadCommittedSnapshotOn",$param) and $param["IsReadCommittedSnapshotOn"] !== null) {
            $this->IsReadCommittedSnapshotOn = $param["IsReadCommittedSnapshotOn"];
        }

        if (array_key_exists("IsTrustworthyOn",$param) and $param["IsTrustworthyOn"] !== null) {
            $this->IsTrustworthyOn = $param["IsTrustworthyOn"];
        }

        if (array_key_exists("MirroringState",$param) and $param["MirroringState"] !== null) {
            $this->MirroringState = $param["MirroringState"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RecoveryModelDesc",$param) and $param["RecoveryModelDesc"] !== null) {
            $this->RecoveryModelDesc = $param["RecoveryModelDesc"];
        }

        if (array_key_exists("RetentionPeriod",$param) and $param["RetentionPeriod"] !== null) {
            $this->RetentionPeriod = $param["RetentionPeriod"];
        }

        if (array_key_exists("StateDesc",$param) and $param["StateDesc"] !== null) {
            $this->StateDesc = $param["StateDesc"];
        }

        if (array_key_exists("UserAccessDesc",$param) and $param["UserAccessDesc"] !== null) {
            $this->UserAccessDesc = $param["UserAccessDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
