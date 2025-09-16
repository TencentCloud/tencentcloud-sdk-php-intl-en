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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about Pod calls involving ENIs across tenants.
 *
 * @method string getPrimaryIP() Obtain Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrimaryIP(string $PrimaryIP) Set Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPort() Obtain Pod port.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(string $Port) Set Pod port.Note: This field may return null, indicating that no valid values can be obtained.
 */
class CrossTenantENIInfo extends AbstractModel
{
    /**
     * @var string Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrimaryIP;

    /**
     * @var string Pod port.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @param string $PrimaryIP Pod IP address.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Port Pod port.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PrimaryIP",$param) and $param["PrimaryIP"] !== null) {
            $this->PrimaryIP = $param["PrimaryIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
