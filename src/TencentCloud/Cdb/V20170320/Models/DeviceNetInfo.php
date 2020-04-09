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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network monitoring information of the physical server where the instance is located
 *
 * @method array getConn() Obtain Number of TCP connections
 * @method void setConn(array $Conn) Set Number of TCP connections
 * @method array getPackageIn() Obtain ENI inbound packets per second
 * @method void setPackageIn(array $PackageIn) Set ENI inbound packets per second
 * @method array getPackageOut() Obtain ENI outbound packets per second
 * @method void setPackageOut(array $PackageOut) Set ENI outbound packets per second
 * @method array getFlowIn() Obtain Inbound traffic in Kbps
 * @method void setFlowIn(array $FlowIn) Set Inbound traffic in Kbps
 * @method array getFlowOut() Obtain Outbound traffic in Kbps
 * @method void setFlowOut(array $FlowOut) Set Outbound traffic in Kbps
 */
class DeviceNetInfo extends AbstractModel
{
    /**
     * @var array Number of TCP connections
     */
    public $Conn;

    /**
     * @var array ENI inbound packets per second
     */
    public $PackageIn;

    /**
     * @var array ENI outbound packets per second
     */
    public $PackageOut;

    /**
     * @var array Inbound traffic in Kbps
     */
    public $FlowIn;

    /**
     * @var array Outbound traffic in Kbps
     */
    public $FlowOut;

    /**
     * @param array $Conn Number of TCP connections
     * @param array $PackageIn ENI inbound packets per second
     * @param array $PackageOut ENI outbound packets per second
     * @param array $FlowIn Inbound traffic in Kbps
     * @param array $FlowOut Outbound traffic in Kbps
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
        if (array_key_exists("Conn",$param) and $param["Conn"] !== null) {
            $this->Conn = $param["Conn"];
        }

        if (array_key_exists("PackageIn",$param) and $param["PackageIn"] !== null) {
            $this->PackageIn = $param["PackageIn"];
        }

        if (array_key_exists("PackageOut",$param) and $param["PackageOut"] !== null) {
            $this->PackageOut = $param["PackageOut"];
        }

        if (array_key_exists("FlowIn",$param) and $param["FlowIn"] !== null) {
            $this->FlowIn = $param["FlowIn"];
        }

        if (array_key_exists("FlowOut",$param) and $param["FlowOut"] !== null) {
            $this->FlowOut = $param["FlowOut"];
        }
    }
}
