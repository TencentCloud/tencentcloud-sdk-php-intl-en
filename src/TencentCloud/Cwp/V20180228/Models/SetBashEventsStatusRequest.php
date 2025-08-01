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
 * SetBashEventsStatus request structure.
 *
 * @method array getIds() Obtain ID array (The maximum number of IDs is 100)
 * @method void setIds(array $Ids) Set ID array (The maximum number of IDs is 100)
 * @method integer getStatus() Obtain New status (0 - pending; 1 - high-risk; 2 - normal)
 * @method void setStatus(integer $Status) Set New status (0 - pending; 1 - high-risk; 2 - normal)
 */
class SetBashEventsStatusRequest extends AbstractModel
{
    /**
     * @var array ID array (The maximum number of IDs is 100)
     */
    public $Ids;

    /**
     * @var integer New status (0 - pending; 1 - high-risk; 2 - normal)
     */
    public $Status;

    /**
     * @param array $Ids ID array (The maximum number of IDs is 100)
     * @param integer $Status New status (0 - pending; 1 - high-risk; 2 - normal)
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
