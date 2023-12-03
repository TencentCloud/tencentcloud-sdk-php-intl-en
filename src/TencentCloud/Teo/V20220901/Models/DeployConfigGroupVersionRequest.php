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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeployConfigGroupVersion request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getEnvId() Obtain Environment ID. Please specify the environment ID to which the version should be released.
 * @method void setEnvId(string $EnvId) Set Environment ID. Please specify the environment ID to which the version should be released.
 * @method array getConfigGroupVersionInfos() Obtain Version information required for release. Multiple versions of different configuration groups can be modified simultaneously, while each group allows modifying only one version at a time.
 * @method void setConfigGroupVersionInfos(array $ConfigGroupVersionInfos) Set Version information required for release. Multiple versions of different configuration groups can be modified simultaneously, while each group allows modifying only one version at a time.
 * @method string getDescription() Obtain Change description. It is used to describe the content and reasons for this change. A maximum of 100 characters are supported.
 * @method void setDescription(string $Description) Set Change description. It is used to describe the content and reasons for this change. A maximum of 100 characters are supported.
 */
class DeployConfigGroupVersionRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Environment ID. Please specify the environment ID to which the version should be released.
     */
    public $EnvId;

    /**
     * @var array Version information required for release. Multiple versions of different configuration groups can be modified simultaneously, while each group allows modifying only one version at a time.
     */
    public $ConfigGroupVersionInfos;

    /**
     * @var string Change description. It is used to describe the content and reasons for this change. A maximum of 100 characters are supported.
     */
    public $Description;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $EnvId Environment ID. Please specify the environment ID to which the version should be released.
     * @param array $ConfigGroupVersionInfos Version information required for release. Multiple versions of different configuration groups can be modified simultaneously, while each group allows modifying only one version at a time.
     * @param string $Description Change description. It is used to describe the content and reasons for this change. A maximum of 100 characters are supported.
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

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ConfigGroupVersionInfos",$param) and $param["ConfigGroupVersionInfos"] !== null) {
            $this->ConfigGroupVersionInfos = [];
            foreach ($param["ConfigGroupVersionInfos"] as $key => $value){
                $obj = new ConfigGroupVersionInfo();
                $obj->deserialize($value);
                array_push($this->ConfigGroupVersionInfos, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
