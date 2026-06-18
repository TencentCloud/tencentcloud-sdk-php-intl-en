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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CI/CD access token.
 *
 * @method integer getId() Obtain <p>ID</p>
 * @method void setId(integer $Id) Set <p>ID</p>
 * @method integer getAppId() Obtain <p>appid</p>
 * @method void setAppId(integer $AppId) Set <p>appid</p>
 * @method string getName() Obtain <p>CI/CD name</p>
 * @method void setName(string $Name) Set <p>CI/CD name</p>
 * @method string getToken() Obtain <p>Token for integration</p>
 * @method void setToken(string $Token) Set <p>Token for integration</p>
 * @method integer getPeriod() Obtain <p>Scanning result storage duration</p>
 * @method void setPeriod(integer $Period) Set <p>Scanning result storage duration</p>
 * @method integer getFileCnt() Obtain <p>Scanned file</p>
 * @method void setFileCnt(integer $FileCnt) Set <p>Scanned file</p>
 * @method string getLastScanStatus() Obtain <p>Latest scan status</p>
 * @method void setLastScanStatus(string $LastScanStatus) Set <p>Latest scan status</p>
 * @method string getLastScanTime() Obtain <p>Last scan time.</p>
 * @method void setLastScanTime(string $LastScanTime) Set <p>Last scan time.</p>
 */
class CICDToken extends AbstractModel
{
    /**
     * @var integer <p>ID</p>
     */
    public $Id;

    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>CI/CD name</p>
     */
    public $Name;

    /**
     * @var string <p>Token for integration</p>
     */
    public $Token;

    /**
     * @var integer <p>Scanning result storage duration</p>
     */
    public $Period;

    /**
     * @var integer <p>Scanned file</p>
     */
    public $FileCnt;

    /**
     * @var string <p>Latest scan status</p>
     */
    public $LastScanStatus;

    /**
     * @var string <p>Last scan time.</p>
     */
    public $LastScanTime;

    /**
     * @param integer $Id <p>ID</p>
     * @param integer $AppId <p>appid</p>
     * @param string $Name <p>CI/CD name</p>
     * @param string $Token <p>Token for integration</p>
     * @param integer $Period <p>Scanning result storage duration</p>
     * @param integer $FileCnt <p>Scanned file</p>
     * @param string $LastScanStatus <p>Latest scan status</p>
     * @param string $LastScanTime <p>Last scan time.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("FileCnt",$param) and $param["FileCnt"] !== null) {
            $this->FileCnt = $param["FileCnt"];
        }

        if (array_key_exists("LastScanStatus",$param) and $param["LastScanStatus"] !== null) {
            $this->LastScanStatus = $param["LastScanStatus"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }
    }
}
