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
 * DescribeTCRInstanceList request structure.
 *
 * @method string getAccessKey() Obtain <p>Access key Id</p>
 * @method void setAccessKey(string $AccessKey) Set <p>Access key Id</p>
 * @method string getSecretKey() Obtain <p>Access Key</p>
 * @method void setSecretKey(string $SecretKey) Set <p>Access Key</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getRegistryRegion() Obtain <p>region where the mirror repository is located</p>
 * @method void setRegistryRegion(array $RegistryRegion) Set <p>region where the mirror repository is located</p>
 * @method string getRegistryId() Obtain <p>Mirror repository id</p>
 * @method void setRegistryId(string $RegistryId) Set <p>Mirror repository id</p>
 * @method Filter getFilter() Obtain <p>Filter item</p>
 * @method void setFilter(Filter $Filter) Set <p>Filter item</p>
 */
class DescribeTCRInstanceListRequest extends AbstractModel
{
    /**
     * @var string <p>Access key Id</p>
     */
    public $AccessKey;

    /**
     * @var string <p>Access Key</p>
     */
    public $SecretKey;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>region where the mirror repository is located</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>Mirror repository id</p>
     */
    public $RegistryId;

    /**
     * @var Filter <p>Filter item</p>
     */
    public $Filter;

    /**
     * @param string $AccessKey <p>Access key Id</p>
     * @param string $SecretKey <p>Access Key</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $RegistryRegion <p>region where the mirror repository is located</p>
     * @param string $RegistryId <p>Mirror repository id</p>
     * @param Filter $Filter <p>Filter item</p>
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
        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
