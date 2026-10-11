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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Disk.
 *
 * @method string getDiskId() Obtain <p>Disk ID.</p>
 * @method void setDiskId(string $DiskId) Set <p>Disk ID.</p>
 * @method string getMountDir() Obtain <p>Mounted directory.</p>
 * @method void setMountDir(string $MountDir) Set <p>Mounted directory.</p>
 * @method string getDeviceName() Obtain <p>Device path.</p>
 * @method void setDeviceName(string $DeviceName) Set <p>Device path.</p>
 * @method integer getCheckType() Obtain <p>Exception type.</p>
 * @method void setCheckType(integer $CheckType) Set <p>Exception type.</p>
 * @method integer getSeverity() Obtain <p>Priority.</p>
 * @method void setSeverity(integer $Severity) Set <p>Priority.</p>
 * @method integer getState() Obtain <p>Status.</p>
 * @method void setState(integer $State) Set <p>Status.</p>
 * @method string getDetectSource() Obtain <p>Probe source.</p>
 * @method void setDetectSource(string $DetectSource) Set <p>Probe source.</p>
 * @method string getFirstDetectTime() Obtain <p>First probe time.</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) Set <p>First probe time.</p>
 * @method string getLastDetectTime() Obtain <p>Latest probe time.</p>
 * @method void setLastDetectTime(string $LastDetectTime) Set <p>Latest probe time.</p>
 * @method string getDetectDetail() Obtain <p>Probe information.</p>
 * @method void setDetectDetail(string $DetectDetail) Set <p>Probe information.</p>
 */
class DiskHealthIssue extends AbstractModel
{
    /**
     * @var string <p>Disk ID.</p>
     */
    public $DiskId;

    /**
     * @var string <p>Mounted directory.</p>
     */
    public $MountDir;

    /**
     * @var string <p>Device path.</p>
     */
    public $DeviceName;

    /**
     * @var integer <p>Exception type.</p>
     */
    public $CheckType;

    /**
     * @var integer <p>Priority.</p>
     */
    public $Severity;

    /**
     * @var integer <p>Status.</p>
     */
    public $State;

    /**
     * @var string <p>Probe source.</p>
     */
    public $DetectSource;

    /**
     * @var string <p>First probe time.</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>Latest probe time.</p>
     */
    public $LastDetectTime;

    /**
     * @var string <p>Probe information.</p>
     */
    public $DetectDetail;

    /**
     * @param string $DiskId <p>Disk ID.</p>
     * @param string $MountDir <p>Mounted directory.</p>
     * @param string $DeviceName <p>Device path.</p>
     * @param integer $CheckType <p>Exception type.</p>
     * @param integer $Severity <p>Priority.</p>
     * @param integer $State <p>Status.</p>
     * @param string $DetectSource <p>Probe source.</p>
     * @param string $FirstDetectTime <p>First probe time.</p>
     * @param string $LastDetectTime <p>Latest probe time.</p>
     * @param string $DetectDetail <p>Probe information.</p>
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
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("MountDir",$param) and $param["MountDir"] !== null) {
            $this->MountDir = $param["MountDir"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DetectSource",$param) and $param["DetectSource"] !== null) {
            $this->DetectSource = $param["DetectSource"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LastDetectTime",$param) and $param["LastDetectTime"] !== null) {
            $this->LastDetectTime = $param["LastDetectTime"];
        }

        if (array_key_exists("DetectDetail",$param) and $param["DetectDetail"] !== null) {
            $this->DetectDetail = $param["DetectDetail"];
        }
    }
}
