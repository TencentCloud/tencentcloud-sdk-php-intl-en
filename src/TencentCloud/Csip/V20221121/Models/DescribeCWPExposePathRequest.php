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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCWPExposePath request structure.
 *
 * @method string getAssetID() Obtain <p>Host Asset ID</p>
 * @method void setAssetID(string $AssetID) Set <p>Host Asset ID</p>
 * @method integer getAssetAppID() Obtain <p>Asset ownership User AppID</p>
 * @method void setAssetAppID(integer $AssetAppID) Set <p>Asset ownership User AppID</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getIp() Obtain <p>Asset IP</p>
 * @method void setIp(string $Ip) Set <p>Asset IP</p>
 * @method string getDomain() Obtain <p>Asset Domain</p>
 * @method void setDomain(string $Domain) Set <p>Asset Domain</p>
 * @method string getPort() Obtain <p>Port or port range</p>
 * @method void setPort(string $Port) Set <p>Port or port range</p>
 */
class DescribeCWPExposePathRequest extends AbstractModel
{
    /**
     * @var string <p>Host Asset ID</p>
     */
    public $AssetID;

    /**
     * @var integer <p>Asset ownership User AppID</p>
     */
    public $AssetAppID;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Asset IP</p>
     */
    public $Ip;

    /**
     * @var string <p>Asset Domain</p>
     */
    public $Domain;

    /**
     * @var string <p>Port or port range</p>
     */
    public $Port;

    /**
     * @param string $AssetID <p>Host Asset ID</p>
     * @param integer $AssetAppID <p>Asset ownership User AppID</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Ip <p>Asset IP</p>
     * @param string $Domain <p>Asset Domain</p>
     * @param string $Port <p>Port or port range</p>
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
        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetAppID",$param) and $param["AssetAppID"] !== null) {
            $this->AssetAppID = $param["AssetAppID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
