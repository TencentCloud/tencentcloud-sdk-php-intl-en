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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query result of one quota item. Each result corresponds to a quota type. When ResourceIds is input in the request, each result also corresponds to a specific resource.
 *
 * @method integer getAvailable() Obtain Current remaining available amount. Calculation method: Limit - Used. A valid value is returned only when the request parameter DisplayFields includes available. If not requested, it is not returned or is empty.
 * @method void setAvailable(integer $Available) Set Current remaining available amount. Calculation method: Limit - Used. A valid value is returned only when the request parameter DisplayFields includes available. If not requested, it is not returned or is empty.
 * @method integer getLimit() Obtain Quota upper limit. Different quota types have different units. It usually represents the number of resources. For timeout-related quotas, it represents seconds.
 * @method void setLimit(integer $Limit) Set Quota upper limit. Different quota types have different units. It usually represents the number of resources. For timeout-related quotas, it represents seconds.
 * @method string getQuotaType() Obtain Quota type, corresponding to the values in the request parameter QuotaTypes. For the meaning of each quota type, see the QuotaTypes parameter description.
 * @method void setQuotaType(string $QuotaType) Set Quota type, corresponding to the values in the request parameter QuotaTypes. For the meaning of each quota type, see the QuotaTypes parameter description.
 * @method string getResourceId() Obtain Resource ID.
 * @method void setResourceId(string $ResourceId) Set Resource ID.
 * @method integer getUsed() Obtain Currently used amount. A valid value is returned only when the request parameter DisplayFields includes used. If not requested, it is not returned or is empty.
 * @method void setUsed(integer $Used) Set Currently used amount. A valid value is returned only when the request parameter DisplayFields includes used. If not requested, it is not returned or is empty.
 */
class QuotaInfo extends AbstractModel
{
    /**
     * @var integer Current remaining available amount. Calculation method: Limit - Used. A valid value is returned only when the request parameter DisplayFields includes available. If not requested, it is not returned or is empty.
     */
    public $Available;

    /**
     * @var integer Quota upper limit. Different quota types have different units. It usually represents the number of resources. For timeout-related quotas, it represents seconds.
     */
    public $Limit;

    /**
     * @var string Quota type, corresponding to the values in the request parameter QuotaTypes. For the meaning of each quota type, see the QuotaTypes parameter description.
     */
    public $QuotaType;

    /**
     * @var string Resource ID.
     */
    public $ResourceId;

    /**
     * @var integer Currently used amount. A valid value is returned only when the request parameter DisplayFields includes used. If not requested, it is not returned or is empty.
     */
    public $Used;

    /**
     * @param integer $Available Current remaining available amount. Calculation method: Limit - Used. A valid value is returned only when the request parameter DisplayFields includes available. If not requested, it is not returned or is empty.
     * @param integer $Limit Quota upper limit. Different quota types have different units. It usually represents the number of resources. For timeout-related quotas, it represents seconds.
     * @param string $QuotaType Quota type, corresponding to the values in the request parameter QuotaTypes. For the meaning of each quota type, see the QuotaTypes parameter description.
     * @param string $ResourceId Resource ID.
     * @param integer $Used Currently used amount. A valid value is returned only when the request parameter DisplayFields includes used. If not requested, it is not returned or is empty.
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
        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
