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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Value returned for container Pod resources
 *
 * @method string getNameSpace() Obtain Namespace

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNameSpace(string $NameSpace) Set Namespace

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkloadName() Obtain Workload name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkloadName(string $WorkloadName) Set Workload name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLanIP() Obtain Node IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLanIP(string $LanIP) Set Node IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Node ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ObjectTypeJsonParse extends AbstractModel
{
    /**
     * @var string Namespace

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NameSpace;

    /**
     * @var string Workload name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkloadName;

    /**
     * @var string Node IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LanIP;

    /**
     * @var string Node ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param string $NameSpace Namespace

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkloadName Workload name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LanIP Node IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Node ID
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
        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
