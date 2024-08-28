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
 * DescribeUsersConfig request structure.
 *
 * @method string getConfigName() Obtain Configuration name
<li>license_monitor authorization monitoring configuration. 0: off; 1: on</li>
 * @method void setConfigName(string $ConfigName) Set Configuration name
<li>license_monitor authorization monitoring configuration. 0: off; 1: on</li>
 */
class DescribeUsersConfigRequest extends AbstractModel
{
    /**
     * @var string Configuration name
<li>license_monitor authorization monitoring configuration. 0: off; 1: on</li>
     */
    public $ConfigName;

    /**
     * @param string $ConfigName Configuration name
<li>license_monitor authorization monitoring configuration. 0: off; 1: on</li>
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }
    }
}
