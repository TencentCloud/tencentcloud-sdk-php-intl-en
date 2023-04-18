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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target processes
 *
 * @method string getComponentName() Obtain The process name (required), such as NameNode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentName(string $ComponentName) Set The process name (required), such as NameNode.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpList() Obtain The target IP list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpList(array $IpList) Set The target IP list.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ComponentBasicRestartInfo extends AbstractModel
{
    /**
     * @var string The process name (required), such as NameNode.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentName;

    /**
     * @var array The target IP list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpList;

    /**
     * @param string $ComponentName The process name (required), such as NameNode.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpList The target IP list.
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
        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
