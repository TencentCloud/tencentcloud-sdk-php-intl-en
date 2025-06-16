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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApp request structure.
 *
 * @method string getAppType() Obtain Application type; knowledge_qa - knowledge qa management.
 * @method void setAppType(string $AppType) Set Application type; knowledge_qa - knowledge qa management.
 * @method BaseConfig getBaseConfig() Obtain Basic application configuration.
 * @method void setBaseConfig(BaseConfig $BaseConfig) Set Basic application configuration.
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string Application type; knowledge_qa - knowledge qa management.
     */
    public $AppType;

    /**
     * @var BaseConfig Basic application configuration.
     */
    public $BaseConfig;

    /**
     * @param string $AppType Application type; knowledge_qa - knowledge qa management.
     * @param BaseConfig $BaseConfig Basic application configuration.
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("BaseConfig",$param) and $param["BaseConfig"] !== null) {
            $this->BaseConfig = new BaseConfig();
            $this->BaseConfig->deserialize($param["BaseConfig"]);
        }
    }
}
