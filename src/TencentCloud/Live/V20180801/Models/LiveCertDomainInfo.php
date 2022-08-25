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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The domains to bind to a certificate.
 *
 * @method string getDomainName() Obtain The domain name.
 * @method void setDomainName(string $DomainName) Set The domain name.
 * @method integer getStatus() Obtain Whether to enable HTTPS for the domain.
1: Enable
0: Disable
-1: Keep the current configuration
 * @method void setStatus(integer $Status) Set Whether to enable HTTPS for the domain.
1: Enable
0: Disable
-1: Keep the current configuration
 */
class LiveCertDomainInfo extends AbstractModel
{
    /**
     * @var string The domain name.
     */
    public $DomainName;

    /**
     * @var integer Whether to enable HTTPS for the domain.
1: Enable
0: Disable
-1: Keep the current configuration
     */
    public $Status;

    /**
     * @param string $DomainName The domain name.
     * @param integer $Status Whether to enable HTTPS for the domain.
1: Enable
0: Disable
-1: Keep the current configuration
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
