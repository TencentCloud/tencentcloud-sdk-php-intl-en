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
 * @method string getZone() Obtain AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
 * @method void setZone(string $Zone) Set AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
 * @method string getNetInterface() Obtain Network type. Valid values: `VPC` and `CCN`. Select `VPC` for a Standard or High-Performance file system, and `CCN` for a Standard Turbo or High-Performance Turbo one.
 * @method void setNetInterface(string $NetInterface) Set Network type. Valid values: `VPC` and `CCN`. Select `VPC` for a Standard or High-Performance file system, and `CCN` for a Standard Turbo or High-Performance Turbo one.
 * @method string getPGroupId() Obtain Permission group ID. pgroupbasic is the default permission group. obtain through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1) to query the permission group list.
 * @method void setPGroupId(string $PGroupId) Set Permission group ID. pgroupbasic is the default permission group. obtain through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1) to query the permission group list.
 * @method string getProtocol() Obtain File system protocol type. valid values: NFS, CIFS, and TURBO. if left blank, NFS by default. the TURBO series must select TURBO. NFS and CIFS are not supported.
 * @method void setProtocol(string $Protocol) Set File system protocol type. valid values: NFS, CIFS, and TURBO. if left blank, NFS by default. the TURBO series must select TURBO. NFS and CIFS are not supported.
 * @method string getStorageType() Obtain Storage type of the file system. Valid values: `SD` (Standard), `HP` (High-Performance), `TB` (Standard Turbo), and `TP` (High-Performance Turbo). Default value: `SD`.
 * @method void setStorageType(string $StorageType) Set Storage type of the file system. Valid values: `SD` (Standard), `HP` (High-Performance), `TB` (Standard Turbo), and `TP` (High-Performance Turbo). Default value: `SD`.
 * @method string getVpcId() Obtain Private network (VPC) ID. if the network type is VPC, this field must be specified. obtain it by querying the private network interface.
[DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1)
 * @method void setVpcId(string $VpcId) Set Private network (VPC) ID. if the network type is VPC, this field must be specified. obtain it by querying the private network interface.
[DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1)
 * @method string getSubnetId() Obtain Subnet ID. this field must be specified if the network type is VPC. obtain through the api for querying subnets.
[DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1)
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. this field must be specified if the network type is VPC. obtain through the api for querying subnets.
[DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1)
 * @method string getMountIP() Obtain IP address (this parameter supports only the VPC network type, and the Turbo series is not supported). If this parameter is left empty, a random IP in the subnet will be assigned.
 * @method void setMountIP(string $MountIP) Set IP address (this parameter supports only the VPC network type, and the Turbo series is not supported). If this parameter is left empty, a random IP in the subnet will be assigned.
 * @method string getFsName() Obtain Custom file system name
 * @method void setFsName(string $FsName) Set Custom file system name
 * @method array getResourceTags() Obtain File system tag
 * @method void setResourceTags(array $ResourceTags) Set File system tag
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
 * @method string getCcnId() Obtain Cloud connect network ID. this field must be specified if the network type is CCN. obtain it by querying the CCN list through the api.
[DescribeCcns](https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1)

 * @method void setCcnId(string $CcnId) Set Cloud connect network ID. this field must be specified if the network type is CCN. obtain it by querying the CCN list through the api.
[DescribeCcns](https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1)

 * @method string getCidrBlock() Obtain CCN IP range used by the CFS (required if the network type is CCN), which cannot conflict with other IP ranges bound in CCN
 * @method void setCidrBlock(string $CidrBlock) Set CCN IP range used by the CFS (required if the network type is CCN), which cannot conflict with other IP ranges bound in CCN
 * @method integer getCapacity() Obtain File system capacity, required for the turbo series, in GiB. turbo standard type in GB, starting from 20 TiB (20480 GiB); scaling increment 10 TiB (10240 GiB). turbo performance type starts from 10 TiB (10240 GiB); capacity expansion step 10 TiB (10240 GiB).
 * @method void setCapacity(integer $Capacity) Set File system capacity, required for the turbo series, in GiB. turbo standard type in GB, starting from 20 TiB (20480 GiB); scaling increment 10 TiB (10240 GiB). turbo performance type starts from 10 TiB (10240 GiB); capacity expansion step 10 TiB (10240 GiB).
 * @method string getSnapshotId() Obtain File system snapshot ID. this parameter can be obtained by querying the snapshot list.
