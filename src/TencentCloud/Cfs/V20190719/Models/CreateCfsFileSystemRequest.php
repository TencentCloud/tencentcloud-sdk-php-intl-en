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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsFileSystem request structure.
 *
 * @method string getZone() Obtain AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
 * @method void setZone(string $Zone) Set AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
 * @method string getNetInterface() Obtain Network type. Valid values: VPC (VPC), BASIC (basic network)
 * @method void setNetInterface(string $NetInterface) Set Network type. Valid values: VPC (VPC), BASIC (basic network)
 * @method string getPGroupId() Obtain Permission group ID
 * @method void setPGroupId(string $PGroupId) Set Permission group ID
 * @method string getProtocol() Obtain File system protocol type. Valid values: NFS, CIFS. If this parameter is left empty, NFS will be used by default
 * @method void setProtocol(string $Protocol) Set File system protocol type. Valid values: NFS, CIFS. If this parameter is left empty, NFS will be used by default
 * @method string getStorageType() Obtain File system storage class. Valid values: SD (standard), HP (high-performance)
 * @method void setStorageType(string $StorageType) Set File system storage class. Valid values: SD (standard), HP (high-performance)
 * @method string getVpcId() Obtain VPC ID. This field is required if network type is VPC.
 * @method void setVpcId(string $VpcId) Set VPC ID. This field is required if network type is VPC.
 * @method string getSubnetId() Obtain Subnet ID. This field is required if network type is VPC.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. This field is required if network type is VPC.
 * @method string getMountIP() Obtain Specifies an IP address, which is supported only for VPC. If this parameter is left empty, a random IP will be assigned in the subnet
 * @method void setMountIP(string $MountIP) Set Specifies an IP address, which is supported only for VPC. If this parameter is left empty, a random IP will be assigned in the subnet
 * @method string getFsName() Obtain Custom file system name
 * @method void setFsName(string $FsName) Set Custom file system name
 * @method array getResourceTags() Obtain File system tag
 * @method void setResourceTags(array $ResourceTags) Set File system tag
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
 */
class CreateCfsFileSystemRequest extends AbstractModel
{
    /**
     * @var string AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
     */
    public $Zone;

    /**
     * @var string Network type. Valid values: VPC (VPC), BASIC (basic network)
     */
    public $NetInterface;

    /**
     * @var string Permission group ID
     */
    public $PGroupId;

    /**
     * @var string File system protocol type. Valid values: NFS, CIFS. If this parameter is left empty, NFS will be used by default
     */
    public $Protocol;

    /**
     * @var string File system storage class. Valid values: SD (standard), HP (high-performance)
     */
    public $StorageType;

    /**
     * @var string VPC ID. This field is required if network type is VPC.
     */
    public $VpcId;

    /**
     * @var string Subnet ID. This field is required if network type is VPC.
     */
    public $SubnetId;

    /**
     * @var string Specifies an IP address, which is supported only for VPC. If this parameter is left empty, a random IP will be assigned in the subnet
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
     * @param string $Zone AZ name, such as "ap-beijing-1". For the list of regions and AZs, please see [Overview](https://intl.cloud.tencent.com/document/product/582/13225?from_cn_redirect=1)
     * @param string $NetInterface Network type. Valid values: VPC (VPC), BASIC (basic network)
     * @param string $PGroupId Permission group ID
     * @param string $Protocol File system protocol type. Valid values: NFS, CIFS. If this parameter is left empty, NFS will be used by default
     * @param string $StorageType File system storage class. Valid values: SD (standard), HP (high-performance)
     * @param string $VpcId VPC ID. This field is required if network type is VPC.
     * @param string $SubnetId Subnet ID. This field is required if network type is VPC.
     * @param string $MountIP Specifies an IP address, which is supported only for VPC. If this parameter is left empty, a random IP will be assigned in the subnet
     * @param string $FsName Custom file system name
     * @param array $ResourceTags File system tag
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed. This string is valid for 2 hours.
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
    }
}
