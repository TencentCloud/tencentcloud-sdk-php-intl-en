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
 * The statistical entity representing top vulnerabilities
 *
 * @method string getVulName() Obtain Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulName(string $VulName) Set Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulLevel() Obtain Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulLevel(integer $VulLevel) Set Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulCount() Obtain Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulCount(integer $VulCount) Set Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulId() Obtain Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulId(integer $VulId) Set Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VulTopInfo extends AbstractModel
{
    /**
     * @var string Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulName;

    /**
     * @var integer Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulLevel;

    /**
     * @var integer Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulCount;

    /**
     * @var integer Vulnerability ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulId;

    /**
     * @param string $VulName Vulnerability name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulLevel Hazard level: 1-Low-risk; 2-Medium-risk; 3-High-risk; 4-Critical
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulCount Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulId Vulnerability ID
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }
    }
}
