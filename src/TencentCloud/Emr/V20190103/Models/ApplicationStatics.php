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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Yarn application statistics
 *
 * @method string getQueue() Obtain Queue name
 * @method void setQueue(string $Queue) Set Queue name
 * @method string getUser() Obtain Username
 * @method void setUser(string $User) Set Username
 * @method string getApplicationType() Obtain Application type
 * @method void setApplicationType(string $ApplicationType) Set Application type
 * @method integer getSumMemorySeconds() Obtain `SumMemorySeconds` meaning
 * @method void setSumMemorySeconds(integer $SumMemorySeconds) Set `SumMemorySeconds` meaning
 * @method integer getSumVCoreSeconds() Obtain 
 * @method void setSumVCoreSeconds(integer $SumVCoreSeconds) Set 
 * @method string getSumHDFSBytesWritten() Obtain SumHDFSBytesWritten (with unit)
 * @method void setSumHDFSBytesWritten(string $SumHDFSBytesWritten) Set SumHDFSBytesWritten (with unit)
 * @method string getSumHDFSBytesRead() Obtain SumHDFSBytesRead (with unit)
 * @method void setSumHDFSBytesRead(string $SumHDFSBytesRead) Set SumHDFSBytesRead (with unit)
 * @method integer getCountApps() Obtain Application count
 * @method void setCountApps(integer $CountApps) Set Application count
 */
class ApplicationStatics extends AbstractModel
{
    /**
     * @var string Queue name
     */
    public $Queue;

    /**
     * @var string Username
     */
    public $User;

    /**
     * @var string Application type
     */
    public $ApplicationType;

    /**
     * @var integer `SumMemorySeconds` meaning
     */
    public $SumMemorySeconds;

    /**
     * @var integer 
     */
    public $SumVCoreSeconds;

    /**
     * @var string SumHDFSBytesWritten (with unit)
     */
    public $SumHDFSBytesWritten;

    /**
     * @var string SumHDFSBytesRead (with unit)
     */
    public $SumHDFSBytesRead;

    /**
     * @var integer Application count
     */
    public $CountApps;

    /**
     * @param string $Queue Queue name
     * @param string $User Username
     * @param string $ApplicationType Application type
     * @param integer $SumMemorySeconds `SumMemorySeconds` meaning
     * @param integer $SumVCoreSeconds 
     * @param string $SumHDFSBytesWritten SumHDFSBytesWritten (with unit)
     * @param string $SumHDFSBytesRead SumHDFSBytesRead (with unit)
     * @param integer $CountApps Application count
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
