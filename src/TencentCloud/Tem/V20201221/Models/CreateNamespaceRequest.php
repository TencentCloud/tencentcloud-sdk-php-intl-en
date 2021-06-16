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
 * CreateNamespace request structure.
 *
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getVpc() Obtain VPC name
 * @method void setVpc(string $Vpc) Set VPC name
 * @method array getSubnetIds() Obtain Subnet list
 * @method void setSubnetIds(array $SubnetIds) Set Subnet list
 * @method string getDescription() Obtain Namespace description
 * @method void setDescription(string $Description) Set Namespace description
 * @method string getK8sVersion() Obtain K8s version
 * @method void setK8sVersion(string $K8sVersion) Set K8s version
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method boolean getEnableTswTraceService() Obtain Whether to enable the TSW service.
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) Set Whether to enable the TSW service.
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string VPC name
     */
    public $Vpc;

    /**
     * @var array Subnet list
     */
    public $SubnetIds;

    /**
     * @var string Namespace description
     */
    public $Description;

    /**
     * @var string K8s version
     */
    public $K8sVersion;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var boolean Whether to enable the TSW service.
     */
    public $EnableTswTraceService;

    /**
     * @param string $NamespaceName Namespace name
     * @param string $Vpc VPC name
     * @param array $SubnetIds Subnet list
     * @param string $Description Namespace description
     * @param string $K8sVersion K8s version
     * @param integer $SourceChannel Source channel
     * @param boolean $EnableTswTraceService Whether to enable the TSW service.
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
        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            $this->K8sVersion = $param["K8sVersion"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }
    }
}
