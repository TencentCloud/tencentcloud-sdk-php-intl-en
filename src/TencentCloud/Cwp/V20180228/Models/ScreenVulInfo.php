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
 * Vulnerability list on big screen
 *
 * @method integer getId() Obtain Vulnerability Event ID
 * @method void setId(integer $Id) Set Vulnerability Event ID
 * @method string getName() Obtain Vulnerability name
 * @method void setName(string $Name) Set Vulnerability name
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method string getLastTime() Obtain Last detection Time
 * @method void setLastTime(string $LastTime) Set Last detection Time
 * @method integer getLevel() Obtain Vulnerability level 1: low-risk; 2: medium-risk; 3: high-risk; 4: prompt
 * @method void setLevel(integer $Level) Set Vulnerability level 1: low-risk; 2: medium-risk; 3: high-risk; 4: prompt
 * @method integer getCategory() Obtain Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCategory(integer $Category) Set Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScreenVulInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability Event ID
     */
    public $Id;

    /**
     * @var string Vulnerability name
     */
    public $Name;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var string Last detection Time
     */
    public $LastTime;

    /**
     * @var integer Vulnerability level 1: low-risk; 2: medium-risk; 3: high-risk; 4: prompt
     */
    public $Level;

    /**
     * @var integer Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Category;

    /**
     * @var string Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @param integer $Id Vulnerability Event ID
     * @param string $Name Vulnerability name
     * @param integer $VulId Vulnerability ID
     * @param string $LastTime Last detection Time
     * @param integer $Level Vulnerability level 1: low-risk; 2: medium-risk; 3: high-risk; 4: prompt
     * @param integer $Category Vulnerability type: 1 - web-cms vulnerabilities; 2 - application vulnerabilities; 4 - Linux software vulnerabilities; 5 - Windows system vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
