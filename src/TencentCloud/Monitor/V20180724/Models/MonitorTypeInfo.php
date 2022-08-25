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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring type details
 *
 * @method string getId() Obtain Monitoring type ID
 * @method void setId(string $Id) Set Monitoring type ID
 * @method string getName() Obtain Monitoring type
 * @method void setName(string $Name) Set Monitoring type
 * @method integer getSortId() Obtain Sort order
 * @method void setSortId(integer $SortId) Set Sort order
 */
class MonitorTypeInfo extends AbstractModel
{
    /**
     * @var string Monitoring type ID
     */
    public $Id;

    /**
     * @var string Monitoring type
     */
    public $Name;

    /**
     * @var integer Sort order
     */
    public $SortId;

    /**
     * @param string $Id Monitoring type ID
     * @param string $Name Monitoring type
     * @param integer $SortId Sort order
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }
    }
}
