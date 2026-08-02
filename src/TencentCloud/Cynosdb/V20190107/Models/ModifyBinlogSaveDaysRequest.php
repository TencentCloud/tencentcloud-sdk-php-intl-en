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
 * ModifyBinlogSaveDays request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getBinlogSaveDays() Obtain <p>Binlog retention days</p>
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) Set <p>Binlog retention days</p>
 * @method integer getBinlogCrossRegionSaveDays() Obtain <p>Cross-region backup retention period</p><p>Unit: Day</p>
 * @method void setBinlogCrossRegionSaveDays(integer $BinlogCrossRegionSaveDays) Set <p>Cross-region backup retention period</p><p>Unit: Day</p>
 */
class ModifyBinlogSaveDaysRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Binlog retention days</p>
     */
    public $BinlogSaveDays;

    /**
     * @var integer <p>Cross-region backup retention period</p><p>Unit: Day</p>
     */
    public $BinlogCrossRegionSaveDays;

    /**
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $BinlogSaveDays <p>Binlog retention days</p>
     * @param integer $BinlogCrossRegionSaveDays <p>Cross-region backup retention period</p><p>Unit: Day</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("BinlogSaveDays",$param) and $param["BinlogSaveDays"] !== null) {
            $this->BinlogSaveDays = $param["BinlogSaveDays"];
        }

        if (array_key_exists("BinlogCrossRegionSaveDays",$param) and $param["BinlogCrossRegionSaveDays"] !== null) {
            $this->BinlogCrossRegionSaveDays = $param["BinlogCrossRegionSaveDays"];
        }
    }
}
