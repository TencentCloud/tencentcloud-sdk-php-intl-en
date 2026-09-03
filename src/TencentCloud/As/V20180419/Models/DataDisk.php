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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration information of data disk in launch configuration. If this parameter is not specified, no data disk will be purchased by default. You can specify only one data disk when purchasing it.
 *
 * @method string getDiskType() Obtain <p>Data disk type. For detailed restrictions on data disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>CLOUD_BSSD: universal SSD cloud disk</li>The default value is consistent with the system disk type (SystemDisk.DiskType).
 * @method void setDiskType(string $DiskType) Set <p>Data disk type. For detailed restrictions on data disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>CLOUD_BSSD: universal SSD cloud disk</li>The default value is consistent with the system disk type (SystemDisk.DiskType).
 * @method integer getDiskSize() Obtain <p>Data disk size, in GB. The value range varies according to the data disk type. For specific restrictions, see <a href="https://www.tencentcloud.com/document/product/213/2177?from_cn_redirect=1">CVM instance configuration</a>. Default value: 0, which means that no data disk is purchased. For more restrictions, see the <a href="https://www.tencentcloud.com/document/product/362/5145?from_cn_redirect=1">product documentation</a>.</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Data disk size, in GB. The value range varies according to the data disk type. For specific restrictions, see <a href="https://www.tencentcloud.com/document/product/213/2177?from_cn_redirect=1">CVM instance configuration</a>. Default value: 0, which means that no data disk is purchased. For more restrictions, see the <a href="https://www.tencentcloud.com/document/product/362/5145?from_cn_redirect=1">product documentation</a>.</p>
 * @method string getSnapshotId() Obtain <p>Data disk snapshot ID, obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1">DescribeSnapshots</a> API.</p>
 * @method void setSnapshotId(string $SnapshotId) Set <p>Data disk snapshot ID, obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1">DescribeSnapshots</a> API.</p>
 * @method boolean getDeleteWithInstance() Obtain <p>Whether the data disk is destroyed with the instance. Value ranges from:</p><li>TRUE: When the instance is terminated, destroy the data disk. Only hourly postpaid cloud disks are supported.</li><li>FALSE: When the instance is terminated, retain the data disk.</li>
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) Set <p>Whether the data disk is destroyed with the instance. Value ranges from:</p><li>TRUE: When the instance is terminated, destroy the data disk. Only hourly postpaid cloud disks are supported.</li><li>FALSE: When the instance is terminated, retain the data disk.</li>
 * @method boolean getEncrypt() Obtain <p>Whether to encrypt the data disk. TRUE means encrypted, FALSE means not encrypted; the specific disk type, region, and KMS rules are validated by CVM.</p>
 * @method void setEncrypt(boolean $Encrypt) Set <p>Whether to encrypt the data disk. TRUE means encrypted, FALSE means not encrypted; the specific disk type, region, and KMS rules are validated by CVM.</p>
 * @method integer getThroughputPerformance() Obtain <p>Cloud disk performance, unit: MB/s. Using this parameter can purchase additional performance for cloud disks. For feature introduction and type limitations, see: <a href="https://www.tencentcloud.com/document/product/362/51896?from_cn_redirect=1#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD">enhanced SSD cloud disk additional performance note</a>.<br>Currently only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD cloud disks (CLOUD_HSSD) with capacity &gt; 460 GB.</p>
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set <p>Cloud disk performance, unit: MB/s. Using this parameter can purchase additional performance for cloud disks. For feature introduction and type limitations, see: <a href="https://www.tencentcloud.com/document/product/362/51896?from_cn_redirect=1#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD">enhanced SSD cloud disk additional performance note</a>.<br>Currently only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD cloud disks (CLOUD_HSSD) with capacity &gt; 460 GB.</p>
 * @method boolean getBurstPerformance() Obtain <p>Burst performance. Whether to enable burst performance. The default value is false. Currently, this parameter only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity greater than 460 GB.<br>Note: In beta test. Requires ticket submission before usage.</p>
 * @method void setBurstPerformance(boolean $BurstPerformance) Set <p>Burst performance. Whether to enable burst performance. The default value is false. Currently, this parameter only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity greater than 460 GB.<br>Note: In beta test. Requires ticket submission before usage.</p>
 * @method string getKmsKeyId() Obtain <p>KMS Key ID used for data disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
 * @method void setKmsKeyId(string $KmsKeyId) Set <p>KMS Key ID used for data disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
 */
