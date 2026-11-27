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
 * DescribeCfsFileSystems request structure.
 *
 * @method string getFileSystemId() Obtain <p>File system ID.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID.</p>
 * @method string getVpcId() Obtain <p>Virtual Private Cloud (VPC) ID.</p>
 * @method void setVpcId(string $VpcId) Set <p>Virtual Private Cloud (VPC) ID.</p>
 * @method string getSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet ID.</p>
 * @method integer getOffset() Obtain <p>Offset for pagination. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset for pagination. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Limit for page size. Default value: 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Limit for page size. Default value: 10.</p>
 * @method string getCreationToken() Obtain <p>User-defined name.</p>
 * @method void setCreationToken(string $CreationToken) Set <p>User-defined name.</p>
 * @method array getFilters() Obtain <p>Filter conditions.<br><br><li>Protocol - Array of String - optional - (Filter condition) Filters by protocol. (NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - optional - (Filter condition) Filters by storage type. (SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - optional - (Filter condition) Filters by lifecycle state. (creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - optional - (Filter condition) Filters by AZ. (For example: ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - optional - (Filter condition) Filters by export point IP address. (For example: 10.0.0.3) </li><br><br><li>PGroupId - Array of String - optional - (Filter condition) Filters by permission group ID. (For example: pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - optional - (Filter condition) Filters by permission group name. (For example: default permission group) </li><br><br><li>Scenario- Array of String - optional - (Filter condition) Filters by permission group name. (For example: AgentSandbox) </li></p>
 * @method void setFilters(array $Filters) Set <p>Filter conditions.<br><br><li>Protocol - Array of String - optional - (Filter condition) Filters by protocol. (NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - optional - (Filter condition) Filters by storage type. (SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - optional - (Filter condition) Filters by lifecycle state. (creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - optional - (Filter condition) Filters by AZ. (For example: ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - optional - (Filter condition) Filters by export point IP address. (For example: 10.0.0.3) </li><br><br><li>PGroupId - Array of String - optional - (Filter condition) Filters by permission group ID. (For example: pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - optional - (Filter condition) Filters by permission group name. (For example: default permission group) </li><br><br><li>Scenario- Array of String - optional - (Filter condition) Filters by permission group name. (For example: AgentSandbox) </li></p>
 * @method array getTags() Obtain <p>Tag.</p>
 * @method void setTags(array $Tags) Set <p>Tag.</p>
 */
class DescribeCfsFileSystemsRequest extends AbstractModel
{
    /**
     * @var string <p>File system ID.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Virtual Private Cloud (VPC) ID.</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Offset for pagination. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Limit for page size. Default value: 10.</p>
     */
    public $Limit;

    /**
     * @var string <p>User-defined name.</p>
     */
    public $CreationToken;

    /**
     * @var array <p>Filter conditions.<br><br><li>Protocol - Array of String - optional - (Filter condition) Filters by protocol. (NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - optional - (Filter condition) Filters by storage type. (SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - optional - (Filter condition) Filters by lifecycle state. (creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - optional - (Filter condition) Filters by AZ. (For example: ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - optional - (Filter condition) Filters by export point IP address. (For example: 10.0.0.3) </li><br><br><li>PGroupId - Array of String - optional - (Filter condition) Filters by permission group ID. (For example: pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - optional - (Filter condition) Filters by permission group name. (For example: default permission group) </li><br><br><li>Scenario- Array of String - optional - (Filter condition) Filters by permission group name. (For example: AgentSandbox) </li></p>
     */
    public $Filters;

    /**
     * @var array <p>Tag.</p>
     */
    public $Tags;

    /**
     * @param string $FileSystemId <p>File system ID.</p>
     * @param string $VpcId <p>Virtual Private Cloud (VPC) ID.</p>
     * @param string $SubnetId <p>Subnet ID.</p>
     * @param integer $Offset <p>Offset for pagination. Default value: 0.</p>
     * @param integer $Limit <p>Limit for page size. Default value: 10.</p>
     * @param string $CreationToken <p>User-defined name.</p>
     * @param array $Filters <p>Filter conditions.<br><br><li>Protocol - Array of String - optional - (Filter condition) Filters by protocol. (NFS | CIFS | TURBO) </li><br><br><li>StorageType - Array of String - optional - (Filter condition) Filters by storage type. (SD | HP | TB | TP | THP) </li><br><br><li>LifeCycleState - Array of String - optional - (Filter condition) Filters by lifecycle state. (creating | create_failed | available | deleting | delete_failed | upgrading | unserviced | expanding) </li><br><br><li>Zone - Array of String - optional - (Filter condition) Filters by AZ. (For example: ap-guangzhou-3) </li><br><br><li>IpAddress - Array of String - optional - (Filter condition) Filters by export point IP address. (For example: 10.0.0.3) </li><br><br><li>PGroupId - Array of String - optional - (Filter condition) Filters by permission group ID. (For example: pgroup-xxxxxrxt) </li><br><br><li>PGroupName - Array of String - optional - (Filter condition) Filters by permission group name. (For example: default permission group) </li><br><br><li>Scenario- Array of String - optional - (Filter condition) Filters by permission group name. (For example: AgentSandbox) </li></p>
     * @param array $Tags <p>Tag.</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
