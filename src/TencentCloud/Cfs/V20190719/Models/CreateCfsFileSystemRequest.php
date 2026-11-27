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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsFileSystem request structure.
 *
 * @method string getZone() Obtain <p>AZ name</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/213/15707??from_cn_redirect=1">Querying the List of AZs</a></p>
 * @method void setZone(string $Zone) Set <p>AZ name</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/213/15707??from_cn_redirect=1">Querying the List of AZs</a></p>
 * @method string getNetInterface() Obtain <p>Network type</p><p>Valid values:</p><ul><li><p>VPC: Virtual Private Cloud</p></li><li><p>CCN: Cloud Connect Network</p></li><li><p>For General-purpose Standard/Performance (including enhanced) and Throughput types, select VPC.</p></li><li><p>For Turbo Standard/Performance types, VPC or CCN can be selected.</p></li><li><p>When Scenario=AgentSandbox, this parameter is not required for creating AgentCFS and will be ignored if passed in.</p></li></ul>
 * @method void setNetInterface(string $NetInterface) Set <p>Network type</p><p>Valid values:</p><ul><li><p>VPC: Virtual Private Cloud</p></li><li><p>CCN: Cloud Connect Network</p></li><li><p>For General-purpose Standard/Performance (including enhanced) and Throughput types, select VPC.</p></li><li><p>For Turbo Standard/Performance types, VPC or CCN can be selected.</p></li><li><p>When Scenario=AgentSandbox, this parameter is not required for creating AgentCFS and will be ignored if passed in.</p></li></ul>
 * @method string getPGroupId() Obtain <p>Permission group ID. A permission group defines a set of allowlisted visitors and operation permissions.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1">DescribeCfsPGroups</a></p><ul><li>pgroupbasic is the default permission group, which allows access and read/write permissions for all IP addresses. </li><li>Note: When Scenario=AgentSandbox, that is, when creating AgentCFS, pgroupbasic (the default permission group) must be passed in. Passing in other values will cause an error.</li></ul>
 * @method void setPGroupId(string $PGroupId) Set <p>Permission group ID. A permission group defines a set of allowlisted visitors and operation permissions.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1">DescribeCfsPGroups</a></p><ul><li>pgroupbasic is the default permission group, which allows access and read/write permissions for all IP addresses. </li><li>Note: When Scenario=AgentSandbox, that is, when creating AgentCFS, pgroupbasic (the default permission group) must be passed in. Passing in other values will cause an error.</li></ul>
 * @method string getProtocol() Obtain <p>File system protocol type</p><p>Valid values:</p><ul><li>NFS: Instances of General-purpose Standard (including enhanced) and General-purpose Performance (including enhanced) types can be created with this protocol.</li><li>CIFS: The SMB protocol. Only General-purpose Standard and Throughput types in certain AZs support this protocol.</li><li>TURBO: Instances of Turbo Standard/Turbo Performance/AgentCFS types can be created with this protocol.</li></ul><p>Default value: NFS</p>
 * @method void setProtocol(string $Protocol) Set <p>File system protocol type</p><p>Valid values:</p><ul><li>NFS: Instances of General-purpose Standard (including enhanced) and General-purpose Performance (including enhanced) types can be created with this protocol.</li><li>CIFS: The SMB protocol. Only General-purpose Standard and Throughput types in certain AZs support this protocol.</li><li>TURBO: Instances of Turbo Standard/Turbo Performance/AgentCFS types can be created with this protocol.</li></ul><p>Default value: NFS</p>
 * @method string getStorageType() Obtain <p>File system storage type. SD indicates General-purpose Standard storage, HP indicates General-purpose Performance storage, TB indicates Turbo Standard, and TP indicates Turbo Performance.</p><p>Valid values:</p><ul><li>SD: General-purpose Standard (including enhanced). For General-purpose Standard, version = v1.5; for General-purpose Standard (enhanced), version = v3.1.</li><li>HP: General-purpose Performance (including enhanced). For General-purpose Performance, version = v1.5; for General-purpose Performance (enhanced), version = v3.1.</li><li>TB: Turbo Standard</li><li>TP: Turbo Performance</li><li>THP: Throughput</li></ul><p>Default value: SD</p>
 * @method void setStorageType(string $StorageType) Set <p>File system storage type. SD indicates General-purpose Standard storage, HP indicates General-purpose Performance storage, TB indicates Turbo Standard, and TP indicates Turbo Performance.</p><p>Valid values:</p><ul><li>SD: General-purpose Standard (including enhanced). For General-purpose Standard, version = v1.5; for General-purpose Standard (enhanced), version = v3.1.</li><li>HP: General-purpose Performance (including enhanced). For General-purpose Performance, version = v1.5; for General-purpose Performance (enhanced), version = v3.1.</li><li>TB: Turbo Standard</li><li>TP: Turbo Performance</li><li>THP: Throughput</li></ul><p>Default value: SD</p>
 * @method string getVpcId() Obtain <p>VPC ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">Querying the List of VPCs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">Querying the List of VPCs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method string getSubnetId() Obtain <p>Subnet ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">Querying the List of Subnets</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">Querying the List of Subnets</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method string getMountIP() Obtain <p>Specifies the IP address. Only VPC networks support this. If this parameter is not specified, an IP address will be randomly assigned from the subnet. Turbo series currently does not support specifying an IP address.</p>
 * @method void setMountIP(string $MountIP) Set <p>Specifies the IP address. Only VPC networks support this. If this parameter is not specified, an IP address will be randomly assigned from the subnet. Turbo series currently does not support specifying an IP address.</p>
 * @method string getFsName() Obtain <p>User-defined file system name</p>
 * @method void setFsName(string $FsName) Set <p>User-defined file system name</p>
 * @method boolean getEncrypted() Obtain <p>Indicates whether the file system is encrypted. If this parameter is left empty, the file system is not encrypted by default.</p>
 * @method void setEncrypted(boolean $Encrypted) Set <p>Indicates whether the file system is encrypted. If this parameter is left empty, the file system is not encrypted by default.</p>
 * @method array getResourceTags() Obtain <p>File system tag</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>File system tag</p>
 * @method string getClientToken() Obtain <p>String used to ensure the idempotency of the request. This string is generated by the customer and must be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. The string used to ensure idempotency expires after 2 hours.</p>
 * @method void setClientToken(string $ClientToken) Set <p>String used to ensure the idempotency of the request. This string is generated by the customer and must be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. The string used to ensure idempotency expires after 2 hours.</p>
 * @method string getCcnId() Obtain <p>CCN ID. This field is required if CCN is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1">Querying the List of CCNs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method void setCcnId(string $CcnId) Set <p>CCN ID. This field is required if CCN is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1">Querying the List of CCNs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method string getCidrBlock() Obtain <p>CIDR block used by CFS in the CCN. This field is required if CCN is selected as the network type, and it cannot conflict with CIDR blocks already bound in the CCN.</p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method void setCidrBlock(string $CidrBlock) Set <p>CIDR block used by CFS in the CCN. This field is required if CCN is selected as the network type, and it cannot conflict with CIDR blocks already bound in the CCN.</p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
 * @method integer getCapacity() Obtain <p>File system capacity. This parameter is required for Turbo series.</p><p>Unit: GiB</p><p>Turbo Standard starts at 20 TiB, that is, 20,480 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB. Turbo Performance starts at 10 TiB, that is, 10,240 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB.</p>
 * @method void setCapacity(integer $Capacity) Set <p>File system capacity. This parameter is required for Turbo series.</p><p>Unit: GiB</p><p>Turbo Standard starts at 20 TiB, that is, 20,480 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB. Turbo Performance starts at 10 TiB, that is, 10,240 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB.</p>
 * @method string getSnapshotId() Obtain <p>File system snapshot ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1">DescribeCfsSnapshots</a></p>
 * @method void setSnapshotId(string $SnapshotId) Set <p>File system snapshot ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1">DescribeCfsSnapshots</a></p>
 * @method string getAutoSnapshotPolicyId() Obtain <p>Scheduled snapshot policy ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1">DescribeAutoSnapshotPolicies</a></p>
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set <p>Scheduled snapshot policy ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1">DescribeAutoSnapshotPolicies</a></p>
 * @method boolean getEnableAutoScaleUp() Obtain <p>Indicates whether to enable the automatic scale-out policy. Only turbo file storage supports this feature.</p>
 * @method void setEnableAutoScaleUp(boolean $EnableAutoScaleUp) Set <p>Indicates whether to enable the automatic scale-out policy. Only turbo file storage supports this feature.</p>
 * @method string getCfsVersion() Obtain <p>File system version.</p><p>Valid values:</p><ul><li>v1.5: Creates a General Purpose Standard or General Purpose Performance file system.</li><li>v3.1: Creates a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system. This parameter is required if you want to create an enhanced file system.</li><li>v4.0: Creates a Turbo Standard, Turbo Performance, or Throughput file system. This parameter is optional.</li></ul><p>To create a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system, the root account must be added to the allowlist. Contact us if needed.</p>
 * @method void setCfsVersion(string $CfsVersion) Set <p>File system version.</p><p>Valid values:</p><ul><li>v1.5: Creates a General Purpose Standard or General Purpose Performance file system.</li><li>v3.1: Creates a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system. This parameter is required if you want to create an enhanced file system.</li><li>v4.0: Creates a Turbo Standard, Turbo Performance, or Throughput file system. This parameter is optional.</li></ul><p>To create a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system, the root account must be added to the allowlist. Contact us if needed.</p>
 * @method string getMetaType() Obtain <p>Metadata type of the Turbo file system.</p><p>Valid values:</p><ul><li>basic: Creates standard metadata.</li><li>enhanced: Creates enhanced metadata.</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/582/116836?from_cn_redirect=1">Turbo File System Metadata Types</a></p>
 * @method void setMetaType(string $MetaType) Set <p>Metadata type of the Turbo file system.</p><p>Valid values:</p><ul><li>basic: Creates standard metadata.</li><li>enhanced: Creates enhanced metadata.</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/582/116836?from_cn_redirect=1">Turbo File System Metadata Types</a></p>
 * @method string getScenario() Obtain <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Required when creating AgentCFS.</li></ul>
 * @method void setScenario(string $Scenario) Set <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Required when creating AgentCFS.</li></ul>
 */
