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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainIpv6Status request structure.
 *
 * @method string getInstanceId() Obtain Instance ID of the domain to be modified
 * @method void setInstanceId(string $InstanceId) Set Instance ID of the domain to be modified
 * @method string getDomain() Obtain Domain to modify
 * @method void setDomain(string $Domain) Set Domain to modify
 * @method string getDomainId() Obtain Domain ID to be modified
 * @method void setDomainId(string $DomainId) Set Domain ID to be modified
 * @method integer getStatus() Obtain IPv6 switch for modifying domain is Status (1: enable, 2: disable)
 * @method void setStatus(integer $Status) Set IPv6 switch for modifying domain is Status (1: enable, 2: disable)
 */
class ModifyDomainIpv6StatusRequest extends AbstractModel
{
    /**
     * @var string Instance ID of the domain to be modified
     */
    public $InstanceId;

    /**
     * @var string Domain to modify
     */
    public $Domain;

    /**
     * @var string Domain ID to be modified
     */
    public $DomainId;

    /**
     * @var integer IPv6 switch for modifying domain is Status (1: enable, 2: disable)
     */
    public $Status;

    /**
     * @param string $InstanceId Instance ID of the domain to be modified
     * @param string $Domain Domain to modify
     * @param string $DomainId Domain ID to be modified
     * @param integer $Status IPv6 switch for modifying domain is Status (1: enable, 2: disable)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
