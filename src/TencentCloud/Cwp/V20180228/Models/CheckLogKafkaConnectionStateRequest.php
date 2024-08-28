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
 * CheckLogKafkaConnectionState request structure.
 *
 * @method integer getAccessType() Obtain Access method: 1 - public network domain name access; 2 - supported environment access
 * @method void setAccessType(integer $AccessType) Set Access method: 1 - public network domain name access; 2 - supported environment access
 * @method string getAccessAddr() Obtain Access address: domain name or IP, with port
 * @method void setAccessAddr(string $AccessAddr) Set Access address: domain name or IP, with port
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 * @method integer getHasPwd() Obtain 0 - without password; 1 - with password
 * @method void setHasPwd(integer $HasPwd) Set 0 - without password; 1 - with password
 * @method string getPwd() Obtain Password, using AES encryption
 * @method void setPwd(string $Pwd) Set Password, using AES encryption
 * @method string getKafkaId() Obtain Kafka instance ID
 * @method void setKafkaId(string $KafkaId) Set Kafka instance ID
 * @method string getInsVersion() Obtain Kafka version
 * @method void setInsVersion(string $InsVersion) Set Kafka version
 */
class CheckLogKafkaConnectionStateRequest extends AbstractModel
{
    /**
     * @var integer Access method: 1 - public network domain name access; 2 - supported environment access
     */
    public $AccessType;

    /**
     * @var string Access address: domain name or IP, with port
     */
    public $AccessAddr;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @var integer 0 - without password; 1 - with password
     */
    public $HasPwd;

    /**
     * @var string Password, using AES encryption
     */
    public $Pwd;

    /**
     * @var string Kafka instance ID
     */
    public $KafkaId;

    /**
     * @var string Kafka version
     */
    public $InsVersion;

    /**
     * @param integer $AccessType Access method: 1 - public network domain name access; 2 - supported environment access
     * @param string $AccessAddr Access address: domain name or IP, with port
     * @param string $Username Username
     * @param integer $HasPwd 0 - without password; 1 - with password
     * @param string $Pwd Password, using AES encryption
     * @param string $KafkaId Kafka instance ID
     * @param string $InsVersion Kafka version
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessAddr",$param) and $param["AccessAddr"] !== null) {
            $this->AccessAddr = $param["AccessAddr"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("HasPwd",$param) and $param["HasPwd"] !== null) {
            $this->HasPwd = $param["HasPwd"];
        }

        if (array_key_exists("Pwd",$param) and $param["Pwd"] !== null) {
            $this->Pwd = $param["Pwd"];
        }

        if (array_key_exists("KafkaId",$param) and $param["KafkaId"] !== null) {
            $this->KafkaId = $param["KafkaId"];
        }

        if (array_key_exists("InsVersion",$param) and $param["InsVersion"] !== null) {
            $this->InsVersion = $param["InsVersion"];
        }
    }
}