class DataDisk extends AbstractModel
{
    /**
     * @var string <p>Data disk type. For detailed restrictions on data disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>CLOUD_BSSD: universal SSD cloud disk</li>The default value is consistent with the system disk type (SystemDisk.DiskType).
     */
    public $DiskType;

    /**
     * @var integer <p>Data disk size, in GB. The value range varies according to the data disk type. For specific restrictions, see <a href="https://www.tencentcloud.com/document/product/213/2177?from_cn_redirect=1">CVM instance configuration</a>. Default value: 0, which means that no data disk is purchased. For more restrictions, see the <a href="https://www.tencentcloud.com/document/product/362/5145?from_cn_redirect=1">product documentation</a>.</p>
     */
    public $DiskSize;

    /**
     * @var string <p>Data disk snapshot ID, obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1">DescribeSnapshots</a> API.</p>
     */
    public $SnapshotId;

    /**
     * @var boolean <p>Whether the data disk is destroyed with the instance. Value ranges from:</p><li>TRUE: When the instance is terminated, destroy the data disk. Only hourly postpaid cloud disks are supported.</li><li>FALSE: When the instance is terminated, retain the data disk.</li>
     */
    public $DeleteWithInstance;

    /**
     * @var boolean <p>Whether to encrypt the data disk. TRUE means encrypted, FALSE means not encrypted; the specific disk type, region, and KMS rules are validated by CVM.</p>
     */
    public $Encrypt;

    /**
     * @var integer <p>Cloud disk performance, unit: MB/s. Using this parameter can purchase additional performance for cloud disks. For feature introduction and type limitations, see: <a href="https://www.tencentcloud.com/document/product/362/51896?from_cn_redirect=1#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD">enhanced SSD cloud disk additional performance note</a>.<br>Currently only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD cloud disks (CLOUD_HSSD) with capacity &gt; 460 GB.</p>
     */
    public $ThroughputPerformance;

    /**
     * @var boolean <p>Burst performance. Whether to enable burst performance. The default value is false. Currently, this parameter only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity greater than 460 GB.<br>Note: In beta test. Requires ticket submission before usage.</p>
     */
    public $BurstPerformance;

    /**
     * @var string <p>KMS Key ID used for data disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
     */
    public $KmsKeyId;

    /**
     * @param string $DiskType <p>Data disk type. For detailed restrictions on data disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>CLOUD_BSSD: universal SSD cloud disk</li>The default value is consistent with the system disk type (SystemDisk.DiskType).
     * @param integer $DiskSize <p>Data disk size, in GB. The value range varies according to the data disk type. For specific restrictions, see <a href="https://www.tencentcloud.com/document/product/213/2177?from_cn_redirect=1">CVM instance configuration</a>. Default value: 0, which means that no data disk is purchased. For more restrictions, see the <a href="https://www.tencentcloud.com/document/product/362/5145?from_cn_redirect=1">product documentation</a>.</p>
     * @param string $SnapshotId <p>Data disk snapshot ID, obtain this parameter through the <a href="https://www.tencentcloud.com/document/product/362/15647?from_cn_redirect=1">DescribeSnapshots</a> API.</p>
     * @param boolean $DeleteWithInstance <p>Whether the data disk is destroyed with the instance. Value ranges from:</p><li>TRUE: When the instance is terminated, destroy the data disk. Only hourly postpaid cloud disks are supported.</li><li>FALSE: When the instance is terminated, retain the data disk.</li>
     * @param boolean $Encrypt <p>Whether to encrypt the data disk. TRUE means encrypted, FALSE means not encrypted; the specific disk type, region, and KMS rules are validated by CVM.</p>
     * @param integer $ThroughputPerformance <p>Cloud disk performance, unit: MB/s. Using this parameter can purchase additional performance for cloud disks. For feature introduction and type limitations, see: <a href="https://www.tencentcloud.com/document/product/362/51896?from_cn_redirect=1#.E5.A2.9E.E5.BC.BA.E5.9E.8B-ssd-.E4.BA.91.E7.A1.AC.E7.9B.98.E9.A2.9D.E5.A4.96.E6.80.A7.E8.83.BD">enhanced SSD cloud disk additional performance note</a>.<br>Currently only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD cloud disks (CLOUD_HSSD) with capacity &gt; 460 GB.</p>
     * @param boolean $BurstPerformance <p>Burst performance. Whether to enable burst performance. The default value is false. Currently, this parameter only supports Extreme CBS (CLOUD_TSSD) and enhanced SSD CLOUD disk (CLOUD_HSSD) with capacity greater than 460 GB.<br>Note: In beta test. Requires ticket submission before usage.</p>
     * @param string $KmsKeyId <p>KMS Key ID used for data disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
