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
 * ModifyTokenPlanApiKey request structure.
 *
 * @method string getApiKeyId() Obtain API Key ID.
 * @method void setApiKeyId(string $ApiKeyId) Set API Key ID.
 * @method array getAllowedModels() Obtain Available model list. If this parameter is not specified, no modification is made.

- If the package type is enterprise professional:
1) Input "all": use all models supported by the package
2) Import Model ID: specify a specific model. "all" and a specific Model ID cannot be specified at the same time.

-If the package type is enterprise lightweight edition, do not pass in this parameter.
 * @method void setAllowedModels(array $AllowedModels) Set Available model list. If this parameter is not specified, no modification is made.

- If the package type is enterprise professional:
1) Input "all": use all models supported by the package
2) Import Model ID: specify a specific model. "all" and a specific Model ID cannot be specified at the same time.

-If the package type is enterprise lightweight edition, do not pass in this parameter.
 * @method integer getExclusiveQuota() Obtain Dedicated limit. If this parameter is not specified, no modification will be made. Unit:

-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method void setExclusiveQuota(integer $ExclusiveQuota) Set Dedicated limit. If this parameter is not specified, no modification will be made. Unit:

-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method integer getTotalQuota() Obtain Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no modification is made. Measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method void setTotalQuota(integer $TotalQuota) Set Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no modification is made. Measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
 * @method string getUseStatus() Obtain Whether to enable the API Key. Values: enable (enable), disable (disable). If not passed, no modification is made.
 * @method void setUseStatus(string $UseStatus) Set Whether to enable the API Key. Values: enable (enable), disable (disable). If not passed, no modification is made.
 * @method integer getTPM() Obtain TPM (Tokens Per Minute) limit. If not passed, no modification will be made. Must be >= 0 and <= the package TPM.
 * @method void setTPM(integer $TPM) Set TPM (Tokens Per Minute) limit. If not passed, no modification will be made. Must be >= 0 and <= the package TPM.
 */
class ModifyTokenPlanApiKeyRequest extends AbstractModel
{
    /**
     * @var string API Key ID.
     */
    public $ApiKeyId;

    /**
     * @var array Available model list. If this parameter is not specified, no modification is made.

- If the package type is enterprise professional:
1) Input "all": use all models supported by the package
2) Import Model ID: specify a specific model. "all" and a specific Model ID cannot be specified at the same time.

-If the package type is enterprise lightweight edition, do not pass in this parameter.
     */
    public $AllowedModels;

    /**
     * @var integer Dedicated limit. If this parameter is not specified, no modification will be made. Unit:

-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     */
    public $ExclusiveQuota;

    /**
     * @var integer Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no modification is made. Measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     */
    public $TotalQuota;

    /**
     * @var string Whether to enable the API Key. Values: enable (enable), disable (disable). If not passed, no modification is made.
     */
    public $UseStatus;

    /**
     * @var integer TPM (Tokens Per Minute) limit. If not passed, no modification will be made. Must be >= 0 and <= the package TPM.
     */
    public $TPM;

    /**
     * @param string $ApiKeyId API Key ID.
     * @param array $AllowedModels Available model list. If this parameter is not specified, no modification is made.

- If the package type is enterprise professional:
1) Input "all": use all models supported by the package
2) Import Model ID: specify a specific model. "all" and a specific Model ID cannot be specified at the same time.

-If the package type is enterprise lightweight edition, do not pass in this parameter.
     * @param integer $ExclusiveQuota Dedicated limit. If this parameter is not specified, no modification will be made. Unit:

-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     * @param integer $TotalQuota Total credit limit. -1 means unlimited. It must be -1 or greater than or equal to the current ExclusiveQuota of the API Key. If not passed, no modification is made. Measurement units are as follows:
-Package type: professional. Measurement unit: point.
- Package type is lite package, and the measurement unit is token.
     * @param string $UseStatus Whether to enable the API Key. Values: enable (enable), disable (disable). If not passed, no modification is made.
     * @param integer $TPM TPM (Tokens Per Minute) limit. If not passed, no modification will be made. Must be >= 0 and <= the package TPM.
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
        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
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

        if (array_key_exists("UseStatus",$param) and $param["UseStatus"] !== null) {
            $this->UseStatus = $param["UseStatus"];
        }

        if (array_key_exists("TPM",$param) and $param["TPM"] !== null) {
            $this->TPM = $param["TPM"];
        }
    }
}
