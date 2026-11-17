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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMContentRuleStatus request structure.
 *
 * @method integer getStatus() Obtain <p>Status.</p>
 * @method void setStatus(integer $Status) Set <p>Status.</p>
 * @method array getIds() Obtain <p>List of IDs.</p>
 * @method void setIds(array $Ids) Set <p>List of IDs.</p>
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 */
class ModifyLLMContentRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer <p>Status.</p>
     */
    public $Status;

    /**
     * @var array <p>List of IDs.</p>
     */
    public $Ids;

    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @param integer $Status <p>Status.</p>
     * @param array $Ids <p>List of IDs.</p>
     * @param string $Domain <p>Domain name.</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
