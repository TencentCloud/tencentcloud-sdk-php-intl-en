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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDnsRecord request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getType() Obtain Record type
 * @method void setType(string $Type) Set Record type
 * @method string getName() Obtain Record name
 * @method void setName(string $Name) Set Record name
 * @method string getContent() Obtain Record content
 * @method void setContent(string $Content) Set Record content
 * @method string getMode() Obtain Proxy mode. Valid values: `dns_only`, `cdn_only`, and `secure_cdn`.
 * @method void setMode(string $Mode) Set Proxy mode. Valid values: `dns_only`, `cdn_only`, and `secure_cdn`.
 * @method integer getTtl() Obtain 
 * @method void setTtl(integer $Ttl) Set 
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 */
class CreateDnsRecordRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var string Record type
     */
    public $Type;

    /**
     * @var string Record name
     */
    public $Name;

    /**
     * @var string Record content
     */
    public $Content;

    /**
     * @var string Proxy mode. Valid values: `dns_only`, `cdn_only`, and `secure_cdn`.
     */
    public $Mode;

    /**
     * @var integer 
     */
    public $Ttl;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @param string $ZoneId Site ID
     * @param string $Type Record type
     * @param string $Name Record name
     * @param string $Content Record content
     * @param string $Mode Proxy mode. Valid values: `dns_only`, `cdn_only`, and `secure_cdn`.
     * @param integer $Ttl 
     * @param integer $Priority Priority
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
