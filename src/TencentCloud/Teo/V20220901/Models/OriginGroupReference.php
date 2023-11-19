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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Services referencing this origin group
 *
 * @method string getInstanceType() Obtain Services referencing the origin group. Values:
<li>`AccelerationDomain`: Acceleration domain name</li>
<li>`RuleEngine`: Rules engine</li>
<li>`Loadbalance`: Load balancer</li>
<li>`ApplicationProxy`: L4 proxy</li>
 * @method void setInstanceType(string $InstanceType) Set Services referencing the origin group. Values:
<li>`AccelerationDomain`: Acceleration domain name</li>
<li>`RuleEngine`: Rules engine</li>
<li>`Loadbalance`: Load balancer</li>
<li>`ApplicationProxy`: L4 proxy</li>
 * @method string getInstanceId() Obtain ID of the instances referencing the origin group
 * @method void setInstanceId(string $InstanceId) Set ID of the instances referencing the origin group
 * @method string getInstanceName() Obtain Name of the instance referencing the origin group
 * @method void setInstanceName(string $InstanceName) Set Name of the instance referencing the origin group
 */
class OriginGroupReference extends AbstractModel
{
    /**
     * @var string Services referencing the origin group. Values:
<li>`AccelerationDomain`: Acceleration domain name</li>
<li>`RuleEngine`: Rules engine</li>
<li>`Loadbalance`: Load balancer</li>
<li>`ApplicationProxy`: L4 proxy</li>
     */
    public $InstanceType;

    /**
     * @var string ID of the instances referencing the origin group
     */
    public $InstanceId;

    /**
     * @var string Name of the instance referencing the origin group
     */
    public $InstanceName;

    /**
     * @param string $InstanceType Services referencing the origin group. Values:
<li>`AccelerationDomain`: Acceleration domain name</li>
<li>`RuleEngine`: Rules engine</li>
<li>`Loadbalance`: Load balancer</li>
<li>`ApplicationProxy`: L4 proxy</li>
     * @param string $InstanceId ID of the instances referencing the origin group
     * @param string $InstanceName Name of the instance referencing the origin group
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
