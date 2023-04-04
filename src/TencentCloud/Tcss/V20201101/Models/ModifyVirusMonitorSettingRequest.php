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
 * ModifyVirusMonitorSetting request structure.
 *
 * @method boolean getEnableScan() Obtain Whether to enable scheduled scan
 * @method void setEnableScan(boolean $EnableScan) Set Whether to enable scheduled scan
 * @method boolean getScanPathAll() Obtain Scan all paths
 * @method void setScanPathAll(boolean $ScanPathAll) Set Scan all paths
 * @method integer getScanPathType() Obtain Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following; the scope cannot be greater than `1`).
 * @method void setScanPathType(integer $ScanPathType) Set Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following; the scope cannot be greater than `1`).
 * @method array getScanPath() Obtain Specified path to be excluded or scanned
 * @method void setScanPath(array $ScanPath) Set Specified path to be excluded or scanned
 * @method string getScanPathMode() Obtain Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path

 * @method void setScanPathMode(string $ScanPathMode) Set Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path
 */
class ModifyVirusMonitorSettingRequest extends AbstractModel
{
    /**
     * @var boolean Whether to enable scheduled scan
     */
    public $EnableScan;

    /**
     * @var boolean Scan all paths
     */
    public $ScanPathAll;

    /**
     * @var integer Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following; the scope cannot be greater than `1`).
     */
    public $ScanPathType;

    /**
     * @var array Specified path to be excluded or scanned
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
     * @param boolean $ScanPathAll Scan all paths
     * @param integer $ScanPathType Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following; the scope cannot be greater than `1`).
     * @param array $ScanPath Specified path to be excluded or scanned
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

        if (array_key_exists("ScanPathAll",$param) and $param["ScanPathAll"] !== null) {
            $this->ScanPathAll = $param["ScanPathAll"];
        }

        if (array_key_exists("ScanPathType",$param) and $param["ScanPathType"] !== null) {
            $this->ScanPathType = $param["ScanPathType"];
        }

        if (array_key_exists("ScanPath",$param) and $param["ScanPath"] !== null) {
            $this->ScanPath = $param["ScanPath"];
        }

        if (array_key_exists("ScanPathMode",$param) and $param["ScanPathMode"] !== null) {
            $this->ScanPathMode = $param["ScanPathMode"];
        }
    }
}
