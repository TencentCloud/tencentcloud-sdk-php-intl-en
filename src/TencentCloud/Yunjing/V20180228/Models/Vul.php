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
 * Vulnerability list data
 *
 * @method integer getVulId() Obtain Vulnerability category ID
 * @method void setVulId(integer $VulId) Set Vulnerability category ID
 * @method string getVulName() Obtain Vulnerability name
 * @method void setVulName(string $VulName) Set Vulnerability name
 * @method string getVulLevel() Obtain Vulnerability severity level:
HIGH: high
MIDDLE: medium
LOW: low
NOTICE: notice
 * @method void setVulLevel(string $VulLevel) Set Vulnerability severity level:
HIGH: high
MIDDLE: medium
LOW: low
NOTICE: notice
 * @method string getLastScanTime() Obtain Last scanned time
 * @method void setLastScanTime(string $LastScanTime) Set Last scanned time
 * @method integer getImpactedHostNum() Obtain Number of affected servers
 * @method void setImpactedHostNum(integer $ImpactedHostNum) Set Number of affected servers
 * @method string getVulStatus() Obtain Vulnerability status
* UN_OPERATED: to be processed
* FIXED: fixed
 * @method void setVulStatus(string $VulStatus) Set Vulnerability status
* UN_OPERATED: to be processed
* FIXED: fixed
 */
class Vul extends AbstractModel
{
    /**
     * @var integer Vulnerability category ID
     */
    public $VulId;

    /**
     * @var string Vulnerability name
     */
    public $VulName;

    /**
     * @var string Vulnerability severity level:
HIGH: high
MIDDLE: medium
LOW: low
NOTICE: notice
     */
    public $VulLevel;

    /**
     * @var string Last scanned time
     */
    public $LastScanTime;

    /**
     * @var integer Number of affected servers
     */
    public $ImpactedHostNum;

    /**
     * @var string Vulnerability status
* UN_OPERATED: to be processed
* FIXED: fixed
     */
    public $VulStatus;

    /**
     * @param integer $VulId Vulnerability category ID
     * @param string $VulName Vulnerability name
     * @param string $VulLevel Vulnerability severity level:
HIGH: high
MIDDLE: medium
LOW: low
NOTICE: notice
     * @param string $LastScanTime Last scanned time
     * @param integer $ImpactedHostNum Number of affected servers
     * @param string $VulStatus Vulnerability status
* UN_OPERATED: to be processed
* FIXED: fixed
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("ImpactedHostNum",$param) and $param["ImpactedHostNum"] !== null) {
            $this->ImpactedHostNum = $param["ImpactedHostNum"];
        }

        if (array_key_exists("VulStatus",$param) and $param["VulStatus"] !== null) {
            $this->VulStatus = $param["VulStatus"];
        }
    }
}
