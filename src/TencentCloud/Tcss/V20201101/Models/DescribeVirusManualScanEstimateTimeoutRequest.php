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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusManualScanEstimateTimeout request structure.
 *
 * @method integer getScanRangeType() Obtain Scanning scope. Valid values: `0` (container); `1` (server).
 * @method void setScanRangeType(integer $ScanRangeType) Set Scanning scope. Valid values: `0` (container); `1` (server).
 * @method boolean getScanRangeAll() Obtain Valid values: `true` (all); `false` (specified).
 * @method void setScanRangeAll(boolean $ScanRangeAll) Set Valid values: `true` (all); `false` (specified).
 * @method array getScanIds() Obtain ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
 * @method void setScanIds(array $ScanIds) Set ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
 */
class DescribeVirusManualScanEstimateTimeoutRequest extends AbstractModel
{
    /**
     * @var integer Scanning scope. Valid values: `0` (container); `1` (server).
     */
    public $ScanRangeType;

    /**
     * @var boolean Valid values: `true` (all); `false` (specified).
     */
    public $ScanRangeAll;

    /**
     * @var array ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
     */
    public $ScanIds;

    /**
     * @param integer $ScanRangeType Scanning scope. Valid values: `0` (container); `1` (server).
     * @param boolean $ScanRangeAll Valid values: `true` (all); `false` (specified).
     * @param array $ScanIds ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
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
        if (array_key_exists("ScanRangeType",$param) and $param["ScanRangeType"] !== null) {
            $this->ScanRangeType = $param["ScanRangeType"];
        }

        if (array_key_exists("ScanRangeAll",$param) and $param["ScanRangeAll"] !== null) {
            $this->ScanRangeAll = $param["ScanRangeAll"];
        }

        if (array_key_exists("ScanIds",$param) and $param["ScanIds"] !== null) {
            $this->ScanIds = $param["ScanIds"];
        }
    }
}