class CreateCfsFileSystemRequest extends AbstractModel
{
    /**
     * @var string <p>AZ name</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/213/15707??from_cn_redirect=1">Querying the List of AZs</a></p>
     */
    public $Zone;

    /**
     * @var string <p>Network type</p><p>Valid values:</p><ul><li><p>VPC: Virtual Private Cloud</p></li><li><p>CCN: Cloud Connect Network</p></li><li><p>For General-purpose Standard/Performance (including enhanced) and Throughput types, select VPC.</p></li><li><p>For Turbo Standard/Performance types, VPC or CCN can be selected.</p></li><li><p>When Scenario=AgentSandbox, this parameter is not required for creating AgentCFS and will be ignored if passed in.</p></li></ul>
     */
    public $NetInterface;

    /**
     * @var string <p>Permission group ID. A permission group defines a set of allowlisted visitors and operation permissions.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1">DescribeCfsPGroups</a></p><ul><li>pgroupbasic is the default permission group, which allows access and read/write permissions for all IP addresses. </li><li>Note: When Scenario=AgentSandbox, that is, when creating AgentCFS, pgroupbasic (the default permission group) must be passed in. Passing in other values will cause an error.</li></ul>
     */
    public $PGroupId;

    /**
     * @var string <p>File system protocol type</p><p>Valid values:</p><ul><li>NFS: Instances of General-purpose Standard (including enhanced) and General-purpose Performance (including enhanced) types can be created with this protocol.</li><li>CIFS: The SMB protocol. Only General-purpose Standard and Throughput types in certain AZs support this protocol.</li><li>TURBO: Instances of Turbo Standard/Turbo Performance/AgentCFS types can be created with this protocol.</li></ul><p>Default value: NFS</p>
     */
    public $Protocol;

