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
 * CreateVirusScanTask request structure.
 *
 * @method boolean getScanPathAll() Obtain Whether to scan all paths
 * @method void setScanPathAll(boolean $ScanPathAll) Set Whether to scan all paths
 * @method integer getScanRangeType() Obtain Scanning scope. Valid values: `0` (container); `1` (server).
 * @method void setScanRangeType(integer $ScanRangeType) Set Scanning scope. Valid values: `0` (container); `1` (server).
 * @method boolean getScanRangeAll() Obtain Valid values: `true` (all); `false` (specified).
 * @method void setScanRangeAll(boolean $ScanRangeAll) Set Valid values: `true` (all); `false` (specified).
 * @method integer getTimeout() Obtain Timeout period in hours
 * @method void setTimeout(integer $Timeout) Set Timeout period in hours
 * @method integer getScanPathType() Obtain Valid when `ScanPathAll` is `false`. Valid values: `0` (scan the following paths); `1` (scan all paths except the following).
 * @method void setScanPathType(integer $ScanPathType) Set Valid when `ScanPathAll` is `false`. Valid values: `0` (scan the following paths); `1` (scan all paths except the following).
 * @method array getScanIds() Obtain ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
 * @method void setScanIds(array $ScanIds) Set ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
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
class CreateVirusScanTaskRequest extends AbstractModel
{
    /**
     * @var boolean Whether to scan all paths
     */
    public $ScanPathAll;

    /**
     * @var integer Scanning scope. Valid values: `0` (container); `1` (server).
     */
    public $ScanRangeType;

    /**
     * @var boolean Valid values: `true` (all); `false` (specified).
     */
    public $ScanRangeAll;

    /**
     * @var integer Timeout period in hours
     */
    public $Timeout;

    /**
     * @var integer Valid when `ScanPathAll` is `false`. Valid values: `0` (scan the following paths); `1` (scan all paths except the following).
     */
    public $ScanPathType;

    /**
     * @var array ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
     */
    public $ScanIds;

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
     * @param boolean $ScanPathAll Whether to scan all paths
     * @param integer $ScanRangeType Scanning scope. Valid values: `0` (container); `1` (server).
     * @param boolean $ScanRangeAll Valid values: `true` (all); `false` (specified).
     * @param integer $Timeout Timeout period in hours
     * @param integer $ScanPathType Valid when `ScanPathAll` is `false`. Valid values: `0` (scan the following paths); `1` (scan all paths except the following).
     * @param array $ScanIds ID of the specified container or server to be scanned, which is based on `ScanRangeType`.
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
        if (array_key_exists("ScanPathAll",$param) and $param["ScanPathAll"] !== null) {
            $this->ScanPathAll = $param["ScanPathAll"];
        }

        if (array_key_exists("ScanRangeType",$param) and $param["ScanRangeType"] !== null) {
            $this->ScanRangeType = $param["ScanRangeType"];
        }

        if (array_key_exists("ScanRangeAll",$param) and $param["ScanRangeAll"] !== null) {
            $this->ScanRangeAll = $param["ScanRangeAll"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ScanPathType",$param) and $param["ScanPathType"] !== null) {
            $this->ScanPathType = $param["ScanPathType"];
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
