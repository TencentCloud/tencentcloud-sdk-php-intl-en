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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceMajorVersion request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID.
 * @method string getTargetDBKernelVersion() Obtain Target kernel version number, where upgradeable target kernel version numbers can be acquired through API DescribeDBVersions.
 * @method void setTargetDBKernelVersion(string $TargetDBKernelVersion) Set Target kernel version number, where upgradeable target kernel version numbers can be acquired through API DescribeDBVersions.
 * @method boolean getUpgradeCheck() Obtain Whether it is verification mode: if UpgradeCheck is True, it means only kernel version compatibility check will be conducted, without actual upgrade operations, and there will be no affect on the original instance. The check results can be viewed through the upgrade logs.
 * @method void setUpgradeCheck(boolean $UpgradeCheck) Set Whether it is verification mode: if UpgradeCheck is True, it means only kernel version compatibility check will be conducted, without actual upgrade operations, and there will be no affect on the original instance. The check results can be viewed through the upgrade logs.
 * @method boolean getBackupBeforeUpgrade() Obtain Pre-upgrade backup option: True means a full backup is required before upgrade, and False means a full backup is not required before upgrade. If there is an existing backup set that can restore the instance to its pre-upgrade state, False can be selected; otherwise, True should be specified. This parameter is invalid when UpgradeCheck is True.
 * @method void setBackupBeforeUpgrade(boolean $BackupBeforeUpgrade) Set Pre-upgrade backup option: True means a full backup is required before upgrade, and False means a full backup is not required before upgrade. If there is an existing backup set that can restore the instance to its pre-upgrade state, False can be selected; otherwise, True should be specified. This parameter is invalid when UpgradeCheck is True.
 * @method integer getStatisticsRefreshOption() Obtain Statistics collection option, which is used to run ANALYZE on the primary instance to update system statistics after the upgrade. Valid values include:
0: No statistics collection required;
1: Collect statistics before instance recovery write;
3: Collect statistics after instance recovery write.
This parameter is invalid when UpgradeCheck is True.
 * @method void setStatisticsRefreshOption(integer $StatisticsRefreshOption) Set Statistics collection option, which is used to run ANALYZE on the primary instance to update system statistics after the upgrade. Valid values include:
0: No statistics collection required;
1: Collect statistics before instance recovery write;
3: Collect statistics after instance recovery write.
This parameter is invalid when UpgradeCheck is True.
 * @method integer getExtensionUpgradeOption() Obtain Plugin upgrade option. pg_upgrade does not upgrade any plugins, and "ALTER EXTENSION UPDATE" needs to be executed on the database where the plugins were created after the upgrade. When initiating a major version upgrade of an instance, you can specify whether the upgrade task automatically upgrades the plugin version before/after the instance recovery write. Valid values include:
0: No automatic plugin upgrade required;
1: Upgrade plugins before recovery write;
2: Upgrade plugins after recovery write.
This parameter is invalid when UpgradeCheck is True.
 * @method void setExtensionUpgradeOption(integer $ExtensionUpgradeOption) Set Plugin upgrade option. pg_upgrade does not upgrade any plugins, and "ALTER EXTENSION UPDATE" needs to be executed on the database where the plugins were created after the upgrade. When initiating a major version upgrade of an instance, you can specify whether the upgrade task automatically upgrades the plugin version before/after the instance recovery write. Valid values include:
0: No automatic plugin upgrade required;
1: Upgrade plugins before recovery write;
2: Upgrade plugins after recovery write.
This parameter is invalid when UpgradeCheck is True.
 * @method integer getUpgradeTimeOption() Obtain Upgrade time option. During the upgrade process, there will be a period when the instance is read-only, and there will be a second-level flash disconnection. When initiating an upgrade, you need to choose the time window for this impact. Valid values include:
