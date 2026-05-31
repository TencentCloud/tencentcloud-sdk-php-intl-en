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
 * @method array getZoneIds() Obtain <p>Multi-AZ deployment selects three AZs, example [200002,200003,200004]<br>Single-AZ deployment selects one availability zone, example [200002]</p><p>When PULSAR.P2.MINI1 is selected, it only supports two AZs. Other models support three AZs.</p>
 * @method void setZoneIds(array $ZoneIds) Set <p>Multi-AZ deployment selects three AZs, example [200002,200003,200004]<br>Single-AZ deployment selects one availability zone, example [200002]</p><p>When PULSAR.P2.MINI1 is selected, it only supports two AZs. Other models support three AZs.</p>
 * @method string getProductName() Obtain <p>Cluster specification code<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
 * @method void setProductName(string $ProductName) Set <p>Cluster specification code<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
 * @method integer getAutoRenewFlag() Obtain <p>1: true, enable automatic monthly renewal</p><p>0: false, disable automatic monthly renewal</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>1: true, enable automatic monthly renewal</p><p>0: false, disable automatic monthly renewal</p>
 * @method integer getTimeSpan() Obtain <p>Purchase period, value ranges from 1 to 50</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Purchase period, value ranges from 1 to 50</p>
 * @method string getClusterName() Obtain <p>Cluster name cannot be empty. It supports numbers, letters, Chinese, and symbols "-_=:.", with length not exceeding 64 characters.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name cannot be empty. It supports numbers, letters, Chinese, and symbols "-_=:.", with length not exceeding 64 characters.</p>
 * @method integer getAutoVoucher() Obtain <p>Whether to automatically select voucher 1 Yes 0 No Default is 0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Whether to automatically select voucher 1 Yes 0 No Default is 0</p>
 * @method integer getStorageSize() Obtain <p>Storage specification<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
 * @method void setStorageSize(integer $StorageSize) Set <p>Storage specification<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
 * @method VpcInfo getVpc() Obtain <p>vpc network tag</p>
 * @method void setVpc(VpcInfo $Vpc) Set <p>vpc network tag</p>
 * @method array getTags() Obtain <p>Tag list of the cluster (abandoned)</p>
 * @method void setTags(array $Tags) Set <p>Tag list of the cluster (abandoned)</p>
 * @method string getInstanceVersion() Obtain <p>Cluster version information</p>
 * @method void setInstanceVersion(string $InstanceVersion) Set <p>Cluster version information</p>
 */
class CreateProClusterRequest extends AbstractModel
{
    /**
     * @var array <p>Multi-AZ deployment selects three AZs, example [200002,200003,200004]<br>Single-AZ deployment selects one availability zone, example [200002]</p><p>When PULSAR.P2.MINI1 is selected, it only supports two AZs. Other models support three AZs.</p>
     */
    public $ZoneIds;

    /**
     * @var string <p>Cluster specification code<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
     */
    public $ProductName;

    /**
     * @var integer <p>1: true, enable automatic monthly renewal</p><p>0: false, disable automatic monthly renewal</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Purchase period, value ranges from 1 to 50</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>Cluster name cannot be empty. It supports numbers, letters, Chinese, and symbols "-_=:.", with length not exceeding 64 characters.</p>
     */
    public $ClusterName;

    /**
     * @var integer <p>Whether to automatically select voucher 1 Yes 0 No Default is 0</p>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>Storage specification<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
     */
    public $StorageSize;

    /**
     * @var VpcInfo <p>vpc network tag</p>
     */
    public $Vpc;

    /**
     * @var array <p>Tag list of the cluster (abandoned)</p>
     */
    public $Tags;

    /**
     * @var string <p>Cluster version information</p>
     */
    public $InstanceVersion;

    /**
     * @param array $ZoneIds <p>Multi-AZ deployment selects three AZs, example [200002,200003,200004]<br>Single-AZ deployment selects one availability zone, example [200002]</p><p>When PULSAR.P2.MINI1 is selected, it only supports two AZs. Other models support three AZs.</p>
     * @param string $ProductName <p>Cluster specification code<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
     * @param integer $AutoRenewFlag <p>1: true, enable automatic monthly renewal</p><p>0: false, disable automatic monthly renewal</p>
     * @param integer $TimeSpan <p>Purchase period, value ranges from 1 to 50</p>
     * @param string $ClusterName <p>Cluster name cannot be empty. It supports numbers, letters, Chinese, and symbols "-_=:.", with length not exceeding 64 characters.</p>
     * @param integer $AutoVoucher <p>Whether to automatically select voucher 1 Yes 0 No Default is 0</p>
     * @param integer $StorageSize <p>Storage specification<br>See <a href="https://www.tencentcloud.com/document/product/1179/83705?from_cn_redirect=1">professional cluster specifications</a></p>
     * @param VpcInfo $Vpc <p>vpc network tag</p>
     * @param array $Tags <p>Tag list of the cluster (abandoned)</p>
     * @param string $InstanceVersion <p>Cluster version information</p>
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

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
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

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }
    }
}
