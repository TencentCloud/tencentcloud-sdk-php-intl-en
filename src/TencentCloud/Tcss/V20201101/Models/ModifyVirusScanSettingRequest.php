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
 * ModifyVirusScanSetting request structure.
 *
 * @method boolean getEnableScan() Obtain Whether to enable scheduled scan
 * @method void setEnableScan(boolean $EnableScan) Set Whether to enable scheduled scan
 * @method integer getCycle() Obtain Check cycle in days. Valid values: `1`, `3`, `7`.
 * @method void setCycle(integer $Cycle) Set Check cycle in days. Valid values: `1`, `3`, `7`.
 * @method string getBeginScanAt() Obtain Scan start time
 * @method void setBeginScanAt(string $BeginScanAt) Set Scan start time
 * @method boolean getScanPathAll() Obtain Scan all paths. Valid values: `true` (all); `false` (specified).
 * @method void setScanPathAll(boolean $ScanPathAll) Set Scan all paths. Valid values: `true` (all); `false` (specified).
 * @method integer getScanPathType() Obtain Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
 * @method void setScanPathType(integer $ScanPathType) Set Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
 * @method integer getTimeout() Obtain Timeout period in hours. Value range: 5-24.
 * @method void setTimeout(integer $Timeout) Set Timeout period in hours. Value range: 5-24.
 * @method integer getScanRangeType() Obtain Scanning scope. Valid values: `0` (container); `1` (server).
 * @method void setScanRangeType(integer $ScanRangeType) Set Scanning scope. Valid values: `0` (container); `1` (server).
 * @method boolean getScanRangeAll() Obtain Valid values: `true` (all); `false` (specified).
 * @method void setScanRangeAll(boolean $ScanRangeAll) Set Valid values: `true` (all); `false` (specified).
 * @method array getScanIds() Obtain ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
 * @method void setScanIds(array $ScanIds) Set ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
 * @method array getScanPath() Obtain Scanned path
 * @method void setScanPath(array $ScanPath) Set Scanned path
 * @method string getScanPathMode() Obtain Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path

 * @method void setScanPathMode(string $ScanPathMode) Set Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path
 */
class ModifyVirusScanSettingRequest extends AbstractModel
{
    /**
     * @var boolean Whether to enable scheduled scan
     */
    public $EnableScan;

    /**
     * @var integer Check cycle in days. Valid values: `1`, `3`, `7`.
     */
    public $Cycle;

    /**
     * @var string Scan start time
     */
    public $BeginScanAt;

    /**
     * @var boolean Scan all paths. Valid values: `true` (all); `false` (specified).
     */
    public $ScanPathAll;

    /**
     * @var integer Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
     */
    public $ScanPathType;

    /**
     * @var integer Timeout period in hours. Value range: 5-24.
     */
    public $Timeout;

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
     * @var array Scanned path
     */
    public $ScanPath;

    /**
     * @var string Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path

     */
    public $ScanPathMode;

    /**
     * @param boolean $EnableScan Whether to enable scheduled scan
     * @param integer $Cycle Check cycle in days. Valid values: `1`, `3`, `7`.
     * @param string $BeginScanAt Scan start time
     * @param boolean $ScanPathAll Scan all paths. Valid values: `true` (all); `false` (specified).
     * @param integer $ScanPathType Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
     * @param integer $Timeout Timeout period in hours. Value range: 5-24.
     * @param integer $ScanRangeType Scanning scope. Valid values: `0` (container); `1` (server).
     * @param boolean $ScanRangeAll Valid values: `true` (all); `false` (specified).
     * @param array $ScanIds ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
     * @param array $ScanPath Scanned path
     * @param string $ScanPathMode Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path
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
        if (array_key_exists("EnableScan",$param) and $param["EnableScan"] !== null) {
            $this->EnableScan = $param["EnableScan"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("BeginScanAt",$param) and $param["BeginScanAt"] !== null) {
            $this->BeginScanAt = $param["BeginScanAt"];
        }

        if (array_key_exists("ScanPathAll",$param) and $param["ScanPathAll"] !== null) {
            $this->ScanPathAll = $param["ScanPathAll"];
        }

        if (array_key_exists("ScanPathType",$param) and $param["ScanPathType"] !== null) {
            $this->ScanPathType = $param["ScanPathType"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
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

        if (array_key_exists("ScanPath",$param) and $param["ScanPath"] !== null) {
            $this->ScanPath = $param["ScanPath"];
        }

        if (array_key_exists("ScanPathMode",$param) and $param["ScanPathMode"] !== null) {
            $this->ScanPathMode = $param["ScanPathMode"];
        }
    }
}
