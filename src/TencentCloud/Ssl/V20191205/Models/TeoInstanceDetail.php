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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of TEO instances
 *
 * @method string getHost() Obtain The domain.
 * @method void setHost(string $Host) Set The domain.
 * @method string getCertId() Obtain The certificate ID.
 * @method void setCertId(string $CertId) Set The certificate ID.
 * @method string getZoneId() Obtain The AZ ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(string $ZoneId) Set The AZ ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Domain status.
`Deployed`: deployed;.
`Processing`: deploying;.
`Applying`: applying;.
`Failed`: application failed;.
`Issued`: binding failed.
 * @method void setStatus(string $Status) Set Domain status.
`Deployed`: deployed;.
`Processing`: deploying;.
`Applying`: applying;.
`Failed`: application failed;.
`Issued`: binding failed.
 */
class TeoInstanceDetail extends AbstractModel
{
    /**
     * @var string The domain.
     */
    public $Host;

    /**
     * @var string The certificate ID.
     */
    public $CertId;

    /**
     * @var string The AZ ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Domain status.
`Deployed`: deployed;.
`Processing`: deploying;.
`Applying`: applying;.
`Failed`: application failed;.
`Issued`: binding failed.
     */
    public $Status;

    /**
     * @param string $Host The domain.
     * @param string $CertId The certificate ID.
     * @param string $ZoneId The AZ ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Domain status.
`Deployed`: deployed;.
`Processing`: deploying;.
`Applying`: applying;.
`Failed`: application failed;.
`Issued`: binding failed.
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
