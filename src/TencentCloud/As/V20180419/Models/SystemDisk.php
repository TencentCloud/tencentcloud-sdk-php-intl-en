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
 * System disk configuration of the launch configuration. If this parameter is not specified, the default value is assigned to it.
 *
 * @method string getDiskType() Obtain <p>System disk type. For restrictions on system disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_BSSD: universal SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>Default value: CLOUD_PREMIUM.</li>
 * @method void setDiskType(string $DiskType) Set <p>System disk type. For restrictions on system disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_BSSD: universal SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>Default value: CLOUD_PREMIUM.</li>
 * @method integer getDiskSize() Obtain <p>System disk size (GB). Default value: 50</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>System disk size (GB). Default value: 50</p>
 * @method boolean getEncrypt() Obtain <p>Whether to encrypt the system disk. TRUE means encrypted, FALSE means not encrypted. The specific disk type, region, and KMS rules are validated by CVM.</p>
 * @method void setEncrypt(boolean $Encrypt) Set <p>Whether to encrypt the system disk. TRUE means encrypted, FALSE means not encrypted. The specific disk type, region, and KMS rules are validated by CVM.</p>
 * @method string getKmsKeyId() Obtain <p>KMS Key ID used for system disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
 * @method void setKmsKeyId(string $KmsKeyId) Set <p>KMS Key ID used for system disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string <p>System disk type. For restrictions on system disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_BSSD: universal SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>Default value: CLOUD_PREMIUM.</li>
     */
    public $DiskType;

    /**
     * @var integer <p>System disk size (GB). Default value: 50</p>
     */
    public $DiskSize;

    /**
     * @var boolean <p>Whether to encrypt the system disk. TRUE means encrypted, FALSE means not encrypted. The specific disk type, region, and KMS rules are validated by CVM.</p>
     */
    public $Encrypt;

    /**
     * @var string <p>KMS Key ID used for system disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
     */
    public $KmsKeyId;

    /**
     * @param string $DiskType <p>System disk type. For restrictions on system disk types, see <a href="https://www.tencentcloud.com/document/product/362/2353?from_cn_redirect=1">Cloud Disk Types</a>. Value range:</p><li>LOCAL_BASIC: local hard disk</li><li>LOCAL_SSD: local SSD</li><li>CLOUD_BASIC: basic cloud disk</li><li>CLOUD_PREMIUM: high-performance cloud block storage</li><li>CLOUD_SSD: SSD cloud disk</li><li>CLOUD_BSSD: universal SSD cloud disk</li><li>CLOUD_HSSD: enhanced SSD cloud disk</li><li>CLOUD_TSSD: ultra-fast SSD CBS</li><li>Default value: CLOUD_PREMIUM.</li>
     * @param integer $DiskSize <p>System disk size (GB). Default value: 50</p>
     * @param boolean $Encrypt <p>Whether to encrypt the system disk. TRUE means encrypted, FALSE means not encrypted. The specific disk type, region, and KMS rules are validated by CVM.</p>
     * @param string $KmsKeyId <p>KMS Key ID used for system disk encryption. The key validity, permission, as well as adaptability to disk type and region are validated by CVM.</p>
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

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}
