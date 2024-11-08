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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndPointAndEndPointService request structure.
 *
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method boolean getAutoAcceptFlag() Obtain Whether automatic forwarding is supported.
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) Set Whether automatic forwarding is supported.
 * @method string getServiceInstanceId() Obtain Backend service ID.
 * @method void setServiceInstanceId(string $ServiceInstanceId) Set Backend service ID.
 * @method string getEndPointName() Obtain Endpoint name.
 * @method void setEndPointName(string $EndPointName) Set Endpoint name.
 * @method string getEndPointRegion() Obtain Endpoint region, which should be consistent with the region of the endpoint service.
 * @method void setEndPointRegion(string $EndPointRegion) Set Endpoint region, which should be consistent with the region of the endpoint service.
 * @method string getEndPointServiceName() Obtain Endpoint service name.
 * @method void setEndPointServiceName(string $EndPointServiceName) Set Endpoint service name.
 * @method string getServiceType() Obtain Mounted PaaS service type. Valid values: CLB, CDB, and CRS.
 * @method void setServiceType(string $ServiceType) Set Mounted PaaS service type. Valid values: CLB, CDB, and CRS.
 * @method integer getIpNum() Obtain Number of endpoint IP addresses.
 * @method void setIpNum(integer $IpNum) Set Number of endpoint IP addresses.
 */
class CreateEndPointAndEndPointServiceRequest extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var boolean Whether automatic forwarding is supported.
     */
    public $AutoAcceptFlag;

    /**
     * @var string Backend service ID.
     */
    public $ServiceInstanceId;

    /**
     * @var string Endpoint name.
     */
    public $EndPointName;

    /**
     * @var string Endpoint region, which should be consistent with the region of the endpoint service.
     */
    public $EndPointRegion;

    /**
     * @var string Endpoint service name.
     */
    public $EndPointServiceName;

    /**
     * @var string Mounted PaaS service type. Valid values: CLB, CDB, and CRS.
     */
    public $ServiceType;

    /**
     * @var integer Number of endpoint IP addresses.
     */
    public $IpNum;

    /**
     * @param string $VpcId VPC instance ID.
     * @param boolean $AutoAcceptFlag Whether automatic forwarding is supported.
     * @param string $ServiceInstanceId Backend service ID.
     * @param string $EndPointName Endpoint name.
     * @param string $EndPointRegion Endpoint region, which should be consistent with the region of the endpoint service.
     * @param string $EndPointServiceName Endpoint service name.
     * @param string $ServiceType Mounted PaaS service type. Valid values: CLB, CDB, and CRS.
     * @param integer $IpNum Number of endpoint IP addresses.
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

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointRegion",$param) and $param["EndPointRegion"] !== null) {
            $this->EndPointRegion = $param["EndPointRegion"];
        }

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("IpNum",$param) and $param["IpNum"] !== null) {
            $this->IpNum = $param["IpNum"];
        }
    }
}
