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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Shared CNAME detail
 *
 * @method string getType() Obtain Shared CNAME type: Value ranges from...to...
<li>custom: User-created custom shared CNAME</li>
<li>ip-ssl: Shared CNAME of IP SSL type</li>
 * @method void setType(string $Type) Set Shared CNAME type: Value ranges from...to...
<li>custom: User-created custom shared CNAME</li>
<li>ip-ssl: Shared CNAME of IP SSL type</li>
 * @method string getSharedCNAME() Obtain Shared CNAME name.
 * @method void setSharedCNAME(string $SharedCNAME) Set Shared CNAME name.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method IPSSLConfig getIPSSLConfig() Obtain When type is ip-ssl, show the associated IP SSL configuration message of the shared CNAME.
 * @method void setIPSSLConfig(IPSSLConfig $IPSSLConfig) Set When type is ip-ssl, show the associated IP SSL configuration message of the shared CNAME.
 * @method integer getBindDomainCount() Obtain Number of acceleration domain names bound to the shared CNAME.
 * @method void setBindDomainCount(integer $BindDomainCount) Set Number of acceleration domain names bound to the shared CNAME.
 * @method array getAccelerationDomains() Obtain List of acceleration domain names added to the shared CNAME. When the number of domains exceeds 100, only return the first 100 acceleration domain names.
 * @method void setAccelerationDomains(array $AccelerationDomains) Set List of acceleration domain names added to the shared CNAME. When the number of domains exceeds 100, only return the first 100 acceleration domain names.
 */
class SharedCNAMEInfo extends AbstractModel
{
    /**
     * @var string Shared CNAME type: Value ranges from...to...
<li>custom: User-created custom shared CNAME</li>
<li>ip-ssl: Shared CNAME of IP SSL type</li>
     */
    public $Type;

    /**
     * @var string Shared CNAME name.
     */
    public $SharedCNAME;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var IPSSLConfig When type is ip-ssl, show the associated IP SSL configuration message of the shared CNAME.
     */
    public $IPSSLConfig;

    /**
     * @var integer Number of acceleration domain names bound to the shared CNAME.
     */
    public $BindDomainCount;

    /**
     * @var array List of acceleration domain names added to the shared CNAME. When the number of domains exceeds 100, only return the first 100 acceleration domain names.
     */
    public $AccelerationDomains;

    /**
     * @param string $Type Shared CNAME type: Value ranges from...to...
<li>custom: User-created custom shared CNAME</li>
<li>ip-ssl: Shared CNAME of IP SSL type</li>
     * @param string $SharedCNAME Shared CNAME name.
     * @param string $Description Description.
     * @param IPSSLConfig $IPSSLConfig When type is ip-ssl, show the associated IP SSL configuration message of the shared CNAME.
     * @param integer $BindDomainCount Number of acceleration domain names bound to the shared CNAME.
     * @param array $AccelerationDomains List of acceleration domain names added to the shared CNAME. When the number of domains exceeds 100, only return the first 100 acceleration domain names.
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

        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IPSSLConfig",$param) and $param["IPSSLConfig"] !== null) {
            $this->IPSSLConfig = new IPSSLConfig();
            $this->IPSSLConfig->deserialize($param["IPSSLConfig"]);
        }

        if (array_key_exists("BindDomainCount",$param) and $param["BindDomainCount"] !== null) {
            $this->BindDomainCount = $param["BindDomainCount"];
        }

        if (array_key_exists("AccelerationDomains",$param) and $param["AccelerationDomains"] !== null) {
            $this->AccelerationDomains = [];
            foreach ($param["AccelerationDomains"] as $key => $value){
                $obj = new ReferenceHolder();
                $obj->deserialize($value);
                array_push($this->AccelerationDomains, $obj);
            }
        }
    }
}
