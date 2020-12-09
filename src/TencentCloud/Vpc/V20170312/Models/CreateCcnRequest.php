<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCcn request structure.
 *
 * @method string getCcnName() Obtain The name of the CCN. The maximum length is 60 characters.
 * @method void setCcnName(string $CcnName) Set The name of the CCN. The maximum length is 60 characters.
 * @method string getCcnDescription() Obtain The description of the CCN. The maximum length is 100 characters.
 * @method void setCcnDescription(string $CcnDescription) Set The description of the CCN. The maximum length is 100 characters.
 * @method string getQosLevel() Obtain CCN service quality, 'PT': Platinum, 'AU': Gold, 'AG': Silver. The default is 'AU'.
 * @method void setQosLevel(string $QosLevel) Set CCN service quality, 'PT': Platinum, 'AU': Gold, 'AG': Silver. The default is 'AU'.
 * @method string getInstanceChargeType() Obtain The billing method. POSTPAID: postpaid by traffic. Default: POSTPAID.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set The billing method. POSTPAID: postpaid by traffic. Default: POSTPAID.
 * @method string getBandwidthLimitType() Obtain The bandwidth limit type. Valid values: OUTER_REGION_LIMIT: region outbound bandwidth limit; INTER_REGION_LIMIT: inter-region bandwidth limit. Default value: OUTER_REGION_LIMIT. Monthly-subscribed CCN instances only support inter-region bandwidth limit, while pay-as-you-go CCN instances support the both bandwidth limit types.
 * @method void setBandwidthLimitType(string $BandwidthLimitType) Set The bandwidth limit type. Valid values: OUTER_REGION_LIMIT: region outbound bandwidth limit; INTER_REGION_LIMIT: inter-region bandwidth limit. Default value: OUTER_REGION_LIMIT. Monthly-subscribed CCN instances only support inter-region bandwidth limit, while pay-as-you-go CCN instances support the both bandwidth limit types.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateCcnRequest extends AbstractModel
{
    /**
     * @var string The name of the CCN. The maximum length is 60 characters.
     */
    public $CcnName;

    /**
     * @var string The description of the CCN. The maximum length is 100 characters.
     */
    public $CcnDescription;

    /**
     * @var string CCN service quality, 'PT': Platinum, 'AU': Gold, 'AG': Silver. The default is 'AU'.
     */
    public $QosLevel;

    /**
     * @var string The billing method. POSTPAID: postpaid by traffic. Default: POSTPAID.
     */
    public $InstanceChargeType;

    /**
     * @var string The bandwidth limit type. Valid values: OUTER_REGION_LIMIT: region outbound bandwidth limit; INTER_REGION_LIMIT: inter-region bandwidth limit. Default value: OUTER_REGION_LIMIT. Monthly-subscribed CCN instances only support inter-region bandwidth limit, while pay-as-you-go CCN instances support the both bandwidth limit types.
     */
    public $BandwidthLimitType;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $CcnName The name of the CCN. The maximum length is 60 characters.
     * @param string $CcnDescription The description of the CCN. The maximum length is 100 characters.
     * @param string $QosLevel CCN service quality, 'PT': Platinum, 'AU': Gold, 'AG': Silver. The default is 'AU'.
     * @param string $InstanceChargeType The billing method. POSTPAID: postpaid by traffic. Default: POSTPAID.
     * @param string $BandwidthLimitType The bandwidth limit type. Valid values: OUTER_REGION_LIMIT: region outbound bandwidth limit; INTER_REGION_LIMIT: inter-region bandwidth limit. Default value: OUTER_REGION_LIMIT. Monthly-subscribed CCN instances only support inter-region bandwidth limit, while pay-as-you-go CCN instances support the both bandwidth limit types.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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
        if (array_key_exists("CcnName",$param) and $param["CcnName"] !== null) {
            $this->CcnName = $param["CcnName"];
        }

        if (array_key_exists("CcnDescription",$param) and $param["CcnDescription"] !== null) {
            $this->CcnDescription = $param["CcnDescription"];
        }

        if (array_key_exists("QosLevel",$param) and $param["QosLevel"] !== null) {
            $this->QosLevel = $param["QosLevel"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("BandwidthLimitType",$param) and $param["BandwidthLimitType"] !== null) {
            $this->BandwidthLimitType = $param["BandwidthLimitType"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
