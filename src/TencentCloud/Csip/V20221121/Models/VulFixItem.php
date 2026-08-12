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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability repair item, specify a vulnerability/KB patch and its target host that needs to be repaired.
 *
 * @method array getInstanceIds() Obtain <p>Instance ID list of hosts requiring fixing<br>Input parameter limitation: Up to 1,000 instance IDs per single item</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Instance ID list of hosts requiring fixing<br>Input parameter limitation: Up to 1,000 instance IDs per single item</p>
 * @method integer getVulId() Obtain <p>Vulnerability ID. Choose either VulId or KBId.</p>
 * @method void setVulId(integer $VulId) Set <p>Vulnerability ID. Choose either VulId or KBId.</p>
 * @method integer getKBId() Obtain <p>Patch ID. Choose either VulId or KBId.</p>
 * @method void setKBId(integer $KBId) Set <p>Patch ID. Choose either VulId or KBId.</p>
 */
class VulFixItem extends AbstractModel
{
    /**
     * @var array <p>Instance ID list of hosts requiring fixing<br>Input parameter limitation: Up to 1,000 instance IDs per single item</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>Vulnerability ID. Choose either VulId or KBId.</p>
     */
    public $VulId;

    /**
     * @var integer <p>Patch ID. Choose either VulId or KBId.</p>
     */
    public $KBId;

    /**
     * @param array $InstanceIds <p>Instance ID list of hosts requiring fixing<br>Input parameter limitation: Up to 1,000 instance IDs per single item</p>
     * @param integer $VulId <p>Vulnerability ID. Choose either VulId or KBId.</p>
     * @param integer $KBId <p>Patch ID. Choose either VulId or KBId.</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }
    }
}
