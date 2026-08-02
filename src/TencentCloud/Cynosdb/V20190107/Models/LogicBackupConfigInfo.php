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
 * @method string getLogicBackupEnable() Obtain <p>Whether automatic logical backup is enabled</p>
 * @method void setLogicBackupEnable(string $LogicBackupEnable) Set <p>Whether automatic logical backup is enabled</p>
 * @method integer getLogicBackupTimeBeg() Obtain <p>Automatic logic backup start time</p>
 * @method void setLogicBackupTimeBeg(integer $LogicBackupTimeBeg) Set <p>Automatic logic backup start time</p>
 * @method integer getLogicBackupTimeEnd() Obtain <p>Automated logic backup end time</p>
 * @method void setLogicBackupTimeEnd(integer $LogicBackupTimeEnd) Set <p>Automated logic backup end time</p>
 * @method integer getLogicReserveDuration() Obtain <p>Automatic logical backup retention time<br>Unit: second</p>
 * @method void setLogicReserveDuration(integer $LogicReserveDuration) Set <p>Automatic logical backup retention time<br>Unit: second</p>
 * @method string getLogicCrossRegionsEnable() Obtain <p>Whether cross-regional logical backup is enabled<br>Available values: ON/OFF</p>
 * @method void setLogicCrossRegionsEnable(string $LogicCrossRegionsEnable) Set <p>Whether cross-regional logical backup is enabled<br>Available values: ON/OFF</p>
 * @method array getLogicCrossRegions() Obtain <p>Cross-regional logic backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogicCrossRegions(array $LogicCrossRegions) Set <p>Cross-regional logic backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAutoCopyVaults() Obtain <p>Backup delivery relationship</p>
 * @method void setAutoCopyVaults(array $AutoCopyVaults) Set <p>Backup delivery relationship</p>
 * @method integer getLogicCrossRegionSaveDays() Obtain <p>Day</p><p>Unit: Cross-regional logical backup retention time</p>
 * @method void setLogicCrossRegionSaveDays(integer $LogicCrossRegionSaveDays) Set <p>Day</p><p>Unit: Cross-regional logical backup retention time</p>
 */
class LogicBackupConfigInfo extends AbstractModel
{
    /**
     * @var string <p>Whether automatic logical backup is enabled</p>
     */
    public $LogicBackupEnable;

    /**
     * @var integer <p>Automatic logic backup start time</p>
     */
    public $LogicBackupTimeBeg;

    /**
     * @var integer <p>Automated logic backup end time</p>
     */
    public $LogicBackupTimeEnd;

    /**
     * @var integer <p>Automatic logical backup retention time<br>Unit: second</p>
     */
    public $LogicReserveDuration;

    /**
     * @var string <p>Whether cross-regional logical backup is enabled<br>Available values: ON/OFF</p>
     */
    public $LogicCrossRegionsEnable;

    /**
     * @var array <p>Cross-regional logic backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogicCrossRegions;

    /**
     * @var array <p>Backup delivery relationship</p>
     */
    public $AutoCopyVaults;

    /**
     * @var integer <p>Day</p><p>Unit: Cross-regional logical backup retention time</p>
     */
    public $LogicCrossRegionSaveDays;

    /**
     * @param string $LogicBackupEnable <p>Whether automatic logical backup is enabled</p>
     * @param integer $LogicBackupTimeBeg <p>Automatic logic backup start time</p>
     * @param integer $LogicBackupTimeEnd <p>Automated logic backup end time</p>
     * @param integer $LogicReserveDuration <p>Automatic logical backup retention time<br>Unit: second</p>
     * @param string $LogicCrossRegionsEnable <p>Whether cross-regional logical backup is enabled<br>Available values: ON/OFF</p>
     * @param array $LogicCrossRegions <p>Cross-regional logic backup</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AutoCopyVaults <p>Backup delivery relationship</p>
     * @param integer $LogicCrossRegionSaveDays <p>Day</p><p>Unit: Cross-regional logical backup retention time</p>
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

        if (array_key_exists("LogicCrossRegionSaveDays",$param) and $param["LogicCrossRegionSaveDays"] !== null) {
            $this->LogicCrossRegionSaveDays = $param["LogicCrossRegionSaveDays"];
        }
    }
}
