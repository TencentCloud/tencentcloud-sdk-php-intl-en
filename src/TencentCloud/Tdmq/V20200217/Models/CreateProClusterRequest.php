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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProCluster request structure.
 *
 * @method array getZoneIds() Obtain Specifies multi-az deployment with three azs, for example [200002,200003,200004].

Single-AZ deployment selects an availability zone. example: [200002].
 * @method void setZoneIds(array $ZoneIds) Set Specifies multi-az deployment with three azs, for example [200002,200003,200004].

Single-AZ deployment selects an availability zone. example: [200002].
 * @method string getProductName() Obtain Cluster specification code.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
 * @method void setProductName(string $ProductName) Set Cluster specification code.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
 * @method integer getStorageSize() Obtain Specifies the storage specification.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
 * @method void setStorageSize(integer $StorageSize) Set Specifies the storage specification.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
 * @method integer getAutoRenewFlag() Obtain `1`: true. enables automatic monthly renewal.

false. disables automatic monthly renewal.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set `1`: true. enables automatic monthly renewal.

false. disables automatic monthly renewal.
 * @method integer getTimeSpan() Obtain Purchase duration. value range: 1–50.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration. value range: 1–50.
 * @method string getClusterName() Obtain Specifies the cluster name, which does not support chinese characters and special characters other than hyphens and underscores, with a length of no more than 64 characters.
 * @method void setClusterName(string $ClusterName) Set Specifies the cluster name, which does not support chinese characters and special characters other than hyphens and underscores, with a length of no more than 64 characters.
 * @method integer getAutoVoucher() Obtain Whether to automatically select voucher. valid values: 1 (yes), 0 (no). default is 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically select voucher. valid values: 1 (yes), 0 (no). default is 0.
 * @method VpcInfo getVpc() Obtain Specifies the vpc network tag.
 * @method void setVpc(VpcInfo $Vpc) Set Specifies the vpc network tag.
 * @method array getTags() Obtain Tag list of the cluster (abandoned).
 * @method void setTags(array $Tags) Set Tag list of the cluster (abandoned).
 */
class CreateProClusterRequest extends AbstractModel
{
    /**
     * @var array Specifies multi-az deployment with three azs, for example [200002,200003,200004].

Single-AZ deployment selects an availability zone. example: [200002].
     */
    public $ZoneIds;

    /**
     * @var string Cluster specification code.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
     */
    public $ProductName;

    /**
     * @var integer Specifies the storage specification.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
     */
    public $StorageSize;

    /**
     * @var integer `1`: true. enables automatic monthly renewal.

false. disables automatic monthly renewal.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Purchase duration. value range: 1–50.
     */
    public $TimeSpan;

    /**
     * @var string Specifies the cluster name, which does not support chinese characters and special characters other than hyphens and underscores, with a length of no more than 64 characters.
     */
    public $ClusterName;

    /**
     * @var integer Whether to automatically select voucher. valid values: 1 (yes), 0 (no). default is 0.
     */
    public $AutoVoucher;

    /**
     * @var VpcInfo Specifies the vpc network tag.
     */
    public $Vpc;

    /**
     * @var array Tag list of the cluster (abandoned).
     */
    public $Tags;

    /**
     * @param array $ZoneIds Specifies multi-az deployment with three azs, for example [200002,200003,200004].

Single-AZ deployment selects an availability zone. example: [200002].
     * @param string $ProductName Cluster specification code.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
     * @param integer $StorageSize Specifies the storage specification.
Refers to professional cluster specifications (https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1).
     * @param integer $AutoRenewFlag `1`: true. enables automatic monthly renewal.

false. disables automatic monthly renewal.
     * @param integer $TimeSpan Purchase duration. value range: 1–50.
     * @param string $ClusterName Specifies the cluster name, which does not support chinese characters and special characters other than hyphens and underscores, with a length of no more than 64 characters.
     * @param integer $AutoVoucher Whether to automatically select voucher. valid values: 1 (yes), 0 (no). default is 0.
     * @param VpcInfo $Vpc Specifies the vpc network tag.
     * @param array $Tags Tag list of the cluster (abandoned).
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = new VpcInfo();
            $this->Vpc->deserialize($param["Vpc"]);
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
