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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Server tag information
 *
 * @method integer getRid() Obtain Associated tag ID
 * @method void setRid(integer $Rid) Set Associated tag ID
 * @method string getName() Obtain Tag name
 * @method void setName(string $Name) Set Tag name
 * @method integer getTagId() Obtain Tag ID
 * @method void setTagId(integer $TagId) Set Tag ID
 */
class MachineTag extends AbstractModel
{
    /**
     * @var integer Associated tag ID
     */
    public $Rid;

    /**
     * @var string Tag name
     */
    public $Name;

    /**
     * @var integer Tag ID
     */
    public $TagId;

    /**
     * @param integer $Rid Associated tag ID
     * @param string $Name Tag name
     * @param integer $TagId Tag ID
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
        if (array_key_exists("Rid",$param) and $param["Rid"] !== null) {
            $this->Rid = $param["Rid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TagId",$param) and $param["TagId"] !== null) {
            $this->TagId = $param["TagId"];
        }
    }
}
