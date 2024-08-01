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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Binding Self-purchased CHDFS to DLC
 *
 * @method string getProductName() Obtain Product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSuperUser() Obtain User name (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuperUser(array $SuperUser) Set User name (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVpcInfo() Obtain VPC configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcInfo(array $VpcInfo) Set VPC configuration information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsBind() Obtain Whether to bind the bucket (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsBind(boolean $IsBind) Set Whether to bind the bucket (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OtherCHDFSBinding extends AbstractModel
{
    /**
     * @var string Product name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @var array User name (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuperUser;

    /**
     * @var array VPC configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcInfo;

    /**
     * @var boolean Whether to bind the bucket (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsBind;

    /**
     * @param string $ProductName Product name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SuperUser User name (a discarded field)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VpcInfo VPC configuration information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsBind Whether to bind the bucket (a discarded field)
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SuperUser",$param) and $param["SuperUser"] !== null) {
            $this->SuperUser = $param["SuperUser"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new CHDFSProductVpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }

        if (array_key_exists("IsBind",$param) and $param["IsBind"] !== null) {
            $this->IsBind = $param["IsBind"];
        }
    }
}
