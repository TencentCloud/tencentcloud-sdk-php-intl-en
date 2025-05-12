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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getLogicBackupEnable() Obtain Whether automatic logical backup is enabled.
 * @method void setLogicBackupEnable(string $LogicBackupEnable) Set Whether automatic logical backup is enabled.
 * @method integer getLogicBackupTimeBeg() Obtain Specifies the automatic logic backup start time.
 * @method void setLogicBackupTimeBeg(integer $LogicBackupTimeBeg) Set Specifies the automatic logic backup start time.
 * @method integer getLogicBackupTimeEnd() Obtain Specifies the termination time of automatic logical backup.
 * @method void setLogicBackupTimeEnd(integer $LogicBackupTimeEnd) Set Specifies the termination time of automatic logical backup.
 * @method integer getLogicReserveDuration() Obtain Specifies the retention time for automatic logical backup.
 * @method void setLogicReserveDuration(integer $LogicReserveDuration) Set Specifies the retention time for automatic logical backup.
 * @method string getLogicCrossRegionsEnable() Obtain Whether cross-regional logical backup is enabled.
 * @method void setLogicCrossRegionsEnable(string $LogicCrossRegionsEnable) Set Whether cross-regional logical backup is enabled.
 * @method array getLogicCrossRegions() Obtain 
 * @method void setLogicCrossRegions(array $LogicCrossRegions) Set 
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
     * @var integer Specifies the retention time for automatic logical backup.
     */
    public $LogicReserveDuration;

    /**
     * @var string Whether cross-regional logical backup is enabled.
     */
    public $LogicCrossRegionsEnable;

    /**
     * @var array 
     */
    public $LogicCrossRegions;

    /**
     * @param string $LogicBackupEnable Whether automatic logical backup is enabled.
     * @param integer $LogicBackupTimeBeg Specifies the automatic logic backup start time.
     * @param integer $LogicBackupTimeEnd Specifies the termination time of automatic logical backup.
     * @param integer $LogicReserveDuration Specifies the retention time for automatic logical backup.
     * @param string $LogicCrossRegionsEnable Whether cross-regional logical backup is enabled.
     * @param array $LogicCrossRegions 
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
    }
}
