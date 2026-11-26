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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security instance status.
 *
 * @method string getEntity() Obtain Instance name. Currently, only subdomains are available.
 * @method void setEntity(string $Entity) Set Instance name. Currently, only subdomains are available.
 * @method string getStatus() Obtain Instance configuration issuance status. Valid values:
<li>online: Configuration in effect;</li><li>fail: Configuration failure;</li><li>process: Configuration is being deployed.</li>
 * @method void setStatus(string $Status) Set Instance configuration issuance status. Valid values:
<li>online: Configuration in effect;</li><li>fail: Configuration failure;</li><li>process: Configuration is being deployed.</li>
 * @method string getMessage() Obtain Prompt for instance configuration distribution.
 * @method void setMessage(string $Message) Set Prompt for instance configuration distribution.
 */
class EntityStatus extends AbstractModel
{
    /**
     * @var string Instance name. Currently, only subdomains are available.
     */
    public $Entity;

    /**
     * @var string Instance configuration issuance status. Valid values:
<li>online: Configuration in effect;</li><li>fail: Configuration failure;</li><li>process: Configuration is being deployed.</li>
     */
    public $Status;

    /**
     * @var string Prompt for instance configuration distribution.
     */
    public $Message;

    /**
     * @param string $Entity Instance name. Currently, only subdomains are available.
     * @param string $Status Instance configuration issuance status. Valid values:
<li>online: Configuration in effect;</li><li>fail: Configuration failure;</li><li>process: Configuration is being deployed.</li>
     * @param string $Message Prompt for instance configuration distribution.
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
        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
