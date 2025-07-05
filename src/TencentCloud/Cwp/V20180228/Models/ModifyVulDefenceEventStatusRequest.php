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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVulDefenceEventStatus request structure.
 *
 * @method array getIds() Obtain Event ID
 * @method void setIds(array $Ids) Set Event ID
 * @method integer getStatus() Obtain 0: pending; 2: processed; 3: ignored; 4: deleted.
 * @method void setStatus(integer $Status) Set 0: pending; 2: processed; 3: ignored; 4: deleted.
 */
class ModifyVulDefenceEventStatusRequest extends AbstractModel
{
    /**
     * @var array Event ID
     */
    public $Ids;

    /**
     * @var integer 0: pending; 2: processed; 3: ignored; 4: deleted.
     */
    public $Status;

    /**
     * @param array $Ids Event ID
     * @param integer $Status 0: pending; 2: processed; 3: ignored; 4: deleted.
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
