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
 * ModifyDnsRecord request structure.
 *
 * @method string getId() Obtain Record ID
 * @method void setId(string $Id) Set Record ID
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method string getType() Obtain Record type
 * @method void setType(string $Type) Set Record type
 * @method string getName() Obtain Record name
 * @method void setName(string $Name) Set Record name
 * @method string getContent() Obtain Record content
 * @method void setContent(string $Content) Set Record content
 * @method integer getTtl() Obtain 
 * @method void setTtl(integer $Ttl) Set 
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method string getMode() Obtain Proxy mode
 * @method void setMode(string $Mode) Set Proxy mode
 */
class ModifyDnsRecordRequest extends AbstractModel
{
    /**
     * @var string Record ID
     */
    public $Id;

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
     * @var integer 
     */
    public $Ttl;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var string Proxy mode
     */
    public $Mode;

    /**
     * @param string $Id Record ID
     * @param string $ZoneId Site ID
     * @param string $Type Record type
     * @param string $Name Record name
     * @param string $Content Record content
     * @param integer $Ttl 
     * @param integer $Priority Priority
     * @param string $Mode Proxy mode
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
