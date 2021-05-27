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
 * DescribeIngress request structure.
 *
 * @method string getNamespaceId() Obtain tem namespaceId
 * @method void setNamespaceId(string $NamespaceId) Set tem namespaceId
 * @method string getEksNamespace() Obtain EKS namespace name
 * @method void setEksNamespace(string $EksNamespace) Set EKS namespace name
 * @method string getName() Obtain Ingress rule name
 * @method void setName(string $Name) Set Ingress rule name
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 */
class DescribeIngressRequest extends AbstractModel
{
    /**
     * @var string tem namespaceId
     */
    public $NamespaceId;

    /**
     * @var string EKS namespace name
     */
    public $EksNamespace;

    /**
     * @var string Ingress rule name
     */
    public $Name;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @param string $NamespaceId tem namespaceId
     * @param string $EksNamespace EKS namespace name
     * @param string $Name Ingress rule name
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

        if (array_key_exists("EksNamespace",$param) and $param["EksNamespace"] !== null) {
            $this->EksNamespace = $param["EksNamespace"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
