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
 * Specifies the binlog configuration message.
 *
 * @method integer getBinlogSaveDays() Obtain Specifies the retention time of binlogs.
 * @method void setBinlogSaveDays(integer $BinlogSaveDays) Set Specifies the retention time of binlogs.
 * @method string getBinlogCrossRegionsEnable() Obtain Whether binlog cross-region backup is enabled.
 * @method void setBinlogCrossRegionsEnable(string $BinlogCrossRegionsEnable) Set Whether binlog cross-region backup is enabled.
 * @method array getBinlogCrossRegions() Obtain binlog in a different region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBinlogCrossRegions(array $BinlogCrossRegions) Set binlog in a different region.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BinlogConfigInfo extends AbstractModel
{
    /**
     * @var integer Specifies the retention time of binlogs.
     */
    public $BinlogSaveDays;

    /**
     * @var string Whether binlog cross-region backup is enabled.
     */
    public $BinlogCrossRegionsEnable;

    /**
     * @var array binlog in a different region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BinlogCrossRegions;

    /**
     * @param integer $BinlogSaveDays Specifies the retention time of binlogs.
     * @param string $BinlogCrossRegionsEnable Whether binlog cross-region backup is enabled.
     * @param array $BinlogCrossRegions binlog in a different region.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
