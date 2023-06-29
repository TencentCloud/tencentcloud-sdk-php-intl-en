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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCDNDomainConfig request structure.
 *
 * @method string getDomain() Obtain Domain.
 * @method void setDomain(string $Domain) Set Domain.
 * @method CDNDomainConfigForUpdate getConfig() Obtain Domain configuration.
 * @method void setConfig(CDNDomainConfigForUpdate $Config) Set Domain configuration.
 * @method integer getSubAppId() Obtain VOD[Subapplication](/document/product/266/14574) ID。If you want to access resources in a Subapplication, fill this field with the Subapplication ID; otherwise, you don't need to fill in this field.
 * @method void setSubAppId(integer $SubAppId) Set VOD[Subapplication](/document/product/266/14574) ID。If you want to access resources in a Subapplication, fill this field with the Subapplication ID; otherwise, you don't need to fill in this field.
 */
class ModifyCDNDomainConfigRequest extends AbstractModel
{
    /**
     * @var string Domain.
     */
    public $Domain;

    /**
     * @var CDNDomainConfigForUpdate Domain configuration.
     */
    public $Config;

    /**
     * @var integer VOD[Subapplication](/document/product/266/14574) ID。If you want to access resources in a Subapplication, fill this field with the Subapplication ID; otherwise, you don't need to fill in this field.
     */
    public $SubAppId;

    /**
     * @param string $Domain Domain.
     * @param CDNDomainConfigForUpdate $Config Domain configuration.
     * @param integer $SubAppId VOD[Subapplication](/document/product/266/14574) ID。If you want to access resources in a Subapplication, fill this field with the Subapplication ID; otherwise, you don't need to fill in this field.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CDNDomainConfigForUpdate();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}