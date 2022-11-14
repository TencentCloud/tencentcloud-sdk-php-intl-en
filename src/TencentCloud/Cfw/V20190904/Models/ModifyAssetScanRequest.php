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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAssetScan request structure.
 *
 * @method integer getScanRange() Obtain Scan range. 1: port; 2: port + vulnerability scan
 * @method void setScanRange(integer $ScanRange) Set Scan range. 1: port; 2: port + vulnerability scan
 * @method string getScanDeep() Obtain Scan mode: 'heavy', 'medium', 'light'
 * @method void setScanDeep(string $ScanDeep) Set Scan mode: 'heavy', 'medium', 'light'
 * @method integer getRangeType() Obtain Scan type. 1: scan now; 2: periodic scan
 * @method void setRangeType(integer $RangeType) Set Scan type. 1: scan now; 2: periodic scan
 * @method string getScanPeriod() Obtain Scheduled task time, required when RangeType is 2
 * @method void setScanPeriod(string $ScanPeriod) Set Scheduled task time, required when RangeType is 2
 * @method array getScanFilterIp() Obtain Scans this field now and passes the filtered IPs
 * @method void setScanFilterIp(array $ScanFilterIp) Set Scans this field now and passes the filtered IPs
 * @method integer getScanType() Obtain 1: all; 2: single
 * @method void setScanType(integer $ScanType) Set 1: all; 2: single
 */
class ModifyAssetScanRequest extends AbstractModel
{
    /**
     * @var integer Scan range. 1: port; 2: port + vulnerability scan
     */
    public $ScanRange;

    /**
     * @var string Scan mode: 'heavy', 'medium', 'light'
     */
    public $ScanDeep;

    /**
     * @var integer Scan type. 1: scan now; 2: periodic scan
     */
    public $RangeType;

    /**
     * @var string Scheduled task time, required when RangeType is 2
     */
    public $ScanPeriod;

    /**
     * @var array Scans this field now and passes the filtered IPs
     */
    public $ScanFilterIp;

    /**
     * @var integer 1: all; 2: single
     */
    public $ScanType;

    /**
     * @param integer $ScanRange Scan range. 1: port; 2: port + vulnerability scan
     * @param string $ScanDeep Scan mode: 'heavy', 'medium', 'light'
     * @param integer $RangeType Scan type. 1: scan now; 2: periodic scan
     * @param string $ScanPeriod Scheduled task time, required when RangeType is 2
     * @param array $ScanFilterIp Scans this field now and passes the filtered IPs
     * @param integer $ScanType 1: all; 2: single
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
        if (array_key_exists("ScanRange",$param) and $param["ScanRange"] !== null) {
            $this->ScanRange = $param["ScanRange"];
        }

        if (array_key_exists("ScanDeep",$param) and $param["ScanDeep"] !== null) {
            $this->ScanDeep = $param["ScanDeep"];
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("ScanPeriod",$param) and $param["ScanPeriod"] !== null) {
            $this->ScanPeriod = $param["ScanPeriod"];
        }

        if (array_key_exists("ScanFilterIp",$param) and $param["ScanFilterIp"] !== null) {
            $this->ScanFilterIp = $param["ScanFilterIp"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }
    }
}
