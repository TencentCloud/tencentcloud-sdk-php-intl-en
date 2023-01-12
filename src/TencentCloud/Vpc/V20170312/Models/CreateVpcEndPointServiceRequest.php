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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpcEndPointService request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 * @method string getEndPointServiceName() Obtain Endpoint service name
 * @method void setEndPointServiceName(string $EndPointServiceName) Set Endpoint service name
 * @method boolean getAutoAcceptFlag() Obtain Whether to automatically accept
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) Set Whether to automatically accept
 * @method string getServiceInstanceId() Obtain Real server ID, such as `lb-xxx`.
 * @method void setServiceInstanceId(string $ServiceInstanceId) Set Real server ID, such as `lb-xxx`.
 * @method boolean getIsPassService() Obtain (Disused) Whether it’s a PaaS service
 * @method void setIsPassService(boolean $IsPassService) Set (Disused) Whether it’s a PaaS service
 * @method string getServiceType() Obtain Mounted PaaS service type. Values: `CLB` (default), `CDB`, `CRS`
 * @method void setServiceType(string $ServiceType) Set Mounted PaaS service type. Values: `CLB` (default), `CDB`, `CRS`
 */
class CreateVpcEndPointServiceRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID
     */
    public $VpcId;

    /**
     * @var string Endpoint service name
     */
    public $EndPointServiceName;

    /**
     * @var boolean Whether to automatically accept
     */
    public $AutoAcceptFlag;

    /**
     * @var string Real server ID, such as `lb-xxx`.
     */
    public $ServiceInstanceId;

    /**
     * @var boolean (Disused) Whether it’s a PaaS service
     */
    public $IsPassService;

    /**
     * @var string Mounted PaaS service type. Values: `CLB` (default), `CDB`, `CRS`
     */
    public $ServiceType;

    /**
     * @param string $VpcId VPC instance ID
     * @param string $EndPointServiceName Endpoint service name
     * @param boolean $AutoAcceptFlag Whether to automatically accept
     * @param string $ServiceInstanceId Real server ID, such as `lb-xxx`.
     * @param boolean $IsPassService (Disused) Whether it’s a PaaS service
     * @param string $ServiceType Mounted PaaS service type. Values: `CLB` (default), `CDB`, `CRS`
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("IsPassService",$param) and $param["IsPassService"] !== null) {
            $this->IsPassService = $param["IsPassService"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
