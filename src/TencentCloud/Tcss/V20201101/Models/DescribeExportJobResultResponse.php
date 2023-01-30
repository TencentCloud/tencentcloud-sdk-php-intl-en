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
 * DescribeExportJobResult response structure.
 *
 * @method string getExportStatus() Obtain Export status. Valid values: `SUCCESS`, `FAILURE`, `RUNNING`.
 * @method void setExportStatus(string $ExportStatus) Set Export status. Valid values: `SUCCESS`, `FAILURE`, `RUNNING`.
 * @method string getDownloadURL() Obtain Download URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDownloadURL(string $DownloadURL) Set Download URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getExportProgress() Obtain Export progress when `ExportStatus` is `RUNNING`. Value range: Floating points between `0` and `100`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExportProgress(float $ExportProgress) Set Export progress when `ExportStatus` is `RUNNING`. Value range: Floating points between `0` and `100`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFailureMsg() Obtain Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailureMsg(string $FailureMsg) Set Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeExportJobResultResponse extends AbstractModel
{
    /**
     * @var string Export status. Valid values: `SUCCESS`, `FAILURE`, `RUNNING`.
     */
    public $ExportStatus;

    /**
     * @var string Download URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DownloadURL;

    /**
     * @var float Export progress when `ExportStatus` is `RUNNING`. Value range: Floating points between `0` and `100`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExportProgress;

    /**
     * @var string Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailureMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $ExportStatus Export status. Valid values: `SUCCESS`, `FAILURE`, `RUNNING`.
     * @param string $DownloadURL Download URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $ExportProgress Export progress when `ExportStatus` is `RUNNING`. Value range: Floating points between `0` and `100`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FailureMsg Failure cause
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ExportStatus",$param) and $param["ExportStatus"] !== null) {
            $this->ExportStatus = $param["ExportStatus"];
        }

        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("ExportProgress",$param) and $param["ExportProgress"] !== null) {
            $this->ExportProgress = $param["ExportProgress"];
        }

        if (array_key_exists("FailureMsg",$param) and $param["FailureMsg"] !== null) {
            $this->FailureMsg = $param["FailureMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
