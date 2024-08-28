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
 * The statistical entity representing the distribution of vulnerabilities by severity level
 *
 * @method integer getVulLevel() Obtain // Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical
 * @method void setVulLevel(integer $VulLevel) Set // Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical
 * @method integer getCount() Obtain Quantity
 * @method void setCount(integer $Count) Set Quantity
 */
class VulLevelInfo extends AbstractModel
{
    /**
     * @var integer // Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical
     */
    public $VulLevel;

    /**
     * @var integer Quantity
     */
    public $Count;

    /**
     * @param integer $VulLevel // Severity level: 1 - low-risk; 2 - medium-risk; 3 - high-risk; 4 - critical
     * @param integer $Count Quantity
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
