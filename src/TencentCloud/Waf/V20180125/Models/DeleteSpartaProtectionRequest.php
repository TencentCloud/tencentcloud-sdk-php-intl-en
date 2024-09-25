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
 * DeleteSpartaProtection request structure.
 *
 * @method array getDomains() Obtain Domain name list
 * @method void setDomains(array $Domains) Set Domain name list
 * @method string getEdition() Obtain Instance type
 * @method void setEdition(string $Edition) Set Instance type
 * @method string getInstanceID() Obtain (Required) Instance ID of the domain name
 * @method void setInstanceID(string $InstanceID) Set (Required) Instance ID of the domain name
 */
class DeleteSpartaProtectionRequest extends AbstractModel
{
    /**
     * @var array Domain name list
     */
    public $Domains;

    /**
     * @var string Instance type
     */
    public $Edition;

    /**
     * @var string (Required) Instance ID of the domain name
     */
    public $InstanceID;

    /**
     * @param array $Domains Domain name list
     * @param string $Edition Instance type
     * @param string $InstanceID (Required) Instance ID of the domain name
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
