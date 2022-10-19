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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File system snapshot statistics
 *
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method integer getSnapshotNumber() Obtain Total number of snapshots
 * @method void setSnapshotNumber(integer $SnapshotNumber) Set Total number of snapshots
 * @method integer getSnapshotSize() Obtain Total snapshot size
 * @method void setSnapshotSize(integer $SnapshotSize) Set Total snapshot size
 */
class SnapshotStatistics extends AbstractModel
{
    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var integer Total number of snapshots
     */
    public $SnapshotNumber;

    /**
     * @var integer Total snapshot size
     */
    public $SnapshotSize;

    /**
     * @param string $Region Region
     * @param integer $SnapshotNumber Total number of snapshots
     * @param integer $SnapshotSize Total snapshot size
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SnapshotNumber",$param) and $param["SnapshotNumber"] !== null) {
            $this->SnapshotNumber = $param["SnapshotNumber"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }
    }
}
