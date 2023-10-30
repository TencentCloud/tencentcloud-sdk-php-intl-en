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
 * 
 *
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method string getDeployStatus() Obtain 
 * @method void setDeployStatus(string $DeployStatus) Set 
 * @method string getCname() Obtain 
 * @method void setCname(string $Cname) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method CDNDomainConfig getConfig() Obtain 
 * @method void setConfig(CDNDomainConfig $Config) Set 
 */
class CDNDomainInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var string 
     */
    public $DeployStatus;

    /**
     * @var string 
     */
    public $Cname;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var CDNDomainConfig 
     */
    public $Config;

    /**
     * @param string $Domain 
     * @param string $DeployStatus 
     * @param string $Cname 
     * @param string $CreateTime 
     * @param CDNDomainConfig $Config 
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

        if (array_key_exists("DeployStatus",$param) and $param["DeployStatus"] !== null) {
            $this->DeployStatus = $param["DeployStatus"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CDNDomainConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
