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
 * DescribeVulCountByDates request structure.
 *
 * @method array getLastDays() Obtain Number of past days for data query. Subtract 1 from the actual number of days and fill in the value.
 * @method void setLastDays(array $LastDays) Set Number of past days for data query. Subtract 1 from the actual number of days and fill in the value.
 * @method integer getVulCategory() Obtain Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.
 * @method void setVulCategory(integer $VulCategory) Set Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.
 * @method string getIfEmergency() Obtain Whether the vulnerabilities are emergency vulnerabilities. yes: yes.
 * @method void setIfEmergency(string $IfEmergency) Set Whether the vulnerabilities are emergency vulnerabilities. yes: yes.
 */
class DescribeVulCountByDatesRequest extends AbstractModel
{
    /**
     * @var array Number of past days for data query. Subtract 1 from the actual number of days and fill in the value.
     */
    public $LastDays;

    /**
     * @var integer Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.
     */
    public $VulCategory;

    /**
     * @var string Whether the vulnerabilities are emergency vulnerabilities. yes: yes.
     */
    public $IfEmergency;

    /**
     * @param array $LastDays Number of past days for data query. Subtract 1 from the actual number of days and fill in the value.
     * @param integer $VulCategory Vulnerability category. 1: web CMS vulnerability; 2: application vulnerability; 4: Linux software vulnerability; 5: Windows system vulnerability.
     * @param string $IfEmergency Whether the vulnerabilities are emergency vulnerabilities. yes: yes.
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
        if (array_key_exists("LastDays",$param) and $param["LastDays"] !== null) {
            $this->LastDays = $param["LastDays"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("IfEmergency",$param) and $param["IfEmergency"] !== null) {
            $this->IfEmergency = $param["IfEmergency"];
        }
    }
}
