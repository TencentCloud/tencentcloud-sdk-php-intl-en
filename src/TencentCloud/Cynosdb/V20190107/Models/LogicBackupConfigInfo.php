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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logical backup configuration information.
 *
 * @method string getLogicBackupEnable() Obtain Whether automatic logical backup is enabled.
 * @method void setLogicBackupEnable(string $LogicBackupEnable) Set Whether automatic logical backup is enabled.
 * @method integer getLogicBackupTimeBeg() Obtain Specifies the automatic logic backup start time.
 * @method void setLogicBackupTimeBeg(integer $LogicBackupTimeBeg) Set Specifies the automatic logic backup start time.
 * @method integer getLogicBackupTimeEnd() Obtain Specifies the termination time of automatic logical backup.
 * @method void setLogicBackupTimeEnd(integer $LogicBackupTimeEnd) Set Specifies the termination time of automatic logical backup.
 * @method integer getLogicReserveDuration() Obtain Automatic logical backup retention time.
Unit: seconds.
 * @method void setLogicReserveDuration(integer $LogicReserveDuration) Set Automatic logical backup retention time.
Unit: seconds.
 * @method string getLogicCrossRegionsEnable() Obtain Is cross-regional logical backup enabled?.
Valid values: ON/OFF.
 * @method void setLogicCrossRegionsEnable(string $LogicCrossRegionsEnable) Set Is cross-regional logical backup enabled?.
Valid values: ON/OFF.
 * @method array getLogicCrossRegions() Obtain Regions covered by logical backup.
 * @method void setLogicCrossRegions(array $LogicCrossRegions) Set Regions covered by logical backup.
 * @method array getAutoCopyVaults() Obtain Backup delivery relationship
 * @method void setAutoCopyVaults(array $AutoCopyVaults) Set Backup delivery relationship
 */
class LogicBackupConfigInfo extends AbstractModel
{
    /**
     * @var string Whether automatic logical backup is enabled.
     */
    public $LogicBackupEnable;

    /**
     * @var integer Specifies the automatic logic backup start time.
     */
    public $LogicBackupTimeBeg;

    /**
     * @var integer Specifies the termination time of automatic logical backup.
     */
    public $LogicBackupTimeEnd;

    /**
     * @var integer Automatic logical backup retention time.
Unit: seconds.
     */
    public $LogicReserveDuration;

    /**
     * @var string Is cross-regional logical backup enabled?.
Valid values: ON/OFF.
     */
    public $LogicCrossRegionsEnable;

    /**
     * @var array Regions covered by logical backup.
     */
    public $LogicCrossRegions;

    /**
     * @var array Backup delivery relationship
     */
    public $AutoCopyVaults;

    /**
     * @param string $LogicBackupEnable Whether automatic logical backup is enabled.
     * @param integer $LogicBackupTimeBeg Specifies the automatic logic backup start time.
     * @param integer $LogicBackupTimeEnd Specifies the termination time of automatic logical backup.
     * @param integer $LogicReserveDuration Automatic logical backup retention time.
Unit: seconds.
     * @param string $LogicCrossRegionsEnable Is cross-regional logical backup enabled?.
Valid values: ON/OFF.
     * @param array $LogicCrossRegions Regions covered by logical backup.
     * @param array $AutoCopyVaults Backup delivery relationship
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
        if (array_key_exists("LogicBackupEnable",$param) and $param["LogicBackupEnable"] !== null) {
            $this->LogicBackupEnable = $param["LogicBackupEnable"];
        }

        if (array_key_exists("LogicBackupTimeBeg",$param) and $param["LogicBackupTimeBeg"] !== null) {
            $this->LogicBackupTimeBeg = $param["LogicBackupTimeBeg"];
        }

        if (array_key_exists("LogicBackupTimeEnd",$param) and $param["LogicBackupTimeEnd"] !== null) {
            $this->LogicBackupTimeEnd = $param["LogicBackupTimeEnd"];
        }

        if (array_key_exists("LogicReserveDuration",$param) and $param["LogicReserveDuration"] !== null) {
            $this->LogicReserveDuration = $param["LogicReserveDuration"];
        }

        if (array_key_exists("LogicCrossRegionsEnable",$param) and $param["LogicCrossRegionsEnable"] !== null) {
            $this->LogicCrossRegionsEnable = $param["LogicCrossRegionsEnable"];
        }

        if (array_key_exists("LogicCrossRegions",$param) and $param["LogicCrossRegions"] !== null) {
            $this->LogicCrossRegions = $param["LogicCrossRegions"];
        }

        if (array_key_exists("AutoCopyVaults",$param) and $param["AutoCopyVaults"] !== null) {
            $this->AutoCopyVaults = [];
            foreach ($param["AutoCopyVaults"] as $key => $value){
                $obj = new CreateBackupVaultItem();
                $obj->deserialize($value);
                array_push($this->AutoCopyVaults, $obj);
            }
        }
    }
}
