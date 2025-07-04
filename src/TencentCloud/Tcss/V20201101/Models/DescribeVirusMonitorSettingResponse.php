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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirusMonitorSetting response structure.
 *
 * @method boolean getEnableScan() Obtain Whether to enable real-time monitoring
 * @method void setEnableScan(boolean $EnableScan) Set Whether to enable real-time monitoring
 * @method boolean getScanPathAll() Obtain Scan all paths
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanPathAll(boolean $ScanPathAll) Set Scan all paths
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScanPathType() Obtain Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanPathType(integer $ScanPathType) Set Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getScanPath() Obtain Specified path to be excluded or scanned
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanPath(array $ScanPath) Set Specified path to be excluded or scanned
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanPathMode() Obtain Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path

 * @method void setScanPathMode(string $ScanPathMode) Set Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path

 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeVirusMonitorSettingResponse extends AbstractModel
{
    /**
     * @var boolean Whether to enable real-time monitoring
     */
    public $EnableScan;

    /**
     * @var boolean Scan all paths
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanPathAll;

    /**
     * @var integer Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanPathType;

    /**
     * @var array Specified path to be excluded or scanned
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $EnableScan Whether to enable real-time monitoring
     * @param boolean $ScanPathAll Scan all paths
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ScanPathType Valid when `ScanPathAll` is `true`. Valid values of `ScanPathAll`: `0` (scan the following paths); `1` (scan all paths except the following).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ScanPath Specified path to be excluded or scanned
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanPathMode Path scanning mode: 
`SCAN_PATH_ALL`: Scan all paths
`SCAN_PATH_DEFAULT`: Scan the default path
`SCAN_PATH_USER_DEFINE`: Scan the custom path

     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
