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
 * Instance ENI IP information array
 *
 * @method array getAddressInfoSet() Obtain Private and public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAddressInfoSet(array $AddressInfoSet) Set Private and public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNetworkInterfaceId() Obtain ENI ID.
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) Set ENI ID.
 * @method string getNetworkInterfaceName() Obtain ENI name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkInterfaceName(string $NetworkInterfaceName) Set ENI name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getPrimary() Obtain Primary ENI attribute. Valid values: true: primary ENI; false: secondary ENI.
 * @method void setPrimary(boolean $Primary) Set Primary ENI attribute. Valid values: true: primary ENI; false: secondary ENI.
 */
class InstanceNetworkInfo extends AbstractModel
{
    /**
     * @var array Private and public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AddressInfoSet;

    /**
     * @var string ENI ID.
     */
    public $NetworkInterfaceId;

    /**
     * @var string ENI name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkInterfaceName;

    /**
     * @var boolean Primary ENI attribute. Valid values: true: primary ENI; false: secondary ENI.
     */
    public $Primary;

    /**
     * @param array $AddressInfoSet Private and public IP information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NetworkInterfaceId ENI ID.
     * @param string $NetworkInterfaceName ENI name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Primary Primary ENI attribute. Valid values: true: primary ENI; false: secondary ENI.
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
        if (array_key_exists("AddressInfoSet",$param) and $param["AddressInfoSet"] !== null) {
            $this->AddressInfoSet = [];
            foreach ($param["AddressInfoSet"] as $key => $value){
                $obj = new AddressInfo();
                $obj->deserialize($value);
                array_push($this->AddressInfoSet, $obj);
            }
        }

        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            $this->NetworkInterfaceName = $param["NetworkInterfaceName"];
        }

        if (array_key_exists("Primary",$param) and $param["Primary"] !== null) {
            $this->Primary = $param["Primary"];
        }
    }
}
