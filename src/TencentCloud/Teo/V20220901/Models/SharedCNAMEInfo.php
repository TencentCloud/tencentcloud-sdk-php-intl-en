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
 * Shared CNAME details
 *
 * @method string getType() Obtain <p>Shared CNAME type: value range as follows:</p><li>custom: user-created custom shared CNAME</li><li>ip-ssl: IP SSL shared CNAME</li><li>zero-rating: zero-rating shared CNAME</li><li>preset: pre-configured resource shared CNAME</li>
 * @method void setType(string $Type) Set <p>Shared CNAME type: value range as follows:</p><li>custom: user-created custom shared CNAME</li><li>ip-ssl: IP SSL shared CNAME</li><li>zero-rating: zero-rating shared CNAME</li><li>preset: pre-configured resource shared CNAME</li>
 * @method string getSharedCNAME() Obtain <p>Shared CNAME name.</p>
 * @method void setSharedCNAME(string $SharedCNAME) Set <p>Shared CNAME name.</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method IPSSLConfig getIPSSLConfig() Obtain <p>When type is ip-ssl, show the IP SSL configuration message associated with the shared CNAME.</p>
 * @method void setIPSSLConfig(IPSSLConfig $IPSSLConfig) Set <p>When type is ip-ssl, show the IP SSL configuration message associated with the shared CNAME.</p>
 * @method integer getBindDomainCount() Obtain <p>Number of acceleration domain names bound to the shared CNAME.</p>
 * @method void setBindDomainCount(integer $BindDomainCount) Set <p>Number of acceleration domain names bound to the shared CNAME.</p>
 * @method array getAccelerationDomains() Obtain <p>List of acceleration domain names added to the shared CNAME. When the number of added domains exceeds 100, only return the first 100 acceleration domain names.</p>
 * @method void setAccelerationDomains(array $AccelerationDomains) Set <p>List of acceleration domain names added to the shared CNAME. When the number of added domains exceeds 100, only return the first 100 acceleration domain names.</p>
 */
class SharedCNAMEInfo extends AbstractModel
{
    /**
     * @var string <p>Shared CNAME type: value range as follows:</p><li>custom: user-created custom shared CNAME</li><li>ip-ssl: IP SSL shared CNAME</li><li>zero-rating: zero-rating shared CNAME</li><li>preset: pre-configured resource shared CNAME</li>
     */
    public $Type;

    /**
     * @var string <p>Shared CNAME name.</p>
     */
    public $SharedCNAME;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var IPSSLConfig <p>When type is ip-ssl, show the IP SSL configuration message associated with the shared CNAME.</p>
     */
    public $IPSSLConfig;

    /**
     * @var integer <p>Number of acceleration domain names bound to the shared CNAME.</p>
     */
    public $BindDomainCount;

    /**
     * @var array <p>List of acceleration domain names added to the shared CNAME. When the number of added domains exceeds 100, only return the first 100 acceleration domain names.</p>
     */
    public $AccelerationDomains;

    /**
     * @param string $Type <p>Shared CNAME type: value range as follows:</p><li>custom: user-created custom shared CNAME</li><li>ip-ssl: IP SSL shared CNAME</li><li>zero-rating: zero-rating shared CNAME</li><li>preset: pre-configured resource shared CNAME</li>
     * @param string $SharedCNAME <p>Shared CNAME name.</p>
     * @param string $Description <p>Description.</p>
     * @param IPSSLConfig $IPSSLConfig <p>When type is ip-ssl, show the IP SSL configuration message associated with the shared CNAME.</p>
     * @param integer $BindDomainCount <p>Number of acceleration domain names bound to the shared CNAME.</p>
     * @param array $AccelerationDomains <p>List of acceleration domain names added to the shared CNAME. When the number of added domains exceeds 100, only return the first 100 acceleration domain names.</p>
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
