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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network information of the instance.
 *
 * @method array getPrivateIPAddressSet() Obtain Private network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateIPAddressSet(array $PrivateIPAddressSet) Set Private network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPublicIPAddressSet() Obtain Public network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPublicIPAddressSet(array $PublicIPAddressSet) Set Public network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getInstanceNetworkInfoSet() Obtain Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceNetworkInfoSet(array $InstanceNetworkInfoSet) Set Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Internet extends AbstractModel
{
    /**
     * @var array Private network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateIPAddressSet;

    /**
     * @var array Public network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PublicIPAddressSet;

    /**
     * @var array Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceNetworkInfoSet;

    /**
     * @param array $PrivateIPAddressSet Private network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PublicIPAddressSet Public network information list of the instance, with the primary ENI followed by secondary ENIs in the order of binding.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $InstanceNetworkInfoSet Network information of the instance.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PrivateIPAddressSet",$param) and $param["PrivateIPAddressSet"] !== null) {
            $this->PrivateIPAddressSet = [];
            foreach ($param["PrivateIPAddressSet"] as $key => $value){
                $obj = new PrivateIPAddressInfo();
                $obj->deserialize($value);
                array_push($this->PrivateIPAddressSet, $obj);
            }
        }

        if (array_key_exists("PublicIPAddressSet",$param) and $param["PublicIPAddressSet"] !== null) {
            $this->PublicIPAddressSet = [];
            foreach ($param["PublicIPAddressSet"] as $key => $value){
                $obj = new PublicIPAddressInfo();
                $obj->deserialize($value);
                array_push($this->PublicIPAddressSet, $obj);
            }
        }

        if (array_key_exists("InstanceNetworkInfoSet",$param) and $param["InstanceNetworkInfoSet"] !== null) {
            $this->InstanceNetworkInfoSet = [];
            foreach ($param["InstanceNetworkInfoSet"] as $key => $value){
                $obj = new InstanceNetworkInfo();
                $obj->deserialize($value);
                array_push($this->InstanceNetworkInfoSet, $obj);
            }
        }
    }
}
