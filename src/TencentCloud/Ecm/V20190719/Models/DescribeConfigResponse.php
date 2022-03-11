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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfig response structure.
 *
 * @method NetworkStorageRange getNetworkStorageRange() Obtain Range of the network bandwidth disk size.
 * @method void setNetworkStorageRange(NetworkStorageRange $NetworkStorageRange) Set Range of the network bandwidth disk size.
 * @method array getImageWhiteSet() Obtain Image OS allowlist.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImageWhiteSet(array $ImageWhiteSet) Set Image OS allowlist.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceNetworkLimitConfigs() Obtain Network quota information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNetworkLimitConfigs(array $InstanceNetworkLimitConfigs) Set Network quota information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ImageLimitConfig getImageLimits() Obtain Image quota information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImageLimits(ImageLimitConfig $ImageLimits) Set Image quota information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getDefaultIPDirect() Obtain Default IP direct access, used in scenarios with direct access parameters such as module creation and virtual machine purchase.
 * @method void setDefaultIPDirect(boolean $DefaultIPDirect) Set Default IP direct access, used in scenarios with direct access parameters such as module creation and virtual machine purchase.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeConfigResponse extends AbstractModel
{
    /**
     * @var NetworkStorageRange Range of the network bandwidth disk size.
     */
    public $NetworkStorageRange;

    /**
     * @var array Image OS allowlist.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ImageWhiteSet;

    /**
     * @var array Network quota information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNetworkLimitConfigs;

    /**
     * @var ImageLimitConfig Image quota information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ImageLimits;

    /**
     * @var boolean Default IP direct access, used in scenarios with direct access parameters such as module creation and virtual machine purchase.
     */
    public $DefaultIPDirect;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param NetworkStorageRange $NetworkStorageRange Range of the network bandwidth disk size.
     * @param array $ImageWhiteSet Image OS allowlist.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceNetworkLimitConfigs Network quota information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ImageLimitConfig $ImageLimits Image quota information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $DefaultIPDirect Default IP direct access, used in scenarios with direct access parameters such as module creation and virtual machine purchase.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("NetworkStorageRange",$param) and $param["NetworkStorageRange"] !== null) {
            $this->NetworkStorageRange = new NetworkStorageRange();
            $this->NetworkStorageRange->deserialize($param["NetworkStorageRange"]);
        }

        if (array_key_exists("ImageWhiteSet",$param) and $param["ImageWhiteSet"] !== null) {
            $this->ImageWhiteSet = $param["ImageWhiteSet"];
        }

        if (array_key_exists("InstanceNetworkLimitConfigs",$param) and $param["InstanceNetworkLimitConfigs"] !== null) {
            $this->InstanceNetworkLimitConfigs = [];
            foreach ($param["InstanceNetworkLimitConfigs"] as $key => $value){
                $obj = new InstanceNetworkLimitConfig();
                $obj->deserialize($value);
                array_push($this->InstanceNetworkLimitConfigs, $obj);
            }
        }

        if (array_key_exists("ImageLimits",$param) and $param["ImageLimits"] !== null) {
            $this->ImageLimits = new ImageLimitConfig();
            $this->ImageLimits->deserialize($param["ImageLimits"]);
        }

        if (array_key_exists("DefaultIPDirect",$param) and $param["DefaultIPDirect"] !== null) {
            $this->DefaultIPDirect = $param["DefaultIPDirect"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
