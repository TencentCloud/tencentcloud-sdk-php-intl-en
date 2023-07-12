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
 * The information of the cross-region bandwidth limit for CCN instances.
 *
 * @method string getCcnId() Obtain The CCN ID that the bandwidth belongs to.
Note: this field may return null, indicating that no valid value was found.
 * @method void setCcnId(string $CcnId) Set The CCN ID that the bandwidth belongs to.
Note: this field may return null, indicating that no valid value was found.
 * @method string getCreatedTime() Obtain The creation time of the instance.
Note: this field may return null, indicating that no valid value was found.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time of the instance.
Note: this field may return null, indicating that no valid value was found.
 * @method string getExpiredTime() Obtain The expiration time of the instance.
Note: this field may return null, indicating that no valid value was found.
 * @method void setExpiredTime(string $ExpiredTime) Set The expiration time of the instance.
Note: this field may return null, indicating that no valid value was found.
 * @method string getRegionFlowControlId() Obtain The unique ID of the bandwidth instance.
Note: this field may return null, indicating that no valid value was found.
 * @method void setRegionFlowControlId(string $RegionFlowControlId) Set The unique ID of the bandwidth instance.
Note: this field may return null, indicating that no valid value was found.
 * @method string getRenewFlag() Obtain The billing flag.
Note: this field may return null, indicating that no valid value was found.
 * @method void setRenewFlag(string $RenewFlag) Set The billing flag.
Note: this field may return null, indicating that no valid value was found.
 * @method CcnRegionBandwidthLimit getCcnRegionBandwidthLimit() Obtain The information of the bandwidth regions and bandwidth caps. The parameter is only returned for the cross-region limit mode, but not for egress limit.
Note: this field may return null, indicating that no valid value was found.
 * @method void setCcnRegionBandwidthLimit(CcnRegionBandwidthLimit $CcnRegionBandwidthLimit) Set The information of the bandwidth regions and bandwidth caps. The parameter is only returned for the cross-region limit mode, but not for egress limit.
Note: this field may return null, indicating that no valid value was found.
 * @method string getMarketId() Obtain Cloud marketplace instance ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMarketId(string $MarketId) Set Cloud marketplace instance ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTagSet() Obtain The list of tags to be bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTagSet(array $TagSet) Set The list of tags to be bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class CcnBandwidthInfo extends AbstractModel
{
    /**
     * @var string The CCN ID that the bandwidth belongs to.
Note: this field may return null, indicating that no valid value was found.
     */
    public $CcnId;

    /**
     * @var string The creation time of the instance.
Note: this field may return null, indicating that no valid value was found.
     */
    public $CreatedTime;

    /**
     * @var string The expiration time of the instance.
Note: this field may return null, indicating that no valid value was found.
     */
    public $ExpiredTime;

    /**
     * @var string The unique ID of the bandwidth instance.
Note: this field may return null, indicating that no valid value was found.
     */
    public $RegionFlowControlId;

    /**
     * @var string The billing flag.
Note: this field may return null, indicating that no valid value was found.
     */
    public $RenewFlag;

    /**
     * @var CcnRegionBandwidthLimit The information of the bandwidth regions and bandwidth caps. The parameter is only returned for the cross-region limit mode, but not for egress limit.
Note: this field may return null, indicating that no valid value was found.
     */
    public $CcnRegionBandwidthLimit;

    /**
     * @var string Cloud marketplace instance ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MarketId;

    /**
     * @var array The list of tags to be bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TagSet;

    /**
     * @param string $CcnId The CCN ID that the bandwidth belongs to.
Note: this field may return null, indicating that no valid value was found.
     * @param string $CreatedTime The creation time of the instance.
Note: this field may return null, indicating that no valid value was found.
     * @param string $ExpiredTime The expiration time of the instance.
Note: this field may return null, indicating that no valid value was found.
     * @param string $RegionFlowControlId The unique ID of the bandwidth instance.
Note: this field may return null, indicating that no valid value was found.
     * @param string $RenewFlag The billing flag.
Note: this field may return null, indicating that no valid value was found.
     * @param CcnRegionBandwidthLimit $CcnRegionBandwidthLimit The information of the bandwidth regions and bandwidth caps. The parameter is only returned for the cross-region limit mode, but not for egress limit.
Note: this field may return null, indicating that no valid value was found.
     * @param string $MarketId Cloud marketplace instance ID.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TagSet The list of tags to be bound.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RegionFlowControlId",$param) and $param["RegionFlowControlId"] !== null) {
            $this->RegionFlowControlId = $param["RegionFlowControlId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CcnRegionBandwidthLimit",$param) and $param["CcnRegionBandwidthLimit"] !== null) {
            $this->CcnRegionBandwidthLimit = new CcnRegionBandwidthLimit();
            $this->CcnRegionBandwidthLimit->deserialize($param["CcnRegionBandwidthLimit"]);
        }

        if (array_key_exists("MarketId",$param) and $param["MarketId"] !== null) {
            $this->MarketId = $param["MarketId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
