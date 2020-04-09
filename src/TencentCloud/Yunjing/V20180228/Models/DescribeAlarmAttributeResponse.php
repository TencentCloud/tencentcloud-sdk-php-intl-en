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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmAttribute response structure.
 *
 * @method string getOffline() Obtain CWP deactivation alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method void setOffline(string $Offline) Set CWP deactivation alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method string getMalware() Obtain Trojan discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method void setMalware(string $Malware) Set Trojan discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method string getNonlocalLogin() Obtain Unusual login location discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method void setNonlocalLogin(string $NonlocalLogin) Set Unusual login location discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method string getCrackSuccess() Obtain Brute force attack success alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method void setCrackSuccess(string $CrackSuccess) Set Brute force attack success alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeAlarmAttributeResponse extends AbstractModel
{
    /**
     * @var string CWP deactivation alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     */
    public $Offline;

    /**
     * @var string Trojan discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     */
    public $Malware;

    /**
     * @var string Unusual login location discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     */
    public $NonlocalLogin;

    /**
     * @var string Brute force attack success alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     */
    public $CrackSuccess;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Offline CWP deactivation alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     * @param string $Malware Trojan discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     * @param string $NonlocalLogin Unusual login location discovery alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
     * @param string $CrackSuccess Brute force attack success alarm status:
<li>OPEN: alarm enabled</li>
<li>CLOSE: alarm disabled</li>
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
        if (array_key_exists("Offline",$param) and $param["Offline"] !== null) {
            $this->Offline = $param["Offline"];
        }

        if (array_key_exists("Malware",$param) and $param["Malware"] !== null) {
            $this->Malware = $param["Malware"];
        }

        if (array_key_exists("NonlocalLogin",$param) and $param["NonlocalLogin"] !== null) {
            $this->NonlocalLogin = $param["NonlocalLogin"];
        }

        if (array_key_exists("CrackSuccess",$param) and $param["CrackSuccess"] !== null) {
            $this->CrackSuccess = $param["CrackSuccess"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
