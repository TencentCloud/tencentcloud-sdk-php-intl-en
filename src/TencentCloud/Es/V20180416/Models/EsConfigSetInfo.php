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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration set information
 *
 * @method string getType() Obtain Configuration set type, such as `LDAP` and `AD`.
 * @method void setType(string $Type) Set Configuration set type, such as `LDAP` and `AD`.
 * @method string getEsConfig() Obtain "{\"order\":0,\"url\":\"ldap://10.0.1.72:389\",\"bind_dn\":\"cn=admin,dc=tencent,dc=com\",\"user_search.base_dn\":\"dc=tencent,dc=com\",\"user_search.filter\":\"(cn={0})\",\"group_search.base_dn\":\"dc=tencent,dc=com\"}"
 * @method void setEsConfig(string $EsConfig) Set "{\"order\":0,\"url\":\"ldap://10.0.1.72:389\",\"bind_dn\":\"cn=admin,dc=tencent,dc=com\",\"user_search.base_dn\":\"dc=tencent,dc=com\",\"user_search.filter\":\"(cn={0})\",\"group_search.base_dn\":\"dc=tencent,dc=com\"}"
 */
class EsConfigSetInfo extends AbstractModel
{
    /**
     * @var string Configuration set type, such as `LDAP` and `AD`.
     */
    public $Type;

    /**
     * @var string "{\"order\":0,\"url\":\"ldap://10.0.1.72:389\",\"bind_dn\":\"cn=admin,dc=tencent,dc=com\",\"user_search.base_dn\":\"dc=tencent,dc=com\",\"user_search.filter\":\"(cn={0})\",\"group_search.base_dn\":\"dc=tencent,dc=com\"}"
     */
    public $EsConfig;

    /**
     * @param string $Type Configuration set type, such as `LDAP` and `AD`.
     * @param string $EsConfig "{\"order\":0,\"url\":\"ldap://10.0.1.72:389\",\"bind_dn\":\"cn=admin,dc=tencent,dc=com\",\"user_search.base_dn\":\"dc=tencent,dc=com\",\"user_search.filter\":\"(cn={0})\",\"group_search.base_dn\":\"dc=tencent,dc=com\"}"
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = $param["EsConfig"];
        }
    }
}
