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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIngress request structure.
 *
 * @method IngressInfo getIngress() Obtain Ingress rule configuration
 * @method void setIngress(IngressInfo $Ingress) Set Ingress rule configuration
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 */
class ModifyIngressRequest extends AbstractModel
{
    /**
     * @var IngressInfo Ingress rule configuration
     */
    public $Ingress;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @param IngressInfo $Ingress Ingress rule configuration
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
        if (array_key_exists("Ingress",$param) and $param["Ingress"] !== null) {
            $this->Ingress = new IngressInfo();
            $this->Ingress->deserialize($param["Ingress"]);
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
