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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource types monitored by CFA
 *
 * @method string getPolicyName() Obtain CAM policy name
 * @method void setPolicyName(string $PolicyName) Set CAM policy name
 * @method string getUpdateTime() Obtain Modification time of resource types for monitoring
 * @method void setUpdateTime(string $UpdateTime) Set Modification time of resource types for monitoring
 * @method string getService() Obtain Service
 * @method void setService(string $Service) Set Service
 * @method string getResourceType() Obtain Resource type
 * @method void setResourceType(string $ResourceType) Set Resource type
 * @method string getServiceName() Obtain Service name
 * @method void setServiceName(string $ServiceName) Set Service name
 * @method string getResourceTypeName() Obtain Resource type name
 * @method void setResourceTypeName(string $ResourceTypeName) Set Resource type name
 */
class RecordResourceType extends AbstractModel
{
    /**
     * @var string CAM policy name
     */
    public $PolicyName;

    /**
     * @var string Modification time of resource types for monitoring
     */
    public $UpdateTime;

    /**
     * @var string Service
     */
    public $Service;

    /**
     * @var string Resource type
     */
    public $ResourceType;

    /**
     * @var string Service name
     */
    public $ServiceName;

    /**
     * @var string Resource type name
     */
    public $ResourceTypeName;

    /**
     * @param string $PolicyName CAM policy name
     * @param string $UpdateTime Modification time of resource types for monitoring
     * @param string $Service Service
     * @param string $ResourceType Resource type
     * @param string $ServiceName Service name
     * @param string $ResourceTypeName Resource type name
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ResourceTypeName",$param) and $param["ResourceTypeName"] !== null) {
            $this->ResourceTypeName = $param["ResourceTypeName"];
        }
    }
}
