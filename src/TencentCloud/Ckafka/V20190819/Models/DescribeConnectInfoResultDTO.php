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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic connection information
 *
 * @method string getIpAddr() Obtain IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpAddr(string $IpAddr) Set IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTime() Obtain Connection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTime(string $Time) Set Connection time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsUnSupportVersion() Obtain Whether it is a supported version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsUnSupportVersion(boolean $IsUnSupportVersion) Set Whether it is a supported version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeConnectInfoResultDTO extends AbstractModel
{
    /**
     * @var string IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpAddr;

    /**
     * @var string Connection time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Time;

    /**
     * @var boolean Whether it is a supported version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsUnSupportVersion;

    /**
     * @param string $IpAddr IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Time Connection time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsUnSupportVersion Whether it is a supported version
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("IpAddr",$param) and $param["IpAddr"] !== null) {
            $this->IpAddr = $param["IpAddr"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("IsUnSupportVersion",$param) and $param["IsUnSupportVersion"] !== null) {
            $this->IsUnSupportVersion = $param["IsUnSupportVersion"];
        }
    }
}
