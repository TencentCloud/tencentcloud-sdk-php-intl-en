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
 * Number of vulnerability levels
 *
 * @method integer getVulLevel() Obtain Vulnerability level
 * @method void setVulLevel(integer $VulLevel) Set Vulnerability level
 * @method integer getVulCount() Obtain Number of vulnerabilities
 * @method void setVulCount(integer $VulCount) Set Number of vulnerabilities
 */
class VulLevelCountInfo extends AbstractModel
{
    /**
     * @var integer Vulnerability level
     */
    public $VulLevel;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulCount;

    /**
     * @param integer $VulLevel Vulnerability level
     * @param integer $VulCount Number of vulnerabilities
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
        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }
    }
}
