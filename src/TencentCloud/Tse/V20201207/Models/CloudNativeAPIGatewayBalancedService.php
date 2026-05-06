<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service with percentage traffic configuration
 *
 * @method string getServiceID() Obtain Service ID, required as an input parameter
 * @method void setServiceID(string $ServiceID) Set Service ID, required as an input parameter
 * @method string getServiceName() Obtain Service name, as an input parameter, meaningless
 * @method void setServiceName(string $ServiceName) Set Service name, as an input parameter, meaningless
 * @method string getUpstreamName() Obtain Upstream name, meaningless as an input parameter
 * @method void setUpstreamName(string $UpstreamName) Set Upstream name, meaningless as an input parameter
 * @method float getPercent() Obtain Percentage, 10 means 10%, range 0-100
 * @method void setPercent(float $Percent) Set Percentage, 10 means 10%, range 0-100
 */
class CloudNativeAPIGatewayBalancedService extends AbstractModel
{
    /**
     * @var string Service ID, required as an input parameter
     */
    public $ServiceID;

    /**
     * @var string Service name, as an input parameter, meaningless
     */
    public $ServiceName;

    /**
     * @var string Upstream name, meaningless as an input parameter
     */
    public $UpstreamName;

    /**
     * @var float Percentage, 10 means 10%, range 0-100
     */
    public $Percent;

    /**
     * @param string $ServiceID Service ID, required as an input parameter
     * @param string $ServiceName Service name, as an input parameter, meaningless
     * @param string $UpstreamName Upstream name, meaningless as an input parameter
     * @param float $Percent Percentage, 10 means 10%, range 0-100
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UpstreamName",$param) and $param["UpstreamName"] !== null) {
            $this->UpstreamName = $param["UpstreamName"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }
    }
}
