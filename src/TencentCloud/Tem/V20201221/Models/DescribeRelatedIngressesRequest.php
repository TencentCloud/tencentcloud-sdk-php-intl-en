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
 * DescribeRelatedIngresses request structure.
 *
 * @method string getNamespaceId() Obtain Environment ID.
 * @method void setNamespaceId(string $NamespaceId) Set Environment ID.
 * @method string getEksNamespace() Obtain EKS namespace.
 * @method void setEksNamespace(string $EksNamespace) Set EKS namespace.
 * @method integer getSourceChannel() Obtain Source channel.
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel.
 * @method string getServiceId() Obtain Service ID.
 * @method void setServiceId(string $ServiceId) Set Service ID.
 */
class DescribeRelatedIngressesRequest extends AbstractModel
{
    /**
     * @var string Environment ID.
     */
    public $NamespaceId;

    /**
     * @var string EKS namespace.
     */
    public $EksNamespace;

    /**
     * @var integer Source channel.
     */
    public $SourceChannel;

    /**
     * @var string Service ID.
     */
    public $ServiceId;

    /**
     * @param string $NamespaceId Environment ID.
     * @param string $EksNamespace EKS namespace.
     * @param integer $SourceChannel Source channel.
     * @param string $ServiceId Service ID.
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