[DescribeCfsSnapshots](https://www.tencentcloud.com/document/product/582/80206?from_cn_redirect=1)
 * @method void setSnapshotId(string $SnapshotId) Set File system snapshot ID. this parameter can be obtained by querying the snapshot list.
[DescribeCfsSnapshots](https://www.tencentcloud.com/document/product/582/80206?from_cn_redirect=1)
 * @method string getAutoSnapshotPolicyId() Obtain Scheduled snapshot policy ID, which can be obtained by querying the snapshot policy information.
[DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1)
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Scheduled snapshot policy ID, which can be obtained by querying the snapshot policy information.
[DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1)
 * @method boolean getEnableAutoScaleUp() Obtain Whether default expansion is enabled. only turbo file storage supports this feature.
 * @method void setEnableAutoScaleUp(boolean $EnableAutoScaleUp) Set Whether default expansion is enabled. only turbo file storage supports this feature.
 * @method string getCfsVersion() Obtain v1.5: create a standard edition general file system.
v3.1: create an enhanced general file system.
Description: the enhanced universal system requires enabling the allowlist to use. if needed, submit a ticket to contact us.
 * @method void setCfsVersion(string $CfsVersion) Set v1.5: create a standard edition general file system.
v3.1: create an enhanced general file system.
Description: the enhanced universal system requires enabling the allowlist to use. if needed, submit a ticket to contact us.
 * @method string getMetaType() Obtain turbo file system metadata attribute.
basic: creates metadata of the standard type.
Enhanced: creates enhanced metadata.
 * @method void setMetaType(string $MetaType) Set turbo file system metadata attribute.
basic: creates metadata of the standard type.
Enhanced: creates enhanced metadata.
 */
class CreateCfsFileSystemRequest extends AbstractModel
{
    /**
     * @var string AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
     */
    public $Zone;

    /**
     * @var string Network type. Valid values: `VPC` and `CCN`. Select `VPC` for a Standard or High-Performance file system, and `CCN` for a Standard Turbo or High-Performance Turbo one.
     */
    public $NetInterface;

    /**
     * @var string Permission group ID. pgroupbasic is the default permission group. obtain through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1) to query the permission group list.
     */
    public $PGroupId;

    /**
     * @var string File system protocol type. valid values: NFS, CIFS, and TURBO. if left blank, NFS by default. the TURBO series must select TURBO. NFS and CIFS are not supported.
     */
    public $Protocol;

    /**
     * @var string Storage type of the file system. Valid values: `SD` (Standard), `HP` (High-Performance), `TB` (Standard Turbo), and `TP` (High-Performance Turbo). Default value: `SD`.
     */
    public $StorageType;

    /**
     * @var string Private network (VPC) ID. if the network type is VPC, this field must be specified. obtain it by querying the private network interface.
[DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1)
     */
    public $VpcId;

    /**
     * @var string Subnet ID. this field must be specified if the network type is VPC. obtain through the api for querying subnets.
[DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1)
     */
    public $SubnetId;

    /**
     * @var string IP address (this parameter supports only the VPC network type, and the Turbo series is not supported). If this parameter is left empty, a random IP in the subnet will be assigned.
     */
    public $MountIP;

    /**
     * @var string Custom file system name
     */
    public $FsName;

    /**
     * @var array File system tag
     */
    public $ResourceTags;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
     */
    public $ClientToken;

    /**
     * @var string Cloud connect network ID. this field must be specified if the network type is CCN. obtain it by querying the CCN list through the api.
[DescribeCcns](https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1)

     */
    public $CcnId;

    /**
     * @var string CCN IP range used by the CFS (required if the network type is CCN), which cannot conflict with other IP ranges bound in CCN
     */
    public $CidrBlock;

    /**
     * @var integer File system capacity, required for the turbo series, in GiB. turbo standard type in GB, starting from 20 TiB (20480 GiB); scaling increment 10 TiB (10240 GiB). turbo performance type starts from 10 TiB (10240 GiB); capacity expansion step 10 TiB (10240 GiB).
     */
    public $Capacity;

    /**
     * @var string File system snapshot ID. this parameter can be obtained by querying the snapshot list.
[DescribeCfsSnapshots](https://www.tencentcloud.com/document/product/582/80206?from_cn_redirect=1)
     */
    public $SnapshotId;

    /**
     * @var string Scheduled snapshot policy ID, which can be obtained by querying the snapshot policy information.
[DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1)
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var boolean Whether default expansion is enabled. only turbo file storage supports this feature.
     */
    public $EnableAutoScaleUp;

    /**
     * @var string v1.5: create a standard edition general file system.
v3.1: create an enhanced general file system.
Description: the enhanced universal system requires enabling the allowlist to use. if needed, submit a ticket to contact us.
     */
    public $CfsVersion;

    /**
     * @var string turbo file system metadata attribute.
basic: creates metadata of the standard type.
Enhanced: creates enhanced metadata.
     */
    public $MetaType;

    /**
     * @param string $Zone AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
     * @param string $NetInterface Network type. Valid values: `VPC` and `CCN`. Select `VPC` for a Standard or High-Performance file system, and `CCN` for a Standard Turbo or High-Performance Turbo one.
     * @param string $PGroupId Permission group ID. pgroupbasic is the default permission group. obtain through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1) to query the permission group list.
     * @param string $Protocol File system protocol type. valid values: NFS, CIFS, and TURBO. if left blank, NFS by default. the TURBO series must select TURBO. NFS and CIFS are not supported.
     * @param string $StorageType Storage type of the file system. Valid values: `SD` (Standard), `HP` (High-Performance), `TB` (Standard Turbo), and `TP` (High-Performance Turbo). Default value: `SD`.
     * @param string $VpcId Private network (VPC) ID. if the network type is VPC, this field must be specified. obtain it by querying the private network interface.
[DescribeVpcs](https://www.tencentcloud.com/document/product/215/15778?from_cn_redirect=1)
     * @param string $SubnetId Subnet ID. this field must be specified if the network type is VPC. obtain through the api for querying subnets.
[DescribeSubnets](https://www.tencentcloud.com/document/product/215/15784?from_cn_redirect=1)
     * @param string $MountIP IP address (this parameter supports only the VPC network type, and the Turbo series is not supported). If this parameter is left empty, a random IP in the subnet will be assigned.
     * @param string $FsName Custom file system name
     * @param array $ResourceTags File system tag
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
     * @param string $CcnId Cloud connect network ID. this field must be specified if the network type is CCN. obtain it by querying the CCN list through the api.
[DescribeCcns](https://www.tencentcloud.com/document/product/215/19199?from_cn_redirect=1)

     * @param string $CidrBlock CCN IP range used by the CFS (required if the network type is CCN), which cannot conflict with other IP ranges bound in CCN
     * @param integer $Capacity File system capacity, required for the turbo series, in GiB. turbo standard type in GB, starting from 20 TiB (20480 GiB); scaling increment 10 TiB (10240 GiB). turbo performance type starts from 10 TiB (10240 GiB); capacity expansion step 10 TiB (10240 GiB).
     * @param string $SnapshotId File system snapshot ID. this parameter can be obtained by querying the snapshot list.
[DescribeCfsSnapshots](https://www.tencentcloud.com/document/product/582/80206?from_cn_redirect=1)
     * @param string $AutoSnapshotPolicyId Scheduled snapshot policy ID, which can be obtained by querying the snapshot policy information.
[DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/product/582/38157?from_cn_redirect=1)
     * @param boolean $EnableAutoScaleUp Whether default expansion is enabled. only turbo file storage supports this feature.
     * @param string $CfsVersion v1.5: create a standard edition general file system.
v3.1: create an enhanced general file system.
Description: the enhanced universal system requires enabling the allowlist to use. if needed, submit a ticket to contact us.
     * @param string $MetaType turbo file system metadata attribute.
basic: creates metadata of the standard type.
Enhanced: creates enhanced metadata.
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
    }
}
