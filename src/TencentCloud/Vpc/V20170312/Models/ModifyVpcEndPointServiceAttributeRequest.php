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
 * ModifyVpcEndPointServiceAttribute request structure.
 *
 * @method string getEndPointServiceId() Obtain Endpoint service ID
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getEndPointServiceName() Obtain Endpoint service name
 * @method void setEndPointServiceName(string $EndPointServiceName) Set Endpoint service name
 * @method boolean getAutoAcceptFlag() Obtain Whether to automatically accept VPC endpoint connection requests. Valid values: <ui><li>`true`: yes<li>`false`: no</ul>
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) Set Whether to automatically accept VPC endpoint connection requests. Valid values: <ui><li>`true`: yes<li>`false`: no</ul>
 * @method string getServiceInstanceId() Obtain Real server ID in the format of `lb-xxx`.
 * @method void setServiceInstanceId(string $ServiceInstanceId) Set Real server ID in the format of `lb-xxx`.
 */
class ModifyVpcEndPointServiceAttributeRequest extends AbstractModel
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
     * @var string Endpoint service name
     */
    public $EndPointServiceName;

    /**
     * @var boolean Whether to automatically accept VPC endpoint connection requests. Valid values: <ui><li>`true`: yes<li>`false`: no</ul>
     */
    public $AutoAcceptFlag;

    /**
     * @var string Real server ID in the format of `lb-xxx`.
     */
    public $ServiceInstanceId;

    /**
     * @param string $EndPointServiceId Endpoint service ID
     * @param string $VpcId VPC ID
     * @param string $EndPointServiceName Endpoint service name
     * @param boolean $AutoAcceptFlag Whether to automatically accept VPC endpoint connection requests. Valid values: <ui><li>`true`: yes<li>`false`: no</ul>
     * @param string $ServiceInstanceId Real server ID in the format of `lb-xxx`.
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

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }
    }
}
