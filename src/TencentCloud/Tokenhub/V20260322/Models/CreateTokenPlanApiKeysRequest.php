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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTokenPlanApiKeys request structure.
 *
 * @method string getTeamId() Obtain Package ID. You can obtain it through the DescribeTokenPlanList API.
 * @method void setTeamId(string $TeamId) Set Package ID. You can obtain it through the DescribeTokenPlanList API.
 * @method string getApiKeyName() Obtain API key name, up to 128 characters. If the number of API keys created exceeds 1, the actual name format is {ApiKeyName}-{serial number} (for example, mykey-1, mykey-2).
 * @method void setApiKeyName(string $ApiKeyName) Set API key name, up to 128 characters. If the number of API keys created exceeds 1, the actual name format is {ApiKeyName}-{serial number} (for example, mykey-1, mykey-2).
 * @method integer getCount() Obtain Number of creations. Value range: 1–10.
 * @method void setCount(integer $Count) Set Number of creations. Value range: 1–10.
 * @method array getAllowedModels() Obtain List of available models. If the package type is the enterprise edition professional package, you can specify a model or pass in "all". "all" means all models supported by the package are available for use. To specify specific models, pass in Model IDs. "all" and specific Model IDs cannot be specified at the same time. If not provided, it indicates the API Key does not support any models, thereby impacting normal use of the API Key. If the package type is the enterprise edition lite package, this field will be force overwritten to ["auto"] regardless of whether it is provided and what value is passed in.
 * @method void setAllowedModels(array $AllowedModels) Set List of available models. If the package type is the enterprise edition professional package, you can specify a model or pass in "all". "all" means all models supported by the package are available for use. To specify specific models, pass in Model IDs. "all" and specific Model IDs cannot be specified at the same time. If not provided, it indicates the API Key does not support any models, thereby impacting normal use of the API Key. If the package type is the enterprise edition lite package, this field will be force overwritten to ["auto"] regardless of whether it is provided and what value is passed in.
 * @method integer getExclusiveQuota() Obtain Exclusive reserved quota. If not passed in, the value is `0`, which means no exclusive reserved quota is assigned to the API Key. Measurement units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
 * @method void setExclusiveQuota(integer $ExclusiveQuota) Set Exclusive reserved quota. If not passed in, the value is `0`, which means no exclusive reserved quota is assigned to the API Key. Measurement units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
 * @method integer getTotalQuota() Obtain Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no upper limit is set. The units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
 * @method void setTotalQuota(integer $TotalQuota) Set Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no upper limit is set. The units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
 * @method integer getTPM() Obtain TPM (Tokens Per Minute) limit. If not passed, the plan-level TPM is used. Must be >= 0 and <= the package TPM.
 * @method void setTPM(integer $TPM) Set TPM (Tokens Per Minute) limit. If not passed, the plan-level TPM is used. Must be >= 0 and <= the package TPM.
 */
class CreateTokenPlanApiKeysRequest extends AbstractModel
{
    /**
     * @var string Package ID. You can obtain it through the DescribeTokenPlanList API.
     */
    public $TeamId;

    /**
     * @var string API key name, up to 128 characters. If the number of API keys created exceeds 1, the actual name format is {ApiKeyName}-{serial number} (for example, mykey-1, mykey-2).
     */
    public $ApiKeyName;

    /**
     * @var integer Number of creations. Value range: 1–10.
     */
    public $Count;

    /**
     * @var array List of available models. If the package type is the enterprise edition professional package, you can specify a model or pass in "all". "all" means all models supported by the package are available for use. To specify specific models, pass in Model IDs. "all" and specific Model IDs cannot be specified at the same time. If not provided, it indicates the API Key does not support any models, thereby impacting normal use of the API Key. If the package type is the enterprise edition lite package, this field will be force overwritten to ["auto"] regardless of whether it is provided and what value is passed in.
     */
    public $AllowedModels;

    /**
     * @var integer Exclusive reserved quota. If not passed in, the value is `0`, which means no exclusive reserved quota is assigned to the API Key. Measurement units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
     */
    public $ExclusiveQuota;

    /**
     * @var integer Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no upper limit is set. The units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
     */
    public $TotalQuota;

    /**
     * @var integer TPM (Tokens Per Minute) limit. If not passed, the plan-level TPM is used. Must be >= 0 and <= the package TPM.
     */
    public $TPM;

    /**
     * @param string $TeamId Package ID. You can obtain it through the DescribeTokenPlanList API.
     * @param string $ApiKeyName API key name, up to 128 characters. If the number of API keys created exceeds 1, the actual name format is {ApiKeyName}-{serial number} (for example, mykey-1, mykey-2).
     * @param integer $Count Number of creations. Value range: 1–10.
     * @param array $AllowedModels List of available models. If the package type is the enterprise edition professional package, you can specify a model or pass in "all". "all" means all models supported by the package are available for use. To specify specific models, pass in Model IDs. "all" and specific Model IDs cannot be specified at the same time. If not provided, it indicates the API Key does not support any models, thereby impacting normal use of the API Key. If the package type is the enterprise edition lite package, this field will be force overwritten to ["auto"] regardless of whether it is provided and what value is passed in.
     * @param integer $ExclusiveQuota Exclusive reserved quota. If not passed in, the value is `0`, which means no exclusive reserved quota is assigned to the API Key. Measurement units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
     * @param integer $TotalQuota Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no upper limit is set. The units are as follows:
-Package type is professional, unit value is points;
-Package type is lite package, and the measurement unit is token.
     * @param integer $TPM TPM (Tokens Per Minute) limit. If not passed, the plan-level TPM is used. Must be >= 0 and <= the package TPM.
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
        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }

        if (array_key_exists("ApiKeyName",$param) and $param["ApiKeyName"] !== null) {
            $this->ApiKeyName = $param["ApiKeyName"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AllowedModels",$param) and $param["AllowedModels"] !== null) {
            $this->AllowedModels = $param["AllowedModels"];
        }

        if (array_key_exists("ExclusiveQuota",$param) and $param["ExclusiveQuota"] !== null) {
            $this->ExclusiveQuota = $param["ExclusiveQuota"];
        }

        if (array_key_exists("TotalQuota",$param) and $param["TotalQuota"] !== null) {
            $this->TotalQuota = $param["TotalQuota"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }
    }
}
