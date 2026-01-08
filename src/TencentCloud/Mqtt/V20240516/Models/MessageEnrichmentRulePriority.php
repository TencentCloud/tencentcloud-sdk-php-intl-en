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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message enrichment rule priority.
 *
 * @method integer getId() Obtain Message enrichment rule id.
 * @method void setId(integer $Id) Set Message enrichment rule id.
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 */
class MessageEnrichmentRulePriority extends AbstractModel
{
    /**
     * @var integer Message enrichment rule id.
     */
    public $Id;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @param integer $Id Message enrichment rule id.
     * @param integer $Priority Priority
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
