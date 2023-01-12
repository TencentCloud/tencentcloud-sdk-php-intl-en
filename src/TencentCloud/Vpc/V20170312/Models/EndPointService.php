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
 * Endpoint service
 *
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getServiceOwner() Obtain APP ID
 * @method void setServiceOwner(string $ServiceOwner) Set APP ID
 * @method string getServiceName() Obtain Endpoint service name
 * @method void setServiceName(string $ServiceName) Set Endpoint service name
 * @method string getServiceVip() Obtain Real server VIP
 * @method void setServiceVip(string $ServiceVip) Set Real server VIP
 * @method string getServiceInstanceId() Obtain Real server ID in the format of `lb-xxx`.
 * @method void setServiceInstanceId(string $ServiceInstanceId) Set Real server ID in the format of `lb-xxx`.
 * @method boolean getAutoAcceptFlag() Obtain Whether to automatically accept
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) Set Whether to automatically accept
 * @method integer getEndPointCount() Obtain Number of associated endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEndPointCount(integer $EndPointCount) Set Number of associated endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getEndPointSet() Obtain Array of endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEndPointSet(array $EndPointSet) Set Array of endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getServiceType() Obtain Mounted PaaS service type. Values: `CLB`, `CDB`, `CRS`
 * @method void setServiceType(string $ServiceType) Set Mounted PaaS service type. Values: `CLB`, `CDB`, `CRS`
 */
class EndPointService extends AbstractModel
{
    /**
     * @var string Endpoint service ID
     */
    public $EndPointServiceId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string APP ID
     */
    public $ServiceOwner;

    /**
     * @var string Endpoint service name
     */
    public $ServiceName;

    /**
     * @var string Real server VIP
     */
    public $ServiceVip;

    /**
     * @var string Real server ID in the format of `lb-xxx`.
     */
    public $ServiceInstanceId;

    /**
     * @var boolean Whether to automatically accept
     */
    public $AutoAcceptFlag;

    /**
     * @var integer Number of associated endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EndPointCount;

    /**
     * @var array Array of endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EndPointSet;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Mounted PaaS service type. Values: `CLB`, `CDB`, `CRS`
     */
    public $ServiceType;

    /**
     * @param string $EndPointServiceId Endpoint service ID
     * @param string $VpcId VPC ID
     * @param string $ServiceOwner APP ID
     * @param string $ServiceName Endpoint service name
     * @param string $ServiceVip Real server VIP
     * @param string $ServiceInstanceId Real server ID in the format of `lb-xxx`.
     * @param boolean $AutoAcceptFlag Whether to automatically accept
     * @param integer $EndPointCount Number of associated endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $EndPointSet Array of endpoints
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
     * @param string $ServiceType Mounted PaaS service type. Values: `CLB`, `CDB`, `CRS`
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ServiceOwner",$param) and $param["ServiceOwner"] !== null) {
            $this->ServiceOwner = $param["ServiceOwner"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("EndPointCount",$param) and $param["EndPointCount"] !== null) {
            $this->EndPointCount = $param["EndPointCount"];
        }

        if (array_key_exists("EndPointSet",$param) and $param["EndPointSet"] !== null) {
            $this->EndPointSet = [];
            foreach ($param["EndPointSet"] as $key => $value){
                $obj = new EndPoint();
                $obj->deserialize($value);
                array_push($this->EndPointSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
