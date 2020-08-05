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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The authentication information of channel endpoints.
 *
 * @method array getWhiteIpList() Obtain The security group allowlist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWhiteIpList(array $WhiteIpList) Set The security group allowlist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBlackIpList() Obtain The security group blocklist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBlackIpList(array $BlackIpList) Set The security group blocklist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAuthKey() Obtain The authentication key. Its value is same as `X-TENCENT-PACKAGE` set in the HTTP request header.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthKey(string $AuthKey) Set The authentication key. Its value is same as `X-TENCENT-PACKAGE` set in the HTTP request header.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class EndpointAuthInfo extends AbstractModel
{
    /**
     * @var array The security group allowlist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WhiteIpList;

    /**
     * @var array The security group blocklist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BlackIpList;

    /**
     * @var string The authentication key. Its value is same as `X-TENCENT-PACKAGE` set in the HTTP request header.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthKey;

    /**
     * @param array $WhiteIpList The security group allowlist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BlackIpList The security group blocklist in CIDR format.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AuthKey The authentication key. Its value is same as `X-TENCENT-PACKAGE` set in the HTTP request header.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("WhiteIpList",$param) and $param["WhiteIpList"] !== null) {
            $this->WhiteIpList = $param["WhiteIpList"];
        }

        if (array_key_exists("BlackIpList",$param) and $param["BlackIpList"] !== null) {
            $this->BlackIpList = $param["BlackIpList"];
        }

        if (array_key_exists("AuthKey",$param) and $param["AuthKey"] !== null) {
            $this->AuthKey = $param["AuthKey"];
        }
    }
}
