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
 * Streamlined info for receiving robot
 *
 * @method integer getID() Obtain Bot ID.
 * @method void setID(integer $ID) Set Bot ID.
 * @method string getName() Obtain Bot name
 * @method void setName(string $Name) Set Bot name
 * @method string getType() Obtain Robot type
Enumeration values:
WEBHOOK: webhook type
SCF: Cloud function type
 * @method void setType(string $Type) Set Robot type
Enumeration values:
WEBHOOK: webhook type
SCF: Cloud function type
 */
class WebhookReceiverBrief extends AbstractModel
{
    /**
     * @var integer Bot ID.
     */
    public $ID;

    /**
     * @var string Bot name
     */
    public $Name;

    /**
     * @var string Robot type
Enumeration values:
WEBHOOK: webhook type
SCF: Cloud function type
     */
    public $Type;

    /**
     * @param integer $ID Bot ID.
     * @param string $Name Bot name
     * @param string $Type Robot type
Enumeration values:
WEBHOOK: webhook type
SCF: Cloud function type
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
