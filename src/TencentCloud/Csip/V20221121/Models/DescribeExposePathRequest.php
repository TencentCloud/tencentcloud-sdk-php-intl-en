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
 * DescribeExposePath request structure.
 *
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method string getAssetId() Obtain Asset ID.
 * @method void setAssetId(string $AssetId) Set Asset ID.
 * @method string getIp() Obtain Asset IP.
 * @method void setIp(string $Ip) Set Asset IP.
 * @method string getDomain() Obtain Asset domain name.
 * @method void setDomain(string $Domain) Set Asset domain name.
 * @method string getPort() Obtain Port or port range.
 * @method void setPort(string $Port) Set Port or port range.
 */
class DescribeExposePathRequest extends AbstractModel
{
    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var string Asset ID.
     */
    public $AssetId;

    /**
     * @var string Asset IP.
     */
    public $Ip;

    /**
     * @var string Asset domain name.
     */
    public $Domain;

    /**
     * @var string Port or port range.
     */
    public $Port;

    /**
     * @param array $MemberId Group Account Member ID
     * @param string $AssetId Asset ID.
     * @param string $Ip Asset IP.
     * @param string $Domain Asset domain name.
     * @param string $Port Port or port range.
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
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
