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
 * CDN domain name information
 *
 * @method string getDomain() Obtain Domain.
 * @method void setDomain(string $Domain) Set Domain.
 * @method string getDeployStatus() Obtain Deployment status.
 * @method void setDeployStatus(string $DeployStatus) Set Deployment status.
 * @method string getCname() Obtain Cname record.
 * @method void setCname(string $Cname) Set Cname record.
 * @method string getCreateTime() Obtain Create Time
 * @method void setCreateTime(string $CreateTime) Set Create Time
 * @method CDNDomainConfig getConfig() Obtain CDN domain name configuration information. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setConfig(CDNDomainConfig $Config) Set CDN domain name configuration information. 
Note: This field may return null, indicating that no valid value can be obtained.
 */
class CDNDomainInfo extends AbstractModel
{
    /**
     * @var string Domain.
     */
    public $Domain;

    /**
     * @var string Deployment status.
     */
    public $DeployStatus;

    /**
     * @var string Cname record.
     */
    public $Cname;

    /**
     * @var string Create Time
     */
    public $CreateTime;

    /**
     * @var CDNDomainConfig CDN domain name configuration information. 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Config;

    /**
     * @param string $Domain Domain.
     * @param string $DeployStatus Deployment status.
     * @param string $Cname Cname record.
     * @param string $CreateTime Create Time
     * @param CDNDomainConfig $Config CDN domain name configuration information. 
Note: This field may return null, indicating that no valid value can be obtained.
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
