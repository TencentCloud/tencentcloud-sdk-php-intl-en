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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * lane entrance info
 *
 * @method string getEntryType() Obtain // If type == "polarismesh.cn/gateway/tse-gateway", the selector is TSEGatewaySelector.
// type == "polarismesh.cn/gateway/spring-cloud-gateway", selector is ServiceGatewaySelector
// If type == "polarismesh.cn/service", selector is ServiceSelector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEntryType(string $EntryType) Set // If type == "polarismesh.cn/gateway/tse-gateway", the selector is TSEGatewaySelector.
// type == "polarismesh.cn/gateway/spring-cloud-gateway", selector is ServiceGatewaySelector
// If type == "polarismesh.cn/service", selector is ServiceSelector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TSEGatewaySelector getTSEGatewaySelector() Obtain TSE cloud-native gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTSEGatewaySelector(TSEGatewaySelector $TSEGatewaySelector) Set TSE cloud-native gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ServiceGatewaySelector getServiceGatewaySelector() Obtain Microservice gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceGatewaySelector(ServiceGatewaySelector $ServiceGatewaySelector) Set Microservice gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ServiceSelector getServiceSelector() Obtain Standard microservice selector
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceSelector(ServiceSelector $ServiceSelector) Set Standard microservice selector
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LaneTrafficEntry extends AbstractModel
{
    /**
     * @var string // If type == "polarismesh.cn/gateway/tse-gateway", the selector is TSEGatewaySelector.
// type == "polarismesh.cn/gateway/spring-cloud-gateway", selector is ServiceGatewaySelector
// If type == "polarismesh.cn/service", selector is ServiceSelector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EntryType;

    /**
     * @var TSEGatewaySelector TSE cloud-native gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TSEGatewaySelector;

    /**
     * @var ServiceGatewaySelector Microservice gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceGatewaySelector;

    /**
     * @var ServiceSelector Standard microservice selector
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceSelector;

    /**
     * @param string $EntryType // If type == "polarismesh.cn/gateway/tse-gateway", the selector is TSEGatewaySelector.
// type == "polarismesh.cn/gateway/spring-cloud-gateway", selector is ServiceGatewaySelector
// If type == "polarismesh.cn/service", selector is ServiceSelector
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TSEGatewaySelector $TSEGatewaySelector TSE cloud-native gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ServiceGatewaySelector $ServiceGatewaySelector Microservice gateway selector
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ServiceSelector $ServiceSelector Standard microservice selector
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EntryType",$param) and $param["EntryType"] !== null) {
            $this->EntryType = $param["EntryType"];
        }

        if (array_key_exists("TSEGatewaySelector",$param) and $param["TSEGatewaySelector"] !== null) {
            $this->TSEGatewaySelector = new TSEGatewaySelector();
            $this->TSEGatewaySelector->deserialize($param["TSEGatewaySelector"]);
        }

        if (array_key_exists("ServiceGatewaySelector",$param) and $param["ServiceGatewaySelector"] !== null) {
            $this->ServiceGatewaySelector = new ServiceGatewaySelector();
            $this->ServiceGatewaySelector->deserialize($param["ServiceGatewaySelector"]);
        }

        if (array_key_exists("ServiceSelector",$param) and $param["ServiceSelector"] !== null) {
            $this->ServiceSelector = new ServiceSelector();
            $this->ServiceSelector->deserialize($param["ServiceSelector"]);
        }
    }
}
