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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network resource limit of the instance
 *
 * @method integer getCpuNum() Obtain Number of CPU cores
 * @method void setCpuNum(integer $CpuNum) Set Number of CPU cores
 * @method integer getNetworkInterfaceLimit() Obtain ENI quantity limit
 * @method void setNetworkInterfaceLimit(integer $NetworkInterfaceLimit) Set ENI quantity limit
 * @method integer getInnerIpPerNetworkInterface() Obtain Private IP quantity limit per ENI
 * @method void setInnerIpPerNetworkInterface(integer $InnerIpPerNetworkInterface) Set Private IP quantity limit per ENI
 * @method integer getPublicIpPerInstance() Obtain Public IP limit per instance
 * @method void setPublicIpPerInstance(integer $PublicIpPerInstance) Set Public IP limit per instance
 */
class InstanceNetworkLimitConfig extends AbstractModel
{
    /**
     * @var integer Number of CPU cores
     */
    public $CpuNum;

    /**
     * @var integer ENI quantity limit
     */
    public $NetworkInterfaceLimit;

    /**
     * @var integer Private IP quantity limit per ENI
     */
    public $InnerIpPerNetworkInterface;

    /**
     * @var integer Public IP limit per instance
     */
    public $PublicIpPerInstance;

    /**
     * @param integer $CpuNum Number of CPU cores
     * @param integer $NetworkInterfaceLimit ENI quantity limit
     * @param integer $InnerIpPerNetworkInterface Private IP quantity limit per ENI
     * @param integer $PublicIpPerInstance Public IP limit per instance
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
        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("NetworkInterfaceLimit",$param) and $param["NetworkInterfaceLimit"] !== null) {
            $this->NetworkInterfaceLimit = $param["NetworkInterfaceLimit"];
        }

        if (array_key_exists("InnerIpPerNetworkInterface",$param) and $param["InnerIpPerNetworkInterface"] !== null) {
            $this->InnerIpPerNetworkInterface = $param["InnerIpPerNetworkInterface"];
        }

        if (array_key_exists("PublicIpPerInstance",$param) and $param["PublicIpPerInstance"] !== null) {
            $this->PublicIpPerInstance = $param["PublicIpPerInstance"];
        }
    }
}
