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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanVul request structure.
 *
 * @method string getVulLevels() Obtain Whether to count only critical vulnerabilities. 1: only critical vulnerabilities; 0: all vulnerabilities.
 * @method void setVulLevels(string $VulLevels) Set Whether to count only critical vulnerabilities. 1: only critical vulnerabilities; 0: all vulnerabilities.
 * @method integer getHostType() Obtain Server type. 1: Pro Edition server; 2: selected server.
 * @method void setHostType(integer $HostType) Set Server type. 1: Pro Edition server; 2: selected server.
 * @method string getVulCategories() Obtain Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability (separate multiple values by commas).
 * @method void setVulCategories(string $VulCategories) Set Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability (separate multiple values by commas).
 * @method array getQuuidList() Obtain String array of host QUUIDs. This parameter is effective for selected servers.
 * @method void setQuuidList(array $QuuidList) Set String array of host QUUIDs. This parameter is effective for selected servers.
 * @method integer getVulEmergency() Obtain Whether it is an emergency vulnerability. 0: no; 1: yes.
 * @method void setVulEmergency(integer $VulEmergency) Set Whether it is an emergency vulnerability. 0: no; 1: yes.
 * @method integer getTimeoutPeriod() Obtain Scan duration, in seconds. Default duration: 3,600 second.
 * @method void setTimeoutPeriod(integer $TimeoutPeriod) Set Scan duration, in seconds. Default duration: 3,600 second.
 * @method array getVulIds() Obtain IDs of vulnerabilities to be scanned
 * @method void setVulIds(array $VulIds) Set IDs of vulnerabilities to be scanned
 * @method integer getScanMethod() Obtain 
 * @method void setScanMethod(integer $ScanMethod) Set 
 */
class ScanVulRequest extends AbstractModel
{
    /**
     * @var string Whether to count only critical vulnerabilities. 1: only critical vulnerabilities; 0: all vulnerabilities.
     */
    public $VulLevels;

    /**
     * @var integer Server type. 1: Pro Edition server; 2: selected server.
     */
    public $HostType;

    /**
     * @var string Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability (separate multiple values by commas).
     */
    public $VulCategories;

    /**
     * @var array String array of host QUUIDs. This parameter is effective for selected servers.
     */
    public $QuuidList;

    /**
     * @var integer Whether it is an emergency vulnerability. 0: no; 1: yes.
     */
    public $VulEmergency;

    /**
     * @var integer Scan duration, in seconds. Default duration: 3,600 second.
     */
    public $TimeoutPeriod;

    /**
     * @var array IDs of vulnerabilities to be scanned
     */
    public $VulIds;

    /**
     * @var integer 
     */
    public $ScanMethod;

    /**
     * @param string $VulLevels Whether to count only critical vulnerabilities. 1: only critical vulnerabilities; 0: all vulnerabilities.
     * @param integer $HostType Server type. 1: Pro Edition server; 2: selected server.
     * @param string $VulCategories Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability (separate multiple values by commas).
     * @param array $QuuidList String array of host QUUIDs. This parameter is effective for selected servers.
     * @param integer $VulEmergency Whether it is an emergency vulnerability. 0: no; 1: yes.
     * @param integer $TimeoutPeriod Scan duration, in seconds. Default duration: 3,600 second.
     * @param array $VulIds IDs of vulnerabilities to be scanned
     * @param integer $ScanMethod 
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
        if (array_key_exists("VulLevels",$param) and $param["VulLevels"] !== null) {
            $this->VulLevels = $param["VulLevels"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("VulCategories",$param) and $param["VulCategories"] !== null) {
            $this->VulCategories = $param["VulCategories"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("VulEmergency",$param) and $param["VulEmergency"] !== null) {
            $this->VulEmergency = $param["VulEmergency"];
        }

        if (array_key_exists("TimeoutPeriod",$param) and $param["TimeoutPeriod"] !== null) {
            $this->TimeoutPeriod = $param["TimeoutPeriod"];
        }

        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("ScanMethod",$param) and $param["ScanMethod"] !== null) {
            $this->ScanMethod = $param["ScanMethod"];
        }
    }
}
