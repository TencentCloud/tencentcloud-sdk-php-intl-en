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
 * WAF status of the service
 *
 * @method string getName() Obtain Service name
 * @method void setName(string $Name) Set Service name
 * @method string getId() Obtain Service ID
 * @method void setId(string $Id) Set Service ID
 * @method string getType() Obtain Service type
 * @method void setType(string $Type) Set Service type
 * @method string getStatus() Obtain Whether WAF protection is enabled for the service
 * @method void setStatus(string $Status) Set Whether WAF protection is enabled for the service
 */
class ServiceWafStatus extends AbstractModel
{
    /**
     * @var string Service name
     */
    public $Name;

    /**
     * @var string Service ID
     */
    public $Id;

    /**
     * @var string Service type
     */
    public $Type;

    /**
     * @var string Whether WAF protection is enabled for the service
     */
    public $Status;

    /**
     * @param string $Name Service name
     * @param string $Id Service ID
     * @param string $Type Service type
     * @param string $Status Whether WAF protection is enabled for the service
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
