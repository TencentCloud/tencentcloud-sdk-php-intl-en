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
 * DescribeSecurityGroupPolicy request structure.
 *
 * @method string getProvider() Obtain Cloud service provider
 * @method void setProvider(string $Provider) Set Cloud service provider
 * @method string getAssetID() Obtain Asset ID.
 * @method void setAssetID(string $AssetID) Set Asset ID.
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method string getSecurityGroupID() Obtain Security group ID
 * @method void setSecurityGroupID(string $SecurityGroupID) Set Security group ID
 */
class DescribeSecurityGroupPolicyRequest extends AbstractModel
{
    /**
     * @var string Cloud service provider
     */
    public $Provider;

    /**
     * @var string Asset ID.
     */
    public $AssetID;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupID;

    /**
     * @param string $Provider Cloud service provider
     * @param string $AssetID Asset ID.
     * @param string $AssetType Asset type
     * @param array $MemberId <p>Group account member id.</p>
     * @param string $SecurityGroupID Security group ID
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("SecurityGroupID",$param) and $param["SecurityGroupID"] !== null) {
            $this->SecurityGroupID = $param["SecurityGroupID"];
        }
    }
}
