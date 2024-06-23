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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log Content Entity
 *
 * @method string getLog() Obtain Log contentNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setLog(string $Log) Set Log contentNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getPkgId() Obtain Log group Id\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setPkgId(string $PkgId) Set Log group Id\nNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getPkgLogId() Obtain Log ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPkgLogId(string $PkgLogId) Set Log ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTime() Obtain TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTime(integer $Time) Set TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getContainerName() Obtain Container Name the Log Belongs To
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setContainerName(string $ContainerName) Set Container Name the Log Belongs To
Note: This field may return null, indicating that no valid value can be obtained.
 */
class LogContentInfo extends AbstractModel
{
    /**
     * @var string Log contentNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Log;

    /**
     * @var string Log group Id\nNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $PkgId;

    /**
     * @var string Log ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PkgLogId;

    /**
     * @var integer TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Time;

    /**
     * @var string Container Name the Log Belongs To
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ContainerName;

    /**
     * @param string $Log Log contentNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $PkgId Log group Id\nNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $PkgLogId Log ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Time TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ContainerName Container Name the Log Belongs To
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }
    }
}
