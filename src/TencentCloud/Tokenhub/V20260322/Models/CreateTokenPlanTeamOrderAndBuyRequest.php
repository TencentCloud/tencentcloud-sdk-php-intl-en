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
 * CreateTokenPlanTeamOrderAndBuy request structure.
 *
 * @method string getProductType() Obtain <p>Package type. Value: enterprise (enterprise edition professional package), enterprise-auto (enterprise edition lite package).</p>
 * @method void setProductType(string $ProductType) Set <p>Package type. Value: enterprise (enterprise edition professional package), enterprise-auto (enterprise edition lite package).</p>
 * @method string getTeamName() Obtain <p>Package name. It can only contain Chinese, letters, digits, underscores, and hyphens. It must start with a Chinese character or a letter and end with a Chinese character, letter, or digit. The length should be 2-50 characters.</p>
 * @method void setTeamName(string $TeamName) Set <p>Package name. It can only contain Chinese, letters, digits, underscores, and hyphens. It must start with a Chinese character or a letter and end with a Chinese character, letter, or digit. The length should be 2-50 characters.</p>
 * @method integer getTimeSpan() Obtain <p>Purchase duration. Unit: Month. It must be greater than 0, supporting 1 to 12 months.</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Purchase duration. Unit: Month. It must be greater than 0, supporting 1 to 12 months.</p>
 * @method integer getCreditOrToken() Obtain <p>Specification of the purchased package. If the package type is enterprise, the measurement unit is point; if the package type is enterprise-auto, the measurement unit is tokens.</p>
 * @method void setCreditOrToken(integer $CreditOrToken) Set <p>Specification of the purchased package. If the package type is enterprise, the measurement unit is point; if the package type is enterprise-auto, the measurement unit is tokens.</p>
 * @method boolean getEnableAutoRenew() Obtain <p>Whether to enable auto-renewal. Not enabled by default.</p>
 * @method void setEnableAutoRenew(boolean $EnableAutoRenew) Set <p>Whether to enable auto-renewal. Not enabled by default.</p>
 * @method string getTeamId() Obtain <p>Existing package ID (if not empty, the renewal process is performed; if empty, a new purchase is performed)</p>
 * @method void setTeamId(string $TeamId) Set <p>Existing package ID (if not empty, the renewal process is performed; if empty, a new purchase is performed)</p>
 */
class CreateTokenPlanTeamOrderAndBuyRequest extends AbstractModel
{
    /**
     * @var string <p>Package type. Value: enterprise (enterprise edition professional package), enterprise-auto (enterprise edition lite package).</p>
     */
    public $ProductType;

    /**
     * @var string <p>Package name. It can only contain Chinese, letters, digits, underscores, and hyphens. It must start with a Chinese character or a letter and end with a Chinese character, letter, or digit. The length should be 2-50 characters.</p>
     */
    public $TeamName;

    /**
     * @var integer <p>Purchase duration. Unit: Month. It must be greater than 0, supporting 1 to 12 months.</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>Specification of the purchased package. If the package type is enterprise, the measurement unit is point; if the package type is enterprise-auto, the measurement unit is tokens.</p>
     */
    public $CreditOrToken;

    /**
     * @var boolean <p>Whether to enable auto-renewal. Not enabled by default.</p>
     */
    public $EnableAutoRenew;

    /**
     * @var string <p>Existing package ID (if not empty, the renewal process is performed; if empty, a new purchase is performed)</p>
     */
    public $TeamId;

    /**
     * @param string $ProductType <p>Package type. Value: enterprise (enterprise edition professional package), enterprise-auto (enterprise edition lite package).</p>
     * @param string $TeamName <p>Package name. It can only contain Chinese, letters, digits, underscores, and hyphens. It must start with a Chinese character or a letter and end with a Chinese character, letter, or digit. The length should be 2-50 characters.</p>
     * @param integer $TimeSpan <p>Purchase duration. Unit: Month. It must be greater than 0, supporting 1 to 12 months.</p>
     * @param integer $CreditOrToken <p>Specification of the purchased package. If the package type is enterprise, the measurement unit is point; if the package type is enterprise-auto, the measurement unit is tokens.</p>
     * @param boolean $EnableAutoRenew <p>Whether to enable auto-renewal. Not enabled by default.</p>
     * @param string $TeamId <p>Existing package ID (if not empty, the renewal process is performed; if empty, a new purchase is performed)</p>
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("CreditOrToken",$param) and $param["CreditOrToken"] !== null) {
            $this->CreditOrToken = $param["CreditOrToken"];
        }

        if (array_key_exists("EnableAutoRenew",$param) and $param["EnableAutoRenew"] !== null) {
            $this->EnableAutoRenew = $param["EnableAutoRenew"];
        }

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }
    }
}
