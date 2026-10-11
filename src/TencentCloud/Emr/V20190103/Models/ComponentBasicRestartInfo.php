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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation process scope.
 *
 * @method string getComponentName() Obtain (Required) Process name, for example, NameNode.
 * @method void setComponentName(string $ComponentName) Set (Required) Process name, for example, NameNode.
 * @method array getIpList() Obtain List of operation IP addresses.
 * @method void setIpList(array $IpList) Set List of operation IP addresses.
 */
class ComponentBasicRestartInfo extends AbstractModel
{
    /**
     * @var string (Required) Process name, for example, NameNode.
     */
    public $ComponentName;

    /**
     * @var array List of operation IP addresses.
     */
    public $IpList;

    /**
     * @param string $ComponentName (Required) Process name, for example, NameNode.
     * @param array $IpList List of operation IP addresses.
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
        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
