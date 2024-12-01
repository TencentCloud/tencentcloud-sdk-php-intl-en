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
 * DescribeCfsFileSystems request structure.
 *
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getOffset() Obtain 
 * @method void setOffset(integer $Offset) Set 
 * @method integer getLimit() Obtain 
 * @method void setLimit(integer $Limit) Set 
 * @method string getCreationToken() Obtain 
 * @method void setCreationToken(string $CreationToken) Set 
 */
class DescribeCfsFileSystemsRequest extends AbstractModel
{
    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer 
     */
    public $Offset;

    /**
     * @var integer 
     */
    public $Limit;

    /**
     * @var string 
     */
    public $CreationToken;

    /**
     * @param string $FileSystemId File system ID
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param integer $Offset 
     * @param integer $Limit 
     * @param string $CreationToken 
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
    }
}
