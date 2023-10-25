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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redirection relationship between forwarding rules
 *
 * @method string getSourceLocationId() Obtain Source forwarding rule ID
 * @method void setSourceLocationId(string $SourceLocationId) Set Source forwarding rule ID
 * @method string getTargetLocationId() Obtain ID of the forwarding rule of the destination
 * @method void setTargetLocationId(string $TargetLocationId) Set ID of the forwarding rule of the destination
 * @method integer getRewriteCode() Obtain Redirection status code. Valid values: 301, 302, and 307.
 * @method void setRewriteCode(integer $RewriteCode) Set Redirection status code. Valid values: 301, 302, and 307.
 * @method boolean getTakeUrl() Obtain Whether the matched URL is carried in redirection. It is required when configuring `RewriteCode`.
 * @method void setTakeUrl(boolean $TakeUrl) Set Whether the matched URL is carried in redirection. It is required when configuring `RewriteCode`.
 * @method string getSourceDomain() Obtain Original domain name of redirection, which must be the corresponding domain name of `SourceLocationId`. It is required when configuring `RewriteCode`.
 * @method void setSourceDomain(string $SourceDomain) Set Original domain name of redirection, which must be the corresponding domain name of `SourceLocationId`. It is required when configuring `RewriteCode`.
 */
class RewriteLocationMap extends AbstractModel
{
    /**
     * @var string Source forwarding rule ID
     */
    public $SourceLocationId;

    /**
     * @var string ID of the forwarding rule of the destination
     */
    public $TargetLocationId;

    /**
     * @var integer Redirection status code. Valid values: 301, 302, and 307.
     */
    public $RewriteCode;

    /**
     * @var boolean Whether the matched URL is carried in redirection. It is required when configuring `RewriteCode`.
     */
    public $TakeUrl;

    /**
     * @var string Original domain name of redirection, which must be the corresponding domain name of `SourceLocationId`. It is required when configuring `RewriteCode`.
     */
    public $SourceDomain;

    /**
     * @param string $SourceLocationId Source forwarding rule ID
     * @param string $TargetLocationId ID of the forwarding rule of the destination
     * @param integer $RewriteCode Redirection status code. Valid values: 301, 302, and 307.
     * @param boolean $TakeUrl Whether the matched URL is carried in redirection. It is required when configuring `RewriteCode`.
     * @param string $SourceDomain Original domain name of redirection, which must be the corresponding domain name of `SourceLocationId`. It is required when configuring `RewriteCode`.
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
        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("TargetLocationId",$param) and $param["TargetLocationId"] !== null) {
            $this->TargetLocationId = $param["TargetLocationId"];
        }

        if (array_key_exists("RewriteCode",$param) and $param["RewriteCode"] !== null) {
            $this->RewriteCode = $param["RewriteCode"];
        }

        if (array_key_exists("TakeUrl",$param) and $param["TakeUrl"] !== null) {
            $this->TakeUrl = $param["TakeUrl"];
        }

        if (array_key_exists("SourceDomain",$param) and $param["SourceDomain"] !== null) {
            $this->SourceDomain = $param["SourceDomain"];
        }
    }
}
