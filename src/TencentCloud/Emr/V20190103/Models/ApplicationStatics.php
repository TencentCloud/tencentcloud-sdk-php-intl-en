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
 * YARN application statistics information.
 *
 * @method string getQueue() Obtain Queue name.
 * @method void setQueue(string $Queue) Set Queue name.
 * @method string getUser() Obtain Username.
 * @method void setUser(string $User) Set Username.
 * @method string getApplicationType() Obtain Job type.
 * @method void setApplicationType(string $ApplicationType) Set Job type.
 * @method integer getSumMemorySeconds() Obtain Meaning of SumMemorySeconds.
 * @method void setSumMemorySeconds(integer $SumMemorySeconds) Set Meaning of SumMemorySeconds.
 * @method integer getSumVCoreSeconds() Obtain Meaning of SumVCoreSeconds.
 * @method void setSumVCoreSeconds(integer $SumVCoreSeconds) Set Meaning of SumVCoreSeconds.
 * @method string getSumHDFSBytesWritten() Obtain SumHDFSBytesWritten (with the unit).
 * @method void setSumHDFSBytesWritten(string $SumHDFSBytesWritten) Set SumHDFSBytesWritten (with the unit).
 * @method string getSumHDFSBytesRead() Obtain SumHDFSBytesRead (with the unit).
 * @method void setSumHDFSBytesRead(string $SumHDFSBytesRead) Set SumHDFSBytesRead (with the unit).
 * @method integer getCountApps() Obtain Number of jobs.
 * @method void setCountApps(integer $CountApps) Set Number of jobs.
 */
class ApplicationStatics extends AbstractModel
{
    /**
     * @var string Queue name.
     */
    public $Queue;

    /**
     * @var string Username.
     */
    public $User;

    /**
     * @var string Job type.
     */
    public $ApplicationType;

    /**
     * @var integer Meaning of SumMemorySeconds.
     */
    public $SumMemorySeconds;

    /**
     * @var integer Meaning of SumVCoreSeconds.
     */
    public $SumVCoreSeconds;

    /**
     * @var string SumHDFSBytesWritten (with the unit).
     */
    public $SumHDFSBytesWritten;

    /**
     * @var string SumHDFSBytesRead (with the unit).
     */
    public $SumHDFSBytesRead;

    /**
     * @var integer Number of jobs.
     */
    public $CountApps;

    /**
     * @param string $Queue Queue name.
     * @param string $User Username.
     * @param string $ApplicationType Job type.
     * @param integer $SumMemorySeconds Meaning of SumMemorySeconds.
     * @param integer $SumVCoreSeconds Meaning of SumVCoreSeconds.
     * @param string $SumHDFSBytesWritten SumHDFSBytesWritten (with the unit).
     * @param string $SumHDFSBytesRead SumHDFSBytesRead (with the unit).
     * @param integer $CountApps Number of jobs.
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
        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("SumMemorySeconds",$param) and $param["SumMemorySeconds"] !== null) {
            $this->SumMemorySeconds = $param["SumMemorySeconds"];
        }

        if (array_key_exists("SumVCoreSeconds",$param) and $param["SumVCoreSeconds"] !== null) {
            $this->SumVCoreSeconds = $param["SumVCoreSeconds"];
        }

        if (array_key_exists("SumHDFSBytesWritten",$param) and $param["SumHDFSBytesWritten"] !== null) {
            $this->SumHDFSBytesWritten = $param["SumHDFSBytesWritten"];
        }

        if (array_key_exists("SumHDFSBytesRead",$param) and $param["SumHDFSBytesRead"] !== null) {
            $this->SumHDFSBytesRead = $param["SumHDFSBytesRead"];
        }

        if (array_key_exists("CountApps",$param) and $param["CountApps"] !== null) {
            $this->CountApps = $param["CountApps"];
        }
    }
}
