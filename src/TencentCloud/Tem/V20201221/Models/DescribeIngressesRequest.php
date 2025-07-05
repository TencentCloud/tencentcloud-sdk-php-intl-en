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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIngresses request structure.
 *
 * @method string getNamespaceId() Obtain namespace id
 * @method void setNamespaceId(string $NamespaceId) Set namespace id
 * @method string getEksNamespace() Obtain namespace
 * @method void setEksNamespace(string $EksNamespace) Set namespace
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method array getNames() Obtain Ingress rule name list.
 * @method void setNames(array $Names) Set Ingress rule name list.
 */
class DescribeIngressesRequest extends AbstractModel
{
    /**
     * @var string namespace id
     */
    public $NamespaceId;

    /**
     * @var string namespace
     */
    public $EksNamespace;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var array Ingress rule name list.
     */
    public $Names;

    /**
     * @param string $NamespaceId namespace id
     * @param string $EksNamespace namespace
     * @param integer $SourceChannel Source channel
     * @param array $Names Ingress rule name list.
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

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }
    }
}
