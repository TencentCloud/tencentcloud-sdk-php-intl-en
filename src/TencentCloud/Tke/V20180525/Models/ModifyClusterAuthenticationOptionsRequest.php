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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterAuthenticationOptions request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method ServiceAccountAuthenticationOptions getServiceAccounts() Obtain ServiceAccount authentication configuration
 * @method void setServiceAccounts(ServiceAccountAuthenticationOptions $ServiceAccounts) Set ServiceAccount authentication configuration
 * @method OIDCConfigAuthenticationOptions getOIDCConfig() Obtain OIDC authentication configurations
 * @method void setOIDCConfig(OIDCConfigAuthenticationOptions $OIDCConfig) Set OIDC authentication configurations
 */
class ModifyClusterAuthenticationOptionsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var ServiceAccountAuthenticationOptions ServiceAccount authentication configuration
     */
    public $ServiceAccounts;

    /**
     * @var OIDCConfigAuthenticationOptions OIDC authentication configurations
     */
    public $OIDCConfig;

    /**
     * @param string $ClusterId Cluster ID
     * @param ServiceAccountAuthenticationOptions $ServiceAccounts ServiceAccount authentication configuration
     * @param OIDCConfigAuthenticationOptions $OIDCConfig OIDC authentication configurations
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ServiceAccounts",$param) and $param["ServiceAccounts"] !== null) {
            $this->ServiceAccounts = new ServiceAccountAuthenticationOptions();
            $this->ServiceAccounts->deserialize($param["ServiceAccounts"]);
        }

        if (array_key_exists("OIDCConfig",$param) and $param["OIDCConfig"] !== null) {
            $this->OIDCConfig = new OIDCConfigAuthenticationOptions();
            $this->OIDCConfig->deserialize($param["OIDCConfig"]);
        }
    }
}