    /**
     * @var string <p>File system storage type. SD indicates General-purpose Standard storage, HP indicates General-purpose Performance storage, TB indicates Turbo Standard, and TP indicates Turbo Performance.</p><p>Valid values:</p><ul><li>SD: General-purpose Standard (including enhanced). For General-purpose Standard, version = v1.5; for General-purpose Standard (enhanced), version = v3.1.</li><li>HP: General-purpose Performance (including enhanced). For General-purpose Performance, version = v1.5; for General-purpose Performance (enhanced), version = v3.1.</li><li>TB: Turbo Standard</li><li>TP: Turbo Performance</li><li>THP: Throughput</li></ul><p>Default value: SD</p>
     */
    public $StorageType;

    /**
     * @var string <p>VPC ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">Querying the List of VPCs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">Querying the List of Subnets</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Specifies the IP address. Only VPC networks support this. If this parameter is not specified, an IP address will be randomly assigned from the subnet. Turbo series currently does not support specifying an IP address.</p>
     */
    public $MountIP;

    /**
     * @var string <p>User-defined file system name</p>
     */
    public $FsName;

    /**
     * @var boolean <p>Indicates whether the file system is encrypted. If this parameter is left empty, the file system is not encrypted by default.</p>
     */
    public $Encrypted;

    /**
     * @var array <p>File system tag</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>String used to ensure the idempotency of the request. This string is generated by the customer and must be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. The string used to ensure idempotency expires after 2 hours.</p>
     */
    public $ClientToken;

