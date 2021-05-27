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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNamespace request structure.
 *
 * @method string getNamespaceId() Obtain Environment ID
 * @method void setNamespaceId(string $NamespaceId) Set Environment ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getDescription() Obtain Namespace description
 * @method void setDescription(string $Description) Set Namespace description
 * @method string getVpc() Obtain VPC name
 * @method void setVpc(string $Vpc) Set VPC name
 * @method array getSubnetIds() Obtain Subnet
 * @method void setSubnetIds(array $SubnetIds) Set Subnet
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 */
class ModifyNamespaceRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $NamespaceId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string Namespace description
     */
    public $Description;

    /**
     * @var string VPC name
     */
    public $Vpc;

    /**
     * @var array Subnet
     */
    public $SubnetIds;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId Environment ID
     * @param string $NamespaceName Namespace name
     * @param string $Description Namespace description
     * @param string $Vpc VPC name
     * @param array $SubnetIds Subnet
     * @param integer $SourceChannel Source channel
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
