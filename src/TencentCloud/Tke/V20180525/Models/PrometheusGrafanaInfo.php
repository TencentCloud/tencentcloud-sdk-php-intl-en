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
 * The grafana information in the managed PROM instance
 *
 * @method boolean getEnabled() Obtain Whether it is enabled
 * @method void setEnabled(boolean $Enabled) Set Whether it is enabled
 * @method string getDomain() Obtain Domain name. It will be effective only when the public network access is enabled.
 * @method void setDomain(string $Domain) Set Domain name. It will be effective only when the public network access is enabled.
 * @method string getAddress() Obtain The private network or public network address
 * @method void setAddress(string $Address) Set The private network or public network address
 * @method string getInternet() Obtain Whether the public network access is enabled.
`close`: the public network access is not enabled
`opening`: the public network access is being enabled
`open`: the public network access is enabled
 * @method void setInternet(string $Internet) Set Whether the public network access is enabled.
`close`: the public network access is not enabled
`opening`: the public network access is being enabled
`open`: the public network access is enabled
 * @method string getAdminUser() Obtain The user name of the grafana admin
 * @method void setAdminUser(string $AdminUser) Set The user name of the grafana admin
 */
class PrometheusGrafanaInfo extends AbstractModel
{
    /**
     * @var boolean Whether it is enabled
     */
    public $Enabled;

    /**
     * @var string Domain name. It will be effective only when the public network access is enabled.
     */
    public $Domain;

    /**
     * @var string The private network or public network address
     */
    public $Address;

    /**
     * @var string Whether the public network access is enabled.
`close`: the public network access is not enabled
`opening`: the public network access is being enabled
`open`: the public network access is enabled
     */
    public $Internet;

    /**
     * @var string The user name of the grafana admin
     */
    public $AdminUser;

    /**
     * @param boolean $Enabled Whether it is enabled
     * @param string $Domain Domain name. It will be effective only when the public network access is enabled.
     * @param string $Address The private network or public network address
     * @param string $Internet Whether the public network access is enabled.
`close`: the public network access is not enabled
`opening`: the public network access is being enabled
`open`: the public network access is enabled
     * @param string $AdminUser The user name of the grafana admin
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Internet",$param) and $param["Internet"] !== null) {
            $this->Internet = $param["Internet"];
        }

        if (array_key_exists("AdminUser",$param) and $param["AdminUser"] !== null) {
            $this->AdminUser = $param["AdminUser"];
        }
    }
}