    /**
     * @var string <p>CCN ID. This field is required if CCN is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1">Querying the List of CCNs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     */
    public $CcnId;

    /**
     * @var string <p>CIDR block used by CFS in the CCN. This field is required if CCN is selected as the network type, and it cannot conflict with CIDR blocks already bound in the CCN.</p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     */
    public $CidrBlock;

    /**
     * @var integer <p>File system capacity. This parameter is required for Turbo series.</p><p>Unit: GiB</p><p>Turbo Standard starts at 20 TiB, that is, 20,480 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB. Turbo Performance starts at 10 TiB, that is, 10,240 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB.</p>
     */
    public $Capacity;

    /**
     * @var string <p>File system snapshot ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1">DescribeCfsSnapshots</a></p>
     */
    public $SnapshotId;

    /**
     * @var string <p>Scheduled snapshot policy ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1">DescribeAutoSnapshotPolicies</a></p>
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var boolean <p>Indicates whether to enable the automatic scale-out policy. Only turbo file storage supports this feature.</p>
     */
    public $EnableAutoScaleUp;

    /**
     * @var string <p>File system version.</p><p>Valid values:</p><ul><li>v1.5: Creates a General Purpose Standard or General Purpose Performance file system.</li><li>v3.1: Creates a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system. This parameter is required if you want to create an enhanced file system.</li><li>v4.0: Creates a Turbo Standard, Turbo Performance, or Throughput file system. This parameter is optional.</li></ul><p>To create a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system, the root account must be added to the allowlist. Contact us if needed.</p>
     */
    public $CfsVersion;

    /**
     * @var string <p>Metadata type of the Turbo file system.</p><p>Valid values:</p><ul><li>basic: Creates standard metadata.</li><li>enhanced: Creates enhanced metadata.</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/582/116836?from_cn_redirect=1">Turbo File System Metadata Types</a></p>
     */
    public $MetaType;

    /**
     * @var string <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Required when creating AgentCFS.</li></ul>
     */
    public $Scenario;

