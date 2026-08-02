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
 * Specifies the binlog configuration message.
 *
 * @method integer getBinlogSaveDays() Obtain <p>binlog retention time</p>
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) Set <p>binlog retention time</p>
 * @method string getBinlogCrossRegionsEnable() Obtain <p>Whether cross-region backup of binlog is enabled</p>
 * @method void setBinlogCrossRegionsEnable(string $BinlogCrossRegionsEnable) Set <p>Whether cross-region backup of binlog is enabled</p>
 * @method array getBinlogCrossRegions() Obtain <p>binlog cross-region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBinlogCrossRegions(array $BinlogCrossRegions) Set <p>binlog cross-region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBinlogCrossRegionSaveDays() Obtain <p>Cross-region backup retention period</p><p>Unit: Day</p>
 * @method void setBinlogCrossRegionSaveDays(integer $BinlogCrossRegionSaveDays) Set <p>Cross-region backup retention period</p><p>Unit: Day</p>
 * @method array getAutoCopyVaults() Obtain <p>Safe info</p>
 * @method void setAutoCopyVaults(array $AutoCopyVaults) Set <p>Safe info</p>
 */
class BinlogConfigInfo extends AbstractModel
{
    /**
     * @var integer <p>binlog retention time</p>
     */
    public $BinlogSaveDays;

    /**
     * @var string <p>Whether cross-region backup of binlog is enabled</p>
     */
    public $BinlogCrossRegionsEnable;

    /**
     * @var array <p>binlog cross-region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BinlogCrossRegions;

    /**
     * @var integer <p>Cross-region backup retention period</p><p>Unit: Day</p>
     */
    public $BinlogCrossRegionSaveDays;

    /**
     * @var array <p>Safe info</p>
     */
    public $AutoCopyVaults;

    /**
     * @param integer $BinlogSaveDays <p>binlog retention time</p>
     * @param string $BinlogCrossRegionsEnable <p>Whether cross-region backup of binlog is enabled</p>
     * @param array $BinlogCrossRegions <p>binlog cross-region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BinlogCrossRegionSaveDays <p>Cross-region backup retention period</p><p>Unit: Day</p>
     * @param array $AutoCopyVaults <p>Safe info</p>
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
        if (array_key_exists("BinlogSaveDays",$param) and $param["BinlogSaveDays"] !== null) {
            $this->BinlogSaveDays = $param["BinlogSaveDays"];
        }

        if (array_key_exists("BinlogCrossRegionsEnable",$param) and $param["BinlogCrossRegionsEnable"] !== null) {
            $this->BinlogCrossRegionsEnable = $param["BinlogCrossRegionsEnable"];
        }

        if (array_key_exists("BinlogCrossRegions",$param) and $param["BinlogCrossRegions"] !== null) {
            $this->BinlogCrossRegions = $param["BinlogCrossRegions"];
        }

        if (array_key_exists("BinlogCrossRegionSaveDays",$param) and $param["BinlogCrossRegionSaveDays"] !== null) {
            $this->BinlogCrossRegionSaveDays = $param["BinlogCrossRegionSaveDays"];
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
