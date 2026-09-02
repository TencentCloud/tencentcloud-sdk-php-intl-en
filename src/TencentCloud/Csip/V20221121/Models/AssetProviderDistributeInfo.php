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
 * Number of assets of the cloud service provider
 *
 * @method integer getTencentAssetCount() Obtain <p>Total number of Tencent Cloud assets</p>
 * @method void setTencentAssetCount(integer $TencentAssetCount) Set <p>Total number of Tencent Cloud assets</p>
 * @method integer getAliAssetCount() Obtain <p>Total number of Alibaba Cloud assets</p>
 * @method void setAliAssetCount(integer $AliAssetCount) Set <p>Total number of Alibaba Cloud assets</p>
 * @method integer getAwsAssetCount() Obtain <p>Total number of Amazon Web Services assets</p>
 * @method void setAwsAssetCount(integer $AwsAssetCount) Set <p>Total number of Amazon Web Services assets</p>
 * @method integer getOtherAssetCount() Obtain <p>Total number of assets in other cloud environments</p>
 * @method void setOtherAssetCount(integer $OtherAssetCount) Set <p>Total number of assets in other cloud environments</p>
 * @method integer getAzureAssetCount() Obtain <p>Number of Microsoft cloud assets</p>
 * @method void setAzureAssetCount(integer $AzureAssetCount) Set <p>Number of Microsoft cloud assets</p>
 */
class AssetProviderDistributeInfo extends AbstractModel
{
    /**
     * @var integer <p>Total number of Tencent Cloud assets</p>
     */
    public $TencentAssetCount;

    /**
     * @var integer <p>Total number of Alibaba Cloud assets</p>
     */
    public $AliAssetCount;

    /**
     * @var integer <p>Total number of Amazon Web Services assets</p>
     */
    public $AwsAssetCount;

    /**
     * @var integer <p>Total number of assets in other cloud environments</p>
     */
    public $OtherAssetCount;

    /**
     * @var integer <p>Number of Microsoft cloud assets</p>
     */
    public $AzureAssetCount;

    /**
     * @param integer $TencentAssetCount <p>Total number of Tencent Cloud assets</p>
     * @param integer $AliAssetCount <p>Total number of Alibaba Cloud assets</p>
     * @param integer $AwsAssetCount <p>Total number of Amazon Web Services assets</p>
     * @param integer $OtherAssetCount <p>Total number of assets in other cloud environments</p>
     * @param integer $AzureAssetCount <p>Number of Microsoft cloud assets</p>
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
        if (array_key_exists("TencentAssetCount",$param) and $param["TencentAssetCount"] !== null) {
            $this->TencentAssetCount = $param["TencentAssetCount"];
        }

        if (array_key_exists("AliAssetCount",$param) and $param["AliAssetCount"] !== null) {
            $this->AliAssetCount = $param["AliAssetCount"];
        }

        if (array_key_exists("AwsAssetCount",$param) and $param["AwsAssetCount"] !== null) {
            $this->AwsAssetCount = $param["AwsAssetCount"];
        }

        if (array_key_exists("OtherAssetCount",$param) and $param["OtherAssetCount"] !== null) {
            $this->OtherAssetCount = $param["OtherAssetCount"];
        }

        if (array_key_exists("AzureAssetCount",$param) and $param["AzureAssetCount"] !== null) {
            $this->AzureAssetCount = $param["AzureAssetCount"];
        }
    }
}