    /**
     * @param string $Zone <p>AZ name</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/213/15707??from_cn_redirect=1">Querying the List of AZs</a></p>
     * @param string $NetInterface <p>Network type</p><p>Valid values:</p><ul><li><p>VPC: Virtual Private Cloud</p></li><li><p>CCN: Cloud Connect Network</p></li><li><p>For General-purpose Standard/Performance (including enhanced) and Throughput types, select VPC.</p></li><li><p>For Turbo Standard/Performance types, VPC or CCN can be selected.</p></li><li><p>When Scenario=AgentSandbox, this parameter is not required for creating AgentCFS and will be ignored if passed in.</p></li></ul>
     * @param string $PGroupId <p>Permission group ID. A permission group defines a set of allowlisted visitors and operation permissions.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1">DescribeCfsPGroups</a></p><ul><li>pgroupbasic is the default permission group, which allows access and read/write permissions for all IP addresses. </li><li>Note: When Scenario=AgentSandbox, that is, when creating AgentCFS, pgroupbasic (the default permission group) must be passed in. Passing in other values will cause an error.</li></ul>
     * @param string $Protocol <p>File system protocol type</p><p>Valid values:</p><ul><li>NFS: Instances of General-purpose Standard (including enhanced) and General-purpose Performance (including enhanced) types can be created with this protocol.</li><li>CIFS: The SMB protocol. Only General-purpose Standard and Throughput types in certain AZs support this protocol.</li><li>TURBO: Instances of Turbo Standard/Turbo Performance/AgentCFS types can be created with this protocol.</li></ul><p>Default value: NFS</p>
     * @param string $StorageType <p>File system storage type. SD indicates General-purpose Standard storage, HP indicates General-purpose Performance storage, TB indicates Turbo Standard, and TP indicates Turbo Performance.</p><p>Valid values:</p><ul><li>SD: General-purpose Standard (including enhanced). For General-purpose Standard, version = v1.5; for General-purpose Standard (enhanced), version = v3.1.</li><li>HP: General-purpose Performance (including enhanced). For General-purpose Performance, version = v1.5; for General-purpose Performance (enhanced), version = v3.1.</li><li>TB: Turbo Standard</li><li>TP: Turbo Performance</li><li>THP: Throughput</li></ul><p>Default value: SD</p>
     * @param string $VpcId <p>VPC ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1">Querying the List of VPCs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     * @param string $SubnetId <p>Subnet ID. This field is required if VPC is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1">Querying the List of Subnets</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     * @param string $MountIP <p>Specifies the IP address. Only VPC networks support this. If this parameter is not specified, an IP address will be randomly assigned from the subnet. Turbo series currently does not support specifying an IP address.</p>
     * @param string $FsName <p>User-defined file system name</p>
     * @param boolean $Encrypted <p>Indicates whether the file system is encrypted. If this parameter is left empty, the file system is not encrypted by default.</p>
     * @param array $ResourceTags <p>File system tag</p>
     * @param string $ClientToken <p>String used to ensure the idempotency of the request. This string is generated by the customer and must be unique across different requests, with a maximum length of 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. The string used to ensure idempotency expires after 2 hours.</p>
     * @param string $CcnId <p>CCN ID. This field is required if CCN is selected as the network type.</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1">Querying the List of CCNs</a></p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     * @param string $CidrBlock <p>CIDR block used by CFS in the CCN. This field is required if CCN is selected as the network type, and it cannot conflict with CIDR blocks already bound in the CCN.</p><p>When Scenario=AgentSandbox, that is, when creating AgentCFS, this parameter is not required and will be ignored if passed in.</p>
     * @param integer $Capacity <p>File system capacity. This parameter is required for Turbo series.</p><p>Unit: GiB</p><p>Turbo Standard starts at 20 TiB, that is, 20,480 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB. Turbo Performance starts at 10 TiB, that is, 10,240 GiB, with a scale-out step of 10 TiB, that is, 10,240 GiB.</p>
     * @param string $SnapshotId <p>File system snapshot ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80206?from_cn_redirect=1">DescribeCfsSnapshots</a></p>
     * @param string $AutoSnapshotPolicyId <p>Scheduled snapshot policy ID</p><p>For valid values, see <a href="https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1">DescribeAutoSnapshotPolicies</a></p>
     * @param boolean $EnableAutoScaleUp <p>Indicates whether to enable the automatic scale-out policy. Only turbo file storage supports this feature.</p>
     * @param string $CfsVersion <p>File system version.</p><p>Valid values:</p><ul><li>v1.5: Creates a General Purpose Standard or General Purpose Performance file system.</li><li>v3.1: Creates a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system. This parameter is required if you want to create an enhanced file system.</li><li>v4.0: Creates a Turbo Standard, Turbo Performance, or Throughput file system. This parameter is optional.</li></ul><p>To create a General Purpose Standard (Enhanced) or General Purpose Performance (Enhanced) file system, the root account must be added to the allowlist. Contact us if needed.</p>
     * @param string $MetaType <p>Metadata type of the Turbo file system.</p><p>Valid values:</p><ul><li>basic: Creates standard metadata.</li><li>enhanced: Creates enhanced metadata.</li></ul><p>For details, see <a href="https://www.tencentcloud.com/document/product/582/116836?from_cn_redirect=1">Turbo File System Metadata Types</a></p>
     * @param string $Scenario <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Required when creating AgentCFS.</li></ul>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NetInterface",$param) and $param["NetInterface"] !== null) {
            $this->NetInterface = $param["NetInterface"];
        }

        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MountIP",$param) and $param["MountIP"] !== null) {
            $this->MountIP = $param["MountIP"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("EnableAutoScaleUp",$param) and $param["EnableAutoScaleUp"] !== null) {
            $this->EnableAutoScaleUp = $param["EnableAutoScaleUp"];
        }

        if (array_key_exists("CfsVersion",$param) and $param["CfsVersion"] !== null) {
            $this->CfsVersion = $param["CfsVersion"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }
    }
}