0: Execute automatically, no specific time window required;
1: Specify the time window for this upgrade task, which is set via UpgradeTimeBegin and UpgradeTimeEnd parameters;
2: Execute during the instance operation and maintenance time window.
This parameter is invalid when UpgradeCheck is True.
 * @method void setUpgradeTimeOption(integer $UpgradeTimeOption) Set Upgrade time option. During the upgrade process, there will be a period when the instance is read-only, and there will be a second-level flash disconnection. When initiating an upgrade, you need to choose the time window for this impact. Valid values include:
0: Execute automatically, no specific time window required;
1: Specify the time window for this upgrade task, which is set via UpgradeTimeBegin and UpgradeTimeEnd parameters;
2: Execute during the instance operation and maintenance time window.
This parameter is invalid when UpgradeCheck is True.
 * @method string getUpgradeTimeBegin() Obtain Upgrade window start time, and the time format is HH:MM:SS, for example: 01:00:00. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
 * @method void setUpgradeTimeBegin(string $UpgradeTimeBegin) Set Upgrade window start time, and the time format is HH:MM:SS, for example: 01:00:00. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
 * @method string getUpgradeTimeEnd() Obtain Upgrade window end time, and the time format is HH:MM:SS, for example: 2:00:00 AM. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
 * @method void setUpgradeTimeEnd(string $UpgradeTimeEnd) Set Upgrade window end time, and the time format is HH:MM:SS, for example: 2:00:00 AM. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
 */
class UpgradeDBInstanceMajorVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Target kernel version number, where upgradeable target kernel version numbers can be acquired through API DescribeDBVersions.
     */
    public $TargetDBKernelVersion;

    /**
     * @var boolean Whether it is verification mode: if UpgradeCheck is True, it means only kernel version compatibility check will be conducted, without actual upgrade operations, and there will be no affect on the original instance. The check results can be viewed through the upgrade logs.
     */
    public $UpgradeCheck;

    /**
     * @var boolean Pre-upgrade backup option: True means a full backup is required before upgrade, and False means a full backup is not required before upgrade. If there is an existing backup set that can restore the instance to its pre-upgrade state, False can be selected; otherwise, True should be specified. This parameter is invalid when UpgradeCheck is True.
     */
    public $BackupBeforeUpgrade;

    /**
     * @var integer Statistics collection option, which is used to run ANALYZE on the primary instance to update system statistics after the upgrade. Valid values include:
0: No statistics collection required;
1: Collect statistics before instance recovery write;
3: Collect statistics after instance recovery write.
This parameter is invalid when UpgradeCheck is True.
     */
    public $StatisticsRefreshOption;

    /**
     * @var integer Plugin upgrade option. pg_upgrade does not upgrade any plugins, and "ALTER EXTENSION UPDATE" needs to be executed on the database where the plugins were created after the upgrade. When initiating a major version upgrade of an instance, you can specify whether the upgrade task automatically upgrades the plugin version before/after the instance recovery write. Valid values include:
0: No automatic plugin upgrade required;
1: Upgrade plugins before recovery write;
2: Upgrade plugins after recovery write.
This parameter is invalid when UpgradeCheck is True.
     */
    public $ExtensionUpgradeOption;

    /**
     * @var integer Upgrade time option. During the upgrade process, there will be a period when the instance is read-only, and there will be a second-level flash disconnection. When initiating an upgrade, you need to choose the time window for this impact. Valid values include:
0: Execute automatically, no specific time window required;
1: Specify the time window for this upgrade task, which is set via UpgradeTimeBegin and UpgradeTimeEnd parameters;
2: Execute during the instance operation and maintenance time window.
This parameter is invalid when UpgradeCheck is True.
     */
    public $UpgradeTimeOption;

    /**
     * @var string Upgrade window start time, and the time format is HH:MM:SS, for example: 01:00:00. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
     */
    public $UpgradeTimeBegin;

    /**
     * @var string Upgrade window end time, and the time format is HH:MM:SS, for example: 2:00:00 AM. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
     */
    public $UpgradeTimeEnd;

    /**
     * @param string $DBInstanceId Instance ID.
     * @param string $TargetDBKernelVersion Target kernel version number, where upgradeable target kernel version numbers can be acquired through API DescribeDBVersions.
     * @param boolean $UpgradeCheck Whether it is verification mode: if UpgradeCheck is True, it means only kernel version compatibility check will be conducted, without actual upgrade operations, and there will be no affect on the original instance. The check results can be viewed through the upgrade logs.
     * @param boolean $BackupBeforeUpgrade Pre-upgrade backup option: True means a full backup is required before upgrade, and False means a full backup is not required before upgrade. If there is an existing backup set that can restore the instance to its pre-upgrade state, False can be selected; otherwise, True should be specified. This parameter is invalid when UpgradeCheck is True.
     * @param integer $StatisticsRefreshOption Statistics collection option, which is used to run ANALYZE on the primary instance to update system statistics after the upgrade. Valid values include:
0: No statistics collection required;
1: Collect statistics before instance recovery write;
3: Collect statistics after instance recovery write.
This parameter is invalid when UpgradeCheck is True.
     * @param integer $ExtensionUpgradeOption Plugin upgrade option. pg_upgrade does not upgrade any plugins, and "ALTER EXTENSION UPDATE" needs to be executed on the database where the plugins were created after the upgrade. When initiating a major version upgrade of an instance, you can specify whether the upgrade task automatically upgrades the plugin version before/after the instance recovery write. Valid values include:
0: No automatic plugin upgrade required;
1: Upgrade plugins before recovery write;
2: Upgrade plugins after recovery write.
This parameter is invalid when UpgradeCheck is True.
     * @param integer $UpgradeTimeOption Upgrade time option. During the upgrade process, there will be a period when the instance is read-only, and there will be a second-level flash disconnection. When initiating an upgrade, you need to choose the time window for this impact. Valid values include:
0: Execute automatically, no specific time window required;
1: Specify the time window for this upgrade task, which is set via UpgradeTimeBegin and UpgradeTimeEnd parameters;
2: Execute during the instance operation and maintenance time window.
This parameter is invalid when UpgradeCheck is True.
     * @param string $UpgradeTimeBegin Upgrade window start time, and the time format is HH:MM:SS, for example: 01:00:00. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
     * @param string $UpgradeTimeEnd Upgrade window end time, and the time format is HH:MM:SS, for example: 2:00:00 AM. This parameter is valid when UpgradeTimeOption is set to `1`.
This parameter is invalid when UpgradeCheck is True.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("TargetDBKernelVersion",$param) and $param["TargetDBKernelVersion"] !== null) {
            $this->TargetDBKernelVersion = $param["TargetDBKernelVersion"];
        }

        if (array_key_exists("UpgradeCheck",$param) and $param["UpgradeCheck"] !== null) {
            $this->UpgradeCheck = $param["UpgradeCheck"];
        }

        if (array_key_exists("BackupBeforeUpgrade",$param) and $param["BackupBeforeUpgrade"] !== null) {
            $this->BackupBeforeUpgrade = $param["BackupBeforeUpgrade"];
        }

        if (array_key_exists("StatisticsRefreshOption",$param) and $param["StatisticsRefreshOption"] !== null) {
            $this->StatisticsRefreshOption = $param["StatisticsRefreshOption"];
        }

        if (array_key_exists("ExtensionUpgradeOption",$param) and $param["ExtensionUpgradeOption"] !== null) {
            $this->ExtensionUpgradeOption = $param["ExtensionUpgradeOption"];
        }

        if (array_key_exists("UpgradeTimeOption",$param) and $param["UpgradeTimeOption"] !== null) {
            $this->UpgradeTimeOption = $param["UpgradeTimeOption"];
        }

        if (array_key_exists("UpgradeTimeBegin",$param) and $param["UpgradeTimeBegin"] !== null) {
            $this->UpgradeTimeBegin = $param["UpgradeTimeBegin"];
        }

        if (array_key_exists("UpgradeTimeEnd",$param) and $param["UpgradeTimeEnd"] !== null) {
            $this->UpgradeTimeEnd = $param["UpgradeTimeEnd"];
        }
    }
}
