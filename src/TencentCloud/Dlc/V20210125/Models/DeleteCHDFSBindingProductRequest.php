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
 * DeleteCHDFSBindingProduct request structure.
 *
 * @method string getMountPoint() Obtain Names of metadata acceleration buckets to be unbound
 * @method void setMountPoint(string $MountPoint) Set Names of metadata acceleration buckets to be unbound
 * @method string getBucketType() Obtain Types of buckets which are divided into cos and lakefs
 * @method void setBucketType(string $BucketType) Set Types of buckets which are divided into cos and lakefs
 * @method string getProductName() Obtain Product name
 * @method void setProductName(string $ProductName) Set Product name
 * @method string getEngineName() Obtain Engine name. When ProductName selects DLC products, this parameter must be specified. When ProductName selects other products, it can be unspecified.
 * @method void setEngineName(string $EngineName) Set Engine name. When ProductName selects DLC products, this parameter must be specified. When ProductName selects other products, it can be unspecified.
 * @method array getVpcInfo() Obtain VPC information. When ProductName is other, this parameter must be specified.
 * @method void setVpcInfo(array $VpcInfo) Set VPC information. When ProductName is other, this parameter must be specified.
 */
class DeleteCHDFSBindingProductRequest extends AbstractModel
{
    /**
     * @var string Names of metadata acceleration buckets to be unbound
     */
    public $MountPoint;

    /**
     * @var string Types of buckets which are divided into cos and lakefs
     */
    public $BucketType;

    /**
     * @var string Product name
     */
    public $ProductName;

    /**
     * @var string Engine name. When ProductName selects DLC products, this parameter must be specified. When ProductName selects other products, it can be unspecified.
     */
    public $EngineName;

    /**
     * @var array VPC information. When ProductName is other, this parameter must be specified.
     */
    public $VpcInfo;

    /**
     * @param string $MountPoint Names of metadata acceleration buckets to be unbound
     * @param string $BucketType Types of buckets which are divided into cos and lakefs
     * @param string $ProductName Product name
     * @param string $EngineName Engine name. When ProductName selects DLC products, this parameter must be specified. When ProductName selects other products, it can be unspecified.
     * @param array $VpcInfo VPC information. When ProductName is other, this parameter must be specified.
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
        if (array_key_exists("MountPoint",$param) and $param["MountPoint"] !== null) {
            $this->MountPoint = $param["MountPoint"];
        }

        if (array_key_exists("BucketType",$param) and $param["BucketType"] !== null) {
            $this->BucketType = $param["BucketType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }
    }
}
