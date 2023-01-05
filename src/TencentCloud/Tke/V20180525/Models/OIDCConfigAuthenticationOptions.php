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
 * OIDC authentication related configurations
 *
 * @method boolean getAutoCreateOIDCConfig() Obtain Creating an identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAutoCreateOIDCConfig(boolean $AutoCreateOIDCConfig) Set Creating an identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getAutoCreateClientId() Obtain Creating ClientId of the identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAutoCreateClientId(array $AutoCreateClientId) Set Creating ClientId of the identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getAutoInstallPodIdentityWebhookAddon() Obtain Creating the PodIdentityWebhook component
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAutoInstallPodIdentityWebhookAddon(boolean $AutoInstallPodIdentityWebhookAddon) Set Creating the PodIdentityWebhook component
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class OIDCConfigAuthenticationOptions extends AbstractModel
{
    /**
     * @var boolean Creating an identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AutoCreateOIDCConfig;

    /**
     * @var array Creating ClientId of the identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AutoCreateClientId;

    /**
     * @var boolean Creating the PodIdentityWebhook component
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AutoInstallPodIdentityWebhookAddon;

    /**
     * @param boolean $AutoCreateOIDCConfig Creating an identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $AutoCreateClientId Creating ClientId of the identity provider
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $AutoInstallPodIdentityWebhookAddon Creating the PodIdentityWebhook component
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("AutoCreateOIDCConfig",$param) and $param["AutoCreateOIDCConfig"] !== null) {
            $this->AutoCreateOIDCConfig = $param["AutoCreateOIDCConfig"];
        }

        if (array_key_exists("AutoCreateClientId",$param) and $param["AutoCreateClientId"] !== null) {
            $this->AutoCreateClientId = $param["AutoCreateClientId"];
        }

        if (array_key_exists("AutoInstallPodIdentityWebhookAddon",$param) and $param["AutoInstallPodIdentityWebhookAddon"] !== null) {
            $this->AutoInstallPodIdentityWebhookAddon = $param["AutoInstallPodIdentityWebhookAddon"];
        }
    }
}
