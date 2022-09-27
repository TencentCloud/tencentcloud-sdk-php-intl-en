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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServiceStatus response structure.
 *
 * @method boolean getServiceEnabled() Obtain `true`: The service is activated; `false`: The service is not activated.
 * @method void setServiceEnabled(boolean $ServiceEnabled) Set `true`: The service is activated; `false`: The service is not activated.
 * @method integer getInvalidType() Obtain Invalid service type. `0`: not purchased; `1`: normal; `2`: suspended due to arrears; `3`: resource released
 * @method void setInvalidType(integer $InvalidType) Set Invalid service type. `0`: not purchased; `1`: normal; `2`: suspended due to arrears; `3`: resource released
 * @method boolean getAccessKeyEscrowEnabled() Obtain `true`: Allow SSM to manage Tencent Cloud API key secrets.
`false`: Forbid SSM to manage Tencent Cloud API key secrets.
 * @method void setAccessKeyEscrowEnabled(boolean $AccessKeyEscrowEnabled) Set `true`: Allow SSM to manage Tencent Cloud API key secrets.
`false`: Forbid SSM to manage Tencent Cloud API key secrets.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetServiceStatusResponse extends AbstractModel
{
    /**
     * @var boolean `true`: The service is activated; `false`: The service is not activated.
     */
    public $ServiceEnabled;

    /**
     * @var integer Invalid service type. `0`: not purchased; `1`: normal; `2`: suspended due to arrears; `3`: resource released
     */
    public $InvalidType;

    /**
     * @var boolean `true`: Allow SSM to manage Tencent Cloud API key secrets.
`false`: Forbid SSM to manage Tencent Cloud API key secrets.
     */
    public $AccessKeyEscrowEnabled;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $ServiceEnabled `true`: The service is activated; `false`: The service is not activated.
     * @param integer $InvalidType Invalid service type. `0`: not purchased; `1`: normal; `2`: suspended due to arrears; `3`: resource released
     * @param boolean $AccessKeyEscrowEnabled `true`: Allow SSM to manage Tencent Cloud API key secrets.
`false`: Forbid SSM to manage Tencent Cloud API key secrets.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ServiceEnabled",$param) and $param["ServiceEnabled"] !== null) {
            $this->ServiceEnabled = $param["ServiceEnabled"];
        }

        if (array_key_exists("InvalidType",$param) and $param["InvalidType"] !== null) {
            $this->InvalidType = $param["InvalidType"];
        }

        if (array_key_exists("AccessKeyEscrowEnabled",$param) and $param["AccessKeyEscrowEnabled"] !== null) {
            $this->AccessKeyEscrowEnabled = $param["AccessKeyEscrowEnabled"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
