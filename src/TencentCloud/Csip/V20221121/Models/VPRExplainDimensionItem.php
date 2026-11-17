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
 * Interpret a single tag item in the VPR card
 *
 * @method string getKey() Obtain <p>Tag.</p>
 * @method void setKey(string $Key) Set <p>Tag.</p>
 * @method string getName() Obtain <p>Tag name</p>
 * @method void setName(string $Name) Set <p>Tag name</p>
 * @method string getRemark() Obtain <p>Tag description.</p>
 * @method void setRemark(string $Remark) Set <p>Tag description.</p>
 */
class VPRExplainDimensionItem extends AbstractModel
{
    /**
     * @var string <p>Tag.</p>
     */
    public $Key;

    /**
     * @var string <p>Tag name</p>
     */
    public $Name;

    /**
     * @var string <p>Tag description.</p>
     */
    public $Remark;

    /**
     * @param string $Key <p>Tag.</p>
     * @param string $Name <p>Tag name</p>
     * @param string $Remark <p>Tag description.</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
