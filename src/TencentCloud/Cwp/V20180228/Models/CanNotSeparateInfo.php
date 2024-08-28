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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on machine with non-isolatable Trojan
 *
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getAlias() Obtain Server name
 * @method void setAlias(string $Alias) Set Server name
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method integer getReason() Obtain Reason for isolation failure: 1 - agent offline
 * @method void setReason(integer $Reason) Set Reason for isolation failure: 1 - agent offline
 */
class CanNotSeparateInfo extends AbstractModel
{
    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Server name
     */
    public $Alias;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var integer Reason for isolation failure: 1 - agent offline
     */
    public $Reason;

    /**
     * @param string $Quuid Host QUUID
     * @param string $Uuid Host UUID
     * @param string $Alias Server name
     * @param string $PrivateIp Private IP address
     * @param string $PublicIp Public IP
     * @param integer $Reason Reason for isolation failure: 1 - agent offline
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
